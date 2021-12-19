<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinyObjectiveDefinitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destiny_objective_definitions', function (Blueprint $table) {
            $table->id();
            $table->string('description')->nullable();
            $table->string('name')->nullable();
            $table->string('icon')->nullable();
            $table->json('iconSequences')->nullable();
            $table->string('hasIcon');
            $table->integer('completionValue');
            $table->integer('scope');
            $table->bigInteger('locationHash')->index('locationHash')->nullable();
            $table->boolean('allowNegativeValue');
            $table->boolean('allowValueChangeWhenCompleted');
            $table->boolean('isCountingDownward');
            $table->integer('valueStyle');
            $table->string('progressDescription');
            $table->json('perks')->nullable();
            $table->json('stats')->nullable();
            $table->bigInteger('minimumVisibilityThreshold')->index('minimumVisibilityThreshold');
            $table->boolean('allowOvercompletion');
            $table->boolean('showValueOnComplete');
            $table->integer('completedValueStyle');
            $table->integer('inProgressValueStyle');
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
        Schema::dropIfExists('destiny_objective_definitions');
    }
}
