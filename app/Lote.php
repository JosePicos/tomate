<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lote extends Model
{
    protected $table = 'lotes';

    public static function guardar($datos)
    {
    	$fecha = new \DateTime();
    	$lote = new Lote();
    	$lote->id_producto = $datos->input('producto');
    	$lote->id_bodega = $datos->input('bodega');
    	$lote->id_clasificacion = $datos->input('clasificacion');
    	$lote->id_ubicacion = $datos->input('ubicacion');
    	$lote->fecha_corte = $datos->input('fecha_corte');
    	$lote->fecha_corte = $fecha->format('Y-m-d H:i:s');
    	$lote->save();
    }
}