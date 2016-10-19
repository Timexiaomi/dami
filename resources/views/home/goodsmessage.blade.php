
@extends('home/base/base')

@section('title')
{{$good->gname}} 立即购买-小米商城
@endsection
@section('content')



<style>
.msg-bd font {display:none;}
</style>


<style>
    .channel-mihone {
    position: relative;
    height: 600px;
    background: url("//s01.mifile.cn/i/channel/phone-section-05.jpg") no-repeat center;
}
.channel-mihone .channel-mihone-des {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 160px;
    background-color: rgba(0,0,0,0.7);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#b2000000", endColorstr="#b2000000")\9;
    color: #fff;
}
.channel-mihone .channel-mihone-des dl {
    float: left;
    width: 820px;
    padding: 40px 0 0 80px;
}
.channel-mihone ul, .channel-mihone li, .channel-mihone p, .channel-mihone dl, .channel-mihone dt, .channel-mihone dd {
    margin: 0;
    padding: 0;
    list-style: none;
}
.channel-mihone .channel-mihone-des dl dt {
    margin-bottom: 10px;
    font-size: 24px;
    -webkit-font-smoothing: antialiased;
}
.channel-mihone ul, .channel-mihone li, .channel-mihone p, .channel-mihone dl, .channel-mihone dt, .channel-mihone dd {
    margin: 0;
    padding: 0;
    list-style: none;
}
.channel-mihone .channel-mihone-des dl dd {
    line-height: 1.8;
    color: #f5f5f5;
}
.channel-mihone .channel-mihone-des p .btn {
    display: block;
    margin-bottom: 10px;
    background-color: transparent;
}
.channel-mihone .channel-mihone-des p {
    float: right;
    padding: 25px 35px 0 0;
}
</style>

<div class="container buy-choose-box">

    <div class="bd">
        <div class="pro-choose-main clearfix" id="J_chooseMain">
            <div class="pro-view">
                <img src="{{asset('goods/photo/xiaomi5s-huise.jpg')}}" alt="{{$good->gname}}" id="J_proImg">
            </div>
            <div class="pro-info">
                <div class="pro-title clearfix">
                    <h1>
                        <span class="pro-name J_proDesc"  id='{{$good->id}}'>购买{{$good->gname}}</span>
                        <span class="pro-price J_proPrice"></span>
                    </h1>

                </div>
                                   <div id="J_proStep">
                                   <div class="pro-choose-step J_step" data-index="1">
                                   <div class="step-title">
                                   1. 选择版本 <i class="pro-version-desc-icon">!</i> <span class="pro-version-desc J_verDesc" data-index="1" id='data-desc'></span> </div>
                                <ul class="step-list clearfix J_stepList">
                                @foreach($ob as $version)
                                 <li class="J_stepItem " data-index="1" data-node-id="{{$version->id}}" data-desc="{{$version->data}}" title="{{$version->version}}" data-title-price="{{$version->price}}元">  {{$version->version}}  </li>
                                @endforeach
                                  </ul></div>

                                   <div class="pro-choose-step J_step" data-index="2">
                                   <div class="step-title">
                                   2. 选择颜色 <i class="pro-version-desc-icon">!</i> <span class="pro-version-desc J_verDesc" data-index="2"></span> </div>
                                   <ul class="step-list clearfix J_stepList">

                                      </ul></div></div>
                <div class="choose-result-msg" id="J_chooseResultMsg">
                    <span class="msg-tit">您选择了以下产品:</span>
                    <p class="msg-bd">{{$good->gname}} <span id='version'></span> <span id='color'></span></p><span id='price'></span>
                </div>

                <div class="pro-choose-result hide" id="J_chooseResult">
                 <a href="javascript:void(0);" data-gid="2162300011" class="btn btn-primary" id="J_proBuyBtn" > 立即购买 </a>      </div>
                <div class="pro-choose-result " id="J_chooseResultInit">
                <a href="javascript:void(0);" class="btn btn-large btn-dakeLight" data-stat-id="7326452943dc03b6">下一步</a>
                    <!-- <span class="next-desc">请选择商品</span> -->
                </div>
</div>
        <!-- pro-choose_main End-->
</div>
    <!-- bd END -->
