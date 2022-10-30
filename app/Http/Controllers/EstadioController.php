<?php

namespace App\Http\Controllers;

use App\Models\Estadio;
use Illuminate\Http\Request;

class EstadioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $equipo= Estadio::all();
        
        // $pais = Pais::all()->where('id','=' ,$equipo->Pais_idPais);
       
         return $equipo;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estadio  $estadio
     * @return \Illuminate\Http\Response
     */
    public function show(Estadio $estadio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estadio  $estadio
     * @return \Illuminate\Http\Response
     */
    public function edit(Estadio $estadio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estadio  $estadio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estadio $estadio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estadio  $estadio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estadio $estadio)
    {
        //
    }
}
