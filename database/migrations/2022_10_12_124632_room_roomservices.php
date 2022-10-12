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
        Schema::create('room_roomservices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rooms_id')->references('id')->on('rooms');
            $table->foreignId('room_services_id')->references('id')->on('room_services');
        });    
    }

    public function down()
    {
        Schema::dropIfExists('room_roomservices');
    }
};
