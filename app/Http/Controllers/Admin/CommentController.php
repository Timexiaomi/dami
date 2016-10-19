<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
    //评论视图
	public function index(Request $r)
	{
		// 连接数据库
		$db=DB::table('comment as c');

		$db->join('user as u','c.uid','=','u.id');
		$db->join('goods as g','c.gid','=','g.id');
		$db->select('c.*','u.username as uname','g.gname as gname');

		//封装搜索条件
		$where=array();
		//判断是否有晒单编号号的查询
		if($r->has('id'))
		{
			$id=$r->input('id');
			$ids=DB::table('comment')->where('id','=',$id)->first();
			if($ids)
			{
				$db->where('c.id','=',$id);
				$where['id']=$id;
			}
			else
			{
				$where['id']='';
			}
		}
		else
		{
			$where['id']='';
		}

		//判断是否有晒单人的查询
		if($r->has('uname'))
		{
			$uname=$r->input('uname');
			$uids=DB::table('user')->where('username','=',$uname)->first();
			if($uids)
			{
				$uid=$uids->id;
				$db->where('c.uid','=',$uid);
				$where['uname']=$uname;
			}
			else
			{
				$db->where('c.uid','=','woca meiyou');
				$where['uname']='';
			}
		}
		else
		{
			$where['uname']='';
		}
		//判断是否有晒单商品的查询
		if($r->has('gname'))
		{
			$gname=$r->input('gname');
			$gids=DB::table('goods')->where('gname','=',$gname)->first();
			if($gids)
			{
				$gid=$gids->id;
				$db->where('c.gid','=',$gid);
				$where['gname']=$gname;
			}
			else
			{
				$db->where('c.uid','=','woca meiyou');
				$where['gname']='';
			}
		}
		else
		{
			$where['gname']='';
		}
		$list=$db->orderBy('addtime','desc')->paginate(10);
		// dd($list);
		return view('admin.comment.comment',['list'=>$list,'where'=>$where]);
	}

	//查看详情
	public function show($id)
	{
		//根据id查询出数据库中的晒单数据
		$list=DB::table('comment as c')->where('c.id','=',$id)->first();
		//用户id
		$uid=$list->uid;
		//查询出用户名
		$uname=DB::table('user')->where('id','=',$uid)->first()->username;
		//商品id
		$gid=$list->gid;
		//查询出商品名
		$gname=DB::table('goods')->where('id','=',$gid)->first()->gname;
		//评论图片
		$image=$list->image;
		$images=array();
		if($image)
		{
			$images=explode(',',$image);
		}

		// dd($images);
		//联合查询出回复的数据
		$db=DB::table('reply as r');
		$db->join('user as u','r.uid','=','u.id');
		$db->select('r.*','u.username as us');
		$db->where('r.cid','=',$id);
		$replys=$db->paginate(1);
		// dd($replys);
		return view('admin.comment.reply',['uname'=>$uname,'gname'=>$gname,'list'=>$list,'image'=>$images,'reply'=>$replys]);

	}

	//ajax做回复的删除
	public function delrep(Request $r)
	{
		$id=$r->data;
		// 删除数据库中的数据
		$i=DB::table('reply')->where('id','=',$id)->delete();
		if($i>0)
		{
			return '删除成功';
		}
		else
		{
			return '删除失败';
		}
	}

	//ajax做晒单的删除
	public function delcom(Request $r)
	{
		$id=$r->data;
		// return $id;
		//删除comment表中对应id的数据
		$i=DB::table('comment')->where('id','=',$id)->delete();
		if($i)
		{
			$j=DB::table('reply')->where('cid','=',$id)->delete();
			return '删除成功';
		}
		else
		{
			return '删除失败';
		}
	}

}
