<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Louis Tychon',
                'email' => 'louis.tychon1@gmail.com',
                'country' => 'belgium',
                'city' => 'Liège',
                'password' => Hash::make('test1234'),
                'roles_id' => 1,
            ],
            [
                'name' => 'moderator',
                'email' => 'moderator@gmail.com',
                'country' => 'belgium',
                'city' => 'Liège',
                'password' => Hash::make('test1234'),
                'roles_id' => 2,
            ],
            [
                'name' => 'editor',
                'email' => 'editor@gmail.com',
                'country' => 'belgium',
                'city' => 'Liège',
                'password' => Hash::make('test1234'),
                'roles_id' => 3,
            ],
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'country' => 'belgium',
                'city' => 'Liège',
                'password' => Hash::make('test1234'),
                'roles_id' => 4,
            ]
        ]);
    }
}
