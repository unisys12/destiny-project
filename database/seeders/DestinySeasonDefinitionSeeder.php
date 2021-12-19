<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Destiny\MobileWorldContent;
use DateTime;

class DestinySeasonDefinitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $db = new MobileWorldContent;
        $table = $db->viewContentTable('DestinySeasonDefinition');
        foreach ($table as $row) {
            if ($row->redacted != true || $row->blacklisted != true) {
                DB::table('destiny_season_definitions')->insert([
                    'description' => $row->displayProperties->description ?? NULL,
                    'name' => $row->displayProperties->name ?? NULL,
                    'icon' => $row->displayProperties->icon ?? NULL,
                    'iconSequences' => isset($row->displayProperties->iconSequences) ? json_encode($row->displayProperties->iconSequences) : NULL,
                    'highResIcon' => isset($row->displayProperties->highResIcon) ? $row->displayProperties->highResIcon : NULL,
                    'hasIcon' => $row->displayProperties->hasIcon ?? NULL,
                    'backgroundImagePath' => $row->backgroundImagePath ?? NULL,
                    'seasonNumber' => $row->seasonNumber ?? NULL,
                    'startDate' => isset($row->startDate) ? $row->startDate : NULL,
                    'endDate' => isset($row->endDate) ? $row->endDate : NULL,
                    'seasonPassHash' => $row->seasonPassHash ?? NULL,
                    'seasonPassProgressionHash' => $row->seasonPassProgressionHash ?? NULL,
                    'artifactItemHash' => $row->artifactItemHash ?? NULL,
                    'sealPresentationNodeHash' => $row->sealPresentationNodeHash ?? NULL,
                    'seasonalChallengesPresentationNodeHash' => $row->seasonalChallengesPresentationNodeHash ?? NULL,
                    'preview' => isset($row->preview) ? json_encode($row->preview) : NULL,
                    'hash' => $row->hash,
                    'index' => $row->index,
                    'redacted' => $row->redacted,
                    'blacklisted' => $row->blacklisted
                ]);
            }
        }
    }
}
