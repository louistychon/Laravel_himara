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
        $schedule->command('askreview:daily')
        ->everyFourHours();
    }


    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
