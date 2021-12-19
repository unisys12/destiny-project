<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Carbon\Carbon as CarbonCarbon;
use Illuminate\Support\Facades\DB;
use App\Destiny\MobileWorldContent;
use Illuminate\Support\Facades\Storage;

class DestinyStatDefinitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $content = new MobileWorldContent;
        $parsedContent = $content->viewContentTable('DestinyStatDefinition');

        foreach ($parsedContent as $value) {
            if (strlen($value->displayProperties->name) > 0) {
                DB::table('destiny_stat_definitions')->insert([
                    'description' => $value->displayProperties->description,
                    'name' => $value->displayProperties->name,
                    'icon' => $value->displayProperties->icon ?? "",
                    'hasIcon' => $value->displayProperties->hasIcon,
                    'aggregationType' => $value->aggregationType,
                    'hasComputedBlock' => $value->hasComputedBlock,
                    'statCategory' => $value->statCategory,
                    'interpolate' => $value->interpolate,
                    'hash' => $value->hash,
                    'created_at' => Carbon::now(),
                ]);
            }
        }
    }
}
