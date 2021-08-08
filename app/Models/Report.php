<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Report extends Model
{
    use HasFactory, SoftDeletes;

    /**********************************
     *           Relations
     ********************************/
    
    /**
     * Get the resource of the reports
     * @return MorphTo
     */    
    public function reportable()
    {
        return $this->morphTo();
    }
}
