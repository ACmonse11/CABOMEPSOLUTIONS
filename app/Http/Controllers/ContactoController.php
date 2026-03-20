<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoMail;

class ContactoController extends Controller
{
    public function enviar(Request $request)
    {
        $datos = $request->all();

        Mail::to("noelyaguilar1234@gmail.com")->send(new ContactoMail($datos));

        return back()->with('success','Mensaje enviado correctamente');
    }
}
