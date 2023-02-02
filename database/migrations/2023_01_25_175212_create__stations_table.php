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
        Schema::create('_stations', function (Blueprint $table) {
            $table->string('Stations_id',50)->primary();
            $table->string('Stations_name',50);
            $table->string('Trains_id');
            $table->date('Date');
            $table->string('City');
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
        Schema::dropIfExists('_stations');
    }
};
