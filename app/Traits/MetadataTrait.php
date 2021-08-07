<?php


namespace App\Traits;

use App\Models\Metadata;

Trait MetadataTrait
{
    /**
     * Get all of the user's metadata.
     */
    public function metadata()
    {
        return $this->morphMany(Metadata::class, 'extended');
    }

}
