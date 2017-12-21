@extends('layouts.app')

@section('title', $user->name . '的游记')

@section('content')
    <div class="bg-home text-hide" style="background-image: url({{ imageCut(1920, 500, $user->bg_home) }});">封面</div>
    <div class="bg-white nav-user">
        <div class="container">
            <nav class="nav">
                <a class="nav-link active" href="javascript:void(0);">TA的游记</a>
            </nav>
        </div>
    </div>
    <div class="container clearfix">
        <div class="bg-white home-user float-left">
            <p class="text-center avatar">
                <span class="d-block mb-2">
                    <img class="rounded-circle" src="{{ imageCut(120, 120, $user->avatar) }}" alt="头像" width="120" height="120">
                </span>
                <i class="fa fa-fw fa-lg {{ $user->sex === 'F' ? 'text-primary fa-mercury' : 'text-danger fa-venus' }}"></i>{{ $user->name ?? $user->mobile}}
            </p>
            <p class="bg-light p-3 text-muted">
                <span class="d-block mb-2">现居：{{ $user->province ?? '未知' }} / {{ $user->city ?? '未知' }}</span>
                {{ $user->description ?? '这家伙太懒了，还没有完善个人信息。' }}
            </p>
            <p class="text-center">
                <span class="btn btn-warning text-white btn-sm px-4 btn-follow disabled" data-uid="{{ $user->id }}"><i class="fa fa-plus"></i> 关注</span>
            </p>
            <table class="table table-bordered text-center">
                <tr>
                    <td class="w-50">
                        <b>{{ $user->follows()->count() }}</b>
                        <br>关注
                    </td>
                    <td class="w-50">
                        <b id="fs_count">{{ $user->fans()->count() }}</b>
                        <br>粉丝
                    </td>
                </tr>
            </table>
        </div>
        <div class="bg-white home-travels float-right mt-4">
            <div class="d-flex justify-content-between p-3">
                <h5><span class="text-warning">{{ $user->name ?? $user->mobile}}</span> 的游记</h5>
            </div>
            @foreach($travels as $travel)
                <div class="card">
                    <a href="{{ route('www.travel.show', $travel) }}" target="_blank">
                        <img class="card-img-top" src="{{ imageCut(870, 290, $travel->thumb) }}" alt="{{ $travel->title }}" width="870" height="290">
                    </a>
                    <div class="card-body position-relative">
                        <div class="position-absolute up">
                            <span>{{ $travel->likes_count }}</span>
                            <span class="fa-stack fa-lg btn-dz" data-tid="{{ $travel->id }}">
                                <i class="fa fa-circle fa-stack-2x text-info"></i>
                                <i class="fa fa-thumbs-o-up fa-stack-1x fa-inverse"></i>
                            </span>
                        </div>
                        <h5 class="card-title">
                            <a href="{{ route('www.travel.show', $travel) }}" target="_blank">{{ $travel->title }}</a>
                        </h5>
                        <p class="text-muted">
                            @if($travel->province)<i class="fa fa-fw fa-map-marker"></i>{{ $travel->province }} {{ $travel->city }}@endif
                            <i class="fa fa-fw fa-eye"></i> {{ $travel->click }}
                            <i class="fa fa-fw fa-clock-o"></i>{{ $travel->created_at->toDateString() }}
                        </p>
                        <p class="card-text text-justify">{{ $travel->description }}</p>
                    </div>
                </div>
            @endforeach

            <nav class="d-flex justify-content-center">
                {{ $travels->links() }}
            </nav>
        </div>
    </div>

@endsection

@push('script')
    <script>
        // 点赞
        $('.btn-dz').css('cursor', 'pointer').click(function () {
            let tid = $(this).data('tid');
            axios.post(`{{ url('travel/like') }}/${tid}`).then(res => {
                $(this).prev().text(res.data.likes_count);
            }).catch(err => {

            })
        })

        // 成为粉丝
        $('.btn-follow').css('cursor', 'pointer').click(function () {
            if($(this).hasClass('disabled')){
                return
            }
            let uid = $(this).data('uid');
            axios.post(`{{ url('user/fans') }}/${uid}`).then(res => {
                $('#fs_count').text(res.data.fans_count);
            }).catch(err => {

            })
        })

        let uid = $('.btn-follow').data('uid');
        axios.get(`{{ url('user/fans') }}/${uid}`).then(res => {
            if (!res.data.is_fans) {
                $('.btn-follow').removeClass('disabled')
            }
        }).catch(err => {

        })
    </script>
@endpush