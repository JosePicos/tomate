<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bodega extends Model
{
    protected $table = 'bodegas';

    public static function ingresarMercancia($datos)
    {
        $fecha = new \DateTime();
        $respuesta = '';
        $cantidad = $datos->input('cantidad');
        $i = 0;
        $bodega = Bodega::where('id_clasificacion', $datos->input('clasificacion'))->first();
        for ($i = 0; $i < $cantidad; $i++) {
            $lote = new Lote();
            $lote->id_producto = $datos->input('producto');
            $lote->id_clasificacion = $datos->input('clasificacion');

            $ubicacion = Ubicacion::where('id_bodega', $bodega->id)->where('disponible', true)->first();
            if (!$ubicacion) {
                $ubicacion = Ubicacion::order_by('id_bodega')->first();
            }
            if (!$ubicacion) {
                if ($i == 0) {
                    $respuesta = 'No se hay ubicaciones disponibles';
                } else {
                    $respuesta = "Solo se pudo dar entrada a '{($i+1)}' lotes";    
                }
                return $respuesta;
            }
            $lote->id_ubicacion = $ubicacion->id;
            $bodega = Bodega::where('id', $ubicacion->id_bodega)->first();
            $lote->id_bodega = $bodega->id;
            $lote->fecha_corte = $datos->input('fecha_corte');
            $lote->fecha_registro = $fecha->format('Y-m-d');
            $lote->save();
            $ubicacion->disponible = false;
            $ubicacion->save();
        }

        $bodega->disponible = $bodega->disponible + $i;
    	$bodega->save();
        return $respuesta;
    }

    public static function sacarMercancia($id, $salida)
    {
    	$bodega = Bodega::where('id', $id);
    	$bodega->disponible = $bodega->disponible-$salida;
    	$bodega->save();	
    }
}