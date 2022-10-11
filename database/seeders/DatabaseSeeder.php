<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            RoomTypeSeeder::class,
            SliderSeeder::class,
            PartnerSeeder::class,
            FiltergallerySeeder::class,
            GalleryImgSeeder::class,
            HotelInfoSeeder::class,
            TagsSeeder::class,
            CategorieBlogSeeder::class,
            DishSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            StaffSeeder::class,
            ArticleSeeder::class,
            IconSeeder::class,
            ServiceSeeder::class,
            HometextSeeder::class,
            CommentsSeeder::class,
            ArticleTagsSeeder::class,
            RoomSeeder::class,
            RoomtagsSeeder::class,
            RoomImgSeeder::class,
            TestimonialSeeder::class,
        ]);
    }
}
