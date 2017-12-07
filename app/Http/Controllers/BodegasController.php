<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Clasificacion; 

class BodegasController extends Controller
{
 	public function index()
 	{
 		$clasificaciones = Clasificacion::all();
 		return view('entrada', compact('clasificaciones'));
 	}  
}
