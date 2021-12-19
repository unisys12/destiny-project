<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Destiny\MobileWorldContent;

class DestinyInventoryBucketDefinitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $db = new MobileWorldContent;
        $table = $db->viewContentTable('DestinyInventoryBucketDefinition');
        foreach ($table as $row) {
            DB::table('destiny_inventory_bucket_definitions')->insert([
                'description' => $row->displayProperties->description ?? "",
                'name' => $row->displayProperties->name ?? "",
                'hasIcon' => $row->displayProperties->hasIcon,
                'scope' => $row->scope,
                'category' => $row->category,
                'bucketOrder' => $row->bucketOrder,
                'itemCount' => $row->itemCount,
                'location' => $row->location,
                'hasTransferDestination' => $row->hasTransferDestination,
                'enabled' => $row->enabled,
                'fifo' => $row->fifo,
                'hash' => $row->hash,
                'index' => $row->index,
                'redacted' => $row->redacted,
                'blacklisted' => $row->blacklisted
            ]);
        }
    }
}
