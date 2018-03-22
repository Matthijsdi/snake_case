<?php

namespace App\Http\Controllers;

use App\Competitie;
use Illuminate\Http\Request;

class CompetitieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $competities = Competitie::all();

        return view("competities.index", [
            'competities' => $competities,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('competities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Competitie  $competitie
     * @return \Illuminate\Http\Response
     */
    public function show(Competitie $competitie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Competitie  $competitie
     * @return \Illuminate\Http\Response
     */
    public function edit(Competitie $competitie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Competitie  $competitie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Competitie $competitie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Competitie  $competitie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Competitie $competitie)
    {
        //
    }
}
