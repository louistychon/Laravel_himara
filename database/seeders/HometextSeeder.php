<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HometextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hometexts')->insert([
            ['title_intro' => 'HOTEL HIMARA. SINCE 1992',
            'title_card' => 'LUXURY HOTEL',
            'stars' => 5,
            'text_card' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolorem iste suscipit voluptates architecto nemo.',
            'about_img' => 'about-card.jpg',
            'title_rooms' => 'OUR ROOMS',
            'title_services' => 'HIMARA. SERVICES',
            'title_gallery' => 'HIMARA. GALLERY',
            'title_testimonial' => 'OUR GUESTS LOVE US',
            'title_restaurant' => 'HIMARA. RESTAURANT',
            'title_news' => 'LATEST NEWS',
            'title_contact1' => 'GET IN TOUCH',
            'title_contact2' => 'CONTACT US',
            'text_intro' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus deleniti nulla, hic voluptatibus eum voluptatum libero suscipit nemo voluptates cupiditate, ipsum provident facere modi tempora ducimus enim dicta laborum esse aliquam rem assumenda dolores. Commodi, aperiam, blanditiis! Ipsum iure necessitatibus eaque, fuga. Excepturi facilis libero dicta soluta officiis, sint sit voluptatem, vero doloribus nesciunt suscipit dolores veritatis minus quam atque non autem quasi consequatur quae sequi ex, ipsa facere qui ut recusandae. Quod earum cupiditate quaerat assumenda.',
            'under_title_intro' => 'HIGH QUALITY ACCOMMODATION SERVICES',
            'under_title_rooms' => 'OUR FAVORITE ROOMS',
            'under_title_services' => 'CHECK OUT OUR AWESOME SERVICES',
            'under_title_gallery' => 'CHECK OUT OUR IMAGE GALLERY',
            'under_title_testimonial' => 'WHAT OUR GUESTS ARE SAYING ABOUT US',
            'under_title_restaurant' => 'LIVE A GOURMET DINING EXPERIENCE',
            'under_title_news' => 'CHECK OUT OUR LATEST NEWS',
            'under_title_contact1' => 'GET IN TOUCH',
            'under_title_contact2' => 'SAY HELLO',
            'button_contact' => 'SEND MESSAGE',
            'video_link' => 'https://www.youtube.com/watch?v=BDDfopejpwk',
            'background_image_restaurant' => 'restaurant.jpg',
            'background_image_video' => 'video.jpg',
        ]
        ]);
    }
}
