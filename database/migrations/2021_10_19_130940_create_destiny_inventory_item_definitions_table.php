<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinyInventoryItemDefinitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destiny_inventory_item_definitions', function (Blueprint $table) {
            $table->id();
            $table->mediumText('description');
            $table->string('name');
            $table->string('icon');
            $table->boolean('hasIcon');
            $table->bigInteger('collectibleHash')->index('collectibleHash')->nullable();
            $table->string('iconWatermark')->nullable();
            $table->string('iconWatermarkShelved')->nullable();
            $table->string('secondaryIcon');
            $table->string('screenshot');
            $table->string('itemTypeDisplayName');
            $table->mediumText('flavorText');
            $table->string('uiItemDisplayStyle');
            $table->string('itemTypeAndTierDisplayName');
            $table->mediumText('displaySource');
            $table->bigInteger('loreHash')->index('loreHash')->nullable();
            // $table->bigInteger('itemCategoryHashes')->index('itemCategoryHashes');
            $table->integer('classType');
            $table->bigInteger('breakerType')->index('breakerType')->nullable();
            $table->bigInteger('breakerTypeHash')->index('breakerTypeHash')->nullable();
            $table->boolean('equippable');
            $table->bigInteger('seasonHash')->index('seasonHash')->nullable();
            $table->bigInteger('hash')->index('hash');
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
        Schema::dropIfExists('destiny_inventory_item_definitions');
    }
}
