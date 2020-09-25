<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Dojo;
use App\Http\Requests\StoreDojoRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class DojoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        //
        $dojos = Dojo::all();
        $user = Auth::user();
        if (!Auth::check()) {
            // The user is logged in...
            return redirect("www.google.com");
        }
        return view('dojos_index', [ 
            "user" => $user,
            "dojos" => $dojos]);
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
    public function store(StoreDojoRequest $request)
    {
        //
        /*$validatedData = $request->validate([
            'nombre' => 'required|string|unique:dojos|max:30|',
            'titular' => 'required|string',
            'estado' => ['required', 'string' , 
                Rule::in(['Zacatecas', 'Aguascalientes', 'San Luis', 'Durango'])]//Zacatecas, Aguascalientes, San Luis, Durango
        ]);*/
        $request->validated();
        //Datos válidos
        //Enviar en el constructor la petición. Los nombres de la petición, deben coincidir exactamente con los del modelo. 
        $dojo = new Dojo($request->input()); 
        
        $dojo->save();
        return redirect('/dojos');

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




        return view('dojos_update', ["dojo" => $dojo]);
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
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|unique:dojos|max:30|',
            'titular' => 'required|string',
            'estado' => ['required', 'string' , 
                Rule::in(['Zacatecas', 'Aguascalientes', 'San Luis', 'Durango'])]//Zacatecas, Aguascalientes, San Luis, Durango
        ]);

         //Personalizar cómo se manejan los errores. 
        if ($validator->fails()) {

            //Esta es la lógica por default de laravel.
            return redirect('dojos/'.$dojo->id.'/edit')
                        ->withErrors($validator)
                        ->withInput();
        }
        //La entrada es válida

        $dojo->nombre = $request->nombre;
        $dojo->estado = $request->estado;
        $dojo->titular = $request->titular;
        $dojo->save();
        return redirect('/dojos');
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
        return redirect('/dojos');
    }
}
