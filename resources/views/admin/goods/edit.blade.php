@extends('admin/base/base')

@section('title')
修改商品
@endsection

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            修改商品
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
            <li><a href="#">商品</a></li>

          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">
            <div class="col-md-12">
              <div class="nav-tabs-custom">

                    @if(session('msg'))
                        <div class="box-header with-border">
                           <div class="bg-navy disabled color-palette"><span>{{session('msg')}}</span></div>
                     </div><!-- /.box-header -->

                    <h4></h4>
                    <h3 class="text-red"> </h3>
                    @else
                    <div class="box-header with-border">

                     </div><!-- /.box-header -->
                  @endif

                  <div class="tab-pane col-md-offset-2" id="settings">

                  <form action='{{URL("admin/goods/{$goods->id}")}}' enctype='multipart/form-data' method='post' >
                  <input type="hidden" name='_token' value='{{ csrf_token() }}'>
                  <input type="hidden" name='_method' value='put'>
                             <div class="form-group">
                  <label class="control-label">封面</label>
                    <div class="controls">
                      <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-new thumbnail" style="width: 150px; height: 150px;">
                          <img src='{{asset("$goods->goods_photo")}}' alt="">
                          <img src="{{asset('goods/photo/AAAAAA&amp;text=no+image')}}" style='display:none'  />
                        </div>
                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                        <div>
                          <span class="btn btn-file"><span class="fileupload-new">更换</span>
                          <span class="fileupload-exists">更换</span>
                          <input type="file" name='goods_photo'  class="default" /></span>
                          <button type="submit" class=" fileupload-exists" >上传</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  </form>

                  <form action='{{URL("admin/goods/gofile/{$goods->id}")}}' enctype='multipart/form-data' method='post' >
                  <input type="hidden" name='_token' value='{{ csrf_token() }}'>
                             <div class="form-group">
                  <label class="control-label">详情图片</label>
                    <div class="controls">
                      <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div class="fileupload-new thumbnail" style="width: 150px; height: 150px;">
                          <img src='{{asset("$goods->goods_image")}}' alt="">
                          <img src="{{asset('goods/photo/AAAAAA&amp;text=no+image')}}" style='display:none'  />
                        </div>
                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                        <div>
                          <span class="btn btn-file"><span class="fileupload-new">更换</span>
                          <span class="fileupload-exists">更换</span>
                          <input type="file" name='gofile'  class="default" /></span>
                          <button type="submit" class=" fileupload-exists" >上传</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  </form>


                    <form class="form-horizontal" action='{{URL("admin/goods/{$goods->id}")}}' method='post'>
                    <input type="hidden" name='_token' value='{{ csrf_token() }}' >
                    <input type="hidden" name='_method' value='put'>
                      <div class="form-group ">
                        <label for="inputgname" class="col-sm-2 control-label">商品名</label>
                        <div class="col-sm-5">
                          <input type="text" class="form-control" id="inputgname" placeholder="商品名"  name='gname' value="{{$goods->gname}}" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputcid" class="col-sm-2 control-label">所属分类</label>
                        <div class="col-sm-5">

                          <select id='select' name='cid' class="form-control">
                        <option value="-1" disabled >根类别</option>
                        @foreach($array as $list)
                                    {!! $list !!}
                        @endforeach
                        </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="inputprice" class="col-sm-2 control-label">价格</label>
                        <div class="col-sm-5">
                          <input type="text" class="form-control" id="inputprice" placeholder="价格"  name='goods_price' value="{{$goods->goods_price}}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputdiscount" class="col-sm-2 control-label">折数</label>
                        <div class="col-sm-5">
                          <input type="text" class="form-control" id="inputdiscount" placeholder="折数"  name='discount' value="{{$goods->discount}}">
                        </div>
                      </div>
                      <div class="form-group">
                      <label  class="col-sm-2 control-label">状态</label>
                      <div class="col-sm-4">
                       <div class="radio">
                        <label>
                          <input type="radio" name="goods_ground"  value="1" <?php echo ($goods->goods_ground)=='1'?"checked":''; ?>>
                          上架
                        </label>
                        <label>
                          <input type="radio" name="goods_ground" value="0"  <?php echo ($goods->goods_ground)=='0'?"checked":''; ?>>
                         下架
                        </label>
                      </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label  class="col-sm-2 control-label">新品</label>
                      <div class="col-sm-4">
                       <div class="radio">
                        <label>
                          <input type="radio" name="new"  value="1" <?php echo ($goods->new)=='1'?"checked":''; ?>>
                          是
                        </label>
                        <label>
                          <input type="radio" name="new" value="0"<?php echo ($goods->new)=='0'?"checked":''; ?>>
                         否
                        </label>
                      </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label  class="col-sm-2 control-label">包邮</label>
                      <div class="col-sm-4">
                       <div class="radio">
                        <label>
                          <input type="radio" name="postage"  value="1" <?php echo ($goods->postage)=='1'?"checked":''; ?>>
                          是
                        </label>
                        <label>
                          <input type="radio" name="postage" value="0" <?php echo ($goods->postage)=='0'?"checked":''; ?>>
                         否
                        </label>
                      </div>
                      </div>
                    </div>

                         <div class="form-group">
                        <label for="inputSex" class="col-sm-2 control-label">参数</label>
                            <div class="col-sm-9">

                    <textarea id="editor1" name="goods_data" rows="10" cols="80">

                     {{$goods->goods_data}}


                    </textarea>
                      </div>
                      </div>
                                    <div class="col-md-offset-2">
                                <div class="col-sm-2">
                            <button  type='submit' class="btn btn-block btn-success">修改</button>
                                </div>
                                <div class="col-sm-2">
                                  <button  type='reset' class="btn btn-block btn-primary">重置</button>
                                </div>
                                </div>
                      </div>
                    </form>
                  </div><!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <script type="text/javascript">
    window.onload = function()
    {
        CKEDITOR.replace( 'goods_data' );
    };

    // $("#inputgname").blur(function(){

    //         var gname=$("#inputgname").val();
    //         // $.ajax({
    //         //     url:{{}}
    //         // })
    // })
</script>

 @endsection
