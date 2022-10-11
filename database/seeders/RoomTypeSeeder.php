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
            ['name' => 'Single room'],
            ['name' => 'Double room'],
            ['name' => 'Family room'],
            ['name' => 'Deluxe room'],
        ]);
    }
}
