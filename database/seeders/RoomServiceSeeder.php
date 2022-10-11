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
            ['name' => 'TV', 'small_desc' => 'Plasma TV with cable channels'],
            ['name' => 'DOUBLE BED', 'small_desc' => 'Big bed for you and your loved one'],
            ['name' => 'FREE INTERNET', 'small_desc' => 'Free internet'],
            ['name' => 'FREE WI-FI', 'small_desc' => 'Yes the wifi is free'],
            ['name' => 'BREAKFAST INCLUDED', 'small_desc' => 'Best breakfast in town'],
            ['name' => 'PRIVATE BALCONY', 'small_desc' => 'The balcony is private'],
            ['name' => 'FREE NEWSPAPER', 'small_desc' => 'Newspaper delivered at your place every day'],
            ['name' => 'FLAT SCREEN TV', 'small_desc' => 'Big TV screen to enjoy movies'],
            ['name' => 'FULL AC', 'small_desc' => 'The room should be fresh'],
            ['name' => 'BEACH VIEW', 'small_desc' => 'View on the beach from the room'],
            ['name' => 'ROOM SERVICE', 'small_desc' => 'Room service included'],
        ]);
    }
}
