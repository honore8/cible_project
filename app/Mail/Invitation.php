<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Invitation extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($event, $organisateur, $subject)
    {
        $this->event= $event;
        $this->organisateur= $organisateur;
        $this->subject= $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       
        return $this ->from('no_reply@cible.fr')
        ->subject($this->subject)
        ->view('view.name');
    }
}
