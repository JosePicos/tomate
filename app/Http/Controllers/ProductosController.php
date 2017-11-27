<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Producto;
use Session;

class ProductosController extends Controller
{
    public function index()
    {
		 $productos = Producto::all();
		 return view('productos', compact('productos'));    	
    }

    public function store(Request $request)
    {
    	Producto::guardar($request);
    	Session::flash('mensaje', 'Producto guardado exitosamente');
    	return back();
    }

    public function update(Request $request, $id)
    {
    	Producto::actualizar($id, $request);
    	Session::flash('mensaje', 'Datos del producto actualizados correctamente');
    	return back();	
    }

    public function destroy($Producto)
    {
		Producto::eliminar($Producto);
		Session::flash('mensaje', 'Producto eliminado exitosamente');
    }
}
