<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'post_title',
        'post_body', 
        'category_id', 
        'poster_id', 
        'code', 
        'post_img' , 
        'slug', 
        'poster_name'
    ];

    protected $dates =['deleted_at'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }


    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
