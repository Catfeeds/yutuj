<?php
// 手机网路由

// 登录
Route::view('login', 'm.auth/login')->name('login')->middleware('guest');
// 注册
Route::view('register', 'm.auth/register')->name('register')->middleware('guest');
// 忘记密码
Route::view('password/reset', 'm.auth.forgot')->name('password.request')->middleware('guest');
// 首页
Route::get('/', 'Mobile\WebController@index');
// 加载首页导航的活动
Route::get('nav/{nav}/activities', 'Mobile\WebController@loadActivities');
// 活动
Route::get('activity/show/{activity}', 'Mobile\ShowController@activity')->name('m.activity.show');
// 攻略
Route::get('raider/show/{raider}', 'Mobile\ShowController@raider')->name('m.raider.show');
// 领队
Route::get('leader/show/{leader}', 'Mobile\ShowController@leader')->name('m.leader.show');
// 主页
Route::view('home', 'm.home.index')->name('home');
// 游记
Route::resource('home/travel', 'Mobile\TravelController')->names('home.travel');
// 订单
Route::get('home/order', 'Mobile\HomeController@order')->name('home.order');
Route::get('home/order/{order}/show', 'Mobile\HomeController@orderInfo')->name('home.order.show');
// 设置
Route::get('home/setting/{edit?}', 'Mobile\HomeController@index')->name('home.setting');
// 消息
Route::view('home/message', 'm.home.message')->name('home.message')->middleware('auth');
