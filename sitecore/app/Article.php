<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class Article extends Model
{
    protected $fillable = [
        'title',
        'user_id',
        'categorie_id',
        'body',
        'img',
        'imgThumb',
        'created_at',
        'updated_at',
        'published_at'
    ];



    public function categorie()
    {
        return $this->belongsTo('App\Categorie');

    }

    public function user(){
        return $this->belongsTo('App\User');
    }


    public function comments()
    {
        return $this->hasMany('App\Comment');

    }

    public function rating(){
        return $this->hasMany('App\Rating');
    }

    /*
    * return the numbre of articles
    */
    public static function total(){
        return DB::table('articles')->count();
    }


}
