<?php

namespace App\Providers;

use App\Events\UserLoggedIn;
use App\Events\UserRegistered;
use App\Listeners\LogUserActivity;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Event;
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
        Event::listen(
            UserRegistered::class,
            LogUserActivity::class
        );

        // Event::listen(UserRegistered::class, function ($event) {
        //     Log::info("User registered: " . $event->user->email);
        // });

        // Event::listen([UserRegistered::class, UserLoggedIn::class], function ($event) {
        //     if ($event instanceof UserRegistered) {
        //         Log::info("User registered: " . $event->user->email);
        //     } elseif ($event instanceof UserLoggedIn) {
        //         Log::info("User logged in: " . $event->user->email);
        //     }
        // });
        
    }
}
