<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomtagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roomtags')->insert([
            ['name' => 'red', "rooms_id" => 1],
            ['name' => 'dark', "rooms_id" => 2],
            ['name' => 'yellow', "rooms_id" => 2],
            ['name' => 'blue', "rooms_id" => 5],
            ['name' => 'pink', "rooms_id" => 4],
            ['name' => 'green',"rooms_id" => 8],
            ['name' => 'gray', "rooms_id" => 7],
            ['name' => 'brown', "rooms_id" => 6],
        ]);
    }
}
