<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Org\Image;
use App\Http\Controllers\Controller;

class ConfigController extends Controller
{

    //网站配置管理页面
	public function index()
	{
		//查询数据库 取出数据
		$list=DB::table('config')->first();
		return view('admin.config.config',['list'=>$list]);
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

	//修改标题
	public function title(Request $r)
	{
		$ytitle=$r->title;
		$title=$r->data;
		//修改数据库中的title
		DB::table('config')->where('title',$ytitle)->update(['title'=>$title]);
		return '修改成功';
	}

	//关闭网站
	public function down()
	{
		DB::table('config')->where('status','=','1')->update(['status'=>'2']);
		return back();
	}
	//开启网站
	public function open()
	{
		DB::table('config')->where('status','=','2')->update(['status'=>'1']);
		return back();
	}
}
