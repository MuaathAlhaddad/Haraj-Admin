<?php

namespace App\Models;

use App\Traits\ReportableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;


class Ad extends Model
{
    use HasFactory, ReportableTrait;

    protected $fillable = [
        'name',
        'description',
        'price',
        'quantity',
        'negotiable'
    ];

    /**********************************
     *           Relations
     ********************************/
    /**
     * Get the ad's user.
     *
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return HasMany
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * @return BelongsToMany
     */
    public function taxonomies(): BelongsToMany
    {
        return $this->belongsToMany(Taxonomy::class);
    }

    /**
     * Get all the ad's report.
     *
     * @return MorphMany
     */
    public function reports(): MorphMany
    {
        return $this->morphMany(Report::class, 'reportable');
    }

    /**
     * Get all the ad's attachments.
     *
     * @return MorphMany
     */
    public function attachments(): MorphMany
    {
        return $this->morphMany(Attachment::class, 'attachable');
    }

    /**
     * Get all the ad's metadata.
     *
     * @return MorphMany
     */
    public function metadata(): MorphMany
    {
        return $this->morphMany(Metadata::class, 'extended');
    }
}
