@extends('home/base/base')
@section('content')
<div class="page-main">
    <div class="container">
        <div class="checkout-box">
            <div class="section section-address">
                <div class="section-header clearfix">
                    <h3 class="title">收货地址</h3>

                               </div>
                <div class="section-body clearfix" id="J_addressList">
                    <!-- addresslist begin -->
                                        <div class="address-item J_addressItem " data-address_id="10160929578802829" data-consignee="韩宇航" data-tel="138****5929" data-province_id="17" data-province_name="河南" data-city_id="197" data-city_name="许昌市" data-district_id="1907" data-district_name="长葛市" data-area="1907002" data-address="韩庄村130号" data-tag_name="家" data-editable="Y" data-neededit="N">
                        <dl>
                            <dt>
                                <span class="tag">家</span>
                                <em class="uname">韩宇航</em>
                            </dt>
                            <dd class="utel">
                                138****5929                            </dd>
                            <dd class="uaddress">
                                河南 许昌市 长葛市 董村镇<br>
                                韩庄村130号                            </dd>
                        </dl>
                                                <div class="actions">
                            <a href="javascript:void(0);" class="modify J_addressModify" data-stat-id="25baf9d4f33c8f6c" onclick="_msq.push([&#39;trackEvent&#39;, &#39;50d1f382fadafb8b-25baf9d4f33c8f6c&#39;, &#39;javascript:void(0);&#39;, &#39;pcpid&#39;]);">修改</a>
                        </div>
                                            </div>

                                        <!-- addresslist end -->
                                        <div class="address-item address-item-new" id="J_newAddress">
                        <i class="iconfont"></i>
                        添加新地址
                    </div>
                                                        </div>
            </div>

            <div class="section section-options section-payment clearfix">
                <div class="section-header">
                    <h3 class="title">支付方式</h3>
                </div>
                <div class="section-body clearfix">
                    <ul class="J_optionList options ">
                                                <li data-type="pay" class="J_option selected" data-value="1">
                            在线支付                            <span>
                            （支持微信支付、支付宝、银联、财付通、小米钱包等）                            </span>
                        </li>
                                            </ul>
                </div>
            </div>

            <div class="section section-options section-shipment clearfix">
                <div class="section-header">
                    <h3 class="title">配送方式</h3>
                </div>
                <div class="section-body clearfix">
                    <ul class="clearfix J_optionList options ">
                                                <li data-type="shipment" class="J_option selected" data-amount="0" data-value="1">
                            快递配送（免运费）                                                    </li>
                                            </ul>

                    <div class="service-self-tip" id="J_serviceSelfTip" style="display: none;"></div>
                </div>
            </div>

            <div class="section section-options section-time clearfix">
                <div class="section-header">
                    <h3 class="title">配送时间</h3>
                </div>
                <div class="section-body clearfix">
                    <ul class="J_optionList options options-list clearfix">
                        <!-- besttime start -->
                                                <li data-type="time" class="J_option selected" data-value="1">
                            不限送货时间：<span>周一至周日</span>                        </li>
                                                <li data-type="time" class="J_option " data-value="2">
                            工作日送货：<span>周一至周五</span>                        </li>
                                                <li data-type="time" class="J_option " data-value="3">
                            双休日、假日送货：<span>周六至周日</span>                        </li>
                                                <!-- besttime end -->
                    </ul>
                </div>
            </div>

            <div class="section section-options section-invoice clearfix">
                <div class="section-header">
                    <h3 class="title">发票</h3>
                </div>
                <div class="section-body clearfix">
                    <ul class="J_optionList options options-list  J_tabSwitch clearfix">
                        <li data-type="invoice" data-invoice-type="not_invoice" class="hide J_option">
                            不开发票
                        </li>
                        <li data-type="invoice" data-invoice-type="electron" class="J_option tab-active selected" data-value="4">
                            电子发票（非纸质）
                        </li>
                        <li class="J_option" id="J_paperInvoice">
                            普通发票（纸质）
                        </li>
                    </ul>

                    <div class="tab-container">
                        <div class="tab-content hide" style="display: none;"></div>
                        <div class="tab-content e-invoice-detail">
                            电子发票法律效力、基本用途及使用规定同纸质发票。不随商品寄送。<a href="javascript:void(0);" id="J_showEinvoiceDetail" data-stat-id="b762af4a94c60517" onclick="_msq.push([&#39;trackEvent&#39;, &#39;50d1f382fadafb8b-b762af4a94c60517&#39;, &#39;javascript:void(0);&#39;, &#39;pcpid&#39;]);">什么是电子发票 <i class="icon-qa">?</i></a>
                            <div class="e-invoice-qa hide" id="J_einvoiceDetail">
                                <ul>
                                    <li>感谢您选择电子发票，电子发票是税局认可的有效付款凭证，其法律效力、基本用户及使用规定同纸质发票，可作为用户维权、保修的有效凭据。如需纸质发票可自行下载打印；</li>
                                    <li>您在订单详情的"发票信息"栏可查看、下载您的电子发票。</li>
                                </ul>
                                <a href="http://bbs.xiaomi.cn/thread/index/tid/9385999" target="_blank" data-stat-id="14af91c0b7aa7105" onclick="_msq.push([&#39;trackEvent&#39;, &#39;50d1f382fadafb8b-14af91c0b7aa7105&#39;, &#39;http://bbs.xiaomi.cn/thread/index/tid/9385999&#39;, &#39;pcpid&#39;]);">了解详情&gt;</a>
                            </div>
                        </div>

                        <div class="tab-content hide paper-invoice-detail" style="display: none;">
                            <ul class="J_optionList options options-list J_tabSwitch clearfix">
                                <li data-type="invoice" data-invoice-type="personal" class="J_option" data-value="1">
                                    个人
                                </li>
                                <li data-type="invoice" data-invoice-type="company" class="J_option" data-value="2">
                                    单位
                                </li>
                            </ul>
                            <div class="tab-container">
                                <div class="tab-content paper-invoice-person">
                                    发票抬头：个人<br>
                                    发票内容：购买商品明细
                                </div>
                                <div class="tab-content hide paper-invoice-company">
                                    <div class="form-section">
                                        <label class="input-label" for="invoice_title">请输入发票抬头</label>
                                        <input class="input-text" type="text" id="invoice_title" name="invoice_title">
                                    </div>
                                    <p>发票内容：购买商品明细</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="section section-goods">
                <div class="section-header clearfix">
                    <h3 class="title">商品</h3>
                    <div class="more">
                                                <a href="http://static.mi.com/cart/" data-stat-id="e2cb89a0d7ce0e0b" onclick="_msq.push([&#39;trackEvent&#39;, &#39;50d1f382fadafb8b-e2cb89a0d7ce0e0b&#39;, &#39;//static.mi.com/cart/&#39;, &#39;pcpid&#39;]);">返回购物车<i class="iconfont"></i></a>
                                            </div>
                </div>
                <div class="section-body">
                    <ul class="goods-list" id="J_goodsList">
                                                <li class="clearfix">
                            <div class="col col-img">
                                <img src="./填写订单信息_files/pms_1469763329.20089751!30x30.jpg" width="30" height="30">
                            </div>
                            <div class="col col-name">
                                                                    <a href="http://item.mi.com/1161700031.html" target="_blank" data-stat-id="8cb5ed3c5b743a06" onclick="_msq.push([&#39;trackEvent&#39;, &#39;50d1f382fadafb8b-8cb5ed3c5b743a06&#39;, &#39;//item.mi.com/1161700031.html&#39;, &#39;pcpid&#39;]);">
                                        小米Max高配全网通版 3GB内存 银色 64GB                                    </a>
                                                                                                </div>
                            <div class="col col-price">
                                1499元 x 1                            </div>
                            <div class="col col-status">
                                有货
                            </div>
                            <div class="col col-total">
                                1499元
                            </div>
                        </li>
                                            </ul>
                </div>
            </div>

            <div class="section section-count clearfix">
                <div class="count-actions">
                    <!-- 优惠券 -->

                </div>

                <div class="money-box" id="J_moneyBox">
                    <ul>
                        <li class="clearfix">
                            <label>商品件数：</label>
                            <span class="val">1件</span>
                        </li>
                        <li class="clearfix">
                            <label>金额合计：</label>
                            <span class="val">1499元</span>
                        </li>
                        <li class="clearfix">
                            <label>活动优惠：</label>
                            <span class="val">-0元</span>
                        </li>
                        <li class="clearfix">
                            <label>优惠券抵扣：</label>
                            <span class="val"><i id="J_couponVal">-0</i>元</span>
                        </li>
                                                <li class="clearfix">
                            <label>运费：</label>
                            <span class="val"><i data-id="J_postageVal">0</i>元</span>
                        </li>
                        <li class="clearfix total-price">
                            <label>应付总额：</label>
                            <span class="val"><em data-id="J_totalPrice">1499</em>元</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="section-bar clearfix">
                <div class="fl">
                    <div class="seleced-address hide" id="J_confirmAddress">
                    </div>
                    <div class="big-pro-tip hide J_confirmBigProTip"></div>
                </div>
                <div class="fr">
                    <a href="javascript:void(0);" class="btn btn-primary" id="J_checkoutToPay" data-stat-id="4773f7ffc10003b8" onclick="_msq.push([&#39;trackEvent&#39;, &#39;50d1f382fadafb8b-4773f7ffc10003b8&#39;, &#39;javascript:void(0);&#39;, &#39;pcpid&#39;]);">去结算</a>
                                    </div>
            </div>
        </div>
    </div>
</div>


    <script>


             $('body').mousedown(function(){
        $('.header-nav, .header-search').remove();
            $('.header-logo').after('<div class="header-title" id="J_miniHeaderTitle"><h2>确认订单</h2></div>')
            })
    </script>







@endsection
