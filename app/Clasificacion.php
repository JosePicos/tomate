<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clasificacion extends Model
{
	protected $table = 'clasificaciones';

    public static function consultar()
    {
    	$clasificaciones = Clasificacion::all();
    	return $clasificaciones;
    }
}