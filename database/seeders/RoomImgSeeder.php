<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomImgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room_imgs')->insert([
            ['src' => 'single1.jpg', 'room_id' => 1],
            ['src' => 'single2.jpg', 'room_id' => 1],
            ['src' => 'single3.jpg', 'room_id' => 1],
            ['src' => 'single4.jpg', 'room_id' => 1],
            ['src' => 'single5.jpg', 'room_id' => 1],
            ['src' => 'single6.jpg', 'room_id' => 1],
            ['src' => 'single7.jpg', 'room_id' => 1],
            ['src' => 'single8.jpg', 'room_id' => 1],
            ['src' => 'single9.jpg', 'room_id' => 1],
            ['src' => 'single10.jpg', 'room_id' => 1],
            ['src' => 'luxury.jpg', 'room_id' => 8],
            ['src' => 'family.jpg', 'room_id' => 7],
            ['src' => 'double.jpg', 'room_id' => 4],
            ['src' => 'deluxe.jpg', 'room_id' => 6],
        ]);
    }
}
