<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Destiny\MobileWorldContent;

class DestinyProgressionLevelRequirementDefinitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $db = new MobileWorldContent;
        $table = $db->viewContentTable('DestinyProgressionLevelRequirementDefinition');
        foreach ($table as $row) {
            DB::table('destiny_progression_level_requirement_definitions')->insert([
                'requirementCurve' => isset($row->requirementCurve)
                    ? json_encode($row->requirementCurve)
                    : NULL,
                'progressionHash' => $row->progressionHash ?? NULL,
                'hash' => $row->hash,
                'index' => $row->index,
                'redacted' => $row->redacted,
                'blacklisted' => $row->blacklisted
            ]);
        }
    }
}
