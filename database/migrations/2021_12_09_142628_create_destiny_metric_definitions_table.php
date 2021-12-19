<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinyMetricDefinitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destiny_metric_definitions', function (Blueprint $table) {
            $table->id();
            $table->string('description')->nullable();
            $table->string('name')->nullable();
            $table->string('icon')->nullable();
            $table->json('iconSequences')->nullable();
            $table->string('hasIcon');
            $table->bigInteger('trackingObjectiveHash');
            $table->boolean('lowerValueIsBetter');
            $table->integer('presentationNodeType');
            $table->json('traitIds');
            $table->json('traitHashes');
            $table->json('parentNodeHashes');
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
        Schema::dropIfExists('destiny_metric_definitions');
    }
}
