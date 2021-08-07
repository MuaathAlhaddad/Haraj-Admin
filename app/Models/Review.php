<?php

namespace App\Models;

use App\Traits\ReportableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory, ReportableTrait, SoftDeletes;

    protected $fillable = [
        'body',
    ];

    /**
     * Get the user who creates the review
     *
     * @return HasMany
     */
    public function reviewer(): HasMany
    {
        return $this->hasMany(Review::class, 'reviewer_id', 'id');
    }

    /**
     * Get the user who receives the review
     *
     * @return HasMany
     */
    public function reviewee(): HasMany
    {
        return $this->hasMany(Review::class, 'user_id', 'id');
    }
}
