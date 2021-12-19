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
                    'loreHash' => $row->loreHash ?? null,
                    // 'itemCategoryHashes' => $row->itemCategoryHashes ?? "",
                    'classType' => $row->classType ?? "",
                    'breakerType' => $row->breakerType ?? null,
                    'breakerTypeHash' => $row->breakerTypeHash ?? null,
                    'equippable' => $row->equippable,
                    'seasonHash' => $row->seasonHash ?? null,
                    'hash' => $row->hash
                ]);
            }
        }
    }
}
