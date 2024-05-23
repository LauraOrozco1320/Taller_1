<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    //Relacion Uno a Muchos con la tabla modulo
  public function modulo(){
    return $this->hasMany('App\Models\modulo');
  }
}
