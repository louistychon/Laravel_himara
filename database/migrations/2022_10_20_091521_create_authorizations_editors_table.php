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
        Schema::create('authorizations_editors', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->foreignId('roomtypes_id')->references('id')->on('room_types');
                $table->foreignId('user_id')->references('id')->on('users');
                $table->boolean('show');
                $table->integer('king_bed');
                $table->integer('sofa_bed');
                $table->integer('max_guests');
                $table->integer('surface');
                $table->text('long_desc');
                $table->text('long_desc2');
                $table->float('price');
                $table->float('discount');
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
        Schema::dropIfExists('authorizations_editors');
    }
};
