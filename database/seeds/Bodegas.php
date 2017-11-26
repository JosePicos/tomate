<?php

use Illuminate\Database\Seeder;
use App\Bodega;

class Bodegas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fecha = new \DateTime();
        $bodegas = array(
                        array('id' => 1, 'nombre' => 'Asia', 'capacidad' => 150, 'disponible' => 0, 'created_at' => $fecha->format('Y-m-d H:i:s'), 'updated_at' => $fecha->format('Y-m-d H:i:s')),
                        array('id' => 2, 'nombre' => 'Europa', 'capacidad' => 100, 'disponible' => 0, 'created_at' => $fecha->format('Y-m-d H:i:s'), 'updated_at' => $fecha->format('Y-m-d H:i:s')),
                        array('id' => 3, 'nombre' => 'Estados Unidos', 'capacidad' => 80, 'disponible' => 0, 'created_at' => $fecha->format('Y-m-d H:i:s'), 'updated_at' => $fecha->format('Y-m-d H:i:s')),
                        array('id' => 4, 'nombre' => 'México', 'capacidad' => 50, 'disponible' => 0, 'created_at' => $fecha->format('Y-m-d H:i:s'), 'updated_at' => $fecha->format('Y-m-d H:i:s'))
                    );
        Bodega::insert($bodegas);
    }
}
