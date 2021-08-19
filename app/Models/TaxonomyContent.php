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
     *        Types
     ************************/
    const TITLE_CARS = 'cars';
    const TITLE_DEVICES = 'devices';
    const TITLE_REAL_ESTATE = 'real estate';
    const TITLE_ANIMALS_LIVESTOCK_BIRD = 'animals, livestock, and bird';
    const TITLE_PERSONAL_ACCESSORIES = 'personal accessories';
    const TITLE_SERVICES = 'services';

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
