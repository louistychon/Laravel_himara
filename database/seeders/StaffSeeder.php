<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staff')->insert([
            ['name' => 'Jeanette Owens', 'title' => 'HOUSEKEEPER', 'text' => 'Lorem Ipsum which looks many web sites pass websites is therefore always.', 'src' => "staff1.jpg"],
            ['name' => 'Henry Garrett', 'title' => 'RECEPTIONIST', 'text' => 'Lorem Ipsum which looks many web sites pass websites is therefore always.', 'src' => "staff2.jpg"],
            ['name' => 'Tommy Alexander', 'title' => 'CHEF', 'text' => 'Lorem Ipsum which looks many web sites pass websites is therefore always.', 'src' => "staff3.jpg"],
            ['name' => 'Penny Soto', 'title' => 'HOTEL MANAGER', 'text' => 'Lorem Ipsum which looks many web sites pass websites is therefore always.', 'src' => "staff4.jpg"],
            ['name' => 'Alex Cox', 'title' => 'ROOM SERVICE', 'text' => 'Lorem Ipsum which looks many web sites pass websites is therefore always.', 'src' => "staff5.jpg"],
            ['name' => 'Alfredo Romero', 'title' => 'HOTEL MANAGER', 'text' => 'Lorem Ipsum which looks many web sites pass websites is therefore always.', 'src' => "staff6.jpg"],
            ['name' => 'Glenda Gilbert', 'title' => 'MARKETING ADVISOR', 'text' => 'Lorem Ipsum which looks many web sites pass websites is therefore always.', 'src' => "staff7.jpg"],
            ['name' => 'Sheila Carter', 'title' => 'HOTEL MANAGER', 'text' => 'Lorem Ipsum which looks many web sites pass websites is therefore always.', 'src' => "staff8.jpg"],
        ]);
    }
}
