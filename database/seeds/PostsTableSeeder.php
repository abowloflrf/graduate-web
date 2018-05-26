<?php

use Illuminate\Database\Seeder;
use App\Post;

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
            "cover" => "http://p96qdgy32.bkt.clouddn.com/4ccb129fadb090f0b4b983cc6a74cf33247f77d2",
            "author_name" => "路肉饭",
            "author_school" => "计通",
            "author_level" => "2015",
            "votes" => 22,
        ];
        $p2 = [
            "place_id" => 1,
            "place_detail" => "六斋666",
            "content" => "这么6的寝室号一定是不存在的",
            "cover" => "http://p96qdgy32.bkt.clouddn.com/autumn-goodman-230240-unsplash.jpg",
            "author_name" => "三鲜都皮",
            "author_school" => "机械",
            "author_level" => "2015",
            "votes" => 67
        ];
        $p3 = [
            "place_id" => 2,
            "place_detail" => "操场的跑道",
            "content" => "每天晚上有很多人跑步吧",
            "cover" => "http://p96qdgy32.bkt.clouddn.com/josh-applegate-327763-unsplash.jpg",
            "author_name" => "酸菜与",
            "author_school" => "计通",
            "author_level" => "2014",
            "votes" => 6
        ];
        $p4 = [
            "place_id" => 3,
            "place_detail" => "逸夫楼106",
            "content" => "这是一个不存在的教室",
            "cover" => "http://p96qdgy32.bkt.clouddn.com/daniel-von-appen-268715-unsplash.jpg",
            "author_name" => "面包",
            "author_school" => "计通",
            "author_level" => "2011",
            "votes" => 1
        ];
        $p5 = [
            "place_id" => 4,
            "place_detail" => "图书馆2层",
            "content" => "经常去自习",
            "cover" => "http://p96qdgy32.bkt.clouddn.com/nicki-eliza-schinow-356622-unsplash.jpg",
            "author_name" => "三明治",
            "author_school" => "计通",
            "author_level" => "2009",
            "votes" => 2
        ];
        $p6 = [
            "place_id" => 5,
            "place_detail" => "万秀四层",
            "content" => "可以点菜",
            "cover" => "http://p96qdgy32.bkt.clouddn.com/zach-jiroun-269720-unsplash.jpg",
            "author_name" => "钢铁摇篮",
            "author_school" => "计通",
            "author_level" => "2011",
            "votes" => 55
        ];

        DB::table('posts')->insert($p1);
        DB::table('posts')->insert($p2);
        DB::table('posts')->insert($p3);
        DB::table('posts')->insert($p4);
        DB::table('posts')->insert($p5);
        DB::table('posts')->insert($p6);
    }
}
