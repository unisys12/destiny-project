<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Destiny\MobileWorldContent;

class DestinyPresentationNodeDefinitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $db = new MobileWorldContent;
        $table = $db->viewContentTable('DestinyPresentationNodeDefinition');
        foreach ($table as $row) {
            DB::table('destiny_presentation_node_definitions')->insert([
                'description' => $row->displayProperties->description ?? NULL,
                'name' => $row->displayProperties->name ?? NULL,
                'icon' => $row->displayProperties->icon ?? NULL,
                'iconSequences' => isset($row->displayProperties->iconSequences)
                    ? json_encode($row->displayProperties->iconSequences)
                    : NULL,
                'hasIcon' => $row->displayProperties->hasIcon,
                'originalIcon' => $row->originalIcon ?? NULL,
                'rootViewIcon' => $row->rootViewIcon ?? NULL,
                'nodeType' => $row->nodeType,
                'scope' => $row->scope,
                'objectiveHash' => $row->objectiveHash ?? NULL,
                'completionRecordHash' => $row->completionRecordHash ?? NULL,
                'children' => isset($row->children) ? json_encode($row->children) : NULL,
                'displayStyle' => $row->displayStyle,
                'screenStyle' => $row->screenStyle,
                'requirements' => isset($row->requirements) ? json_encode($row->requirements) : NULL,
                'disableChildSubscreenNavigation' => $row->disableChildSubscreenNavigation,
                'maxCategoryRecordScore' => $row->maxCategoryRecordScore,
                'presentationNodeType' => $row->presentationNodeType,
                'hash' => $row->hash,
                'index' => $row->index,
                'redacted' => $row->redacted,
                'blacklisted' => $row->blacklisted
            ]);
        }
    }
}
