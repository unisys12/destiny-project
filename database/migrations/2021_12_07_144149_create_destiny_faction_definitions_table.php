<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinyFactionDefinitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destiny_faction_definitions', function (Blueprint $table) {
            $table->id();
            $table->text('description')->nullable();
            $table->string('name');
            $table->string('icon')->nullable();
            $table->string('hasIcon');
            $table->bigInteger('progressionHash')->index('progressionHash');
            $table->json('tokenValues')->nullable();
            $table->bigInteger('rewardItemHash')->index('rewardItemHash');
            $table->bigInteger('rewardVendorHash')->index('rewardVendorHash');
            $table->json('vendors')->nullable();
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
        Schema::dropIfExists('destiny_faction_definitions');
    }
}
