<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Louis Tychon',
                'email' => 'louis.tychon1@gmail.com',
                'country' => 'belgium',
                'src' => 'admin.jpg',
                'city' => 'Liège',
                'password' => Hash::make('test1234'),
                'roles_id' => 1,
            ],
            [
                'name' => 'moderator',
                'email' => 'moderator@gmail.com',
                'country' => 'belgium',
                'src' => 'user1.jpg',
                'city' => 'Liège',
                'password' => Hash::make('test1234'),
                'roles_id' => 2,
            ],
            [
                'name' => 'editor',
                'email' => 'editor@gmail.com',
                'country' => 'belgium',
                'src' => 'user2.jpg',
                'city' => 'Liège',
                'password' => Hash::make('test1234'),
                'roles_id' => 3,
            ],
            [
                'name' => 'user',
                'email' => 'user@gmail.com',
                'country' => 'belgium',
                'src' => 'user3.jpg',
                'city' => 'Liège',
                'password' => Hash::make('test1234'),
                'roles_id' => 4,
            ],
            [
                'name' => 'user2',
                'email' => 'user2@gmail.com',
                'country' => 'belgium',
                'src' => 'user3.jpg',
                'city' => 'Liège',
                'password' => Hash::make('test1234'),
                'roles_id' => 4,
            ],
            [
                'name' => 'user3',
                'email' => 'user3@gmail.com',
                'country' => 'belgium',
                'src' => 'user4.jpg',
                'city' => 'Liège',
                'password' => Hash::make('test1234'),
                'roles_id' => 4,
            ],
            [
                'name' => 'user4',
                'email' => 'user4@gmail.com',
                'country' => 'belgium',
                'src' => 'user5.jpg',
                'city' => 'Liège',
                'password' => Hash::make('test1234'),
                'roles_id' => 4,
            ],            [
                'name' => 'user5',
                'email' => 'user5@gmail.com',
                'country' => 'belgium',
                'src' => 'user6.jpg',
                'city' => 'Liège',
                'password' => Hash::make('test1234'),
                'roles_id' => 4,
            ],            [
                'name' => 'user6',
                'email' => 'user6@gmail.com',
                'country' => 'belgium',
                'src' => 'user7.jpg',
                'city' => 'Liège',
                'password' => Hash::make('test1234'),
                'roles_id' => 4,
            ],            [
                'name' => 'user7',
                'email' => 'user7@gmail.com',
                'country' => 'belgium',
                'src' => 'user8.jpg',
                'city' => 'Liège',
                'password' => Hash::make('test1234'),
                'roles_id' => 4,
            ]
        ]);
    }
}
