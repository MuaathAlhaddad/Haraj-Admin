<?php

namespace App\Models;

use App\Traits\HasAttachment;
use App\Traits\HasMetadata;
use App\Traits\HasReport;
use App\Traits\HasReview;
use App\Traits\MarkAsRead;
use App\Traits\RelationsToCascade;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes,
        HasReport, HasAttachment, RelationsToCascade,
        HasMetadata, HasApiTokens, HasReview, MarkAsRead;

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
     * Get the user's sent messages
     *
     * @return HasMany
     */
    public function from_messages(): HasMany
    {
        return $this->hasMany(Message::class, 'from_id', 'id');
    }

    /**
     * Get the user's received messages
     *
     * @return HasMany
     */
    public function to_messages(): HasMany
    {
        return $this->hasMany(Message::class, 'to_id', 'id');
    }

    /**
     * Get the user's comments
     *
     * @return HasMany
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class)->orderBy('created_at', 'desc');
    }

    /**
     * Get the user's favorites
     *
     * @return HasMany
     */
    public function favorites(): HasMany
    {
        return $this->hasMany(Favorite::class)->orderBy('created_at', 'desc');
    }


}
