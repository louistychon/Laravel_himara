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
            ['name' => 'Jeanette Owens', 'title' => 1, 'text' => 'Lorem Ipsum which looks many web sites pass websites is therefore always.', 'src' => "staff1.jpg"],
            ['name' => 'Henry Garrett', 'title' => 2, 'text' => 'Lorem Ipsum which looks many web sites pass websites is therefore always.', 'src' => "staff2.jpg"],
            ['name' => 'Tommy Alexander', 'title' => 3, 'text' => 'Lorem Ipsum which looks many web sites pass websites is therefore always.', 'src' => "staff3.jpg"],
            ['name' => 'Penny Soto', 'title' => 4, 'text' => 'Lorem Ipsum which looks many web sites pass websites is therefore always.', 'src' => "staff4.jpg"],
            ['name' => 'Alex Cox', 'title' => 5, 'text' => 'Lorem Ipsum which looks many web sites pass websites is therefore always.', 'src' => "staff5.jpg"],
            ['name' => 'Alfredo Romero', 'title' => 4, 'text' => 'Lorem Ipsum which looks many web sites pass websites is therefore always.', 'src' => "staff6.jpg"],
            ['name' => 'Glenda Gilbert', 'title' => 6, 'text' => 'Lorem Ipsum which looks many web sites pass websites is therefore always.', 'src' => "staff7.jpg"],
            ['name' => 'Sheila Carter', 'title' => 4, 'text' => 'Lorem Ipsum which looks many web sites pass websites is therefore always.', 'src' => "staff8.jpg"],
        ]);
    }
}
