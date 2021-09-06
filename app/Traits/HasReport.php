<?php


namespace App\Traits;


use App\Models\Report;
use Illuminate\Database\Eloquent\Relations\MorphMany;
Trait HasReport
{
    /**
     * Get all the user's reports.
     * @return MorphMany
     */
    public function reports(): MorphMany
    {
        return $this->morphMany(Report::class, 'reportable');
    }

}
