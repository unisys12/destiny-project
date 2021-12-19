<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Destiny\MobileWorldContent;

class DestinyLoreDefinitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $db = new MobileWorldContent;
        $table = $db->viewContentTable('DestinyCollectibleDefinition');

        foreach ($table as $row) {
            if ($row->redacted != true) {
                if (isset($row->subtitle)) {
                    $this->command->line($row->subtitle);
                }
                DB::table('destiny_lore_definitions')->insert([
                    'description' => $row->displayProperties->description,
                    'name' => $row->displayProperties->name,
                    'icon' => $row->displayProperties->icon ?? NULL,
                    'hasIcon' => $row->displayProperties->hasIcon,
                    'subtitle' => isset($row->subtitle) ? $row->subtitle : NULL,
                    'hash' => $row->hash,
                    'index' => $row->index,
                    'redacted' => $row->redacted,
                    'blacklisted' => $row->blacklisted
                ]);
            }
        }
    }
}
