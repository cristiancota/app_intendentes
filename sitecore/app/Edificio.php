<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Edificio extends Model
{


    protected $fillable = [
        'nombre'

    ];

    public function areas()
    {
        return $this->belongsToMany('App\Area','edificios_areas')->withTimestamps();
    }

    public function movimiento()
    {
        return $this->hasMany('App\Movimiento');
    }
}
