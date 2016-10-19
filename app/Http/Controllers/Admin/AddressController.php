<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AddressController extends Controller
{
    //收货地址管理视图
	public function index(Request $r)
	{
		//联合查询取出数据库里面的数据
		$db=DB::table('address as a');
		$db->join('user as u','a.uid','=','u.id');
		$db->select('a.*','u.username as us');

		$where=array();
		//判断是否有用户的查询
		if($r->has('uname'))
		{
			$uname=$r->input('uname');
			$uids=DB::table('user')->where('username',$uname)->first();
			if($uids)
			{
				$id=$uids->id;
				$db->where('a.uid',$id);
				$where['uname']=$uname;
			}
			else
			{
				$db->where('a.uid','woca meiyou');
				$where['uname']='';
			}
		}
		else
		{
			$where['uname']='';
		}
		//判断是否有收获人的查询
		if($r->has('aname'))
		{
			$aname=$r->input('aname');
			$db->where('a.name',$aname);
			$where['aname']=$aname;
		}
		else
		{
			$where['aname']='';
		}
		//判断是否有收获人手机号的查询
		if($r->has('aphone'))
		{
			$aphone=$r->input('aphone');
			$db->where('a.phone',$aphone);
			$where['aphone']=$aphone;
		}
		else
		{
			$where['aphone']='';
		}
		$list=$db->paginate(10);
		return view('admin.address.address',['where'=>$where,'list'=>$list]);
	}

	//ajax作删除
	public function del(Request $r)
	{
		$id=$r->input('data');
		// 删除数据库中的数据
		$i=DB::table('address')->where('id',$id)->delete();
		if($i)
		{
			return '删除成功';
		}
		else
		{
			return '删除失败';
		}
	}
}
