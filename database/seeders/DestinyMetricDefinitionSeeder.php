<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Destiny\MobileWorldContent;

class DestinyMetricDefinitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $db = new MobileWorldContent;
        $table = $db->viewContentTable('DestinyMetricDefinition');
        foreach ($table as $row) {
            DB::table('destiny_metric_definitions')->insert([
                'description' => $row->displayProperties->description ?? NULL,
                'name' => $row->displayProperties->name ?? NULL,
                'icon' => $row->displayProperties->icon ?? NULL,
                'iconSequences' => json_encode($row->displayProperties->iconSequences),
                'hasIcon' => $row->displayProperties->hasIcon,
                'trackingObjectiveHash' => $row->trackingObjectiveHash,
                'lowerValueIsBetter' => $row->lowerValueIsBetter,
                'presentationNodeType' => $row->presentationNodeType,
                'traitIds' => json_encode($row->traitIds),
                'traitHashes' => json_encode($row->traitHashes),
                'parentNodeHashes' => json_encode($row->parentNodeHashes),
                'hash' => $row->hash,
                'index' => $row->index,
                'redacted' => $row->redacted,
                'blacklisted' => $row->blacklisted
            ]);
        }
    }
}
