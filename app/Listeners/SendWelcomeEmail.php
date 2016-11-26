<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use App\Jobs\SendQueuedEmail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Log;

class SendWelcomeEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserRegistered  $event
     * @return void
     */
    public function handle(UserRegistered $event)
    {
        $emailData = [
            'from' => 'admin@larabook.com',
            'subject' => 'Welcome to Larabook',
            'name' => $event->user->getAttribute('username'),
            'to' => $event->user->getAttribute('email'),
            'admin' => 'Larabook Admin'
        ];

        dispatch((new SendQueuedEmail($emailData))->delay(60 * 1));
    }
}
