

@extends("home/base/base")
@section('title')
    {{ $list->title }}
@endsection

@section('content')
<script src="Homes/home/js/base.min.js"></script>
<p id='status' cc='{{ $list->status }}'></p>
<script>
    $(function(){
      var a=$('#status').attr('cc');
      if(a=='2')
      {
        location.href ="{{ URL('mi/404') }}";
      }
    });
</script>

<div class="home-hero-container container">
    <div class="home-hero">
        <div class="home-hero-slider">

         <div class="ui-wrapper" style="max-width: 100%;">
         <div class="ui-viewport" style="width: 100%; overflow: hidden; position: relative; height: 460px;">
         <div id="J_homeSlider" class="xm-slider" data-stat-title="焦点图轮播" style="width: auto; position: relative;">

                    <div class="slide loaded" style="float: none; list-style: outside none none; position: absolute; width: 1226px; z-index: 0; display: block;">
                        <a href="{{ $url[1] }}"><img src="{{asset('Homes/home/picture/1.jpg')}}"></a>
                    </div>

                    <div class="slide loaded"  style="float: none; list-style: outside none none; position: absolute; width: 1226px; z-index: 50; display: none;">
                        <a href="{{ $url[2] }}" ><img src="{{asset('Homes/home/picture/2.jpg')}}" ></a>
                    </div>
                    <div class="slide loaded"  style="float: none; list-style: outside none none; position: absolute; width: 1226px; z-index: 0; display: none;">
                        <a href="{{ $url[3] }}" ><img src="{{asset('Homes/home/picture/3.jpg')}}" ></a>
                    </div>

                    <div class="slide loaded"  style="float: none; list-style: outside none none; position: absolute; width: 1226px; z-index: 0; display: none;">
                        <a href="{{ $url[4] }}" ><img src="{{asset('Homes/home/picture/4.jpg')}}" ></a>
                    </div>
                        </div>
                        </div><div class="ui-controls ui-has-pager ui-has-controls-direction"><div class="ui-pager ui-default-pager">

                                        <div class="ui-pager-item"><a style='background-color:orange' class='lii'>1</a></div>
                                        <div class="ui-pager-item"><a class='lii'>2</a></div>
                                        <div class="ui-pager-item"><a class='lii'>3</a></div>
                                        <div class="ui-pager-item"><a class='lii'>4</a></div>
                                        </div>
                                        <div class="ui-controls-direction">
                                        <a class="ui-prev" >上一张</a>
                                        <a class="ui-next" >下一张</a></div></div></div>
                                        </div>
        <div class="home-hero-sub row">
            <div class="span4">
                <ul class="home-channel-list clearfix">
                                        <li class="top left"><a href="//www.mi.com/compare/" data-stat-aid="AA13424" data-stat-pid="2_44_1_250" target="_blank"><i class="iconfont">&#xe901</i>选购手机</a></li>
                                        <li class="top"><a href="http://qiye.mi.com/" data-stat-aid="AA10868" data-stat-pid="2_44_2_251" target="_blank"><i class="iconfont">&#xe63e;</i>企业团购</a></li>
                                        <li class="top"><a href="//item.mi.com/re" data-stat-aid="AA10869" data-stat-pid="2_44_3_252" target="_blank"><i class="iconfont">&#xe63b;</i>官翻产品</a></li>
                                        <li class="left"><a href="//www.mi.com/mimobile/" data-stat-aid="AA11244" data-stat-pid="2_44_4_253" target="_blank"><i class="iconfont"></i>小米移动</a></li>
                                        <li class=""><a href="http://huanxin.mi.com/product/list" data-stat-aid="AA12084" data-stat-pid="2_44_5_254" target="_blank"><i class="iconfont"></i>以旧换新</a></li>
                                        <li class=""><a href="http://recharge.10046.mi.com/" data-stat-aid="AA10871" data-stat-pid="2_44_6_255" target="_blank"><i class="iconfont"></i>话费充值</a></li>

                </ul>
            </div>
            <div class="span16" id="J_homePromo" data-stat-title="焦点图下方小图">
                <ul class="home-promo-list clearfix">
                                        <li class="first">
                        <a class="item" href="//item.mi.com/buyphone/hongmi3s" target="_blank"><img alt="红米3s" src="{{asset('Homes/home/Picture/j.jpg')}}"  /></a>
                    </li>
                                        <li>
                        <a class="item" href="//item.mi.com/buyphone/note4" data-stat-aid="AA13683" data-stat-pid="2_16_2_78" target="_blank"><img alt="红米Note4高配现货送米粒" src="{{asset('Homes/home/Picture/p.jpg')}}"  /></a>
                    </li>
                                        <li>
                        <a class="item" href="//www.mi.com/dianfanbao/" data-stat-aid="AA13685" data-stat-pid="2_16_3_79" target="_blank"><img alt="米家压力IH电饭煲" src="{{asset('Homes/home/Picture/l.jpg')}}"  /></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- 816 热门商品推荐位 -->

    <!--  816 热门商品推荐 END-->
        <div class="home-star-goods xm-carousel-container" id="J_homeStar">
        <div class="xm-plain-box">
            <div class="box-hd">
                <h2 class="title">小米明星单品</h2>
                <div class="more"><div class="xm-controls xm-controls-line-small xm-carousel-controls"><a class="control control-prev iconfont" href="javascript: void(0);"></a><a class="control control-next iconfont control-disabled" href="javascript: void(0);"></a></div></div>
            </div>
            <div class="box-bd">
                <div class="xm-carousel-wrapper" style="height: 340px; overflow: hidden;"><ul class="xm-carousel-list xm-carousel-col-5-list goods-list rainbow-list clearfix J_carouselList" style="width: 2480px; margin-left: 0px; transition: margin-left 0.5s ease;">

                                        <li class="rainbow-item-1">
                        <a class="thumb" href="{{URL('home/goodsmessage')}}" ><img src="http://i3.mifile.cn/a4/b8303511-52d2-4ed8-abe2-c97406fb6ace"  alt="红米手机3X 全网通版"></a>
                            <h3 class="title"><a href="" >红米手机3X 全网通版</a></h3>
                            <p class="desc">金属机身，指纹识别，超长待机</p>
                            <p class="price">799元</p>
                    </li>
                                        <li class="rainbow-item-2">
                        <a class="thumb" href="//item.mi.com/buyphone/mimax" ><img src="http://i3.mifile.cn/a4/0df5d106-ab01-4013-87de-a9793094245d"  alt="小米Max"></a>
                            <h3 class="title"><a href="//item.mi.com/buyphone/mimax" >小米Max</a></h3>
                            <p class="desc">6.44" 大屏、4850mAh 大电量</p>
                            <p class="price">1799元</p>
                    </li>
                                        <li class="rainbow-item-3">
                        <a class="thumb" href="//item.mi.com/buyphone/redmipro/" ><img src="http://i3.mifile.cn/a4/f35e0d0a-afae-443c-a7e6-3a49c40e2df1" srcset="http://i3.mifile.cn/a4/267ee5f5-9d2d-4985-ad8e-3908ce666cb1 2x" alt="红米Pro  十核双摄"></a>
                            <h3 class="title"><a href="//item.mi.com/buyphone/redmipro/" >红米Pro  十核双摄</a></h3>
                            <p class="desc"> 赠智能显示保护套+Type-C转接头</p>
                            <p class="price">1499元起</p>
                    </li>
                                        <li class="rainbow-item-4">
                        <a class="thumb" href="//item.mi.com/buymibook/air" ><img src="http://i3.mifile.cn/a4/725a37e3-78b7-4298-8098-c40097bf179d"  alt="小米笔记本"></a>
                            <h3 class="title"><a href="//item.mi.com/buymibook/air" >小米笔记本</a></h3>
                            <p class="desc">独立显卡、超轻薄、金属机身</p>
                            <p class="price">3499元</p>
                    </li>
                                        <li class="rainbow-item-5">
                        <a class="thumb" href="//item.mi.com/static/buymipad" ><img src="http://i3.mifile.cn/a4/4c68c352-fbd3-452d-be90-7b47e4f6ce76"  alt="小米平板2 16GB现货"></a>
                            <h3 class="title"><a href="//item.mi.com/static/buymipad">小米平板2 16GB现货</a></h3>
                            <p class="desc">轻薄全金属，海量内容</p>
                            <p class="price">999元</p>
                    </li>
                                        <li class="rainbow-item-6">
                        <a class="thumb" href="//item.mi.com/buymitv/48" ><img src="http://i3.mifile.cn/a4/74dd9736-f254-4964-a06a-24f0befb21ac"  alt="小米电视3s 48英寸"></a>
                            <h3 class="title"><a href="//item.mi.com/buymitv/48" >小米电视3s 48英寸</a></h3>
                            <p class="desc">原装液晶屏，金属机身</p>
                            <p class="price">1999元</p>
                    </li>
                                        <li class="rainbow-item-7">
                        <a class="thumb" href="//www.mi.com/hezi3/" ><img src="//i3.mifile.cn/a4/T1z4WjB4Ev1RXrhCrK.jpg"  alt="小米盒子3"></a>
                            <h3 class="title"><a href="//www.mi.com/hezi3/" >小米盒子3</a></h3>
                            <p class="desc">全新升级 64位 4K网络机顶盒</p>
                            <p class="price">249元</p>
                    </li>
                                        <li class="rainbow-item-8">
                        <a class="thumb" href="//www.mi.com/shouhuan2/" ><img src="http://i3.mifile.cn/a4/6ef55907-bbed-49be-a2bb-be0821b5f7b8"  alt="小米手环 2"></a>
                            <h3 class="title"><a href="//www.mi.com/shouhuan2/" >小米手环 2</a></h3>
                            <p class="desc">每天早10点开售</p>
                            <p class="price">149元</p>
                    </li>
                                        <li class="rainbow-item-9">
                        <a class="thumb" href="//www.mi.com/mivr1c/" ><img src="http://i3.mifile.cn/a4/1d33d6ed-4a5e-4203-86c1-99f61c52a6c4"  alt="VR眼镜玩具版量产版"></a>
                            <h3 class="title"><a href="//www.mi.com/mivr1c/">VR眼镜玩具版量产版</a></h3>
                            <p class="desc">逼真沉浸感  舒适观看新体验</p>
                            <p class="price">49元</p>
                    </li>
                                        <li class="rainbow-item-10">
                        <a class="thumb" href="//www.mi.com/locatephone" ><img src="http://i3.mifile.cn/a4/2f136baf-38fd-47a1-ac31-74043dc63af0"  alt="米兔定位电话"></a>
                            <h3 class="title"><a href="" >米兔定位电话</a></h3>
                            <p class="desc">时刻定位，守护你所爱</p>
                            <p class="price">169元</p>
                    </li>
                                    </ul></div>
            </div>
        </div>
    </div>
    </div>
