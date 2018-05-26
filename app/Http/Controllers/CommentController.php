<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function publishComment(Request $request)
    {
        $data = [
            'post_id' => (int)$request->postId,
            'comment' => $request->comment,
            'author_name' => $request->authorName,
            'author_school' => $request->authorSchool,
            'author_level' => date('Y', strtotime($request->authorLevel))
        ];
        $newComment = Comment::create($data);
        if (!$newComment) {
            return array(
                'status' => 0,
                'msg' => "留言失败"
            );
        }
        return response(array(
            'status' => 1,
            'msg' => "留言成功",
            "post" => $newComment
        ))->cookie('author_name', $request->authorName)
            ->cookie('author_school', $request->authorSchool)
            ->cookie('author_level', date('Y', strtotime($request->authorLevel)));
    }
}
