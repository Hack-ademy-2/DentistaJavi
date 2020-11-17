<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $nameContact;
    public $mailContact;
    public $text;

    public function __construct($nuevoContacto)
    {
        
            $this->nameContact = $nuevoContacto['nameContact'];
            $this->mailContact = $nuevoContacto['mailContact'];
            $this->text = $nuevoContacto['text'];

        
    }


    public function build()
    {
        return $this->view('admin-email');
    }
}
