<!doctype html>
<html lang="zh-CN" xml:lang="zh-CN">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<meta charset="UTF-8" />
<title>小米商城-小米手机、红米Note、小米笔记本、小米电视正品专卖官方网站</title>
<meta name="description" content="小米商城直营小米公司旗下所有产品，囊括小米手机系列小米Max、小米5，红米手机系列红米Pro、红米Note、红米3S，智能硬件，配件及小米生活周边，同时提供小米客户服务及售后支持。" />
<meta name="keywords" content="小米,小米官网,红米官网,小米手机,小米商城" />
<meta name="viewport" content="width=1226" />
<link rel="shortcut icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon" />
<link rel="icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon" />

<link rel="stylesheet" href="{{asset('Homes/home/Css/base.min.css') }}" />
<link rel="stylesheet" href="{{asset('Homes/home/Css/index.min.css') }}" />
<script type="text/javascript">var _head_over_time = (new Date()).getTime();</script>
<script src="{{asset('Public/jquery-1.8.3.min.js') }}"></script>

</head>
<body>
<div class="site-topbar">
    <div class="container">
        <div class="topbar-nav">
            <a rel="nofollow" href="//www.mi.com/index.html" >小米商城</a><span class="sep">|</span><a rel="nofollow" href="http://www.miui.com/" target="_blank">MIUI</a><span class="sep">|</span><a rel="nofollow" href="http://www.miliao.com/" target="_blank">米聊</a><span class="sep">|</span><a rel="nofollow" href="http://game.xiaomi.com/" target="_blank">游戏</a><span class="sep">|</span><a rel="nofollow" href="http://www.duokan.com/" target="_blank">多看阅读</a><span class="sep">|</span><a rel="nofollow" href="https://i.mi.com/" target="_blank">云服务</a><span class="sep">|</span><a rel="nofollow" href="https://jr.mi.com?from=micom" target="_blank">金融</a><span class="sep">|</span><a rel="nofollow" href="//www.mi.com/c/appdownload/" target="_blank">小米网移动版</a><span class="sep">|</span><a rel="nofollow" href="//static.mi.com/feedback/" target="_blank">问题反馈</a><span class="sep">|</span><a rel="nofollow" href="#J_modal-globalSites" data-toggle="modal">Select Region</a>
        </div>
        <div class="topbar-cart" id="J_miniCartTrigger">
            <a rel="nofollow" class="cart-mini" id="J_miniCartBtn" href="//static.mi.com/cart/"><i class="iconfont">&#xe60c;</i>购物车<span class="cart-mini-num J_cartNum"></span></a>
            <div class="cart-menu" id="J_miniCartMenu">
                <div class="loading"><div class="loader"></div></div>
            </div>
        </div>

        <?php
            if(!session('username')){
        ?>
        <div class="topbar-info" id="J_userInfo">
            <a  rel="nofollow" class="link" href="{{ URL('/home/login') }}" data-needlogin="true">登录</a><span class="sep">|</span><a  rel="nofollow" class="link" href="{{ URL('/home/regi') }}" >注册</a><span class="sep">|</span><span class="message"><a rel="nofollow" href="//order.mi.com/message/list" data-stat-id="7324b7edba019c56" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-7324b7edba019c56', '//order.mi.com/message/list', 'pcpid']);">消息通知<i class="J_miMessageTotal"></i></a></span>
<?php
    }else{
?>
          <div class="topbar-info" id="J_userInfo">
   <span class="user"><a rel="nofollow" class="user-name" href="//my.mi.com/portal" target="_blank" data-stat-id="0b3b0fef7b7b825b" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-0b3b0fef7b7b825b', '//my.mi.com/portal', 'pcpid']);"><span id='user' class="name">{{session()->get('username')}}</span><i class="iconfont"></i></a>
    <ul id='showlist' class="user-menu" style="display: none;">

     <li><a rel="nofollow" href="//my.mi.com/portal" target="_blank" data-stat-id="e0b9e1d1fa8052a2" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-e0b9e1d1fa8052a2', '//my.mi.com/portal', 'pcpid']);">个人中心</a></li>
     <li><a rel="nofollow" href="//order.mi.com/user/comment" target="_blank" data-stat-id="6d05445058873c2c" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-6d05445058873c2c', '//order.mi.com/user/comment', 'pcpid']);">评价晒单</a></li>
     <li><a rel="nofollow" href="//order.mi.com/user/favorite" target="_blank" data-stat-id="32e2967e9a749d3d" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-32e2967e9a749d3d', '//order.mi.com/user/favorite', 'pcpid']);">我的喜欢</a></li>
     <li><a rel="nofollow" href="http://account.xiaomi.com/" target="_blank" data-stat-id="6c2aba14bc7f649a" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-6c2aba14bc7f649a', 'http://account.xiaomi.com/', 'pcpid']);">小米账户</a></li>
     <li><a rel="nofollow" href="//order.mi.com/site/logout" data-stat-id="770a31519c713b11" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-770a31519c713b11', '//order.mi.com/site/logout', 'pcpid']);">退出登录</a></li>
    </ul></span>
   <span class="sep">|</span>
   <span class="message"><a rel="nofollow" href="//order.mi.com/message/list" data-stat-id="7324b7edba019c56" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-7324b7edba019c56', '//order.mi.com/message/list', 'pcpid']);">消息通知<i class="J_miMessageTotal"></i></a></span>
   <span class="sep">|</span>
   <a rel="nofollow" class="link link-order" href="//static.mi.com/order/" target="_blank" data-stat-id="a9e9205e73f0742c" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-a9e9205e73f0742c', '//static.mi.com/order/', 'pcpid']);">我的订单</a>
  </div>
<?php } ?>

                    </div>
    </div>
