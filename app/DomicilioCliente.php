<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
    
class DomicilioCliente extends Model
{
    protected $table = 'domicilios_clientes';

    public static function obtenerDireccion()
    {
    	$cliente = Cliente::where('id_user', Auth::user()->id)->first();
    	$domicilio = DomicilioCliente::where('id_cliente', $cliente->id)->first();
    	return $domicilio;
    }

    public static function guardar($datos)
    {
    	$cliente = Cliente::where('id_user', Auth::user()->id)->first();
    	$domicilio = new DomicilioCliente();
    	$domicilio->id_cliente = $cliente->id;
    	$domicilio->pais = $datos->input('pais');
        $domicilio->estado = $datos->input('estado');
        $domicilio->municipio = $datos->input('municipio');
        $domicilio->colonia = $datos->input('colonia');
        $domicilio->codigo_postal = $datos->input('codigo_postal');
        $domicilio->calle = $datos->input('calle');
        $domicilio->numero = $datos->input('numero');
        $domicilio->save();
    }
}