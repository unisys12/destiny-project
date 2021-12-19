<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Destiny\MobileWorldContent;

class DestinyItemCategoryDefinitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $db = new MobileWorldContent;
        $table = $db->viewContentTable('DestinyItemCategoryDefinition');
        foreach ($table as $row) {
            DB::table('destiny_item_category_definitions')->insert([
                'description' => $row->displayProperties->description ?? '',
                'name' => $row->displayProperties->name,
                'hasIcon' => $row->displayProperties->hasIcon,
                'visible' => $row->visible,
                'deprecated' => $row->deprecated,
                'shortTitle' => $row->shortTitle,
                'itemTypeRegex' => $row->itemTypeRegex ?? NULL,
                'grantDestinyBreakerType' => $row->grantDestinyBreakerType ?? NULL,
                'plugCategoryIdentifier' => $row->plugCategoryIdentifier ?? NULL,
                'itemTypeRegexNot' => $row->itemTypeRegexNot ?? NULL,
                'originBucketIdentifier' => $row->originBucketIdentifier ?? NULL,
                'grantDestinyItemType' => $row->grantDestinyItemType ?? NULL,
                'grantDestinyClass' => $row->grantDestinyClass ?? NULL,
                'grantDestinySubType' => $row->grantDestinySubType ?? NULL,
                'groupedCategoryHashes' => isset($row->groupedCategoryHashes) ? json_encode($row->groupedCategoryHashes) : NULL,
                'parentCategoryHashes' => isset($row->parentCategoryHashes) ? json_encode($row->parentCategoryHashes) : NULL,
                'groupCategoryOnly' => $row->groupCategoryOnly,
                'traitId' => $row->traitId ?? NULL,
                'hash' => $row->hash,
                'index' => $row->index,
                'redacted' => $row->redacted,
                'blacklisted' => $row->blacklisted
            ]);
        }
    }
}
