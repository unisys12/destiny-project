<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Destiny\MobileWorldContent;

class DestinyEquipmentSlotDefinitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $db = new MobileWorldContent;
        $table = $db->viewContentTable('DestinyEquipmentSlotDefinition');
        foreach ($table as $row) {
            DB::table('destiny_equipment_slot_definitions')->insert([
                'description' => $row->displayProperties->description ?? NULL,
                'name' => $row->displayProperties->name ?? NULL,
                'hasIcon' => $row->displayProperties->hasIcon,
                'equipmentCategoryHash' => $row->equipmentCategoryHash,
                'bucketTypeHash' => $row->bucketTypeHash,
                'applyCustomArtDyes' => $row->applyCustomArtDyes,
                'artDyeChannels' => json_encode($row->artDyeChannels),
                'hash' => $row->hash,
                'index' => $row->index,
                'redacted' => $row->redacted,
                'blacklisted' => $row->blacklisted
            ]);
        }
    }
}
