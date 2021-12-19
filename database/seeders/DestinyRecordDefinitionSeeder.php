<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Destiny\MobileWorldContent;

class DestinyRecordDefinitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $db = new MobileWorldContent;
        $table = $db->viewContentTable('DestinyRecordDefinition');

        foreach ($table as $row) {
            DB::table('destiny_record_definitions')->insertOrIgnore([
                'description' => $row->displayProperties->description ?? "",
                'name' => $row->displayProperties->name,
                'icon' => $row->displayProperties->icon ?? "",
                'hasIcon' => $row->displayProperties->hasIcon,
                'scope' => $row->scope,
                'objectiveHashes' => isset($row->objectiveHashes) ? json_encode($row->objectiveHashes) : NULL,
                // 'recordValueStyle' => $row->recordValueStyle,
                'forTitleGilding' => $row->forTitleGilding,
                'titleInfo' => isset($row->titleInfo) ? json_encode($row->titleInfo) : NULL,
                'completionInfo' => isset($row->completionInfo) ? json_encode($row->completionInfo) : NULL,
                'stateInfo' => isset($row->stateInfo) ? json_encode($row->stateInfo) : NULL,
                'requirements' => isset($row->requirements) ? json_encode($row->requirements) : NULL,
                'expirationInfo' => isset($row->expirationInfo) ? json_encode($row->expirationInfo) : NULL,
                'intervalInfo' => isset($row->intervalInfo) ? json_encode($row->intervalInfo) : NULL,
                'rewardItems' => isset($row->rewardItems) ? json_encode($row->rewardItems) : NULL,
                // 'anyRewardHasConditionalVisibility' => $row->anyRewardHasConditionalVisibility, // always false
                'presentationNodeType' => $row->presentationNodeType,
                // 'traitIds' => isset($row->traitIds) ? json_encode($row->traitIds) : [],
                // 'traitHashes' => isset($row->traitHashes) ? json_encode($row->traitHashes) : [],
                'parentNodeHashes' => isset($row->parentNodeHashes) ? json_encode($row->parentNodeHashes) : NULL,
                'hash' => $row->hash,
                'index' => $row->index,
                'redacted' => $row->redacted,
                'blacklisted' => $row->blacklisted
            ]);
        }
    }
}
