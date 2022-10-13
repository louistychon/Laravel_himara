<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomRoomTagsSeeder extends Seeder
{

    public function run()
    {
        DB::table('room_tags')->insert([
            ['rooms_id' => 1, 'roomtags_id' => 3],
            ['rooms_id' => 2, 'roomtags_id' => 3],
            ['rooms_id' => 3, 'roomtags_id' => 3],
            ['rooms_id' => 4, 'roomtags_id' => 3],
            ['rooms_id' => 1, 'roomtags_id' => 4],
            ['rooms_id' => 2, 'roomtags_id' => 4],
            ['rooms_id' => 3, 'roomtags_id' => 4],
            ['rooms_id' => 5, 'roomtags_id' => 4],
        ]);
    }
}
