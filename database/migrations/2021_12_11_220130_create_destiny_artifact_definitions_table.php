<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinyArtifactDefinitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destiny_artifact_definitions', function (Blueprint $table) {
            $table->id();
            $table->text('description')->nullable();
            $table->string('name')->nullable();
            $table->string('icon')->nullable();
            $table->json('iconSequences')->nullable();
            $table->boolean('hasIcon');
            $table->string('highResIcon')->nullable();
            $table->json('translationBlock')->nullable();
            $table->json('tiers')->nullable();
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
        Schema::dropIfExists('destiny_artifact_definitions');
    }
}
