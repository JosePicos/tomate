<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsuariosAdmin::class);
        $this->call(Clientes::class);
        $this->call(Clasificaciones::class);
        $this->call(Bodegas::class);
        $this->call(Ubicaciones::class);
    }
}
