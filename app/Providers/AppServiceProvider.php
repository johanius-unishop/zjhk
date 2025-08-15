<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;
use App\Models\Category;

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
        View::composer('*', function ($view) {
            // Получаем список категорий из базы данных
            $categories_catalog = Category::query()
                ->defaultOrder()
                ->whereNull('parent_id')
                ->with('childrens')
                ->get();
            dd($categories_catalog);
            // Передаем данные в шаблон
            $view->with('categories_catalog', $categories_catalog);
        });
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
