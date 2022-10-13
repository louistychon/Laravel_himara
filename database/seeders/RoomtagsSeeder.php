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
            ['name' => 'red'],
            ['name' => 'dark'],
            ['name' => 'yellow'],
            ['name' => 'blue'],
            ['name' => 'pink'],
            ['name' => 'green'],
            ['name' => 'gray'],
            ['name' => 'brown'],
        ]);
    }
}
