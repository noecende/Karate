<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dojo extends Model
{
    //
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre','estado', 'titular'
    ];

  
}
