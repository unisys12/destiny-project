<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Destiny\MobileWorldContent;

class DestinyGenderDefinitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $db = new MobileWorldContent;
        $table = $db->viewContentTable('DestinyGenderDefinition');

        foreach ($table as $row) {
            DB::table('destiny_gender_definitions')->insert([
                'genderType' => $row->genderType,
                'description' => $row->displayProperties->description,
                'name' => $row->displayProperties->name,
                'hasIcon' => $row->displayProperties->hasIcon,
                'hash' => $row->hash,
                'index' => $row->index,
                'redacted' => $row->redacted,
                'blacklisted' => $row->blacklisted,
            ]);
        }
    }
}
