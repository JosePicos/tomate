<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Requisicion extends Model
{
    protected $table = 'requisiciones';

    const STATUS_PENDIENTE = 0;
    const STATUS_SURTIDO = 1;

    public static function guardar($datos)
    {
    	$fecha = new \DateTime();
    	$cliente = Cliente::where('id_user', Auth::user()->id)->first();

    	$requisicion = new Requisicion();
    	$requisicion->id_cliente = $cliente->id;
    	$requisicion->fecha = $fecha->format('Y-m-d H:i:s');
    	$requisicion->prioridad = $datos->input('prioridad');
    	$requisicion->status = self::STATUS_PENDIENTE;
    	$requisicion->pais = $datos->input('pais');
        $requisicion->estado = $datos->input('estado');
        $requisicion->municipio = (!empty($datos->input('municipio'))) ? $datos->input('municipio') : '';
        $requisicion->colonia = $datos->input('colonia');
        $requisicion->codigo_postal = $datos->input('codigo_postal');
        $requisicion->calle = $datos->input('calle');
        $requisicion->numero = $datos->input('numero');
        $requisicion->save();
        return $requisicion;
    }

    public static function surtir($id)
    {
    	$empleado = Empleado::where('id_user', Auth::user()->id)->first();
    	$requisicion = Requisicion::where('id', $id);
    	$requisicion->id_empleado = $empleado->id;
    	$requisicion->status = self::STATUS_SURTIDO;
    	$requisicion->save(); 
    }
}