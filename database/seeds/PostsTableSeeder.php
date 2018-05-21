<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p1 = [
            "place_id" => 1,
            "place_detail" => "九斋536",
            "content" => "这里是我的寝室，很乱很脏",
            "cover" => "https://ws1.sinaimg.cn/mw690/6b01d453ly1frjdk4r1t5j23vj2kskjm.jpg",
            "author_name" => "路肉饭",
            "author_school" => "计通",
            "author_level" => "2015"
        ];
        $p2 = [
            "place_id" => 1,
            "place_detail" => "六斋666",
            "content" => "这么6的寝室号一定是不存在的",
            "cover" => "https://ws1.sinaimg.cn/mw690/6b01d453ly1frjdk4r1t5j23vj2kskjm.jpg",
            "author_name" => "三鲜都皮",
            "author_school" => "机械",
            "author_level" => "2015"
        ];
        $p3 = [
            "place_id" => 2,
            "place_detail" => "操场的跑道",
            "content" => "每天晚上有很多人跑步吧",
            "cover" => "https://ws1.sinaimg.cn/mw690/6b01d453ly1frjdk4r1t5j23vj2kskjm.jpg",
            "author_name" => "酸菜与",
            "author_school" => "计通",
            "author_level" => "2014"
        ];
        DB::table('posts')->insert($p1);
        DB::table('posts')->insert($p2);
        DB::table('posts')->insert($p3);
    }
}
