@extends('admin/base/base')

@section('title')
修改信息
@endsection

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            修改用户信息
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
            <li><a href="#">用户</a></li>

          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">
            <div class="col-md-12">
              <div class="nav-tabs-custom">
                  @if(session('msg'))
                  <div class="callout callout-danger">
                    <h4>{{session('msg')}}</h4>
                  </div>
                  @endif

                  <div class="tab-pane col-md-offset-2" id="settings">

                  <form action='{{URL("admin/user/$ob->id")}}' enctype='multipart/form-data' method='post' >
                  <input type="hidden" name='_token' value='{{ csrf_token() }}'>
                  <input type="hidden" name='_method' value='put'>
                             <div class="form-group">
                    <label class="control-label">头像</label>
                    <div class="controls">
                      <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-new thumbnail" style="width: 150px; height: 150px;">
                          <img src='{{asset("$ob->photo")}}' alt="">
                          <img src="{{asset('photo/AAAAAA&amp;text=no+image')}}" style='display:none'  />
                        </div>
                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                        <div>
                          <span class="btn btn-file"><span class="fileupload-new">更换</span>
                          <span class="fileupload-exists">更换</span>
                          <input type="file" name='photo'  class="default" /></span>
                          <button type="submit" class=" fileupload-exists" >上传</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  </form>


                    <form class="form-horizontal" action='{{URL("admin/user/$ob->id")}}' method='post'>
                    <input type="hidden" name='_token' value='{{ csrf_token() }}' >
                    <input type="hidden" name='_method' value='put'>
                      <div class="form-group ">
                        <label for="inputusername" class="col-sm-2 control-label">用户名</label>
                        <div class="col-sm-5">

                          <input type="text" class="form-control" id="inputusername" placeholder="用户名" value='{{$ob->username}}' name='username' disabled>

                        </div>
                      </div>

                      <div class="form-group">
                        <label for="inputname" class="col-sm-2 control-label">昵称</label>
                        <div class="col-sm-5">
                          <input type="text" class="form-control" id="inputname" placeholder="昵称" value="{{$ob->nickname}}" name='nickname'>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="inputPassword" class="col-sm-2 control-label">密码</label>
                        <div class="col-sm-5">
                          <input type="password" class="form-control" id="inputPassword" placeholder="密码" value='{{$ob->password}}' name='password'>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">邮箱</label>
                        <div class="col-sm-5">
                          <input type="text" class="form-control" id="inputEmail" placeholder="邮箱" value="{{$ob->email}}" name='email'>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="inputPhone" class="col-sm-2 control-label">手机号</label>
                        <div class="col-sm-5">
                          <input type="text" class="form-control" id="inputPhone" placeholder="手机号码" value="{{$ob->phone}}" name='phone'>
                        </div>
                      </div>
                         <div class="form-group">
                        <label for="inputsecurity" class="col-sm-2 control-label">密保问题</label>
                        <div class="col-sm-5">
                          <input type="text" class="form-control" id="inputsecurity" placeholder="密保问题" value='{{$ob->security}}' name='security'>
                        </div>
                      </div>
                          <div class="form-group">
                        <label for="inputanswer" class="col-sm-2 control-label">密保答案</label>
                        <div class="col-sm-5">
                          <input type="text" class="form-control" id="inputanswer" placeholder="密保答案" value='{{$ob->answer}}' name='answer'>
                        </div>
                      </div>
                          <div class="form-group">
                        <label for="inputbank" class="col-sm-2 control-label">银行卡号</label>
                        <div class="col-sm-5">
                          <input type="text" class="form-control" id="inputbank" placeholder="银行卡号" value='{{$ob->bank}}' name='bank'>
                        </div>
                      </div>

                       <div class="form-group">
                        <label for="inputbirthday" class="col-sm-2 control-label">生日</label>
                        <div class="col-sm-5">
                          <div class="input-append date" id="datetimepicker" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
                           <input class="span2" size="16" type="text" id='inputbirthday' value="{{$ob->birthday}}" placeholder="生日" name='birthday'>
                           <span class="add-on"><i class="icon-remove"></i></span>
                           <span class="add-on"><i class="icon-th"></i></span>
                        </div>
                        </div>
                      </div>

                          <div class="form-group">
                        <label for="inputSex" class="col-sm-2 control-label">性别</label>
                            <div class="col-sm-4">
                       <div class="radio">
                        <label>
                          <input type="radio" name="sex"  value="1" <?php echo (($ob->sex)==1)?'checked':'';?>>
                          男
                        </label>
  　　
                        <label>
                          <input type="radio" name="sex" value="0" <?php echo (($ob->sex)==0)?'checked':'';?>>
                         女
                        </label>
                      </div>
                      </div>
                      </div>
                    <div class="form-group">
                        <label for="inputstatus" class="col-sm-2 control-label">状态</label>
                            <div class="col-sm-4">
                       <div class="radio">
                        <label>
                          <input type="radio" name="status"  value="1" <?php echo (($ob->status)==1)?'checked':'';?>>
                          开启
                        </label>
  　　
                        <label>
                          <input type="radio" name="status" value="0" <?php echo (($ob->status)==0)?'checked':'';?>>
                         关闭
                        </label>
                      </div>
                      </div>
                      </div>

                        <div class="form-group">
                        <label for="inputpower" class="col-sm-2 control-label">权限</label>
                            <div class="col-sm-4">
                       <div class="radio">
                        <label>
                          <input type="radio" name="power"  value="1" <?php echo (($ob->power)==1)?'checked':'';?>>
                            用户
                        </label>
  　　
                        <label>
                          <input type="radio" name="power" value="0" <?php echo (($ob->power)==0)?'checked':'';?>>
                         管理员
                        </label>
                      </div>
                      </div>
                      </div>

                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-5">
                          <button type="submit" class="btn btn-danger">修改</button>
                        </div>
                      </div>
                    </form>
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

 @endsection
