<?php

namespace App\Notifications;

use App\Models\Discussion;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramMessage;

class PostDiscussionToTelegram extends Notification
{
    use Queueable;

    public function __construct(public Discussion $discussion)
    {
    }

    public function via($notifiable)
    {
        return [TelegramChannel::class];
    }

    public function toTelegram($notifiable)
    {
        return TelegramMessage::create()
            ->to('@laravelcm')
            ->content("{$this->discussion->title} " . route('discussions.show', $this->discussion->slug()));
    }
}