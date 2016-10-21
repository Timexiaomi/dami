<!doctype html>
<html lang="zh-CN" xml:lang="zh-CN">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<meta charset="UTF-8" />

<meta name="_token" content="{{ csrf_token() }}"/>
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>@yield('title')</title>

<meta name="description" content="小米商城直营小米公司旗下所有产品，囊括小米手机系列小米Max、小米5，红米手机系列红米Pro、红米Note、红米3S，智能硬件，配件及小米生活周边，同时提供小米客户服务及售后支持。" />
<meta name="keywords" content="小米,小米官网,红米官网,小米手机,小米商城" />
<meta name="viewport" content="width=1226" />
<link rel="shortcut icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon" />
<link rel="icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="{{asset('Homes/home/Css/base.min.css') }}" />
<link rel="stylesheet" href="{{asset('Homes/home/Css/index.min.css') }}" />
<link rel="stylesheet" href="{{asset('Homes/home/Css/buy-choose.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('Homes/home/css/cart.min.css')}}">
<link rel="stylesheet" href="{{asset('Homes/home/Css/checkout.min.css')}}">
<!-- <link rel="stylesheet" href="{{asset('Homes/home/Css/pay-confirm.min.css')}}"> -->
<link rel="stylesheet" href="{{asset('Homes/home/Css/main.min.css')}}">
<!-- <link rel="stylesheet" href="{{asset('Homes/home/Css/list.min.css')}}"> -->
<link rel="stylesheet" href="{{asset('Homes/home/Css/goods-detail.min.css')}}">

