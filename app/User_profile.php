<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_profile extends Model
{
    protected $fillable = [
        'user_id', 'bio', 'avatar', 'phone_number'
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
}
