<?php


namespace App\Traits;

use App\Models\Attachment;
use Illuminate\Database\Eloquent\Relations\MorphMany;

Trait AttachableTrait
{
    /**
     * Get all the resource's reports.
     * @return MorphMany
     */
    public function attachments(): MorphMany
    {
    return $this->morphMany(Attachment::class, 'attachable');
    }

}
