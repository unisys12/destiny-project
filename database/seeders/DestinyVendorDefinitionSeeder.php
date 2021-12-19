<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Destiny\MobileWorldContent;

class DestinyVendorDefinitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $db = new MobileWorldContent;
        $table = $db->viewContentTable('DestinyVendorDefinition');
        foreach ($table as $row) {
            if ($row->redacted != true || $row->blacklisted != true) {
                DB::table('destiny_vendor_definitions')->insert([
                    'largeIcon' => $row->displayProperties->largeIcon ?? NULL,
                    'subtitle' => $row->displayProperties->subtitle ?? NULL,
                    'originalIcon' => $row->displayProperties->originalIcon ?? NULL,
                    'requirementsDisplay' => isset($row->displayProperties->requirementsDisplay) ? json_encode($row->displayProperties->requirementsDisplay) : NULL,
                    'smallTransparentIcon' => $row->displayProperties->smallTransparentIcon ?? NULL,
                    'mapIcon' => $row->displayProperties->mapIcon ?? NULL,
                    'largeTransparentIcon' => $row->displayProperties->largeTransparentIcon ?? NULL,
                    'description' => $row->displayProperties->description ?? NULL,
                    'name' => $row->displayProperties->name ?? NULL,
                    'icon' => $row->displayProperties->icon ?? NULL,
                    'iconSequences' => isset($row->displayProperties->iconSequences) ? json_encode($row->displayProperties->iconSequences) : NULL,
                    'highResIcon' => $row->displayProperties->highResIcon ?? NULL,
                    'hasIcon' => $row->displayProperties->hasIcon ?? NULL,
                    'vendorProgressionType' => $row->vendorProgressionType,
                    'buyString' => $row->buyString ?? NULL,
                    'sellString' => $row->sellString ?? NULL,
                    'displayItemHash' => $row->displayItemHash ?? NULL,
                    'inhibitBuying' => $row->inhibitBuying,
                    'inhibitSelling' => $row->inhibitSelling,
                    'factionHash' => $row->factionHash ?? NULL,
                    'resetIntervalMinutes' => $row->resetIntervalMinutes,
                    'resetOffsetMinutes' => $row->resetOffsetMinutes,
                    'failureStrings' => isset($row->failureStrings) ? json_encode($row->failureStrings) : NULL,
                    'unlockRanges' => isset($row->unlockRanges) ? json_encode($row->unlockRanges) : NULL,
                    'vendorIdentifier' => $row->vendorIdentifier ?? NULL,
                    'vendorPortrait' => $row->vendorPortrait ?? NULL,
                    'vendorBanner' => $row->vendorBanner ?? NULL,
                    'enabled' => $row->enabled,
                    'visible' => $row->visible,
                    'vendorSubcategoryIdentifier' => $row->vendorSubcategoryIdentifier ?? NULL,
                    'consolidateCategories' => $row->consolidateCategories,
                    'actions' => isset($row->actions) ? json_encode($row->actions) : NULL,
                    'categories' => isset($row->categories) ? json_encode($row->categories) : NULL,
                    'originalCategories' => isset($row->originalCategories) ? json_encode($row->originalCategories) : NULL,
                    'displayCategories' => isset($row->displayCategories) ? json_encode($row->displayCategories) : NULL,
                    'interactions' => isset($row->interactions) ? json_encode($row->interactions) : NULL,
                    'inventoryFlyouts' => isset($row->inventoryFlyouts) ? json_encode($row->inventoryFlyouts) : NULL,
                    'itemList' => isset($row->itemList) ? json_encode($row->itemList) : NULL,
                    'services' => isset($row->services) ? json_encode($row->services) : NULL,
                    'acceptedItems' => isset($row->acceptedItems) ? json_encode($row->acceptedItems) : NULL,
                    'returnWithVendorRequest' => $row->returnWithVendorRequest,
                    'locations' => isset($row->locations) ? json_encode($row->locations) : NULL,
                    'groups' => isset($row->groups) ? json_encode($row->groups) : NULL,
                    'ignoreSaleItemHashes' => isset($row->ignoreSaleItemHashes) ? json_encode($row->ignoreSaleItemHashes) : NULL,
                    'hash' => $row->hash,
                    'index' => $row->index,
                    'redacted' => $row->redacted,
                    'blacklisted' => $row->blacklisted
                ]);
            }
        }
    }
}
