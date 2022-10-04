<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partners')->insert([
            ['name' => 'tripadvisor', 'src' => 'provider-1.png'],
            ['name' => 'tripadvisor', 'src' => 'provider-2.png'],
            ['name' => 'tripadvisor', 'src' => 'provider-3.png'],
            ['name' => 'tripadvisor', 'src' => 'provider-4.png'],
        ]);
    }
}
