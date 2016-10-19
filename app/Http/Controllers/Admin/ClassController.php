<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Poll;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ClassController extends Controller
{
    //商品类别展示
	public function index(Request $r)
	{
		//链接数据库
		$db=DB::table('goodsclass');
		//查询数据库 取出upidwei0的数据
		// dd($r->input('soutypename'));
		$array[]=array();
		$where[]=array();
		$nbsp='';
		if($r->has('soutypename')){
			$soutypename=$r->input('soutypename');
			$db=$db->where('name','like',"%{$soutypename}%");
			$where['soutypename']=$soutypename;
		}
		else{
			$where['soutypename']=null;
		}
		$list=$db->orderby('path')->paginate(20);
		//遍历查询出父类
		foreach($list as $type)
		{
			$upid=$type->upid;
			$id=$type->id;

			$path=$type->path;
			$count=substr_count($path,",")-1;
			$nbsps=str_repeat('&nbsp',$count*8);
			$nbsp[$id]=$nbsps;

			//查询出数据库里面id=uipd的那么值
			$name=DB::table('goodsclass')->where('id','=',$upid)->first();
			if($name)
			{
				$array[$id]=$name->name;
			}
			else
			{
				$array[$id]='这是根类别';
			}
		}
		// dd($array);
		return view('admin.goodstype.index',['list'=>$list,'pname'=>$array,'nbsp'=>$nbsp,'where'=>$where]);

	}

	//添加商品表单
	public function create($id=null)
	{
		if(session()->get('son')){
			session()->forget('son');
		}
		if($id)
		{
			$type=DB::table('goodsclass')->where('id','=',$id)->first();
			$array=array();
			$array[]="<option value=".($type->id).">".($type->name)."</option>";
			Session::set('son','add');
			return view('admin.goodstype.add',['array'=>$array]);
		}
		else{
				//查询数据库goodsclass的所有数据
				$list=DB::table('goodsclass')->orderBy('path')->get();
				$array=array();
				foreach($list as $type)
				{
					//取出path的值
					$path=$type->path;
					// $array[]=$path;
					//计算逗号出现的次数-1
					$count=substr_count($path,",");
					$nbsp=str_repeat('&nbsp',$count*8);
					$array[]="<option value=".($type->id).">".$nbsp.($type->name)."</option>";
				}
				return view('admin.goodstype.add',['array'=>$array]);
		}
	}


	//执行添加表单
	public function store(Request $r)
	{
		//获取post传过来的值
		$ss=$r->ss;
		$typename=$r->typename;
		//判断是否有此类别
		$panduan=DB::table('goodsclass')->where('name','=',$typename)->first();
		//判断是否有类别名
		if(empty($typename)){
			$msg=Session()->set('typeerror','类别名称没有填写');
			return back();
			exit;
		}
		if($panduan!=null)
		{
			$msg=Session()->set('typeerror','此类别已存在');
			return back();
			exit;
		}
		// 判断$ss的值
		if($ss=='-1')
		{
			// 向数据表goodsclass添加数据
			DB::table('goodsclass')->insert(['name'=>$typename,'level'=>'0','upid'=>'0']);
			//查询出id
			$data=DB::table('goodsclass')->where('name','=',$typename)->first();
			$id=$data->id;
			$path='0,'.$id;
			// var_dump($path);
			//修改path的值
			DB::table('goodsclass')->where('id','=',$id)->update(['path'=>$path]);
			$msg=Session()->set('typeerror','添加成功');
			return back();
			exit;
		}
		else{
			//查询添加此类别的父类别数据
			$data=DB::table('goodsclass')->where('id','=',$ss)->first();
			$plevel=$data->level;
			$pid=$data->id;
			$ppath=$data->path;
			$l=$plevel+1;
			//向数据库中添加数据
			DB::table('goodsclass')->insert(['name'=>$typename,'level'=>$l,'upid'=>$pid]);
			//查询出此类别id
			$ci=DB::table('goodsclass')->where('name','=',$typename)->first();
			$id=$ci->id;
			$path=$ppath.','.$id;
			//修改此类别的path字段的值
			DB::table('goodsclass')->where('id','=',$id)->update(['path'=>$path]);

			if(session()->get('son')){
				session()->forget('son');

			}
			$msg=Session()->set('typeerror','添加成功');
			return back();
			exit;
		}

	}


	//ajax查询出子类别
	// public function addsontype(Request $r)
	// {
	// 	$id=$r->input('data');
	// 	// $id=1;
	// 	//查询数据库取出upid等于$id的数据
	// 	$list=DB::table('goodsclass')->where('upid','=',$id)->get();
	// 	$n=DB::table('goodsclass')->where('id','=',$id)->first();
	// 	$pname=$n->name;
	// 	// var_dump($n);
	// 	// var_dump($list);
	// 	//遍历组合字符串
	// 	$str='';
	// 	foreach($list as $sontype)
	// 	{
	// 		$name=$sontype->name;
	// 		$level=$sontype->level;
	// 		$pid=$sontype->id;
	// 		$uid=$sontype->upid;
	// 		$str.="<tr id='".$pid."' class='".$uid."'><td><button  onclick='dogo(this.value)' value='".$pid."' class='btn btn-block btn-success'></button></td><td>".$name."</td><td><span class='badge bg-red'>".$level."</span>
 //              </td>
 //              <td><span class='badge bg-red'>".$pname."</span></td>
 //              <td><a href=''><button class='badge bg-red'>添加子类别</button></a>|<a href=''><button class='badge bg-red'>修改</button></a>|<button class='badge bg-red'>删除</button></td></tr>";
	// 	}
	// 	return $str;
	// }
	//修改模块名称的页面
	public function show($id)
	{
		//查询数据库，取出商品类别名称
		// dd($id);
		$list=DB::table('goodsclass')->where('id','=',$id)->first();
		$name=$list->name;
		// $name='1';
		return view('admin.goodstype.edit',['name'=>$name,'id'=>$id]);
	}
	//执行修改
	public function update(Request $r)
	{
		// dd($r->tname);
		//判断商品名是否为空
		if(!$r->tname)
		{
			Session::set('sonerror','商品类别名称不能为空');
			return back();
		}
		//判断数据库中是否有此类名
		$list=DB::table('goodsclass')->where('name','=',$r->tname)->first();
		if(!$list)
		{
			//修改数据库中的数据
			DB::table('goodsclass')->where('id','=',$r->id)->update(['name'=>$r->tname
				]);
			return redirect('admin/goodsclass');
			exit();
		}
		else{
			Session::set('sonerror','商品类别已存在');
			return back();
		}
	}
	//删除
	public function del(Request $r)
	{
		$id=$r->data;
		// $id=40;
		//判断此类别下是否有i子类别
		$sfs=DB::table('goodsclass')->where('upid','=',$id)->first();
		// $panduan=DB::table('goodsclass')->where('name','=',$typename)->first();
		if(empty($sfs))
		{
			//删除数据库中的数据
			DB::table('goodsclass')->where('id','=',$id)->delete();
			echo '删除成功';
		}
		else{
			echo '无法删除';
		}
	}
}
