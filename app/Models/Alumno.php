<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
      //Relacion Uno a Muchos con tabla modelo
      public function modelo(){
        return $this->hasMany('App\Models\modelo');
    }
}
