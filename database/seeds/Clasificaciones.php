<?php

use Illuminate\Database\Seeder;
use App\Clasificacion;

class Clasificaciones extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fecha = new \DateTime();
        $clasificaciones = array(
                        array('id' => 1, 'nombre' => 'Clasificación 1', 'created_at' => $fecha->format('Y-m-d H:i:s'), 'updated_at' => $fecha->format('Y-m-d H:i:s')),
                        array('id' => 2, 'nombre' => 'Clasificación 2', 'created_at' => $fecha->format('Y-m-d H:i:s'), 'updated_at' => $fecha->format('Y-m-d H:i:s')),
                        array('id' => 3, 'nombre' => 'Clasificación 3', 'created_at' => $fecha->format('Y-m-d H:i:s'), 'updated_at' => $fecha->format('Y-m-d H:i:s')),
                        array('id' => 4, 'nombre' => 'Clasificación 4', 'created_at' => $fecha->format('Y-m-d H:i:s'), 'updated_at' => $fecha->format('Y-m-d H:i:s')),
                    );
        Clasificacion::insert($clasificaciones);
    }
}
