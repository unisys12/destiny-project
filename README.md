DESTINY PROJECT
===============

# Purpose
Something to do

## Usage
- Make sure you have a symlink setup between your Storage directory and Public. `php artisan storage:link`
- `php artisan destiny:contentfile` _(downloads the latest Manifest & SQLite db)_
- `php artisan migrate` _(setup the local db tables)_
- `php artisan db:seed` _(seeds by reading the latest SQLite db)_

To update the projects DB with the most recent info
- `php artisan destiny:contentfile`
- `php artisan migrate:fresh --seed`

## Command List / Usage
- `php artisan destiny:contentfile`
    
    Checks for a locally stored Manifest. If one is found it will check if it is up-to-date. If not it will be deleted and a new one will be downloaded and stored in a manifest directory within the projects storage directory.
    - From here, it finds the path for the _MobileWorldContentFile_, which contains all the static data that we are after, and downloads it to a directory for the language you selected, within a contentfile directory within the root storage dir. The folder structure looks like this:
    - storage
        - app
            - public
                - contentfiles
                    - lang
                    - world_sql_content_3d029.content
                - manifests
                    -manifest.json
- `php artisan destiny:manifest`
    
    Downloads the most recent version of the manifest and stores it with the manifest directory.
- `php artisan destiny:tables`
    
    Lists all the available tables within the _MobileWorldContentFile_.
- `php artisan destiny:tablecolumns`
    
    Lists the columns for a given table. ex `php artisan destiny:tablecolumns DestinyLocationDefinition` will output:
    ```php
    Array
    (
        [0] => vendorHash
        [1] => locationReleases
        [2] => hash
        [3] => index
        [4] => redacted
        [5] => blacklisted
    )
    ```
- `php artisan destiny:view`
    
    View a tables contents. ex: `php artisan destiny:view DestinyLocationDefinition` will output the contents of that table to the console. Not pretty, but...

## Table List
**NOTE**: The listing of available tables seems... fluid from update to update. I need to update the seeders to actually check if a table is available.

- ~~DestinyPlaceDefinition~~
- ~~DestinyActivityDefinition~~
- ~~DestinyActivityTypeDefinition~~
- ~~DestinyClassDefinition~~
- ~~DestinyGenderDefinition~~
- ~~DestinyInventoryBucketDefinition~~
- ~~DestinyRaceDefinition~~
- DestinyTalentGridDefinition
- ~~DestinyUnlockDefinition~~ // Empty
- ~~DestinyMaterialRequirementSetDefinition~~
- ~~DestinySandboxPerkDefinition~~ // damageTypeHash always returns NULL
- ~~DestinyStatGroupDefinition~~
- ~~DestinyFactionDefinition~~
- ~~DestinyVendorGroupDefinition~~
- DestinyRewardSourceDefinition // Empty
- ~~DestinyItemCategoryDefinition~~
- ~~DestinyDamageTypeDefinition~~
- ~~DestinyActivityModeDefinition~~
- ~~DestinyMedalTierDefinition~~
- ~~DestinyAchievementDefinition~~
- DestinyActivityGraphDefinition // No Real Useful Info
- DestinyBondDefinition // No Real Info
- ~~DestinyCollectibleDefinition~~
- ~~DestinyDestinationDefinition~~
- ~~DestinyEquipmentSlotDefinition~~
- ~~DestinyStatDefinition~~
- ~~DestinyInventoryItemDefinition~~
- ~~DestinyItemTierTypeDefinition~~
- ~~DestinyLocationDefinition~~
- ~~DestinyLoreDefinition~~ // Subtitle property is always NULL due to encoding
- ~~DestinyMetricDefinition~~
- ~~DestinyObjectiveDefinition~~
- ~~DestinyPlugSetDefinition~~
- ~~DestinyPowerCapDefinition~~
- ~~DestinyPresentationNodeDefinition~~
- ~~DestinyProgressionDefinition~~
- ~~DestinyProgressionLevelRequirementDefinition~~
- ~~DestinyRecordDefinition~~
- DestinySackRewardItemListDefinition // Empty, removed in 12/6 update
- ~~DestinySandboxPatternDefinition~~
- ~~DestinySeasonDefinition~~ // contains incomplete info
- ~~DestinySeasonPassDefinition~~
- ~~DestinySocketCategoryDefinition~~
- ~~DestinySocketTypeDefinition~~
- ~~DestinyTraitDefinition~~
- ~~DestinyTraitCategoryDefinition~~
- ~~DestinyVendorDefinition~~
- ~~DestinyMilestoneDefinition~~
- ~~DestinyActivityModifierDefinition~~
- DestinyReportReasonCategoryDefinition
- ~~DestinyArtifactDefinition~~
- ~~DestinyBreakerTypeDefinition~~
- ~~DestinyChecklistDefinition~~
- ~~DestinyEnergyTypeDefinition~~
