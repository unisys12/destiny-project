<?php

namespace App\Destiny\Enums;

/**
 * This determines the type of reply that a Vendor will have during an Interaction.
 *
 * * Accept: 0
 * * Decline: 1
 * * Complete: 2
 */
enum VendorReplyType: int
{
    case Accept = 0;
    case Decline = 1;
    case Complete = 2;
}
