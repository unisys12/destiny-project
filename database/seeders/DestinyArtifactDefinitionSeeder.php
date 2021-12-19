<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Destiny\MobileWorldContent;

class DestinyArtifactDefinitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $db = new MobileWorldContent;
        $table = $db->viewContentTable('DestinyArtifactDefinition');
        foreach ($table as $row) {
            if ($row->redacted != true || $row->blacklisted != true) {
                DB::table('destiny_artifact_definitions')->insert([
                    'description' => $row->displayProperties->description ?? NULL,
                    'name' => $row->displayProperties->name ?? NULL,
                    'icon' => $row->displayProperties->icon ?? NULL,
                    'iconSequences' => isset($row->displayProperties->iconSequences) ? json_encode($row->displayProperties->iconSequences) : NULL,
                    'highResIcon' => $row->displayProperties->highResIcon ?? NULL,
                    'hasIcon' => $row->displayProperties->hasIcon ?? NULL,
                    'translationBlock' => isset($row->translationBlock) ? json_encode($row->translationBlock) : NULL,
                    'tiers' => isset($row->tiers) ? json_encode($row->tiers) : NULL,
                    'hash' => $row->hash,
                    'index' => $row->index,
                    'redacted' => $row->redacted,
                    'blacklisted' => $row->blacklisted
                ]);
            }
        }
    }
}
