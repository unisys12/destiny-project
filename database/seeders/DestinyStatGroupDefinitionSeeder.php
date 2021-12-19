<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Destiny\MobileWorldContent;

class DestinyStatGroupDefinitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $db = new MobileWorldContent;
        $table = $db->viewContentTable('DestinyStatGroupDefinition');
        foreach ($table as $row) {
            DB::table('destiny_stat_group_definitions')->insert([
                'maximumValue' => $row->maximumValue,
                'uiPosition' => $row->uiPosition,
                'scaledStats' => isset($row->scaledStats) ? json_encode($row->scaledStats) : NULL,
                'hash' => $row->hash,
                'index' => $row->index,
                'redacted' => $row->redacted,
                'blacklisted' => $row->blacklisted
            ]);
        }
    }
}
