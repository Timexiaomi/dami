@extends('home/base/message')
@section('message')

<div class="span16">

    <div class="uc-box uc-main-box">
        <div class="uc-content-box">
            <div class="box-hd">
                <h1 class="title">收货地址</h1>
                <!--
                <div class="more clearfix">
                    <ul class="filter-list J_addrType">
                        <li class="first active"><a href="http://order.mi.com/user/address?r=66924.1476759002">普通收货地址</a></li>
                        <li class=""><a href="http://order.mi.com/user/address?type=tv&r=66924.1476759002">大型商品收货地址</a></li>
                    </ul>
                </div>
                -->
            </div>
            <div class="box-bd">

                <div   class="user-address-list J_addressList clearfix">
                    <div  class="address-item address-item-new" data-type="" id="J_newAddress">
                        <i class="iconfont"></i>
                        添加新地址
                    </div>

                            <div class="address-item J_addressItem" data-address_id="10160929578802829" data-consignee="韩宇航" data-tel="138****5929" data-province_id="17" data-province_name="河南" data-city_id="197" data-city_name="许昌市" data-district_id="1907" data-district_name="长葛市" data-area="1907002" data-zipcode="461500" data-address="韩庄村130号" data-tag_name="家">
                                <dl>
                                    <dt>

                                                                                    <span class="tag">家</span>                                        <em class="uname">韩宇航</em>
                                    </dt>
                                    <dd class="utel">138****5929</dd>
                                    <dd class="uaddress">河南 许昌市 长葛市                                        董村镇                                        <br>韩庄村130号 (461500)</dd>
                                </dl>
                                <div class="actions">
                                    <a class="modify J_addressModify" data-id="10160929578802829" href="javascript:void(0);" data-stat-id="05bdb261c37afc34" onclick="_msq.push([&#39;trackEvent&#39;, &#39;73ce9fb1e71baa17-05bdb261c37afc34&#39;, &#39;javascript:void(0);&#39;, &#39;pcpid&#39;]);">修改</a>
                                    <a class="modify J_addressDel" data-id="10160929578802829" data-stat-id="2a7ebd088f434839" onclick="_msq.push([&#39;trackEvent&#39;, &#39;73ce9fb1e71baa17-2a7ebd088f434839&#39;, &#39;&#39;, &#39;pcpid&#39;]);">删除</a>
                                </div>
                             </div>
                        </div>
                        <div id='address' style='display:block'>
                            收货人名字：<input type="text"><br><br>
                            手机号：<input type="text"><br><br>
                            选择添加：
                            <select name="privince">
                                <option value="-1">
                                    请选择
                                </option>
                            </select>
                        </div>
            </div>
        </div>
    </div>

</div>

<div id="J_modalEditAddress" class="modal fade modal-hide modal-edit-address">
    <div class="modal-body">
        <iframe width="100%" height="100%" frameborder="0" src=""></iframe>
    </div>
</div>
        </div>
    </div>
</div>
<script>
    function address()
    {

    }
</script>

@endsection
