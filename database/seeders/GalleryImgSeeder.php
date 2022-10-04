<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GalleryImgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gallery_imgs')->insert([
            ["src"=>"gallery1.jpg", "caption" => "Swimming Pool", "filtergalleries_id" => rand(1,4)],
            ["src"=>"gallery2.jpg", "caption" => "Room View", "filtergalleries_id" => rand(1,4)],
            ["src"=>"gallery3.jpg", "caption" => "Cocktail", "filtergalleries_id" => rand(1,4)],
            ["src"=>"gallery4.jpg", "caption" => "Breakfast", "filtergalleries_id" => rand(1,4)],
            ["src"=>"gallery5.jpg", "caption" => "Playground", "filtergalleries_id" => rand(1,4)],
            ["src"=>"gallery6.jpg", "caption" => "Restaurant", "filtergalleries_id" => rand(1,4)],
            ["src"=>"gallery7.jpg", "caption" => "Wedding Ceremony", "filtergalleries_id" => rand(1,4)],
            ["src"=>"gallery8.jpg", "caption" => "Beach", "filtergalleries_id" => rand(1,4)],
            ["src"=>"gallery9.jpg", "caption" => "Honeymoon Room", "filtergalleries_id" => rand(1,4)],
            ["src"=>"gallery10.jpg", "caption" => "Sea", "filtergalleries_id" => rand(1,4)],
            ["src"=>"gallery11.jpg", "caption" => "Spa Therapy", "filtergalleries_id" => rand(1,4)],
            ["src"=>"gallery12.jpg", "caption" => "Restaurant", "filtergalleries_id" => rand(1,4)],
            ["src"=>"gallery13.jpg", "caption" => "Restaurant", "filtergalleries_id" => rand(1,4)],
            ["src"=>"gallery14.jpg", "caption" => "Sea", "filtergalleries_id" => rand(1,4)],
            ["src"=>"gallery15.jpg", "caption" => "Restaurant", "filtergalleries_id" => rand(1,4)],
            ["src"=>"gallery16.jpg", "caption" => "Room View", "filtergalleries_id" => rand(1,4)],

        ]);
    }
}
