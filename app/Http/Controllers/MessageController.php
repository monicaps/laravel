<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store()
    {
    	//return $request;
    	$message=request()->validate([
    		'name'=>'required',
    		'email'=>'required|email',
    		'subject'=>'required',
    		'content'=>'required|min:3'
    	],[
    		"name.required"=>__("I need your name")
    	]);

    	//para enviar el e-mail
    	Mail::to('monicaportillo0@gmail.com')->send(new MessageReceived($message));
    	//para usar mailtarp o enviar a tu correo directamente
    	//Mail::to('monicaportillo0@gmail.com')->queue(new MessageReceived($message));

    	return back()->with('status','Hemos recibido su mensaje, le responderemos dentro de 24 horas.');
    }
}
