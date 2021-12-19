<?php

namespace App\Destiny\Enums;

/**
 * If progression is earned, this determines whether the progression shows
 * visual effects on the character or its item - or neither.
 *
 * * None: 0
 * * Character: 1
 * * Item: 2
 */
enum ProgressionStepDisplayEffect: int
{
    case None = 0;
    case Character = 1;
    case Item = 2;
}
