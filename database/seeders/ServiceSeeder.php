<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            ['name' => 'Restaurant', 'short_desc' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.", 'icon_id'=> 1, 'src' => "restaurant.jpg", 'caption' => "restaurant"],
            ['name' => 'Spa - Beauty & Health', 'short_desc' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.", 'icon_id'=> 1, 'src' => "spa.jpg", 'caption' => "spa"],
            ['name' => 'Conference Room', 'short_desc' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.", 'icon_id'=> 1, 'src' => "conference.jpg", 'caption' => "Conference Room"],
            ['name' => 'Swimming Pool', 'short_desc' => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.", 'icon_id'=> 1, 'src' => "swimming.jpg", 'caption' => "Swimming Pool"],
        ]);
    }
}

