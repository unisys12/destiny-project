<?php

namespace App\Destiny\Enums;

/**
 * When a Vendor Interaction provides rewards, they'll either let you choose
 * one or let you have all of them. This determines which it will be.
 *
 * * None: 0
 * * One: 1
 * * All: 2
 */
enum VendorInteractionRewardSelection: int
{
    case None = 0;
    case One = 1;
    case All = 2;
}
