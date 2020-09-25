<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    //
    protected $fillable = ['nombre', 'apellido_paterno', 'apellido_materno', 'user_id', 
        'cinta', 'grado', 'fecha_nacimiento'
    ];

    // Un usuario (instructor) tiene VARIOS alumnos. Un alumno tiene un solo instructor
    //One to Many

    //Declarar la relación en el modelo

    public function user()
    {
         return $this->belongsTo('App\User');
    }







}
