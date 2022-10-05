<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieBlogSeeder extends Seeder
{
    public function run()
    {
        DB::table('categorie_blogs')->insert([
            ["name"=>"Travel"],
            ["name"=>"Rooms"],
            ["name"=>"Holidays"],
            ["name"=>"Events"],
        ]);
    }
}
