<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Contact;

class ContactM extends Mailable
{
    use Queueable, SerializesModels;
  

   public array $contact;
   public function __construct(Contact $contact,$str)
   {
       
       $this->contact=unserialize($str);
       
   }

   /**
    * Build the message.
    *
    * @return $this
    */
   public function build()
   {
       $subject= $contact['sujet'];
       return $this ->from('memine125@yahoo.com')
       ->subject($subject)
       ->view('view.name', $contact);
   }
}
