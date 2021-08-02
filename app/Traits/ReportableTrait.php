<?php


namespace App\Traits;


use App\Models\Report;

Trait ReportableTrait
{
    /**
     * Get all of the resource's reports.
     */
    public function reports()
    {
        return $this->morphMany(Report::class, 'reportable');
    }

}
