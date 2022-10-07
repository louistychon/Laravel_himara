<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{

    public function run()
    {
        DB::table('sliders')->insert([
            ['src' => 'slider1.jpg',
            'header_stars' => 'Star Luxury Hotel',
            'number_stars' => 5,
            'title' => 'TOUCH THE DREAM',
            'slogan' => 'Live Your Myth In Hotel Himara',
            'button1_text' => 'Book a room now',
            'button2_text' => 'Contact us now'],
            ['src' => 'slider3.jpg',
            'header_stars' => null,
            'number_stars' => null,
            'title' => 'WHERE DREAMS COME TRUE',
            'slogan' => 'You\'ll never forget your stay',
            'button1_text' => null,
            'button2_text' => null],
            ['src' => 'slider13.jpg',
            'header_stars' => null,
            'number_stars' => null,
            'title' => 'ENJOY YOUR HOLIDAYS',
            'slogan' => 'Family room from 89€ per night',
            'button1_text' => null,
            'button2_text' => null],
        ]);
    }
}
