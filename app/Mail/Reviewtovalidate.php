<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Reviewtovalidate extends Mailable
{
    use Queueable, SerializesModels;

    public $data = [];

    public function __construct()
    {
        //
    }


    public function build()
    {
        return $this->markdown('emails.reviewtovalidate');
    }
}
