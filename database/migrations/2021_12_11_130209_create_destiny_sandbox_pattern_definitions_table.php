<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinySandboxPatternDefinitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destiny_sandbox_pattern_definitions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('patternHash')->index('patternHash')->nullable();
            $table->bigInteger('patternGlobalTagIdHash')->index('patternGlobalTagIdHash')->nullable();
            $table->bigInteger('weaponContentGroupHash')->index('weaponContentGroupHash')->nullable();
            $table->bigInteger('weaponTranslationGroupHash')->index('weaponTranslationGroupHash')->nullable();
            $table->bigInteger('weaponTypeHash')->index('weaponTypeHash')->nullable();
            $table->integer('weaponType')->index('weaponType')->nullable();
            $table->json('filters')->nullable();
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
        Schema::dropIfExists('destiny_sandbox_pattern_definitions');
    }
}
