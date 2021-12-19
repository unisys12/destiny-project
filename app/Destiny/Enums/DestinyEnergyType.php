<?php

namespace App\Destiny\Enums;

enum DestinyEnergyType: int
{
    case Any = 0;
    case Arc = 1;
    case Thermal = 2;
    case Void = 3;
    case Ghost = 4;
    case Subclass = 5;
    case Statis = 6;
}
