<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Destiny\MobileWorldContent;

class DestinyClassDefinitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $db = new MobileWorldContent;
        $table = $db->viewContentTable('DestinyClassDefinition');

        foreach ($table as $row) {
            DB::table('destiny_class_definitions')->insert([
                'classType' => $row->classType,
                'name' => $row->displayProperties->name,
                'hasIcon' => $row->displayProperties->hasIcon,
                'hash' => $row->hash,
                'index' => $row->index
            ]);
        }
    }
}
