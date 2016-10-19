<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;//使用验证码的类
use Session;

class loginController extends Controller
{
    //登陆页面
    public function login()
    {
            return  view('admin.login.login');
    }
    //执行登陆
    public function dologin(Request $request)
    {

               //检验验证码
            $mycode=session()->get('code');

            if($mycode!=$request->input('code'))
            {
                    return back()->with('msg','验证码错误');
            }

            //用户名
            //获的表单提交的用户名和密码
            $username=$request->input('username');
            $password=$request->input('password');
            $landing=$request->input('landing');
            $ob = \DB::table('user')->join('usermessage','user.id','=','usermessage.uid')->where("username",$username)->first();
            if($ob)
            {
                    if($ob->password==md5($password))
                    {
                        if($ob->power==0){
                                if($ob->status=1){
                       $time=\DB::table('user')->where('id',$ob->id)->update(['landing'=>$landing]);
                        session()->set("adminuser",$ob);
                        return redirect("admin/index");
                    }
                    return back()->with('msg','被禁用');
                    }
                    return back()->with('msg','权限不够');
                    }
                    return back()->with("msg","密码错误");
            }
            return back()->with("msg","用户名错误");



    }

    //验证码
        public function captcha($tmp){
     //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();

        //把内容存入session中
        session()->flash('code',$phrase);

        //生成图片
        return response($builder->output())->header('Content-Type','image/jpeg');

        }

        //用户退出
        public function loginout(){
                //销毁session
                session()->forget('adminuser');
                //重定向
                return redirect('admin/login');
        }

}
