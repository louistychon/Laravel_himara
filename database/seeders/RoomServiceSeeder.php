<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roomservices')->insert([
            ['name' => 'TV', 'small_desc' => 'Plasma TV with cable channels','icon_classname' => 'fa-tv', 'room_id' => 2],
            ['name' => 'DOUBLE BED', 'small_desc' => 'Big bed for you and your loved one', 'icon_classname' => '', 'room_id' => 3],
            ['name' => 'FREE INTERNET', 'small_desc' => 'Free internet', 'icon_classname' => '', 'room_id' => 3],
            ['name' => 'FREE WI-FI', 'small_desc' => 'Yes the wifi is free', 'icon_classname' => '', 'room_id' => 4],
            ['name' => 'BREAKFAST INCLUDED', 'small_desc' => 'Best breakfast in town', 'icon_classname' => '', 'room_id' => 5],
            ['name' => 'PRIVATE BALCONY', 'small_desc' => 'The balcony is private', 'icon_classname' => '', 'room_id' => 1],
            ['name' => 'FREE NEWSPAPER', 'small_desc' => 'Newspaper delivered at your place every day', 'icon_classname' => '', 'room_id' => 1],
            ['name' => 'FLAT SCREEN TV', 'small_desc' => 'Big TV screen to enjoy movies', 'icon_classname' => '', 'room_id' => 1],
            ['name' => 'FULL AC', 'small_desc' => 'The room should be fresh', 'icon_classname' => '', 'room_id' => 2],
            ['name' => 'BEACH VIEW', 'small_desc' => 'View on the beach from the room', 'icon_classname' => '', 'room_id' => 2],
            ['name' => 'ROOM SERVICE', 'small_desc' => 'Room service included', 'icon_classname' => '', 'room_id' => 1],
        ]);
    }
}
