<?php

namespace App\Models;

use App\Traits\ReportableTrait;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class User extends Authenticatable
{
    use HasFactory, Notifiable, ReportableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


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
     * @return BelongsTo
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
    /**
     * @return BelongsTo
     */
    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class);
    }



    /**
     * @return HasMany
     */
    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }


    /**
     * @return HasMany
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }



    /**
     * @return HasMany
     */

    /* The user who creates a review */
    public function reviewer(): HasMany
    {
        return $this->hasMany(Review::class, 'reviewer_id', 'id');
    }

    /**
     * @return HasMany
     */

    /* The user who receives a review */
    public function reviewee(): HasMany
    {
        return $this->hasMany(Review::class, 'user_id', 'id');
    }



    /**
     * Get all of the user's attachments.
     */
    public function attachments()
    {
        return $this->morphMany(Attachment::class, 'attachable');
    }


    /**
     * Get all of the user's metadata.
     */
    public function metadata()
    {
        return $this->morphMany(Metadata::class, 'extended');
    }
}
