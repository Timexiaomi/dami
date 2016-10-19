@extends('admin/base/base')
@section('title')
    版本色彩设置
@endsection
@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            版本色彩管理
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
            <li><a href="#">商品</a></li>
            <li><a href="#">版本</a></li>
            <li><a href="#">色彩</a></li>

          </ol>
        </section>

<div class="">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">色彩</h3>
                </div><!-- /.box-header -->
                <!-- form start -->

                <form role="form" action='{{URL("admin/version/color/{$gd->id}")}}' method="post">
                <input type="hidden" name='_token' value='{{csrf_token()}}'>
                <!-- <input type="hidden" name='gdid' value='{{$gd->id}}'> -->

                  <div class="box-body">
                    <div class="form-group col-md-6">
                      <label for="exampleInputcolor">色彩名</label>
                      <input type="text" class="form-control" id="exampleInputcolor" placeholder="请输入色彩名" name='gdcolor'>
                    </div>

                    <div class="form-group col-md-6">
                      <label for="exampleInputretail">库存数</label>
                      <input type="text" class="form-control" id="exampleInputretail" placeholder="请输入库存数" name='retail'>
                    </div>


                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">添加</button>
                  </div>
                </form>
              </div><!-- /.box -->


            </div>
<div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">已有的色彩</h3>
                </div><!-- /.box-header -->

<div class="row">
<!--     @foreach($ob as $color)
    <div class="col-sm-6 col-md-3">
         <div class="thumbnail">
            <img src='{{asset("$color->gdimage")}}'
             alt="通用的占位符缩略图">
            <div class="caption">
                <h3>缩略图标签</h3>
                <p>{{$color->gdcolor}}</p>
                <p>
                    <a href="#" class="btn btn-primary" role="button">
                        按钮
                    </a>
                    <a href="#" class="btn btn-default" role="button">
                        按钮
                    </a>
                </p>
            </div>
         </div>
    </div>
    @endforeach -->
    @foreach($ob as $color)
                <div class="col-sm-6 col-md-3" >
                <div class="thumbnail">
                <form action='{{URL("admin/version/color/{$color->id}")}}' enctype='multipart/form-data' method='post' >
                  <input type="hidden" name='_token' value='{{ csrf_token() }}'>
                  <!-- <input type="hidden" name='_method' value='put'> -->
                             <div class="form-group">

                    <div class="controls">
                      <div class="fileupload fileupload-new" data-provides="fileupload">

                        <div class="fileupload-new thumbnail" style="width: 150px; height: 150px;">
                          <img src='{{asset("$color->gdimage")}}' alt="">
                          <img src="{{asset('goods/colorimage/AAAAAA&amp;text=no+image')}}" style='display:none'  />
                        </div>
                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>

                        <div>
                          <span class="btn btn-file"><span class="fileupload-new">更换</span>
                          <span class="fileupload-exists">更换</span>
                          <input type="file" name='gdimage'  class="default" /></span>
                          <button type="submit" class=" fileupload-exists" >上传</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  </form>
                       <div class="caption">

                <h3 id='cc{{$color->id}}'>{{$color->gdcolor}}</h3>
               库存量： <p id='ee{{$color->id}}'>{{$color->retail}}</p>
                <p>
                    <button      class="btn btn-primary"  data-toggle="modal" data-target="#{{$color->id }}">
                        修改
                    </button>

                     <div class="modal fade" id="{{ $color->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title">修改版本颜色</h4>
            </div>
            <div class="modal-body">
            <form action="{{URL('admin/color/edit')}}" method='post'>
              颜色：<input name='gdcolor' id='{{ $color->gdcolor }}' class="form-control input-lg" placeholder="{{ $color->gdcolor }}" type="text" value='{{$color->gdcolor}}'>
              库存：<input name='retail' id='{{ $color->retail }}' class="form-control input-lg" placeholder="{{ $color->retail }}" type="text" value='{{$color->retail}}'>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
              <input onclick="doedit(this.name)" name='{{ $color->id }}' cc='{{ $color->gdcolor }}' dd='{{ $color->retail}}' type="submit" class="btn btn-primary" data-dismiss="modal" value='保存'>
              </form>
            </div>
          </div>
        </div></div></div>

                </p>
            </div>
         </div>

</div>

@endforeach

</div>

<p name="csrf-token" content="{{ csrf_token() }}"></p>
 </div>
<script type="text/javascript">

function doedit(id){
    var r=$("input[name="+id+"]").attr('dd');
    var g=$("input[name="+id+"]").attr('cc');
    var retail=$('#'+r).val();
    var gdcolor=$('#'+g).val();

    // console.log(retail);
    // console.log(gdcolor);
    // console.log(id);

    $.ajax({
        url:"{{ URL('admin/color/edit') }}",
        type:'post',
        data: {'id':id,'gdcolor':gdcolor,'retail':retail},
        headers: {
                 'X-CSRF-TOKEN': $('p[name="csrf-token"]').attr('content')
            },
        success:function(data){
            // console.log(data);
            if(data>0){
                $('#cc'+id).html(gdcolor);
                $('#ee'+id).html(retail);
            }

        },
        error:function(){
          alert('ajax链接错误');
        },
    });
}
</script>



@endsection
