<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Destiny\MobileWorldContent;

class DestinyDestinationDefinitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $db = new MobileWorldContent;
        $table = $db->viewContentTable('DestinyDestinationDefinition');

        foreach ($table as $row) {
            DB::table('destiny_destination_definitions')->insert([
                'description' => $row->displayProperties->description,
                'name' => $row->displayProperties->name,
                'hasIcon' => $row->displayProperties->hasIcon,
                'placeHash' => $row->placeHash,
                'defaultFreeroamActivityHash' => $row->defaultFreeroamActivityHash ?? "",
                'bubbles' => json_encode($row->bubbles),
                'hash' => $row->hash,
                'index' => $row->index,
                'redacted' => $row->redacted,
                'blacklisted' => $row->blacklisted
            ]);
        }
    }
}
