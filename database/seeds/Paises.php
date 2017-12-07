<?php

use Illuminate\Database\Seeder;
use App\Pais;

class Paises extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paises = array(
        	array('id' => 1, 'id_bodega' => 1, 'nombre' => 'Afganistán'),
			array('id' => 2, 'id_bodega' => 1, 'nombre' => 'Arabia Saudita'),
			array('id' => 3, 'id_bodega' => 1, 'nombre' => 'Armenia'),
			array('id' => 4, 'id_bodega' => 1, 'nombre' => 'Bangladlesh'),
			array('id' => 5, 'id_bodega' => 1, 'nombre' => 'Camboya'),
			array('id' => 6, 'id_bodega' => 1, 'nombre' => 'Corea del Norte'),
			array('id' => 7, 'id_bodega' => 1, 'nombre' => 'Corea del Sur'),
			array('id' => 8, 'id_bodega' => 1, 'nombre' => 'Filipinas'),
			array('id' => 9, 'id_bodega' => 1, 'nombre' => 'Georgia'),
			array('id' => 10, 'id_bodega' => 1, 'nombre' => 'Yemen'),
			array('id' => 11, 'id_bodega' => 1, 'nombre' => 'India'),
			array('id' => 12, 'id_bodega' => 1, 'nombre' => 'Japón'),
			array('id' => 13, 'id_bodega' => 2, 'nombre' => 'Portugal'),
			array('id' => 14, 'id_bodega' => 2, 'nombre' => 'España'),
			array('id' => 15, 'id_bodega' => 2, 'nombre' => 'Francia'),
			array('id' => 16, 'id_bodega' => 2, 'nombre' => 'Suiza'),
			array('id' => 17, 'id_bodega' => 2, 'nombre' => 'Italia'),
			array('id' => 18, 'id_bodega' => 2, 'nombre' => 'Eslovenia'),
			array('id' => 19, 'id_bodega' => 2, 'nombre' => 'Croacia'),
			array('id' => 20, 'id_bodega' => 2, 'nombre' => 'Bosnia'),
			array('id' => 21, 'id_bodega' => 2, 'nombre' => 'Albania'),
			array('id' => 22, 'id_bodega' => 2, 'nombre' => 'Grecia'),
			array('id' => 23, 'id_bodega' => 2, 'nombre' => 'Bulgaria'),
			array('id' => 24, 'id_bodega' => 2, 'nombre' => 'Rumania'),
			array('id' => 25, 'id_bodega' => 2, 'nombre' => 'Moldavia'),
			array('id' => 26, 'id_bodega' => 2, 'nombre' => 'Hungría'),
			array('id' => 27, 'id_bodega' => 2, 'nombre' => 'Austria'),
			array('id' => 28, 'id_bodega' => 2, 'nombre' => 'Alemania'),
			array('id' => 29, 'id_bodega' => 3, 'nombre' => 'Estados Unidos  '),
			array('id' => 30, 'id_bodega' => 4, 'nombre' => 'México'),
        );

        Pais::insert($paises);
    }
}
