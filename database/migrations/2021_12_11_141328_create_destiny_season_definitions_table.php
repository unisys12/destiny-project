<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinySeasonDefinitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destiny_season_definitions', function (Blueprint $table) {
            $table->id();
            $table->text('description')->nullable();
            $table->string('name')->nullable();
            $table->string('icon')->nullable();
            $table->json('iconSequences')->nullable();
            $table->string('highResIcon')->nullable();
            $table->string('hasIcon')->nullable();
            $table->string('backgroundImagePath')->nullable();
            $table->integer('seasonNumber')->nullable();
            $table->string('startDate')->nullable();
            $table->string('endDate')->nullable();
            $table->bigInteger('seasonPassHash')
                ->index('seasonPassHash')
                ->nullable();
            $table->bigInteger('seasonPassProgressionHash')
                ->index('seasonPassProgressionHash')
                ->nullable();
            $table->bigInteger('artifactItemHash')
                ->index('artifactItemHash')
                ->nullable();
            $table->bigInteger('sealPresentationNodeHash')
                ->index('sealPresentationNodeHash')
                ->nullable();
            $table->bigInteger('seasonalChallengesPresentationNodeHash')
                ->index('seasonalChallengesPresentationNodeHash')
                ->nullable();
            $table->json('preview')->nullable();
            $table->bigInteger('hash')->index('hash');
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
        Schema::dropIfExists('destiny_season_definitions');
    }
}
