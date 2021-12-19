<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Destiny\MobileWorldContent;

class DestinyCollectibleDefinitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $db = new MobileWorldContent;
        $table = $db->viewContentTable('DestinyCollectibleDefinition');

        foreach ($table as $row) {
            DB::table('destiny_collectible_definitions')->insert([
                'description' => $row->displayProperties->description,
                'name' => $row->displayProperties->name,
                'icon' => $row->displayProperties->icon ?? NULL,
                'hasIcon' => $row->displayProperties->hasIcon,
                'scope' => $row->scope ?? NULL,
                'sourceString' => $row->sourceString ?? NULL,
                'sourceHash' => $row->sourceHash,
                'itemHash' => $row->itemHash,
                'acquisitionInfo_acquireMaterialRequirementHash' =>
                isset($row->acquisitionInfo->acquireMaterialRequirementHash)
                    ? $row->acquisitionInfo->acquireMaterialRequirementHash : NULL,

                'acquisitionInfo_runOnlyAcquisitionRewardSite' =>
                isset($row->acquisitionInfo->runOnlyAcquisitionRewardSite)
                    ? $row->acquisitionInfo->runOnlyAcquisitionRewardSite : false,

                'stateInfo' => isset($row->stateInfo) ? json_encode($row->stateInfo) : NULL,
                'presentationNodeType' => $row->presentationNodeType,
                'traitIds' => isset($row->traitIds) ? json_encode($row->traitIds) : NULL,
                'traitHashes' => isset($row->traitHashes) ? json_encode($row->traitHashes) : NULL,
                'parentNodeHashes' => isset($row->parentNodeHashes) ? json_encode($row->parentNodeHashes) : NULL,
                'hash' => $row->hash,
                'index' => $row->index,
                'redacted' => $row->redacted,
                'blacklisted' => $row->blacklisted
            ]);
        }
    }
}
