<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pais;
use App\Cliente;
use Auth;
use Illuminate\Support\Facades\DB;

class DomicilioClienteController extends Controller
{
	public function index()
	{
		$paises = Pais::all();
		$cliente = Cliente::where('id_user', Auth::user()->id)->first();
		$domicilios = DB::Table('domicilios_clientes')
                    ->join('paises', 'domicilios_clientes.pais', '=', 'paises.id')
                    ->select('domicilios_clientes.id', 'domicilios_clientes.codigo_postal',
                             'paises.nombre as pais', 'domicilios_clientes.estado', 
                    	     'domicilios_clientes.colonia', 'domicilios_clientes.numero')
                    ->where('domicilios_clientes.id_cliente', $cliente->id)
                    ->paginate(10);

		return view('direccionCliente', compact('paises', 'domicilios'));
	}
}
