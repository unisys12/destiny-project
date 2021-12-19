<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Destiny\MobileWorldContent;
use Illuminate\Console\Command;

class DestinySocketTypeDefinitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $db = new MobileWorldContent;
        $table = $db->viewContentTable('DestinySocketTypeDefinition');
        foreach ($table as $row) {
            DB::table('destiny_socket_type_definitions')->insert([
                'description' => $row->displayProperties->description ?? NULL,
                'name' => $row->displayProperties->name ?? NULL,
                'icon' => $row->displayProperties->icon ?? NULL,
                'iconSequences' => isset($row->displayProperties->iconSequences) ? json_encode($row->displayProperties->iconSequences) : NULL,
                'highResIcon' => $row->displayProperties->highResIcon ?? NULL,
                'hasIcon' => $row->displayProperties->hasIcon ?? NULL,
                'insertAction' => isset($row->insertAction) ? json_encode($row->insertAction) : NULL,
                'plugWhitelist' => isset($row->plugWhitelist) ? json_encode($row->plugWhitelist) : NULL,
                'socketCategoryHash' => $row->socketCategoryHash ?? NULL,
                'visibility' => $row->visibility ?? NULL,
                'alwaysRandomizeSockets' => $row->alwaysRandomizeSockets,
                'isPreviewEnabled' => $row->isPreviewEnabled,
                'hideDuplicateReusablePlugs' => $row->hideDuplicateReusablePlugs,
                'overridesUiAppearance' => $row->overridesUiAppearance,
                'avoidDuplicatesOnInitialization' => $row->avoidDuplicatesOnInitialization,
                'currencyScalars' => isset($row->currencyScalars) ? json_encode($row->currencyScalars) : NULL,
                'hash' => $row->hash,
                'index' => $row->index,
                'redacted' => $row->redacted,
                'blacklisted' => $row->blacklisted
            ]);
        }
    }
}
