<?php

namespace App\Destiny\Enums;

/**
 * * None: 0
 * * Primary: 1
 * * Special: 2
 * * Heavy: 3
 * * Unknown: 4
 */
enum AmmunitionType: int
{
    case None = 0;
    case Primary = 1;
    case Special = 2;
    case Heavy = 3;
    case Unknown = 4;
}
