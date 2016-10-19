@extends('home/base/base')

@section('content')
<div class="page-main">
    <div class="container confirm-box">
                <form target="_blank" action="http://order.mi.com/buy/confirm?id=1161016982800262#" id="J_payForm" method="post">
            <div class="section section-order">
                <div class="order-info clearfix">
                    <div class="fl">
                        <h2 class="title">订单提交成功！去付款咯～</h2>
                        <p class="order-time" id="J_deliverDesc">成功付款后，7天发货</p>
                        <p class="order-time">请在<span class="pay-time-tip">1小时57分</span>内完成支付, 超时后将取消订单</p>
                        <p class="post-info" id="J_postInfo">
                                                        收货信息：韩宇航 138****5929 &nbsp;&nbsp;
                            河南&nbsp;&nbsp;许昌市&nbsp;&nbsp;长葛市&nbsp;&nbsp;董村镇&nbsp;&nbsp;韩庄村130号                                                    </p>
                    </div>
                    <div class="fr">
                        <p class="total">
                            应付总额：<span class="money"><em>1499.00</em>元</span>
                        </p>
                        <a href="javascript:void(0);" class="show-detail" id="J_showDetail" data-stat-id="f6ce11cebe4cd0c7" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-f6ce11cebe4cd0c7&#39;, &#39;javascript:void(0);&#39;, &#39;pcpid&#39;]);">订单详情<i class="iconfont"></i></a>
                    </div>
                </div>
                <i class="iconfont icon-right">√</i>
                <div class="order-detail">
                    <ul>
                        <li class="clearfix">
                            <div class="label">订单号：</div>
                            <div class="content">
                                <span class="order-num">
                                    1161016982800262                                </span>
                            </div>
                        </li>
                        <li class="clearfix">
                                                        <div class="label">收货信息：</div>
                            <div class="content">
                            韩宇航 138****5929&nbsp;&nbsp;
                            河南&nbsp;&nbsp;许昌市&nbsp;&nbsp;长葛市&nbsp;&nbsp;董村镇&nbsp;&nbsp;韩庄村130号                            </div>
                                                    </li>
                        <li class="clearfix">
                            <div class="label">商品名称：</div>
                            <div class="content">
                                小米Max高配全网通版 3GB内存 银色 64GB<br>智能显示保护套 银色                            </div>
                        </li>
                                                <li class="clearfix">
                            <div class="label">配送时间：</div>
                            <div class="content">
                                不限送货时间                            </div>
                        </li>
                                                <li class="clearfix">
                            <div class="label">发票信息：</div>
                            <div class="content">
                                个人电子发票                            </div>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="section section-payment">
                <div class="cash-title" id="J_cashTitle">
                                        选择以下支付方式付款
                                    </div>

                <!-- <div class="payment-box">
                    <div class="payment-header clearfix">
                        <h3 class="title">最近使用过: </h3>
                    </div>
                    <div class="payment-body">
                        <ul class="clearfix payment-list J_paymentList J_linksign-customize">
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div> -->

                <div class="payment-box ">
                    <div class="payment-header clearfix">
                        <h3 class="title">支付平台</h3>
                        <span class="desc"></span>
                    </div>
                    <div class="payment-body">
                        <ul class="clearfix payment-list J_paymentList J_linksign-customize">
                            <li id="J_weixin" data-stat-id="ecb19ebff89bfe8d" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-ecb19ebff89bfe8d&#39;, &#39;&#39;, &#39;pcpid&#39;]);"> <img src="./选择在线支付方式_files/wechat0715.jpg" alt="" style="margin-left: 0;"></li><li class="J_bank" data-stat-id="697962cd4871b27e" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-697962cd4871b27e&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input type="radio" name="payOnlineBank" id="alipay" value="alipay"> <img src="./选择在线支付方式_files/alipay-0718-1.png" alt="" style="margin-left: 0;"></li><li class="J_bank" data-stat-id="f8ac83d702a1fcfd" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-f8ac83d702a1fcfd&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input type="radio" name="payOnlineBank" id="unionpay" value="unionpay"> <img src="./选择在线支付方式_files/unionpay0524.png" alt="" style="margin-left: 0;"></li><li class="J_bank" data-stat-id="c6597ab9a9e0bd00" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-c6597ab9a9e0bd00&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input type="radio" name="payOnlineBank" id="cft" value="cft"> <img src="./选择在线支付方式_files/cft.png" alt="" style="margin-left: 0;"></li><li class="J_bank" data-stat-id="a87f620c78db2b2b" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-a87f620c78db2b2b&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input type="radio" name="payOnlineBank" id="micash" value="micash"> <img src="./选择在线支付方式_files/micash.png" alt="" style="margin-left: 0;"></li>                        </ul>
                                                                        <div class="event-desc">
                            <p>微信支付：关注小米手机微信公众号，支付成功后可领取3-10元电影票红包。</p><p>支 付 宝：支付宝扫码支付满38元，参与赢取1999元红包</p><p>银联在线支付：每天10点，银联卡（卡号62开头）付款，每单享6.2折（最高立减30元），数量有限。</p>                            <a href="http://www.mi.com/c/payrule/" class="more" target="_blank" data-stat-id="e77b22cecb60b77e" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-e77b22cecb60b77e&#39;, &#39;http://www.mi.com/c/payrule/&#39;, &#39;pcpid&#39;]);">了解更多&gt;</a>
                        </div>
                                            </div>
                </div>

                <div class="payment-box ">
                    <div class="payment-header clearfix">
                        <h3 class="title">银行借记卡及信用卡</h3>
                    </div>
                    <div class="payment-body">
                        <ul class="clearfix payment-list payment-list-much J_paymentList J_linksign-customize">
                            <li class="J_bank" data-stat-id="ab154aed085947cf" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-ab154aed085947cf&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input type="radio" name="payOnlineBank" id="CMB" value="CMB"> <img src="./选择在线支付方式_files/payOnline_zsyh.png" alt=""></li><li class="J_bank" data-stat-id="7998330cbb62eecb" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-7998330cbb62eecb&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input type="radio" name="payOnlineBank" id="ICBCB2C" value="ICBCB2C"> <img src="./选择在线支付方式_files/payOnline_gsyh.png" alt=""></li><li class="J_bank" data-stat-id="0ca03e76abb984c8" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-0ca03e76abb984c8&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input type="radio" name="payOnlineBank" id="CCB" value="CCB"> <img src="./选择在线支付方式_files/payOnline_jsyh.png" alt=""></li><li class="J_bank" data-stat-id="06de530039da8b38" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-06de530039da8b38&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input type="radio" name="payOnlineBank" id="COMM" value="COMM"> <img src="./选择在线支付方式_files/payOnline_jtyh.png" alt=""></li><li class="J_bank" data-stat-id="8656db966e93f938" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-8656db966e93f938&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input type="radio" name="payOnlineBank" id="ABC" value="ABC"> <img src="./选择在线支付方式_files/payOnline_nyyh.png" alt=""></li><li class="J_bank" data-stat-id="248651d06000e2a7" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-248651d06000e2a7&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input type="radio" name="payOnlineBank" id="BOCB2C" value="BOCB2C"> <img src="./选择在线支付方式_files/payOnline_zgyh.png" alt=""></li><li class="J_bank" data-stat-id="8fa40e5ac268b29e" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-8fa40e5ac268b29e&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input type="radio" name="payOnlineBank" id="PSBC-DEBIT" value="PSBC-DEBIT"> <img src="./选择在线支付方式_files/payOnline_youzheng.png" alt=""></li><li class="J_bank" data-stat-id="ab2fd7c15b466ad2" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-ab2fd7c15b466ad2&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input type="radio" name="payOnlineBank" id="GDB" value="GDB"> <img src="./选择在线支付方式_files/payOnline_gfyh.png" alt=""></li><li class="J_bank" data-stat-id="a3c47799e97d470d" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-a3c47799e97d470d&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input type="radio" name="payOnlineBank" id="SPDB" value="SPDB"> <img src="./选择在线支付方式_files/payOnline_pufa.png" alt=""></li><li class="J_bank" data-stat-id="56565ba582001f90" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-56565ba582001f90&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input type="radio" name="payOnlineBank" id="CEBBANK" value="CEBBANK"> <img src="./选择在线支付方式_files/payOnline_gdyh.png" alt=""></li><li class="J_bank" data-stat-id="4768ae2336413eb6" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-4768ae2336413eb6&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input type="radio" name="payOnlineBank" id="SPABANK" value="SPABANK"> <img src="./选择在线支付方式_files/payOnline_payh.png" alt=""></li><li class="J_bank hide" data-stat-id="6eef43a83d87cc0b" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-6eef43a83d87cc0b&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input type="radio" name="payOnlineBank" id="CIB" value="CIB"> <img src="./选择在线支付方式_files/payOnline_xyyh.png" alt=""></li><li class="J_bank hide" data-stat-id="c7a05519141a406a" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-c7a05519141a406a&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input type="radio" name="payOnlineBank" id="CMBC" value="CMBC"> <img src="./选择在线支付方式_files/payOnline_msyh.png" alt=""></li><li class="J_bank hide" data-stat-id="cf61ac1722da02b2" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-cf61ac1722da02b2&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input type="radio" name="payOnlineBank" id="BOB" value="BOB"> <img src="./选择在线支付方式_files/payOnline_bjyh.png" alt=""></li><li class="J_bank hide" data-stat-id="97f3869e8b59e807" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-97f3869e8b59e807&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input type="radio" name="payOnlineBank" id="CITIC" value="CITIC"> <img src="./选择在线支付方式_files/payOnline_zxyh.png" alt=""></li><li class="J_bank hide" data-stat-id="182a6540a166f721" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-182a6540a166f721&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input type="radio" name="payOnlineBank" id="SHBANK" value="SHBANK"> <img src="./选择在线支付方式_files/payOnline_shyh.png" alt=""></li><li class="J_bank hide" data-stat-id="0c1fd9edbb2ffdf3" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-0c1fd9edbb2ffdf3&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input type="radio" name="payOnlineBank" id="BJRCB" value="BJRCB"> <img src="./选择在线支付方式_files/payOnline_bjnsyh.png" alt=""></li><li class="J_bank hide" data-stat-id="e2164be795d58002" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-e2164be795d58002&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input type="radio" name="payOnlineBank" id="NBBANK" value="NBBANK"> <img src="./选择在线支付方式_files/payOnline_nbyh.png" alt=""></li><li class="J_bank hide" data-stat-id="ce440019c46271da" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-ce440019c46271da&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input type="radio" name="payOnlineBank" id="HZCBB2C" value="HZCBB2C"> <img src="./选择在线支付方式_files/payOnline_hzyh.png" alt=""></li><li class="J_bank hide" data-stat-id="fb2ff0b9b59d50a2" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-fb2ff0b9b59d50a2&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input type="radio" name="payOnlineBank" id="SHRCB" value="SHRCB"> <img src="./选择在线支付方式_files/payOnline_shnsyh.png" alt=""></li><li class="J_bank hide" data-stat-id="0205e246484532b1" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-0205e246484532b1&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input type="radio" name="payOnlineBank" id="FDB" value="FDB"> <img src="./选择在线支付方式_files/payOnline_fcyh.png" alt=""></li>                            <li class="J_showMore" data-stat-id="438f30cb13592bdd" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-438f30cb13592bdd&#39;, &#39;&#39;, &#39;pcpid&#39;]);">
                                <span class="text">查看更多</span>
                                <span class="text  hide">收起更多</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="payment-box payment-box-last ">
                    <div class="payment-header clearfix">
                        <h3 class="title">快捷支付</h3>
                        <span class="desc">（支持以下各银行信用卡以及部分银行借记卡）</span>
                    </div>
                    <div class="payment-body">
                        <ul class="clearfix payment-list  J_paymentList J_linksign-customize">
                            <li class="J_bank" data-stat-id="cf5c79caebd4ce4d" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-cf5c79caebd4ce4d&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input type="radio" name="payOnlineBank" id="CMB-KQ" value="CMB-KQ"> <img src="./选择在线支付方式_files/payOnline_zsyh.png" alt=""></li><li class="J_bank" data-stat-id="7659e125813c697e" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-7659e125813c697e&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input type="radio" name="payOnlineBank" id="COMM-KQ" value="COMM-KQ"> <img src="./选择在线支付方式_files/payOnline_jtyh.png" alt=""></li><li class="J_bank" data-stat-id="ac8d246311892220" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-ac8d246311892220&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input type="radio" name="payOnlineBank" id="CCB-KQ" value="CCB-KQ"> <img src="./选择在线支付方式_files/payOnline_jsyh.png" alt=""></li><li class="J_bank" data-stat-id="ee06952bbd4f4d0a" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-ee06952bbd4f4d0a&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input type="radio" name="payOnlineBank" id="ICBCB2C-KQ" value="ICBCB2C-KQ"> <img src="./选择在线支付方式_files/payOnline_gsyh.png" alt=""></li><li class="J_bank" data-stat-id="74411e695cd6624e" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-74411e695cd6624e&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input type="radio" name="payOnlineBank" id="CITIC-KQ" value="CITIC-KQ"> <img src="./选择在线支付方式_files/payOnline_zxyh.png" alt=""></li><li class="J_bank" data-stat-id="6a609f8ffa09ec9d" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-6a609f8ffa09ec9d&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input type="radio" name="payOnlineBank" id="CEBBANK-KQ" value="CEBBANK-KQ"> <img src="./选择在线支付方式_files/payOnline_gdyh.png" alt=""></li><li class="J_bank" data-stat-id="3f5bfe4137171a90" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-3f5bfe4137171a90&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input type="radio" name="payOnlineBank" id="BOCB2C-KQ" value="BOCB2C-KQ"> <img src="./选择在线支付方式_files/payOnline_zgyh.png" alt=""></li><li class="J_bank" data-stat-id="b64f8a9b6dd3b75c" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-b64f8a9b6dd3b75c&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input type="radio" name="payOnlineBank" id="SRCB-KQ" value="SRCB-KQ"> <img src="./选择在线支付方式_files/payOnline_shncsyyh.png" alt=""></li><li class="J_bank" data-stat-id="729ad1d14eee2a2f" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-729ad1d14eee2a2f&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input type="radio" name="payOnlineBank" id="JSB-KQ" value="JSB-KQ"> <img src="./选择在线支付方式_files/payOnline_jiangsshuyh.png" alt=""></li><li class="J_bank" data-stat-id="9aa4813e4a7fd47c" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-9aa4813e4a7fd47c&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input type="radio" name="payOnlineBank" id="CMBC-KQ" value="CMBC-KQ"> <img src="./选择在线支付方式_files/payOnline_msyh.png" alt=""></li><li class="J_bank" data-stat-id="3420e08efd3d3e67" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-3420e08efd3d3e67&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input type="radio" name="payOnlineBank" id="CIB-KQ" value="CIB-KQ"> <img src="./选择在线支付方式_files/payOnline_xyyh.png" alt=""></li><li class="J_bank" data-stat-id="61c6b46df23af369" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-61c6b46df23af369&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input type="radio" name="payOnlineBank" id="ABC-KQ" value="ABC-KQ"> <img src="./选择在线支付方式_files/payOnline_nyyh.png" alt=""></li><li class="J_bank" data-stat-id="b4dc808a450a09da" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-b4dc808a450a09da&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input type="radio" name="payOnlineBank" id="SPABANK-KQ" value="SPABANK-KQ"> <img src="./选择在线支付方式_files/payOnline_payh.png" alt=""></li><li class="J_bank" data-stat-id="5c39e922eb18bc68" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-5c39e922eb18bc68&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input type="radio" name="payOnlineBank" id="HXB-KQ" value="HXB-KQ"> <img src="./选择在线支付方式_files/payOnline_hyyh.png" alt=""></li><li class="J_bank" data-stat-id="adc2b0678ca52fb2" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-adc2b0678ca52fb2&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input type="radio" name="payOnlineBank" id="GDB-KQ" value="GDB-KQ"> <img src="./选择在线支付方式_files/payOnline_gfyh.png" alt=""></li><li class="J_bank" data-stat-id="98be692d1af3737a" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-98be692d1af3737a&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input type="radio" name="payOnlineBank" id="BOB-KQ" value="BOB-KQ"> <img src="./选择在线支付方式_files/payOnline_bjyh.png" alt=""></li>                        </ul>
                    </div>
                </div>
            </div>
                        <div class="section section-installment" id="J_paymentFenqi">
                <div class="payment-box">
                    <div class="payment-header clearfix">
                        <h3 class="title">分期付款</h3>
                        <span class="desc">（支持金额在 600~30000元 的订单）</span>
                    </div>
                    <div class="payment-body">
                        <ul class="clearfix payment-list J_paymentList J_linksign-customize J_tabSwitch">
                            <li class="J_bank fenqi" id="J_huabeifenqi" data-isinstalment="true" data-stat-id="51d1f1c2f3929a84" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-51d1f1c2f3929a84&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input autocomplete="off" type="radio" name="payOnlineBank" id="antinstal" value="antinstal"> <img src="./选择在线支付方式_files/payOnline_ant_huabei.png" alt=""></li><li class="J_bank fenqi" data-isinstalment="true" data-stat-id="632ea04d66eb9712" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-632ea04d66eb9712&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input autocomplete="off" type="radio" name="payOnlineBank" id="cmbinstal" value="cmbinstal"> <img src="./选择在线支付方式_files/payOnline_zsyh(1).png" alt=""></li><li class="J_bank fenqi" data-isinstalment="true" data-stat-id="7b800eee8de964e2" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-7b800eee8de964e2&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input autocomplete="off" type="radio" name="payOnlineBank" id="CCB-INSTAL" value="CCB-INSTAL"> <img src="./选择在线支付方式_files/payOnline_jsyh(1).png" alt=""></li><li class="J_bank fenqi" data-isinstalment="true" data-stat-id="70348534b5926f1c" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-70348534b5926f1c&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input autocomplete="off" type="radio" name="payOnlineBank" id="ICBCB2C-INSTAL" value="ICBCB2C-INSTAL"> <img src="./选择在线支付方式_files/payOnline_gsyh(1).png" alt=""></li><li class="J_bank fenqi" data-isinstalment="true" data-stat-id="dc4e587fdc2d7987" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-dc4e587fdc2d7987&#39;, &#39;&#39;, &#39;pcpid&#39;]);"><input autocomplete="off" type="radio" name="payOnlineBank" id="ABC-INSTAL" value="ABC-INSTAL"> <img src="./选择在线支付方式_files/payOnline_nyyh(1).png" alt=""></li>                        </ul>
                        <div class="tab-container clearfix isinstalment-box">
                                                        <div class="tab-content  clearfix">
                                                                <div class="isinstalment-item  clearfix" style="height:150px;">
                                    <div class="item-header">
                                        <h3>511.15元 × 3期</h3>
                                        <p>
                                                                                        手续费 11.49元/期，费率2.3%
                                                                                    </p>
                                    </div>
                                    <br>
                                    <div class="item-footer">
                                        <input type="radio" name="installments" id="installments_cmbinstal_3" value="3">
                                        <a href="javascript:void(0);" class="btn J_installmentConfirmBtn" data-stat-id="6cba2eb189242213" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-6cba2eb189242213&#39;, &#39;javascript:void(0);&#39;, &#39;pcpid&#39;]);">选择该分期方式</a>
                                                                            </div>
                                </div>
                                                                <div class="isinstalment-item  clearfix" style="height:150px;">
                                    <div class="item-header">
                                        <h3>261.07元 × 6期</h3>
                                        <p>
                                                                                        手续费 11.24元/期，费率4.5%
                                                                                    </p>
                                    </div>
                                    <br>
                                    <div class="item-footer">
                                        <input type="radio" name="installments" id="installments_cmbinstal_6" value="6">
                                        <a href="javascript:void(0);" class="btn J_installmentConfirmBtn" data-stat-id="6cba2eb189242213" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-6cba2eb189242213&#39;, &#39;javascript:void(0);&#39;, &#39;pcpid&#39;]);">选择该分期方式</a>
                                                                            </div>
                                </div>
                                                                <div class="isinstalment-item  clearfix" style="height:150px;">
                                    <div class="item-header">
                                        <h3>134.90元 × 12期</h3>
                                        <p>
                                                                                        手续费 9.99元/期，费率8.0%
                                                                                    </p>
                                    </div>
                                    <br>
                                    <div class="item-footer">
                                        <input type="radio" name="installments" id="installments_cmbinstal_12" value="12">
                                        <a href="javascript:void(0);" class="btn J_installmentConfirmBtn" data-stat-id="6cba2eb189242213" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-6cba2eb189242213&#39;, &#39;javascript:void(0);&#39;, &#39;pcpid&#39;]);">选择该分期方式</a>
                                                                            </div>
                                </div>

                                <div class="isinstalment-desc">
                                    分期付款说明：<br>
                                                                        1、选择蚂蚁花呗分期后，如更改分期数或切换其他支付方式遇到问题，推荐您使用小米钱包进行支付。<br>
                                    2、每期还款金额是根据你的订单估算得出的金额，实际支付数额请以支付宝账单为准，支付宝有权决定是否接受您的分期付款申请。
                                                                    </div>
                            </div>
                                                        <div class="tab-content  clearfix">
                                                                <div class="isinstalment-item  clearfix" style="height:150px;">
                                    <div class="item-header">
                                        <h3>517.65元 × 3期</h3>
                                        <p>
                                                                                        手续费 17.99元/期，费率3.6%
                                                                                    </p>
                                    </div>
                                    <br>
                                    <div class="item-footer">
                                        <input type="radio" name="installments" id="installments_cmbinstal_3" value="3">
                                        <a href="javascript:void(0);" class="btn J_installmentConfirmBtn" data-stat-id="6cba2eb189242213" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-6cba2eb189242213&#39;, &#39;javascript:void(0);&#39;, &#39;pcpid&#39;]);">选择该分期方式</a>
                                                                            </div>
                                </div>
                                                                <div class="isinstalment-item  clearfix" style="height:150px;">
                                    <div class="item-header">
                                        <h3>261.83元 × 6期</h3>
                                        <p>
                                                                                        手续费 11.99元/期，费率4.8%
                                                                                    </p>
                                    </div>
                                    <br>
                                    <div class="item-footer">
                                        <input type="radio" name="installments" id="installments_cmbinstal_6" value="6">
                                        <a href="javascript:void(0);" class="btn J_installmentConfirmBtn" data-stat-id="6cba2eb189242213" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-6cba2eb189242213&#39;, &#39;javascript:void(0);&#39;, &#39;pcpid&#39;]);">选择该分期方式</a>
                                                                            </div>
                                </div>
                                                                <div class="isinstalment-item  clearfix" style="height:150px;">
                                    <div class="item-header">
                                        <h3>133.91元 × 12期</h3>
                                        <p>
                                                                                        手续费 8.99元/期，费率7.2%
                                                                                    </p>
                                    </div>
                                    <br>
                                    <div class="item-footer">
                                        <input type="radio" name="installments" id="installments_cmbinstal_12" value="12">
                                        <a href="javascript:void(0);" class="btn J_installmentConfirmBtn" data-stat-id="6cba2eb189242213" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-6cba2eb189242213&#39;, &#39;javascript:void(0);&#39;, &#39;pcpid&#39;]);">选择该分期方式</a>
                                                                            </div>
                                </div>

                                <div class="isinstalment-desc">
                                    分期付款说明：<br>
                                                                        每期还款金额是根据你的订单估算得出的金额，实际支付数额请以银行/支付宝账单为准，银行/支付宝有权决定是否接受您的分期付款申请。
                                                                    </div>
                            </div>
                                                        <div class="tab-content  clearfix">
                                                                <div class="isinstalment-item  clearfix" style="height:150px;">
                                    <div class="item-header">
                                        <h3>507.16元 × 3期</h3>
                                        <p>
                                                                                        手续费 7.5元/期，费率1.5%
                                                                                    </p>
                                    </div>
                                    <br>
                                    <div class="item-footer">
                                        <input type="radio" name="installments" id="installments_cmbinstal_3" value="3">
                                        <a href="javascript:void(0);" class="btn J_installmentConfirmBtn" data-stat-id="6cba2eb189242213" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-6cba2eb189242213&#39;, &#39;javascript:void(0);&#39;, &#39;pcpid&#39;]);">选择该分期方式</a>
                                                                            </div>
                                </div>
                                                                <div class="isinstalment-item  clearfix" style="height:150px;">
                                    <div class="item-header">
                                        <h3>254.83元 × 6期</h3>
                                        <p>
                                                                                        手续费 5元/期，费率2%
                                                                                    </p>
                                    </div>
                                    <br>
                                    <div class="item-footer">
                                        <input type="radio" name="installments" id="installments_cmbinstal_6" value="6">
                                        <a href="javascript:void(0);" class="btn J_installmentConfirmBtn" data-stat-id="6cba2eb189242213" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-6cba2eb189242213&#39;, &#39;javascript:void(0);&#39;, &#39;pcpid&#39;]);">选择该分期方式</a>
                                                                            </div>
                                </div>
                                                                <div class="isinstalment-item  clearfix" style="height:150px;">
                                    <div class="item-header">
                                        <h3>129.91元 × 12期</h3>
                                        <p>
                                                                                        手续费 5元/期，费率4%
                                                                                    </p>
                                    </div>
                                    <br>
                                    <div class="item-footer">
                                        <input type="radio" name="installments" id="installments_cmbinstal_12" value="12">
                                        <a href="javascript:void(0);" class="btn J_installmentConfirmBtn" data-stat-id="6cba2eb189242213" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-6cba2eb189242213&#39;, &#39;javascript:void(0);&#39;, &#39;pcpid&#39;]);">选择该分期方式</a>
                                                                            </div>
                                </div>

                                <div class="isinstalment-desc">
                                    分期付款说明：<br>
                                                                        每期还款金额是根据你的订单估算得出的金额，实际支付数额请以银行/支付宝账单为准，银行/支付宝有权决定是否接受您的分期付款申请。
                                                                    </div>
                            </div>
                                                        <div class="tab-content  clearfix">
                                                                <div class="isinstalment-item  clearfix" style="height:150px;">
                                    <div class="item-header">
                                        <h3>505.66元 × 3期</h3>
                                        <p>
                                                                                        手续费 6元/期，费率1.2%
                                                                                    </p>
                                    </div>
                                    <br>
                                    <div class="item-footer">
                                        <input type="radio" name="installments" id="installments_cmbinstal_3" value="3">
                                        <a href="javascript:void(0);" class="btn J_installmentConfirmBtn" data-stat-id="6cba2eb189242213" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-6cba2eb189242213&#39;, &#39;javascript:void(0);&#39;, &#39;pcpid&#39;]);">选择该分期方式</a>
                                                                            </div>
                                </div>
                                                                <div class="isinstalment-item  clearfix" style="height:150px;">
                                    <div class="item-header">
                                        <h3>254.33元 × 6期</h3>
                                        <p>
                                                                                        手续费 4.5元/期，费率1.8%
                                                                                    </p>
                                    </div>
                                    <br>
                                    <div class="item-footer">
                                        <input type="radio" name="installments" id="installments_cmbinstal_6" value="6">
                                        <a href="javascript:void(0);" class="btn J_installmentConfirmBtn" data-stat-id="6cba2eb189242213" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-6cba2eb189242213&#39;, &#39;javascript:void(0);&#39;, &#39;pcpid&#39;]);">选择该分期方式</a>
                                                                            </div>
                                </div>
                                                                <div class="isinstalment-item  clearfix" style="height:150px;">
                                    <div class="item-header">
                                        <h3>129.41元 × 12期</h3>
                                        <p>
                                                                                        手续费 4.5元/期，费率3.6%
                                                                                    </p>
                                    </div>
                                    <br>
                                    <div class="item-footer">
                                        <input type="radio" name="installments" id="installments_cmbinstal_12" value="12">
                                        <a href="javascript:void(0);" class="btn J_installmentConfirmBtn" data-stat-id="6cba2eb189242213" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-6cba2eb189242213&#39;, &#39;javascript:void(0);&#39;, &#39;pcpid&#39;]);">选择该分期方式</a>
                                                                            </div>
                                </div>

                                <div class="isinstalment-desc">
                                    分期付款说明：<br>
                                                                        每期还款金额是根据你的订单估算得出的金额，实际支付数额请以银行/支付宝账单为准，银行/支付宝有权决定是否接受您的分期付款申请。
                                                                    </div>
                            </div>
                                                        <div class="tab-content  clearfix">
                                                                <div class="isinstalment-item  clearfix" style="height:150px;">
                                    <div class="item-header">
                                        <h3>505.66元 × 3期</h3>
                                        <p>
                                                                                        手续费 6元/期，费率1.2%
                                                                                    </p>
                                    </div>
                                    <br>
                                    <div class="item-footer">
                                        <input type="radio" name="installments" id="installments_cmbinstal_3" value="3">
                                        <a href="javascript:void(0);" class="btn J_installmentConfirmBtn" data-stat-id="6cba2eb189242213" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-6cba2eb189242213&#39;, &#39;javascript:void(0);&#39;, &#39;pcpid&#39;]);">选择该分期方式</a>
                                                                                    <div style="margin-top:4px;font-size: 12px">
                                                <span>农行分期暂只支持K宝/K令支付</span>
                                            </div>
                                                                            </div>
                                </div>
                                                                <div class="isinstalment-item  clearfix" style="height:150px;">
                                    <div class="item-header">
                                        <h3>255.08元 × 6期</h3>
                                        <p>
                                                                                        手续费 5.25元/期，费率2.1%
                                                                                    </p>
                                    </div>
                                    <br>
                                    <div class="item-footer">
                                        <input type="radio" name="installments" id="installments_cmbinstal_6" value="6">
                                        <a href="javascript:void(0);" class="btn J_installmentConfirmBtn" data-stat-id="6cba2eb189242213" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-6cba2eb189242213&#39;, &#39;javascript:void(0);&#39;, &#39;pcpid&#39;]);">选择该分期方式</a>
                                                                                    <div style="margin-top:4px;font-size: 12px">
                                                <span>农行分期暂只支持K宝/K令支付</span>
                                            </div>
                                                                            </div>
                                </div>
                                                                <div class="isinstalment-item  clearfix" style="height:150px;">
                                    <div class="item-header">
                                        <h3>129.79元 × 12期</h3>
                                        <p>
                                                                                        手续费 4.87元/期，费率3.9%
                                                                                    </p>
                                    </div>
                                    <br>
                                    <div class="item-footer">
                                        <input type="radio" name="installments" id="installments_cmbinstal_12" value="12">
                                        <a href="javascript:void(0);" class="btn J_installmentConfirmBtn" data-stat-id="6cba2eb189242213" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-6cba2eb189242213&#39;, &#39;javascript:void(0);&#39;, &#39;pcpid&#39;]);">选择该分期方式</a>
                                                                                    <div style="margin-top:4px;font-size: 12px">
                                                <span>农行分期暂只支持K宝/K令支付</span>
                                            </div>
                                                                            </div>
                                </div>

                                <div class="isinstalment-desc">
                                    分期付款说明：<br>
                                                                        每期还款金额是根据你的订单估算得出的金额，实际支付数额请以银行/支付宝账单为准，银行/支付宝有权决定是否接受您的分期付款申请。
                                                                    </div>
                            </div>
                                                    </div>
                        <div class="isinstalment-desc" id="J_isinstalmentPublicDesc">
                            分期付款说明：<br>
                            每期还款金额是根据你的订单估算得出的金额，实际支付数额请以银行/支付宝账单为准，银行/支付宝有权决定是否接受您的分期付款申请。
                        </div>
                    </div>
                </div>
            </div>
                    </form>
    </div>
