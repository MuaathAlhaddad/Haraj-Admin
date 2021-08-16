<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class TaxonomyContent extends Model
{
    use HasFactory, SoftDeletes;

    /************************
     *        Relations
     ************************/
    /**
     * Get the taxonomyContent's ads
     * @return BelongsToMany
     */
    public function ads(): BelongsToMany
    {
        return $this->belongsToMany(Ad::class, 'ad_taxonomy_content');
    }

    /**
     * Get the taxomomy of taxonomy content
     * @return BelongsTo
     */
    public function taxonomy(): BelongsTo
    {
        return $this->belongsTo(Taxonomy::class);
    }
}
