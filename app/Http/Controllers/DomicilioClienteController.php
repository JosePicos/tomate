<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DomicilioClienteController extends Controller
{
	public function index()
	{
		DomicilioCliente::obtenerDireccion();
	}
}
