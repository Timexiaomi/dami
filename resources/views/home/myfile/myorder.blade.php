@extends('home/base/message')
@section('title')
    我的订单
@endsection
@section('message')


<div class="span16">
<div class="uc-box uc-main-box">
    <div class="uc-content-box order-list-box">
        <div class="box-hd">
            <h1 class="title">我的订单<small>请谨防钓鱼链接或诈骗电话</small></h1>
            <div class="more clearfix">
                <ul class="filter-list J_orderType">
                    <li class="first active"><a href="javascript:void(0)" data-type="1" >全部有效订单</a></li>
                    <li><a id="J_unpaidTab" href="javascript:void(0)" data-type="2" >待支付</a></li>
                    <li><a id="J_sendTab" href="http://static.mi.com/order/#type=8" data-type="5">待收货</a></li>
                    <li><a href="http://static.mi.com/order/#type=5" data-type="7" >已关闭</a></li>
                </ul>
            </div>
        </div>
        <div class="box-bd">
            <div id="J_orderList">
                <ul class="order-list">

                    <li class="uc-order-item uc-order-item-pay" state=''>

                        <div class="order-detail">

                            <div class="order-summary">

                                <div class="order-status">等待付款</div>
                                        <p class="order-desc J_deliverDesc">  现在支付，预计3-8天送达 <span class="beta">Beta</span></p>
                                </div>
                                <table class="order-detail-table">
                                    <thead>
                                        <tr>
                                            <th class="col-main">
                                                <p class="caption-info">6548455
                                                        <span class="sep">|</span>65464<span class="sep">|</span>订单号：
                                                            <a href="http://order.mi.com/user/orderView/1161020206300324" >5465645</a>
                                                        <span class="sep">|</span>在线支付
                                                </p>
                                            </th>
                                            <th class="col-sub">
                                                 <p class="caption-price">订单金额：<span class="num"></span>元</p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="order-items">
                                                <ul class="goods-list">
                                                    <li>
                                                        <div class="figure figure-thumb">
                                                            <a href='' > <img src='{{asset("photo/14768076383500.jpg")}}' width="80" height="80" alt=""> </a>
                                                        </div>
                                                        <p class="name"> <a target="_blank" href='' >gname</a>  </p>
                                                        <p class="price">元  </p>
                                                     </li>
                                                </ul>
                                            </td>
                                            <td class="order-actions">
                                                <a class="btn btn-small btn-primary" href='{{URL("home/gopay/51")}}' target="_blank" >立即支付</a>
                                                <a class="btn btn-small btn-line-gray" href="" >订单详情</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </li>
                 </ul>
             </div>
        </div>
    </div>
</div>







@endsection
