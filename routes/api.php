<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::get('/places', function () {
    return App\Place::all();
});
Route::get('/place/{placeid}/posts', function ($placeid) {
    $place = App\Place::find($placeid);
    return $place ? $place->posts : [];

});
Route::get('/post/{postid}/comments', function ($postid) {
    $post = App\Post::find($postid);
    return $post ? $post->comments : [];
});
Route::get('/post/{postid}', function ($postid) {
    return App\Post::find($postid);
});
Route::get('/hot', function () {    //TODO
    return array([
        "place_id" => 1,
        "place_detail" => "九斋536",
        "content" => "热门的计算部分还没有完成",
        "cover" => "https://ws1.sinaimg.cn/mw690/6b01d453ly1frjdk4r1t5j23vj2kskjm.jpg",
        "author_name" => "路肉饭",
        "author_school" => "计通",
        "author_level" => "2015"
    ]);
});


Route::post('/upload', 'UploadController@doUpload');    //TODO
Route::post('/post', 'PostController@publishPost');
Route::post('/post/{postid}/comment', 'CommentController@publishComment');  //TODO
Route::post('/post/{postid}/vote', 'PostController@doVote');    //TODO
