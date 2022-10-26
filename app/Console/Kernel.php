<?php

namespace App\Console;

use App\Models\Booking;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Mail;

class Kernel extends ConsoleKernel
{

    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            $bookings = Booking::all();
            foreach ($bookings as $booking) {
               if($booking->date_end > now()){
                Mail::to('louis.tychon1@gmail.com')->send(new askreview());
               }
            }
        })->daily();
    }


    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
