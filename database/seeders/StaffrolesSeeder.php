<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffrolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staffroles')->insert([
            ['name' => 'Housekeeper'],
            ['name' => 'Hotel Manager'],
            ['name' => 'Room Service'],
            ['name' => 'Marketing Advisor'],
            ['name' => 'Receptionnist'],
            ['name' => 'Chef']
        ]);
    }
}
