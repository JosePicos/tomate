<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bodega extends Model
{
    protected $table = 'bodegas';

    public static function ingresarMercancia($id, $entrada)
    {
    	$bodega = Bodega::where('id', $id);
    	$bodega->disponible = $bodega->disponible+$entrada;
    	$bodega->save();
    }

    public static function sacarMercancia($id, $salida)
    {
    	$bodega = Bodega::where('id', $id);
    	$bodega->disponible = $bodega->disponible-$salida;
    	$bodega->save();	
    }
}