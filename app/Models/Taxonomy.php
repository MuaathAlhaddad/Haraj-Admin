<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Taxonomy extends Model
{
    use HasFactory;




    /**
     * @return BelongsToMany
     */
    public function ads(): BelongsToMany
    {
        return $this->belongsToMany(Ad::class);
    }


    /**
     * @return HasMany
     */
    public function taxonomy_contents(): HasMany
    {
        return $this->hasMany(Taxonomy_content::class);
    }
}
