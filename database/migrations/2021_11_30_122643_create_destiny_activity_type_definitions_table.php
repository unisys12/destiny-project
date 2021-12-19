<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinyActivityTypeDefinitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destiny_activity_type_definitions', function (Blueprint $table) {
            $table->id();
            $table->text('description')->nullable();
            $table->string('name')->nullable();
            $table->string('icon')->nullable();
            $table->boolean('hasIcon');
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
        Schema::dropIfExists('destiny_activity_type_definitions');
    }
}
