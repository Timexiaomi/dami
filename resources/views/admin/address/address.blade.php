@extends('admin/base/base')

@section('title')
收货地址管理
@endsection

@section('content')

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

        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            用户收货地址管理
          </h1>

        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <form action="">
          			<span class='badge bg-blue'>用户:</span><input class="btn btn-default" style='width:150px' placeholder="请输入用户名" type="text" name='uname'>
          			<span class='badge bg-blue'>收货人姓名:</span><input class="btn btn-default"  style='width:150px' placeholder="请输入收货人" type="text" name='aname'>
          			<span class='badge bg-blue'>收货人手机号:</span><input class="btn btn-default" style='width:150px' placeholder="请输入收货人手机号" type="text" name='aphone'>
          			<input class="btn btn-info" type="submit" value='查询'>
        		   </form>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>收货地址编号</th>
                        <th>用户名</th>
                        <th>收货人姓名</th>
                        <th>手机号</th>
                        <th>省</th>
                        <th>市</th>
                        <th>县</th>
                        <th>镇</th>
                        <th>详细地址</th>
                        <th>地址标签</th>
                        <th>邮政编码</th>
                        <th>操作</th>
                      </tr>
                    </thead>
                      @foreach($list as $li)
                      <tr id='{{ $li->id }}'>
                        <td>{{ $li->id }}</td>
                        <td>{{ $li->us }}</td>
                        <td>{{ $li->name }}</td>
                        <td>{{ $li->phone }}</td>
                        <td>{{ $li->province }}</td>
                        <td>{{ $li->city }}</td>
                        <td>{{ $li->county }}</td>
                        <td>{{ $li->town }}</td>
                        <td>{{ $li->detail }}</td>
                        <td>{{ $li->label }}</td>
                        <td>{{ $li->postcode }}</td>
                        <td><button onclick='dodel(this.value)' value='{{ $li->id }}' class='badge bg-green'>删除</button></td>
                      </tr>
                      @endforeach
                      <tr><td colspan='11'>{!! $list->appends(['uname'=>$where['uname'],'aname'=>$where['aname'],'aphoto'=>$where['aphone']])->render() !!}</td></tr>
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
						url:"{{ URL('admin/address/del') }}",
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
