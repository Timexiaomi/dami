@extends('home/base/base')
@section('content')




<div class="page-main user-main">
    <div class="container">
        <div class="row">
            <div class="span4">
                <div class="uc-box uc-sub-box">
                                        <div class="uc-nav-box">
                        <div class="box-hd">
                            <h3 class="title">订单中心</h3>
                        </div>
                        <div class="box-bd">
                            <ul class="uc-nav-list">
                                <li><a href="http://static.mi.com/order/" data-stat-id="8f3d1bffd166dc22" onclick="_msq.push([&#39;trackEvent&#39;, &#39;45a270e10b1f8e93-8f3d1bffd166dc22&#39;, &#39;//static.mi.com/order/&#39;, &#39;pcpid&#39;]);">我的订单</a></li>
                                <li><a href="http://service.order.mi.com/insurance/payServiceList?_r=61825.1476562821" data-stat-id="3979d578f6a2f18a" onclick="_msq.push([&#39;trackEvent&#39;, &#39;45a270e10b1f8e93-3979d578f6a2f18a&#39;, &#39;http://service.order.mi.com/insurance/payServiceList&#39;, &#39;pcpid&#39;]);">意外保</a></li>
                                <li><a href="http://static.mi.com/order/#type=11" data-stat-id="1a3f726cf268373b" onclick="_msq.push([&#39;trackEvent&#39;, &#39;45a270e10b1f8e93-1a3f726cf268373b&#39;, &#39;//static.mi.com/order/#type=11&#39;, &#39;pcpid&#39;]);">团购订单</a></li>
                                <li><a href="http://order.mi.com/user/comment?filter=1&amp;r=61825.1476562821" data-count="comment" data-count-style="bracket" data-stat-id="20db2c68bfa9e4a5" onclick="_msq.push([&#39;trackEvent&#39;, &#39;45a270e10b1f8e93-20db2c68bfa9e4a5&#39;, &#39;http://order.mi.com/user/comment&#39;, &#39;pcpid&#39;]);">评价晒单</a></li>
                                <li><a href="http://recharge.10046.mi.com/list" data-stat-id="709bb6fa38f217b6" onclick="_msq.push([&#39;trackEvent&#39;, &#39;45a270e10b1f8e93-709bb6fa38f217b6&#39;, &#39;http://recharge.10046.mi.com/list&#39;, &#39;pcpid&#39;]);">话费充值订单</a></li>
                                <li><a href="http://huanxin.mi.com/order/list?r=61825.1476562821" data-stat-id="7d1138daa4456860" onclick="_msq.push([&#39;trackEvent&#39;, &#39;45a270e10b1f8e93-7d1138daa4456860&#39;, &#39;http://huanxin.mi.com/order/list&#39;, &#39;pcpid&#39;]);">以旧换新订单</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="uc-nav-box">
                        <div class="box-hd">
                            <h3 class="title">个人中心</h3>
                        </div>
                        <div class="box-bd">
                            <ul class="uc-nav-list">
                                <li class="active"><a href="http://order.mi.com/portal?r=61825.1476562821" data-stat-id="00e076c95d370478" onclick="_msq.push([&#39;trackEvent&#39;, &#39;45a270e10b1f8e93-00e076c95d370478&#39;, &#39;http://order.mi.com/portal&#39;, &#39;pcpid&#39;]);">我的个人中心</a></li>
                                <li><a href="http://order.mi.com/message/list?r=61825.1476562821" data-stat-id="33b15449518ae3ec" onclick="_msq.push([&#39;trackEvent&#39;, &#39;45a270e10b1f8e93-33b15449518ae3ec&#39;, &#39;http://order.mi.com/message/list&#39;, &#39;pcpid&#39;]);">消息通知<i class="J_miMessageTotal"></i></a></li>
                                <li><a href="http://order.mi.com/cashAccount?r=61825.1476562821" data-stat-id="a52bf798dafa9754" onclick="_msq.push([&#39;trackEvent&#39;, &#39;45a270e10b1f8e93-a52bf798dafa9754&#39;, &#39;http://order.mi.com/cashAccount&#39;, &#39;pcpid&#39;]);">现金账户</a></li>
                                <li><a href="http://order.mi.com/ecard/bind?r=61825.1476562821" data-stat-id="bad8210fdb9088c4" onclick="_msq.push([&#39;trackEvent&#39;, &#39;45a270e10b1f8e93-bad8210fdb9088c4&#39;, &#39;http://order.mi.com/ecard/bind&#39;, &#39;pcpid&#39;]);">小米礼品卡</a></li>
                                <li><a href="http://order.mi.com/huanxin/list?r=61825.1476562821" data-stat-id="593e8c9f8e61bcdc" onclick="_msq.push([&#39;trackEvent&#39;, &#39;45a270e10b1f8e93-593e8c9f8e61bcdc&#39;, &#39;http://order.mi.com/huanxin/list&#39;, &#39;pcpid&#39;]);">手机换新券</a></li>
                                <li><a href="http://order.mi.com/user/favorite?r=61825.1476562821" data-stat-id="0c25ea23fee92211" onclick="_msq.push([&#39;trackEvent&#39;, &#39;45a270e10b1f8e93-0c25ea23fee92211&#39;, &#39;http://order.mi.com/user/favorite&#39;, &#39;pcpid&#39;]);">喜欢的商品</a></li>
                                <li><a href="http://order.mi.com/user/coupon?r=61825.1476562821" data-stat-id="cdcec10f2cbe6b42" onclick="_msq.push([&#39;trackEvent&#39;, &#39;45a270e10b1f8e93-cdcec10f2cbe6b42&#39;, &#39;http://order.mi.com/user/coupon&#39;, &#39;pcpid&#39;]);">优惠券</a></li>
                                <li><a href="http://order.mi.com/user/address?r=61825.1476562821" data-stat-id="48ecd23c6e6e50ba" onclick="_msq.push([&#39;trackEvent&#39;, &#39;45a270e10b1f8e93-48ecd23c6e6e50ba&#39;, &#39;http://order.mi.com/user/address&#39;, &#39;pcpid&#39;]);">收货地址</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="uc-nav-box">
                        <div class="box-hd">
                            <h3 class="title">售后服务</h3>
                        </div>
                        <div class="box-bd">
                            <ul class="uc-nav-list">
                                                                <li><a href="http://service.order.mi.com/record/list?_r=61825.1476562821" data-stat-id="cee379f43f5f5fc2" onclick="_msq.push([&#39;trackEvent&#39;, &#39;45a270e10b1f8e93-cee379f43f5f5fc2&#39;, &#39;http://service.order.mi.com/record/list&#39;, &#39;pcpid&#39;]);">服务记录</a></li>
                                <li><a href="http://service.order.mi.com/apply/front?_r=61825.1476562821" data-stat-id="ea8d1b6b70410c1b" onclick="_msq.push([&#39;trackEvent&#39;, &#39;45a270e10b1f8e93-ea8d1b6b70410c1b&#39;, &#39;http://service.order.mi.com/apply/front&#39;, &#39;pcpid&#39;]);">申请服务</a></li>
                                <li><a href="http://service.order.mi.com/user/compensate?_r=61825.1476562821" data-stat-id="5aedd7982a0a1069" onclick="_msq.push([&#39;trackEvent&#39;, &#39;45a270e10b1f8e93-5aedd7982a0a1069&#39;, &#39;http://service.order.mi.com/user/compensate&#39;, &#39;pcpid&#39;]);">领取快递报销</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="uc-nav-box">
                        <div class="box-hd">
                            <h3 class="title">账户管理</h3>
                        </div>
                        <div class="box-bd">
                            <ul class="uc-nav-list">
                                <li><a href="https://account.xiaomi.com/" target="_blank" data-stat-id="35eef2fd7467d6ca" onclick="_msq.push([&#39;trackEvent&#39;, &#39;45a270e10b1f8e93-35eef2fd7467d6ca&#39;, &#39;https://account.xiaomi.com/&#39;, &#39;pcpid&#39;]);">个人信息</a></li>
                                <li><a href="https://account.xiaomi.com/pass/auth/security/home#service=setPassword" target="_blank" data-stat-id="ae5ee0188510f1e6" onclick="_msq.push([&#39;trackEvent&#39;, &#39;45a270e10b1f8e93-ae5ee0188510f1e6&#39;, &#39;https://account.xiaomi.com/pass/auth/security/home#service=setPassword&#39;, &#39;pcpid&#39;]);">修改密码</a></li>
                                <li><a href="http://uvip.xiaomi.cn/" target="_blank" data-stat-id="c130c3dbf41fd4d8" onclick="_msq.push([&#39;trackEvent&#39;, &#39;45a270e10b1f8e93-c130c3dbf41fd4d8&#39;, &#39;http://uvip.xiaomi.cn&#39;, &#39;pcpid&#39;]);">社区VIP认证</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


