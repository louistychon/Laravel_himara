<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('icons')->insert([
            ['src' => 'flaticon-full-screen'],
            ['src' => 'flaticon-search'],
            ['src' => 'flaticon-link'],
            ['src' => 'flaticon-add'],
            ['src' => 'flaticon-tray-1'],
            ['src' => 'flaticon-nature'],
            ['src' => 'flaticon-slider'],
            ['src' => 'flaticon-tray'],
            ['src' => 'flaticon-hotel'],
            ['src' => 'flaticon-sports'],
            ['src' => 'flaticon-bell-boy'],
            ['src' => 'flaticon-screen'],
            ['src' => 'flaticon-information-button'],
        ]);
    }
}
