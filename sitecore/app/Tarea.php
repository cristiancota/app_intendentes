<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    //Mass Assignment
     protected  $fillable = ['nom_tarea'];


     public function movimientos()
     {
          return $this->belongsToMany('App\Movimiento', 'movimiento_tarea')->withTimestamps();
     }




}
