<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Country extends Model
{

    protected $table = 'countries';

    public $timestamps = false;

    protected $guarded = [];

    /************************
     *        Relations
     ************************/
    /**
     
     *Get the country's states
     *  @return HasMany
     */
    public function states(): HasMany
    {
        return $this->hasMany(State::class, 'country_id', 'id');
    }

    /**
     *Get the country's users
     * @return HasMany
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
