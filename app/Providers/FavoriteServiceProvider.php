<?php

// app/Providers/FavoriteServiceProvider.php

namespace App\Providers;

use App\Services\FavoriteService;
use Illuminate\Support\ServiceProvider;

class FavoriteServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(FavoriteService::class, function () {
            return new FavoriteService();
        });
    }

    public function boot()
    {
        //
    }
}
