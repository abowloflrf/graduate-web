<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');           
            $table->integer('place_id');            //所属地点标识id
            $table->string('place_detail');         //地点详细描述
            $table->text('content');                //内容
            $table->string('cover');                //封面图片
            $table->integer('votes')->default(0);   //点赞数
            $table->string('author_name');          //作者名
            $table->string('author_school');        //作者学院
            $table->year('author_level');           //作者年级
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
