@extends('admin/base/base')

@section('title')
    修改商品类别名称
@endsection
@section('content')
        <!-- Content Header (Page header) -->
        <script src={{ asset('public/js.js') }}></script>
       <script>
          //鼠标移入更换添加详情
          $(function()
          {
              setTimeout(function(){
                $('#goodstypeinfo').html('商品类别名称唯一，请不要重复');
              },2000)
          });
       </script>
        <section class="content-header">
          <h1>
            修改商品类别
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">xixi</li>
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
                  <h3 class="box-title"><a  href='{{ URL('admin/goodsclass/') }}' class="btn btn-block btn-success">查看商品类别</a></h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" method='post' action='{{ URL('admin/goodsclass/update') }}'>
                		<input type="hidden" name='_token' value='{{ csrf_token() }}'>
                		<input type="hidden" name='_method' value='put'>
                  <div class="box-body">
                  <span id='goodstypeinfo' class="btn btn-block btn-danger disabled">
				@if(session()->get('sonerror'))
					{{ session()->get('sonerror') }}
				@else
					请认真修改商品类别
				@endif
                  </span>

                    <div class="form-group">
                      	<label for="exampleInputEmail1">商品类别名称</label>
                      	<input type="text" class="form-control" name='tname' id="exampleInputEmail1" placeholder="{{ $name }}">
                      	<input type="hidden" name='id' value='{{ $id }}'>
                    </div>





                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">修改</button>
                  </div>
                </form>
              </div><!-- /.box -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->

@endsection
