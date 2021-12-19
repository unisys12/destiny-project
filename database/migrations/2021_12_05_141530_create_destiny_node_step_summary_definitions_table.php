<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinyNodeStepSummaryDefinitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * NOT PART OF THE MANIFEST!!!
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destiny_node_step_summary_definitions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nodeStepHash')->index('nodeStepHash');
            $table->text('description')->nullable();
            $table->string('name')->nullable();
            $table->string('icon')->nullable();
            $table->boolean('hasIcon');
            $table->json('perkHashes');
            $table->json('statHashes');
            $table->boolean('affectsQuality');
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
        Schema::dropIfExists('destiny_node_step_summary_definitions');
    }
}
