<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Roomtostores extends Mailable
{
    use Queueable, SerializesModels;


    public $roomtostores = [];

    public function __construct(Array $room)
    {
        $this->roomtostores = $room;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.roomtostores');
    }
}
