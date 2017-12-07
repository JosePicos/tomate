<?php

use Illuminate\Database\Seeder;
use App\Producto;

class Productos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $productos = array(

                        array('id' => 1, 'descripcion' => 'Tomate Cherry', 'dias_madurez' => 30, ),
                        array('id' => 2, 'descripcion' => 'Tomate Kumato', 'dias_madurez' => 30, ),
                        array('id' => 3, 'descripcion' => 'Tomate Pera', 'dias_madurez' => 30, ),
                        array('id' => 4, 'descripcion' => 'Tomate de Colgar', 'dias_madurez' => 30, ),
                        array('id' => 5, 'descripcion' => 'Tomate Saladete', 'dias_madurez' => 30, ),
                       
                    );
        Producto::insert($productos);
    }
}
