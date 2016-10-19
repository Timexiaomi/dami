<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

date_default_timezone_set('PRC');
class LoginController extends Controller
{
    //跳转到登陆页面的方法
	public function index()
	{
		return view('home.login');
	}
	//执行登陆 验证账号密码 验证码
	public function dologin(Request $r)
	{
		//取出post传过来的值
		$name=$r->input('name');
		$pass=$r->input('pass');
		$code=$r->input('code');
		//判断账号是否存在
		$data=DB::table('user')->where('username','=',$name)->first();
		if($data==null)
		{
			Session()->set('loginerror','账号不存在');
			return redirect('/home/login');
			exit;
		}
		//取出对应账号的密码
		$passd=$data->password;
		$passdd=md5($pass);
		if($passd!=$passdd)
		{
			Session()->set('loginerror','密码不正确');
			return redirect('/home/login');
			exit;
		}
		//取出验证码
		$codes=$r->session()->get('code');
		if($code!=$codes)
		{
			Session()->set('loginerror','验证码错误');
			return redirect('/home/login');
			exit;
		}
		//验证用户状态
		$status=$data->status;
		if($status=='0')
		{
			Session()->set('loginerror','此账号无法登陆');
			return redirect('/home/login');
			exit;
		}
		//设置登录时间
		$time=date("Y-m-d H:i:s",time());
		DB::table('user')->where('id','=',$data->id)->update(['landing'=>$time]);

		//所有验证通过时，设置session进入前台
		Session()->set('username',$name);
		Session()->set('userid',$data->id);
		return redirect('/home/index');
	}
	public function logout()
	{
		session()->forget('username');
		session()->forget('userid');
		return redirect('home/index');
	}

}
