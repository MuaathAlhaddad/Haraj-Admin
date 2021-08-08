<?php

namespace App\Models;

use App\Traits\ReportableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory, ReportableTrait, SoftDeletes;

    protected $fillable = [
        'body',
    ];
    
    /**********************************
     *           Relations
     ********************************/

    /**
     * Get the comment's user
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the ad's comment
     * @return BelongsTo
     */
    public function ad(): BelongsTo
    {
        return $this->belongsTo(Ad::class);
    }
}
