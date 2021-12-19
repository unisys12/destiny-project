<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinyStatDefinitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destiny_stat_definitions', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('name');
            $table->string('icon');
            $table->string('hasIcon');
            $table->integer('aggregationType');
            $table->boolean('hasComputedBlock');
            $table->integer('statCategory');
            $table->boolean('interpolate');
            $table->bigInteger('hash');
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
        Schema::dropIfExists('destiny_stat_definitions');
    }
}
