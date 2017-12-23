<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Result</title>
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/vue/2.5.9/vue.js"></script>
    <script src="https://cdn.bootcss.com/axios/0.17.1/axios.min.js"></script>
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/4.0.0-beta.2/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/css.css">
    <script src="js/bing.js"></script>
</head>
<body>
<header class="bg-white">
    <div class="container">
        <nav class="navbar navbar-expand navbar-light top-nav">
            <a class="navbar-brand" href="#">
                <img src="img/logo_top.png" width="148" height="50" alt="top_logo">
            </a>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">首页 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        旅行
                    </a>
                    <div class="dropdown-menu rounded-0 other-down">
                        <a class="dropdown-item" href="#"><i class="fa fa-fw fa-map-marker"></i> 纵横西部</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-fw fa-paw"></i> 西行漫游</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-fw fa-photo"></i> 超级周末</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-fw fa-institution"></i> 最6旅行</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">定制游</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">活动</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">攻略</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">游记</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">大咖领路</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">旅拍直播</a>
                </li>
            </ul>
            <form class="form-inline mr-4 top-search">
                <div class="input-group">
                    <div class="input-group-btn">
                        <button type="button" class="btn dropdown-toggle down" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            四川
                        </button>
                        <div class="dropdown-menu rounded-0 other-down no-line">
                            <a class="dropdown-item" href="#">不限</a>
                            <a class="dropdown-item" href="#">四川</a>
                            <a class="dropdown-item" href="#">青海</a>
                            <a class="dropdown-item" href="#">西藏</a>
                            <a class="dropdown-item" href="#">新疆</a>
                            <a class="dropdown-item" href="#">内蒙古</a>
                            <a class="dropdown-item" href="#">陕甘宁</a>
                        </div>
                    </div>
                    <input type="text" class="form-control" placeholder="搜目的地/攻略/游记" style="border-right: none">
                    <button type="submit" class="input-group-addon submit"><i class="fa fa-search text-warning fa-lg"></i></button>
                </div>
            </form>
            <div class="user-info">
                <!--<a href="auth/login.html" class="text-warning">登录</a> | <a href="auth/register.html" class="text-warning">注册</a>-->

                <div data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor:pointer;">
                    <img class="rounded-circle" src="https://vuejs.bootcss.com/images/logo.png" alt="头像" width="36" height="36"> Bing8u...
                </div>
                <div class="dropdown">
                    <div class="dropdown-menu rounded-0 other-down">
                        <a class="dropdown-item" href="home/setting.html"><i class="fa fa-fw fa-user"></i> 个人中心</a>
                        <a class="dropdown-item" href="home/order.html"><i class="fa fa-fw fa-list-alt"></i> 我的订单</a>
                        <a class="dropdown-item" href="home/home.html"><i class="fa fa-fw fa-book"></i> 我的游记</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-fw fa-sign-out"></i> 退出</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>

<div class="container">
    <div class="py-4"><a href="index.html">首页</a> &gt; <span class="text-warning">搜索“成都”</span></div>
</div>

