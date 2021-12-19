<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinyItemCategoryDefinitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destiny_item_category_definitions', function (Blueprint $table) {
            $table->id();
            $table->text('description')->nullable();
            $table->string('name');
            $table->string('hasIcon');
            $table->boolean('visible');
            $table->boolean('deprecated');
            $table->string('shortTitle');
            $table->string('itemTypeRegex')->nullable();
            $table->integer('grantDestinyBreakerType')->index('grantDestinyBreakerType');
            $table->string('plugCategoryIdentifier')->nullable();
            $table->string('itemTypeRegexNot')->nullable();
            $table->string('originBucketIdentifier')->nullable();
            $table->integer('grantDestinyItemType')->index('grantDestinyItemType')->nullable();
            $table->integer('grantDestinyClass')->index('grantDestinyClass')->nullable();
            $table->integer('grantDestinySubType')->index('grantDestinySubType')->nullable();
            $table->json('groupedCategoryHashes')->nullable();
            $table->json('parentCategoryHashes')->nullable();
            $table->boolean('groupCategoryOnly');
            $table->string('traitId')->nullable();
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
        Schema::dropIfExists('destiny_item_category_definitions');
    }
}
