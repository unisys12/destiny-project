<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Destiny\MobileWorldContent;

class DestinySandboxPerkDefinitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $content = new MobileWorldContent;
        $table = $content->viewContentTable('DestinySandboxPerkDefinition');

        foreach ($table as $row) {
            if (isset($row->displayProperties->name) && strlen($row->displayProperties->name) > 0) {
                DB::table('destiny_sandbox_perk_definitions')->insert([
                    'description' => $row->displayProperties->description ?? "",
                    'name' => $row->displayProperties->name ?? "",
                    'icon' => $row->displayProperties->icon ?? "",
                    'hasIcon' => $row->displayProperties->hasIcon,
                    'perkIdentifier' => $row->perkIdentifier ?? "",
                    'isDisplayable' => $row->isDisplayable,
                    'damageTypeHash' => isset($row->damageTypeHash) ? $row->damageTypeHash : 0, // always 0?
                    'hash' => $row->hash,
                    'index' => $row->index,
                    'redacted' => $row->redacted,
                    'blacklisted' => $row->blacklisted
                ]);
            }
        }
    }
}
