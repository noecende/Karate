<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Dojo;
use App\Mascota;
use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/{string}', function($user){
     
    return $user;
    
});*/

//Obtiene todos los dojos registrados en la BD
Route::get('/dojos', function(){
      
    dd(Dojo::all());


    
});

//Obtiene un dojo en especifico
Route::get('/dojos/{id}', function($id){
      
      $dojo = Dojo::find($id);
      return $dojo->nombre;
    
});


//Guarda un nuevo dojo en la base de datos
Route::post('/dojos', function(){

    $dojo = new Dojo();
    $dojo->nombre = "Marcelino González";
    $dojo->estado = "Zacatecas";
    $dojo->titular = "María Fernanda Román";
    $dojo->save();
});


Route::get('/prueba/{arg_string}', function($string){
     
    return $string;
    

})->where('arg_string', '[A-Z]+');

/*
//Ruta despliega el formulario para crear una nueva mascota
Route::get('/mascotas/create', "MascotasController@create");

//Ruta despliega el formulario para crear una nueva mascota
Route::post('/mascotas', "MascotasController@store");

Route::get('/mascotas/{mascota}/edit' , "MascotasController@edit");  //Muestra el formulario para editar
 
Route::put('/mascotas/{mascota}', "MascotasController@update"); //Ejecuta la edición

Route::get('/mascotas/{mascota}', "MascotasController@show"); // Mostramos un recurso en específico

Route::delete('/mascotas/{mascota}', "MascotasController@destroy"); //Elimina el recurso **/

Route::resource('mascotas', "MascotasController");






//   /users/1/2 
//Devolver la suma. 

// Ruta que sea válida siempre que exista la palabra laravel en ella
 

//   /polopoloLaravel Valida 
//   /polo invalida 
//   /holamundo invalida
//   /holalaravel valida 


Route::get('{palabra}', function($string)
{
     return $string;
})->where('palabra', '^.*laravel.*$');



Route::prefix('admin')->group(function () {
    Route::get('users', function () {

        return "estamos en la ruta admin/users";
        // Matches The "/admin/users" URL
    });


    Route::get('dojos/create', function () {
        // Matches The "/admin/users" URL
    });


});

