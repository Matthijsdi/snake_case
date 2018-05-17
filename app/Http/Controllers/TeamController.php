<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::all();
        return view('teams.index')
            ->with('teams', $team);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // een nieuw Competitie moodel maken
        $teams = Team::make();
        // model vullen met data uit request
        $teams->naam = $request['naam'];
        $teams->competitie_id = $request['competitie_id'];
        // model opslaan in database
        $teams->save();
        // redirect naar competities pagina
        return redirect()->route('teams.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return view('teams.show')
            ->with('team', $team);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('teams.edit')
            ->with('team', $team);
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
        
        $data = $this->validate($request, [
            'naam' => 'required',
            'competitie_id' => 'required'
        ]);

        // een nieuw Competitie moodel maken
        $teams = Team::find($id);
        // model vullen met data uit request
        $teams->naam = $request['naam'];
        $teams->competitie_id = $request['competitie_id'];
        // model opslaan in database
        $teams->save();
        // redirect naar competities pagina
        return redirect()->route('teams.index')->with('success', 'Team updated');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teams = Team::find($id);
        $teams->delete();
        return redirect()->route('teams.index')->with('success', 'Team verwijderd'); 
    }
}
