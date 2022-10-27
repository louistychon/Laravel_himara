<?php

namespace App\Console\Commands;

use App\Mail\Askreview as MailAskreview;
use App\Models\Booking;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class askreview extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'askreview:daily';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Ask for a review';

    public function handle()
    {
        $bookings = Booking::all();
        foreach ($bookings as $booking) {
            $reviewinfo = ['start_date' => $booking->start_date,
            'end_date' => $booking->end_date];
           if($booking->date_end > now()){
            Mail::to('louis.tychon1@gmail.com')->send(new MailAskreview($reviewinfo));
           }
        }
        $this->info('Successfully sent a review request to past trips');
    }
}
