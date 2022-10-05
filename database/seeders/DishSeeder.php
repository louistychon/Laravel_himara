<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dishes')->insert([
            ["name"=>"SALAT", "text" => "Lorem ipsum dolor sit amet, elit, sed diam nonummy nibh euismod tincidunt ut laoreet...", "price"=> 16.99, "src" => "restaurant1.jpg"],
            ["name"=>"CROQUETTES", "text" => "Lorem ipsum dolor sit amet, elit, sed diam nonummy nibh euismod tincidunt ut laoreet...", "price"=> 9.99, "src" => "restaurant2.jpg"],
            ["name"=>"CHICKEN", "text" => "Lorem ipsum dolor sit amet, elit, sed diam nonummy nibh euismod tincidunt ut laoreet...", "price"=> 18.99, "src" => "restaurant3.jpg"],
            ["name"=>"BEEF BOURGUIGNON", "text" => "Lorem ipsum dolor sit amet, elit, sed diam nonummy nibh euismod tincidunt ut laoreet...", "price"=> 12.99, "src" => "restaurant4.jpg"]
        ]);
    }
}
