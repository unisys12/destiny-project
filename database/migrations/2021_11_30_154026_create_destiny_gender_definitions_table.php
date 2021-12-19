<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinyGenderDefinitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destiny_gender_definitions', function (Blueprint $table) {
            $table->id();
            $table->integer('genderType')->index('genderType');
            $table->string('description')->nullable();
            $table->string('name');
            $table->boolean('hasIcon');
            $table->bigInteger('hash')->index();
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
        Schema::dropIfExists('destiny_gender_definitions');
    }
}
