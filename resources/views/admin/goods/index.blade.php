@extends('admin/base/base')

@section('title')
商品列表
@endsection

@section("content")
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            商品
            <small>商品列表</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 主页</a></li>
            <li><a href="#">商品</a></li>
            <li class="active">商品列表</li>
          </ol>
        </section>

        <section class="content">
        <!-- Main content -->
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header">
                  <a class="btn btn-xs-1 btn-success" href="{{ URL('admin/goods/create')}}">添加商品</a>

                  <div class="box-tools">
                  <form action="{{URL('admin/goods') }}" method='get'>


                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="gname" class="form-control input-sm pull-right" placeholder="搜索">
                      <div class="input-group-btn">
                        <button type="submit" class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                    </form>
                  </div>

                </div>

                <!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <th style="width: 10px">id</th>
                      <th>类别</th>
                      <th>商品名</th>
                      <th>封面图</th>
                      <th>商品单价</th>
                      <th>图书状态</th>

                      <th>特惠情况</th>

                      <th>添加时间</th>
                      <th>操作</th>
                    </tr>
                @foreach($list as $goods)
                    <tr>
                      <td>{{ $goods->id }}</td>
                      <td>{{ $goods->cid }}</td>
                      <td>{{ $goods->gname }}</td>
                      <td><div class="pull-left image">
              <img src='{{asset("$goods->goods_photo")}}' class="img-circle" alt="User Image" style="width:40px">
            </div></td>
                      <td>

                          @if($goods->discount!=0)
                            <?php  echo $goods->goods_price*($goods->discount*0.1)?>
                          @else
                           {{ $goods->goods_price }}
                        @endif
                      </td>
                      <td><?php echo (($goods->goods_ground)=='1')?'已上架':'已下架';?></td>
                      <td>
                        @if($goods->discount!=0)
                              {{$goods->discount}}折
                          @endif
                          @if($goods->postage!=0)
                                | 包邮
                            @endif
                          @if($goods->new!=0)
                                | 新品
                            @endif
                      </td>

                      <td>{{$goods->addtime}}</td>
                      <td>
                      <a class="btn btn-xs-1 btn-warning" href='{{URL("admin/goods/version/$goods->id")}}'>版本</a>
                      <a class="btn btn-xs-1 btn-success" href='{{URL("admin/goods/$goods->id")}}'>查看</a>
                      <a class="btn btn-xs-1 btn-primary" href='{{URL("admin/goods/$goods->id/edit")}}'>修改</a>

                      </td>
                    </tr>
                  @endforeach

                <form action="admin/goods" method='post' style='display:none' name='delform'>
                    <input type="hidden" name='_token' value='{{ csrf_token() }}'>
                    <input type="hidden" name='_method' value='delete'>
                </form>


                  </table>
                </div><!-- /.box-body -->

                <div class="box-footer clearfix">

                  <ul class="pagination pagination-sm no-margin pull-right">
                    {!! $list->render() !!}
                  </ul>
                </div>
              </div><!-- /.box -->
              </div>
              </div>
              </section>
          <script>

          </script>
@endsection
