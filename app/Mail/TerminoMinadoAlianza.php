<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;



class TerminoMinadoAlianza extends Mailable
{
    use Queueable, SerializesModels;
    public $lo_minado;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($lo_minado)
    {
        $this->lo_minado = $lo_minado;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.emailAlianzaMinado');
    }
}
