<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    //跳转的前台主页的方法
	public function index()
	{

                    $class=\DB::table('goodsclass')->get();

                    $goods=\DB::table('goods')->where('goods_ground','=','1')->get();

                    //网站配置
                    $list=\Db::table('config')->first();

                    //友情链接
                    $youqing=DB::table('blogroll')->get();

		return view('home.index',['db'=>$goods,'class'=>$class,'list'=>$list,'youqing'=>$youqing]);
	}
        //头部导航栏控制

        public function head(Request $request)
        {
                $id=$request->data;
                $ob=\DB::table('goods')->where('cid','=',$id)->get();
                return json_encode($ob);
        }

        //商品信息页面

        public function goodsmessage($id){
                    // $version=\DB::table('goodsdata')->join('goods','goodsdata.gid','=','goods.id')->where('goodsdata.gid','=',$id)->get();
                    $good=\DB::table('goods')->where('id','=',$id)->first();
                    $version=\DB::table('goodsdata')->where('gid','=',$id)->get();
                    // dd($version);

                    // dd($good);
                    $class=\DB::table('goodsclass')->get();
                    $goods=\DB::table('goods')->get();
                    //链接数据库
                    $reply=array();
                    $db=DB::table('comment as c');
                    $db->join('user as u','c.uid','=','u.id');
                    $db->join('usermessage as us','c.uid','=','us.id');
                    $db->select('c.*','u.username as usn','us.photo as up');
                    $db->where('gid',$id);
                    $list=$db->get();
                    foreach($list as $li)
                    {
                        $cid=$li->id;
                        //查询出回复的信息
                        $re=DB::table('reply as r');
                        $re->join('user as u','r.uid','=','u.id');
                        $re->join('usermessage as us','r.uid','=','us.id');
                        $re->select('r.*','u.username as un','us.photo as p');
                        $re->where('r.cid',$cid);
                        $reply[$cid]=$re->get();
                    }
                    // dd($un);
            return view('home.goodsmessage',['db'=>$goods,'class'=>$class,'ob'=>$version,'good'=>$good,'list'=>$list,'reply'=>$reply]);
        }
        //商品版本颜色选择
        public function color(Request $request)
        {
                $id=$request->data;
                $color=\DB::table('goodsimage')->where('gdid','=',$id)->get();

                return json_encode($color);
        }


        //购物车页面
        public function cart(){

            $class=\DB::table('goodsclass')->get();
            $goods=\DB::table('goods')->get();
            return view('home.cart',['db'=>$goods,'class'=>$class]);
        }
        //订单页面
        public function order(){
            $class=\DB::table('goodsclass')->get();
            $goods=\DB::table('goods')->get();
            return view('home.order',['db'=>$goods,'class'=>$class]);
        }
        //支付页面
        public function pay(){
            $class=\DB::table('goodsclass')->get();
            $goods=\DB::table('goods')->get();
            return view('home.pay',['db'=>$goods,'class'=>$class]);
        }
        //用户信息页面
        public function user(){
            $class=\DB::table('goodsclass')->get();
            $goods=\DB::table('goods')->get();
            return view('home.user',['db'=>$goods,'class'=>$class]);
        }
        //搜索信息页面
        public function search(){
            $class=\DB::table('goodsclass')->get();
            $goods=\DB::table('goods')->get();
            return view('home.search',['db'=>$goods,'class'=>$class]);
        }

        //商品详情获取
        public function goodsgata(Request $request){
                $id=$request->data;
                $ob=\DB::table('goods')->where('id','=',$id)->first();
                return json_encode($ob);
        }
        //个人地址管理
        public function address(){
                $class=\DB::table('goodsclass')->get();
            $goods=\DB::table('goods')->get();
            return view('home.address',['db'=>$goods,'class'=>$class]);

        }

        //做回复
        public function doreply(Request $r)
        {
            $cid=$r->cid;
            $uid=session()->get('userid');
            $content=$r->content;
            $time=date('Y-m-d H:i:s',time());
            //向数据库中添加数据
            if($content&&$uid)
            {
                $i=DB::table('reply')->insert(['uid'=>$uid,'cid'=>$cid,'content'=>$content,'time'=>$time]);
                return '1';
            }
        }
}
