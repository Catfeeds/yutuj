<nav class="nav">
    <a class="nav-link {{ Route::currentRouteName() === 'home' ?: 'active' }}" href="{{ route('travel.index') }}">我的游记</a>
    <a class="nav-link" href="{{ url('home/message') }}">我的消息</a>
    <a class="nav-link" href="{{ url('home/order') }}">我的订单</a>
    <a class="nav-link" href="{{ url('home/setting') }}">设置中心</a>
</nav>