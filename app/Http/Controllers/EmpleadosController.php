<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Empleado;

class EmpleadosController extends Controller
{
    public function index()
    {
		 $empleados = Empleado::all();
		 return view('empleados', compact('productos'));    	
    }

    public function store(Request $datos)
    {
    	Empleado::guardar($datos);
    	Session::flash('mensaje', 'Empleado guardado exitosamente');
    	return back();
    }

    public function update($Empleado, Request $datos)
    {
    	Empleado::actualizar($Empleado, $datos);
    	Session::flash('mensaje', 'Datos del empleado ctualizados correctamente');
    	return back();	
    }

    public function destroy($Empleado)
    {
		Empleado::eliminar($Empleado);
		Session::flash('mensaje', 'Empleado eliminado exitosamente');
    }
}
