<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use App\Place;

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
            "place_brief" => "运动场",
            "place_description" => "包括操场，篮球场，足球场，五环广场等运动场地。。。",
            "place_cover" => "https://ws1.sinaimg.cn/mw690/6b01d453ly1frjdli90ypj23nd2qj1l2.jpg"
        ];
        $place3 = [
            "id" => 3,
            "place_brief" => "教学区",
            "place_description" => "每天上课下课都很挤很挤的逸夫楼,教学楼,还有各种院楼",
            "place_cover" => "https://ws1.sinaimg.cn/mw690/6b01d453ly1frjdn150mzj23vc2kw4qr.jpg"
        ];
        $place4 = [
            "id" => 4,
            "place_brief" => "图书馆",
            "place_description" => "四层的图书馆，好好学习的地方",
            "place_cover" => "https://ws1.sinaimg.cn/mw690/6b01d453ly1frjdoy6k0qj23if1z1e82.jpg"
        ];
        $place5 = [
            "id" => 5,
            "place_brief" => "食堂",
            "place_description" => "万秀园与鸿博园,如果曾经的16斋走道和小物美旁的小摊也算的话...",
            "place_cover" => "https://ws1.sinaimg.cn/mw690/6b01d453ly1frjdoy6k0qj23if1z1e82.jpg"
        ];
        $place6 = [
            "id" => 6,
            "place_brief" => "花园",
            "place_description" => "咱们学校还有花园?那些草丛也算吧?",
            "place_cover" => "https://ws1.sinaimg.cn/mw690/6b01d453ly1frjdoy6k0qj23if1z1e82.jpg"
        ];
        $place7 = [
            "id" => 7,
            "place_brief" => "其他",
            "place_description" => "其他任何地方,只要你想得到",
            "place_cover" => "https://ws1.sinaimg.cn/mw690/6b01d453ly1frjdoy6k0qj23if1z1e82.jpg"
        ];

        Place::create($place1);
        Place::create($place2);
        Place::create($place3);
        Place::create($place4);
        Place::create($place5);
        Place::create($place6);
        Place::create($place7);
    }
}
