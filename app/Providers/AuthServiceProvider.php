<?php

namespace App\Providers;

use App\Models\User;
use App\Policies\AdminPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Регистрируем политики аутентификации приложения.
     *
     * @return void
     */
    protected $policies = [
        // Связываем политику с моделью User
        User::class => AdminPolicy::class,
    ];

    /**
     * Регистрирует любые службы аутентификации и авторизации.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Здесь можно зарегистрировать дополнительные разрешения
        Gate::define('isAdmin', [AdminPolicy::class, 'isAdmin']);
    }
}
