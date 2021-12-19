<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinyTraitDefinitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destiny_trait_definitions', function (Blueprint $table) {
            $table->id();
            $table->string('description')->nullable();
            $table->string('name')->nullable();
            $table->string('icon')->nullable();
            $table->json('iconSequences')->nullable();
            $table->boolean('hasIcon');
            $table->string('highResIcon')->nullable();
            $table->integer('traitCategoryId')->index('traitCategoryId')->nullable();
            $table->bigInteger('traitCategoryHash')->index('traitCategoryHash');
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
        Schema::dropIfExists('destiny_trait_definitions');
    }
}
