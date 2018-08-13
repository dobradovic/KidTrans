<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Message;

class ContactEmail extends Mailable
{


    /**
     * Create a new message instance.
     *
     * @return void
     */
     use Queueable, SerializesModels;

        public $poruka;


         public function __construct(Message $poruka)
         {
             //
              $this->poruka = $poruka;
         }


         public function build()
         {
            return $this->view('emails.contact');

         }
}
