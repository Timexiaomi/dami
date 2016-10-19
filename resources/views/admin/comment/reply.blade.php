@extends('admin/base/base')

@section('title')
晒单详情
@endsection

@section('content')

<script>
  //表格居中js
  window.onload=function()
  {
    var td=document.getElementsByTagName('td');
    for (var i = 0; i < td.length; i++) {
      td[i].style.textAlign='center';
      td[i].style.height='100px';
      td[i].style.lineHeight='100px';
    };
  }
</script>

<section class="content-header">
  <h1 class="btn btn-block btn-success" style='width:250px'>
	晒单回评详情
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><a class="btn btn-info" href='{{ URL('admin/comment') }}'>返回晒单列表</a></h3>
        </div><!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            	<tr>
            		<th colspan='2'><button class="btn btn-block btn-success" >晒单详情</button></th>
            	</tr>
              <tr>
                <td style='width:260px'>晒单</td>
                <td>内容</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                	<td>晒单编号</td>
                	<td>{{ $list->id }}</td>
              </tr>
			<tr>
                	<td>晒单人</td>
                	<td>{{ $uname }}</td>
              </tr>
			<tr>
                	<td>晒单商品</td>
                	<td>{{ $gname }}</td>
              </tr>
              <tr>
                	<td>晒单图片</td>
                	<td>
                	@if($image!=null)
				@foreach($image as $i)
                	<img width='150px' height='150px' src='{{ asset("$i") }}' alt="">
                	@endforeach
                	@else
                	无图片
                	@endif
                	</td>
              </tr>
              <tr>
                	<td>晒单内容</td>
                	<td>{{ $list->content }}</td>
              </tr>
              <tr>
                	<td>评论时间</td>
                	<td>{{ $list->time }}</td>
              </tr>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->


    </div><!-- /.col -->
  </div><!-- /.row --><div class="row">
    <div class="col-xs-12">
      <div class="box">

        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            	<tr>
            		<th colspan='5'><button class="btn btn-block btn-success" >回评详情</button></th>
            	</tr>
              <tr>
                <td style='width:260px'>回复编号</td>
                <td>回复人</td>
                <td>回复内容</td>
                <td>回复时间</td>
                <td>操作</td>
              </tr>
              @foreach($reply as $p)
              <tr id='{{ $p->id }}'>
                <td>{{ $p->id }}</td>
                <td>{{ $p->us }}</td>
                <td>{{ $p->content }}</td>
                <td>{{ $p->time }}</td>
                <td><button onclick='dodel(this.value)' value='{{ $p->id }}'  class="btn btn-info">删除</button></td>
              </tr>
              @endforeach
              <tr><td colspan='5'>{{ $reply->render() }}</td></tr>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->


    </div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->
<script>
	function dodel(en)
	{
		if(confirm('真的要删除吗？'))
		{
			$.ajax({
				url:"{{ URL('admin/comment/delrep') }}",
				type:'post',
				data:{'data':en},
				headers: {
	           		 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        		},
	        		success:function(data)
	        		{
	        			alert(data);
	        			if(data=='删除成功')
	        			{
	        				//删除节点
	        				$('#'+en).remove();
	        			}
	        		},
	        		error:function(){
	        			alert('系统错误');
	        		}
			});
		}
	}
</script>


@endsection
