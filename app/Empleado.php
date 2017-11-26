<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';

    public static function guardar(Request $datos)
    {
    	$empleado = new Empleado();
    	$empleado->save();   
    }

    public static function actualizar($id, Request $datos)
    {
    	$empleado = Empleado::find($id);
    	$empleado->save();   
    }

    public static function eliminar($id)
    {
    	$empleado = Empleado::find($id);
    	$empleado->delete();
    }
}
