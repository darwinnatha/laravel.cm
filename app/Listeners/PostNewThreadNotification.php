<?php

namespace App\Listeners;

use App\Events\ThreadWasCreated;
use App\Notifications\PostThreadToTelegram;

class PostNewThreadNotification
{
    public function handle(ThreadWasCreated $event)
    {
        $thread = $event->thread;

        $thread->notify(new PostThreadToTelegram());
    }
}