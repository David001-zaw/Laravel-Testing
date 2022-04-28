<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $message, $name;

    public function __construct($message, $name)
    {
        $this->message = $message;
        $this->name = $name;
    }

    public function build()
    {
        $message = $this->message;
        $name = $this->name;
        return $this->markdown('emails.contact', compact('message', 'name'));
    }
}
