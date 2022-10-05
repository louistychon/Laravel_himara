<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            ['title' => '10 TIPS FOR HOLIDAY TRAVEL', 'long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet reiciendis ducimus deserunt non dolorum, distinctio repellendus eaque, officiis dicta! Sit numquam qui tenetur tempore officia minus, a dignissimos', 'comments' => 1, 'categorie_id' => 3, 'src' => 'blog-post1.jpg', 'users_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'ARE YOU READY TO ENJOY YOUR HOLIDAYS', 'long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet reiciendis ducimus deserunt non dolorum, distinctio repellendus eaque, officiis dicta! Sit numquam qui tenetur tempore officia minus, a dignissimos', 'comments' => 1, 'categorie_id' => 1, 'src' => 'blog-post2.jpg', 'users_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'HONEYMOON IN HOTEL HIMARA', 'long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet reiciendis ducimus deserunt non dolorum, distinctio repellendus eaque, officiis dicta! Sit numquam qui tenetur tempore officia minus, a dignissimos', 'comments' => 1, 'categorie_id' => 2, 'src' => 'blog-post3.jpg', 'users_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'TRAVEL GIFT IDEAS FOR EVERY TYPE OF TRAVELER', 'long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet reiciendis ducimus deserunt non dolorum, distinctio repellendus eaque, officiis dicta! Sit numquam qui tenetur tempore officia minus, a dignissimos', 'comments' => 1, 'categorie_id' => 3, 'src' => 'blog-post4.jpg', 'users_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'BREAKFAST WITH COFFEE AND ORANGE JUICE', 'long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet reiciendis ducimus deserunt non dolorum, distinctio repellendus eaque, officiis dicta! Sit numquam qui tenetur tempore officia minus, a dignissimos', 'comments' => 1, 'categorie_id' => 1, 'src' => 'blog-post5.jpg', 'users_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'RUNNING ON SAND', 'long_desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam amet reiciendis ducimus deserunt non dolorum, distinctio repellendus eaque, officiis dicta! Sit numquam qui tenetur tempore officia minus, a dignissimos', 'comments' => 1, 'categorie_id' => 3, 'src' => 'blog-post6.jpg', 'users_id' => 2, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
