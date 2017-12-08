<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Producto; 

class RequisicionesController extends Controller
{
    public function index()
    {
    	$fecha = new \DateTime();
    	$fecha = $fecha->format('Y-m-d');
        $productos = Producto::all();
    	return view('requisicion', compact('fecha', 'productos'));
    }

    public function surtido()
    {
    	return view('surtido');
    }
}
