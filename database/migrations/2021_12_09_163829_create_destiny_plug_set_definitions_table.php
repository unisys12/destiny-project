<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinyPlugSetDefinitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destiny_plug_set_definitions', function (Blueprint $table) {
            $table->id();
            $table->string('description')->nullable();
            $table->string('name')->nullable();
            $table->string('hasIcon')->nullable();
            $table->json('reusablePlugItems')->nullable();
            $table->boolean('isFakePlugSet');
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
        Schema::dropIfExists('destiny_plug_set_definitions');
    }
}
