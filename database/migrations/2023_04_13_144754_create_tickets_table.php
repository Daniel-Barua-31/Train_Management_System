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
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('Ticket_id');
            $table->unsignedBigInteger('Passenger_id');
            $table->foreign('Passenger_id')->references('Passenger_id')->on('passenger');
            $table->unsignedBigInteger('Trains_id');
            $table->foreign('Trains_id')->references('Trains_id')->on('trains');
            $table->string('Seat_number',120)->unique();
            $table->integer('pricing');
            $table->unsignedBigInteger('pricing_id');
            $table->foreign('pricing_id')->references('pricing_id')->on('ticket_pricing');
            $table->date('Booking_date');
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
        Schema::dropIfExists('tickets');
    }
};
