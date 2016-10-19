@extends('home/base/base')
@section('content')

<div class="page-main">

    <div class="container">
        <div class="cart-loading loading hide" id="J_cartLoading">
            <div class="loader"></div>
        </div>
        <div class="cart-empty hide" id="J_cartEmpty">
            <h2>您的购物车还是空的！</h2>
            <p class="login-desc">登录后将显示您之前加入的商品</p>
            <a href="http://static.mi.com/cart/#" class="btn btn-primary btn-login" id="J_loginBtn" data-stat-id="7874490dbcbc1e60" onclick="_msq.push([&#39;trackEvent&#39;, &#39;08fae3d5cb3abaaf-7874490dbcbc1e60&#39;, &#39;#&#39;, &#39;pcpid&#39;]);">立即登录</a>
            <a href="http://list.mi.com/0" class="btn btn-primary btn-shoping J_goShoping" data-stat-id="4658a7dfd89505fc" onclick="_msq.push([&#39;trackEvent&#39;, &#39;08fae3d5cb3abaaf-4658a7dfd89505fc&#39;, &#39;//list.mi.com/0&#39;, &#39;pcpid&#39;]);">马上去购物</a>
        </div>
        <div id="J_cartBox" class="">
            <div class="cart-goods-list">
                <div class="list-head clearfix">
                    <div class="col col-check"><i class="iconfont icon-checkbox icon-checkbox-selected" id="J_selectAll">√</i>全选</div>
                    <div class="col col-img">&nbsp;</div>
                    <div class="col col-name">商品名称</div>
                    <div class="col col-price">单价</div>
                    <div class="col col-num">数量</div>
                    <div class="col col-total">小计</div>
                    <div class="col col-action">操作</div>
                </div>
                <div class="list-body" id="J_cartListBody">



                <div class="item-box"> <div class="item-table J_cartGoods" > <div class="item-row clearfix"> <div class="col col-check">  <i class="iconfont icon-checkbox icon-checkbox-selected J_itemCheckbox" data-itemid="2161700017_0_buy" data-status="1">√</i>  </div> <div class="col col-img">  <a href="http://item.mi.com/1161700031.html" target="_blank" > <img alt="" src="./我的购物车-小米商城_files/pms_1469763329.20089751!80x80.jpg" width="80" height="80"> </a>  </div> <div class="col col-name">  <div class="tags">   </div>  <h3 class="name">  <a href="http://item.mi.com/1161700031.html" target="_blank" > 小米Max高配全网通版 3GB内存 银色 64GB </a>  </h3>      </div> <div class="col col-price"> 1499元 </div> <div class="col col-num">  <div class="change-goods-num clearfix J_changeGoodsNum"> <a href="javascript:void(0)" class="J_minus" ><i class="iconfont"></i></a> <input tyep="text" name="2161700017_0_buy" value="1" data-num="1" data-buylimit="50" autocomplete="off" class="goods-num J_goodsNum"> <a href="javascript:void(0)" class="J_plus" ><i class="iconfont"></i></a>  </div>  </div> <div class="col col-total"> 1499元 <p class="pre-info">  </p> </div> <div class="col col-action"> <a id="2161700017_0_buy" data-msg="确定删除吗？" href="javascript:void(0);" title="删除" class="del J_delGoods" ><i class="iconfont"></i></a> </div></div></div>
                 <div class="item-sub-box"> <div class="extend-buy J_showBaoxian" ></i>意外保障服务 小米Max ¥199/份 <a href="javascript:void(0);">查看详细条款</a>
                 </div></div>
</div>

            <div class="cart-bar clearfix" id="J_cartBar">

                    <div class="section-left">
                    <a href="//list.mi.com/0" class="back-shopping J_goShoping" data-stat-id="1c2bffc356c38b34" onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-1c2bffc356c38b34', '//list.mi.com/0', 'pcpid']);">继续购物</a>
                    <span class="cart-total">共 <i id="J_cartTotalNum">2</i> 件商品，已选择 <i id="J_selTotalNum">2</i> 件</span>

                </div>

                <span class="activity-money hide">
                    活动优惠：减 <i id="J_cartActivityMoney">0</i> 元
                </span>
                <span class="total-price">
                    合计（不含运费）：<em id="J_cartTotalPrice">1499.00</em>元
                </span>
                <a href="javascript:void(0);" class="btn btn-a btn btn-primary" id="J_goCheckout" data-stat-id="a4887072ccf6c1d5" onclick="_msq.push([&#39;trackEvent&#39;, &#39;08fae3d5cb3abaaf-a4887072ccf6c1d5&#39;, &#39;javascript:void(0);&#39;, &#39;pcpid&#39;]);">去结算</a>

                <div class="no-select-tip hide" id="J_noSelectTip">
                    请勾选需要结算的商品
                    <i class="arrow arrow-a"></i>
                    <i class="arrow arrow-b"></i>
                </div>
            </div>
</div>
</div>
</div>
</div>
</div>
<script>
<<<<<<< HEAD
          $('body').mousedown(function(){
        $('.header-nav, .header-search').remove();
            $('.header-logo').after('<div class="header-title has-more" id="J_miniHeaderTitle"><h2>我的购物车</h2><p>温馨提示：产品是否购买成功，以最终下单为准哦，请尽快结算</p></div>')
            })
=======

          window.onload=function(){
             $('.header-nav, .header-search').remove();
            $('.header-logo').after('<div class="header-title has-more" id="J_miniHeaderTitle"><h2>我的购物车</h2><p>温馨提示：产品是否购买成功，以最终下单为准哦，请尽快结算</p></div>')
          }
    </script>
>>>>>>> 647f7db4494c59224a414ab1cd184fef53a679a6
</script>

@endsection
