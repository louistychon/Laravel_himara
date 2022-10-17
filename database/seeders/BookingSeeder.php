<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookings')->insert([
            [
                'user_id' => 1,
                'rooms_id' => 1,
                'date_start' => '20/10/22',
                'date_end' => '21/10/22',
            ],
            [
                'user_id' => 2,
                'rooms_id' => 4,
                'date_start' => '20/10/22',
                'date_end' => '21/10/22',
            ],
        ]);
    }
}
