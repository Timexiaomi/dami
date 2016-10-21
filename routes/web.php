<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//后台登陆页面
Route::get('admin/login','Admin\loginController@login');
//执行登陆
Route::post('admin/dologin','Admin\loginController@dologin');

//验证码
Route::get('admin/captcha/{tmp}',"Admin\loginController@captcha");

//后台界面
Route::group(["prefix"=>"admin","middleware"=>"user"],function(){

    //首页
    Route::get("index","Admin\IndexController@index");
    //退出登录
    Route::get('loginout',"Admin\loginController@loginout");
    //用户
    Route::resource("user","Admin\UserController");//用户信息管理
    //上传用户头像
    Route::post('/user/photo/{id}',"Admin\UserController@photo");
    //设置用户开关
   Route::get("/dodown/{id}","Admin\UserController@down");
   Route::get("/doopen/{id}","Admin\UserController@open");

   //商品
   Route::resource("goods","Admin\GoodsController");//商品管理

   //商品分类
   Route::resource("goodsclass","Admin\ClassController");//商品类别管理

   //商品版本管理
   Route::get('goods/version/{id}','Admin\GoodsController@version');
   //添加商品版本
   Route::post('goods/doversion',"Admin\GoodsController@doversion");
   //修改商品版本
   Route::post('goods/updateversion/{id}',"Admin\GoodsController@updateversion");
   //上传商品详情图片
   Route::post('goods/gofile/{id}',"Admin\GoodsController@gofile");
   //版本色彩
   Route::get('version/color/{id}','Admin\GoodsController@color');
   //添加版本色彩
   Route::post('version/color/{id}',"Admin\GoodsController@docolor");

   //获取版本信息的
   Route::get('version/change',"Admin\GoodsController@change");



   Route::post("color/edit","Admin\GoodsController@coloredit");



    //商品类别

    Route::resource("goodsclass","Admin\ClassController");//商品类别信息管理
    //添加商品子类别
    Route::get("goodsclass/addson/{id?}","Admin\ClassController@create");
    //添加商品类别查询类别的ajax
    Route::get('/select/type',"Admin\ClassController@selectType");

    //添加子类别的ajax
    // Route::post('/addsontype',"Admin\ClassController@addsontype");
    //执行类别删除的ajax
    Route::post('ajax/del',"Admin\ClassController@del");
    //前台模块头部商品
    Route::get('template/top',"Admin\TemplateController@top");

    //执行删除的ajax
    Route::post('ajax/del',"Admin\ClassController@del");

    //订单
    Route::resource('order/order',"Admin\OrderController");
    //AJAX做配货
    Route::post('order/peihuo','Admin\OrderController@peihuo');
    //AJAX做出库
    Route::post('order/chuku','Admin\OrderController@chuku');

    //支付管理
    Route::get('order/pay',"Admin\OrderController@pay");
    //ajax做支付方式修改
    Route::post('pay/edit',"Admin\OrderController@payedit");
    //ajax做支付方式添加
    Route::post('pay/add',"Admin\OrderController@payadd");
    //ajax做支付方式删除
    Route::post('pay/del',"Admin\OrderController@paydel");

    //配送管理
    Route::get('order/delivery',"Admin\OrderController@deli");
    //ajax做配送方式修改
    Route::post('deli/edit',"Admin\OrderController@deliedit");
    //ajax做配送方式添加
    Route::post('deli/add',"Admin\OrderController@deliadd");
    //ajax做配送方式删除
    Route::post('deli/del',"Admin\OrderController@delidel");


    //晒单，评论
    Route::resource('/comment','Admin\CommentController');
    //ajax做回复的删除
    Route::post('/comment/delrep','Admin\CommentController@delrep');
    //ajax做评论的删除
    Route::post('/comment/delcom','Admin\CommentController@delcom');

    //收货地址管理
    Route::resource('/address','Admin\AddressController');
    //收货地址做ajax删除
    Route::post('/address/del','Admin\AddressController@del');

    //后台友情链接
    Route::resource('/blogroll','Admin\BlogrollController');

    //ajax做友情链接修改
    Route::post('blog/edit',"Admin\BlogrollController@blogedit");
    //ajax做友情链接添加
    Route::post('blog/add',"Admin\BlogrollController@blogadd");
    //ajax做友情链接删除
    Route::post('blog/del',"Admin\BlogrollController@blogdel");

    //网站配置管理
    Route::resource('/config',"Admin\ConfigController");
    //做修改logo的上传
    Route::post('/logo',"Admin\ConfigController@logo");
    //ajax做修改标题
    Route::post('/title',"Admin\ConfigController@title");
    //做网站关闭
    Route::get('/down',"Admin\ConfigController@down");
    //做网站开启
    Route::get('/open',"Admin\ConfigController@open");

    //轮播图
    Route::get('/slide',"Admin\SlideController@index");
    //轮番图的ajax修改
    Route::post('/slide/route',"Admin\SlideController@route");
    //轮播图的上传
    Route::post('/suolue',"Admin\SlideController@suolue");
});