</div>

<!--现金账户 提示框-->
<div class="modal  modal-hide modal-balance-pay" id="J_balancePay">
    <div class="modal-header">
        <h3>现金账户安全验证</h3>
        <span class="close" data-dismiss="modal"><i class="iconfont"></i></span>
    </div>
    <div class="modal-body">
        <p>
            为了确保您的购物安全<br>
            已向您当前的联系电话 <span class="num" id="J_cashPayPhone"></span>  发送验证码
        </p>
        <div class="form-section">
            <label class="input-label" for="verifycode">请输入验证码</label>
            <input class="input-text" type="text" id="verifycode" name="verifycode">
            <span class="btn btn-block hide" id="J_sendAgain"></span>
        </div>
        <div class="tip" id="J_checkCodeTip"></div>
    </div>
    <div class="modal-footer">
         <a class="btn btn-gray" data-dismiss="modal" href="javascript:void(0);" data-stat-id="c893774534c6180e" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-c893774534c6180e&#39;, &#39;javascript:void(0);&#39;, &#39;pcpid&#39;]);">取消</a>
         <a class="btn btn-primary" id="J_checkCodeBtn" href="javascript:void(0);" data-stat-id="aed6a311c6be78e4" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-aed6a311c6be78e4&#39;, &#39;javascript:void(0);&#39;, &#39;pcpid&#39;]);">确认</a>
    </div>
