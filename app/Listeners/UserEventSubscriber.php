<?php

namespace App\Listeners;

use App\Events\UserLoggedIn;
use App\Events\UserLoggedOut;
use App\Events\UserRegistered;
use Illuminate\Events\Dispatcher;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserEventSubscriber
{
    // // Handle UserLoggedIn Event
    // public function handleUserLogin(UserLoggedIn $event)
    // {
    //     Log::info("User Logged In: " . $event->user->email);
    // }

    // // Handle UserLoggedOut Event

    // public function handleUserLogout(UserLoggedOut $event)
    // {
    //     Log::info("User Logged Out:" . $event->user->email);
    // }

    // // Handle UserRegistered Event
    // public function handleUserRegistration(UserRegistered $event)
    // {
    //     Log::info("User Logged Out:" . $event->user->email);
    // }

    // // Register the listeners for the subscriber.
     
    // public function subscribe(Dispatcher $events): void
    // {
    //     $events->listen(
    //         UserLoggedIn::class,
    //         [UserEventSubscriber::class, 'handleUserLogin']
    //     );
 
    //     $events->listen(
    //         UserLoggedOut::class,
    //         [UserEventSubscriber::class, 'handleUserLogout']
    //     );

    //     $events->listen(
    //         UserRegistered::class,
    //         [UserEventSubscriber::class, 'handleUserRegistration']
    //     );
    // }
}
