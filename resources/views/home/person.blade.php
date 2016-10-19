@extends('home/base/message')
@section('message')
<div class="span16">
    <div class="protal-content-update hide">
        <div class="protal-username">
                 </div>
        <p class="msg">我们做了一个小升级：你的用户名可以直接修改啦，去换个酷炫的名字吧。<a href="https://account.xiaomi.com/pass/auth/profile/home" target="_blank" data-stat-id="a7bae9e996d7d321" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-a7bae9e996d7d321', 'https://account.xiaomi.com/pass/auth/profile/home', 'pcpid']);"> 立即前往&gt;</a></p>
    </div>
    <div class="uc-box uc-main-box">
        <div class="uc-content-box portal-content-box">
            <div class="box-bd">
                <div class="portal-main clearfix">
                    <div class="user-card">
                        <h2 class="username">{{ $user->username }}</h2>
                        <p class="tip">早上好～</p>
                        <a class="link" href="{{ URL('home/message/update') }}" target="_blank" data-stat-id="4b099f76f8f470d2" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-4b099f76f8f470d2', 'https://account.xiaomi.com/pass/userInfo', 'pcpid']);">修改个人信息 &gt;</a>
                        <img class="avatar" src='{{ asset("$usermessage->photo") }}' height="150" width="150">
                    </div>
                    <div class="user-actions">
                        <ul class="action-list">
                            <li>账户安全：<span class="level level-3">较高</span></li>
                                                        <li>绑定手机：<span class="tel">{{ $usermessage->phone }}</span></li>

                                                        <li>绑定邮箱：<span class="tel">{{ $usermessage->email }}</span></li>
                                                    </ul>
                    </div>
                </div>
                <div class="portal-sub">
                    <ul class="info-list clearfix">
                        <li>
                            <h3>待支付的订单：<span class="num">0</span></h3>
                            <a href="http://static.mi.com/order/?type=7" data-stat-id="dd6496f77a167a5d" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-dd6496f77a167a5d', '//static.mi.com/order/', 'pcpid']);">查看待支付订单<i class="iconfont"></i></a>
                            <img src="%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83_files/portal-icon-1.png" alt="">
                        </li>
                        <li>
                            <h3>待收货的订单：<span class="num">0</span></h3>
                            <a href="http://static.mi.com/order/?type=8" data-stat-id="92fa860987c1c734" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-92fa860987c1c734', '//static.mi.com/order/', 'pcpid']);">查看待收货订单<i class="iconfont"></i></a>
                            <img src="%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83_files/portal-icon-2.png" alt="">
                        </li>
                        <li>
                            <h3>待评价商品数：<span class="num">0</span></h3>
                            <a href="http://order.mi.com/user/comment?filter=1&amp;r=86855.1476763123" data-stat-id="b4a31da3923196c8" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-b4a31da3923196c8', 'http://order.mi.com/user/comment', 'pcpid']);">查看待评价商品<i class="iconfont"></i></a>
                            <img src="%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83_files/portal-icon-3.png" alt="">
                        </li>
                        <li>
                            <h3>喜欢的商品：<span class="num">0</span></h3>
                            <a href="http://order.mi.com/user/favorite?r=86855.1476763123" data-stat-id="e7f60a4653081c02" onclick="_msq.push(['trackEvent', '45a270e10b1f8e93-e7f60a4653081c02', 'http://order.mi.com/user/favorite', 'pcpid']);">查看喜欢的商品<i class="iconfont"></i></a>
                            <img src="%E4%B8%AA%E4%BA%BA%E4%B8%AD%E5%BF%83_files/portal-icon-4.png" alt="">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="J_modalEditAddress" class="modal fade modal-hide modal-edit-address">
    <div class="modal-body">
        <iframe width="100%" height="100%" frameborder="0" src="./我的收货地址_files/saved_resource.html"></iframe>
    </div>
</div>
        </div>
    </div>
</div>

@endsection
