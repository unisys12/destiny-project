<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DestinyActivityDefinition extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    // protected $table = 'DestinyActivityDefinitions';

    /**
     * The type of activity
     * Reference to DestinyActivityTypeDefinitions table
     *
     * @return void
     */
    public function type()
    {
        return $this->hasOne(DestinyActivityTypeDefinition::class, 'hash', 'activityTypeHash');
    }

    /**
     * The destination of the activity
     * Reference to the DestinyDestinationDefinitions table
     *
     * @return void
     */
    public function destination()
    {
        return $this->hasOne(DestinyDestinationDefinition::class, 'hash', 'destinationHash');
    }

    /**
     * The place of the activity
     * Reference to the DestinyPlaceDefinitions table
     *
     * @return void
     */
    public function place()
    {
        return $this->hasOne(DestinyPlaceDefinition::class, 'hash', 'placeHash');
    }
}
