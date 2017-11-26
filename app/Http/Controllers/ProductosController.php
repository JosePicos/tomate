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

    public function store(Request $datos)
    {
    	Producto::guardar($datos);
    	Session::flash('mensaje', 'Producto guardado exitosamente');
    	return back();
    }

    public function update($Producto, Request $datos)
    {
    	Producto::actualizar($Producto, $datos);
    	Session::flash('mensaje', 'Datos del producto actualizados correctamente');
    	return back();	
    }

    public function destroy($Producto)
    {
		Producto::eliminar($Producto);
		Session::flash('mensaje', 'Producto eliminado exitosamente');
    }
}
