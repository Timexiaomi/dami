<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('userMessage', function (Blueprint $table){
            $table->increments('id');
            $table->integer('uid')->unsigned();
            $table->string('nickname')->default('小米用户');
            $table->string('email')->nullable();
            $table->integer('phone')->nullable();
            $table->enum('sex',['0','1'])->default(1);
            $table->string('birthday')->nullable();
            $table->string('photo')->default('photo/default.jpg');
            $table->string('security')->nullable();
            $table->string('answer')->nullable();
            $table->string('address')->nullable();
            $table->integer('bank')->nullable();
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
        Schema::drop('userMessage');
    }
}
