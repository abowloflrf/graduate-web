<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $place1 = [
            "id" => 1,
            "place_brief" => "宿舍楼",
            "place_description" => "一共有好多好多斋。。。",
            "place_cover" => "https://ws1.sinaimg.cn/mw690/6b01d453ly1frjdk4r1t5j23vj2kskjm.jpg"
        ];
        $place2 = [
            "id" => 2,
            "place_brief" => "运动场地",
            "place_description" => "包括操场，篮球场，足球场，五环广场等运动场地。。。",
            "place_cover" => "https://ws1.sinaimg.cn/mw690/6b01d453ly1frjdli90ypj23nd2qj1l2.jpg"
        ];
        $place3 = [
            "id" => 3,
            "place_brief" => "逸夫楼",
            "place_description" => "每天上课下课都很挤很挤的逸夫楼",
            "place_cover" => "https://ws1.sinaimg.cn/mw690/6b01d453ly1frjdn150mzj23vc2kw4qr.jpg"
        ];
        $place4 = [
            "id" => 4,
            "place_brief" => "图书馆",
            "place_description" => "四层的图书馆，好好学习的地方",
            "place_cover" => "https://ws1.sinaimg.cn/mw690/6b01d453ly1frjdoy6k0qj23if1z1e82.jpg"
        ];

        DB::table('places')->insert($place1);
        DB::table('places')->insert($place2);
        DB::table('places')->insert($place3);
        DB::table('places')->insert($place4);
    }
}
