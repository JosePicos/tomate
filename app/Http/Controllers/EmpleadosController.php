<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Empleado;
use Session;

class EmpleadosController extends Controller
{
    public function index()
    {
        $empleados = Empleado::consultar();
        return view('empleados', compact('empleados'));    	
    }

    public function store(Request $request)
    {
    	Empleado::guardar($request);
    	Session::flash('mensaje', 'Empleado guardado exitosamente');
    	return back();
    }

    public function update(Request $request, $id)
    {
    	Empleado::actualizar($id, $request);
    	Session::flash('mensaje', 'Datos del empleado ctualizados correctamente');
    	return back();	
    }

    public function destroy($Empleado)
    {
		Empleado::eliminar($Empleado);
		Session::flash('mensaje', 'Empleado eliminado exitosamente');
    }
}
