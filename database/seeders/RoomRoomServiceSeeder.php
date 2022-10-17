<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomRoomServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('room_roomservices')->insert([
            ['rooms_id' => 1, 'room_services_id' => 2],
            ['rooms_id' => 2, 'room_services_id' => 2],
            ['rooms_id' => 3, 'room_services_id' => 1],
            ['rooms_id' => 3, 'room_services_id' => 4],
            ['rooms_id' => 4, 'room_services_id' => 2],
            ['rooms_id' => 5, 'room_services_id' => 2],
            ['rooms_id' => 6, 'room_services_id' => 4],
            ['rooms_id' => 7, 'room_services_id' => 2],
            ['rooms_id' => 2, 'room_services_id' => 4],
            ['rooms_id' => 1, 'room_services_id' => 4],
            ['rooms_id' => 1, 'room_services_id' => 5],
            ['rooms_id' => 4, 'room_services_id' => 5],
            ['rooms_id' => 4, 'room_services_id' => 3],
            ['rooms_id' => 3, 'room_services_id' => 2],
            ['rooms_id' => 4, 'room_services_id' => 2],
            ['rooms_id' => 6, 'room_services_id' => 2],
            ['rooms_id' => 6, 'room_services_id' => 7],
            ['rooms_id' => 7, 'room_services_id' => 1],
        ]);
    }
}
