@extends('admin/base/base')

@section('title')
订单详情
@endsection

@section('content')
<script>
      //表格居中js
	window.onload=function()
	{
		var th=document.getElementsByTagName('th');
		var td=document.getElementsByTagName('td');
		for (var i = 0; i < th.length; i++) {
			th[i].style.textAlign='center';
			th[i].style.lineHeight='100px';
		};
		for (var i = 0; i < td.length; i++) {
			td[i].style.textAlign='center';
			td[i].style.lineHeight='100px';
		};
	}
</script>
<section class="content-header">
  <h1>
    订单详情
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><a href='{{ URL('admin/order/order') }}' class="btn btn-block btn-primary">查看订单管理</a></h3>
        </div><!-- /.box-header -->
        <div class="box-body">
          <h3 class="box-title"><span class="btn btn-block btn-danger">订单号:&nbsp&nbsp&nbsp{{ $id }}</span></h3>
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>商品订单编号</th>
                <th>商品编号</th>
                <th>商品名称</th>
                <th>商品图</th>
                <th>单个商品价格</th>
                <th>商品数量</th>
              </tr>
            </thead>
            <tbody>
              @foreach($list as $li)
              <tr>
                <td>{{ $li->id }}</td>
                <td>{{ $li->gid }}</td>
                <td>{{ $li->gname }}</td>

                <td><img width='100px' height='100px' src='{{ asset("$li->image") }}' alt=""></td>

                <td>{{ $li->price }}</td>
                <td>{{ $li->num }}</td>
              </tr>
              @endforeach
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->


    </div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->


@endsection
