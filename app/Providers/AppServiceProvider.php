<?php

namespace App\Providers;

use App\Events\UserLoggedIn;
use App\Events\UserRegistered;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Event;
use App\Listeners\LogUserRegistration;
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
            LogUserRegistration::class
        );

        // Event::listen(UserRegistered::class, function ($event) {
        //     Log::info("User registered: " . $event->user->email);
        // });
        
    }
}
