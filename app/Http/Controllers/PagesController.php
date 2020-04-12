<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    //for the landing page
    public function index ()
    {
        return view('pages.index');
    }
    public function market()
    {
        return view('pages.market');
    }

    
}
