@extends('admin/base/base')

@section('title')
轮番图管理
@endsection

@section('content')
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
			<span style='width:150px' class="btn btn-block btn-success">轮番图管理</sapn>
          </h1>

        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title badge bg-red">轮番图修改请注意</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                      <tr>
                        <td>轮番图编号</td>
                        <td id=''>轮番图路由</td>
                        <td>修改路由</td>
                        <td id=''>轮番图缩略图</td>
                        <td>修改轮番图</td>
                      </tr>
                      @foreach($list as $li)
				 <tr>
				 	<td>{{ $li->id }}</td>
				 	<td cc='{{ $li->id }}'>{{ $li->url }}</td>
				 	<td>
				 	<button data-toggle="modal" data-target="#{{ $li->id }}">修改</button>
						<div class="modal fade" id="{{ $li->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  	<div class="modal-dialog">
					    	<div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					        <h4 class="modal-title">修改轮番图路由</h4>
					      </div>
					      <div class="modal-body">
					      <input dd='{{ $li->id }}' class="form-control input-lg" placeholder="{{ $li->url }}" type="text">
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
					        <input  onclick='add(this.name)' name='{{ $li->id }}'  type="submit" class="btn btn-primary" data-dismiss="modal" value='修改'>
					      </div>
					    </div><!-- /.modal-content -->
					  </div><!-- /.modal-dialog -->
					</div>
					</td>
				 	<td><img style='width:150px;height:100px' src='{{ asset("$li->image") }}'></td>
				 	<td>
						<form action="{{ URL('admin/suolue
						') }}" method='post' enctype='multipart/form-data'>
							<input type="hidden" name='_token' value='{{ csrf_token() }}'>
							<input type="file" name='{{ $li->id }}'>
							<input type="submit" value='修改'>
						</form>
				 	</td>
				 </tr>
				 @endforeach
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
				// alert(en);
				//获取输入的值
				var title=$('input[dd='+en+']').val();
				$.ajax({
					url:"{{ URL('admin/slide/route') }}",
					type:'post',
					data:{'data':title,'id':en},
					headers: {
		           			 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		        		},
		        		success:function(data)
		        		{
		        			alert(data);
		        			if(data=='修改成功')
		        			{
		        				$('td[cc='+en+']').html(title);
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
