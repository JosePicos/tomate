<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Producto; 
use App\DomicilioCliente;
use App\Cliente;
use App\Requisicion;
use Auth;
use Illuminate\Support\Facades\DB;
use Session;

class RequisicionesController extends Controller
{
    public function index()
    {
    	$fecha = new \DateTime();
    	$fecha = $fecha->format('Y-m-d');
        $productos = Producto::all();
        $cliente = Cliente::where('id_user', Auth::user()->id)->first();
        $domicilios = DB::Table('domicilios_clientes')
                    ->join('paises', 'domicilios_clientes.pais', '=', 'paises.id')
                    ->select('domicilios_clientes.id', 'domicilios_clientes.codigo_postal',
                             'paises.nombre as pais', 'domicilios_clientes.estado', 
                             'domicilios_clientes.municipio', 'domicilios_clientes.colonia',
                             'domicilios_clientes.calle', 'domicilios_clientes.numero')
                    ->where('domicilios_clientes.id_cliente', $cliente->id)
                    ->get();

    	return view('requisicion', compact('fecha', 'productos', 'domicilios'));
    }

    public function store(Request $request)
    {
        $requisicion = Requisicion::guardar($request);
        Session::flash('mensaje', 'Se ha generado la requisicion con el id '.$requisicion->id);
        return back();
    }

    public function surtido()
    {
    	return view('surtido');
    }
}
