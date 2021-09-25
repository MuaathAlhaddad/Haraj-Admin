<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
    ];

    /************************
     *        Relations
     ************************/

    /**
     * Get the message's sender
     *
     * @return BelongsTo
     */
    public function sender(): BelongsTo
    {
        return $this->belongsTo(User::class, 'from_id', 'id');
    }

    /**
     * Get the message's recipient
     *
     * @return BelongsTo
     */
    public function recipient(): BelongsTo
    {
        return $this->belongsTo(User::class, 'to_id', 'id');
    }

    /**
     * mark all unread messages as read of a particular chat
     * @param int $to_ad
     * @param int $from_id
     * @return int
     */
    public static function markChatAsRead(int $to_ad, int $from_id)
    {
        return self::where('to_id', $to_ad)->where('from_id', $from_id)->whereNull('seen_at')->update(['seen_at' => now()]);
    }
}
