<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RequisicionesController extends Controller
{
    public function index()
    {
    	$fecha = new \DateTime();
    	$fecha = $fecha->format('Y-m-d');
    	return view('requisicion', compact('fecha'));
    }

    public function surtido()
    {
    	return view('surtido');
    }
}
