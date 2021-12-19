<?php

namespace App\Destiny\Enums;

/**
 * Describes the type of progression that a vendor has.
 *
 * * Default: 0
 * The original rank progression from token redemption.
 * * Ritual: 1
 * Progression from ranks in ritual content. For example: Crucible (Shaxx),
 * Gambit (Drifter), and Season 13 Battlegrounds (War Table).
 * * NoSeasonalRefresh: 2
 * A vendor progression with no seasonal refresh. For example: Xur in the
 * Eternity destination for the 30th Anniversary.
 */
enum VendorProgressionType: int
{
    case Default = 0;
    case Ritual = 1;
    case NoSeasonalRefresh = 2;
}
