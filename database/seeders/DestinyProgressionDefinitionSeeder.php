<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Destiny\MobileWorldContent;

class DestinyProgressionDefinitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $db = new MobileWorldContent;
        $table = $db->viewContentTable('DestinyProgressionDefinition');
        foreach ($table as $row) {
            if ($row->redacted != true) {
                DB::table('destiny_progression_definitions')->insert([
                    'description' => $row->displayProperties->description ?? NULL,
                    'name' => $row->displayProperties->name ?? NULL,
                    'icon' => $row->displayProperties->icon ?? NULL,
                    'iconSequences' => isset($row->displayProperties->iconSequences)
                        ? json_encode($row->displayProperties->iconSequences)
                        : NULL,
                    'hasIcon' => $row->displayProperties->hasIcon,
                    'scope' => $row->scope,
                    'repeatLastStep' => $row->repeatLastStep,
                    'source' => $row->source ?? NULL,
                    'steps' => isset($row->steps) ? json_encode($row->steps) : NULL,
                    'visible' => $row->visible ?? NULL,
                    'factionHash' => $row->factionHash ?? NULL,
                    'color' => isset($row->color) ? json_encode($row->color) : NULL,
                    'rankIcon' => $row->rankIcon ?? NULL,
                    'rewardItems' => isset($row->rewardItems) ? json_encode($row->rewardItems) : NULL,
                    'hash' => $row->hash,
                    'index' => $row->index,
                    'redacted' => $row->redacted,
                    'blacklisted' => $row->blacklisted
                ]);
            }
        }
    }
}
