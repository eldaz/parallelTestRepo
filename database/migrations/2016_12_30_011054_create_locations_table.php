<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->string('geolocation');
            $table->string('type');
            $table->boolean('isAvailable');
            $table->string('description');
            $table->string('name');
            $table->string('costToRent');
            $table->string('costToOwn');
            $table->integer('numberOfRooms');
            $table->integer('numberOfBathrooms');
            $table->integer('sqft');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
