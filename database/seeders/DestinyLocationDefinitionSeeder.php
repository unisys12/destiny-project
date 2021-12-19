<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Destiny\MobileWorldContent;

class DestinyLocationDefinitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $db = new MobileWorldContent;
        $data = $db->viewContentTable('DestinyLocationDefinition');

        foreach ($data as $row) {
            if (strlen($row->locationReleases[0]->displayProperties->name) > 0) {
                DB::table('destiny_location_definitions')->insert([
                    'vendorHash' => $row->vendorHash,
                    'description' => $row->locationReleases[0]->displayProperties->description ?? "",
                    'name' => $row->locationReleases[0]->displayProperties->name,
                    'icon' => $row->locationReleases[0]->displayProperties->icon ?? "",
                    'smallTransparentIcon' => $row->locationReleases[0]->displayProperties->smallTransparentIcon ?? "",
                    'mapIcon' => $row->locationReleases[0]->displayProperties->mapIcon ?? "",
                    'largeTransparentIcon' => $row->locationReleases[0]->displayProperties->largeTransparentIcon ?? "",
                    'hasIcon' => $row->locationReleases[0]->displayProperties->hasIcon,
                    'spawnPoint' => $row->locationReleases[0]->spawnPoint ?? "",
                    'destinationHash' => $row->locationReleases[0]->destinationHash ?? "",
                    'activityHash' => $row->locationReleases[0]->activityHash ?? "",
                    'activityGraphHash' => $row->locationReleases[0]->activityGraphHash ?? "",
                    'activityGraphNodeHash' => $row->locationReleases[0]->activityGraphNodeHash ?? "",
                    'hash' => $row->hash,
                    'index' => $row->index,
                    'redacted' => $row->redacted,
                    'blacklisted' => $row->blacklisted
                ]);
            }
        }
    }
}
