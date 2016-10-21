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
          <li>
            <a href="{{ URL('home/edit/pass') }}" title="帐号安全">帐号安全</a>
            <em class="n-nav-corner"></em>
          </li>
          <li class="current">
            <a title="个人信息">个人信息</a>
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
              <div class="na-img-bg-area"><img src='{{ asset("$list->photo") }}' alt=""></div>
              <em class="na-edit"></em>
            </div>
            <div class="naImgLink">
              <form action="{{ URL('home/user/touxiang') }}" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <input type="file" name="photo"><br>
                  <button type="submit">更换</button>
              </form>
            </div>
          </div>
        </div>
        <div class="main_r">
          <div class="framedatabox">
            <div class="fdata">
              <!-- 按钮触发模态框 -->
              <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">编辑</button>
              <!-- 模态框（Modal） -->
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title" id="myModalLabel">修改个人资料</h4>
                          </div>
                          <div class="modal-body">

                    <form action="">
                        昵称：<div><input id="n" value="{{ $list->nickname }}" class="form-control" type="text" ></div>
                        生日：<div><input id="b" value="{{ $list->birthday }}" class="form-control" type="text"></div>
                        性别：<div>
                                  <label for="nv">女：</label><input @if($list->sex==0) checked @endif type="radio" name="sex" value="0" id="nv">
                                  <label for="nan">男：</label><input @if($list->sex==1) checked @endif  type="radio" name="sex" value='1' id="nan">
                                </div>
                         邮箱：<div><input  id="e" value="{{ $list->email }}"  class="form-control" type="text"></div>
                         手机号：<div><input id="p" value="{{ $list->phone }}" class="form-control" type="text"></div>
                    </form>

                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                              <button  onclick="doedit(this.name)" data-dismiss="modal" name="{{ $list->id }}" type="button" class="btn btn-primary">提交修改</button>
                          </div>
                      </div><!-- /.modal-content -->
                  </div><!-- /.modal -->
              </div>

              <h3>基础资料</h3>
            </div>
            <div class="fdata lblnickname">
              <p><span>昵称：</span><span id='nn' class="value">

          {{ $list->nickname }}

        </span></p>
            </div>
            <div class="fdata lblbirthday">
              <p><span>生日：</span><span id='bb' class="value" _empty="">

            {{ $list->birthday }}

        </span></p>
            </div>
            <div class="fdata lblgender">
              <p><span>性别：</span><span id='ss' class="value" _empty="">

            @if($list->sex==0)
            女
            @else
            男
            @endif

        </span></p>
            </div>
        <div class="fdata lblgender">
            <p><span>邮箱：</span><span id='ee' class="value" _empty="">
            {{ $list->email }}


         </span></p>
        </div>
        <div class="fdata lblgender">
            <p><span>手机号：</span><span id='pp' class="value" _empty="">
          {{ $list->phone }}


         </span></p>
        </div>
   </div>
  </div>
  </div>
  </div>

<script>
      function doedit(en)
      {
        //性别的值
        var s=$('input:radio[name="sex"]:checked').val();
        //输入昵称的值
        var n=$('#n').val();
        //输入生日的值
        var b=$('#b').val();
        //输入邮箱的值
        var e=$('#e').val();
        //输入电话的值
        var p=$('#p').val();

        $.ajax({
            url:"{{ URL('home/user/edit') }}",
            type:'post',
            data:{'s':s,'n':n,'b':b,'e':e,'p':p,'id':en},
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success:function(data){
              // alert(data);
                if(data==1)
                {
                    $('#nn').html(n);
                    $('#bb').html(b);
                    $('#ee').html(e);
                    $('#pp').html(p);
                    if(s==1)
                    {
                      $('#ss').html('男');
                    }
                    else
                    {
                      $('#ss').html('女');
                    }
                }
            },
            error:function(){
              // alert('系统错误');
            }
        });
      }
</script>


</body></html>
