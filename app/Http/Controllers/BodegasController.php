<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Clasificacion; 
use App\Producto;
use Session;

class BodegasController extends Controller
{
 	public function index()
 	{
 		$productos = Producto::all();
 		$clasificaciones = Clasificacion::all();
 		return view('entrada', compact('clasificaciones', 'productos'));
 	}  

 	public function store(Request $request)
 	{
 		//Bodega::guardar($request);
 		Session::flash("mensaje", "Entrada de lotes realizada correctamente");
 		return back();
 	}
}
