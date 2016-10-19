<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use Gregwar\Captcha\CaptchaBuilder;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use DB;
date_default_timezone_set('PRC');
class RegiController extends Controller
{
    //跳转到注册页面的方法
	public function index()
	{
		return view('home.register');
	}
	//验证码
	public function code($code)
	{
		$builder=new CaptchaBuilder;
		$builder->build(150,50);
		Session::set('code',$builder->getPhrase()); //存储验证码
		return response($builder->output())->header('Content-type','image/jpeg');
	}
	//检查用户是否存在
	public function checkuser(Request $r)
	{
		//取出ajax传过来的账号
		$data=$r->input('data');
		// return $data;
		//判断账号在数据库中是否存在
		$dd=DB::table('user')->where('username',$data)->first();
		// return $dd;
		if($dd!=null){
			return '账号已存在';
		}
		else{
			return '账号可用';
		}
	}
	//执行注册
	public function doRegi(Request $r)
	{
		//取出post表单传过来的数据
		$name=$r->input('name');
		$pass=$r->input('pass');
		$code=$r->input('code');
		$icode=session()->get('code');
		//正则验证账号 密码
		$namepreg="/^[a-zA-Z][0-9a-zA-Z]{5,11}$/";
		$passpreg="/^[0-9a-zA-Z][0-9a-zA-Z]{5,16}$/";
		if(!preg_match($namepreg,$name))
		{
			return redirect('/home/regi');
			exit;
		}
		if(!preg_match($passpreg,$pass))
		{
			return redirect('/home/regi');
			exit;
		}
		if($code!=$icode){
			Session::set('codeerror','验证码错误');
			return redirect('/home/regi');
			exit;
		}
		$passg=md5($pass);
		$time=date("Y-m-d H:i:s",time());
		//向数据库中添加数据
		DB::table('user')->insert(['username'=>"$name",'password'=>"$passg","register"=>$time]);
		//取出id
		$ids=DB::table('user')->where('username','=',$name)->first();
		$id=$ids->id;
		//向usermessage表中添加uid
		DB::table('usermessage')->insert(['uid'=>$id]);
		return redirect('/home/index');
	}
}
