<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<meta name="_token" content="{{ csrf_token() }}"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0,user-scalable=no">
<title>小米帐号 - 注册</title>

<link type="text/css" rel="stylesheet" href="{{ asset('Homes/home/css/reset.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('Homes/home/css/layout.css') }}">

<link type="text/css" rel="stylesheet" href="{{ asset('Homes/home/css/registerpwd.css') }}">

   <link rel="shortcut icon" href="{{asset('Homes/home/image/favicon.ico')}}" />

<style>
.facebook_area{
  display:none!important;
}
</style>
</head>
<!-- 验证用户名是否符合的js -->
<script type="text/javascript" src="{{ asset('Public/js.js') }}"></script>
<script type='text/javascript'>
    $(function()
    {
      /*
      * 验证用户名是否符合标准
      */
      //用户框为空时显示规则
      $('#username').bind('focus',function()
      {
        //当文本框为空时显示规则
        var rule=$('#username').attr('placeholder','6-12位数字或字母,字母开头');
      });
      //用户框失去焦点时验证输出的值是否符合规则
      $('#username').bind('blur',function()
      {
        //获取输入的值
        var value=$('#username').val();
        if(value.length==0)
        {
          $('#ruleuser').attr('style','color:red');
          $('#ruleuser').html('账号不能为空');
        }
        //正则验证输入的用户名
        var str=document.getElementById('username').value.trim();
        if(str.length!=0){
            var reg=/^[a-zA-Z][0-9a-zA-Z]{5,11}$/;
            if(!reg.test(str)){
              $('#username').val('');
              $('#ruleuser').attr('style','color:red');
              $('#ruleuser').html('请输入6-12位数字或字母,字母开头');
            }

            else
            {
              //ajax验证账号是否存在
              $.ajax({
                type:'POST',
                url:'/home/regi/checkUser',
                data:{ 'data' : $('#username').val()},
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                },
                success:function(data){
                  if(data=='账号可用'){
                    $('#ruleuser').attr('style','color:green');
                  }else{
                    $('#ruleuser').attr('style','color:red');
                  }
                   $('#ruleuser').html(data);
                }
              });
              // $('#ruleuser').attr('style','color:green');
              // $('#ruleuser').html('账号可用');
            }
        }
      });

      //密码框为空时显示规则
      $('#pass').bind('focus',function()
      {
        //当密码框为空时显示规则
        var rule=$('#pass').attr('placeholder','请正确输入6-16位密码');
      });

      //密码框失去焦点的时候
      $('#pass').bind('blur',function()
      {
        //获取输入的密码
        var value=$('#pass').val();
        if(value.length==0)
        {
          $('#rulepass').attr('style','color:red');
          $('#rulepass').html('密码不能为空');
        }
        var str=document.getElementById('pass').value.trim();
        if(str.length!=0){
            var reg=/^[0-9a-zA-Z][0-9a-zA-Z]{5,15}$/;
            if(!reg.test(str)){
              $('#pass').val('');
              $('#rulepass').attr('style','color:red');
              $('#rulepass').html('密码不正确');
            }
            else
            {
              $('#rulepass').attr('style','color:green');
              $('#rulepass').html('密码可用');
            }
        }
      });
      //验证码框移出时判断验证码是否输出正确
      $('#code').bind('mouseover',function()
      {
        $('#rulecode').html('请正确输入验证码');
      });
    });
</script>
<body class="zh_CN">
<form action="{{ URL('/home/doregi') }}" method='post'>
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

<div class="wrapper">
<div class="wrap">
<div class="layout">
  <div class="n-frame device-frame reg_frame" id="main_container">
    <div class="external_logo_area"><a class="milogo" href="javascript:void(0)"></a></div>
    <div class="title-item t_c">
      <h4 class="title_big30">注册小米帐号</h4>
    </div>
  <div><div class="regbox">
  <div class="phone_step1">
    <div class="listwrap" id="select-cycode" _region="CN" _def_method="PH">
</div>

</div>
<form action="{{ URL('/home/doregi') }}" method='post'>
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <div class="inputbg">
      <label class="labelbox" for="">
        <input id='username' name="name" autofocus placeholder="请输入用户名" type="tel"><span style='color:green' id='ruleuser'>请输入6-12位的账号，字母开头</span>
      </label>
    </div>
    <div class="inputbg">
      <label class="labelbox" for="">
        <input id='pass' name="pass" placeholder="请输入密码" type="password"><span id='rulepass' style='color:green'>请输入6-16位的密码</span>
      </label>
    </div>
    <div class="err_tip">
      <div class="dis_box"><em class="icon_error"></em><span></span></div>
    </div>
    <div class="inputbg inputcode dis_box">
      <label class="labelbox" for="">
        <input id='code' style='width:312px' class="code" name="code" autocomplete="off" placeholder="图片验证码" type="text">
      </label><br>
      <span id='rulecode' style='color:green'>
          @if(Session::get('codeerror'))
          <span style='color:red'>
            {{Session::get('codeerror')}}
          </span>
          @else
          请输入验证码
          @endif
          </span><br>
          <img alt="请刷新" src="{{ URL('/home/code/time()') }}" onclick="this.src='{{ URL('/home/code/') }}/'+Math.random()" class="icode_image code-image chkcode_img">
    </div>
    </form>
    <div class="err_tip">
      <div class="dis_box"><em class="icon_error"></em><span></span></div>
    </div>
    <div class="err_tip send-left-times">
    </div>
    <div class="fixed_bot mar_phone_dis1">
      <input class="btn332 btn_reg_1 submit-step" data-to="phone-step2" value="立即注册" type="submit">
      <img style="display:none;" src="/tick.png">
      <p class="msg">
      点击“立即注册”，即表示您同意并愿意遵守小米
      <a href="http://www.miui.com/res/doc/eula/cn.html" target="_blank" title="用户协议">用户协议</a>
      和
      <a href="http://www.miui.com/res/doc/privacy/cn.html" target="_blank" title="隐私政策">隐私政策</a>
      </p>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
<div class="n-footer">
  <div class="nf-link-area clearfix">
 <!--  <ul class="lang-select-list">
    <li><a class="lang-select-li current" href="javascript:void(0)" data-lang="zh_CN">简体</a>|</li>
    <li><a class="lang-select-li" href="javascript:void(0)" data-lang="zh_TW">繁体</a>|</li>
    <li><a class="lang-select-li" href="javascript:void(0)" data-lang="en">English</a></li>

      |<li><a class="a_critical" href="http://static.account.xiaomi.com/html/faq/faqList.html" target="_blank"><em></em>常见问题</a></li>

  </ul> -->
  </div>
  <p class="nf-intro"><span>小米公司版权所有-京ICP备10046444-<a class="beianlink beian-record-link" target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134"><span><img src="{{ asset('Homes/home/images/ghs.png') }}"></span>京公网安备11010802020134号</a>-京ICP证110507号</span></p>
</div>
<script src="placeholder.js"></script>
</body></html>
