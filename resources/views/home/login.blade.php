<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>

  <link rel="stylesheet" href="{{ asset('Homes/home/css/login.css')}}">
  <script type="text/javascript" src="{{ asset('Public/js.js') }}"></script>

  </head>
  <script>
    $(function(){
      $('.inp').bind('mouseover',function(){
        $('#loginc').html('请认真输入以下信息');
      });
    })
  </script>
<body class=" zh_CN">
    <div class="wrapper">
      <div class="wrap">
        <div class="layout" id="layout">
          <!--表单输入登录-->
          <div class="mainbox" id="login-main" style="display: block;">
            <div><a class="ercode" id="qrcode-trigger" href="javascript:void(0)"></a></div>
            <!-- header s -->
            <div class="lgnheader">
              <div class="header_tit t_c">
                <em id="custom_display_1" class="milogo">
                  <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg"><rect width="50" height="50" style="fill:#ef5b00"></rect><rect x="11.25" y="15" width="5" height="20" style="fill:#FFFFFF"></rect><rect x="11.25" y="15" width="12.5" height="5" style="fill:#FFFFFF"></rect><rect x="26.25" y="22.5" width="5" height="12.5" style="fill:#FFFFFF"></rect><rect x="33.75" y="15" width="5" height="20" style="fill:#FFFFFF"></rect><circle cx="23.75" cy="22.5" r="7.5" fill="#FFFFFF"></circle><rect x="16.25" y="20" width="7.5" height="15" style="fill:#ef5b00"></rect><rect x="16.25" y="22.5" width="10" height="12.5" style="fill:#ef5b00"></rect><circle cx="23.75" cy="22.5" r="2.5" fill="#ef5b00"></circle><rect x="18.75" y="22.5" width="5" height="12.5" style="fill:#FFFFFF"></rect></svg>
                </em>
                <h4 class="header_tit_txt" id="login-title">小米帐号登录</h4>
                <h6 class="header_tit_txt" id="loginc" style='font-size:20px;color:red'>{{session()->get('loginerror')}}</h6>
              <div class=" site_info"></div></div>
            </div>
            <!-- header e -->
            <div>
              <div class="login_area">
                <form action="{{  URL('/home/dologin')  }}" method="POST" id="login-main-form">
                <input type="hidden" name='_token' value='{{ csrf_token() }}'>
                  <div class="loginbox c_b">
                    <!-- 输入框 -->
                    <div class="lgn_inputbg c_b">
                      <!--验证用户名-->
                      <div class="single_imgarea" id="account-info">
                        <div class="na-img-area" id="account-avator" style="display:none">
                          <div class="na-img-bg-area" id="account-avator-con"></div>
                        </div>
                        <p class="us_name" id="account-displayname"></p>
                        <p class="us_id"></p>
                      </div>
                      <label id="region-code" class="labelbox login_user c_b" for="">
                        <div class="turn_area"><a class="btn_turn" id="manual_code" href="javascript:void(0);" title="关闭国家码"></a></div>
                        <div class="country_list">
                          <div class="animation countrycode_selector" id="countrycode_selector">
                            <span class="country_code"><tt class="countrycode-value" id="countrycode_value"></tt><i class="icon_arrow_down"></i></span>
                          </div>
                        </div>
                        <input class='inp' class="item_account" autocomplete="off" type="text" name="name" id="username" placeholder="请输入你的小米账号">
                      </label>
                      <div class="country-container" id="countrycode_container" style="display: none;"></div>
                      <label class="labelbox pwd_panel c_b">
                        <div class="eye_panel pwd-visiable">
                          <i class="eye pwd-eye">
                          <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <path class="eye_outer" d="M0 8 C6 0,14 0,20 8, 14 16,6 16, 0 8 z"></path>
                            <circle class="eye_inner" cx="10" cy="8" r="3"></circle>
                          </svg>
                          </i>
                        </div>
                        <input class='inp' type="password" placeholder="密码" autocomplete="off" name="pass" id="pwd">
                        <input type="text" placeholder="密码" autocomplete="off" id="visiablePwd" style="display:none">
                      </label>
                    </div>
                    <div class="inputbg inputcode dis_box">
                      <label class="labelbox" for="">
                        <input class='inp' class="code" name="code" autocomplete="off" placeholder="图片验证码" type="text">
                        </label>
                        <img alt="请刷新" src="{{ URL('/home/code/time()') }}" onclick="this.src='{{ URL('/home/code/') }}/'+Math.random()" class="icode_image code-image chkcode_img">
                    </div>
                    <div class="security_Controller" style="display: none;">
                      <label class="checkbox_area"><input type="checkbox" id="trustSecurityController" class="checkbox">使用安全控件</label>
                    </div>
                    <div class="lgncode" id="captcha">
                    </div>
                    <!-- 错误信息 -->
                    <div class="err_tip" id="error-outcon">
                      <div class="dis_box"><em class="icon_error"></em><span class="error-con"></span></div>
                    </div>
                    <!-- 登录频繁 -->
                    <div id="error-forbidden" class="err_forbidden">您的操作频率过快，请稍后再试。</div>
                    <div class="btns_bg">
                      <input class="btnadpt btn_orange" id="login-button" type="submit" value="立即登录">
                      <span id="custom_display_8" class="sns-default-container sns_default_container" style="display: none;">
                      </span>
                    </div>
                    <!-- 其他登录方式 s -->
                    <div style="display: block;" class="other_login_type sns-login-container" id="custom_display_16">
                      <fieldset class="oth_type_tit">
                        <legend align="center" class="oth_type_txt"></legend>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- 其他登录方式 e -->
            <div class="n_links_area" id="custom_display_64">
              <a class="outer-link" href="{{ URL('/home/regi') }}">注册小米帐号</a><span>|</span>
              <a class="outer-link" href="https://account.xiaomi.com/pass/forgetPassword?callback=http%3A%2F%2Forder.mi.com%2Flogin%2Fcallback%3Ffollowup%3Dhttp%253A%252F%252Fwww.mi.com%252Findex.html%26sign%3DNDRhYjQwYmNlZTg2ZGJhZjI0MTJjY2ZiMTNiZWExODMwYjkwNzg2ZQ%2C%2C&amp;sid=mi_eshop">忘记密码？</a>
            </div>
          </div>

          <div class="ercode_area" id="login-qrcode" style="height: 620px; width: 854px; display: none;">
            <div class="ercode_pannel">
              <a class="code_close" href="javascript:void(0)" title="关闭" id="qrcode-close"><span class="icon_code_close"></span></a>
              <div class="ercode_box">
                <div class="code_hd">
                  <h3 class="code_tit">小米帐号扫码登录</h3>
                  <p>请使用最新版MIUI中“我的小米”进行扫码登录</p>
                </div>
                <div class="code_iframe">
                  <iframe style="background:#fff;" src="about:blank" id="qriframe" frameborder="0" scrolling="no" height="270" width="270"></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="custom_display_4" class="n-footer">
      <div class="nf-link-area clearfix">
        <ul class="lang-select-list">
          <li><a href="javascript:void(0)" data-lang="zh_CN" class="lang-select-li current">简体</a>|</li>
          <li><a href="?callback=http%3A%2F%2Forder.mi.com%2Flogin%2Fcallback%3Ffollowup%3Dhttp%253A%252F%252Fwww.mi.com%252Findex.html%26sign%3DNDRhYjQwYmNlZTg2ZGJhZjI0MTJjY2ZiMTNiZWExODMwYjkwNzg2ZQ%2C%2C&amp;sid=mi_eshop&amp;_locale=zh_TW" data-lang="zh_TW" class="lang-select-li">繁体</a>|</li>
          <li><a href="?callback=http%3A%2F%2Forder.mi.com%2Flogin%2Fcallback%3Ffollowup%3Dhttp%253A%252F%252Fwww.mi.com%252Findex.html%26sign%3DNDRhYjQwYmNlZTg2ZGJhZjI0MTJjY2ZiMTNiZWExODMwYjkwNzg2ZQ%2C%2C&amp;sid=mi_eshop&amp;_locale=en" data-lang="en" class="lang-select-li">English</a>|</li>
          <li><a href="http://static.account.xiaomi.com/html/faq/faqList.html" target="_blank">常见问题</a></li>
        </ul>
      </div>
      <p class="nf-intro"><span>小米公司版权所有-京ICP备10046444-<a class="beian-record-link" target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134"><span><img src="https://account.xiaomi.com/static/res/9204d06/account-static/respassport/acc-2014/img/ghs.png"></span>京公网安备11010802020134号</a>-京ICP证110507号</span></p>
    </div>
</body>
</html>
