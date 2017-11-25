<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RequisicionesController extends Controller
{
    public function index()
    {
    	return view('requisicion');
    }

    public function surtido()
    {
    	return view('surtido');
    }
}