</div>
<div class="site-header">
    <div class="container">
        <div class="header-logo">
            <a class="logo ir" href="//www.mi.com/index.html" title="小米官网">小米官网</a>
                    </div>
        <div class="header-nav">
            <ul class="nav-list J_navMainList clearfix">
                <li id="J_navCategory" class="nav-category">
                    <a class="link-category" href="//list.mi.com"><span class="text">全部商品分类</span></a>

            <!-- 分类导航 -->


                </li>
                            <li class="nav-item">
                    <a class="link" href="javascript: void(0);"><span class="text">小米手机</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/mi5s"><img src="Picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/g/doodle/5s-110!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/doodle/5s-110!320x220.jpg 2x" alt="小米5s" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/mi5s">小米5s</a></div>
                                    <p class="price">1999元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/mi5splus/"><img src="Picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/g/doodle/5splus-220!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/doodle/5splus-220!320x220.jpg 2x" alt="小米5s Plus" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/mi5splus/">小米5s Plus</a></div>
                                    <p class="price">2299元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/mi5/"><img src="Picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/16/goods/nav/mi5!160x110.jpg" srcset="//c1.mifile.cn/f/i/16/goods/nav/mi5!320x220.jpg 2x" alt="小米手机5" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/mi5/">小米手机5</a></div>
                                    <p class="price">1599元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/mimax/"><img src="Picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/maxdingbu!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/maxdingbu!320x220.jpg 2x" alt="小米Max" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/mimax/">小米Max</a></div>
                                    <p class="price">1299元起</p>                                                                    </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                                <li class="nav-item">
                    <a class="link" href="javascript: void(0);"><span class="text">红米</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/redmipro/"><img src="Picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/hongmipro-320!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/hongmipro-320!320x220.jpg 2x" alt="红米Pro" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/redmipro/">红米Pro</a></div>
                                    <p class="price">1499元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/redminote4/"><img src="Picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/g/doodle/hongminote4!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/doodle/hongminote4!320x220.jpg 2x" alt="红米Note 4" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/redminote4/">红米Note 4</a></div>
                                    <p class="price">899元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/note3/pro/"><img src="Picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/note3!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/note3!320x220.jpg 2x" alt="红米Note 3" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/note3/pro/">红米Note 3</a></div>
                                    <p class="price">799元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/hongmi3s/"><img src="Picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/video/hongmi3s!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/video/hongmi3s!320x220.jpg 2x" alt="红米手机3S" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/hongmi3s/">红米手机3S</a></div>
                                    <p class="price">699元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/hongmi3/"><img src="Picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/hongmi3!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/hongmi3!320x220.jpg 2x" alt="红米手机3" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/hongmi3/">红米手机3</a></div>
                                    <p class="price">699元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/hongmi3x/"><img src="Picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/g/doodle/320-220!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/doodle/320-220!320x220.jpg 2x" alt="红米手机3X" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/hongmi3x/">红米手机3X</a></div>
                                    <p class="price">799元</p>                                                                    </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                                <li class="nav-item">
                    <a class="link" href="javascript: void(0);"><span class="text">平板 · 笔记本</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/mipad2/"><img src="Picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/mipad2-16!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/mipad2-16!320x220.jpg 2x" alt="小米平板2 16GB" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/mipad2/">小米平板2 16GB</a></div>
                                    <p class="price">999元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/mipad2/"><img src="Picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/mipad2-64!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/mipad2-64!320x220.jpg 2x" alt="小米平板2 64GB" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/mipad2/">小米平板2 64GB</a></div>
                                    <p class="price">1299元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/mipad2/"><img src="Picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/mipad2-64-win!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/mipad2-64-win!320x220.jpg 2x" alt="小米平板2  64GB Windows版" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/mipad2/">小米平板2  64GB Windows版</a></div>
                                    <p class="price">1299元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/mibookair/"><img src="Picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/video/bijiben32012.5!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/video/bijiben32012.5!320x220.jpg 2x" alt="小米笔记本Air 12.5"" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/mibookair/">小米笔记本Air 12.5"</a></div>
                                    <p class="price">3499元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/mibookair/"><img src="Picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/bijiben320!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/bijiben320!320x220.jpg 2x" alt="小米笔记本Air 13.3"" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/mibookair/">小米笔记本Air 13.3"</a></div>
                                    <p class="price">4999元</p>                                                                    </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                                <li class="nav-item">
                    <a class="link" href="javascript: void(0);"><span class="text">电视</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/mitv3s/43/"><img src="Picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/16/goods/nav/mitv3s-43!160x110.jpg" srcset="//c1.mifile.cn/f/i/16/goods/nav/mitv3s-43!320x220.jpg 2x" alt="小米电视3S 43英寸" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/mitv3s/43/">小米电视3S 43英寸</a></div>
                                    <p class="price">1799元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/mitv3s/48/"><img src="Picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/mitv3s48!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/mitv3s48!320x220.jpg 2x" alt="小米电视3S 48英寸" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/mitv3s/48/">小米电视3S 48英寸</a></div>
                                    <p class="price">1999元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/mitv3s/55/"><img src="Picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/55.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/55.png 2x" alt="小米电视3S 55英寸" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/mitv3s/55/">小米电视3S 55英寸</a></div>
                                    <p class="price">3499元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/mitv3s/65flat/"><img src="Picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/65.png" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/65.png 2x" alt="小米电视3s 65英寸" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/mitv3s/65flat/">小米电视3s 65英寸</a></div>
                                    <p class="price">4999元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/mitv3/70/"><img src="Picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/mitv70!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/mitv70!320x220.jpg 2x" alt="小米电视3 70英寸" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/mitv3/70/">小米电视3 70英寸</a></div>
                                    <p class="price">9999元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/buytv/"><img src="Picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/16/goods/nav/mitv3s-65!160x110.jpg" srcset="//c1.mifile.cn/f/i/16/goods/nav/mitv3s-65!320x220.jpg 2x" alt="查看全部<br/>小米电视" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/buytv/">查看全部<br/>小米电视</a></div>
                                                                                                        </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                                <li class="nav-item">
                    <a class="link" href="javascript: void(0);"><span class="text">盒子 · 影音</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/hezimini/"><img src="Picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/hezimini.png" srcset="//c1.mifile.cn/f/i/15/goods/nav/hezimini.png 2x" alt="小米盒子mini版" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/hezimini/">小米盒子mini版</a></div>
                                    <p class="price">199元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/hezi3/"><img src="Picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/hezi3.png" srcset="//c1.mifile.cn/f/i/15/goods/nav/hezi3.png 2x" alt="小米盒子3" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/hezi3/">小米盒子3</a></div>
                                    <p class="price">249元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/hezi3s/"><img src="Picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/hezi3s!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/hezi3s!320x220.jpg 2x" alt="小米盒子3 增强版" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/hezi3s/">小米盒子3 增强版</a></div>
                                    <p class="price">399元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/tvzj/"><img src="Picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/zhuji!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/zhuji!320x220.jpg 2x" alt="小米电视主机" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/tvzj/">小米电视主机</a></div>
                                    <p class="price">999元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//item.mi.com/1160800073.html"><img src="Picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/jinshuban!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/jinshuban!320x220.jpg 2x" alt="小米家庭音响 金属版" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//item.mi.com/1160800073.html">小米家庭音响 金属版</a></div>
                                    <p class="price">899元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//item.mi.com/1160800074.html"><img src="Picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/putonban!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/putonban!320x220.jpg 2x" alt="小米家庭音响 标准版" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//item.mi.com/1160800074.html">小米家庭音响 标准版</a></div>
                                    <p class="price">699元</p>                                                                    </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                                <li class="nav-item">
                    <a class="link" href="javascript: void(0);"><span class="text">路由器</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/miwifi/"><img src="Picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/miwifi!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/miwifi!320x220.jpg 2x" alt="全新小米路由器" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/miwifi/">全新小米路由器</a></div>
                                    <p class="price">699元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/miwifi3/"><img src="Picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/miwifi-3!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/miwifi-3!320x220.jpg 2x" alt="小米路由器 3 1200M" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/miwifi3/">小米路由器 3 1200M</a></div>
                                    <p class="price">149元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/miwifimini/"><img src="Picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/miwifimini!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/miwifimini!320x220.jpg 2x" alt="小米路由器 mini" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/miwifimini/">小米路由器 mini</a></div>
                                    <p class="price">129元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/miwifi3c/"><img src="Picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/luyouqi3c!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/luyouqi3c!320x220.jpg 2x" alt="小米路由器 3C 300M" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/miwifi3c/">小米路由器 3C 300M</a></div>
                                    <p class="price">99元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/miwifilite/"><img src="Picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/miwifilite!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/miwifilite!320x220.jpg 2x" alt="小米路由器 青春版" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/miwifilite/">小米路由器 青春版</a></div>
                                    <p class="price">79元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//item.mi.com/1153200003.html"><img src="Picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/wifiExtension!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/wifiExtension!320x220.jpg 2x" alt="小米WiFi放大器" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//item.mi.com/1153200003.html">小米WiFi放大器</a></div>
                                    <p class="price">39元</p>                                                                    </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                                <li class="nav-item">
                    <a class="link" href="javascript:void(0);"><span class="text">智能硬件</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/scooter/"><img src="Picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/scooter!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/scooter!320x220.jpg 2x" alt="九号平衡车" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/scooter/">九号平衡车</a></div>
                                    <p class="price">1999元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/water/"><img src="Picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/water2!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/water2!320x220.jpg 2x" alt="小米净水器" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/water/">小米净水器</a></div>
                                    <p class="price">1299元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/dianfanbao/"><img src="Picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/dianfanbao!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/dianfanbao!320x220.jpg 2x" alt="米家压力IH电饭煲" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/dianfanbao/">米家压力IH电饭煲</a></div>
                                    <p class="price">999元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/air2/"><img src="Picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/16/goods/nav/air2!160x110.jpg" srcset="//c1.mifile.cn/f/i/16/goods/nav/air2!320x220.jpg 2x" alt="小米空气净化器 2" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/air2/">小米空气净化器 2</a></div>
                                    <p class="price">699元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//list.mi.com/accessories/tag?id=shexiangji"><img src="Picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/video/xiaobaishexiangji!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/video/xiaobaishexiangji!320x220.jpg 2x" alt="智能摄像机" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//list.mi.com/accessories/tag?id=shexiangji">智能摄像机</a></div>
                                    <p class="price">149元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/smart/"><img src="Picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/g/doodle/zhinengyingjian!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/doodle/zhinengyingjian!320x220.jpg 2x" alt="查看全部<br/>智能硬件" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/smart/">查看全部<br/>智能硬件</a></div>
                                                                                                        </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                                <li class="nav-item">
                                        <a  class="link" href="//www.mi.com/service/" target="_blank"><span class="text">服务</span></a>
                </li>
                                <li class="nav-item">
                                        <a rel="nofollow" class="link" href="http://www.xiaomi.cn" target="_blank"><span class="text">社区</span></a>
                </li>
                            </ul>
        </div>
        <div class="header-search">
            <form id="J_searchForm" class="search-form clearfix" action="//search.mi.com/search" method="get">
                <label for="search" class="hide">站内搜索</label>
                <input class="search-text" type="search" id="search" name="keyword" autocomplete="off" data-search-config="{'defaultWords':[{'Key':'小米手机5','Rst':11},{'Key':'空气净化器2','Rst':1},{'Key':'活塞耳机','Rst':4},{'Key':'小米路由器','Rst':8},{'Key':'移动电源','Rst':21},{'Key':'运动相机','Rst':3},{'Key':'小蚁摄像机','Rst':2},{'Key':'小米体重秤','Rst':1},{'Key':'小米插线板','Rst':13},{'Key':'配件优惠套装','Rst':32}]}" />
                <input type="submit" class="search-btn iconfont" value="&#xe616;" />
                <div class="search-hot-words">
                    <a href="//www.mi.com/special/phone/">手机特惠</a><a href="//item.mi.com/buyphone/note3">红米Note3直降100</a>                </div>
            </form>
        </div>
    </div>
