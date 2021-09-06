<?php


namespace App\Traits;

use App\Models\Favorite;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait HasFavorite
{
    /**
     * Get the ad's favorite.
     * @return MorphOne
     */
    public function favorite(): MorphOne
    {
        return $this->morphOne(Favorite::class, 'favoriteable');
    }

}
