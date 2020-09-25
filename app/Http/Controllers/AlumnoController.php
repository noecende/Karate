<?php

namespace App\Http\Controllers;

use App\Alumno;
use App\User;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *  Todos los alumnos pertenecientes al usuario
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        //
        dd($user->alumnos); //Para acceder a los hijos de un modelo, se usa propiedad estática
    }

    /**
     * Show the form for creating a new resource.
     *     //Muestra el formulario para registrar un alumno a un determinado usuario
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
        //
        $alumno = new Alumno($request->input());
        $user->alumnos()->save($alumno); //Para operar con los hijos de un modelo se usa la función
        return "Registrado";
    }

    /**
     * Display the specified resource.
     *  http:localhost:8000/users/{user}/alumnos/{alumno} GET
     * @param  \App\User  $user
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(User $user, Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, Alumno $alumno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, Alumno $alumno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Alumno $alumno)
    {
        //
    }
}
