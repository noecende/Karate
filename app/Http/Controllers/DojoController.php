<?php

namespace App\Http\Controllers;

use App\Dojo;
use Illuminate\Http\Request;

class DojoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dojos = Dojo::all();
        return view('dojos_index', ["dojos" => $dojos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('dojos');
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
        $dojo = new Dojo($request->input());
        $dojo->save();
        return "Dojo Registrado";

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dojo  $dojo
     * @return \Illuminate\Http\Response
     */
    public function show(Dojo $dojo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dojo  $dojo
     * @return \Illuminate\Http\Response
     */
    public function edit(Dojo $dojo)
    {
        //
        return view('dojos_edit', ["dojo" => $dojo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dojo  $dojo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dojo $dojo)
    {
        //
        $dojo->nombre = $request->nombre;
        $dojo->estado = $request->estado;
        $dojo->titular = $request->titular;
        $dojo->save();
        return "actualizado";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dojo  $dojo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dojo $dojo)
    {
        //
        $dojo->delete();
        return "Eliminado";
    }
}
