<?php

namespace App\Http\Controllers;

use App\Mascota;
use Illuminate\Http\Request;

class MascotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $mascotas = Mascota::all();

        return view('mascotas_index', [
            "mascotas" => $mascotas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mascotas'); //El archivo de la vista debe tener extensión blade.php
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
        $mascota = new Mascota();
        $mascota->nombre = $request->nombre;  //Equivale a hacer $_POST['nombre']
        $mascota->especie = $request->especie; //Equivale a hacer $_POST['especie']
        $mascota->raza = $request->raza;
        $mascota->fecha_nacimiento = $request->fecha_nacimiento;
        $mascota->save();
        return "hecho";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function show(Mascota $mascota)
    {
        //
        return view ('mascotas_show' , [
            'mascota' => $mascota]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function edit(Mascota $mascota)
    {
        //
        // Args (String nombre_vista, array de parametros)
        return view("mascotas_update", [
            'mascota' => $mascota
        ]);
    }

    /**
     * Update the specified resource in storage.
     * Petición PUT
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mascota $mascota)
    {
        //
        $mascota->nombre = $request->nombre;
        $mascota->especie = $request->especie;
        $mascota->raza = $request->raza;
        $mascota->fecha_nacimiento = $request->fecha_nacimiento;
        $mascota->save();
        return "actualizado";


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mascota $mascota)
    {
        //
        $mascota->delete();
        return "Eliminado";
    }
}
