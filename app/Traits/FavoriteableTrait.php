<?php


namespace App\Traits;

use App\Models\Favorite;
use Illuminate\Database\Eloquent\Relations\MorphMany;

Trait FavoriteableTrait
{
    /**
     * Get all the resource's favorite.
     * @return MorphMany
     */
    public function favorite()
    {
    return $this->morphMany(Favorite::class, 'favoriteable');
    }

}
