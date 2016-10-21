<?php

namespace App\Http\Controllers\Home;

use App\Org\Image;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{

	//个人中心管理
	public function person()
	{
		$class=DB::table('goodsclass')->get();
          $goods=DB::table('goods')->get();
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
          return view('home.myfile.person',['db'=>$goods,'class'=>$class,'user'=>$user,'usermessage'=>$usermessage]);
	}


	//修改个人信息视图
	public function update()
	{
		//登陆用户的id
		$id=session()->get('userid');
		//查询出用户的信息
		$list=DB::table('usermessage')->where('id',$id)->first();
		$class=\DB::table('goodsclass')->get();
          $goods=\DB::table('goods')->get();
		return view("home.myfile.userupdate",['db'=>$goods,'class'=>$class,'list'=>$list]);
	}

	// 执行信息修改
	public function doedit(Request $r)
	{
		//获取ajax传过来的值
		$id=$r->id;
		$name=$r->n;
		$sex=$r->s;
		$birthday=$r->b;
		$email=$r->e;
		$phone=$r->p;
		//修改数据库信息
		DB::table('usermessage')->where('id',$id)->update(['nickname'=>$name,'sex'=>$sex,'birthday'=>$birthday,'email'=>$email,'phone'=>$phone]);
		return '1';
	}

	//执行头像修改
	public function touxiang(Request $request)
	{
		  $id=session()->get('userid');
	        // //上传图片操作
	        if(!$request->file('photo'))
	        {
	            return back();
	        }
	        if ($request->hasFile('photo'))
	        {
	             $file=$request->file('photo');
	            //执行上传文件
	            if($file->isValid()){
	                    $ext=$file->getClientOriginalExtension();//获取后缀名
	                    $filename=time().rand(1000,9999).'.'.$ext;//获取随机文件名
	                    $file->move('./photo/',$filename);//保存在本地
	        }

	        $img=new Image();
	        $img->open("./photo/".$filename)->thumb(200,200)->save("./photo/u_".$filename);
	        //上传到数据库
	        $photoname="photo/u_".$filename;
	        $ob=\DB::table('usermessage')->where('id',$id)->update(['photo'=>$photoname]);
	        return back();
		}
	}

	//修改密码的页面
	public function pass()
	{
		$id=session()->get('userid');
		//查询数据库，获取账号，头像
		$username=DB::table('user')->where('id',$id)->first()->username;
		$photo=DB::table('usermessage')->where('id',$id)->first()->photo;
		return view("home.myfile.pass",['username'=>$username,'photo'=>$photo]);
	}

	//执行密码修改
	public function dopass(Request $r)
	{
		$id=session()->get('userid');
		//获取输入的旧密码
		$pass=$r->input('pass');
		// dd($pass);
		//输入的新密码
		$xpass=$r->input('xpass');
		//重复输入的新密码
		$rxpass=$r->input('rxpass');
		// dd($rxpass);
		if(!$xpass)
		{
			return back();
		}
		elseif(!$rxpass)
		{
			return back();
		}
		elseif(!$pass)
		{
			return back();
		}
		elseif($xpass!=$rxpass)
		{
			return back();
		}
		else
		{
			 $dpass=DB::table('user')->where('id',$id)->first()->password;
			 $mdpass=md5($pass);
			 $mdxpass=md5($xpass);
			 if($mdpass!=$dpass)
			 {
			 	return back();
			 }
			 else
			 {
			 	DB::table('user')->where('id',$id)->update(['password'=>$mdxpass]);
			 	session()->forget('username');
			 	session()->forget('userid');
			 	return redirect('home/login');
			 }
		}

	}
	//我的晒单
	public function mycomment()
	{
		$odd=array();
		$ddd=array();
		$gname=array();
		$price=array();
		$image=array();
		$status=array();
		$gid=array();
		//获取此用户的id
		$goods=array();
		$id=session()->get('userid');
		//查询出此用户所有付过钱的订单
		$order=DB::table('orders')->where('uid',$id)->where('state','>','4')->get();
		//遍历出此用户的订单
		foreach($order as $od)
		{
			//此订单的id
			$oid=$od->id;
			//通过订单id查询出所有dai评价的商品
			$goods=DB::table('orderdata')->where('oid',$oid)->where('status','1')->get();
			foreach ($goods as $v) {
				$idd=$v->id;
				$gname[$idd]=$v->gname;
				$price[$idd]=$v->price;
				$image[$idd]=$v->image;
				$status[$idd]=$v->status;
				$gid[$idd]=$v->gid;
				$ddd[$idd]=$idd;
				$odd[$idd]=$oid;
			}
			// dd($odd);
			// dd($gname);
		}
		$class=\DB::table('goodsclass')->get();
          $goods=\DB::table('goods')->get();
		return view("home.myfile.mycomment",['db'=>$goods,'class'=>$class,'gname'=>$gname,'price'=>$price,'image'=>$image,'status'=>$status,'gid'=>$gid,'idd'=>$ddd,'odd'=>$odd]);
	}
	//已评价商品
	public function mycomment2()
	{
		$gname=array();
		$price=array();
		$image=array();
		$status=array();
		$gid=array();
		//获取此用户的id
		$goods=array();
		$id=session()->get('userid');
		//查询出此用户所有付过钱的订单
		$order=DB::table('orders')->where('uid',$id)->where('state','>','4')->get();
		//遍历出此用户的订单
		foreach($order as $od)
		{
			//此订单的id
			$oid=$od->id;
			// dd($oid);
			$goods=DB::table('orderdata')->where('oid',$oid)->where('status','2')->get();
			foreach ($goods as $v) {
				$idd=$v->id;
				$gname[$idd]=$v->gname;
				$price[$idd]=$v->price;
				$image[$idd]=$v->image;
				$status[$idd]=$v->status;
				$gid[$idd]=$v->gid;
			}
		}
		$class=\DB::table('goodsclass')->get();
          $goods=\DB::table('goods')->get();
		return view("home.myfile.mycomment2",['db'=>$goods,'class'=>$class,'gname'=>$gname,'price'=>$price,'image'=>$image,'status'=>$status,'gid'=>$gid]);
	}
	//已失效商品
	public function mycomment3()
	{
		$gname=array();
		$price=array();
		$image=array();
		$status=array();
		$gid=array();
		//获取此用户的id
		$goods=array();
		$id=session()->get('userid');
		// dd($id);
		$order=DB::table('orders')->where('uid',$id)->where('state','>','4')->get();
		//遍历出此用户的订单
		foreach($order as $od)
		{
			//此订单的id
			$oid=$od->id;
			// dd($oid);
			$goods=DB::table('orderdata')->where('oid',$oid)->where('status','3')->get();
			foreach ($goods as $v) {
				$idd=$v->id;
				$gname[$idd]=$v->gname;
				$price[$idd]=$v->price;
				$image[$idd]=$v->image;
				$status[$idd]=$v->status;
				$gid[$idd]=$v->gid;
			}
		}
		$class=\DB::table('goodsclass')->get();
          $goods=\DB::table('goods')->get();
		return view("home.myfile.mycomment3",['db'=>$goods,'class'=>$class,'gname'=>$gname,'price'=>$price,'image'=>$image,'status'=>$status,'gid'=>$gid]);
	}

	//评论
	public function pinglun(Request $r)
	{

		$uid=session()->get('userid');

		$gid=$r->input('gid');

		$content=$r->input('content');

		$idd=$r->input('idd');

		$oid=$r->input('oid');

		// dd($idd);

		if(!$content)
		{
			return back();
		}
		else
		{
			DB::table('comment')->insert(['uid'=>$uid,'gid'=>$gid,'content'=>$content]);
			DB::table('orderdata')->where('id',$idd)->update(['status'=>'2']);
			DB::table('orders')->where('id',$oid)->update(['state'=>'6']);
			return back();
		}
	}
	//回到个人中心
	public function direct()
	{
		return redirect('home/person');
	}
}
