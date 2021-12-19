<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Destiny\MobileWorldContent;

class DestinyChecklistDefinitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $db = new MobileWorldContent;
        $table = $db->viewContentTable('DestinyChecklistDefinition');
        foreach ($table as $row) {
            if ($row->redacted != true || $row->blacklisted != true) {
                DB::table('destiny_checklist_definitions')->insert([
                    'description' => $row->displayProperties->description ?? NULL,
                    'name' => $row->displayProperties->name ?? NULL,
                    'icon' => $row->displayProperties->icon ?? NULL,
                    'iconSequences' => isset($row->displayProperties->iconSequences) ? json_encode($row->displayProperties->iconSequences) : NULL,
                    'highResIcon' => $row->displayProperties->highResIcon ?? NULL,
                    'hasIcon' => $row->displayProperties->hasIcon ?? NULL,
                    'viewActionString' => $row->viewActionString,
                    'scope' => $row->scope,
                    'entries' => isset($row->entries) ? json_encode($row->entries) : NULL,
                    'hash' => $row->hash,
                    'index' => $row->index,
                    'redacted' => $row->redacted,
                    'blacklisted' => $row->blacklisted
                ]);
            }
        }
    }
}
