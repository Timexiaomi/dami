<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>

     <script src="{{ asset('Public/js.js')}}"></script>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{ asset('admins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- imageupload -->
    <link rel="stylesheet" href="{{asset('admins/bootstrap/css/bootstrap-fileupload.css')}}">
    <!-- datatimepicker -->
    <link rel="stylesheet" href="{{asset('admins/bootstrap/css/bootstrap-datetimepicker.css')}}">
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{ asset('admins/plugins/daterangepicker/daterangepicker-bs3.css') }}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ asset('admins/plugins/iCheck/all.css') }}">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="{{ asset('admins/plugins/colorpicker/bootstrap-colorpicker.min.css') }}">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="{{ asset('admins/plugins/timepicker/bootstrap-timepicker.min.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('admins/plugins/select2/select2.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admins/dist/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('admins/dist/css/skins/_all-skins.min.css') }}">

    <link rel="stylesheet" href="{{asset('admins/bootstrap/css/bootstrap-switch.min.css')}}">

      <link rel="stylesheet" href="{{asset('admins/bootstrap/css/highlight.css')}}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <!-- 头部开始 31-279 -->
      <header class="main-header">
        <!-- Logo -->
        <a href="../../index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>mi</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>MI</b>后台</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->

              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                    <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <img src="" class="img-circle" alt="User Image">
                          </div>
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->




                    </ul>
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-red"></i> 5 new members joined
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">9</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 9 tasks</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                          </h3>
                          <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Create a nice theme
                            <small class="pull-right">40%</small>
                          </h3>
                          <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">40% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Some task I need to do
                            <small class="pull-right">60%</small>
                          </h3>
                          <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">60% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Make beautiful transitions
                            <small class="pull-right">80%</small>
                          </h3>
                          <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">80% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="#">View all tasks</a>
                  </li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="{{ asset(session('adminuser')->photo) }}" class="user-image" alt="User Image">
                  <span class="hidden-xs">{{ session('adminuser')->username }}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="{{ asset(session('adminuser')->photo) }}" class="img-circle" alt="User Image">
                    <p>
                      {{ session('adminuser')->username }}
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">个人信息</a>
                    </div>
                    <div class="pull-right">
                      <a href="{{ URL('admin/loginout') }}" class="btn btn-default btn-flat">退出登录</a>
                    </div>
                  </li>
                </ul>
              </li>

            </ul>
          </div>
        </nav>
      </header>
      <!-- 左侧边栏开始 281-443 -->
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{ asset(session('adminuser')->photo) }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>{{ session('adminuser')->username }}</p>
              <a href="#"><i class="fa fa-circle text-success"></i> 在线</a>
            </div>
          </div>

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">主导航</li>
            <li class="treeview">
              <a href="#">
                <i class="glyphicon glyphicon-user"></i> <span>用户</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL('admin/user') }}"><i class="fa fa-circle-o"></i> 用户列表</a></li>
                <li><a href="{{ URL('admin/user/create')}}"><i class="fa fa-circle-o"></i>添加用户</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="glyphicon glyphicon-th"></i> <span>商品分类</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{URL('admin/goodsclass')}}"><i class="fa fa-circle-o"></i> 分类列表</a></li>
                <li><a href="{{URL('admin/goodsclass/create')}}"><i class="fa fa-circle-o"></i>添加分类</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="glyphicon glyphicon-shopping-cart"></i> <span>商品</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{URL('admin/goods')}}"><i class="fa fa-circle-o"></i> 商品列表</a></li>
                <li><a href="{{URL('admin/goods/create')}}"><i class="fa fa-circle-o"></i>添加商品</a></li>
              </ul>
            </li>


            <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>订单</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">

                <li><a href="{{ URL('admin/order/pay') }}"><i class="fa fa-circle-o"></i> 支付方式管理</a></li>
                <li><a href="{{ URL('admin/order/delivery') }}"><i class="fa fa-circle-o"></i> 配送方式管理</a></li>
                <li><a href="{{ URL('admin/order/order') }}"><i class="fa fa-circle-o"></i> 订单列表</a></li>

              </ul>
            </li>


            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>晒单、评论</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">

                <li><a href="{{ URL('admin/comment') }}"><i class="fa fa-circle-o"></i>评论列表</a></li>

              </ul>
            </li>

              <li class="treeview ">
              <a href="#">
                <i class="fa fa-table"></i> <span>前台模板管理</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{URL('admin/template/top')}}"><i class="fa fa-circle-o"></i>头部商品</a></li>
                <li><a href="{{ URL('admin/slide') }}"><i class="fa fa-circle-o"></i> 轮播图</a></li>
                <li><a href="data.html"><i class="fa fa-circle-o"></i> 明星产品</a></li>

                <li><a href="{{ URL('admin/blogroll') }}"><i class="fa fa-circle-o"></i> 友情链接</a></li>

              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i>
                <span>网站配置</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL('admin/config') }}"><i class="fa fa-circle-o"></i>网站配置管理</a></li>
              </ul>
            </li>




            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>地址管理</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">

                <li><a href="{{ URL('admin/address') }}"><i class="fa fa-circle-o"></i> 收货地址管理</a></li>

              </ul>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>
      <!-- 左侧边栏结束 -->
          <!-- 主体内容开始 447-536 -->
          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
            @yield("content")
          </div><!-- /.content-wrapper -->
      <!-- 主体内容结束 -->
      <!-- 页脚开始 538-544 -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2016 <a href="http://www.mi.com">mi</a>.</strong>
      </footer>
      <!-- 页脚结束 -->

      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->


    <!-- jQuery 2.1.4 -->
    <script src="{{ asset('admins/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <!-- Bootstrap 3.3.5 -->

    <script src="{{ asset('admins/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Slimscroll -->
    <script src="{{ asset('admins/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('admins/plugins/fastclick/fastclick.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admins/dist/js/app.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('admins/dist/js/demo.js') }}"></script>
        <!-- imagepuload -->
    <script src="{{  asset('admins/bootstrap/js/bootstrap-fileupload.js')}}"></script>
    <script src="{{ asset('admins/bootstrap/js/jquery.leanModal.min.js') }}"></script>
      <!-- InputMask -->
    <script src="{{ asset('admins/plugins/input-mask/jquery.inputmask.js') }}"></script>
    <script src="{{ asset('admins/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
    <script src="{{ asset('admins/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
      <!-- Select2 -->
    <script src="{{ asset('admins/plugins/select2/select2.full.min.js') }}"></script>
      <!-- date-range-picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="{{ asset('admins/plugins/daterangepicker/daterangepicker.js') }}"></script>
     <!-- bootstrap color picker -->
    <script src="{{ asset('admins/plugins/colorpicker/bootstrap-colorpicker.min.js') }}"></script>
    <!-- bootstrap time picker -->
    <script src="{{ asset('admins/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
     <!-- iCheck 1.0.1 -->
    <script src="{{ asset('admins/plugins/iCheck/icheck.min.js') }}"></script>
      <!-- datatimepicker -->
      <script src="{{asset('admins/bootstrap/js/bootstrap-datetimepicker.js')}}"></script>
      <script src="{{asset('admins/bootstrap/js/bootstrap-datetimepicker.zh-CN.js')}}"></script>

      <script src="{{asset('admins/bootstrap/js/bootstrap-switch.js')}}"></script>

      <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
       <script type="text/javascript">
      $('#datetimepicker').datetimepicker({
                language: 'zh-CN',
                autoclose: 1,
                todayBtn: 1,
                pickerPosition: "bottom",
                minuteStep: 5,
                format: 'yyyy-mm-dd',
                minView: 'month'　
      });
</script>


      </body>
</html>
