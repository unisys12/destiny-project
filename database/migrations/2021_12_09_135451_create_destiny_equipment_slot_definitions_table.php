<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinyEquipmentSlotDefinitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destiny_equipment_slot_definitions', function (Blueprint $table) {
            $table->id();
            $table->string('description')->nullable();
            $table->string('name')->nullable();
            $table->string('hasIcon');
            $table->bigInteger('equipmentCategoryHash')->index('equipmentCategoryHash');
            $table->bigInteger('bucketTypeHash')->index('bucketTypeHash');
            $table->boolean('applyCustomArtDyes');
            $table->json('artDyeChannels');
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
        Schema::dropIfExists('destiny_equipment_slot_definitions');
    }
}
