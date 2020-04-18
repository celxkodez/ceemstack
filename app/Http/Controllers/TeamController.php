<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Session;

use App\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        

        return view('team.index')
                        ->with('teams', Team::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }






    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'team_name' => 'required|string|max:100'
        ]);



        Team::create([
            'team' => $request->team_name
        ]);


        Session::flash('success', 'Your team has been created successfully');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::find($id);

        $team = $team->team;
        Team::destroy($id);

        Session::flash('success', "Team $team Deleted!");

        return redirect()->back();
    }

        /**
     * Allow users to join a Particular team.
     *
     * 
     */
    public function joinTeam($id)
    {
        $team = Team::find($id);
        Auth::user()->teams()->attach($id);

        Session::flash('success', "$team->team Joined Successful!");

        return redirect()->back();
    }

            /**
     * Allow users to leave a Particular team.
     *
     * 
     */
    public function leaveTeam($id)
    {
        $team = Team::find($id);
        Auth::user()->teams()->detach($id);

        Session::flash('success', "You left $team->team successfully!");

        return redirect()->back();
    }
}




