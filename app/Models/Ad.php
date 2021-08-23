<?php

namespace App\Models;

use App\Traits\AttachableTrait;
use App\Traits\FavoriteableTrait;
use App\Traits\MetadataTrait;
use App\Traits\ReportableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;


class Ad extends Model
{

    use HasFactory, ReportableTrait, ReportableTrait, AttachableTrait, MetadataTrait, SoftDeletes, FavoriteableTrait;

    protected $fillable = [
        'title',
        'description',
        'price',
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
     * Get ad's comments
     * @return HasMany
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Get ad's taxonomyContents
     * @return BelongsToMany
     */
    public function taxonomyContents(): BelongsToMany
    {
        return $this->belongsToMany(TaxonomyContent::class, 'ad_taxonomy_content');
    }

}
