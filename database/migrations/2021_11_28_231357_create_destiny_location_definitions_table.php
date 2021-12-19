<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinyLocationDefinitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destiny_location_definitions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('vendorHash');
            $table->string('description')->nullable();
            $table->string('name');
            $table->boolean('hasIcon');
            $table->string('icon')->nullable();
            $table->string('smallTransparentIcon')->nullable();
            $table->string('mapIcon')->nullable();
            $table->string('largeTransparentIcon')->nullable();
            $table->bigInteger('spawnPoint');
            $table->bigInteger('destinationHash')->index();
            $table->bigInteger('activityHash')->index();
            $table->bigInteger('activityGraphHash')->nullable();
            $table->bigInteger('activityGraphNodeHash')->nullable();
            $table->string('activityBubbleName')->nullable();
            $table->bigInteger('hash')->index();
            $table->integer('index');
            $table->boolean('redacted');
            $table->boolean('blacklisted');

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
        Schema::dropIfExists('destiny_location_definitions');
    }
}
