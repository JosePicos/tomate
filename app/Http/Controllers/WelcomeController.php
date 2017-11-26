<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
       public function quienes (){
        return view ('presentacion.quienessomos');

    }
      public function contacto (){
        return view ('presentacion.contacto');

    }
}
