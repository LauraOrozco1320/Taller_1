<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulos extends Model
{
    //Relacion Uno a Muchos con la tabla alumno
    public function alumno(){
        return $this->belongsTo('App\Models\alumno');

     //Relacion Uno a uno con la tabla profesor
    }  public function profesor(){
        return $this->belongsTo('App\Models\profesor');
    }
}
