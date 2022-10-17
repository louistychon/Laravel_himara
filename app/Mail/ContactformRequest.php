<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactformRequest extends Mailable
{
    use Queueable, SerializesModels;

    public $data = [];

    public function __construct(Array $maildata)
    {
         $this->data = $maildata;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contact')->from('louis.himara@gmail.com');
    }
}
