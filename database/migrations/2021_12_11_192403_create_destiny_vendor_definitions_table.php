<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinyVendorDefinitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destiny_vendor_definitions', function (Blueprint $table) {
            $table->id();
            $table->string('largeIcon')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('originalIcon')->nullable();
            $table->json('requirementsDisplay')->nullable();
            $table->string('smallTransparentIcon')->nullable();
            $table->string('mapIcon')->nullable();
            $table->string('largeTransparentIcon')->nullable();
            $table->text('description')->nullable();
            $table->string('name')->nullable();
            $table->string('icon')->nullable();
            $table->json('iconSequences')->nullable();
            $table->string('highResIcon')->nullable();
            $table->boolean('hasIcon');
            $table->integer('vendorProgressionType')->index('vendorProgressionType');
            $table->string('buyString')->nullable();
            $table->string('sellString')->nullable();
            $table->bigInteger('displayItemHash')->index('displayItemHash')->nullable();
            $table->boolean('inhibitBuying');
            $table->boolean('inhibitSelling');
            $table->bigInteger('factionHash')->index('factionHash')->nullable();
            $table->integer('resetIntervalMinutes');
            $table->integer('resetOffsetMinutes');
            $table->json('failureStrings')->nullable();
            $table->json('unlockRanges')->nullable();
            $table->string('vendorIdentifier')->nullable();
            $table->string('vendorPortrait')->nullable();
            $table->string('vendorBanner')->nullable();
            $table->boolean('enabled');
            $table->boolean('visible');
            $table->string('vendorSubcategoryIdentifier')->nullable();
            $table->boolean('consolidateCategories');
            $table->json('actions')->nullable();
            $table->json('categories')->nullable();
            $table->json('originalCategories')->nullable();
            $table->json('displayCategories')->nullable();
            $table->json('interactions')->nullable();
            $table->json('inventoryFlyouts')->nullable();
            $table->json('itemList')->nullable();
            $table->json('services')->nullable();
            $table->json('acceptedItems')->nullable();
            $table->boolean('returnWithVendorRequest');
            $table->json('locations')->nullable();
            $table->json('groups')->nullable();
            $table->json('ignoreSaleItemHashes')->nullable();
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
        Schema::dropIfExists('destiny_vendor_definitions');
    }
}
