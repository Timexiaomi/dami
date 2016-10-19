<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    	//管理支付方式的视图
	public function pay()
	{
		//查询数据库 取出支付方式的数据
		$list=DB::table('pays')->paginate(5);
		return view('admin.order.pay',['list'=>$list]);
	}

	//ajax做支付方式修改
	public function payedit(Request $r)
	{
		$id=$r->input('data');
		$name=$r->name;
		// return $name;
		//判断是否输入支付方式
		if(!$name)
		{
			return '支付方式不能为空';
		}
		//查询数据库，此支付方式是否存在
		$list=DB::table('pays')->where('name','=',$name)->first();
		if($list)
		{
			return '此支付方式已经存在';
		}
		else
		{
			//修改数据库中的数据
			DB::table('pays')->where('id','=',$id)->update(['name'=>$name]);
			//取出数据库中id
			return '修改成功';
		}
	}

	//ajax做支付方式的添加
	public function payadd(Request $r)
	{
		//取出用户输入的值
		$name=$r->data;
		if(!$name)
		{
			return '支付方式不能为空';
		}
		// return $name;
		// 查询数据库，判断name值是否存在
		$list=DB::table('pays')->where('name',$name)->first();
		if($list)
		{
			return '支付方式已存在';
		}
		else
		{
			//向数据库中添加数据
			DB::table('pays')->insert(['name'=>$name]);
			//查询出添加的id
			$ls=DB::table('pays')->where('name','=',$name)->first();
			$id=$ls->id;
			return '添加成功';
		}
	}

	//ajax做支付方式删除
	public function paydel(Request $r)
	{
		$id=$r->data;
		$list=DB::table('pays')->where('id','=',$id)->delete();
		if($list)
		{
			return '删除成功';
		}
		else
		{
			return '删除失败';
		}
	}


	//管理配送方式的视图
	public function deli()
	{
		//查询数据库 取出配送方式的数据

		$list=DB::table('delivery')->paginate(5);
		return view('admin.order.deli',['list'=>$list]);
	}


	//ajax做配送方式修改

	public function deliedit(Request $r)
	{
		$id=$r->input('data');
		$name=$r->name;
		// return $name;
		//判断是否输入配送方式
		if(!$name)
		{
			return '配送方式不能为空';
		}
		//查询数据库，此配送方式是否存在
		$list=DB::table('delivery')->where('name','=',$name)->first();
		if($list)
		{
			return '此配送方式已经存在';
		}
		else
		{
			//修改数据库中的数据
			DB::table('delivery')->where('id','=',$id)->update(['name'=>$name]);
			//取出数据库中id
			return '修改成功';
		}
	}

	//ajax做配送方式的添加
	public function deliadd(Request $r)
	{
		//取出用户输入的值
		$name=$r->data;
		if(!$name)
		{
			return '配送方式不能为空';
		}
		// return $name;
		// 查询数据库，判断name值是否存在
		$list=DB::table('delivery')->where('name',$name)->first();
		if($list)
		{
			return '配送方式已存在';
		}
		else
		{
			//向数据库中添加数据
			DB::table('delivery')->insert(['name'=>$name]);
			//查询出添加的id
			$ls=DB::table('delivery')->where('name','=',$name)->first();
			$id=$ls->id;
			return '添加成功';
		}
	}

	//ajax做配送方式删除
	public function delidel(Request $r)
	{
		$id=$r->data;
		$list=DB::table('delivery')->where('id','=',$id)->delete();
		if($list)
		{
			return '删除成功';
		}
		else
		{
			return '删除失败';
		}
	}

	//订单列表视图
	public function index(Request $r)
	{
		//连接数据库
		$db=DB::table('orders as o');
		// $list=DB::select('select u.nickname as uname,p.name as pname,d.name as dname,a.detail as ad,a.photo as ap,a.name as an,orders.* from orders,usermessage as u,address as a,pays as p,delivery as d where orders.uid=u.uid && orders.aid=a.id && orders.pid=p.id && orders.did=d.id');
		// $list=DB::table('orders as o')
		$db->join('pays as p','o.pid','=','p.id');
		$db->join('delivery as d','o.did','=','d.id');
		$db->join('address as a','o.aid','=','a.id');
		$db->join('user as u','o.uid','=','u.id');
		$db->select('o.*','u.username as uname','p.name as pname','d.name as dname','a.detail as ad','a.phone as ap','a.name as an');
		//封装搜索添加
		$where=array();
		//判断是否有订单号的搜索条件
		if($r->has('oid'))
		{
			//订单号
			$oid=$r->input('oid');
			$db->where('o.id','=',$oid);
			$where['oid']=$oid;
		}
		else{
			$where['oid']='';
		}
		//判断是否有买家查询
		if($r->has('uname'))
		{
			$uname=$r->input('uname');
			//查询出买家对应的uid
			$uids=DB::table('user')->where('username','=',$uname)->first();
			if($uids)
			{
				//条件过滤
				$db->where('o.uid',$uids->id);
				$where['uname']=$uname;
			}
			else
			{
				$db->where('o.uid','没有啊');
				$where['uname']='';
			}
		}
		else
		{
			$where['uname']='';
		}
		//判断是否有收货人查询
		if($r->has('aname'))
		{
			$aname=$r->input('aname');
			$aids=DB::table('address')->where('name','=',$aname)->first();
			if($aids)
			{
				$db->where('o.aid','=',$aids->id);
				$where['aname']=$aname;
			}
			else
			{
				$db->where('o.uid','没有啊');
				$where['aname']='';
			}
		}
		else
		{
			$where['aname']='';
		}
		//判断是否有收货电话查询
		if($r->has('aphone'))
		{
			$aphone=$r->input('aphone');
			$aids=DB::table('address')->where('phone','=',$aphone)->first();
			if($pids)
			{
				$db->where('o.aid','=',$aids->id);
				$where['aphone']=$aphone;
			}
			else
			{
				$db->where('o.uid','没有啊');
				$where['aphone']='';
			}
		}
		else
		{
			$where['aphone']='';
		}
		//判断是否有支付方式判断
		if($r->has('pay'))
		{
			$pid=$r->input('pay');
			$pids=DB::table('pays')->where('id','=',$pid)->first();
			if($pids)
			{
				$db->where('o.pid','=',$pids->id);
				$where['pay']=$pid;
			}
			else
			{
				$db->where('o.pid','没有啊');
				$where['pay']='';
			}
		}
		else
		{
			$where['pay']='';
		}
		//判断是否有配送方式的查询
		if($r->has('deli'))
		{
			$did=$r->input('deli');
			$dids=DB::table('delivery')->where('id','=',$did)->first();
			if($dids)
			{
				$db->where('o.did','=',$dids->id);
				$where['deli']=$did;
			}
			else
			{
				$db->where('o.did','没有啊');
				$where['deli']='';
			}
		}
		else
		{
			$where['deli']='';
		}
		//判断是否有订单状态的查询
		if($r->has('state'))
		{
			$state=$r->input('state');
			$db->where('state','=',$state);
			$where['state']=$state;
		}
		else
		{
			$where['state']='';
		}
		$list=$db->orderBy('addtime','desc')->paginate(5);
		//查询出支付方式
		$pays=DB::table('pays')->get();
		//查询出配送方式
		$deli=DB::table('delivery')->get();
		return view('admin.order.order',['pays'=>$pays,'deli'=>$deli,'list'=>$list,'where'=>$where]);
	}

	//配货操作
	public function peihuo(Request $r)
	{
		$id=$r->input('data');
		//修改订单的状态
		$list=DB::table('orders')->where('id','=',$id)->update(['state'=>'3']);
		if($list)
		{
			return '配货成功';
		}
		else
		{
			return '配货失败';
		}
	}

	//出库操作
	public function chuku(Request $r)
	{
		$id=$r->input('data');
		$list=DB::table('orders')->where('id','=',$id)->update(['state'=>'4']);
		if($list)
		{
			return '出库成功';
		}
		else
		{
			return '出库失败';
		}
	}

	//查看订单详情
	public function show($id)
	{
		//查询出对应订单下的商品信息
		$list=DB::table('orderdata')->where('oid','=',$id)->get();
		// dd($list);
		return view('admin.order.orderdata',['list'=>$list,'id'=>$id]);

	}
}
