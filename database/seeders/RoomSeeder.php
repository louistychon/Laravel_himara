<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            ["name"=>"room1"],
            ["name"=>"room2"],
            ["name"=>"room3"],
            ["name"=>"room4"],
            ["name"=>"room5"],
            ["name"=>"room6"],
            ["name"=>"room7"],
            ["name"=>"room8"],
        ]);
    }
}
