<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Producto;

class ProductosController extends Controller
{
    public function index()
    {
		 $productos = Producto::all();
		 return view('productos', compact('productos'));    	
    }
}