<div class="page-main home-main">
    <div class="container">



        <div id="smart" class="home-brick-box home-brick-row-2-box xm-plain-box J_itemBox J_brickBox is-visible loaded" data-from-stat="false">
            <div class="box-hd">
                <h2 class="title">智能硬件</h2>
                <div class="more J_brickNav"><a class="more-link" href="//www.mi.com/smart/" target="_blank" data-stat-id="af955f1c9d87e8ae" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-af955f1c9d87e8ae', '//www.mi.com/smart/', 'pcpid']);">查看全部<i class="iconfont"></i></a></div>
            </div>
            <div class="box-bd J_brickBd"><div class="row">

            <div class="span4 span-first"><ul class="brick-promo-list clearfix"> <li class="brick-item brick-item-l"> <a href="//www.mi.com/air2/" ><img src="http://i3.mifile.cn/a4/d78fc81d-8713-43fe-8387-17f31b4b0745" width="160" height="160" alt=""></a> </li></ul></div>

            <div class="span16"><ul class="brick-list clearfix">

            @foreach($db as $goods)
            @if($goods->cid==42)
             <li class="brick-item brick-item-m brick-item-m-2" data-gid="1161200059"> <div class="figure figure-img"> <a href='{{URL("home/goodsmessage/$goods->id")}}' > <img src='{{asset("$goods->goods_photo")}}' id='imh' width="160" height="160" alt="{{$goods->goods_photo}}"> </a> </div> <h3 class="title"><a href='{{URL("home/goodsmessage/{$goods->id}")}}' >{{$goods->gname}}</a></h3> <p class="desc">四天线设计，更安全更稳定</p> <p class="price"> <span class="num">{{$goods->goods_price}}</span>元  </p>  <div class="flag flag-postfree">免邮费</div>  </li>
             @endif
            @endforeach






              <li class="brick-item brick-item-m brick-item-m-2" data-gid="2162100002"> <div class="figure figure-img"> <a href="//item.mi.com/1162100021.html" > <img src="//i1.mifile.cn/a1/pms_1464071511.37197399!220x220.jpg" width="160" height="160" alt="米家 LED 智能台灯"> </a> </div> <h3 class="title"><a href="//item.mi.com/1162100021.html" >米家 LED 智能台灯</a></h3> <p class="desc">无可视频闪，亮度色温无级调节</p> <p class="price"> <span class="num">169</span>元  </p>  </li>








                    </ul></div>

                    </div></div>
        </div>


        <div id="match" class="home-brick-box home-brick-row-2-box xm-plain-box J_itemBox J_brickBox" data-from-stat="true" data-region-stat="1">
            <div class="box-hd">
                <h2 class="title">搭配</h2>
                <div class="more J_brickNav"></div>
            </div>
            <div class="box-bd J_brickBd"></div>
        </div>
        <div id="accessories" class="home-brick-box home-brick-row-2-box xm-plain-box J_itemBox J_brickBox" data-from-stat="true" data-region-stat="1">
            <div class="box-hd">
                <h2 class="title">配件</h2>
                <div class="more J_brickNav"></div>
            </div>
            <div class="box-bd J_brickBd"></div>
        </div>
        <div id="around" class="home-brick-box home-brick-row-2-box xm-plain-box J_itemBox J_brickBox">
            <div class="box-hd">
                <h2 class="title">周边</h2>
                <div class="more J_brickNav"></div>
            </div>
            <div class="box-bd J_brickBd"></div>
        </div>

        <div id="recommend" class="home-recm-box home-brick-box home-brick-row-1-box xm-plain-box J_itemBox J_recommendBox" data-region-stat="1">
            <div class="box-hd">
                <h2 class="title">为你推荐</h2>
                <div class="more J_brickNav"></div>
            </div>
            <div id="recommend-bd" class="box-bd J_brickBd J_recommend-like"></div>
        </div>
        <div id="comment" class="home-review-box xm-plain-box J_itemBox J_reviewBox">
            <div class="box-hd">
                <h2 class="title">热评产品</h2>
            </div>
            <div class="box-bd J_brickBd"></div>
        </div>

        <div id="content" class="home-content-box xm-plain-box J_itemBox J_contentBox">
            <div class="box-hd">
                <h2 class="title">内容</h2>
            </div>
            <div class="box-bd J_brickBd"></div>
        </div>

        <div id="video" class="home-video-box xm-plain-box J_itemBox J_videoBox">
            <div class="box-hd">
                <h2 class="title">视频</h2>
                <div class="more J_brickNav"></div>
            </div>
            <div class="box-bd J_brickBd"></div>
        </div>
    </div>
