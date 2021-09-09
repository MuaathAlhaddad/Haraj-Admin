<?php


namespace App\Traits;


use App\Models\Review;
use Illuminate\Database\Eloquent\Relations\MorphMany;
Trait HasReview
{
    /**
     * Get all the user's reports.
     * @return MorphMany
     */
    public function reviews(): MorphMany
    {
        return $this->morphMany(Review::class, 'reviewable');
    }

}
