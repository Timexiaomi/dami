@extends('admin/base/base')

@section('title')
评论晒单管理
@endsection

@section('content')

<section class="content-header">
  <h1>
  	评论晒单管理
  </h1>
</section>
<script>
  //表格居中js
  window.onload=function()
  {
    var th=document.getElementsByTagName('th');
    var td=document.getElementsByTagName('td');
    for (var i = 0; i < th.length; i++) {
      th[i].style.textAlign='center'
    };
    for (var i = 0; i < td.length; i++) {
      td[i].style.textAlign='center'
    };
  }
</script>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
        	<form action="">
          	<span class='badge bg-blue'>晒单编号:</span><input class="btn btn-default" style='width:150px' placeholder="请输入晒单编号" type="text" name='id'>
          	<span class='badge bg-blue'>晒单人:</span><input class="btn btn-default"  style='width:150px' placeholder="请输入晒单人" type="text" name='uname'>
          	<span class='badge bg-blue'>晒单商品:</span><input class="btn btn-default" style='width:150px' placeholder="请输入晒单商品" type="text" name='gname'>
          	<input class="btn btn-info" type="submit" value='查询'>
        	</form>
        </div><!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>晒单编号</th>
                <th>晒单人</th>
                <th>晒单商品</th>
                <th>有帮助数量</th>
                <th>无帮助的数量</th>
                <th>操作</th>
              </tr>
            </thead>
            <tbody>
            	@foreach($list as $li)
              <tr id='{{$li->id }}'>
                <td>{{ $li->id }}</td>
                <td>{{ $li->uname }}</td>
                <td>{{ $li->gname }}</td>
                <td>{{ $li->good }}</td>
                <td>{{ $li->bad }}</td>
                <td><a class='badge bg-green' href="comment/{{ $li->id }}">查看详情</a> | <button onclick='dodel(this.value)' value='{{ $li->id }}' class='badge bg-green'>删除</button></td>
              </tr>
              @endforeach
             <tr><td colspan='6'>{{ $list->appends(['id'=>$where['id'],'uname'=>$where['uname'],'gname'=>$where['gname']])->render() }}</td></tr>
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
				url:"{{ URL('admin/comment/delcom') }}",
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
