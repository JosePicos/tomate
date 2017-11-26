<?php

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class UsuariosAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$fecha = new \DateTime();
        $usuarios = array(
                        array('id' => 1, 'nombre' => 'José', 'email' => "jl.moonlight93@gmail.com", 'password' => bcrypt("123456"),
                              'tipo' => 1, 'created_at' => $fecha->format('Y-m-d H:i:s'), 'updated_at' => $fecha->format('Y-m-d H:i:s')),
                        array('id' => 2, 'nombre' => 'Adán', 'email' => "Adán_090@hotmail.com", 'password' => bcrypt("123456"),
                              'tipo' => 1, 'created_at' => $fecha->format('Y-m-d H:i:s'), 'updated_at' => $fecha->format('Y-m-d H:i:s'))
                        );
        User::insert($usuarios);
    }
}
