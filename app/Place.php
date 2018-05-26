<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $fillable = [
        "id",
        "place_brief",
        "place_desciption",
        "place_cover"
    ];

    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
