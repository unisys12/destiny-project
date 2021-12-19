<?php

namespace App\Destiny\Enums;

/**
 * * Unknown: 0
 * * Currency: 1
 * * Basic: 2
 * * Common: 3
 * * Rare: 4
 * * Superior: 5
 * * Exotic: 6
 */
enum TierType: int
{
    case Unknown = 0;
    case Currency = 1;
    case Basic = 2;
    case Common = 3;
    case Rare = 4;
    case Superior = 5;
    case Exotic = 6;
}
