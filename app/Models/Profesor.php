<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profesor extends Model
{

   public function modelo(){
    //  Relacion Uno A Uno
   return $this->hasOne('App\Models\modelo');
}
}
