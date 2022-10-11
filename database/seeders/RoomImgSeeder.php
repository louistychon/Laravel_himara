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
            ['src' => 'single1.jpg', 'rooms_id' => 1],
            ['src' => 'single2.jpg', 'rooms_id' => 1],
            ['src' => 'single3.jpg', 'rooms_id' => 1],
            ['src' => 'single4.jpg', 'rooms_id' => 1],
            ['src' => 'single5.jpg', 'rooms_id' => 1],
            ['src' => 'single6.jpg', 'rooms_id' => 1],
            ['src' => 'single7.jpg', 'rooms_id' => 1],
            ['src' => 'single8.jpg', 'rooms_id' => 1],
            ['src' => 'single9.jpg', 'rooms_id' => 1],
            ['src' => 'single10.jpg', 'rooms_id' => 1],
            ['src' => 'luxury.jpg', 'rooms_id' => 8],
            ['src' => 'family.jpg', 'rooms_id' => 7],
            ['src' => 'double.jpg', 'rooms_id' => 4],
            ['src' => 'deluxe.jpg', 'rooms_id' => 6],
        ]);
    }
}