</div>
<!-- buy-choose-box END -->

<div class="main-pro-box" id="J_proDetailBox">

    <div class="pro-detail-box">  <div class="section section-image is-visible">  <a target="_blank" href="http://www.mi.com/redmipro/" data-stat-id="c87b7fd77576b4a5" onclick="_msq.push([&#39;trackEvent&#39;, &#39;72b3aa30fd40c009-c87b7fd77576b4a5&#39;, &#39;http://www.mi.com/redmipro/&#39;, &#39;pcpid&#39;]);">  <img class="lazyload" data-img="//c1.mifile.cn/f/i/15/item/buyphone/hongmipro-shenruliaojie.jpg" src="./红米Pro立即购买-小米商城_files/hongmipro-shenruliaojie.jpg">  </a>  </div>

      <div class="section section-image is-visible">  <a target="_blank" href="http://www.mi.com/service/safe/" data-stat-id="f56f8fdeb670acc5" onclick="_msq.push([&#39;trackEvent&#39;, &#39;72b3aa30fd40c009-f56f8fdeb670acc5&#39;, &#39;http://www.mi.com/service/safe/&#39;, &#39;pcpid&#39;]);">  <img class="lazyload" data-img="//c1.mifile.cn/f/i/15/item/buyphone/hongmipro-yiwaibao.jpg" src="{{asset('goods/image/xiaomi5splus-yiwaibao.jpg')}}">  </a>  </div>


       <div class="section section-specs container is-visible"> <div class="spec-title" id="J_showSpec"> 了解小米5sPlus参数<i class="arrow"></i> </div> <ul class="spec-list hide clearfix" id="J_specCon"  data='{{$good->goods_data}}'></ul> </div>
       </div>

</div>

<!--规格-->
    <div class="goods-detail-nav-name-block J_itemBox" id="goodsComment" style="display: block;">
        <div class="container main-block">
            <div class="border-line"></div>
            <h2 class="nav-name">评价晒单</h2>
        </div>
    </div>
    <!--评价-->
    <div class="goods-detail-comment J_itemBox hasContent" id="goodsCommentContent" style="display: block;">


        <div class="goods-detail-comment-content" id="J_commentDetailBlock">
            <div class="container">
                <div class="row">
                    <div class="span14 goods-detail-comment-list">
                        <div class="comment-order-title">
                            <div class="left-title">
                                <h3 class="comment-name">评价</h3>
                            </div>
                        </div>
                        <ul class="comment-box-list" id="J_supComment">
                        @foreach($list as $li)
                         <li class="item-rainbow-8" data-id="131808096">

                          <div class="user-image"> <img src='{{ asset($li->up) }}' alt=''> </div>
                         <dl class="user-comment">

                         <dt class="user-comment-content J_commentContent"> <p class="content-detail">  {{ $li->content }} </p>  </dt>

                          <dd class="user-comment-self-input"> <div class="input-block"> <input  id='{{ $li->id }}' type="text" placeholder="回复楼主" class="J_commentAnswerInput"> <a onclick='huifu(this.name)' name='{{ $li->id }}' href="javascript:void(0);" class="btn  answer-btn J_commentAnswerBtn" data-commentid="131808096">回复</a> </div> </dd>
                          <div class="user-name-info"> <span class="user-name"> {{ $li->usn }} </span> <span class="user-time">{{$li->time }}</span></div>
                           <div class="user-hand-block"> <a href="javascript:void(0);" data-commentid="131808096" class="J_hasHelp "> <i class="iconfont"></i>赞&nbsp;<span class="amount"> 8</span></a> </div>
                          @foreach($reply[$li->id] as $re)
                           <dd class="user-comment-answer"> <img class="self-image" src='{{ asset("$re->p") }}' alt=""> <p>{{ $re->content }}--<span class="answer-user-name">{{ $re->un }}</span> </p> </dd>
                          @endforeach
                            </dl>

                            </li>
                            @endforeach
                         </ul>
                    </div>
                   <div></div>


                </div>

            </div>

        </div>
        <div class="loader-block">
            <div class="loader"></div>
        </div>
        <div class="goods-detail-null-content" id="J_commentTipInfo">
            <div class="container">
                <h3>暂时还没有评价</h3>
                <p>期待你分享科技带来的乐趣</p>
            </div>
        </div>

    </div>



    <div class="container channel-mihone">
        <div class="channel-mihone-des">
            <dl>
                <dt>小米之家及官方授权维修网点</dt>
                <dd>
                    欢迎来小米之家解决你遇到的问题，了解最新的小米官方产品最全面的产品信息，还有很多好玩的活动等你来访。<br>
                    你还可以前往小米授权维修网点解决售后问题，520家网点让服务随时在身边。
                </dd>
            </dl>
            <p>
                <a target="_blank" href="http://www.mi.com/c/xiaomizhijia/" class="btn btn-large btn-line-primary" data-stat-id="92bb525974bcde0e" onclick="_msq.push([&#39;trackEvent&#39;, &#39;72b3aa30fd40c009-92bb525974bcde0e&#39;, &#39;//www.mi.com/c/xiaomizhijia/&#39;, &#39;pcpid&#39;]);">小米之家</a>
                <a target="_blank" href="http://www.mi.com/c/service/poststation/" class="btn btn-large btn-line-primary" data-stat-id="a684b74699138aae" onclick="_msq.push([&#39;trackEvent&#39;, &#39;72b3aa30fd40c009-a684b74699138aae&#39;, &#39;//www.mi.com/c/service/poststation/&#39;, &#39;pcpid&#39;]);">官方维修网点</a>
            </p>
        </div>
    </div>