</div>

<!-- 支付提示框 -->
<div class="modal fade modal-hide modal-pay-tip" id="J_payTip" aria-hidden="false">
    <div class="modal-header">
        <h3>正在支付...</h3>
        <a class="close" data-dismiss="modal" href="javascript: void(0);" data-stat-id="9158bc031b335ac2" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-9158bc031b335ac2&#39;, &#39;javascript:void(0);&#39;, &#39;pcpid&#39;]);"><i class="iconfont"></i></a>
    </div>
    <div class="modal-body clearfix">
        <div class="success">
            <h4>支付成功了</h4>
            <p><a href="http://order.mi.com/user/orderView/1161016982800262" data-stat-id="d8351393eda312e3" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-d8351393eda312e3&#39;, &#39;http://order.mi.com/user/orderView/1161016982800262&#39;, &#39;pcpid&#39;]);">立即查看订单详情 &gt;</a></p>
        </div>
        <div class="fail">
            <h4>如果支付失败</h4>
            <p><a href="http://bbs.xiaomi.cn/thread/index/tid/11544653" target="_blank" data-stat-id="32be0169511c71a5" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-32be0169511c71a5&#39;, &#39;http://bbs.xiaomi.cn/thread/index/tid/11544653&#39;, &#39;pcpid&#39;]);">查看支付常见问题 &gt;</a></p>
        </div>
    </div>
