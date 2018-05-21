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

Route::post('/upload');
Route::post('/post');
Route::post('/comment');
Route::post('/post/{postid}/vote');