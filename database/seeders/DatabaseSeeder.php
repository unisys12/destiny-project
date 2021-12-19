<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            DestinyStatDefinitionSeeder::class,
            DestinyClassDefinitionSeeder::class,
            DestinyPlaceDefinitionSeeder::class,
            DestinyDestinationDefinitionSeeder::class,
            DestinyLocationDefinitionSeeder::class,
            DestinyActivityTypeDefinitionSeeder::class,
            DestinyActivityDefinitionSeeder::class,
            DestinyInventoryBucketDefinitionSeeder::class,
            DestinyGenderDefinitionSeeder::class,
            DestinyRaceDefinitionSeeder::class,
            DestinySandboxPerkDefinitionSeeder::class,
            DestinyCollectibleDefinitionSeeder::class,
            DestinyLoreDefinitionSeeder::class,
            DestinyMaterialRequirementSetDefinitionSeeder::class,
            // DestinyNodeStepSummaryDefinitionSeeder::class, Removed in 12/6 Update
            DestinyRecordDefinitionSeeder::class,
            DestinyStatGroupDefinitionSeeder::class,
            DestinyFactionDefinitionSeeder::class,
            DestinyVendorGroupDefinitionSeeder::class,
            DestinyItemCategoryDefinitionSeeder::class,
            DestinyDamageTypeDefinitionSeeder::class,
            DestinyActivityModeDefinitionSeeder::class,
            DestinyMedalTierDefinitionSeeder::class,
            DestinyAchievementDefinitionSeeder::class,
            DestinyEquipmentSlotDefinitionSeeder::class,
            DestinyItemTierTypeDefinitionSeeder::class,
            DestinyMetricDefinitionSeeder::class,
            DestinyObjectiveDefinitionSeeder::class,
            DestinyPlugSetDefinitionSeeder::class,
            DestinyPowerCapDefinitionSeeder::class,
            DestinyPresentationNodeDefinitionSeeder::class,
            DestinyProgressionDefinitionSeeder::class,
            DestinyProgressionLevelRequirementDefinitionSeeder::class,
            DestinySandboxPatternDefinitionSeeder::class,
            DestinySeasonDefinitionSeeder::class,
            DestinySeasonPassDefinitionSeeder::class,
            DestinySocketCategoryDefinitionSeeder::class,
            DestinySocketTypeDefinitionSeeder::class,
            DestinyTraitDefinitionSeeder::class,
            DestinyTraitCategoryDefinitionSeeder::class,
            DestinyVendorDefinitionSeeder::class,
            DestinyMilestoneDefinitionSeeder::class,
            DestinyActivityModifierDefinitionSeeder::class,
            DestinyArtifactDefinitionSeeder::class,
            DestinyBreakerTypeDefinitionSeeder::class,
            DestinyEnergyTypeDefinitionSeeder::class,
            DestinyInventoryItemSeeder::class
        ]);
    }
}
