<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Post;

class PostController extends Controller
{
    public function publishPost(Request $request)
    {

        $data = [
            'place_id' => (int)$request->placeId,
            'place_detail' => $request->placeDetail,
            'content' => $request->content,
            'cover' => $request->cover,
            'author_name' => $request->authorName,
            'author_school' => $request->authorSchool,
            'author_level' => date('Y', strtotime($request->authorLevel))
        ];
        $newPost = Post::create($data);
        if (!$newPost) {
            return array(
                'status' => 0,
                'msg' => "发布失败"
            );
        }
        return array(
            'status' => 1,
            'msg' => "发布成功",
            "post" => $newPost
        );
    }

    public function doVote(Request $request, $postid)
    {
        if (Post::find($postid)->increment('votes')) {
            return response(array(
                'status' => 1,
                'msg' => '点赞成功'
            ))->cookie('voted_' . $postid, 1, 1440);
        }
        return array(
            'status' => 0,
            'msg' => '点赞失败'
        );
    }
}