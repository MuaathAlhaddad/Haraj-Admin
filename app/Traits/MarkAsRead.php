<?php

namespace App\Traits;

trait MarkAsRead
{
    /**
     * mark all unread reviews as read of a particular user
     * @param int $user_id
     * @return int
     */
    public static function markReviewsAsRead(int $user_id)
    {
        return self::find($user_id)->reviews()->whereNull('seen_at')->update(['seen_at' => now()]);
    }

    /**
     * mark all unread comments as read of a particular user
     * @param int $user_id
     * @return int
     */
    public static function markCommentsAsRead(int $user_id)
    {
        return self::find($user_id)->comments()->whereNull('seen_at')->update(['seen_at' => now()]);
    }
}
