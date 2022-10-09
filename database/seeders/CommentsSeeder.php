<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            [
                'users_id' => 1,
                'articles_id' => 1,
                'comment' => 'comment test 1'
            ], 
            [
                'users_id' => 1,
                'articles_id' => 1,
                'comment' => 'comment test 2'
            ], 
            [
                'users_id' => 3,
                'articles_id' => 1,
                'comment' => 'comment test 3'
            ], 
            [
                'users_id' => 2,
                'articles_id' => 2,
                'comment' => 'comment test 4'
            ], 
            [
                'users_id' => 2,
                'articles_id' => 2,
                'comment' => 'comment test 5'
            ]
        ]);
    }
}
