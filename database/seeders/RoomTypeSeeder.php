<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomTypeSeeder extends Seeder
{
    public function run()
    {
        DB::table('room_types')->insert([
            ['name' => 'Single room', 'min_price' => 89],
            ['name' => 'Double room', 'min_price' => 129],
            ['name' => 'Family room', 'min_price' => 159],
            ['name' => 'Deluxe room', 'min_price' => 259],
        ]);
    }
}
