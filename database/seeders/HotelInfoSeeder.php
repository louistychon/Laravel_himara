<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotel_infos')->insert([
            ['address' => 'Lorem ipsum dolor, 25, Himara', 'phone'=>'+1 888 123 4567', 'website'=>"www.hotelhimara.com", 'email'=>"contact@hotelhimara.com", "logo" => "logo.svg", "coordinates_x" => "50.854797", "coordinates_y" => "4.344408"],
        ]);
    }
}
