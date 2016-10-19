@extends('admin/base/base')

@section('title')
用户列表
@endsection

@section("content")
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            用户
            <small>用户列表</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
            <li><a href="#">用户</a></li>
            <li class="active">用户列表</li>
          </ol>
        </section>

        <section class="content">
        <!-- Main content -->
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header">
                  <a class="btn btn-xs-1 btn-success" href="{{ URL('admin/user/create')}}">添加用户</a>

                  <div class="box-tools">
                  <form action="{{URL('admin/user') }}" method='get'>


                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="username" class="form-control input-sm pull-right" placeholder="搜索">
                      <div class="input-group-btn">
                        <button type="submit" class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                    </form>
                  </div>

                </div>

                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <th style="width: 10px">id</th>
                      <th>用户名</th>
                      <th>昵称</th>
                      <th>头像</th>
                      <th>性别</th>
                      <th>身份</th>
                      <th>开关</th>
                      <th>登录时间</th>
                      <th>操作</th>
                    </tr>
                @foreach($list as $user)
                    <tr>
                      <td>{{ $user->id }}</td>
                      <td>{{ $user->username }}</td>
                      <td>
                          {{ $user->nickname }}
                      </td>

                      <td><div class="pull-left image">
              <img src='{{asset("$user->photo")}}' class="img-circle" alt="User Image" style="width:40px">
            </div></td>
                      <td>
                        <?php echo (($user->sex)==1)?'男':'女';?>
                      </td>
                      <td><?php echo (($user->power)==1)?'用户':'管理员';?></td>
                      <td>
                        @if($user->status==1)

                            <a class="btn btn-xs-1 btn-danger"  href='{{URL("admin/dodown/{$user->id}")}}'  >关闭</a>
                        @else
                           <a class="btn btn-xs-1 btn-success"  href='{{URL("admin/doopen/{$user->id}")}}'  >开启</a>

                    @endif

                      </td>
                      <td>{{$user->landing}}</td>
                      <td>
                      <a class="btn btn-xs-1 btn-success" href='{{URL("admin/user/$user->id")}}'>查看</a>
                      <a class="btn btn-xs-1 btn-primary" href='{{URL("admin/user/$user->id/edit")}}'>修改</a>
                      <button class="btn btn-xs-1 btn-danger" onclick="dodel({{$user->id}})">删除</button>
                      </td>
                    </tr>
                  @endforeach

                <form action="admin/user" method='post' style='display:none' name='delform'>
                    <input type="hidden" name='_token' value='{{ csrf_token() }}'>
                    <input type="hidden" name='_method' value='delete'>
                </form>


                  </table>
                </div><!-- /.box-body -->

                <div class="box-footer clearfix">

                  <ul class="pagination pagination-sm no-margin pull-right">
                    {!! $list->render() !!}
                  </ul>
                </div>
              </div><!-- /.box -->
              </div>
              </div>
              </section>
          <script>
              function dodel(id)
              {
                if(confirm('确定要删除么？')){
                var form=document.delform;
                form.action="{{URL('admin/user')}}/"+id;
                form.submit();
              }
            }


          </script>
@endsection