<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="bg-white p-3 mb-4 list-media">
                <ul class="nav" style="margin-left: -15px;">
                    <li class="nav-item">
                        <a href="javascript:void(0);" class="nav-link active">活动线路</a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0);" class="nav-link">纵横西部</a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0);" class="nav-link">微上西部</a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0);" class="nav-link">超级周末</a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0);" class="nav-link">最6旅行</a>
                    </li>
                </ul>
                <hr class="mt-0">
                <div class="media">
                    <div class="mr-3 position-relative">
                        <a href="activity.blade.php"><img src="uploads/list_pic.jpg" alt="Generic placeholder image" width="280" height="180"></a>
                        <span class="bg-warning text-white text-center p-1 position-absolute day">
                        <b>1</b> <br>DAY
                    </span>
                    </div>
                    <div class="media-body">
                        <a href="activity.blade.php" class="text-warning d-block">
                            <h3>漫步老成都</h3>
                            <h5>微服私访入蓉城，一街一尘皆故事</h5>
                        </a>
                        <p class="pt-2">
                            <span class="text-info pr-3">行程</span>
                            人民公园—宽窄巷子—奎星楼—锦里—东郊记忆—成都博物馆—望江楼公园
                        </p>
                        <p class="text-muted">
                            <small>如今，当你走在琴台路上，在那块块铺路石上，你依稀可以看到司马相如和卓文君为追求自由爱情，冲破封建枷锁而私奔的脚印，依稀可以看到卓文君和司马相如的那段文君当垆的故事，琴台路上的那架古琴，仿佛仍然在演奏着《凤求凰》，那低沉婉转的琴声，在天府之国的上空飘荡，他们那段浪漫的爱情故事，传颂了千年百年。</small>
                        </p>
                        <h5 class="d-flex justify-content-between">
                            <a href="javascript:void(0);" class="btn-fatuan text-info">出团日期 <i class="fa fa-lg fa-caret-down"></i></a>
                            <span>￥360/人</span>
                        </h5>
                        <div class="list-fatuan d-none">
                            <table class="table text-nowrap ">
                                <tr>
                                    <td class="align-middle">017-12-03 - 2017-12-03</td>
                                    <td class="align-middle text-muted">已报名 33 人</td>
                                    <td class="align-middle text-danger">360元/人</td>
                                    <td class="align-middle text-right"><a href="#" class="btn btn-warning text-white btn-sm rounded-0">去报名</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">017-12-03 - 2017-12-03</td>
                                    <td class="align-middle text-muted">已报名 33 人</td>
                                    <td class="align-middle text-danger">360元/人</td>
                                    <td class="align-middle text-right"><a href="#" class="btn btn-warning text-white btn-sm rounded-0">去报名</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">017-12-03 - 2017-12-03</td>
                                    <td class="align-middle text-muted">已报名 33 人</td>
                                    <td class="align-middle text-danger">360元/人</td>
                                    <td class="align-middle text-right"><a href="#" class="btn btn-warning text-white btn-sm rounded-0">去报名</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">017-12-03 - 2017-12-03</td>
                                    <td class="align-middle text-muted">已报名 33 人</td>
                                    <td class="align-middle text-danger">360元/人</td>
                                    <td class="align-middle text-right"><a href="#" class="btn btn-warning text-white btn-sm rounded-0">去报名</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">017-12-03 - 2017-12-03</td>
                                    <td class="align-middle text-muted">已报名 33 人</td>
                                    <td class="align-middle text-danger">360元/人</td>
                                    <td class="align-middle text-right"><a href="#" class="btn btn-warning text-white btn-sm rounded-0">去报名</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">017-12-03 - 2017-12-03</td>
                                    <td class="align-middle text-muted">已报名 33 人</td>
                                    <td class="align-middle text-danger">360元/人</td>
                                    <td class="align-middle text-right"><a href="#" class="btn btn-warning text-white btn-sm rounded-0">去报名</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">017-12-03 - 2017-12-03</td>
                                    <td class="align-middle text-muted">已报名 33 人</td>
                                    <td class="align-middle text-danger">360元/人</td>
                                    <td class="align-middle text-right"><a href="#" class="btn btn-warning text-white btn-sm rounded-0">去报名</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">017-12-03 - 2017-12-03</td>
                                    <td class="align-middle text-muted">已报名 33 人</td>
                                    <td class="align-middle text-danger">360元/人</td>
                                    <td class="align-middle text-right"><a href="#" class="btn btn-warning text-white btn-sm rounded-0">去报名</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">017-12-03 - 2017-12-03</td>
                                    <td class="align-middle text-muted">已报名 33 人</td>
                                    <td class="align-middle text-danger">360元/人</td>
                                    <td class="align-middle text-right"><a href="#" class="btn btn-warning text-white btn-sm rounded-0">去报名</a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="media">
                    <div class="mr-3 position-relative">
                        <a href="activity.blade.php"><img src="uploads/list_pic.jpg" alt="Generic placeholder image" width="280" height="180"></a>
                        <span class="bg-warning text-white text-center p-1 position-absolute day">
                        <b>1</b> <br>DAY
                    </span>
                    </div>
                    <div class="media-body">
                        <a href="activity.blade.php" class="text-warning d-block">
                            <h3>漫步老成都</h3>
                            <h5>微服私访入蓉城，一街一尘皆故事</h5>
                        </a>
                        <p class="pt-2">
                            <span class="text-info pr-3">行程</span>
                            人民公园—宽窄巷子—奎星楼—锦里—东郊记忆—成都博物馆—望江楼公园
                        </p>
                        <p class="text-muted">
                            <small>如今，当你走在琴台路上，在那块块铺路石上，你依稀可以看到司马相如和卓文君为追求自由爱情，冲破封建枷锁而私奔的脚印，依稀可以看到卓文君和司马相如的那段文君当垆的故事，琴台路上的那架古琴，仿佛仍然在演奏着《凤求凰》，那低沉婉转的琴声，在天府之国的上空飘荡，他们那段浪漫的爱情故事，传颂了千年百年。</small>
                        </p>
                        <h5 class="d-flex justify-content-between">
                            <a href="javascript:void(0);" class="btn-fatuan text-info">出团日期 <i class="fa fa-lg fa-caret-down"></i></a>
                            <span>￥360/人</span>
                        </h5>
                        <div class="list-fatuan d-none">
                            <table class="table text-nowrap ">
                                <tr>
                                    <td class="align-middle">017-12-03 - 2017-12-03</td>
                                    <td class="align-middle text-muted">已报名 33 人</td>
                                    <td class="align-middle text-danger">360元/人</td>
                                    <td class="align-middle text-right"><a href="#" class="btn btn-warning text-white btn-sm rounded-0">去报名</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">017-12-03 - 2017-12-03</td>
                                    <td class="align-middle text-muted">已报名 33 人</td>
                                    <td class="align-middle text-danger">360元/人</td>
                                    <td class="align-middle text-right"><a href="#" class="btn btn-warning text-white btn-sm rounded-0">去报名</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">017-12-03 - 2017-12-03</td>
                                    <td class="align-middle text-muted">已报名 33 人</td>
                                    <td class="align-middle text-danger">360元/人</td>
                                    <td class="align-middle text-right"><a href="#" class="btn btn-warning text-white btn-sm rounded-0">去报名</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">017-12-03 - 2017-12-03</td>
                                    <td class="align-middle text-muted">已报名 33 人</td>
                                    <td class="align-middle text-danger">360元/人</td>
                                    <td class="align-middle text-right"><a href="#" class="btn btn-warning text-white btn-sm rounded-0">去报名</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">017-12-03 - 2017-12-03</td>
                                    <td class="align-middle text-muted">已报名 33 人</td>
                                    <td class="align-middle text-danger">360元/人</td>
                                    <td class="align-middle text-right"><a href="#" class="btn btn-warning text-white btn-sm rounded-0">去报名</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">017-12-03 - 2017-12-03</td>
                                    <td class="align-middle text-muted">已报名 33 人</td>
                                    <td class="align-middle text-danger">360元/人</td>
                                    <td class="align-middle text-right"><a href="#" class="btn btn-warning text-white btn-sm rounded-0">去报名</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">017-12-03 - 2017-12-03</td>
                                    <td class="align-middle text-muted">已报名 33 人</td>
                                    <td class="align-middle text-danger">360元/人</td>
                                    <td class="align-middle text-right"><a href="#" class="btn btn-warning text-white btn-sm rounded-0">去报名</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">017-12-03 - 2017-12-03</td>
                                    <td class="align-middle text-muted">已报名 33 人</td>
                                    <td class="align-middle text-danger">360元/人</td>
                                    <td class="align-middle text-right"><a href="#" class="btn btn-warning text-white btn-sm rounded-0">去报名</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">017-12-03 - 2017-12-03</td>
                                    <td class="align-middle text-muted">已报名 33 人</td>
                                    <td class="align-middle text-danger">360元/人</td>
                                    <td class="align-middle text-right"><a href="#" class="btn btn-warning text-white btn-sm rounded-0">去报名</a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="media">
                    <div class="mr-3 position-relative">
                        <a href="activity.blade.php"><img src="uploads/list_pic.jpg" alt="Generic placeholder image" width="280" height="180"></a>
                        <span class="bg-warning text-white text-center p-1 position-absolute day">
                        <b>1</b> <br>DAY
                    </span>
                    </div>
                    <div class="media-body">
                        <a href="activity.blade.php" class="text-warning d-block">
                            <h3>漫步老成都</h3>
                            <h5>微服私访入蓉城，一街一尘皆故事</h5>
                        </a>
                        <p class="pt-2">
                            <span class="text-info pr-3">行程</span>
                            人民公园—宽窄巷子—奎星楼—锦里—东郊记忆—成都博物馆—望江楼公园
                        </p>
                        <p class="text-muted">
                            <small>如今，当你走在琴台路上，在那块块铺路石上，你依稀可以看到司马相如和卓文君为追求自由爱情，冲破封建枷锁而私奔的脚印，依稀可以看到卓文君和司马相如的那段文君当垆的故事，琴台路上的那架古琴，仿佛仍然在演奏着《凤求凰》，那低沉婉转的琴声，在天府之国的上空飘荡，他们那段浪漫的爱情故事，传颂了千年百年。</small>
                        </p>
                        <h5 class="d-flex justify-content-between">
                            <a href="javascript:void(0);" class="btn-fatuan text-info">出团日期 <i class="fa fa-lg fa-caret-down"></i></a>
                            <span>￥360/人</span>
                        </h5>
                        <div class="list-fatuan d-none">
                            <table class="table text-nowrap ">
                                <tr>
                                    <td class="align-middle">017-12-03 - 2017-12-03</td>
                                    <td class="align-middle text-muted">已报名 33 人</td>
                                    <td class="align-middle text-danger">360元/人</td>
                                    <td class="align-middle text-right"><a href="#" class="btn btn-warning text-white btn-sm rounded-0">去报名</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">017-12-03 - 2017-12-03</td>
                                    <td class="align-middle text-muted">已报名 33 人</td>
                                    <td class="align-middle text-danger">360元/人</td>
                                    <td class="align-middle text-right"><a href="#" class="btn btn-warning text-white btn-sm rounded-0">去报名</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">017-12-03 - 2017-12-03</td>
                                    <td class="align-middle text-muted">已报名 33 人</td>
                                    <td class="align-middle text-danger">360元/人</td>
                                    <td class="align-middle text-right"><a href="#" class="btn btn-warning text-white btn-sm rounded-0">去报名</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">017-12-03 - 2017-12-03</td>
                                    <td class="align-middle text-muted">已报名 33 人</td>
                                    <td class="align-middle text-danger">360元/人</td>
                                    <td class="align-middle text-right"><a href="#" class="btn btn-warning text-white btn-sm rounded-0">去报名</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">017-12-03 - 2017-12-03</td>
                                    <td class="align-middle text-muted">已报名 33 人</td>
                                    <td class="align-middle text-danger">360元/人</td>
                                    <td class="align-middle text-right"><a href="#" class="btn btn-warning text-white btn-sm rounded-0">去报名</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">017-12-03 - 2017-12-03</td>
                                    <td class="align-middle text-muted">已报名 33 人</td>
                                    <td class="align-middle text-danger">360元/人</td>
                                    <td class="align-middle text-right"><a href="#" class="btn btn-warning text-white btn-sm rounded-0">去报名</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">017-12-03 - 2017-12-03</td>
                                    <td class="align-middle text-muted">已报名 33 人</td>
                                    <td class="align-middle text-danger">360元/人</td>
                                    <td class="align-middle text-right"><a href="#" class="btn btn-warning text-white btn-sm rounded-0">去报名</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">017-12-03 - 2017-12-03</td>
                                    <td class="align-middle text-muted">已报名 33 人</td>
                                    <td class="align-middle text-danger">360元/人</td>
                                    <td class="align-middle text-right"><a href="#" class="btn btn-warning text-white btn-sm rounded-0">去报名</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">017-12-03 - 2017-12-03</td>
                                    <td class="align-middle text-muted">已报名 33 人</td>
                                    <td class="align-middle text-danger">360元/人</td>
                                    <td class="align-middle text-right"><a href="#" class="btn btn-warning text-white btn-sm rounded-0">去报名</a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="media">
                    <div class="mr-3 position-relative">
                        <a href="activity.blade.php"><img src="uploads/list_pic.jpg" alt="Generic placeholder image" width="280" height="180"></a>
                        <span class="bg-warning text-white text-center p-1 position-absolute day">
                        <b>1</b> <br>DAY
                    </span>
                    </div>
                    <div class="media-body">
                        <a href="activity.blade.php" class="text-warning d-block">
                            <h3>漫步老成都</h3>
                            <h5>微服私访入蓉城，一街一尘皆故事</h5>
                        </a>
                        <p class="pt-2">
                            <span class="text-info pr-3">行程</span>
                            人民公园—宽窄巷子—奎星楼—锦里—东郊记忆—成都博物馆—望江楼公园
                        </p>
                        <p class="text-muted">
                            <small>如今，当你走在琴台路上，在那块块铺路石上，你依稀可以看到司马相如和卓文君为追求自由爱情，冲破封建枷锁而私奔的脚印，依稀可以看到卓文君和司马相如的那段文君当垆的故事，琴台路上的那架古琴，仿佛仍然在演奏着《凤求凰》，那低沉婉转的琴声，在天府之国的上空飘荡，他们那段浪漫的爱情故事，传颂了千年百年。</small>
                        </p>
                        <h5 class="d-flex justify-content-between">
                            <a href="javascript:void(0);" class="btn-fatuan text-info">出团日期 <i class="fa fa-lg fa-caret-down"></i></a>
                            <span>￥360/人</span>
                        </h5>
                        <div class="list-fatuan d-none">
                            <table class="table text-nowrap ">
                                <tr>
                                    <td class="align-middle">017-12-03 - 2017-12-03</td>
                                    <td class="align-middle text-muted">已报名 33 人</td>
                                    <td class="align-middle text-danger">360元/人</td>
                                    <td class="align-middle text-right"><a href="#" class="btn btn-warning text-white btn-sm rounded-0">去报名</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">017-12-03 - 2017-12-03</td>
                                    <td class="align-middle text-muted">已报名 33 人</td>
                                    <td class="align-middle text-danger">360元/人</td>
                                    <td class="align-middle text-right"><a href="#" class="btn btn-warning text-white btn-sm rounded-0">去报名</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">017-12-03 - 2017-12-03</td>
                                    <td class="align-middle text-muted">已报名 33 人</td>
                                    <td class="align-middle text-danger">360元/人</td>
                                    <td class="align-middle text-right"><a href="#" class="btn btn-warning text-white btn-sm rounded-0">去报名</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">017-12-03 - 2017-12-03</td>
                                    <td class="align-middle text-muted">已报名 33 人</td>
                                    <td class="align-middle text-danger">360元/人</td>
                                    <td class="align-middle text-right"><a href="#" class="btn btn-warning text-white btn-sm rounded-0">去报名</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">017-12-03 - 2017-12-03</td>
                                    <td class="align-middle text-muted">已报名 33 人</td>
                                    <td class="align-middle text-danger">360元/人</td>
                                    <td class="align-middle text-right"><a href="#" class="btn btn-warning text-white btn-sm rounded-0">去报名</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">017-12-03 - 2017-12-03</td>
                                    <td class="align-middle text-muted">已报名 33 人</td>
                                    <td class="align-middle text-danger">360元/人</td>
                                    <td class="align-middle text-right"><a href="#" class="btn btn-warning text-white btn-sm rounded-0">去报名</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">017-12-03 - 2017-12-03</td>
                                    <td class="align-middle text-muted">已报名 33 人</td>
                                    <td class="align-middle text-danger">360元/人</td>
                                    <td class="align-middle text-right"><a href="#" class="btn btn-warning text-white btn-sm rounded-0">去报名</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">017-12-03 - 2017-12-03</td>
                                    <td class="align-middle text-muted">已报名 33 人</td>
                                    <td class="align-middle text-danger">360元/人</td>
                                    <td class="align-middle text-right"><a href="#" class="btn btn-warning text-white btn-sm rounded-0">去报名</a></td>
                                </tr>
                                <tr>
                                    <td class="align-middle">017-12-03 - 2017-12-03</td>
                                    <td class="align-middle text-muted">已报名 33 人</td>
                                    <td class="align-middle text-danger">360元/人</td>
                                    <td class="align-middle text-right"><a href="#" class="btn btn-warning text-white btn-sm rounded-0">去报名</a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <nav class="pt-5 w-100">
                    <ul class="pagination justify-content-end">
                        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">上一页</a></li>
                        <li class="page-item active"><span class="page-link">1</span></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">下一页</a></li>
                    </ul>
                </nav>
            </div>

            <div class="bg-white p-3 mb-4 list-media">
                <ul class="nav" style="margin-left: -15px;">
                    <li class="nav-item">
                        <a href="javascript:void(0);" class="nav-link active">攻略</a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0);" class="nav-link">线路</a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0);" class="nav-link">景点</a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0);" class="nav-link">美食</a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0);" class="nav-link">民宿</a>
                    </li>
                </ul>
                <hr class="mt-0">
                <div class="media">
                    <a href="show.html"><img class="mr-3" src="uploads/list_pic.jpg" alt="Generic placeholder image" width="280" height="180"></a>
                    <div class="media-body">
                        <a href="show.html" class="text-warning d-block">
                            <h3>漫步老成都</h3>
                            <h5>微服私访入蓉城，一街一尘皆故事</h5>
                        </a>
                        <p class="text-muted">
                            <small>如今，当你走在琴台路上，在那块块铺路石上，你依稀可以看到司马相如和卓文君为追求自由爱情，冲破封建枷锁而私奔的脚印，依稀可以看到卓文君和…</small>
                        </p>
                        <p class="text-muted small">
                            <span class="mr-3"><i class="fa fa-fw fa-map-marker"></i>成都</span>
                            <span class="mr-3"><i class="fa fa-fw fa-eye"></i>10400</span>
                            <span class="mr-3"><i class="fa fa-fw fa-thumbs-o-up"></i>1000</span>
                            <span class="mr-3"><i class="fa fa-fw fa-clock-o"></i>2017-12-12</span>
                        </p>
                    </div>
                </div>
                <div class="media">
                    <a href="show.html"><img class="mr-3" src="uploads/list_pic.jpg" alt="Generic placeholder image" width="280" height="180"></a>
                    <div class="media-body">
                        <a href="show.html" class="text-warning d-block">
                            <h3>漫步老成都</h3>
                            <h5>微服私访入蓉城，一街一尘皆故事</h5>
                        </a>
                        <p class="text-muted">
                            <small>如今，当你走在琴台路上，在那块块铺路石上，你依稀可以看到司马相如和卓文君为追求自由爱情，冲破封建枷锁而私奔的脚印，依稀可以看到卓文君和…</small>
                        </p>
                        <p class="text-muted small">
                            <span class="mr-3"><i class="fa fa-fw fa-map-marker"></i>成都</span>
                            <span class="mr-3"><i class="fa fa-fw fa-eye"></i>10400</span>
                            <span class="mr-3"><i class="fa fa-fw fa-thumbs-o-up"></i>1000</span>
                            <span class="mr-3"><i class="fa fa-fw fa-clock-o"></i>2017-12-12</span>
                        </p>
                    </div>
                </div>
                <div class="media">
                    <a href="show.html"><img class="mr-3" src="uploads/list_pic.jpg" alt="Generic placeholder image" width="280" height="180"></a>
                    <div class="media-body">
                        <a href="show.html" class="text-warning d-block">
                            <h3>漫步老成都</h3>
                            <h5>微服私访入蓉城，一街一尘皆故事</h5>
                        </a>
                        <p class="text-muted">
                            <small>如今，当你走在琴台路上，在那块块铺路石上，你依稀可以看到司马相如和卓文君为追求自由爱情，冲破封建枷锁而私奔的脚印，依稀可以看到卓文君和…</small>
                        </p>
                        <p class="text-muted small">
                            <span class="mr-3"><i class="fa fa-fw fa-map-marker"></i>成都</span>
                            <span class="mr-3"><i class="fa fa-fw fa-eye"></i>10400</span>
                            <span class="mr-3"><i class="fa fa-fw fa-thumbs-o-up"></i>1000</span>
                            <span class="mr-3"><i class="fa fa-fw fa-clock-o"></i>2017-12-12</span>
                        </p>
                    </div>
                </div>
                <div class="media">
                    <a href="show.html"><img class="mr-3" src="uploads/list_pic.jpg" alt="Generic placeholder image" width="280" height="180"></a>
                    <div class="media-body">
                        <a href="show.html" class="text-warning d-block">
                            <h3>漫步老成都</h3>
                            <h5>微服私访入蓉城，一街一尘皆故事</h5>
                        </a>
                        <p class="text-muted">
                            <small>如今，当你走在琴台路上，在那块块铺路石上，你依稀可以看到司马相如和卓文君为追求自由爱情，冲破封建枷锁而私奔的脚印，依稀可以看到卓文君和…</small>
                        </p>
                        <p class="text-muted small">
                            <span class="mr-3"><i class="fa fa-fw fa-map-marker"></i>成都</span>
                            <span class="mr-3"><i class="fa fa-fw fa-eye"></i>10400</span>
                            <span class="mr-3"><i class="fa fa-fw fa-thumbs-o-up"></i>1000</span>
                            <span class="mr-3"><i class="fa fa-fw fa-clock-o"></i>2017-12-12</span>
                        </p>
                    </div>
                </div>

                <nav class="pt-5 w-100">
                    <ul class="pagination justify-content-end">
                        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">上一页</a></li>
                        <li class="page-item active"><span class="page-link">1</span></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">下一页</a></li>
                    </ul>
                </nav>
            </div>
            <div class="bg-white p-3 mb-4 list-media">
                <ul class="nav" style="margin-left: -15px;">
                    <li class="nav-item">
                        <a href="javascript:void(0);" class="nav-link active">游记</a>
                    </li>
                </ul>
                <hr class="mt-0">
                <div class="media">
                    <a href="show.html"><img class="mr-3" src="uploads/list_pic.jpg" alt="Generic placeholder image" width="280" height="180"></a>
                    <div class="media-body">
                        <a href="show.html" class="text-warning d-block">
                            <h3>漫步老成都</h3>
                            <h5>微服私访入蓉城，一街一尘皆故事</h5>
                        </a>
                        <p class="text-muted">
                            <small>如今，当你走在琴台路上，在那块块铺路石上，你依稀可以看到司马相如和卓文君为追求自由爱情，冲破封建枷锁而私奔的脚印，依稀可以看到卓文君和…</small>
                        </p>
                        <p class="text-muted small">
                            <span class="mr-3"><i class="fa fa-fw fa-map-marker"></i>成都</span>
                            <span class="mr-3"><i class="fa fa-fw fa-eye"></i>10400</span>
                            <span class="mr-3"><i class="fa fa-fw fa-thumbs-o-up"></i>1000</span>
                            <span class="mr-3"><i class="fa fa-fw fa-clock-o"></i>2017-12-12</span>
                        </p>
                    </div>
                </div>
                <div class="media">
                    <a href="show.html"><img class="mr-3" src="uploads/list_pic.jpg" alt="Generic placeholder image" width="280" height="180"></a>
                    <div class="media-body">
                        <a href="show.html" class="text-warning d-block">
                            <h3>漫步老成都</h3>
                            <h5>微服私访入蓉城，一街一尘皆故事</h5>
                        </a>
                        <p class="text-muted">
                            <small>如今，当你走在琴台路上，在那块块铺路石上，你依稀可以看到司马相如和卓文君为追求自由爱情，冲破封建枷锁而私奔的脚印，依稀可以看到卓文君和…</small>
                        </p>
                        <p class="text-muted small">
                            <span class="mr-3"><i class="fa fa-fw fa-map-marker"></i>成都</span>
                            <span class="mr-3"><i class="fa fa-fw fa-eye"></i>10400</span>
                            <span class="mr-3"><i class="fa fa-fw fa-thumbs-o-up"></i>1000</span>
                            <span class="mr-3"><i class="fa fa-fw fa-clock-o"></i>2017-12-12</span>
                        </p>
                    </div>
                </div>
                <div class="media">
                    <a href="show.html"><img class="mr-3" src="uploads/list_pic.jpg" alt="Generic placeholder image" width="280" height="180"></a>
                    <div class="media-body">
                        <a href="show.html" class="text-warning d-block">
                            <h3>漫步老成都</h3>
                            <h5>微服私访入蓉城，一街一尘皆故事</h5>
                        </a>
                        <p class="text-muted">
                            <small>如今，当你走在琴台路上，在那块块铺路石上，你依稀可以看到司马相如和卓文君为追求自由爱情，冲破封建枷锁而私奔的脚印，依稀可以看到卓文君和…</small>
                        </p>
                        <p class="text-muted small">
                            <span class="mr-3"><i class="fa fa-fw fa-map-marker"></i>成都</span>
                            <span class="mr-3"><i class="fa fa-fw fa-eye"></i>10400</span>
                            <span class="mr-3"><i class="fa fa-fw fa-thumbs-o-up"></i>1000</span>
                            <span class="mr-3"><i class="fa fa-fw fa-clock-o"></i>2017-12-12</span>
                        </p>
                    </div>
                </div>
                <div class="media">
                    <a href="show.html"><img class="mr-3" src="uploads/list_pic.jpg" alt="Generic placeholder image" width="280" height="180"></a>
                    <div class="media-body">
                        <a href="show.html" class="text-warning d-block">
                            <h3>漫步老成都</h3>
                            <h5>微服私访入蓉城，一街一尘皆故事</h5>
                        </a>
                        <p class="text-muted">
                            <small>如今，当你走在琴台路上，在那块块铺路石上，你依稀可以看到司马相如和卓文君为追求自由爱情，冲破封建枷锁而私奔的脚印，依稀可以看到卓文君和…</small>
                        </p>
                        <p class="text-muted small">
                            <span class="mr-3"><i class="fa fa-fw fa-map-marker"></i>成都</span>
                            <span class="mr-3"><i class="fa fa-fw fa-eye"></i>10400</span>
                            <span class="mr-3"><i class="fa fa-fw fa-thumbs-o-up"></i>1000</span>
                            <span class="mr-3"><i class="fa fa-fw fa-clock-o"></i>2017-12-12</span>
                        </p>
                    </div>
                </div>

                <nav class="pt-5 w-100">
                    <ul class="pagination justify-content-end">
                        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">上一页</a></li>
                        <li class="page-item active"><span class="page-link">1</span></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">下一页</a></li>
                    </ul>
                </nav>
            </div>

            <div class="bg-white p-3 mb-4 list-video">
                <ul class="nav" style="margin-left: -15px;">
                    <li class="nav-item">
                        <a href="javascript:void(0);" class="nav-link active">旅途短拍</a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0);" class="nav-link">大咖直播</a>
                    </li>
                </ul>
                <hr class="mt-0">
                <div class="row" style="margin: 0 -5px;">
                    <a class="col-6 box" href="video.blade.php">
                        <p class="position-relative">
                            <img class="img-fluid" src="uploads/list_video.jpg" alt="list_video" width="380" height="214">
                            <i class="fa fa-2x fa-play-circle-o position-absolute"></i>
                        </p>
                        <h5>成都 · 大熊猫6天5晚自由行</h5>
                        <p class="small text-truncate pl-3">曼谷是一座五光十色的城,以其独有的魅力吸引着来吸引以其独有的魅力吸引着来吸引</p>
                    </a>
                    <a class="col-6 box" href="video.blade.php">
                        <p class="position-relative">
                            <img class="img-fluid" src="uploads/list_video.jpg" alt="list_video" width="380" height="214">
                            <i class="fa fa-2x fa-play-circle-o position-absolute"></i>
                        </p>
                        <h5>成都 · 大熊猫6天5晚自由行</h5>
                        <p class="small text-truncate pl-3">曼谷是一座五光十色的城,以其独有的魅力吸引着来吸引以其独有的魅力吸引着来吸引</p>
                    </a>
                    <a class="col-6 box" href="video.blade.php">
                        <p class="position-relative">
                            <img class="img-fluid" src="uploads/list_video.jpg" alt="list_video" width="380" height="214">
                            <i class="fa fa-2x fa-play-circle-o position-absolute"></i>
                        </p>
                        <h5>成都 · 大熊猫6天5晚自由行</h5>
                        <p class="small text-truncate pl-3">曼谷是一座五光十色的城,以其独有的魅力吸引着来吸引以其独有的魅力吸引着来吸引</p>
                    </a>

                    <a class="col-6 box" href="video.blade.php">
                        <p class="position-relative">
                            <img class="img-fluid" src="uploads/list_video.jpg" alt="list_video" width="380" height="214">
                            <i class="fa fa-2x fa-play-circle-o position-absolute"></i>
                        </p>
                        <h5>成都 · 大熊猫6天5晚自由行</h5>
                        <p class="small text-truncate pl-3">曼谷是一座五光十色的城,以其独有的魅力吸引着来吸引以其独有的魅力吸引着来吸引</p>
                    </a>
                    <a class="col-6 box" href="video.blade.php">
                        <p class="position-relative">
                            <img class="img-fluid" src="uploads/list_video.jpg" alt="list_video" width="380" height="214">
                            <i class="fa fa-2x fa-play-circle-o position-absolute"></i>
                        </p>
                        <h5>成都 · 大熊猫6天5晚自由行</h5>
                        <p class="small text-truncate pl-3">曼谷是一座五光十色的城,以其独有的魅力吸引着来吸引以其独有的魅力吸引着来吸引</p>
                    </a>
                    <a class="col-6 box" href="video.blade.php">
                        <p class="position-relative">
                            <img class="img-fluid" src="uploads/list_video.jpg" alt="list_video" width="380" height="214">
                            <i class="fa fa-2x fa-play-circle-o position-absolute"></i>
                        </p>
                        <h5>成都 · 大熊猫6天5晚自由行</h5>
                        <p class="small text-truncate pl-3">曼谷是一座五光十色的城,以其独有的魅力吸引着来吸引以其独有的魅力吸引着来吸引</p>
                    </a>
                </div>

                <nav class="pt-5 w-100">
                    <ul class="pagination justify-content-end">
                        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">上一页</a></li>
                        <li class="page-item active"><span class="page-link">1</span></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">下一页</a></li>
                    </ul>
                </nav>
            </div>

        </div>
        <div class="col-4 pl-0">
            <div class="bg-white mb-4 p-3">
                <ul class="nav" role="tablist">
                    <li class="nav-item" style="margin-left: -15px;">
                        <a class="nav-link active" data-toggle="tab" href="#vp" role="tab">旅行短拍</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#zb" role="tab">大咖直播</a>
                    </li>
                </ul>
                <hr class="mt-2">
                <div class="tab-content clearfix wan-video">
                    <div class="tab-pane fade show active" id="vp">
                        <div class="mb-4 position-relative">
                            <a href="#">
                                <img src="uploads/list_2.jpg" alt="list_2" class="img-fluid">
                                <h5 class="position-absolute text text-truncate">世界很小，相遇在路上，泸沽湖纪念 旅途的点点滴滴</h5>
                                <p class="position-absolute icon"><i class="fa fa-5x fa-play-circle-o"></i></p>
                            </a>
                        </div>
                        <a class="row text-right" href="#">
                            <span class="col-10">有361条旅行短拍</span>
                            <span class="col-2"><i class="fa fa-angle-right text-warning"></i></span>
                        </a>
                    </div>
                    <div class="tab-pane fade" id="zb">
                        <div class="mb-4 position-relative">
                            <a href="#">
                                <img src="uploads/list_2.jpg" alt="list_2" class="img-fluid">
                                <h5 class="position-absolute text text-truncate">世界很大，相遇在路上，泸沽湖纪念 旅途的点点滴滴</h5>
                                <p class="position-absolute icon"><i class="fa fa-5x fa-play-circle-o"></i></p>
                            </a>
                        </div>
                        <a class="row text-right" href="#">
                            <span class="col-10">有2361条旅行短拍</span>
                            <span class="col-2"><i class="fa fa-angle-right text-warning"></i></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="bg-white mb-4 p-3">
                <div class="text-warning">推荐攻略</div>
                <hr>

                <a href="#"><img src="uploads/list_2.jpg" alt="list_2" class="img-fluid"></a>
                <p class="px-4 py-2">骨灰级成都吃货地图，天啊再也没有哪比成都的馆子多了，24小时都能满足你的胃</p>

                <a href="#"><img src="uploads/list_2.jpg" alt="list_2" class="img-fluid"></a>
                <p class="px-4 py-2">骨灰级成都吃货地图，天啊再也没有哪比成都的馆子多了，24小时都能满足你的胃</p>

                <a href="#"><img src="uploads/list_2.jpg" alt="list_2" class="img-fluid"></a>
                <p class="px-4 py-2">骨灰级成都吃货地图，天啊再也没有哪比成都的馆子多了，24小时都能满足你的胃</p>

                <a class="row text-right" href="#">
                    <span class="col-10">有2361条相关攻略</span>
                    <span class="col-2"><i class="fa fa-angle-right text-warning"></i></span>
                </a>
            </div>

            <div class="bg-white p-3">
                <div class="text-warning">精彩游记</div>
                <hr>

                <a href="#"><img src="uploads/list_2.jpg" alt="list_2" class="img-fluid"></a>
                <p class="px-4 py-2">骨灰级成都吃货地图，天啊再也没有哪比成都的馆子多了，24小时都能满足你的胃</p>

                <a href="#"><img src="uploads/list_2.jpg" alt="list_2" class="img-fluid"></a>
                <p class="px-4 py-2">骨灰级成都吃货地图，天啊再也没有哪比成都的馆子多了，24小时都能满足你的胃</p>

                <a href="#"><img src="uploads/list_2.jpg" alt="list_2" class="img-fluid"></a>
                <p class="px-4 py-2">骨灰级成都吃货地图，天啊再也没有哪比成都的馆子多了，24小时都能满足你的胃</p>

                <a class="row text-right" href="#">
                    <span class="col-10">有2361条相关游记</span>
                    <span class="col-2"><i class="fa fa-angle-right text-warning"></i></span>
                </a>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <nav class="nav nav-justified">
            <a class="nav-item nav-link" href="#">首页</a>
            <a class="nav-item nav-link active" href="#">纵横西部</a>
            <a class="nav-item nav-link" href="#">西行漫游</a>
            <a class="nav-item nav-link" href="#">超级周末</a>
            <a class="nav-item nav-link" href="#">最6旅行</a>
            <a class="nav-item nav-link" href="#">定制旅行</a>
            <a class="nav-item nav-link" href="#">超级攻略</a>
            <a class="nav-item nav-link" href="#">精彩游记</a>
            <a class="nav-item nav-link" href="#">大咖领路</a>
        </nav>
        <hr>
        <div class="row py-4 links">
            <div class="col-8">
                <div class="row">
                    <div class="col-3">
                        <h6>活动报名流程</h6>
                        <a href="#">报名须知</a>
                        <a href="#">网上报名信息修改</a>
                        <a href="#">网上报名流程及状态</a>
                        <a href="#">报名方式</a>
                        <a href="#">网上报名费用支付问题</a>
                    </div>
                    <div class="col-3">
                        <h6>预订常见问题</h6>
                        <a href="#">遇到恶劣天气是否取消？遇到恶劣天气是否取消遇到恶劣天气是否取消遇到恶劣天气是否取消</a>
                        <a href="#">必须填写身份证吗？</a>
                        <a href="#">独立成团可以吗？</a>
                        <a href="#">什么是单房差？</a>
                        <a href="#">纯玩是什么意思？</a>
                    </div>
                    <div class="col-3">
                        <h6>网站条款</h6>
                        <a href="#">网站免责声明</a>
                        <a href="#">网站用户协议</a>
                        <a href="#">网站版权说明</a>
                        <a href="#">签订旅游合同</a>
                    </div>
                    <div class="col-3">
                        <h6>付款和发票</h6>
                        <a href="#">付款流程</a>
                        <a href="#">三种付款方式</a>
                        <a href="#">发票相关问题</a>
                        <a href="#">如何支付尾款</a>
                        <a href="#">退款付款说明</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col">
                        <img src="img/logo_footer.png" alt="logo_footer" width="170" height="56">
                        <h4 class="text-center">400-3455-456</h4>
                        <span class="btn btn-warning btn-block text-white">在线咨询</span>
                    </div>
                    <div class="col text-center">
                        <img src="img/weixin.jpg" alt="weixin" width="114" height="114">
                        <br>关注遇途记公众号
                    </div>
                </div>
            </div>
        </div>
        <div class="about text-center">
            <p>
                <a href="#">关于我们</a>
                <a href="#">人才招聘</a>
                <a href="#">帮助中心</a>
                <a href="#">网站地图</a>
                <a href="#">商务洽谈</a>
                <a href="#">营业执照</a>
            </p>
            <hr>
            <p>蜀ICP备16031541号-3</p>
        </div>
    </div>
