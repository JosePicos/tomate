<?php

use Illuminate\Database\Seeder;
use App\Empleado;

class Empleados extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$fecha = new \DateTime();
        $empleados = array(
                        array('id' => 1, 'id_user' => 3, 'created_at' => $fecha->format('Y-m-d H:i:s'), 'updated_at' => $fecha->format('Y-m-d H:i:s')),
                        array('id' => 2, 'id_user' => 4, 'created_at' => $fecha->format('Y-m-d H:i:s'), 'updated_at' => $fecha->format('Y-m-d H:i:s'))
                        );
        Empleado::insert($empleados);
    }
}
