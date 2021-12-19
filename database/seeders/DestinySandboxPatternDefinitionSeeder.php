<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Destiny\MobileWorldContent;

class DestinySandboxPatternDefinitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $db = new MobileWorldContent;
        $table = $db->viewContentTable('DestinySandboxPatternDefinition');
        foreach ($table as $row) {
            DB::table('destiny_sandbox_pattern_definitions')->insert([
                'patternHash' => $row->patternHash ?? NULL,
                'patternGlobalTagIdHash' => $row->patternGlobalTagIdHash ?? NULL,
                'weaponContentGroupHash' => $row->weaponContentGroupHash ?? NULL,
                'weaponTranslationGroupHash' => $row->weaponTranslationGroupHash ?? NULL,
                'weaponTypeHash' => $row->weaponTypeHash ?? NULL,
                'weaponType' => $row->weaponType ?? NULL,
                'filters' => isset($row->filters) ? json_encode($row->filters) : NULL,
                'hash' => $row->hash,
                'index' => $row->index,
                'redacted' => $row->redacted,
                'blacklisted' => $row->blacklisted
            ]);
        }
    }
}
