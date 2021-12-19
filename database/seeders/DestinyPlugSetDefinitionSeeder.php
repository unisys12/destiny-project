<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Destiny\MobileWorldContent;

class DestinyPlugSetDefinitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $db = new MobileWorldContent;
        $table = $db->viewContentTable('DestinyPlugSetDefinition');
        foreach ($table as $row) {
            DB::table('destiny_plug_set_definitions')->insert([
                'description' => $row->displayProperties->description ?? NULL,
                'name' => $row->displayProperties->name ?? NULL,
                'hasIcon' => isset($row->displayProperties->hasIcon) ? $row->displayProperties->hasIcon : NULL,
                'reusablePlugItems' => isset($row->reusablePlugItems) ? json_encode($row->reusablePlugItems) : NULL,
                'isFakePlugSet' => $row->isFakePlugSet,
                'hash' => $row->hash,
                'index' => $row->index,
                'redacted' => $row->redacted,
                'blacklisted' => $row->blacklisted
            ]);
        }
    }
}
