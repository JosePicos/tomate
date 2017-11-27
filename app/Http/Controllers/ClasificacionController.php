<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClasificacionController extends Controller
{
	public function consultar()
	{
		$clasificaciones = Clasificacion::consultar();
		return $clasificaciones; 
	}
}
