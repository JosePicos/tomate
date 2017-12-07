<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pais;
use App\Cliente;
use App\DomicilioCliente;
use Auth;

class DomicilioClienteController extends Controller
{
	public function index()
	{
		$paises = Pais::all();
		$cliente = Cliente::where('id_user', Auth::user()->id)->first();
		$domicilios = DomicilioCliente::where('id_cliente', $cliente->id);

		return view('direccionCliente', compact('paises', 'domicilios'));
	}
}
