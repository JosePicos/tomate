<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
  	public function index(){
        return view("presentacion.index");
    }

        public function about(){
        return view("presentacion.about");
    }

        public function post(){
        return view("presentacion.post");
    }

        public function contact(){
        return view("presentacion.contact");
    }



}
