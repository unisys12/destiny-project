<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinyCollectibleDefinitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destiny_collectible_definitions', function (Blueprint $table) {
            $table->id();
            $table->text('description')->nullable();
            $table->string('name')->nullable();
            $table->string('icon')->nullable();
            $table->boolean('hasIcon');
            $table->integer('scope')->nullable();
            $table->string('sourceString')->nullable();
            $table->bigInteger('sourceHash')->index('sourceHash');
            $table->bigInteger('itemHash')->index('itemHash');
            $table->bigInteger('acquisitionInfo_acquireMaterialRequirementHash')
                ->index('acquisitionInfo_acquireMaterialRequirementHash')
                ->nullable();
            $table->boolean('acquisitionInfo_runOnlyAcquisitionRewardSite');
            $table->json('stateInfo')->nullable();
            $table->integer('presentationNodeType')->nullable();
            $table->json('traitIds')->nullable();
            $table->json('traitHashes')->nullable();
            $table->json('parentNodeHashes')->nullable();
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
        Schema::dropIfExists('destiny_collectible_definitions');
    }
}
