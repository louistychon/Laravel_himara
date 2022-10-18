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
                'reservation_id' => rand(1008158585, 2500000000),
                'user_id' => 1,
                'roomtype_id' => 1,
                'number_adults' => 2,
                'number_children' => 1,
                'date_start' => '20-10-2022',
                'date_end' => '21-10-2022',
                'booking_comment' => '',
                'name' => '',
                'country' => '',
                'phone' => '',
                'email' => '',
            ],
            [
                'reservation_id' => rand(1008158585, 2500000000),
                'user_id' => 2,
                'roomtype_id' => 4,
                'number_adults' => 2,
                'number_children' => 1,
                'date_start' => '20-10-2022',
                'date_end' => '21-10-2022',
                'booking_comment' => '',
                'name' => '',
                'country' => '',
                'phone' => '',
                'email' => '',
            ],
        ]);
    }
}
