<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinyActivityModeDefinitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destiny_activity_mode_definitions', function (Blueprint $table) {
            $table->id();
            $table->string('description')->nullable();
            $table->string('name')->nullable();
            $table->string('icon')->nullable();
            $table->string('hasIcon');
            $table->string('pgcrImage')->nullable();
            $table->integer('modeType')->index('modeType');
            $table->integer('activityModeCategory');
            $table->boolean('isTeamBased');
            $table->boolean('isAggregateMode');
            $table->json('parentHashes')->nullable();
            $table->string('friendlyName')->nullable();
            $table->json('activityModeMappings')->nullable();
            $table->boolean('display');
            $table->integer('order');
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
        Schema::dropIfExists('destiny_activity_mode_definitions');
    }
}
