<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinyProgressionDefinitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destiny_progression_definitions', function (Blueprint $table) {
            $table->id();
            $table->text('description')->nullable();
            $table->string('name')->nullable();
            $table->string('icon')->nullable();
            $table->json('iconSequences')->nullable();
            $table->string('hasIcon');
            $table->integer('scope');
            $table->boolean('repeatLastStep');
            $table->string('source')->nullable();
            $table->json('steps')->nullable();
            $table->boolean('visible')->nullable();
            $table->bigInteger('factionHash')->nullable();
            $table->json('color')->nullable();
            $table->string('rankIcon')->nullable();
            $table->json('rewardItems')->nullable();
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
        Schema::dropIfExists('destiny_progression_definitions');
    }
}
