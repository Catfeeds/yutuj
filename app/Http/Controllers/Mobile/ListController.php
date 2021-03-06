<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Leader;
use App\Models\LocList;
use App\Models\Nav;
use App\Models\Raider;
use App\Models\Travel;
use App\Models\Video;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ListController extends Controller
{

    /**
     * 会员的游记列表
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function userTravel(User $user)
    {
        $travels = $user->travels()->withCount('likes')->latest('updated_at')->paginate();

        return view('m.user_travels', compact('user', 'travels'));
    }

    /**
     * 领队列表
     * @param LocList|null $province
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function leaders(LocList $province = null)
    {
        $data = Cache::remember('m' . request()->fullUrl(), 5, function () use ($province) {
            $arr['leaders'] = $province ?
                $province->provinceLeaders()->select('id', 'name', 'avatar', 'brief', 'country_id', 'province_id', 'city_id')->latest('updated_at')->get()
                : Leader::with('country', 'province', 'city')->latest('updated_at')->get(['id', 'name', 'avatar', 'brief', 'country_id', 'province_id', 'city_id']);

            $arr['provinces'] = LocList::has('provinceLeaders')->get(['id', 'name']);
            return $arr;
        });
        return view('m.list_leader', $data)->with('province', $province);
    }

    /**
     * 攻略列表
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function raiders(Request $request)
    {
        $data = Cache::remember('m' . $request->fullUrl(), 5, function () use ($request) {
            $this->validate($request, [
                'field' => 'nullable|in:id,click,created_at',
                'order' => 'nullable|in:asc,desc',
                'pid' => 'nullable|integer|exists:raiders,province_id',
                'cid' => 'nullable|integer|exists:raiders,city_id',
                'type' => 'nullable|string|in:default,line,food,hospital,scenic',
            ]);

            $field = $request->field ?: 'id';
            $order = $request->order ?: 'desc';

            $arr['raiders'] = Raider::with('province', 'city', 'admin')
                ->where(function ($query) use ($request) {
                    if ($pid = $request->get('pid')) {
                        $query->where('province_id', $pid);
                    }
                    if ($cid = $request->get('cid')) {
                        $query->where('city_id', $cid);
                    }
                })
                ->type($request->get('type'))
                ->withCount('likes')
                ->orderBy($field, $order)
                ->paginate(6, ['id', 'type', 'title', 'description', 'thumb', 'click', 'province_id', 'city_id', 'created_at']);
            $arr['provinces'] = LocList::whereHas('provinceRaiders', function ($query) use ($request) {
                $query->type($request->get('type'));
            })->get(['id', 'name']);

            $arr['cities'] = LocList::where(function ($query) use ($request) {
                if ($pid = $request->get('pid')) {
                    $query->where('parent_id', $pid);
                }
            })->whereHas('cityRaiders', function ($query) use ($request) {
                $query->type($request->get('type'));
            })->get(['id', 'name']);
            return $arr;
        });
        return view('m.list_raider', $data);
    }

    /**
     * 活动列表
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function activity(Request $request)
    {
        $data = Cache::remember('m' . $request->fullUrl(), 5, function () use ($request) {
            $this->validate($request, [
                'field' => 'nullable|in:id,price,created_at',
                'order' => 'nullable|in:asc,desc',
                'pid' => 'nullable|integer|exists:activities,province_id',
                'cid' => 'nullable|integer|exists:activities,city_id',
                'nid' => 'nullable|integer|exists:navs,id',
                'day' => 'nullable|integer',
            ]);

            $field = $request->field ?: 'id';
            $order = $request->order ?: 'desc';

            $arr['activities'] = Activity::where(function ($query) use ($request) {
                if ($pid = $request->pid) {
                    $query->where('province_id', $pid);
                }
                if ($cid = $request->cid) {
                    $query->where('city_id', $cid);
                }
                if ($min = $request->input('price.min')) {
                    $query->where('price', '>=', $min);
                }
                if ($max = $request->input('price.max')) {
                    $query->where('price', '<=', $max);
                }
                if ($nid = $request->nid) {
                    $query->whereHas('navs', function ($query) use ($nid) {
                        $query->where('id', $nid);
                    });
                }
                if ($day = $request->day) {
                    $query->has('trips', $day > 10 ? '>' : '=', $day);
                }
            })
                ->orderBy($field, $order)
                ->paginate(6, ['id', 'title', 'description', 'thumb', 'price', 'province_id', 'city_id']);

            $arr['provinces'] = LocList::whereHas('provinceActivities', function ($query) use ($request) {
                $query->active();
                if ($nid = $request->nid) {
                    $query->whereHas('navs', function ($query) use ($nid) {
                        $query->where('id', $nid);
                    });
                }
            })->get(['id', 'name']);

            $arr['cities'] = LocList::where(function ($query) use ($request) {
                if ($pid = $request->pid) {
                    $query->where('parent_id', $pid);
                }
            })->whereHas('cityActivities', function ($query) use ($request) {
                $query->active();
                if ($nid = $request->nid) {
                    $query->whereHas('navs', function ($query) use ($nid) {
                        $query->where('id', $nid);
                    });
                }
            })->get(['id', 'name']);
            return $arr;
        });
        return view('m.list_activity', $data);
    }

    /**
     * 游记列表
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function travel(Request $request)
    {
        $data = Cache::remember('m' . $request->fullUrl(), 5, function () use ($request) {
            $this->validate($request, [
                'field' => 'nullable|in:id,click,created_at',
                'order' => 'nullable|in:asc,desc',
                'province' => 'nullable|string|exists:travels',
                'city' => 'nullable|string|exists:travels',
            ]);

            $field = $request->field ?: 'id';
            $order = $request->order ?: 'desc';

            $arr['travels'] = Travel::status('adopt')
                ->with('user')
                ->withCount('likes')
                ->orderBy($field, $order)
                ->where(function ($query) use ($request) {
                    if ($province = $request->province) {
                        $query->where('province', $province);
                    }
                    if ($city = $request->city) {
                        $query->where('city', $city);
                    }
                })->paginate();

            $arr['provinces'] = Travel::status('adopt')->whereNotNull('province')->distinct()->get(['province as title']);
            $arr['cities'] = Travel::status('adopt')->whereNotNull('city')->where(function ($query) use ($request) {
                if ($province = $request->province) {
                    $names = LocList::province()->where('name', $province)->first()->children->pluck('name');
                    $query->whereIn('city', $names);
                }
            })->distinct()->get(['city as title']);
            return $arr;
        });
        return view('m.list_travels', $data);
    }

    /**
     * 视频列表
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function video(Request $request)
    {
        $data = Cache::remember('m' . $request->fullUrl(), 5, function () use ($request) {
            $this->validate($request, [
                'type' => 'nullable|in:film,live',
                'order' => 'nullable|string|in:click,created_at,updated_at',
            ]);

            $type = $request->type ?: 'film';
            $order = $request->order ?: 'id';

            $arr['videos'] = Video::with('province')
                ->active()
                ->type($type)
                ->where(function ($query) use ($request) {
                    if ($pid = $request->pid) {
                        $query->where('province_id', $pid);
                    }
                })
                ->latest($order)
                ->paginate(6);

            $arr['provinces'] = LocList::whereHas('provinceVideos', function ($query) use ($type) {
                $query->active()->type($type);
            })->get(['id', 'name']);

            return $arr;
        });
        return view('m.list_video', $data);
    }

    // 搜索页面
    public function search(Request $request)
    {
        $keyword = $request->get('q');
        if (!$keyword) {
            return back();
        }

        $s = request()->get('s', 'activity');
        $arr['navs'] = Nav::all();
        switch ($s) {
            case 'raider':
                $arr['raiders'] = Raider::with('admin', 'province')
                    ->withCount('likes')
                    ->whereRaw('match (title, description) against(?)', $keyword)
                    ->where(function ($query) {
                        if ($pid = request('pid')) {
                            $query->where('province_id', $pid);
                        }
                        if ($r = request('r')) {
                            $query->where('type', $r);
                        }
                    })
                    ->latest()
                    ->paginate(6, ['id', 'title', 'thumb', 'description', 'click', 'type', 'province_id', 'created_at']);
                break;

            case 'video':
                $arr['videos'] = Video::whereRaw('match (title, description) against(?)', $keyword)
                    ->where(function ($query) {
                        if ($pid = request('pid')) {
                            $query->where('province_id', $pid);
                        }
                    })
                    ->type(request('v'))
                    ->active()
                    ->latest()
                    ->paginate(6);
                break;

            case 'travel':
                $arr['travels'] = Travel::with('user')
                    ->withCount('likes')
                    ->whereRaw('match (title, description) against(?)', $keyword)
                    ->status('adopt')
                    ->latest()
                    ->paginate(6, ['id', 'title', 'description', 'thumb']);
                break;

            default :
                $arr['activities'] = Activity::with('tags', 'province')
                    ->whereRaw('match (title, description) against(?)', $keyword)
                    ->where(function ($query) {
                        if ($pid = request('pid')) {
                            $query->where('province_id', $pid);
                        }
                        if ($nid = request('nid')) {
                            $query->whereHas('navs', function ($query) use ($nid) {
                                $query->where('id', $nid);
                            });
                        }
                    })
                    ->active()
                    ->latest()
                    ->paginate(6, ['id', 'title', 'thumb', 'price', 'description', 'province_id']);
        }

        return view('m.search', $arr);
    }

}
