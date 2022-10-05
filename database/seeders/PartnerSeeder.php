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
            [ 'src' => 'provider-1.png'],
            [ 'src' => 'provider-2.png'],
            [ 'src' => 'provider-3.png'],
            [ 'src' => 'provider-4.png'],
        ]);
    }
}
