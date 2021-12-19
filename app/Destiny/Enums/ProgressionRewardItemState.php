<?php

namespace App\Destiny\Enums;

/**
 *
 * Represents the different states a progression reward item can be in.
 *
 * Valid Enum Values
 * * None: 0
 * * Invisible: 1
 * If this is set, the reward should be hidden.
 * * Earned: 2
 * If this is set, the reward has been earned.
 * * Claimed: 4
 * If this is set, the reward has been claimed.
 * * ClaimAllowed: 8
 * If this is set, the reward is allowed to be claimed by this Character.
 *
 * An item can be earned but still can't be claimed in certain circumstances,
 * like if it's only allowed for certain subclasses. It also might not be
 * able to be claimed if you already claimed it!
 *
 */
enum ProgressionRewardItemState: int
{
    case None = 0;
    case Invisible = 1;
    case Earned = 2;
    case Claimed = 4;
    case ClaimAllowed = 8;
}
