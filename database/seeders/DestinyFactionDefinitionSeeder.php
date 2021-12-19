<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Destiny\MobileWorldContent;

class DestinyFactionDefinitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $db = new MobileWorldContent;
        $table = $db->viewContentTable('DestinyFactionDefinition');
        foreach ($table as $row) {
            if ($row->redacted != true) {
                DB::table('destiny_faction_definitions')->insert([
                    'description' => $row->displayProperties->description ?? "",
                    'name' => $row->displayProperties->name ?? "",
                    'icon' => $row->displayProperties->icon ?? "",
                    'hasIcon' => $row->displayProperties->hasIcon,
                    'progressionHash' => $row->progressionHash,
                    'tokenValues' => isset($row->tokenValues) ? json_encode($row->tokenValues) : NULL,
                    'rewardItemHash' => $row->rewardItemHash ?? NULL,
                    'rewardVendorHash' => $row->rewardVendorHash ?? NULL,
                    'vendors' => isset($row->vendors) ? json_encode($row->vendors) : NULL,
                    'hash' => $row->hash,
                    'index' => $row->index,
                    'redacted' => $row->redacted,
                    'blacklisted' => $row->blacklisted
                ]);
            }
        }
    }
}
