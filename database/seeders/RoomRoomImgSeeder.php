<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomRoomImgSeeder extends Seeder
{

    public function run()
    {
        DB::table('room_roomimg')->insert([
            ['rooms_id' => 1, 'roomimg_id' => 2],
            ['rooms_id' => 2, 'roomimg_id' => 2],
            ['rooms_id' => 3, 'roomimg_id' => 1],
            ['rooms_id' => 3, 'roomimg_id' => 4],
            ['rooms_id' => 4, 'roomimg_id' => 2],
            ['rooms_id' => 5, 'roomimg_id' => 2],
            ['rooms_id' => 6, 'roomimg_id' => 2],
            ['rooms_id' => 7, 'roomimg_id' => 2],
            ['rooms_id' => 2, 'roomimg_id' => 4],
            ['rooms_id' => 1, 'roomimg_id' => 4],
            ['rooms_id' => 1, 'roomimg_id' => 5],
            ['rooms_id' => 4, 'roomimg_id' => 5],
            ['rooms_id' => 4, 'roomimg_id' => 3],
            ['rooms_id' => 3, 'roomimg_id' => 2],
            ['rooms_id' => 4, 'roomimg_id' => 2],
            ['rooms_id' => 6, 'roomimg_id' => 2],
            ['rooms_id' => 6, 'roomimg_id' => 7],
            ['rooms_id' => 7, 'roomimg_id' => 1],
            ['rooms_id' => 8, 'roomimg_id' => 1],
            ['rooms_id' => 8, 'roomimg_id' => 2],
            ['rooms_id' => 8, 'roomimg_id' => 3],
            ['rooms_id' => 8, 'roomimg_id' => 4],
            ['rooms_id' => 9, 'roomimg_id' => 2],
            ['rooms_id' => 9, 'roomimg_id' => 3],
            ['rooms_id' => 9, 'roomimg_id' => 4],
            ['rooms_id' => 9, 'roomimg_id' => 5],
            ['rooms_id' => 9, 'roomimg_id' => 6],
        ]);
    }
}
