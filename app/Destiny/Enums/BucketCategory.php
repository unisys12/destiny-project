<?php

namespace App\Destiny\Enums;

/**
 * * Invisible: 0
 * * Item: 1
 * * Currency: 2
 * * Equippable: 3
 * * Ignored: 4
 */
enum BucketCategory: int
{
    case Invisible = 0;
    case Item = 1;
    case Currency = 2;
    case Equippable = 3;
    case Ignored = 4;
}