</div>

<div class="modal modal-hide fade modal-alert" id="J_modalAlert">
    <div class="modal-bd">
        <div class="text">
            <h3 id="J_alertMsg"></h3>
        </div>
        <div class="actions">
            <button class="btn btn-primary" data-dismiss="modal">确定</button>
        </div>
        <a class="close" data-dismiss="modal" href="javascript: void(0);" data-stat-id="4ed5101f78c9774d" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-4ed5101f78c9774d&#39;, &#39;javascript:void(0);&#39;, &#39;pcpid&#39;]);"><i class="iconfont"></i></a>
    </div>
</div>

<div class="modal modal-hide fade modal-alipay" id="J_modalAlipay">
    <div class="modal-bd">
        <div class="loading"><div class="loader"></div></div>
        <iframe name="alipayQrcodeIframe" scrolling="no" frameborder="0" width="100%" height="100%" src="./选择在线支付方式_files/saved_resource.html"></iframe>
    </div>
    <a class="close" data-dismiss="modal" href="javascript: void(0);" data-stat-id="c556f3fed6708ea5" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-c556f3fed6708ea5&#39;, &#39;javascript:void(0);&#39;, &#39;pcpid&#39;]);"><i class="iconfont"></i></a>
</div>

<div class="modal modal-hide fade modal-weixin-pay" id="J_modalWeixinPay">
    <div class="modal-hd">
        <span class="title">微信支付</span>
        <a class="close" data-dismiss="modal" href="javascript: void(0);" data-stat-id="e96b3129a7dc6807" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-e96b3129a7dc6807&#39;, &#39;javascript:void(0);&#39;, &#39;pcpid&#39;]);"><i class="iconfont"></i></a>
    </div>
    <div class="modal-bd" id="J_showWeixinPayExample">
        <div class="code" id="J_weixinPayCode">
            <div class="loading"><div class="loader"></div></div>
        </div>
        <div class="msg">
            请使用 <span>微信</span> 扫一扫<br>二维码完成支付
        </div>
    </div>
    <div class="example" id="J_weixinPayExample"></div>
