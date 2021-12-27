<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Destiny\MobileWorldContent;

class DestinyInventoryItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $db = new MobileWorldContent;
        $data = $db->viewContentTable('DestinyInventoryItemDefinition');

        foreach ($data as $row) {
            if (strlen($row->displayProperties->name) > 0) {
                DB::table('destiny_inventory_item_definitions')->insert([
                    'description' => $row->displayProperties->description,
                    'name' => $row->displayProperties->name,
                    'icon' => $row->displayProperties->icon ?? "",
                    'hasIcon' => $row->displayProperties->hasIcon,
                    'collectibleHash' => $row->collectibleHash ?? null,
                    'iconWatermark' => $row->iconWatermark ?? "",
                    'iconWatermarkShelved' => $row->iconWatermarkShelved ?? "",
                    'secondaryIcon' => $row->secondaryIcon ?? "",
                    'screenshot' => $row->screenshot ?? "",
                    'itemTypeDisplayName' => $row->itemTypeDisplayName ?? "",
                    'flavorText' => $row->flavorText ?? "",
                    'uiItemDisplayStyle' => $row->uiItemDisplayStyle ?? "",
                    'itemTypeAndTierDisplayName' => $row->itemTypeAndTierDisplayName ?? "",
                    'displaySource' => $row->displaySource ?? "",
                    'inventory' => isset($row->inventory) ? json_encode($row->inventory) : NULL,
                    'setData' => isset($row->setData) ? json_encode($row->setData) : NULL,
                    'stats' => isset($row->stats) ? json_encode($row->stats) : NULL,
                    'emblemObjectiveHash' => $row->emblemObjectiveHash ?? NULL,
                    'equippingBlock' => isset($row->equippingBlock) ? json_encode($row->equippingBlock) : NULL,
                    'preview' => isset($row->preview) ? json_encode($row->preview) : NULL,
                    'quality' => isset($row->quality) ? json_encode($row->quality) : NULL,
                    'sourceData' => isset($row->sourceData) ? json_encode($row->sourceData) : NULL,
                    'objectives' => isset($row->objectives) ? json_encode($row->objectives) : NULL,
                    'metrics' => isset($row->metrics) ? json_encode($row->metrics) : NULL,
                    'gearset' => isset($row->gearset) ? json_encode($row->gearset) : NULL,
                    'sack' => isset($row->sack) ? json_encode($row->sack) : NULL,
                    'sockets' => isset($row->sockets) ? json_encode($row->sockets) : NULL,
                    'summary' => isset($row->summary) ? json_encode($row->summary) : NULL,
                    'talentGrid' => isset($row->talentGrid) ? json_encode($row->talentGrid) : NULL,
                    'investmentStats' => isset($row->investmentStats) ? json_encode($row->investmentStats) : NULL,
                    'perks' => isset($row->perks) ? json_encode($row->perks) : NULL,
                    'loreHash' => $row->loreHash ?? null,
                    'summaryItemHash' => $row->summaryItemHash ?? NULL,
                    'animations' => isset($row->animations) ? json_encode($row->animations) : NULL,
                    'links' => isset($row->links) ? json_encode($row->links) : NULL,
                    'doesPostmasterPullHaveSideEffects' => $row->doesPostmasterPullHaveSideEffects,
                    'itemCategoryHashes' => isset($row->itemCategoryHashes) ? json_encode($row->itemCategoryHashes) : NULL,
                    'itemType' => $row->itemType ?? NULL,
                    'itemSubType' => $row->itemSubType ?? NULL,
                    'classType' => $row->classType ?? "",
                    'breakerType' => $row->breakerType ?? null,
                    'breakerTypeHash' => $row->breakerTypeHash ?? null,
                    'equippable' => $row->equippable,
                    'damageTypeHashes' => isset($row->damageTypeHashes) ? json_encode($row->damageTypeHashes) : NULL,
                    'damageTypes' => isset($row->damageTypes) ? json_encode($row->damageTypes) : NULL,
                    'defaultDamageType' => $row->defaultDamageType ?? NULL,
                    'defaultDamageTypeHash' => $row->defaultDamageTypeHash ?? NULL,
                    'seasonHash' => $row->seasonHash ?? null,
                    'isWrapper' => $row->isWrapper,
                    'traitIds' => isset($row->traitIds) ? json_encode($row->traitIds) : NULL,
                    'traitHashes' => isset($row->traitHashes) ? json_encode($row->traitHashes) : NULL,
                    'hash' => $row->hash
                ]);
            }
        }
    }
}
