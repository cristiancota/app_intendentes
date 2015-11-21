<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    protected  $fillable = [
        'tarea_id',
        'intendente_id',
        'edificio_id',
        'planta_id',
        'created_ad',
        'dia',
        'revision_id',
        'activa'

    ];

    /*
     * Metodo Encagado de relacionar al modelo Intendente
     */
    public function intendente()
    {
        return $this->belongsTo('App\Intendente');
    }
    /*
     * Metodo Encagado de relacionar al modelo Edificio
     */
    public function edificio()
    {
        return $this->belongsTo('App\Edificio');
    }
    /*
     * Metodo Encagado de relacionar al modelo Planta
     */
    public function planta()
    {
        return $this->belongsTo('App\Planta');
    }
    /*
     * Metodo Encagado de relacionar al modelo Tarea
     */
    public function tareas()
    {
        return $this->belongsToMany('App\Tarea', 'movimiento_tarea')->withTimestamps();
    }

    /*
     * Metodo Encagado de relacionar al modelo Tarea
     */
    public function revision()
    {
        return $this->hasOne('App\Revisione');
    }



}
