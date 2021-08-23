<?php

namespace App\Models;

use App\Traits\AttachableTrait;
use App\Traits\MetadataTrait;
use App\Traits\ReportableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes, ReportableTrait, AttachableTrait, MetadataTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone_no',
        'gender',
        'phone_verified_at',
        'country_id',
        'state_id',
        'email',
        'phone_no'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /************************
     *        Relations
     ************************/
    /**
     * Get all user's Ads
     *
     * @return HasMany
     */
    public function ads(): HasMany
    {
        return $this->hasMany(Ad::class);
    }

    /**
     * Get the user's country
     *
     * @return BelongsTo
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * Get the user's state
     *
     * @return BelongsTo
     */
    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }

    /**
     * Get the user's messages
     *
     * @return HasMany
     */
    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }

    /**
     * Get the user's comments
     *
     * @return HasMany
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Get the user's reviews
     *
     * @return HasMany
     */
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    /**
     * Get the user's favorites
     *
     * @return HasMany
     */
    public function favorites(): HasMany
    {
        return $this->hasMany(Favorite::class);
    }

    /************************
     *        Methods
     ************************/
    /**
     * Store phone number and associate country
     * @param array $args
     * @param int $country_id
     * @return User
     */
    public function firstStepRegistration(array $args, int $country_id): User
    {
        $user = self::create([
            "phone_no" => $args['phone_no']
        ]);

        $country = Country::find($country_id);

        $user->country()->associate($country);

        $user->save();

        return $user;
    }

    /**
     * fill up with registration details Store phone number and associate country
     * @param array $args
     * @param Country $country
     * @return User
     */
    public function CompleteRegistration(array $args, Country $country): User
    {
        $user = self::create([
            "phone_no" => $args['phone_no']
        ]);

        $user->country()->associate($country);

        $user->save();

        return $user;
    }
}
