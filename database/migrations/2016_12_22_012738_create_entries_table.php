<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entries', function (Blueprint $table){
            $table->increments('id');
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
            $table->integer('user_id')->unsigned();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entries');
    }
}
