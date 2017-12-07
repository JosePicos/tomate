<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{

    protected $table = 'ubicaciones';

    public static function ocupar($id)
    {
    	$ubicacion = Ubicacion::where('id', $id);
    	$ubicacion->disponible = false;
    	$ubicacion->save();
    }

    public static function desocupar($id)
    {
    	$ubicacion = Ubicacion::where('id', $id);
    	$ubicacion->disponible = true;
    	$ubicacion->save();	
    }
}