<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailContact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $mesaj;

    public function __construct($mesaj)
    {
        //
        $this->mesaj = $mesaj;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contact')->subject("Mesaj primit de la " . $this->mesaj->nume . " (" . $this->mesaj->telefon . ")")->withMesaj($this->mesaj);
    }
}
