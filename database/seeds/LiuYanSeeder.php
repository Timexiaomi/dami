<?php

use Illuminate\Database\Seeder;

class LiuYanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //执行添加操作
         $data = [
                    ['id'=>null,'title'=>"通知",'author'=>"小张",'content'=>'魔都魔都','addtime'=>time()],
                    ['id'=>null,'title'=>"通告",'author'=>"小强",'content'=>'周三开项目','addtime'=>time()],
                    ['id'=>null,'title'=>"通告",'author'=>"校长",'content'=>'周日没得休息','addtime'=>time()]
                
                ];
    
        //
        DB::table('liuyan')->insert($data);
        
    }
}
