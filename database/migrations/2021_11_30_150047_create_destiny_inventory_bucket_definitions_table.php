<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinyInventoryBucketDefinitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destiny_inventory_bucket_definitions', function (Blueprint $table) {
            $table->id();
            $table->string('description')->nullable();
            $table->string('name')->nullable();
            $table->boolean('hasIcon');
            $table->integer('scope');
            $table->bigInteger('category');
            $table->integer('bucketOrder');
            $table->integer('itemCount');
            $table->integer('location');
            $table->boolean('hasTransferDestination');
            $table->boolean('enabled');
            $table->boolean('fifo');
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
        Schema::dropIfExists('destiny_inventory_bucket_definitions');
    }
}
