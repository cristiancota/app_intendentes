<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Revisione extends Model
{
    //fillable
    protected $fillable = [
        'estado',
        'com',
        'movimiento_id'
    ];

    public function movimiento()
    {
        return $this->belongsTo('App\Movimiento');
    }
}
