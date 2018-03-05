<?php

namespace App\Policies;

use App\Reply;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReplyPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @param Reply $reply
     * @return bool
     */
    public function update(User $user, Reply $reply)
    {
        return $reply->user_id == $user->id ;
    }

    public function create(User $user)
    {
        $lastreply = $user->fresh()->lastReply;

        if(! $lastreply) return true;

        return ! $lastreply->wasJustPublished();
    }
}
