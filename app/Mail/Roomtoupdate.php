<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Roomtoupdate extends Mailable
{
    use Queueable, SerializesModels;


    public $roomtoupdate = [];


    public function __construct(Array $room)
    {
        $this->roomtoupdate = $room;
    }


    public function build()
    {
        return $this->markdown('emails.roomtoupdate');
    }
}
