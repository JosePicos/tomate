<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    public static function guardar(Request $datos)
    {
    	$producto = new Producto();
    	$producto->descripcion = $datos->input('descripcion');
    	$producto->dias_madurez = $datos->input('dias_madurez');
    	$producto->save();   
    }

    public static function actualizar($id, Request $datos)
    {
    	$producto = Producto::find($id);
    	$producto->descripcion = $datos->input('descripcion');
    	$producto->dias_madurez = $datos->input('dias_madurez');
    	$producto->save();   
    }

    public static function eliminar($id)
    {
    	$producto = Producto::find($id);
    	$producto->delete();
    }
}
