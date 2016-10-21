@extends('home/base/message')
@section('title')
    我的评价
@endsection
@section('message')


<div class="span16">
<div class="uc-box uc-main-box">
    <div class="uc-content-box order-list-box">
        <div class="box-hd">
            <h1 class="title">商品评价</h1>
            <div class="more clearfix">
                <ul class="filter-list J_orderType">
                    <li ><a id="J_unpaidTab" href="{{ URL('home/message/mycomment') }}" data-type="2" >待评价商品</a></li>
                    <li class="first active"><a id="J_sendTab" href="javascript:void(0)" data-type="5">已评价商品</a></li>
                    <li><a href="{{ URL('home/message/mycomment3') }}" data-type="7" >评论失效商品</a></li>
                </ul>
            </div>
        </div>
        @foreach($status as $key=>$gc)
        <div class="box-bd">
            <div id="J_orderList">
                <ul class="order-list">

                    <li class="uc-order-item uc-order-item-pay" state=''>

                        <div class="order-detail">

                            <div class="order-summary">


                                <table class="order-detail-table">
                                    <tbody>
                                        <tr>
                                            <td class="order-items">
                                                {{ $gname[$key] }}
                                            </td>
                                            <td class="order-items">
                                                    <a href='{{ URL("home/goodsmessage/$gid[$key]")}}' > <img src='{{asset("$image[$key]")}}' width="80" height="80" alt=""> </a>
                                            </td>
                                            <td class="order-actions">
                                                {{ $price[$key] }}
                                            </td>
                                            <td class="order-actions">
                                                <!-- <a class="btn btn-small btn-primary" href='{{URL("home/gopay/51")}}' target="_blank" >评价</a> -->
                                                <!-- <a class="btn btn-small btn-line-gray" href="" >查看回复</a> -->
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </li>
                 </ul>
             </div>
        </div>
        @endforeach
    </div>
</div>







@endsection

