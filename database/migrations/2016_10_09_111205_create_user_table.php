<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('user', function (Blueprint $table){
                $table->increments('id')->unsigned();
                $table->string('username');
                $table->string('password');
                $table->integer('integal')->default(0);
                $table->enum('power',['0','1'])->default(1);
                $table->enum('status',['0','1'])->default(1);
                $table->string('landing')->default('此用户还未登录过 . . . ');
                $table->string('register');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('user');
    }
}
