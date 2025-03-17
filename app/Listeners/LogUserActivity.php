<?php

namespace App\Listeners;

use App\Events\UserLoggedIn;
use App\Events\UserRegistered;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class LogUserActivity
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserRegistered $event): void
    {
        Log::info("User registered: {$event->user->email}");

        // if ($event instanceof UserRegistered) {
        //     Log::info("User registered: " . $event->email);
        // } elseif ($event instanceof UserLoggedIn) {
        //     Log::info("User logged in: " . $event->email);
        // }
    }
}
