<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleTagsSeeder extends Seeder
{

    public function run()
    {
        DB::table('article_tags')->insert([
            ['article_id' => 1, 'tags_id' => 1],
            ['article_id' => 1, 'tags_id' => 2],
            ['article_id' => 1, 'tags_id' => 3],
            ['article_id' => 2, 'tags_id' => 1],
            ['article_id' => 2, 'tags_id' => 1],
        ]);
    }
}
