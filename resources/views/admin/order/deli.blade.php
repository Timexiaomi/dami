@extends('admin/base/base')

@section('title')
配送方式管理
@endsection

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    配送方式管理
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><button class="btn btn-block btn-primary" data-toggle="modal" data-target="#myadd">添加配送方式</button></h3>

			<!-- 做添加的模态框 -->
                <div class="modal fade" id="myadd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			        <h4 class="modal-title">添加配送方式</h4>
			      </div>
			      <div class="modal-body">
			      <input id='tianjia' class="form-control input-lg" placeholder="请输入配送方式" type="text">
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
			        <input  onclick='add()' type="submit" class="btn btn-primary" data-dismiss="modal" value='添加'>
			      </div>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div>


        </div><!-- /.box-header -->
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>配送方式编号</th>
                <th>配送方式名称</th>
                <th>操作</th>
              </tr>
            </thead>
            <tbody>
            @foreach($list as $li)
              <tr woca='{{ $li->id }}'>
                <td>{{ $li->id }}</td>
                <td  bb="{{ $li->id }}">{{ $li->name }}</td>
                <td><span><button class="btn btn-md-1 btn-primary" data-toggle="modal" data-target="#{{ $li->id }}">修改</button></span>|<span><button  class="btn btn-md-1 btn-primary" onclick='dodel(this.value)' value='{{ $li->id }}'>删除</button></span></td>
                <!-- 做修改的模态框 -->
                <div class="modal fade" id="{{ $li->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			        <h4 class="modal-title">修改配送方式</h4>
			      </div>
			      <div class="modal-body">
			      <form action="deli/edit" method='post'>
			      	<input name='name' id='{{ $li->name }}' class="form-control input-lg" placeholder="{{ $li->name }}" type="text"
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
			        <input onclick='edit(this.name)' name='{{ $li->id }}' cc='{{ $li->name }}' type="submit" class="btn btn-primary" data-dismiss="modal" value='保存'>
			        </form>
			      </div>
			    </div>
			  </div>
			</div>
              </tr>
              @endforeach
              <tr ><td colspan='3'>{!! $list->render() !!}</td></tr>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->            </tbody>

    </div><!-- /.col -->
	<p name="csrf-token" content="{{ csrf_token() }}"></p>
  </div><!-- /.row -->
  <script>
      //表格居中js
	$(function(){
		var th=document.getElementsByTagName('th');
		var td=document.getElementsByTagName('td');
		for (var i = 0; i < th.length; i++) {
			th[i].style.textAlign='center';
		};
		for (var i = 0; i < td.length; i++) {
			td[i].style.textAlign='center';
		};
	})
	// ajax做修改
	function edit(en)
	{
		//获取表单中的值
		var a=$("input[name="+en+"]").attr('cc');
		// alert(a);
		//表单中输入的值
		var name=$('#'+a).val();
		$.ajax({
			url:"{{ URL('admin/deli/edit') }}",
			type:'post',
			data:{'data':en,'name':name},
			 headers: {
           			 'X-CSRF-TOKEN': $('p[name="csrf-token"]').attr('content')
        		},
			success:function(data){
				alert(data);
				if(data=='修改成功')
				{
					//改变对应节点的值
					$('td[bb='+en+']').html(name);
				}
			},
			error:function(){
				alert('系统错误');
			},
		});
	}

	//ajax做添加
	function add()
	{
		//获取输入的值
		var addname=$('#tianjia').val();
		$.ajax({
			url:"{{ URL('admin/deli/add') }}",
			type:'post',
			data:{'data':addname},
			headers: {
           			 'X-CSRF-TOKEN': $('p[name="csrf-token"]').attr('content')
        		},
        		success:function(data)
        		{
        			if(data=='配送方式已存在' || data=='配送方式不能为空')
        			{
        				alert(data);
        			}
        			else{

        				alert(data);
        				window.location.reload();

        			}
        		},
        		error:function()
        		{
        			alert('系统错误');
        		},
		});

	}

	//ajax做删除

	function dodel(en)
	{
		if(confirm('你真的要删除吗？'))
		{
			$.ajax({
				url:"{{ URL('admin/deli/del') }}",
				type:'post',
				data:{'data':en},
				headers: {
	           			 'X-CSRF-TOKEN': $('p[name="csrf-token"]').attr('content')
	        		},
	        		success:function(data)
	        		{
	        			alert(data);
	        			if(data=='删除成功')
	        			{
	        				//删除此节点
	        				$('tr[woca='+en+']').remove();
	        			}
		        	},
	        		error:function()
	        		{
	        			alert('系统错误');
	        		},
			});
		}

	}
</script>
</section><!-- /.content -->
@endsection
