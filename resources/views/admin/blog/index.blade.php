@extends('admin/base/base')

@section('title')
友情链接管理
@endsection

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    友情链接管理
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><button class="btn btn-block btn-primary" data-toggle="modal" data-target="#myadd">添加友情链接</button></h3>

			<!-- 做添加的模态框 -->
                <div class="modal fade" id="myadd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			        <h4 class="modal-title">添加友情链接</h4>
			      </div>
			      <div class="modal-body">
			      	友情链接名称：<input id='tianjiam' class="form-control input-lg" placeholder="请输入友情链接名称" type="text">
			      	友情链接地址：<input id='tianjiad' class="form-control input-lg" placeholder="请输入友情链接地址" type="text">
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
                <th>友情链接编号</th>
                <th>友情链接名称</th>
                <th>友情链接地址</th>
                <th>操作</th>
              </tr>
            </thead>
            <tbody>
            @foreach($list as $li)
              <tr woca='{{ $li->id }}'>
                <td>{{ $li->id }}</td>
                <td dd='{{ $li->id }}'>{{ $li->name }}</td>
                <td ff='{{ $li->id }}'>{{ $li->url }}</td>
                <td><span><button class="btn btn-md-1 btn-primary" data-toggle="modal" data-target="#{{ $li->id }}">修改</button></span>|<span><button  class="btn btn-md-1 btn-primary" onclick='dodel(this.value)' value='{{ $li->id }}'>删除</button></span></td>
                <!-- 做修改的模态框 -->
                <div class="modal fade" id="{{ $li->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			        <h4 class="modal-title">修改友情链接</h4>
			      </div>
			      <div class="modal-body">
			      	友情链接名称：<input name='name' cc='{{ $li->id }}' class="form-control input-lg" placeholder="{{ $li->name }}" type="text"><br>
			      	友情链接地址：<input name='names' bb='{{ $li->id }}' class="form-control input-lg" placeholder="{{ $li->url }}" type="text">
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
			        <input onclick='edit(this.name)' name='{{ $li->id }}' type="submit" class="btn btn-primary" data-dismiss="modal" value='保存'>
			        </form>
			      </div>
			    </div>
			  </div>
			</div>
              </tr>
              @endforeach
              <tr ><td colspan='4'>{!! $list->render() !!}</td></tr>
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
		//获取输入的表单中友情链接的名称
		var a=$("input[cc="+en+"]").val();
		//获取输入表单中友情链接的地址
		var b=$("input[bb="+en+"]").val();
		$.ajax({
			url:"{{ URL('admin/blog/edit') }}",
			type:'post',
			data:{'data':en,'name':a,'url':b},
			 headers: {
           			 'X-CSRF-TOKEN': $('p[name="csrf-token"]').attr('content')
        		},
			success:function(data){
				alert(data);
				if(data=='修改成功')
				{
					//改变对应节点的值
					$('td[dd='+en+']').html(a);
					$('td[ff='+en+']').html(b);
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
		//获取输入的mingcheng
		var addname=$('#tianjiam').val();
		//获取输入的地址
		var addurl=$('#tianjiad').val();
		$.ajax({
			url:"{{ URL('admin/blog/add') }}",
			type:'post',
			data:{'data':addname,'url':addurl},
			headers: {
           			 'X-CSRF-TOKEN': $('p[name="csrf-token"]').attr('content')
        		},
        		success:function(data)
        		{
        			if(data=='友情链接已存在' || data=='友情链接不能为空')
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
				url:"{{ URL('admin/blog/del') }}",
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