</div>

<div class="deliver-beta hide" id="J_deliverBeta">
    <p>预计送达时间功能处于测试阶段，若您在下单时已选择“周末送货”或“工作日送货”，则会顺延至您要求的时间，如果发现预计送达时间不准确，期待您的反馈，我们会及时改进。</p>
    <a href="http://static.mi.com/feedback/" target="_blank" data-stat-id="395cf7a4d2fb285b" onclick="_msq.push([&#39;trackEvent&#39;, &#39;192fa45feb8511c1-395cf7a4d2fb285b&#39;, &#39;http://static.mi.com/feedback/&#39;, &#39;pcpid&#39;]);">问题反馈 &gt;</a>

    <i class="arrow arrow-a"></i>
    <i class="arrow arrow-b"></i>
</div>
<script>
<<<<<<< HEAD
         $('.header-logo')
             $('body').mousedown(function(){
        $('.header-nav, .header-search').remove();
            $('.header-logo').after('<div class="header-title" id="J_miniHeaderTitle"><h2>确认订单</h2></div>')
            })
=======

       window.onload=function(){
             $('.header-nav, .header-search').remove();
            $('.header-logo').after('<div class="header-title" id="J_miniHeaderTitle"><h2>确认订单</h2></div>')
          }
>>>>>>> 647f7db4494c59224a414ab1cd184fef53a679a6
    </script>

@endsection
