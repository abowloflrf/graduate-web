<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Post;

class HotController extends Controller
{
    public function getHot()
    {
        $rankList = Redis::zrevrange('rank', 0, 9);
        $rankedPosts = [];
        foreach ($rankList as $rank) {
            array_push($rankedPosts, Post::find($rank));
        }
        return $rankedPosts;
    }
}
