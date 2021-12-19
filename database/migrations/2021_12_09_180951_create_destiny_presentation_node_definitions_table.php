<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinyPresentationNodeDefinitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destiny_presentation_node_definitions', function (Blueprint $table) {
            $table->id();
            $table->string('description')->nullable();
            $table->string('name')->nullable();
            $table->string('icon')->nullable();
            $table->json('iconSequences')->nullable();
            $table->string('hasIcon');
            $table->string('originalIcon')->nullable();
            $table->string('rootViewIcon')->nullable();
            $table->integer('nodeType');
            $table->integer('scope');
            $table->bigInteger('objectiveHash')->index('objectiveHash')->nullable();
            $table->bigInteger('completionRecordHash')->index('completionRecordHash')->nullable();
            $table->json('children')->nullable();
            $table->integer('displayStyle');
            $table->integer('screenStyle');
            $table->json('requirements')->nullable();
            $table->boolean('disableChildSubscreenNavigation');
            $table->integer('maxCategoryRecordScore');
            $table->integer('presentationNodeType');
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
        Schema::dropIfExists('destiny_presentation_node_definitions');
    }
}