</footer>
<aside class="position-fixed side-right">
    <div class="mb-1 text-center">
        <span class="d-block" data-toggle="popover" data-placement="left" data-trigger="hover" data-html="true" data-content="<p class='mb-0 text-center'>客服电话</p><b>400-3455-456</b>">
            <i class="fa fa-fw fa-3x text-white fa-phone"></i>
        </span>
        <span class="d-block swt">
            <i class="fa fa-fw fa-3x text-white fa-commenting"></i>
        </span>
        <span class="d-block" data-toggle="popover" data-placement="left" data-trigger="hover" data-html="true" data-content="<p class='mb-1'><img src='img/aside_weixin.png' width='158' height='158'></p><h5 class='text-center m-0'>关注遇途记</h5>更多优惠好玩旅行等你来">
            <i class="fa fa-fw fa-3x text-white fa-qrcode"></i>
        </span>
    </div>
    <div class="top text-center">
        <i class="fa fa-fw fa-3x text-white fa-angle-up"></i>
    </div>
</aside>
<link href="https://cdn.bootcss.com/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css" rel="stylesheet">
<script src="https://cdn.bootcss.com/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
<script>
    (function ($) {
        // 筛选 显示更多
        $('.list-param span').click(function () {
            $(this).children().toggleClass('fa-flip-vertical')
            $(this).parent().prev().toggleClass('text-truncate')
        })

        // 排序
        $('.list-orderBy a').click(function () {
            $(this).closest('.nav').find('a').removeClass('active')
            $(this).addClass('active')
            let fa = $(this).children()
            if (fa.css('opacity') === '1') {
                fa.toggleClass('fa-flip-vertical')
            }
        })

        // 显示发团日期
        $('a.btn-fatuan').click(function () {
            $(this).children().toggleClass('fa-flip-vertical')
            $(this).closest('div').find('.list-fatuan').toggleClass('d-none').mCustomScrollbar()
        })
    })(jQuery);
</script>
</body>
</html>