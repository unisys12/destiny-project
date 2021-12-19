<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Query\Expression;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestinyRecordDefinitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destiny_record_definitions', function (Blueprint $table) {
            $table->id();
            $table->text('description')->nullable();
            $table->string('name');
            $table->string('icon')->nullable();
            $table->string('hasIcon');
            $table->integer('scope')->index('scope');
            $table->json('objectiveHashes')->nullable();
            // $table->integer('recordValueStyle'); // always 0
            $table->boolean('forTitleGilding');
            $table->json('titleInfo')->nullable();
            $table->json('completionInfo')->nullable();
            $table->json('stateInfo')->nullable();
            $table->json('requirements')->nullable();
            $table->json('expirationInfo')->nullable();
            $table->json('intervalInfo')->nullable();
            $table->json('rewardItems')->nullable();
            // $table->boolean('anyRewardHasConditionalVisibility'); // always false
            $table->integer('presentationNodeType')->index('presentationNodeType');
            // $table->json('traitIds'); // always empty
            // $table->json('traitHashes'); // always empty
            $table->json('parentNodeHashes')->nullable();
            $table->bigInteger('hash');
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
        Schema::dropIfExists('destiny_record_definitions');
    }
}
