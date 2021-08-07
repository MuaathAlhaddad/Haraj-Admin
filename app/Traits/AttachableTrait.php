<?php


namespace App\Traits;

use App\Models\Attachment;

Trait AttachableTrait
{
    /**
     * Get all of the resource's reports.
     */
    public function attachments()
    {
        return $this->morphMany(Attachment::class, 'attachable');
    }

}
