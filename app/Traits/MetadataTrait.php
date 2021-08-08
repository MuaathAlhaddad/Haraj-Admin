<?php


namespace App\Traits;

use App\Models\Metadata;
use Illuminate\Database\Eloquent\Relations\MorphMany;

Trait MetadataTrait
{
    /**
     * Get all the user's metadata.
     * @return MorphMany
     */
    public function metadata()
    {
    return $this->morphMany(Metadata::class, 'extended');
    }

}
