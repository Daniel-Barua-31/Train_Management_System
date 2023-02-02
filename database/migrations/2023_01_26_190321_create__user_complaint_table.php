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
        Schema::create('_user_complaint', function (Blueprint $table) {
            $table->bigIncrements('Passenger_Com_id');
            $table->string('Passenger_Complaints');
            $table->unsignedBigInteger('Passenger_id');
            $table->foreign('Passenger_id')->references('Passenger_id')->on('passenger');
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
        Schema::dropIfExists('_user_complaint');
    }
};
