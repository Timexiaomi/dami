@extends('admin/base/base')

@section('title')
添加商品
@endsection

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            添加商品
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


                  <div>

                  </div>
                  <div class="tab-pane col-md-offset-2" id="settings">
                    <br>
                    <form class="form-horizontal" action='{{URL("admin/goods")}}' method='post' enctype='multipart/form-data'>
                    <input type="hidden" name='_token' value='{{ csrf_token() }}' >
                      <div class="form-group ">
                        <label for="inputgname" class="col-sm-2 control-label">商品名</label>
                        <div class="col-sm-5">
                          <input type="text" class="form-control" id="inputgname" placeholder="商品名"  name='gname'>
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
                          <input type="text" class="form-control" id="inputprice" placeholder="价格"  name='goods_price'>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputdiscount" class="col-sm-2 control-label">折数</label>
                        <div class="col-sm-5">
                          <input type="text" class="form-control" id="inputdiscount" placeholder="折数"  name='discount' value='0'>

                        </div>
                      </div>

                      </div>
                      <div class="form-group">
                      <label  class="col-sm-2 control-label">状态</label>
                      <div class="col-sm-4">
                       <div class="radio">
                        <label>
                          <input type="radio" name="goods_ground"  value="1" checked>
                          上架
                        </label>
                        <label>
                        <input type="radio" name="goods_ground" value="0">
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
                          <input type="radio" name="new"  value="1" checked>
                          是
                        </label>
                        <label>
                          <input type="radio" name="new" value="0">
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
                          <input type="radio" name="postage"  value="1" checked>
                          是
                        </label>
                        <label>
                          <input type="radio" name="postage" value="0">
                         否
                        </label>
                      </div>
                      </div>
                    </div>


                         <div class="form-group">
                        <label for="inputSex" class="col-sm-2 control-label">参数</label>
                            <div class="col-sm-9">

                    <textarea id="editor1" name="goods_data" rows="10" cols="80">
                        <ul>
                                  <li>
                                  <div class="spec-item-tit">处理器</div>

                                  <div class="spec-sub-item">
                                  <div class="spec-sub-item-tit">
                                  <p>&nbsp;</p>
                                  </div>
                                  </div>
                                  </li>
                                  <li>
                                  <div class="spec-item-tit">内存 / 存储</div>

                                  <div class="spec-sub-item">
                                  <div class="spec-sub-item-tit">&nbsp;</div>
                                  </div>
                                  </li>
                                  <li>
                                  <div class="spec-item-tit">显示屏</div>

                                  <p>&nbsp;</p>
                                  </li>
                                  <li>
                                  <div class="spec-item-tit">指纹识别</div>

                                  <p>&nbsp;</p>
                                  </li>
                                  <li>
                                  <div class="spec-item-tit">后置相机</div>

                                  <p>&nbsp;</p>
                                  </li>
                                  <li>
                                  <div class="spec-item-tit">前置相机</div>

                                  <p>&nbsp;</p>
                                  </li>
                                  <li>
                                  <div class="spec-item-tit">网络支持</div>

                                  <p>&nbsp;</p>
                                  </li>
                                  <li>
                                  <div class="spec-item-tit">无线连接</div>

                                  <p>&nbsp;</p>
                                  </li>
                                  <li>
                                  <div class="spec-item-tit">传感器</div>

                                  <p>&nbsp;</p>
                                  </li>
                                  <li>
                                  <div class="spec-item-tit">GPS</div>

                                  <p>&nbsp;</p>
                                  </li>
                                  <li>
                                  <div class="spec-item-tit">电池容量</div>

                                  <p>&nbsp;</p>
                                  </li>
                                  <li>
                                  <div class="spec-item-tit">可选版本</div>

                                  <p>&nbsp;</p>
                                  </li>
                                </ul>


                    </textarea>
                      </div>
                      </div>
                                    <div class="col-md-offset-2">
                                <div class="col-sm-2">
                            <button  type='submit' class="btn btn-block btn-success">添加</button>
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
