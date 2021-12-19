<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Destiny\MobileWorldContent;

class DestinyAchievementDefinitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $db = new MobileWorldContent;
        $table = $db->viewContentTable('DestinyAchievementDefinition');
        foreach ($table as $row) {
            DB::table('destiny_achievement_definitions')->insert([
                'description' => $row->displayProperties->description ?? NULL,
                'name' => $row->displayProperties->name ?? NULL,
                'hasIcon' => $row->displayProperties->hasIcon,
                'acccumulatorThreshold' => $row->acccumulatorThreshold,
                'platformIndex' => $row->platformIndex,
                'hash' => $row->hash,
                'index' => $row->index,
                'redacted' => $row->redacted,
                'blacklisted' => $row->blacklisted
            ]);
        }
    }
}
