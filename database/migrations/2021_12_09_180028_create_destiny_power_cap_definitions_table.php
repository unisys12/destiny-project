<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinyPowerCapDefinitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destiny_power_cap_definitions', function (Blueprint $table) {
            $table->id();
            $table->integer('powerCap');
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
        Schema::dropIfExists('destiny_power_cap_definitions');
    }
}
