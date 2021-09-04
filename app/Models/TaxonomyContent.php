<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class TaxonomyContent extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'icon' => 'array',
    ];

    /************************
     *        Types
     ************************/
    const TITLE_CARS = 'cars';
    const TITLE_DEVICES = 'devices';
    const TITLE_REAL_ESTATE = 'real estate';
    const TITLE_ANIMALS_LIVESTOCK_BIRD = 'animals, livestock, and bird';
    const TITLE_PERSONAL_ACCESSORIES = 'personal accessories';
    const TITLE_SERVICES = 'services';
    const TITLE_APPLE = 'apple';
    const TITLE_SAMSUNG = 'samsung';
    const TITLE_TOYOTA = 'toyota';

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

    /**
     * Get the taxonomyContent harajs
     * @return TaxonomyContent
     */
    public function harajs()
    {
        return self::whereNull('parent_id')->whereHas('taxonomy', function ($query) {
            $query->whereType(Taxonomy::TYPE_HARAJS);
        })->get();
    }

    /**
     * Get the taxonomyContent tags
     * @return TaxonomyContent
     */
    public function tags()
    {
        return self::whereNull('parent_id')->whereHas('taxonomy', function ($query) {
            $query->whereType(Taxonomy::TYPE_TAGS);
        })->get();
    }

    /**
     * Get the taxonomyContent parent
     * @return TaxonomyContent
     */
    public function parent()
    {
        return self::find($this->parent_id);
    }

    /**
     * Get the children brands of the current taxonomyContent
     * @return HasMany
     */
    public function brands(): HasMany
    {
        return $this->hasMany(TaxonomyContent::class, 'parent_id', 'id')->whereHas('taxonomy', function ($query) {
            $query->whereType(Taxonomy::TYPE_BRANDS);
        });
    }

    /**
     * Get the children models of the current taxonomyContent
     * @return HasMany
     */
    public function models(): HasMany
    {
        return $this->hasMany(TaxonomyContent::class, 'parent_id', 'id')->whereHas('taxonomy', function ($query) {
            $query->whereType(Taxonomy::TYPE_MODELS);
        });
    }

    /**
     * Get the children types of the current taxonomyContent
     * @return HasMany
     */
    public function types(): HasMany
    {
        return $this->hasMany(TaxonomyContent::class, 'parent_id', 'id')->whereHas('taxonomy', function ($query) {
            $query->whereType(Taxonomy::TYPE_TYPES);
        });
    }

    /**
     * Get the taxomomyContent children
     * @return
     */
//    public function children(): HasMany
//    {
//        return $this->hasMany(TaxonomyContent::class)->whereParentId(self::getKey());
//    }
}
