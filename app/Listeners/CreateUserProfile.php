<?php

namespace App\Listeners;

use App\Models\Profile;
use App\Events\UserRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateUserProfile
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
        // Profile::create([
        //     'user_id' => $event->user->id // Link profile to registered user
        // ]);
    }
}
