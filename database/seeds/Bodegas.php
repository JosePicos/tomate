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
                        array('id' => 1, 'nombre' => 'Asia', 'created_at' => $fecha->format('Y-m-d H:i:s'), 'updated_at' => $fecha->format('Y-m-d H:i:s')),
                        array('id' => 1, 'nombre' => 'Europa', 'created_at' => $fecha->format('Y-m-d H:i:s'), 'updated_at' => $fecha->format('Y-m-d H:i:s')),
                        array('id' => 1, 'nombre' => 'Estados Unidos', 'created_at' => $fecha->format('Y-m-d H:i:s'), 'updated_at' => $fecha->format('Y-m-d H:i:s')),
                        array('id' => 1, 'nombre' => 'México', 'created_at' => $fecha->format('Y-m-d H:i:s'), 'updated_at' => $fecha->format('Y-m-d H:i:s'))
                    );
        Bodega::insert($bodegas);
    }
}
