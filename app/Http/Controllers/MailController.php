<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Mail;
use Session;
use Redirect;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
 
public function store(Request $request ){
	Mail::send('emails.contact',$request->all(),function ($msj){
		$mjs->subject(''correo de contacto);
		$msj->to('adan090090@gmail.com');


	});
	Session::flash('messege','Mensaje enviado correctamente');
	return Redirect::to('/contacto');

}

}
