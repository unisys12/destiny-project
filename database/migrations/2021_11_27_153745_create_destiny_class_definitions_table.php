<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinyClassDefinitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destiny_class_definitions', function (Blueprint $table) {
            $table->id();
            $table->integer('classType');
            $table->string('name');
            $table->boolean('hasIcon');
            $table->bigInteger('hash')->index();
            $table->smallInteger('index');
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
        Schema::dropIfExists('destiny_class_definitions');
    }
}
