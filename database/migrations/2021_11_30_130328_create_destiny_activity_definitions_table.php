<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinyActivityDefinitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     *
     */

    public function up()
    {
        Schema::create('destiny_activity_definitions', function (Blueprint $table) {
            $table->id();
            $table->text('description')->nullable();
            $table->string('name')->nullable();
            $table->string('icon')->nullable();
            $table->boolean('hasIcon');
            $table->string('releaseIcon')->nullable();
            $table->integer('releaseTime');
            $table->bigInteger('completionUnlockHash');
            $table->integer('activityLightLevel');
            $table->bigInteger('destinationHash')->index('destinationHash');
            $table->bigInteger('placeHash')->index('placeHash');
            $table->bigInteger('activityTypeHash')->index('activityTypeHash');
            $table->integer('tier');
            $table->string('pgcrImage')->nullable();
            $table->json('rewards')->nullable();
            $table->json('modifiers');
            $table->boolean('isPlaylist');
            $table->json('challenges');
            $table->json('optionalUnlockStrings');
            $table->boolean('inheritFromFreeRoam');
            $table->boolean('suppressOtherRewards');
            $table->json('playlistItems');
            $table->boolean('isMatchmade');
            $table->json('matchmaking');
            $table->boolean('isPvP');
            $table->json('insertionPoints');
            $table->json('activityLocationMappings');
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
        Schema::dropIfExists('destiny_activity_definitions');
    }
}
