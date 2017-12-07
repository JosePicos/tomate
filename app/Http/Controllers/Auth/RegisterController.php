<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Cliente;
use App\DomicilioCliente;
use App\Pais;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $usuario = new User();
        $usuario->nombre = $data['nombre'];
        $usuario->email = $data['email'];
        $usuario->password = bcrypt($data['password']);
        $usuario->tipo = User::CLIENTE;
        $usuario->save();

        $cliente = new Cliente();
        $cliente->id_user = $usuario->id;
        $cliente->save();

        $domicilio = new DomicilioCliente();
        $domicilio->id_cliente = $cliente->id;
        $domicilio->pais = $data['pais'];
        $domicilio->estado = $data['estado']; 
        $domicilio->municipio = (!empty($data['municipio'])) ? empty($data['municipio']) : '';
        $domicilio->colonia = $data['colonia'];
        $domicilio->codigo_postal = $data['codigo_postal'];
        $domicilio->calle = $data['calle'];
        $domicilio->numero = $data['numero'];
        $domicilio->save();

        return $usuario;
    }
}
