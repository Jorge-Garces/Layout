<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Log;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class BasicEmail extends Mailable
{
    use Queueable, SerializesModels;

    /* Esta clase la creas con "php artisan make:mail [NOMBRE] */

    /*
        Variables de ejemplo para el construct y usarlas en blade

        public $VARIABLE;
        public $LOGO;
    */

    /*
        Ejemplos de como mandar un email desde el controlador

        Mail::to('jorgegarces0207@gmail.com')->bcc('jorgep@lineasromero.com')->send(new BasicEmail());

        Mail::to('DESTINATARIO')->bcc(['EMAIL EN COPIA CARBON'])->send(new BasicEmail([VARIABLE]])); // Por si quieres estar en Copia Carbón
    */

    public function __construct() // __construct($VARIABLE, $LOGO)
    {
        /* Si tienes variables definidas arriba que recibes, también tienes que inicializarlas aquí. RECUERDA AÑADIRLAS al paréntesis del construct */

        /*
            $this->VARIABLE = $VARIABLE;
            $this->LOGO = asset('img/logos/logo.png'); // Ejemplo de como añadir una foto (/public/img...). No has probado si esto funciona
        */
    }

    public function envelope(): Envelope
    {
        $subject = 'Email de prueba'; // ASUNTO DEL EMAIL

        Log::info('Email enviado');

        return new Envelope(
            from: new Address('no_reply@lineasromero.com'), // RECUERDA CAMBIAR ESTO SI ESTÁS PONIENDO UN CORREO DISTINTO DESDE EL QUE SE ENVÍA
            subject: $subject,
        );
    }

    public function content(): Content
    {
        $view = 'emails.basic'; // Vista del email

        return new Content(
            view: $view
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
