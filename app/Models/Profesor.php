<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
     //  Relacion Uno A Uno
     return $this->hasOne('App\Models\modulo');
    
}
