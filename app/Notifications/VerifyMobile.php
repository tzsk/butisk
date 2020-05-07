<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\URL;

class VerifyMobile extends Notification
{
    use Queueable;

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject(Lang::get('Verify Your Mobile Number'))
            ->line(Lang::get('Please click the button below to verify your mobile number.'))
            ->action(Lang::get('Verify Mobile Number'), $this->verificationUrl($notifiable))
            ->line(Lang::get('If you did not create an account, no further action is required.'));
    }

    protected function verificationUrl($notifiable)
    {
        return URL::temporarySignedRoute(
            'user.mobile.verify',
            Carbon::now()->addMinutes(Config::get('auth.verification.expire', 60)),
            [
                'id' => $notifiable->getKey(),
                'hash' => sha1($notifiable->getMobileForVerification()->full()),
            ]
        );
    }
}
