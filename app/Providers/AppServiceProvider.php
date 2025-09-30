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
use App\Models\Setting;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Lang;

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
            $categories_catalog = Category::defaultOrder()
                ->where('published','!=','0')
                ->get()->toTree();
            $mainContacts = Setting::where('group','=','companyContacts')
                ->get()
                ->mapWithKeys(function ($item){
                    return [$item['key'] => $item['value']];
                })
                ->all();

            if(isset($mainContacts['companyMainPhone'])) { // Проверяем наличие ключа companyMainPhone
                $mainContacts['companyMainPhonePurified'] = preg_replace('/[^+\d]/', '', $mainContacts['companyMainPhone']);
            }

            $loginSocial = Setting::where('group','=','loginModal')
                ->get()
                ->mapWithKeys(function ($item){
                    return [$item['key'] => $item['value']];
                })
                ->all();

            // Передаем данные в шаблон
            $view->with('categories_catalog', $categories_catalog)
                ->with('mainContacts', $mainContacts)
                ->with('loginSocial', $loginSocial);
        });

        VerifyEmail::toMailUsing(function (object $notifiable, string $url) {
           // App::setLocale('ru');
            return (new MailMessage)
                ->subject('Подтверждение адреса электронной почты!')
                ->greeting('Добрый день!')
                ->line('Пожалуйста, нажмите кнопку ниже, чтобы подтвердить свой адрес электронной почты.')
                ->action(('Подтвердить Email'), $url)
                ->line('Если Вы не создавали аккаунт, дальнейших действий не требуется.')
                ->salutation('С уважением, ООО "Кевтек"');
        });



        // Event::listen(
        //     ProductStockUpdated::class,
        //     UpdateCompositeStock::class,
        // );
        // Paginator::defaultView('bootsrap-5');

        // Регистрация глобального middleware
        //$this->app['router']->pushMiddlewareToGroup('web', \App\Http\Middleware\IsAdmin::class);

        Paginator::defaultView('vendor.pagination.custom');

       // Paginator::useBootstrapFive();
        Schema::defaultStringLength(191);
    }
}
