<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    //收货地址管理
	public function address()
	{
		//查询出省
		// $list
		 $class=\DB::table('goodsclass')->get();
           $goods=\DB::table('goods')->get();
           return view('home.address',['db'=>$goods,'class'=>$class]);
	}

	//个人中心管理
	public function person()
	{
		$class=\DB::table('goodsclass')->get();
          $goods=\DB::table('goods')->get();
          //用户id
          $id=session()->get('userid');
          $user=DB::table('user')->where('id',$id)->first();
          $usermessage=DB::table('usermessage')->where('id',$id)->first();
          //查询出待支付订单数量
          // $porder=DB::table('orders')->select("select count(*) from orders where uid=".$id." and status='1'");
          //查询出代收货的订单数量
          // $sorder=DB::table('orders')->select("select count(*) from orders where uid=".$id." and status='4'");
          //查询出喜欢的商品数量
          // $lgoods=DB::table('like')->select("select count(*) from like where uid=".$id."");
          return view('home.person',['db'=>$goods,'class'=>$class,'user'=>$user,'usermessage'=>$usermessage]);
	}


	//修改个人信息
	public function update()
	{
		$class=\DB::table('goodsclass')->get();
          $goods=\DB::table('goods')->get();
		return view("home.userupdate",['db'=>$goods,'class'=>$class]);
	}

	//我的订单
	public function myorder()
	{
		$class=\DB::table('goodsclass')->get();
          $goods=\DB::table('goods')->get();
		return view("home.myorder",['db'=>$goods,'class'=>$class]);
	}

	//我的晒单
	public function mycomment()
	{
		$class=\DB::table('goodsclass')->get();
          $goods=\DB::table('goods')->get();
		return view("home.mycomment",['db'=>$goods,'class'=>$class]);
	}
}
