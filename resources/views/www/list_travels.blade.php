@extends('layouts.app')

@section('title', implode('-', Request::only('province', 'city')) . '游记')

@section('content')
    <div class="container">
        <div id="banner" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#banner" data-slide-to="0" class="active"></li>
                <li data-target="#banner" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('uploads/d/banner_travels_1.jpg') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('uploads/d/banner_travels_1.jpg') }}" alt="Second slide">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="py-4"><a href="{{ url('/') }}">首页</a> &gt; <span class="text-warning">游记</span></div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-8" id="load">
                <div class="bg-white mb-2 py-3 list-param">
                    <div class="row px-3">
                        <div class="col-1 text-nowrap">区域</div>
                        <div class="col-10 text-truncate">
                            <a href="{{ route('travel.list') }}" @empty(request('province'))class="active"@endempty>全部</a>
                            @foreach($provinces as $province)
                                <a href="{{ route('travel.list', ['province' => $province->title]) }}" @if(request('province') === $province->title) class="active" @endif>{{ $province->title }}</a>
                            @endforeach
                        </div>

                        @if(count($provinces) >= 12)
                            <div class="col-1 text-nowrap">
                                <span class="text-warning">更多 <i class="fa fa-angle-down"></i></span>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="bg-white py-3 list-param">
                    <div class="row px-3">
                        <div class="col-1 text-nowrap">目的地</div>
                        <div class="col-10 text-truncate">
                            <a href="{{ route('travel.list', Request::only('province')) }}" @empty(request('city'))class="active"@endempty>全部</a>
                            @foreach($cities as $city)
                                <a href="{{ route('travel.list', array_merge(Request::only('province'), ['city' => $city->title])) }}" @if(request('city') === $city->title)class="active"@endif>{{ $city->title }}</a>
                            @endforeach
                        </div>

                        @if(count($cities) >= 12)
                            <div class="col-1 text-nowrap">
                                <span class="text-warning">更多 <i class="fa fa-angle-down"></i></span>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="bg-white list-orderBy py-2 my-2">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link {{ request('field', 'id') === 'id' ? 'active' : '' }}" href="{{ route('travel.list', array_merge(Request::only('province', 'city'), ['field' => 'id', 'order' => request('field', 'id') == 'id' &&  request('order', 'desc') === 'desc' ? 'asc' : 'desc'])) }}">综合排序 <i class="fa fa-angle-{{  request('field', 'id') === 'id' && request('order', 'desc') === 'desc' ? 'down' : 'up' }}"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request('field') === 'click' ? 'active' : '' }}" href="{{ route('travel.list', array_merge(Request::only('province', 'city'), ['field' => 'click', 'order' => request('field') == 'click' &&  request('order') === 'desc' ? 'asc' : 'desc'])) }}">热门度 <i class="fa fa-angle-{{  request('field') == 'click' && request('order') === 'desc' ? 'down' : 'up' }}"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request('field') === 'created_at' ? 'active' : '' }}" href="{{ route('travel.list', array_merge(Request::only('province', 'city'), ['field' => 'created_at', 'order' => request('field') == 'created_at' &&  request('order') === 'desc' ? 'asc' : 'desc'])) }}">发布时间 <i class="fa fa-angle-{{ request('field') == 'created_at' &&  request('order') === 'desc' ? 'down' : 'up' }}"></i></a>
                        </li>
                    </ul>
                </div>

                <div class="bg-white p-3 my-2 list-media">
                    @foreach($travels as $travel)
                        <div class="media">
                            <a href="{{ route('travel.show', $travel) }}" target="_blank">
                                <img class="mr-3" src="{{ imageCut(280, 180, $travel->thumb) }}" alt="{{ $travel->title }}" width="280" height="180">
                            </a>
                            <div class="media-body">
                                <a href="{{ route('travel.show', $travel) }}" class="text-warning d-block h5" target="_blank">{{ str_limit($travel->title, 80) }}</a>
                                <p class="text-muted">
                                    <small>{{ str_limit($travel->description, 280) }}</small>
                                </p>
                                <p class="text-muted small">
                                    @if($travel->province)
                                        <span class="mr-3"><i class="fa fa-fw fa-map-marker"></i>{{ $travel->province }} {{ $travel->city }}</span>
                                    @endif
                                    <span class="mr-3"><i class="fa fa-fw fa-eye"></i>{{ $travel->click }}</span>
                                    <span class="mr-3"><i class="fa fa-fw fa-thumbs-o-up"></i>{{ $travel->likes_count }}</span>
                                    <span class="mr-3"><i class="fa fa-fw fa-user"></i>{{ $travel->user->name }}</span>
                                    <span class="mr-3"><i class="fa fa-fw fa-clock-o"></i>{{ $travel->created_at->toDateString() }}</span>
                                </p>
                            </div>
                        </div>
                    @endforeach

                    <nav class="d-flex justify-content-end pt-4">
                        {{ $travels->appends(Request::only( 'province', 'city', 'field', 'order'))->links() }}
                    </nav>
                </div>
            </div>
            <div class="col-4 pl-0">
                @include('www.right')
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        (function ($) {
            // 筛选 显示更多
            $('#load').on('click', '.list-param span', function () {
                $(this).children().toggleClass('fa-flip-vertical')
                $(this).parent().prev().toggleClass('text-truncate')
            })

            // 异步加载
            $(document).on('click', '.list-param a, .list-orderBy a, ul.pagination a', function (event) {
                event.preventDefault()
                let url = $(this).attr('href') + ' #load > div'
                $('#load').load(url, function () {
                    $('body,html').animate({scrollTop: $(this).offset().top}, 500)
                })
            })
        })(jQuery);
    </script>
@endpush