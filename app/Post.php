<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        "place_id",
        "place_detail",
        "content",
        "cover",
        "author_name",
        "author_school",
        "author_level"
    ];  

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    public function place()
    {
        return $this->belongsTo('App\Place');
    }
}