</div>



@yield('content');





<script>
var isCategoryToggled = "toggled";
var isCommentOpen = 1;
var doodleData ={"type":1,"link":"","logo":"","linkText":"","version_random":"1474964702.365001"};
var topbarData = {"type":0,"link":"","img":"","linkText":"","version_random":"1474964702.158189"};
</script>
<div class="site-footer">
    <div class="container">
        <div class="footer-service">
            <ul class="list-service clearfix">
                            <li><a rel="nofollow" href="//www.mi.com/static/fast/" target="_blank"><i class="iconfont">&#xe634;</i>预约维修服务</a></li>
                            <li><a rel="nofollow" href="//www.mi.com/service/exchange#back" target="_blank"><i class="iconfont">&#xe635;</i>7天无理由退货</a></li>
                            <li><a rel="nofollow" href="//www.mi.com/service/exchange#free" target="_blank"><i class="iconfont">&#xe636;</i>15天免费换货</a></li>
                            <li><a rel="nofollow" href="//www.mi.com/service/exchange#mail" target="_blank"><i class="iconfont">&#xe638;</i>满150元包邮</a></li>
                            <li><a rel="nofollow" href="//www.mi.com/static/maintainlocation/" target="_blank"><i class="iconfont">&#xe637;</i>520余家售后网点</a></li>
                        </ul>
        </div>
        <div class="footer-links clearfix">

            <dl class="col-links col-links-first">
                <dt>帮助中心</dt>

                <dd><a rel="nofollow" href="//www.mi.com/service/account/register/"   target="_blank">账户管理</a></dd>

                <dd><a rel="nofollow" href="//www.mi.com/service/buy/buytime/"   target="_blank">购物指南</a></dd>

                <dd><a rel="nofollow" href="//www.mi.com/service/order/sendprogress/"   target="_blank">订单操作</a></dd>

            </dl>

            <dl class="col-links ">
                <dt>服务支持</dt>

                <dd><a rel="nofollow" href="//www.mi.com/service/exchange"   target="_blank">售后政策</a></dd>

                <dd><a rel="nofollow" href="http://fuwu.mi.com/"   target="_blank">自助服务</a></dd>

                <dd><a rel="nofollow" href="http://xiazai.mi.com/"   target="_blank">相关下载</a></dd>

            </dl>

            <dl class="col-links ">
                <dt>线下门店</dt>

                <dd><a rel="nofollow" href="//www.mi.com/c/xiaomizhijia/"   target="_blank">小米之家</a></dd>

                <dd><a rel="nofollow" href="//www.mi.com/static/maintainlocation/"   target="_blank">服务网点</a></dd>

                <dd><a rel="nofollow" href="//www.mi.com/static/familyLocation/"   target="_blank">零售网点</a></dd>

            </dl>

            <dl class="col-links ">
                <dt>关于小米</dt>

                <dd><a rel="nofollow" href="//www.mi.com/about"   target="_blank">了解小米</a></dd>

                <dd><a rel="nofollow" href="http://hr.xiaomi.com/"   target="_blank">加入小米</a></dd>

                <dd><a rel="nofollow" href="//www.mi.com/about/contact"   target="_blank">联系我们</a></dd>

            </dl>

            <dl class="col-links ">
                <dt>关注我们</dt>

                <dd><a rel="nofollow" href="http://e.weibo.com/xiaomishouji"   target="_blank">新浪微博</a></dd>

                <dd><a rel="nofollow" href="http://xiaoqu.qq.com/mobile/share/index.html?url=http%3A%2F%2Fxiaoqu.qq.com%2Fmobile%2Fbarindex.html%3Fwebview%3D1%26type%3D%26source%3Dindex%26_lv%3D25741%26sid%3D%26_wv%3D5123%26_bid%3D128%26%23bid%3D10525%26from%3Dwechat"   target="_blank">小米部落</a></dd>

                <dd><a rel="nofollow" href="#J_modalWeixin" data-toggle="modal" >官方微信</a></dd>

            </dl>

            <dl class="col-links ">
                <dt>特色服务</dt>

                <dd><a rel="nofollow" href="//order.mi.com/queue/f2code"   target="_blank">F 码通道</a></dd>

                <dd><a rel="nofollow" href="//www.mi.com/mimobile/"   target="_blank">小米移动</a></dd>

                <dd><a rel="nofollow" href="//order.mi.com/misc/checkitem"   target="_blank">防伪查询</a></dd>

            </dl>

            <div class="col-contact">
                <p class="phone">400-100-5678</p>