//前台需要登录的页面
Route::group(["prefix"=>"home","middleware"=>"home"],function(){


    //订单确认页
    Route::get('order','Home\IndexController@order');

    //支付页面
    Route::get('pay','Home\IndexController@pay');

    //用户信息页面
    Route::get('user','Home\IndexController@user');

    //做回复
    Route::post('/doreply',"Home\IndexController@doreply");

    //前台个人中心
    Route::get('person',"Home\MessageController@person");
    //修改个人信息
    Route::get('message/update',"Home\MessageController@update");
    //执行修改信息ajax
    Route::post('user/edit',"Home\MessageController@doedit");
    //修改头像
    Route::post('user/touxiang',"Home\MessageController@touxiang");
    //页面返回
    Route::get('user/direct',"Home\MessageController@direct");

    //修改密码的页面
    Route::get('edit/pass',"Home\MessageController@pass");
    //执行修改密码
    Route::post('pass/doupdate',"Home\MessageController@dopass");

    //我的订单
    Route::get('myorder',"Home\MessageController@order");

    //我的晒单
    Route::get("message/mycomment","Home\MessageController@mycomment");
    //已评价的商品
    Route::get("message/mycomment2","Home\MessageController@mycomment2");
    //已失效的商品
    Route::get("message/mycomment3","Home\MessageController@mycomment3");
    //评价
    Route::post("message/pinglun","Home\MessageController@pinglun");


});



//退出登录
Route::get('home/logout',"Home\LoginController@logout");




//查看用户的sessionid
Route::get('home/pp',"Home\MessageController@session");

//不需要登录的页面

//前台主页
Route::get('home/index','Home\IndexController@index');

//注册页面
Route::get('home/regi','Home\RegiController@index');
//检查用户是否存在
Route::post('home/regi/checkUser', 'Home\RegiController@checkUser');
//验证码
Route::get('home/code/{code}','Home\RegiController@code');
//执行注册 验证数据
Route::post("home/doregi","Home\RegiController@doRegi");

//登陆页面
Route::get('home/login','Home\LoginController@index');
//执行登陆
Route::post('home/dologin','Home\LoginController@dologin');



Route::get('/', function () {
    return view('welcome');
});

Route::get('home/head','Home\IndexController@head');

//商品选择页面

Route::get('home/goodsmessage/{id}','Home\IndexController@goodsmessage');

//商品版本颜色查询
Route::get('home/version/color','Home\IndexController@color');


//购物车页面
Route::get('home/cart','Home\IndexController@cart');

//搜索页面
Route::get('home/search','Home\IndexController@search');


//商品信息获取
Route::get('home/goods/data','Home\IndexController@goodsdata');

//404页面
Route::get('mi/404',function()
{
    return view('home.404');
});






