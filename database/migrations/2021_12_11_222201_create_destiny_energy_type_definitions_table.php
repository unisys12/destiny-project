<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinyEnergyTypeDefinitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destiny_energy_type_definitions', function (Blueprint $table) {
            $table->id();
            $table->text('description')->nullable();
            $table->string('name')->nullable();
            $table->string('icon')->nullable();
            $table->json('iconSequences')->nullable();
            $table->boolean('hasIcon');
            $table->string('highResIcon')->nullable();
            $table->string('transparentIconPath')->nullable();
            $table->boolean('showIcon');
            $table->integer('enumValue')->index('enumValue');
            $table->bigInteger('capacityStatHash')->index('capacityStatHash')->nullable();
            $table->bigInteger('costStatHash')->index('costStatHash')->nullable();
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
        Schema::dropIfExists('destiny_energy_type_definitions');
    }
}
