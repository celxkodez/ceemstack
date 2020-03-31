<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'post_title', 'post_body', 'category_id', 'poster_id', 'code', 'post_img'
    ];
    public function category()
    {
        return $this->belongsTo('App\Category');
    }


    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
