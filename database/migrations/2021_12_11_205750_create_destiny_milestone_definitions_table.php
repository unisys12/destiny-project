<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinyMilestoneDefinitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destiny_milestone_definitions', function (Blueprint $table) {
            $table->id();
            $table->string('description')->nullable();
            $table->string('name')->nullable();
            $table->string('icon')->nullable();
            $table->json('iconSequences')->nullable();
            $table->boolean('hasIcon');
            $table->string('highResIcon')->nullable();
            $table->string('image')->nullable();
            $table->integer('milestoneType')->nullable();
            $table->boolean('recruitable');
            $table->string('friendlyName')->nullable();
            $table->boolean('showInExplorer');
            $table->boolean('showInMilestones');
            $table->boolean('explorePrioritizesActivityImage');
            $table->boolean('hasPredictableDates');
            $table->json('quests')->nullable();
            $table->json('rewards')->nullable();
            $table->string('vendorsDisplayTitle')->nullable();
            $table->json('vendors')->nullable();
            $table->json('values')->nullable();
            $table->boolean('isInGameMilestone');
            $table->json('activities')->nullable();
            $table->integer('defaultOrder');
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
        Schema::dropIfExists('destiny_milestone_definitions');
    }
}
