<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Destiny\MobileWorldContent;

class DestinyObjectiveDefinitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $db = new MobileWorldContent;
        $table = $db->viewContentTable('DestinyObjectiveDefinition');
        foreach ($table as $row) {
            DB::table('destiny_objective_definitions')->insert([
                'description' => $row->displayProperties->description ?? NULL,
                'name' => $row->displayProperties->name ?? NULL,
                'icon' => $row->displayProperties->icon ?? NULL,
                'iconSequences' => isset($row->displayProperties->iconSequences)
                    ? json_encode($row->displayProperties->iconSequences)
                    : NULL,
                'hasIcon' => $row->displayProperties->hasIcon,
                'completionValue' => $row->completionValue,
                'scope' => $row->scope,
                'locationHash' => $row->locationHash ?? NULL,
                'allowNegativeValue' => $row->allowNegativeValue,
                'allowValueChangeWhenCompleted' => $row->allowValueChangeWhenCompleted,
                'isCountingDownward' => $row->isCountingDownward,
                'valueStyle' => $row->valueStyle,
                'progressDescription' => $row->progressDescription,
                'perks' => isset($row->perks) ? json_encode($row->perks) : NULL,
                'stats' => isset($row->stats) ? json_encode($row->stats) : NULL,
                'minimumVisibilityThreshold' => $row->minimumVisibilityThreshold,
                'allowOvercompletion' => $row->allowOvercompletion,
                'showValueOnComplete' => $row->showValueOnComplete,
                'completedValueStyle' => $row->completedValueStyle,
                'inProgressValueStyle' => $row->inProgressValueStyle,
                'hash' => $row->hash,
                'index' => $row->index,
                'redacted' => $row->redacted,
                'blacklisted' => $row->blacklisted
            ]);
        }
    }
}
