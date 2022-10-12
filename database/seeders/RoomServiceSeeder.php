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
        DB::table('room_services')->insert([
            ['name' => 'TV', 'small_desc' => 'Plasma TV with cable channels','icon_classname' => 'fa-tv'],
            ['name' => 'DOUBLE BED', 'small_desc' => 'Big bed for you and your loved one', 'icon_classname' => 'fa-bed'],
            ['name' => 'FREE INTERNET', 'small_desc' => 'Free internet', 'icon_classname' => 'fa-network-wired'],
            ['name' => 'FREE WI-FI', 'small_desc' => 'Free wi-fi in rooms', 'icon_classname' => 'fa-wifi'],
            ['name' => 'BREAKFAST INCLUDED', 'small_desc' => 'Best breakfast in town', 'icon_classname' => 'fa-coffee'],
            ['name' => 'PRIVATE BALCONY', 'small_desc' => 'The balcony is private', 'icon_classname' => 'fa-chair'],
            ['name' => 'FREE NEWSPAPER', 'small_desc' => 'Newspaper delivered at your place every day', 'icon_classname' => 'fa-newspaper'],
            ['name' => 'FLAT SCREEN TV', 'small_desc' => 'Big TV screen to enjoy movies', 'icon_classname' => 'fa-television'],
            ['name' => 'FULL AC', 'small_desc' => 'The room should be fresh', 'icon_classname' => 'fa-fan'],
            ['name' => 'BEACH VIEW', 'small_desc' => 'View on the beach from the room', 'icon_classname' => 'fa-umbrella-beach'],
            ['name' => 'ROOM SERVICE', 'small_desc' => 'Room service included', 'icon_classname' => 'fa-bell-concierge'],
        ]);
    }
}
