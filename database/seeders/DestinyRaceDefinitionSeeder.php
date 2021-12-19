<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Destiny\MobileWorldContent;

class DestinyRaceDefinitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $db = new MobileWorldContent;
        $table = $db->viewContentTable('DestinyRaceDefinition');

        foreach ($table as $row) {
            DB::table('destiny_race_definitions')->insert([
                'description' => $row->displayProperties->description,
                'name' => $row->displayProperties->name,
                'hasIcon' => $row->displayProperties->hasIcon,
                'raceType' => $row->raceType,
                'genderedRaceNames' => json_encode($row->genderedRaceNames),
                'genderedRaceNamesByGenderHash' => json_encode($row->genderedRaceNamesByGenderHash),
                'hash' => $row->hash,
                'index' => $row->index,
                'redacted' => $row->redacted,
                'blacklisted' => $row->blacklisted,
            ]);
        }
    }
}
