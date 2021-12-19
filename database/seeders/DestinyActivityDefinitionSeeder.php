<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Destiny\MobileWorldContent;

class DestinyActivityDefinitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $db = new MobileWorldContent;
        $table = $db->viewContentTable('DestinyActivityDefinition');

        foreach ($table as $row) {
            if (strlen($row->displayProperties->name) > 0 && $row->redacted != true) {
                DB::table('destiny_activity_definitions')->insert([
                    'description' => $row->displayProperties->description ?? "",
                    'name' => $row->displayProperties->name ?? "",
                    'icon' => $row->displayProperties->icon ?? "",
                    'hasIcon' => $row->displayProperties->hasIcon,
                    'releaseIcon' => $row->releaseIcon ?? "",
                    'releaseTime' => $row->releaseTime,
                    'completionUnlockHash' => $row->completionUnlockHash,
                    'activityLightLevel' => $row->activityLightLevel,
                    'destinationHash' => $row->destinationHash,
                    'placeHash' => $row->placeHash,
                    'activityTypeHash' => $row->activityTypeHash,
                    'tier' => $row->tier,
                    'pgcrImage' => $row->pgcrImage ?? "",
                    'rewards' => isset($row->rewards) ? json_encode($row->rewards) : [],
                    'modifiers' => isset($row->modifiers) ? json_encode($row->modifiers) : [],
                    'isPlaylist' => $row->isPlaylist,
                    'challenges' => isset($row->challenges) ? json_encode($row->challenges) : [],
                    'optionalUnlockStrings' => isset($row->optionalUnlockStrings) ? json_encode($row->optionalUnlockStrings) : [],
                    'inheritFromFreeRoam' => $row->inheritFromFreeRoam,
                    'suppressOtherRewards' => $row->suppressOtherRewards,
                    'playlistItems' => isset($row->playlistItems) ? json_encode($row->playlistItems) : [],
                    'isMatchmade' => $row->matchmaking->isMatchmade ?? "",
                    'matchmaking' => isset($row->matchmaking) ? json_encode($row->matchmaking) : [],
                    'isPvP' => $row->isPvP,
                    'insertionPoints' => isset($row->insertionPoints) ? json_encode($row->insertionPoints) : [],
                    'activityLocationMappings' => isset($row->activityLocationMappings) ? json_encode($row->activityLocationMappings) : [],
                    'hash' => $row->hash,
                    'index' => $row->index,
                    'redacted' => $row->redacted,
                    'blacklisted' => $row->blacklisted
                ]);
            }
        }
    }
}
