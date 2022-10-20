<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Roomtodelete extends Mailable
{
    use Queueable, SerializesModels;



    public $roomtodelete = [];


    public function __construct(Array $room)
    {
        $this->roomtodelete = $room;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.roomtodelete');
    }
}
