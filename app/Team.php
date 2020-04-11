<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;
use App\User;

class Team extends Model
{
    protected $fillable = ['team'];


    
    public function user()
    {
        return $this->belongsToMany('App\User');
    }

    public function userIsAlreadyInTeam($user_id, $team_id){

        // $user_id = Auth::user()->id;

        $teamsBelongedTo = [];

        $teams = User::find($user_id)->teams;


        foreach($teams as $team):

            array_push($teamsBelongedTo, $team->id);

        endforeach;

        if(in_array($team_id, $teamsBelongedTo)){


            return  true;
        }else {
            return  false;
        }

        
    }

    
}
