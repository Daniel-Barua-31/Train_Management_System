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
        Schema::create('food_order', function (Blueprint $table) {
            $table->String('Order_Number')->primary();
            $table->unsignedBigInteger('Food_id');
            $table->foreign('Food_id')->references('Food_id')->on('food');
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
        Schema::dropIfExists('food_order');
    }
};
