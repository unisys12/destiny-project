<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Destiny\MobileWorldContent;

class DestinyPlaceDefinitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $db = new MobileWorldContent;
        $table = $db->viewContentTable('DestinyPlaceDefinition');

        foreach ($table as $row) {
            DB::table('destiny_place_definitions')->insert([
                'description' => $row->displayProperties->description ?? "",
                'name' => $row->displayProperties->name,
                'icon' => $row->displayProperties->icon,
                'hasIcon' => $row->displayProperties->hasIcon,
                'hash' => $row->hash,
                'index' => $row->index,
                'redacted' => $row->redacted,
                'blacklisted' => $row->blacklisted
            ]);
        }
    }
}