</div>
<a class='asd'>14644</a>
<div id="J_modalVideo" class="modal modal-video fade modal-hide">
    <div class="modal-hd">
        <h3 class="title">视频播放</h3>
        <a class="close" data-dismiss="modal" href="javascript: void(0);"><i class="iconfont">&#xe602;</i></a>
    </div>
    <div class="modal-bd">
        <div class="loading"><div class="loader"></div></div>
    </div>
</div>

<script>
function getElementsClass(classnames)
{
        var classobj= new Array();//定义数组

        var classint=0;//定义数组的下标

        var tags=document.getElementsByTagName("*");//获取HTML的所有标签

        for(var i in tags)
        {//对标签进行遍历

                if(tags[i].nodeType==1)
                {//判断节点类型

                        if(tags[i].getAttribute("class") == classnames)//判断和需要CLASS名字相同的，并组成一个数组

                        {

                        classobj[classint]=tags[i];

                        classint++;

                        }

                }

        }
        return classobj;//返回组成的数组
}
//获取装图片的盒子
var div=getElementsClass("slide loaded");
//获取所有的按钮的盒子
var li=getElementsClass("lii");
//设置并启动轮播定时器
var timer=setInterval(run,2000);
//初始化显示的图片
var m=0;
//循环添加鼠标点击事件
for (var i = 0; i < li.length; i++)
{
    (function(i)
    {
        li[i].onclick=function()
        {
            imageshow(i);
            iconshow(i);
            m=i;
        }
    })(i)
};
function run()
{
    if(m>3)
    {
        m=0;
    }
    imageshow(m);
    iconshow(m);
    m++;
}
//上一张
var prev=getElementsClass("ui-prev");
prev['0'].onclick=function()
{
    m=m-1;
    if(m<0)
    {
        m=3;
    }
    imageshow(m);
    iconshow(m);
}
//下一张
prev['0'].onmouseover=function()
{
    clearInterval(timer);
}
var next=getElementsClass("ui-next");
next['0'].onmouseover=function()
{
    clearInterval(timer);
}
next['0'].onclick=function()
{
    m=m+1;
    if(m>3)
    {
        m=0;
    }
    imageshow(m);
    iconshow(m);
}
function imageshow(m)
{
    for (var i = 0; i < div.length; i++) {
        div[i].style.display='none';
    }
    div[m].style.display='block';
    div[m].onmouseover=function(event)
    {
        event.stopPropagation();
        clearInterval(timer);
    }
    div[m].onmouseout=function(event)
    {
        event.stopPropagation();
        timer = setInterval(run,2000);
    }
}
function iconshow(m)
{
    for (var i = 0; i < li.length; i++) {
        li[i].style.backgroundColor='#999';
    };
    li[m].style.backgroundColor='orange';
}
</script>
@endsection
