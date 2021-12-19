<?php

namespace App\Destiny\Enums;

/**
 * * Unknown: 0
 * * Inventory: 1
 * * Vault: 2
 * * Vendor: 3
 * * Postmaster: 4
 */
enum ItemLocation: int
{
    case Unknown = 0;
    case Inventory = 1;
    case Vault = 2;
    case Vendor = 3;
    case Postmaster = 4;
}
