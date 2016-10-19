<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\Org\Image;

date_default_timezone_set('PRC');


class UserController extends Controller
{
    //show create store edit update destroy
    //查看全部
    public function index(Request $request)
    {
        $ob=\DB::table('user')->join('usermessage','user.id','=','usermessage.uid');
        $where=[];
        if($request->has('username')){
                $name=$request->input('username');
                $ob=$ob->where('username','like',"%{$name}%");
                    $where['name']=$name;
        }

        $list=$ob->paginate(5);

        return view("admin.user.user")->with(["list"=>$list,'where'=>$where]);
    }
    //查看单条
    public function show($id)
    {
            $ob=\DB::table('user')->join('usermessage','user.id','=','usermessage.uid');
    }
    //添加表单
    public function create()
    {
            return view("admin.user.add");
    }
    //执行添加
    public function store(Request $request)
    {
            $time=date("Y-m-d H:i:s",time());
            $name=$request->input('username');

            if(!empty($name)){
                $check=\DB::table('user')->where('username','=',$name)->first();
                if(!$check){
                $pass=$request->input('password');
                if(!empty($pass)){
                        $pa=$request->input('pass');
                        if($pass==$pa){
                        $password=md5($pass);
                        $power=$request->input('power');
                        $ob=\DB::table('user')->insertGetId(['username'=>$name,'password'=>$password,'power'=>$power,'register'=>$time]);
                        if($ob>0){
                                $db=\DB::table('usermessage')->insert(['uid'=>$ob]);
                                if($db>0){
                                        return redirect('admin/user');
                                }
                        }
                    }else{
                            return back()->with('msg','两次密码不一致');
                    }
                }else{
                    return back()->with('msg','请输入密码');
                }
}else{
         return back()->with('msg','用户名重复');
}

     }else{
                    return back()->with('msg','请输入用户
            名');
            }




    }
    //修改表单
    public function edit($id)
    {
            $ob=\DB::table('user')->join('usermessage','user.id','=','usermessage.uid')->where('user.id','=',$id)->first();
            return view('admin.user.edit',['ob'=>$ob]);
    }
    //执行修改
    public function update(Request $request,$id)
    {

        // //上传图片操作

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
        $ob=\DB::table('usermessage')->where('uid',$id)->update(['photo'=>$photoname]);
        if($ob>0){
                    return back();
        }
}
        //上传数据操作
            $data=$request->except('_token','_method','password');
            $db=\DB::table('user')->join('usermessage','user.id','=','usermessage.uid')->where('user.id','=',$id)->update($data);
               $password=md5($request->input('password'));
                $pass=\DB::table('user')->where('id','=',$id)->update(['password'=>$password]);
                if($pass>0){
                        return back();
                }
            if($db>0){

                    return back();
            }

    }
    //执行删除
    public function destroy($id)
    {

        $ob=\DB::table('user')->where('id',$id)->delete();
        if($ob){

                $db=\DB::table('usermessage')->where('uid','=',$id)->delete();
                if($db){
                        return back();
                }
        }
    }

        //修改用户开关
    public function down($id){
            // var_dump($id);

        $ob=\DB::table('user')->where('id',$id)->update(['status'=>'0']);
        return back();
    }
     public function open($id){
            // var_dump($id);

        $ob=\DB::table('user')->where('id',$id)->update(['status'=>'1']);
        return back();
    }

}
