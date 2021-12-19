<?php

namespace App\Destiny\Enums;

/**
 * There are many Progressions in Destiny (think Character Level, or
 * Reputation). These are the various "Scopes" of Progressions, which affect
 * many things:
 * * Where/if they are stored
 * * How they are calculated
 * * Where they can be used in other game logic
 *
 * * Account: 0
 * * Character: 1
 * * Clan: 2
 * * Item: 3
 * * ImplicitFromEquipment: 4
 * * Mapped: 5
 * * MappedAggregate: 6
 * * MappedStat: 7
 * * MappedUnlockValue: 8
 *
 * @return int
 */
enum ProgressionScope: int
{
    case Account = 0;
    case Character = 1;
    case Clan = 2;
    case Item = 3;
    case ImplicitFromEquipment = 4;
    case Mapped = 5;
    case MappedAggregate = 6;
    case MappedStat = 7;
    case MappedUnlockValue = 8;
}
