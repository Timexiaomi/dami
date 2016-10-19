@extends('admin/base/base')

@section('title')
网站配置管理
@endsection
<script>
  //表格居中js
  window.onload=function()
  {
    var td=document.getElementsByTagName('td');
    for (var i = 0; i < td.length; i++) {
      td[i].style.textAlign='center';
      td[i].style.height='150px';
      td[i].style.lineHeight='100px';
    };
  }
</script>
@section('content')
<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
			<span style='width:150px' class="btn btn-block btn-success">网站配置管理</sapn>
          </h1>

        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title badge bg-red">网站管理需慎重</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                      <tr>
                        <td>网站标题</td>
                        <td id='{{ $list->title }}'>{{ $list->title }}</td>
                        <td><button data-toggle="modal" data-target="#myadd">修改</button></td>
                        <!-- 做修改的模态框 -->
		                <div class="modal fade" id="myadd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					        <h4 class="modal-title">修改标题</h4>
					      </div>
					      <div class="modal-body">
					      <input id='tianjia' class="form-control input-lg" placeholder="{{ $list->title }}" type="text">
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
					        <input  onclick='add(this.name)' name='{{ $list->title }}'  type="submit" class="btn btn-primary" data-dismiss="modal" value='修改'>
					      </div>
					    </div><!-- /.modal-content -->
					  </div><!-- /.modal-dialog -->
					</div>
                      </tr>
                      <tr>
                        <td>网站状态</td>
                        <td>
                        		@if( $list->status==1 )
                        		<span>
                        			<span class='badge bg-green'>网站开启中</span>
                        		</span>
                        		@else
                        		<span>
                        			<span class='badge bg-red'>网站关闭中</span>
                        		</span>
                        		@endif
                        </td>
                        <td>
                        		@if( $list->status==1 )
                        		<span>
                        			<a href="{{ URL('admin/down') }}" class="btn btn-app">
                    				<i class="fa fa-pause"></i> 关闭
                  				</a>
                  			</span>
                  			@else
                  			<span>
                  				<a href="{{ URL('admin/open')  }}" class="btn btn-app">
                    				<i class="fa fa-play"></i> 开启
                  				</a>
                  			</span>
                  			@endif
                        </td>
                      </tr>
                      <tr>
                      <tr>
                        <td>网站logo</td>
                        <td>
                        <span>
                        	<img src='{{ asset("$list->logo") }}'>
                        	</span>
                        </td>
                        <td>
						<form action="{{ URL('admin/logo') }}" method='post' enctype='multipart/form-data'>
							<input type="hidden" name='_token' value='{{ csrf_token() }}'>
							<input type="file" name='logo'>
							<input type="submit" value='修改'>
						</form>
                        </td>
                      </tr>
                      <tr>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
        <script>
        		// ajax做修改
			function add(en)
			{
				//获取输入的值
				var title=$('#tianjia').val();
				$.ajax({
					url:"{{ URL('admin/title') }}",
					type:'post',
					data:{'data':title,'title':en},
					headers: {
		           			 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		        		},
		        		success:function(data)
		        		{
		        			alert(data);
		        			if(data=='修改成功')
		        			{
		        				$('#'+en).html(title);
		        			}
		        		},
		        		error:function()
		        		{
		        			alert('系统错误');
		        		},
				});

			}
        </script>
@endsection
