<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {

        Schema::create('hometexts', function (Blueprint $table) {
            $table->id();
            $table->string('title_intro');
            $table->text('text_intro');
            $table->string('title_card');
            $table->string('text_card');
            $table->integer('stars');
            $table->string('title_rooms');
            $table->string('title_services');
            $table->string('title_gallery');
            $table->string('title_testimonial');
            $table->string('title_restaurant');
            $table->string('title_news');
            $table->string('title_contact1');
            $table->string('title_contact2');
            $table->string('under_title_intro');
            $table->string('under_title_rooms');
            $table->string('under_title_services');
            $table->string('under_title_gallery');
            $table->string('under_title_testimonial');
            $table->string('under_title_restaurant');
            $table->string('under_title_news');
            $table->string('under_title_contact1');
            $table->string('under_title_contact2');
            $table->string('button_contact');
            $table->string('video_link');
            $table->string('about_img');
            $table->string('background_image_restaurant');
            $table->string('background_image_video');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('hometexts');
    }
};
