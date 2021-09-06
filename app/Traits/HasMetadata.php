<?php


namespace App\Traits;

use App\Models\Metadata;
use Illuminate\Database\Eloquent\Relations\MorphMany;

Trait HasMetadata
{
    /**
     * Get all the user's metadata.
     * @return MorphMany
     */
    public function metadata(): MorphMany
    {
    return $this->morphMany(Metadata::class, 'extended');
    }

}
