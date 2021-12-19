<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Destiny\MobileWorldContent;

class DestinyNodeStepSummaryDefinitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $db = new MobileWorldContent;
        $table = $db->viewContentTable('DestinyNodeStepSummaryDefinition');

        dd($table);

        foreach ($table as $row) {
            DB::table('destiny_node_step_summary_definitions')->insert([
                'nodeStepHash' => $row->nodeStepHash,
                'description' => $row->displayProperties->description ?? "",
                'name' => $row->displayProperties->name,
                'icon' => $row->displayProperties->icon,
                'hasIcon' => $row->displayProperties->hasIcon,
                'perkHashes' => json_encode($row->perkHashes),
                'statHashes' => json_encode($row->statHashes),
                'affectsQuality' => $row->affectsQuality,
                'hash' => $row->hash,
                'index' => $row->index,
                'redacted' => $row->redacted,
                'blacklisted' => $row->blacklisted
            ]);
        }
    }
}
