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
        Schema::create('train_manages', function (Blueprint $table) {
            $table->bigIncrements('Trains_id');
            $table->string('Trains_name');
            $table->integer('Available_seats');
            $table->integer('price');
            $table->string('Trains_Destination');
            $table->dateTime('Time');
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
        Schema::dropIfExists('train_manages');
    }
};
