<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planta extends Model
{
    //fillable
    protected $fillable = [
        'nombre'
        ];

    public function movimiento()
    {
        return $this->hasMany('App\Movimiento');
    }
}
