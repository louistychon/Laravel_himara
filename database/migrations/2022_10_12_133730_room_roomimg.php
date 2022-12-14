<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('room_roomimg', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rooms_id')->references('id')->on('rooms')->onDelete('cascade');
            $table->foreignId('roomimg_id')->references('id')->on('room_imgs')->onDelete('cascade');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('room_roomimg');
    }
};
