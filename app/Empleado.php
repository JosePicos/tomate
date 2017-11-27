<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Empleado extends Model
{
    protected $table = 'empleados';

    public static function consultar()
    {
        $empleados = DB::Table('empleados')
                    ->join('users', 'empleados.id_user', '=', 'users.id')
                    ->select('empleados.id', 'users.nombre', 'empleados.created_at as fecha_alta')
                    ->paginate(10);
        return $empleados;
    }

    public static function guardar($datos)
    {
        $usuario = new User();
        $usuario->nombre = $datos->input('nombre');
        $usuario->email = $datos->input('email');
        $usuario->password = $datos->input('password');
        $usuario->tipo = User::EMPLEADO;
        $usuario->save();

    	$empleado = new Empleado();
        $empleado->id_user = $usuario->id;
    	$empleado->save();   
    }

    public static function actualizar($id, Request $datos)
    {
    	$empleado = Empleado::find($id);
    	$usuario = User::find($empleado->id_user);
        $usuario->nombre = $datos->input('nombre');
        $usuario->email = $datos->input('email');
        $usuario->password = $datos->input('password');
        $usuario->save();   
    }

    public static function eliminar($id)
    {
    	$empleado = Empleado::find($id);
    	$empleado->delete();
    }
}