<div class="span16">
    <div class="protal-content-update hide">
        <div class="protal-username">
            Hi, 呵呵        </div>
        <p class="msg">我们做了一个小升级：你的用户名可以直接修改啦，去换个酷炫的名字吧。<a href="https://account.xiaomi.com/pass/auth/profile/home" target="_blank" data-stat-id="a7bae9e996d7d321" onclick="_msq.push([&#39;trackEvent&#39;, &#39;45a270e10b1f8e93-a7bae9e996d7d321&#39;, &#39;https://account.xiaomi.com/pass/auth/profile/home&#39;, &#39;pcpid&#39;]);"> 立即前往&gt;</a></p>
    </div>
    <div class="uc-box uc-main-box">
        <div class="uc-content-box portal-content-box">
            <div class="box-bd">
                <div class="portal-main clearfix">
                    <div class="user-card">
                        <h2 class="username">呵呵</h2>
                        <p class="tip">早上好～</p>
                        <a class="link" href="https://account.xiaomi.com/pass/userInfo" target="_blank" data-stat-id="4b099f76f8f470d2" onclick="_msq.push([&#39;trackEvent&#39;, &#39;45a270e10b1f8e93-4b099f76f8f470d2&#39;, &#39;https://account.xiaomi.com/pass/userInfo&#39;, &#39;pcpid&#39;]);">修改个人信息 &gt;</a>
                        <img class="avatar" src="./个人中心_files/Mqffbith6C8vbd_320.jpg" width="150" height="150" alt="呵呵">
                    </div>
                    <div class="user-actions">
                        <ul class="action-list">
                            <li>账户安全：<span class="level level-2">普通</span></li>
                                                        <li>绑定手机：<span class="tel">138********29</span></li>

                                                        <li>绑定邮箱：<span class="tel"></span><a class="btn btn-small btn-primary" href="https://account.xiaomi.com/pass/userInfo" target="_blank" data-stat-id="f51e486b2c529448" onclick="_msq.push([&#39;trackEvent&#39;, &#39;45a270e10b1f8e93-f51e486b2c529448&#39;, &#39;https://account.xiaomi.com/pass/userInfo&#39;, &#39;pcpid&#39;]);">绑定</a></li>
                                                    </ul>
                    </div>
                </div>
                <div class="portal-sub">
                    <ul class="info-list clearfix">
                        <li>
                            <h3>待支付的订单：<span class="num">0</span></h3>
                            <a href="http://static.mi.com/order/?type=7" data-stat-id="dd6496f77a167a5d" onclick="_msq.push([&#39;trackEvent&#39;, &#39;45a270e10b1f8e93-dd6496f77a167a5d&#39;, &#39;//static.mi.com/order/&#39;, &#39;pcpid&#39;]);">查看待支付订单<i class="iconfont"></i></a>
                            <img src="./个人中心_files/portal-icon-1.png" alt="">
                        </li>
                        <li>
                            <h3>待收货的订单：<span class="num">0</span></h3>
                            <a href="http://static.mi.com/order/?type=8" data-stat-id="92fa860987c1c734" onclick="_msq.push([&#39;trackEvent&#39;, &#39;45a270e10b1f8e93-92fa860987c1c734&#39;, &#39;//static.mi.com/order/&#39;, &#39;pcpid&#39;]);">查看待收货订单<i class="iconfont"></i></a>
                            <img src="./个人中心_files/portal-icon-2.png" alt="">
                        </li>
                        <li>
                            <h3>待评价商品数：<span class="num">0</span></h3>
                            <a href="http://order.mi.com/user/comment?filter=1&amp;r=61825.1476562821" data-stat-id="b4a31da3923196c8" onclick="_msq.push([&#39;trackEvent&#39;, &#39;45a270e10b1f8e93-b4a31da3923196c8&#39;, &#39;http://order.mi.com/user/comment&#39;, &#39;pcpid&#39;]);">查看待评价商品<i class="iconfont"></i></a>
                            <img src="./个人中心_files/portal-icon-3.png" alt="">
                        </li>
                        <li>
                            <h3>喜欢的商品：<span class="num">2</span></h3>
                            <a href="http://order.mi.com/user/favorite?r=61825.1476562821" data-stat-id="e7f60a4653081c02" onclick="_msq.push([&#39;trackEvent&#39;, &#39;45a270e10b1f8e93-e7f60a4653081c02&#39;, &#39;http://order.mi.com/user/favorite&#39;, &#39;pcpid&#39;]);">查看喜欢的商品<i class="iconfont"></i></a>
                            <img src="./个人中心_files/portal-icon-4.png" alt="">
                        </li>
                    </ul>
                </div>
            </div>
</div></div></div></div></div></div>

@endsection
