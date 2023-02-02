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
        Schema::create('ticket_update', function (Blueprint $table) {
            $table->bigIncrements('Update_id');
            $table->unsignedBigInteger('Ticket_id');
            $table->foreign('Ticket_id')->references('Ticket_id')->on('ticket');
            $table->string('Seat',120);
            $table->foreign('Seat')->references('Seat_Number')->on('ticket');
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
        Schema::dropIfExists('ticket_update');
    }
};