<script type="text/javascript" async="" src="{{asset('Homes/home/unjcV2.js')}}"></script>
<script type="text/javascript" async="" src="{{asset('Homes/home/mstr.js')}}"></script>
<script type="text/javascript" async="" src="{{asset('Homes/home/js/jquery.statData.min.js')}}"></script>
<script type="text/javascript" async="" src="{{asset('Homes/home/js/xmst.js')}}"></script>
<!-- <script src="{{asset('Homes/home/js/base.min.js')}}"></script> -->
<script src="{{asset('Homes/home/js/xmst.js')}}"></script>
<script type="text/javascript">var _head_over_time = (new Date()).getTime();</script>
<script src="{{asset('public/js.js') }}"></script>
<script src="{{asset('admins/bootstrap/js/bootstrap.js')}}"></script>
<script src="{{asset('admins/bootstrap/css/bootstrap.css')}}"></script>
</head>
<body>
<div class="site-topbar">
    <div class="container">
        <div class="topbar-nav">
            <a rel="nofollow" href="//www.mi.com/index.html" >小米商城</a><span class="sep">|</span><a rel="nofollow" href="http://www.miui.com/" target="_blank">MIUI</a><span class="sep">|</span><a rel="nofollow" href="http://www.miliao.com/" target="_blank">米聊</a><span class="sep">|</span><a rel="nofollow" href="http://game.xiaomi.com/" target="_blank">游戏</a><span class="sep">|</span><a rel="nofollow" href="http://www.duokan.com/" target="_blank">多看阅读</a><span class="sep">|</span><a rel="nofollow" href="https://i.mi.com/" target="_blank">云服务</a><span class="sep">|</span><a rel="nofollow" href="https://jr.mi.com?from=micom" target="_blank">金融</a><span class="sep">|</span><a rel="nofollow" href="//www.mi.com/c/appdownload/" target="_blank">小米网移动版</a><span class="sep">|</span><a rel="nofollow" href="//static.mi.com/feedback/" target="_blank">问题反馈</a><span class="sep">|</span><a rel="nofollow" href="#J_modal-globalSites" data-toggle="modal">Select Region</a>
        </div>



        <div class="topbar-cart  " id="J_miniCartTrigger">
            <a rel="nofollow" class="cart-mini" id="J_miniCartBtn" href="//static.mi.com/cart/" data-stat-id="6df4db48a644b407" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-6df4db48a644b407', '//static.mi.com/cart/', 'pcpid']);"><i class="iconfont"></i>购物车<span class="cart-mini-num J_cartNum">（0）</span></a>
            <div class="cart-menu" id="J_miniCartMenu" style="display: none;"><div class="loading">购物车中还没有商品，赶紧选购吧！</div></div>
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

   <span class="user"><a rel="nofollow" class="user-name" href="" ><span id='user' class="name">{{session()->get('username')}}</span><i class="iconfont"></i></a>

    <ul id='showlist' class="user-menu" style="display: none;">

     <li><a rel="nofollow" href="{{ URL('home/person') }}" target="_blank" data-stat-id="e0b9e1d1fa8052a2" >个人中心</a></li>
     <li><a rel="nofollow" href="//order.mi.com/user/comment" target="_blank" data-stat-id="6d05445058873c2c" >评价晒单</a></li>
     <li><a rel="nofollow" href="//order.mi.com/user/favorite" target="_blank" data-stat-id="32e2967e9a749d3d" >我的喜欢</a></li>
     <li><a rel="nofollow" href="http://account.xiaomi.com/" target="_blank" data-stat-id="6c2aba14bc7f649a" >小米账户</a></li>
     <li><a rel="nofollow" href="{{ URL('home/logout') }}" data-stat-id="770a31519c713b11" >退出登录</a></li>
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

            <a  href="{{URL('/home/index')}}"><img  class=' ir' src="{{asset('Homes/home/Images/logo.png')}}" alt=""></a>

                    </div>
        <div class="header-nav">
            <ul class="nav-list J_navMainList clearfix">
                <li id="J_navCategory" class="nav-category">

                    <a class="link-category" href="//list.mi.com" data-stat-id="d7d79a744cdeefa8" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-d7d79a744cdeefa8', '//list.mi.com', 'pcpid']);"><span class="text">全部商品分类</span></a>
                <div class="site-category"> <ul id="J_categoryList" class="site-category-list clearfix">
        @foreach($class as $goodsclass)
                <li class="category-item " id='{{$goodsclass->id}}'> <a class="title" href="{}" >{{$goodsclass->name}}<i class="iconfont"></i></a>

                <div class="children clearfix " >

                <ul class="children-list children-list-col children-list-col-1" id='quanbu{{$goodsclass->id}}'>
                  @foreach($db as $goods)
                          @if($goods->cid==$goodsclass->id)
                                <li class="star-goods"> <a class="link" href="" ><img class="thumb" src="width=40&amp;height=40"  alt=""><span class="text">{{$goods->gname}}</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="//item.mi.com/buyphone/mi5s" >选购</a> </li>

                            @endif
                  @endforeach


               </ul>


                </div>

                 </li>
                 @endforeach

                  <li class="category-item"> <a class="title" href="//list.mi.com/20" data-stat-id="370d463950062b15" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-370d463950062b15', '//list.mi.com/20', 'pcpid']);">米兔 生活周边<i class="iconfont"></i></a>

                  <div class="children clearfix children-col-1"> <ul class="children-list clearfix">  <li> <a class="link" href="http://mitu.mi.com/" data-stat-id="378413f5ea4f02c3" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-378413f5ea4f02c3', 'http://mitu.mi.com/', 'pcpid']);"><img class="thumb" src="//c1.mifile.cn/f/i/g/2015/cn-index/mitu-80.jpg?width=40&amp;height=40" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/mitu-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/mitu-80.jpg?width=80&amp;height=80 2x" width="40" height="40" alt=""><span class="text">米兔玩偶</span></a>  </li>  <li> <a class="link" href="//list.mi.com/59" data-stat-id="a2783593a9dca913" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-a2783593a9dca913', '//list.mi.com/59', 'pcpid']);"><img class="thumb" src="//c1.mifile.cn/f/i/g/2015/cn-index/shubiaodian-80.jpg?width=40&amp;height=40" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/shubiaodian-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/shubiaodian-80.jpg?width=80&amp;height=80 2x" width="40" height="40" alt=""><span class="text">鼠标垫</span></a>  </li>  <li> <a class="link" href="//list.mi.com/24" data-stat-id="b1dc3004db9154b5" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-b1dc3004db9154b5', '//list.mi.com/24', 'pcpid']);"><img class="thumb" src="//c1.mifile.cn/f/i/15/goods/sidebar/zhoubian1.jpg?width=40&amp;height=40" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/zhoubian1.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/zhoubian1.jpg?width=80&amp;height=80 2x" width="40" height="40" alt=""><span class="text">生活周边</span></a>  </li>  <li> <a class="link" href="//www.mi.com/zazhi/index.html" data-stat-id="74ddc88ee6dfb72b" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-74ddc88ee6dfb72b', '//www.mi.com/zazhi/index.html', 'pcpid']);"><img class="thumb" src="//c1.mifile.cn/f/i/g/2015/cn-index/80-80.jpg?width=40&amp;height=40" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/80-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/80-80.jpg?width=80&amp;height=80 2x" width="40" height="40" alt=""><span class="text">《小米》目录杂志</span></a>  </li>  <li> <a class="link" href="//list.mi.com/accessories/tag?id=rujiaozhen" data-stat-id="8df3bbd15afb3244" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-8df3bbd15afb3244', '//list.mi.com/accessories/tag', 'pcpid']);"><img class="thumb" src="//c1.mifile.cn/f/i/g/2015/cn-index/rujiao80.jpg?width=40&amp;height=40" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/rujiao80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/rujiao80.jpg?width=80&amp;height=80 2x" width="40" height="40" alt=""><span class="text">8H乳胶枕</span></a>  </li>  </ul> </div> </li>  </ul></div></li>


                @foreach($class as $goodsclass)
                  <li class="nav-item " id='{{$goodsclass->id}}' >
                    <a class="link" href="javascript: void(0);"><span class="text">{{$goodsclass->name}}</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                          @foreach($db as $goods)
                          @if($goods->cid==$goodsclass->id)
                                    <li >
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/scooter/" ><img src="{{asset('{$goods->goods_photo}')}}"  alt="{{$goods->gname}}" width="160" height="110"></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/scooter/" >{{$goods->gname}}</a></div>
                                    <p class="price">{{$goods->goods_price}}元</p></li>
                              @endif
                              @endforeach
                                   </ul>
                        </div>
                    </div>
                </li>
                @endforeach



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

        <div id="J_navMenu" class="header-nav-menu header-nav-menu-active" style="height: 229px; padding-top: 0px; margin-top: 0px; padding-bottom: 0px; margin-bottom: 0px;display:none">
        <div class="container"></div> </div>

    </div>
