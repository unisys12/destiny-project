<?php

namespace App\Destiny\Enums;

/**
 * An enumeration of the known UI interactions for Vendors.
 *
 * * Unknown: 0
 * * Undefined: 1
 * An empty interaction. If this ends up in content, it is probably a game bug.
 * * QuestComplete: 2
 * An interaction shown when you complete a quest and receive a reward.
 * * QuestContinue: 3
 * An interaction shown when you talk to a Vendor as an intermediary step of a quest.
 * * ReputationPreview: 4
 * An interaction shown when you are previewing the vendor's reputation rewards.
 * * RankUpReward: 5
 * An interaction shown when you rank up with the vendor.
 * * TokenTurnIn: 6
 * An interaction shown when you have tokens to turn in for the vendor.
 * * QuestAccept: 7
 * An interaction shown when you're accepting a new quest.
 * * ProgressTab: 8
 * Honestly, this doesn't seem consistent to me. It is used to give you choices in the Cryptarch as well as some reward prompts by the Eververse vendor. I'll have to look into that further at some point.
 * * End: 9
 * These seem even less consistent. I don't know what these are.
 * * Start: 10
 * Also seem inconsistent. I also don't know what these are offhand.
 */
enum VendorInteractionType: int
{
    case Unknown = 0;
    case Undefined = 1;
    case QuestComplete = 2;
    case QuestContinue = 3;
    case ReputationPreview = 4;
    case RankUpReward = 5;
    case TokenTurnIn = 6;
    case QuestAccept = 7;
    case ProgressTab = 8;
    case End = 9;
    case Start = 10;
}
