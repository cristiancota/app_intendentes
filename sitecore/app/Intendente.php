<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Intendente extends Model
{
    //fillable
    protected  $fillable = [
        'num_inten',
        'nombre',
        'apellido',
        'cel'
    ];

    public function movimiento()
    {
        return $this->hasMany('App\Movimiento');
    }
}
