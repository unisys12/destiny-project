<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Destiny\MobileWorldContent;

class DestinyActivityModeDefinitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $db = new MobileWorldContent;
        $table = $db->viewContentTable('DestinyActivityModeDefinition');
        foreach ($table as $row) {
            DB::table('destiny_activity_mode_definitions')->insert([
                'description' => $row->displayProperties->description ?? NULL,
                'name' => $row->displayProperties->name ?? NULL,
                'icon' => $row->displayProperties->icon ?? NULL,
                'hasIcon' => $row->displayProperties->hasIcon,
                'pgcrImage' => $row->pgcrImage ?? NULL,
                'modeType' => $row->modeType,
                'activityModeCategory' => $row->activityModeCategory,
                'isTeamBased' => $row->isTeamBased,
                'isAggregateMode' => $row->isAggregateMode,
                'parentHashes' => isset($row->parentHashes)
                    ? json_encode($row->parentHashes)
                    : NULL,
                'friendlyName' => $row->friendlyName ?? NULL,
                'activityModeMappings' => isset($row->activityModeMappings)
                    ? json_encode($row->activityModeMappings)
                    : NULL,
                'display' => $row->display,
                'order' => $row->order,
                'hash' => $row->hash,
                'index' => $row->index,
                'redacted' => $row->redacted,
                'blacklisted' => $row->blacklisted
            ]);
        }
    }
}
