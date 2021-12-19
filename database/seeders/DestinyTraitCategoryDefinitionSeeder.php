<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Destiny\MobileWorldContent;

class DestinyTraitCategoryDefinitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $db = new MobileWorldContent;
        $table = $db->viewContentTable('DestinyTraitCategoryDefinition');
        foreach ($table as $row) {
            if ($row->redacted != true || $row->blacklisted != true) {
                DB::table('destiny_trait_category_definitions')->insert([
                    'traitCategoryId' => $row->traitCategoryId,
                    'traitHashes' => json_encode($row->traitHashes),
                    'traitIds' => json_encode($row->traitIds),
                    'hash' => $row->hash,
                    'index' => $row->index,
                    'redacted' => $row->redacted,
                    'blacklisted' => $row->blacklisted
                ]);
            }
        }
    }
}
