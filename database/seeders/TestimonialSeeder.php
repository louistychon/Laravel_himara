<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
        ["users_id"=>5, "rating"=>5, "rooms_id" => 1,  "text" => "lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquamp var namespace", "updated_at" => now(), "created_at" => now(), "show" => 1],
        ["users_id"=>1, "rating"=>4, "rooms_id" => 2, "text" => "lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquamp var namespace", "updated_at" => now(), "created_at" => now(), "show" => 1],
        ["users_id"=>2, "rating"=>3, "rooms_id" => 3, "text" => "lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquamp var namespace", "updated_at" => now(), "created_at" => now(), "show" => 1],
        ["users_id"=>2, "rating"=>5, "rooms_id" => 4, "text" => "lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquamp var namespace", "updated_at" => now(), "created_at" => now(), "show" => 1],
        ["users_id"=>2, "rating"=>3,"rooms_id" => 1,  "text" => "lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquamp var namespace", "updated_at" => now(), "created_at" => now(), "show" => 1],
        ["users_id"=>5, "rating"=>5, "rooms_id" => 2, "text" => "lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquamp var namespace", "updated_at" => now(), "created_at" => now(), "show" => 1],
        ["users_id"=>4, "rating"=>5, "rooms_id" => 3, "text" => "lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquamp var namespace", "updated_at" => now(), "created_at" => now(), "show" => 1],
        ["users_id"=>2, "rating"=>5, "rooms_id" => 4, "text" => "lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididun1t ut labore et dolore magna aliquamp var namespace", "updated_at" => now(), "created_at" => now(), "show" => 1],
        ["users_id"=>6, "rating"=>5, "rooms_id" => 2, "text" => "lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquamp var namespace", "updated_at" => now(), "created_at" => now(), "show" => 1],
        ["users_id"=>2, "rating"=>5, "rooms_id" => 9, "text" => "lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquamp var namespace", "updated_at" => now(), "created_at" => now(),"show" => 1],
        ["users_id"=>1, "rating"=>4, "rooms_id" => 9, "text" => "lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquamp var namespace", "updated_at" => now(), "created_at" => now(), "show" => 1],
        ]);
    }
}
