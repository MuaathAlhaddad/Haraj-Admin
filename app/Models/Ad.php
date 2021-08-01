<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Ad extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'quantity',
        'negotiable'
    ];


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
     * Get all of the user's report.
     */
    public function reports()
    {
        return $this->morphMany(Report::class, 'reportable');
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
