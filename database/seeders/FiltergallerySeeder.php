<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FiltergallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('filtergalleries')->insert([
            ["name"=>"restaurnat"],
            ["name"=>"swimmingpool"],
            ["name"=>"spa"],
            ["name"=>"roomview"],
        ]);
    }
}
