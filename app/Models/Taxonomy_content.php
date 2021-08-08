<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Taxonomy_Content extends Model
{
    use HasFactory, SoftDeletes;

    /************************
     *        Relations
     ************************/
    
    /**
     * Get the taxomomy of taxonomy content
     * @return BelongsTo
     */
    public function taxonomy(): BelongsTo
    {
        return $this->belongsTo(Taxonomy::class);
    }
}
