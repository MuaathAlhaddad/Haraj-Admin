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
     *        Types
     ************************/
    const TYPE_HARAJS = 'harajs';
    const TYPE_BRANDS = 'brands';
    const TYPE_TYPES = 'types';
    const TYPE_MODELS = 'models';
    const TYPE_CATEGORIES = 'categories';
    const TYPE_TAGS = 'tags';
    const TYPE_OTHERS = 'others';

    /************************
     *        Relations
     ************************/
    /**
     * get the taxonomy contents of a taxonomy
     * @return HasMany
     */
    public function contents(): HasMany
    {
        return $this->hasMany(TaxonomyContent::class);
    }
}
