<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        "post_id",
        "comment",
        "author_name",
        "author_school",
        "author_level"
    ];  

    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
