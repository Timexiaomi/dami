@extends('admin/base/base')

@section('title')
    添加商品类别
@endsection
@section('content')
        <!-- Content Header (Page header) -->
        <script src={{ asset('public/js.js') }}></script>
       <script>
          //鼠标移入更换添加详情
          $(function()
          {
              setTimeout(function(){
                $('#goodstypeinfo').html('请认真添加商品类别');
              },2000)
          });
       </script>
        <section class="content-header">
          <h1>
            添加商品类别
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
                <form role="form" method='post' action='{{ URL('admin/goodsclass') }}'>
                		<input type="hidden" name='_token' value='{{ csrf_token() }}'>
                  <div class="box-body">
                  <span id='goodstypeinfo' class="btn btn-block btn-danger disabled">
				@if(session()->get('typeerror'))
					{{ session()->get('typeerror') }}
				@else
					请认真添加商品类别
				@endif
                  </span>
				<div class="form-group">
	                      <label for="exampleInputEmail1">商品类别所属</label>
	                      <select id='select' name='ss' class="form-control">

                              @if(!session()->get('son'))
	                       <option value="-1">根类别</option>
	                       @foreach($array as $list)
						{!! $list !!}
	                       @endforeach
                             @else
                                    {!! $array['0'] !!}
                              @endif
	                       </select>

	                  </div>
                    <div class="form-group">
                      	<label for="exampleInputEmail1">商品类别名称</label>
                      	<input type="text" class="form-control" name='typename' id="exampleInputEmail1" placeholder="Goods Type">
                    </div>





                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">添加</button>
                  </div>
                </form>
              </div><!-- /.box -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->

@endsection
