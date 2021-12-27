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
            $table->json('inventory')->nullable();
            $table->json('setData')->nullable();
            $table->json('stats')->nullable();
            $table->bigInteger('emblemObjectiveHash')->index('emblemObjectiveHash')->nullable();
            $table->json('equippingBlock')->nullable();
            $table->json('preview')->nullable();
            $table->json('quality')->nullable();
            $table->json('value')->nullable();
            $table->json('sourceData')->nullable();
            $table->json('objectives')->nullable();
            $table->json('metrics')->nullable();
            $table->json('gearset')->nullable();
            $table->json('sack')->nullable();
            $table->json('sockets')->nullable();
            $table->json('summary')->nullable();
            $table->json('talentGrid')->nullable();
            $table->json('investmentStats')->nullable();
            $table->json('perks')->nullable();
            $table->bigInteger('loreHash')->index('loreHash')->nullable();
            $table->bigInteger('summaryItemHash')->index('summaryItemHash')->nullable();
            $table->json('animations')->nullable();
            $table->json('links')->nullable();
            $table->boolean('doesPostmasterPullHaveSideEffects');
            $table->json('itemCategoryHashes')->nullable();
            $table->integer('itemType')->nullable();
            $table->integer('itemSubType')->nullable();
            $table->integer('classType');
            $table->bigInteger('breakerType')->index('breakerType')->nullable();
            $table->bigInteger('breakerTypeHash')->index('breakerTypeHash')->nullable();
            $table->boolean('equippable');
            $table->json('damageTypeHashes')->nullable();
            $table->json('damageTypes')->nullable();
            $table->integer('defaultDamageType')->nullable();
            $table->bigInteger('defaultDamageTypeHash')->index('defaultDamageTypeHash')->nullable();
            $table->bigInteger('seasonHash')->index('seasonHash')->nullable();
            $table->boolean('isWrapper');
            $table->json('traitIds')->nullable();
            $table->json('traitHashes')->nullable();
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
