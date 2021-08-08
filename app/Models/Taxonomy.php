<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Taxonomy extends Model
{
    use HasFactory, SoftDeletes;

    /************************
     *        Relations
     ************************/

    /**
     * Get the taxonomy's ads
     * @return BelongsToMany
     */
    public function ads(): BelongsToMany
    {
        return $this->belongsToMany(Ad::class);
    }

    /**
     * get the taxonomy contents of a taxonomy
     * @return HasMany
     */
    public function contents(): HasMany
    {
        return $this->hasMany(TaxonomyContent::class);
    }
}
