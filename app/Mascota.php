<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    //
    protected $fillable = ['nombre', 'especie', 'raza', 'fecha_nacimiento'];
}
