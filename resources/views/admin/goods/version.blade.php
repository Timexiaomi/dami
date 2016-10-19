@extends('admin/base/base')
@section('title')
商品版本管理
@endsection
@section('content')
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            版本管理
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
            <li><a href="#">商品</a></li>
            <li><a href="#">版本</a></li>


          </ol>
        </section>
<div class="col-md-6">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">{{$goods->gname}}已有版本</h3>
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-condensed">
                    <tbody><tr>

                      <th>版本名</th>
                      <th style='width:40px'>价格</th>
                      <th>库存</th>
                      <th>销量</th>
                      <th>配置</th>
                      <th>操作</th>
                    </tr>
                    @foreach($ob as $version)
                    <tr>
                      <td>{{$version->version}}</td>
                      <td>{{$version->price}}</td>
                      <td>
                        {{$version->retail}}
                      <td>{{$version->sales}}</td>
                      <td>{{$version->data}}</td>
                      <td>
                          <a  href='{{URL("admin/version/color/$version->id")}}' class="btn btn-xs-0 btn-primary btn-xs">色彩</a>

                        <button class="btn btn-xs-0 btn-success btn-xs" onclick="dochange({{$version->id}})">修改</button>

                      </td>
                    </tr>
                    @endforeach
                  </tbody></table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
<div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">添加版本</h3>
                </div><!-- /.box-header -->
                <!-- form start -->

                <form role="form" action='{{URL("admin/goods/doversion")}}' method='post'>
                <input type="hidden" name='_token' value='{{csrf_token()}}'>
                <input type="hidden" name='gid' value="{{$goods->id}}" id='goods'>

                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputversion">版本名</label>
                      <input type="text" class="form-control" id="exampleInputversion" placeholder="输入版本名" name='version'>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputprice">价格 </label>
                      <input type="text" class="form-control" id="exampleInputprice" placeholder="输入价格" name='price'>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputretail">库存</label>
                      <input type="text" class="form-control" id="exampleInputretail" placeholder="输入库存" name='retail'>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputground">状态</label>
                      <div class="radio">
                        <label>
                          <input type="radio" name="ground" id="optionsRadios1" value="1" checked="">
                          上架
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="ground" id="optionsRadios2" value="0">
                         下架
                        </label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputdata">配置</label>
                      <input type="etxt" class="form-control" id="exampleInputdata" placeholder="输入配置" name='data'>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary" id='doupdate'>添加</button>

                  </div>
                </form>
              </div><!-- /.box -->
</div>

<script>
          function dochange(id){
             // console.log(id);
                  $.ajax({
                      url:"{{ URL('admin/version/change') }}",
                      type:'get',
                      data:{'data':id},
                      dataType:'json',
                      headers: {
                                'X-CSRF-TOKEN': $('p[name="csrf-token"]').attr('content')
                      },
                    dataType:'json',
                    success:function(data){
                       $('#exampleInputversion').val(data.version);
                       $('#exampleInputprice').val(data.price);
                       $('#exampleInputretail').val(data.retail);
                       if(data.ground=='1'){
                        $('#optionsRadios1').attr("checked");
                      }else{
                        $('#optionsRadios2').attr("checked");
                      }
                        $('#exampleInputdata').val(data.data);
                        $('#goods').remove();
                        $('form').attr('action','{{URL("admin/goods/updateversion")}}'+'/'+data.id);
                        $('#doupdate').html('修改');

                    },
                    error:function(){
                        alert('ajax链接失败');
                    },
              });
         }
</script>


@endsection
