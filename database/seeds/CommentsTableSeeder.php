<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Comment;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $c1 = [
            "post_id" => 1,
            "comment" => "握草这也太脏啦吧，怎么住人啊你居然都忍啦这么多年？",
            "author_name" => "奥利奥",
            "author_school" => "计通",
            "author_level" => "2015"
        ];
        $c2 = [
            "post_id" => 1,
            "comment" => "确实很乱。",
            "author_name" => "黄们即",
            "author_school" => "材料",
            "author_level" => "2015"
        ];
        $c3 = [
            "post_id" => 2,
            "comment" => "啦啦啦路过",
            "author_name" => "买多馅饼",
            "author_school" => "数理",
            "author_level" => "2015"
        ];
        DB::table('comments')->insert($c1);
        DB::table('comments')->insert($c2);
        DB::table('comments')->insert($c3);
    }
}
