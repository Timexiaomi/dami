<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Org\Image;

class SlideController extends Controller
{
    //轮番图管理视图
	public function index()
	{
		//查询出数据库的数据
		$list=DB::table('slide')->get();
		return view('admin.slide.slide',['list'=>$list]);
	}
	//轮番图路由的修改
	public function route(Request $r)
	{
		$title=$r->data;
		// return $title;
		if(empty($title))
		{
			return '不能为空';
		}
		else
		{
			//修改数据库的数据
			$list=DB::table('slide')->where('id',$r->id)->update(['url'=>$title]);
			if($list)
			{
				return '修改成功';
			}
			else
			{
				return '修改失败';
			}
		}
	}

	//修改logo
	public function logo(Request $r)
	{
		 $file=$r->file('logo');
		 if($file==null){
		 	return back();
		 }
        	//执行上传文件
       	 if($file->isValid()){
                $ext=$file->getClientOriginalExtension();//获取后缀名
                $filename="logo.png";//获取随机文件名
                $file->move('./Homes/home/Images',$filename);//保存在本地
        	}
        	$img=new Image();
        	$img->open("./Homes/home/Images/".$filename)->thumb(56,56)->save("./Homes/home/Images/".$filename);
        	return back();
	}
	public function suolue(Request $r)
	{
		$f='0';
		if($r->file('1'))
		{
			$f='1';
		}
		elseif($r->file('2'))
		{
			$f='2';
		}
		elseif($r->file('3'))
		{
			$f='3';
		}
		elseif($r->file('4'))
		{
			$f='4';
		}
		else
		{
			return back();
		}
		//上传图片操作
        if ($r->hasFile("$f"))
        {
             $file=$r->file("$f");
            //执行上传文件
            if($file->isValid())
            {
                    $filename=$f.".jpg";//获取随机文件名
                    $file->move('./Homes/home/picture/',$filename);//保存在本地

        	   }

       	 	$img=new Image();
        		$img->open("./Homes/home/picture/".$filename)->thumb(1226,460)->save("./Homes/home/picture/".$filename);
        		return back();
		}
	}
}