<p><span class="J_serviceTime-normal" style="
">周一至周日 8:00-18:00</span>
<span class="J_serviceTime-holiday" style="display:none;">2月7日至13日服务时间 9:00-18:00</span><br>（仅收市话费）</p>
<a rel="nofollow" class="btn btn-line-primary btn-small" href="//www.mi.com/service/contact" target="_blank"><i class="iconfont">&#xe600;</i> 24小时在线客服</a>            </div>
        </div>
    </div>
</div>
<div class="site-info">
    <div class="container">
        <div class="logo ir">小米官网</div>
        <div class="info-text">
            <p class="sites"><a rel="nofollow" href="//www.mi.com/index.html"   target="_blank">小米商城</a><span class="sep">|</span><a rel="nofollow" href="http://www.miui.com/"   target="_blank">MIUI</a><span class="sep">|</span><a rel="nofollow" href="http://www.miliao.com/"   target="_blank">米聊</a><span class="sep">|</span><a rel="nofollow" href="http://www.duokan.com/"   target="_blank">多看书城</a><span class="sep">|</span><a rel="nofollow" href="http://www.miwifi.com/"   target="_blank">小米路由器</a><span class="sep">|</span><a rel="nofollow" href="http://call.mi.com/"   target="_blank">视频电话</a><span class="sep">|</span><a rel="nofollow" href="http://blog.xiaomi.com/"   target="_blank">小米后院</a><span class="sep">|</span><a rel="nofollow" href="http://xiaomi.tmall.com/"   target="_blank">小米天猫店</a><span class="sep">|</span><a rel="nofollow" href="http://shop115048570.taobao.com"   target="_blank">小米淘宝直营店</a><span class="sep">|</span><a rel="nofollow" href="http://union.mi.com/"   target="_blank">小米网盟</a><span class="sep">|</span><a rel="nofollow" href="//static.mi.com/feedback/"   target="_blank">问题反馈</a><span class="sep">|</span><a rel="nofollow" href="#J_modal-globalSites" data-toggle="modal" >Select Region</a>            </p>
            <p>&copy;<a href="//www.mi.com/" target="_blank" title="mi.com">mi.com</a> 京ICP证110507号 京ICP备10046444号 <a rel="nofollow"  href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134" target="_blank">京公网安备11010802020134号 </a><a rel="nofollow"  href="//c1.mifile.cn/f/i/2013/cn/jingwangwen.jpg" target="_blank" rel="nofollow">京网文[2014]0059-0009号</a>

