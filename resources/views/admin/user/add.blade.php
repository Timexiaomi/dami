@extends('admin/base/base')

@section('title')
    添加用户
@endsection

@section('content')
<?php date_default_timezone_set('PRC');?>
   <section class="content-header">
          <h1>
           添加
            <small>添加用户</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">用户</a></li>
            <li class="active">添加用户</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                    @if(session('msg'))

                    <h4></h4>
                    <h3 class="text-red"> {{session('msg')}}</h3>
                  @endif


                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" class='form-horizontal' action="{{URL('admin/user')}}" method='post' >
                 <input type='hidden' name='_token' value="{{ csrf_token() }}">
                    <?php  $time=date("Y-m-d H:i:s",time());?>
                    <input type="hidden" name='register' value="<?php echo $time?>">
                  <div class="box-body">
                     <div class="form-group">
                      <label for="exampleInputname" class="col-sm-2 control-label">用户名</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="exampleInputname" placeholder="请输入用户名. . . " name='username'>
                      </div>

                    </div>
                     <div class="form-group">
                      <label for="exampleInputPassword" class="col-sm-2 control-label">密码</label>
                      <div class="col-sm-4">
                        <input type="password" class="form-control" id="exampleInputPassword" placeholder="请输入密码. . . " name='password'>
                      </div>
                    </div>

                       <div class="form-group">
                      <label for="exampleInputPass" class="col-sm-2 control-label">重复密码</label>
                      <div class="col-sm-4">
                        <input type="password" class="form-control" id="exampleInputPass" placeholder="重复输入密码. . . " name='pass'>
                      </div>
                    </div>

                     <div class="form-group">
                      <label  class="col-sm-2 control-label">身份</label>
                      <div class="col-sm-4">
                       <div class="radio">
                        <label>
                          <input type="radio" name="power"  value="1" checked>
                          用户
                        </label>
                        <label>
                          <input type="radio" name="power" value="0">
                         管理员
                        </label>
                      </div>
                      </div>
                    </div>

                  </div><!-- /.box-body -->

                  <div class="box-footer col-md-offset-2">
                    <button type="submit" class="btn btn-primary">添加</button>
                    <button type="reset" class="btn btn-primary">重置</button>
                  </div>

                </form>
              </div><!-- /.box -->


              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->
  <script>

  </script>
=======
                  <h3 class="box-title"> </h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" class='form-horizontal' action="{{URL('admin/user')}}" method='post' >
                 <input type='hidden' name='_token' value="{{ csrf_token() }}">
                    <?php  $time=date("Y-m-d H:i:s",time());?>
                    <input type="hidden" name='register' value="<?php echo $time?>">
                  <div class="box-body">
                     <div class="form-group">
                      <label for="exampleInputname" class="col-sm-2 control-label">用户名</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="exampleInputname" placeholder="请输入用户名. . . " name='username'>
                      </div>
                    </div>
                     <div class="form-group">
                      <label for="exampleInputPassword" class="col-sm-2 control-label">密码</label>
                      <div class="col-sm-4">
                        <input type="password" class="form-control" id="exampleInputPassword" placeholder="请输入密码. . . " name='password'>
                      </div>
                    </div>

                     <div class="form-group">
                      <label  class="col-sm-2 control-label">身份</label>
                      <div class="col-sm-4">
                       <div class="radio">
                        <label>
                          <input type="radio" name="power"  value="1" checked>
                          用户
                        </label>
                        <label>
                          <input type="radio" name="power" value="0">
                         管理员
                        </label>
                      </div>
                      </div>
                    </div>

                  </div><!-- /.box-body -->

                  <div class="box-footer col-md-offset-2">
                    <button type="submit" class="btn btn-primary">添加</button>
                    <button type="reset" class="btn btn-primary">重置</button>
                  </div>

                </form>
              </div><!-- /.box -->


              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

>>>>>>> origin/zxy


@endsection
