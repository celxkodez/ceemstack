<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_profile extends Model
{
    protected $fillable = [
        'user_id', 'bio', 'avater', 'phone_number', 'address'
    ];

    public function getUserAvater($avater){

        return asset($avater);

    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
