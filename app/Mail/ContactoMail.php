<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class ContactoMail extends Mailable
{
    public $datos;

    public function __construct($datos)
    {
        $this->datos = $datos;
    }

    public function build()
    {
        return $this->subject('Nuevo mensaje de contacto')
            ->view('emails.contacto');
    }
}
