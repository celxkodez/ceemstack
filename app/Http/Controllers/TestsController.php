<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Team;

class TestsController extends Controller
{
    public function __construct()
    {
        
    }



    public function test()
    {
        $teams = Team::all();
        foreach($teams as $team):
            dd($team->userIsAlreadyInTeam(4, 9));


        endforeach;
        
    }


}
