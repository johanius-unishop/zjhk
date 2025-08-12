<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;

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
        // VerifyEmail::toMailUsing(function (object $notifiable, string $url) {
        //     return (new MailMessage)
        //         ->subject('Verify Email Address')
        //         ->line('Click the button below to verify your email address.')
        //         ->action('Verify Email Address', $url);
        // });

        // Event::listen(
        //     ProductStockUpdated::class,
        //     UpdateCompositeStock::class,
        // );
        // Paginator::defaultView('bootsrap-5');

        // Регистрация глобального middleware
        //$this->app['router']->pushMiddlewareToGroup('web', \App\Http\Middleware\IsAdmin::class);

        Paginator::useBootstrapFive();
        Schema::defaultStringLength(191);
    }
}
