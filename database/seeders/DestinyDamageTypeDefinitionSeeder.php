<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Destiny\MobileWorldContent;

class DestinyDamageTypeDefinitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $db = new MobileWorldContent;
        $table = $db->viewContentTable('DestinyDamageTypeDefinition');
        foreach ($table as $row) {
            DB::table('destiny_damage_type_definitions')->insert([
                'description' => $row->displayProperties->description ?? '',
                'name' => $row->displayProperties->name,
                'icon' => $row->displayProperties->icon ?? NULL,
                'hasIcon' => $row->displayProperties->hasIcon,
                'transparentIconPath' => $row->transparentIconPath ?? NULL,
                'showIcon' => $row->showIcon,
                'enumValue' => $row->enumValue,
                'hash' => $row->hash,
                'index' => $row->index,
                'redacted' => $row->redacted,
                'blacklisted' => $row->blacklisted
            ]);
        }
    }
}
