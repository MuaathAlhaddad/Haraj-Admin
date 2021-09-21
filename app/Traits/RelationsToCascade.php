<?php

namespace App\Traits;

trait RelationsToCascade
{
    /**
     * Holds the methods' names of Eloquent Relations
     * to fall on delete cascade or on restoring
     *
     * @var array
     */
    protected static array $relations_to_cascade = ['ads', 'comments'];

    /**
     * The "booted" method of the model.
     *
     * @return
     */
    protected static function booted()
    {
        static::created(function ($user) {
            $user->update(['phone_verified_at' => now()]);
        });

        static::deleted(function ($resource) {
            foreach (static::$relations_to_cascade as $relation) {
                foreach ($resource->{$relation}()->get() as $item) {
                    $item->delete();
                }
            }
        });

        static::restored(function ($resource) {
            foreach (static::$relations_to_cascade as $relation) {
                $resource->{$relation}()->restore();
            }
        });
    }
}
