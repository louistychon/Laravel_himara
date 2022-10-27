<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Askreview extends Mailable
{
    use Queueable, SerializesModels;

    public $data = [];

    public function __construct(Array $reviewinfo)
    {
        $this->data = $reviewinfo;
    }

    public function build()
    {
        return $this->markdown('emails.askreview');
    }
}
