<?php

namespace App\Providers;

use App\Events\UserLoggedIn;
use App\Events\UserRegistered;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Event;
use App\Listeners\LogUserRegistration;
use App\Listeners\UserEventSubscriber;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Event::listen(
        //     UserRegistered::class,
        //     LogUserRegistration::class
        // );

        // Event::listen(UserRegistered::class, function ($event) {
        //     Log::info("User registered: " . $event->user->email);
        // });
        
        // Event::listen('App\Events\User*', function ($eventName, $data) {
        //     Log::info("Caught user event: $eventName]", ['user' => $data]);
        // }); // Logs all User related events (wildcard class-based events)

        // Event::listen('user.loggedout', function ($data) {
        //     Log::info("User logged out: " . $data);
        // });

        // Event::listen('user.*', function ($eventName, $data) {
        //     Log::info("Caught event: $eventName", $data);
        // }); // Logs all user related events (wildcard string-based events)

        // Event::subscribe(UserEventSubscriber::class);
    }
}
