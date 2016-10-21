<!DOCTYPE html>
<html><head>
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0,user-scalable=no">
<title>小米帐号 - 个人信息</title>
    <link type="text/css" rel="stylesheet" href="{{ asset('public/reset.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('public/layout.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('public/modacctip.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('public/bootstrap.css')  }}">
    <script src="{{ asset('public/jss.js')  }}"></script>
    <script src="{{ asset('public/bootstrap.min.js')  }}"></script>
<style type="text/css">
/*启用修改头像功能*/
.na-img-area:hover .na-edit{
  display:block;
  cursor: pointer;
}
.na-img-area{cursor:default}
/*popup的遮层*/
.popup_mask{
  position:fixed;
  z-index:99;
  width:100%;
  height:100%;
  left:0;
  top:0;
  display:none;
  _position:absolute;
  _height: 1000px;
}
.popup_mask .mod_wrap{
    height: 100%;
    overflow-y: auto;
    position: absolute;
    width: 100%;
    z-index: 1;
}
.popup_mask .bkc{
  position:absolute;
  width:100%;
  height:200%;
  left:0;
  top:0;
  background-color:#333;
  filter: alpha(opacity=70);
  opacity:0.7;
}
.popup_mask .mod_acc_tip{
  display:none;
  position:absolute;
  left:50%;
  margin-left:-206px;
  top:50%;
  margin-top:-187px;
  _top: 500px;
}
/*剪切图片的水平、垂直居中及模糊*/
.clipimg{
  text-align: left;
  position: relative;
}
.clipimg img{
  max-width:300px;
  max-height:300px;
  position: absolute;
}
/*clip部分*/
.clipimg .movebox{
/*
  background-position: 50% 50%;
  background-repeat: no-repeat;
  */
  border: 1px solid #00aeff;
}
.uploadimgs{
  filter: none;
  opacity: 1;
}
.clipimg .movebox{
  width: 98px;
  height: 98px;
  z-index:1000;
  background-image:url(#);
}
.clipimg .icon_square_rightbot{
  cursor: se-resize;
}
/*上传*/
#photoUploader .uplodefile{
  font-size: 45px;
  *vertical-align: bottom;
}
::-webkit-file-upload-button { cursor:pointer; }
/*干掉该死的IE6的遮罩问题*/
#loadingMask .bkc{
  _height:2000px;
}
/*wap*/
.bugfix_ie6{ display:block;}
</style>
</head>
<body class="zh_CN" style="overflow-y: scroll;">
  <div class="popup_mask" style="display: none;" id="loadingMask">
    <div class="bkc"></div>
    <div class="mod_wrap loadingmask">
    </div>
  </div>
  <div class="wrapper blockimportant">
  <div class="wrap">
<div class="layout bugfix_ie6 dis_none">
  <div class="n-logo-area clearfix">
      <a id="logoutLink" class="fl-r logout" href="{{ URL('home/user/direct') }}">
          回到个人中心
      </a>
  </div>
</div>

  <div class="layout">
      <div class="n-main-nav clearfix">
        <ul>
          <li class="current">
            <a  title="帐号安全">帐号安全</a>
            <em class="n-nav-corner"></em>
          </li>
          <li >
            <a >个人信息</a>
            <em class="n-nav-corner"></em>
          </li>
          <li>
            <a href="#" title="绑定授权">绑定授权</a>
            <em class="n-nav-corner"></em>
          </li>
          <li>
            <a href="#" title="小米服务">小米服务</a>
            <em class="n-nav-corner"></em>
          </li>
        </ul>
      </div>
      <div class="n-frame">
  <div class="uinfo c_b">
        <div class="">
        <div class="main_l">
          <div class="naInfoImgBox t_c">
            <div class="na-img-area marauto">
              <!--na-img-bg-area不能插入任何子元素-->
              <div class="na-img-bg-area"><img src='{{ asset("$photo") }}' alt=""></div>
              <em class="na-edit"></em>
            </div>
            <br>
            <div class="naImgLink">
                {{ $username }}
            </div>
          </div>
        </div>
        <div class="main_r">

 <span style='color:red'>&nbsp&nbsp&nbsp&nbsp 密码修改成功将会回到登陆页面，请牢记你的密码!</span>


         </span></p>

        </div>
<form action="{{ URL('home/pass/doupdate')  }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="fdata lblgender">
            <p><span>旧密码：<input name="pass" class="form-control" type="password"></span><span id='pp' class="value" _empty="">


         </span></p>
        </div>
        <div class="fdata lblgender">
            <p><span>新密码：<input name="xpass" class="form-control" type="password"></span><span id='pp' class="value" _empty="">


         </span></p>
        </div>
        <div class="fdata lblgender">
            <p><span>再次输入新密码：<input name="rxpass" class="form-control" type="password"></span><span id='pp' class="value" _empty="">


         </span></p>
        </div>
        <br>
        <div class="fdata lblgender">
            <p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span><button class="btn btn-primary" type="submit">提交修改</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button class="btn btn-primary" type="reset">重置表单</button></span><span id='pp' class="value" _empty="">
         </span></p>
        </div>
</form>

   </div>
  </div>
  </div>
  </div>


</body></html>
