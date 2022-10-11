<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_infos', function (Blueprint $table) {
            $table->id();
            $table->string('welcome_top');
            $table->string('address');
            $table->string('phone');
            $table->string('website');
            $table->string('email');
            $table->string('logo');
            $table->string('logo_square');
            $table->string('coordinates_x');
            $table->string('coordinates_y');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_infos');
    }
};
