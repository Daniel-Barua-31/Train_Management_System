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
        Schema::create('ticket', function (Blueprint $table) {
            $table->bigIncrements('Ticket_id');
            $table->unsignedBigInteger('Passenger_id');
            $table->foreign('Passenger_id')->references('Passenger_id')->on('passenger');
            $table->string('Trains_id');
            $table->string('Seat_number',120)->unique();
            $table->enum('Seat_class',['First class AC(FC)','Second class AC(SC)','Sleeper (SL)','SHOVAN','SNIGDHA']);
            $table->Integer('Ticket_price');
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
        Schema::drop('ticket');
    }
};
