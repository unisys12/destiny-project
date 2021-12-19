<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Destiny\MobileWorldContent;

class DestinyMilestoneDefinitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $db = new MobileWorldContent;
        $table = $db->viewContentTable('DestinyMilestoneDefinition');
        foreach ($table as $row) {
            if ($row->redacted != true || $row->blacklisted != true) {
                DB::table('destiny_milestone_definitions')->insert([
                    'description' => $row->displayProperties->description ?? NULL,
                    'name' => $row->displayProperties->name ?? NULL,
                    'icon' => $row->displayProperties->icon ?? NULL,
                    'iconSequences' => isset($row->displayProperties->iconSequences) ? json_encode($row->displayProperties->iconSequences) : NULL,
                    'hasIcon' => $row->displayProperties->hasIcon ?? NULL,
                    'highResIcon' => $row->displayProperties->highResIcon ?? NULL,
                    'image' => $row->image ?? NULL,
                    'milestoneType' => $row->milestoneType ?? NULL,
                    'recruitable' => $row->recruitable,
                    'friendlyName' => $row->friendlyName ?? NULL,
                    'showInExplorer' => $row->showInExplorer,
                    'showInMilestones' => $row->showInMilestones,
                    'explorePrioritizesActivityImage' => $row->explorePrioritizesActivityImage,
                    'hasPredictableDates' => $row->hasPredictableDates,
                    'quests' => isset($row->quests) ? json_encode($row->quests) : NULL,
                    'rewards' => isset($row->rewards) ? json_encode($row->rewards) : NULL,
                    'vendorsDisplayTitle' => $row->vendorsDisplayTitle ?? NULL,
                    'vendors' => isset($row->vendors) ? json_encode($row->vendors) : NULL,
                    'values' => isset($row->values) ? json_encode($row->values) : NULL,
                    'isInGameMilestone' => $row->isInGameMilestone,
                    'activities' => isset($row->activities) ? json_encode($row->activities) : NULL,
                    'defaultOrder' => $row->defaultOrder,
                    'hash' => $row->hash,
                    'index' => $row->index,
                    'redacted' => $row->redacted,
                    'blacklisted' => $row->blacklisted
                ]);
            }
        }
    }
}
