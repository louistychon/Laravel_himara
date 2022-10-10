<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('src');
            $table->string('header_stars')->nullable();
            $table->integer('number_stars')->nullable();
            $table->integer('place')->nullable();
            $table->string('title')->nullable();
            $table->string('slogan')->nullable();
            $table->string('button1_text')->nullable();
            $table->string('button2_text')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('sliders');
    }
};