</div>
<!-- bar -->

<script>
            window.onload=function(){
            $('.header-nav').remove();
            var data= $('#J_specCon').attr('data');
            $('#J_specCon').html(data);
          };


          $('#J_showSpec').mousedown(function(){
                $(this).toggleClass('spec-open');
                $('#J_specCon').toggleClass('hide');
                var name=$('.msg-bd').text()
                console.log(name);
          });


            //版本按下
            $(".J_stepItem[data-index='1']").mousedown(function(){
                    $(".J_stepList:eq(1)").empty();
                    $(".J_stepItem[data-index='1']").removeClass('active');
                    $(this).addClass('active');
                     var data=$(this).attr('data-desc');
                     $('#data-desc').html(data);
                     var price=$(this).attr('data-title-price');
                   $('.J_proPrice').html(price);
                     var version=$(this).attr('title');
                     $('#version').html(version);
                     $('#J_chooseResult').addClass('hide');
                     $('#J_chooseResultInit').removeClass('hide');

                   var id=$(this).attr('data-node-id');

                    $.ajax({
                        url:"{{URL('home/version/color')}}",
                        type:'get',
                        data:{'data':id},
                        headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
                        dataType:'json',

                        success:function(data){

                                 var step=$(".J_stepList:eq(1)");
                                 // console.log(step);
                                    for(var i=0;i<data.length;i++){
                                            var info='<li class="J_stepItem " data-index="2" data-node-id="'+data[i].id+'" data-gid="" data-img="'+data[i].gdimage+'" title="'+data[i].gdcolor+'" data-title-price="" data-opensell="1" data-opensell-status="1" data-opensell-url=""> '+data[i].gdcolor+'</li>';
                                            step.append(info);
                                    }
                                    //颜色按下
            $(".J_stepItem[data-index='2']").mousedown(function(){
                    $(".J_stepItem[data-index='2']").removeClass('active');
                    $(this).addClass('active');
                    var img=$(this).attr('data-img');
                    // console.log(img);
                    $('#J_proImg').attr('src',img);
                    var color=$(this).attr('title');
                    $('#color').html(color);
                    var price=$('.J_proPrice').html();
                    $('#price').html(price);
                    $('#J_chooseResult').removeClass('hide');
                    $('#J_chooseResultInit').addClass('hide');
             });
                        },
                        error:function(){
                                alert('ajax连接失败');
                        },

                    });
            });

      function huifu(en)
      {
          //晒单id
          // alert(en);
          //获取输入的值
          var huifu=$('#'+en).val();
          // alert(huifu);
          $.ajax({
            url:"{{ URL('home/doreply') }}",
            type:'post',
            data:{'cid':en,'content':huifu},
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success:function(data){
               location.reload();
            },
            error:function(){}
          })
      }




</script>



@endsection