</div>




@yield('content')






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

                <dd><a rel="nofollow" href=""   target="_blank">小米部落</a></dd>


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

            <p>&copy;<a href="//www.mi.com/" target="_blank" title="mi.com">mi.com</a> 京ICP证110507号 京ICP备10046444号 <a rel="nofollow"  href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134" target="_blank">京公网安备11010802020134号 </a><a rel="nofollow"  href="" target="_blank" rel="nofollow">京网文[2014]0059-0009号</a>


<br> 违法和不良信息举报电话：185-0130-1238，本网站所列数据，除特殊说明，所有数据均出自我司实验室测试</p>
        </div>
        <div class="info-links">

                    <a  rel="nofollow" href="//privacy.truste.com/privacy-seal/validation?rid=4fc28a8c-6822-4980-9c4b-9fdc69b94eb8&lang=zh-cn" target="_blank"><img  rel="nofollow" src="{{asset('Homes/home/Picture/seal.png')}}" alt="TRUSTe Privacy Certification" /></a>
                    <a  rel="nofollow" href="//search.szfw.org/cert/l/CX20120926001783002010" target="_blank"><img  rel="nofollow" src="{{asset('Homes/home/Picture/v-logo-2.png')}}" alt="诚信网站" /></a>
                    <a  rel="nofollow" href="" target="_blank"><img  rel="nofollow" src="{{asset('Homes/home/Picture/v-logo-1.png')}}" alt="可信网站" /></a>
                    <a  rel="nofollow" href="http://www.315online.com.cn/member/315140007.html" target="_blank"><img  rel="nofollow" src="{{asset('Homes/home/Picture/v-logo-3.png')}}" alt="网上交易保障中心" /></a>

                </div>
    </div>
    <div class="slogan ir">探索黑科技，小米为发烧而生</div>
</div>
</body>
</html>

<script src="{{asset('Homes/home/js/buyChoose.min.js')}}"></script>
<script>

                            $('.nav-item').hover(
                                function(){
                                        var container= $(this).find('li');
                                       $('#J_navMenu').find('li').replaceWith(container);
                                        $(this).addClass('nav-item-active');
                                    // $('#toubu li').remove();
                                          // var id=$(this).attr('id')

                                       // console.log(container);
                                      var ul= $(this).find('ul');
                                       $('#J_navMenu').find('div').append(ul);

                                },
                                function(){
                                        $(this).removeClass('nav-item-active');
                                }
                                );

                            $('.nav-item:lt(7),#J_navMenu').mouseover(function(){
                                $('#J_navMenu').css('display','block');
                            });
                            $('.nav-item,#J_navMenu').mouseout(function(){
                                    $('#J_navMenu').css('display','none');


                            })
                            $('#J_miniCartTrigger').mouseover(function(){
                                    $(this).addClass('topbar-cart-active');
                                    $('#J_miniCartMenu').css('display','block');
                            });
                            $('#J_miniCartTrigger,#J_miniCartMenu').mouseout(function(){
                                    $('#J_miniCartTrigger').removeClass('topbar-cart-active');
                                    $('#J_miniCartMenu').css('display','none');
                            });
                            $('.user').hover(
                                    function(){
                                    $(this).addClass('user-active');
                                    $('#showlist').css('display','block');
                                },
                                    function(){
                                    $(this).removeClass('user-active');
                                    $('#showlist').css('display','none');
                                    }
                            );

                            //侧边全部商品
                            $('.category-item').mouseover(function(){
                                     // var id= $(this).attr('id');
                              // $('#quanbu'+id+' li').remove();

                                    $(this).addClass('category-item-active');
              });


                            $('.category-item').mouseout(function(){
                                    $(this).removeClass('category-item-active');


                            });



                </script>