<br> 违法和不良信息举报电话：185-0130-1238，本网站所列数据，除特殊说明，所有数据均出自我司实验室测试</p>
        </div>
        <div class="info-links">
                    <a  rel="nofollow" href="//privacy.truste.com/privacy-seal/validation?rid=4fc28a8c-6822-4980-9c4b-9fdc69b94eb8&lang=zh-cn" target="_blank"><img  rel="nofollow" src="Homes/home/Picture/cdb619e240f34e638a78d23ed7e90104.gif" alt="TRUSTe Privacy Certification" /></a>
                    <a  rel="nofollow" href="//search.szfw.org/cert/l/CX20120926001783002010" target="_blank"><img  rel="nofollow" src="Homes/home/Picture/v-logo-2.png" alt="诚信网站" /></a>
                    <a  rel="nofollow" href="https://ss.knet.cn/verifyseal.dll?sn=e12033011010015771301369&ct=df&pa=461082" target="_blank"><img  rel="nofollow" src="Homes/home/Picture/v-logo-1.png" alt="可信网站" /></a>
                    <a  rel="nofollow" href="http://www.315online.com.cn/member/315140007.html" target="_blank"><img  rel="nofollow" src="Homes/home/Picture/v-logo-3.png" alt="网上交易保障中心" /></a>
                </div>
    </div>
    <div class="slogan ir">探索黑科技，小米为发烧而生</div>
</div>
</body>
</html>
