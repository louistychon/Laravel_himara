<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('roomtags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('rooms_id')->references('id')->on('rooms');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('roomtags');
    }
};