<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinySocketTypeDefinitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destiny_socket_type_definitions', function (Blueprint $table) {
            $table->id();
            $table->text('description')->nullable();
            $table->string('name')->nullable();
            $table->string('icon')->nullable();
            $table->json('iconSequences')->nullable();
            $table->boolean('hasIcon');
            $table->string('highResIcon')->nullable();
            $table->json('insertAction')->nullable();
            $table->json('plugWhitelist')->nullable();
            $table->bigInteger('socketCategoryHash')->index('socketCategoryHash');
            $table->integer('visibility')->nullable();
            $table->boolean('alwaysRandomizeSockets');
            $table->boolean('isPreviewEnabled');
            $table->boolean('hideDuplicateReusablePlugs');
            $table->boolean('overridesUiAppearance');
            $table->boolean('avoidDuplicatesOnInitialization');
            $table->json('currencyScalars')->nullable();
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
        Schema::dropIfExists('destiny_socket_type_definitions');
    }
}
