<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use App\Models\Setting;
use Illuminate\Support\Facades\App;

class AuthenticatedSessionController extends Controller
{

   
    /**
     * Display the login view.
     */
    public function create(): View
    {
        App::setLocale('ru');
        
        return view('partials.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)
    {
        App::setLocale('ru'); // установка локали
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) { // Попытка аутентификации
            // Если проверка прошла успешно, перенаправляем на домашнюю страницу

            return redirect()->route('home');
        }
        else
        {
            return back()
               ->withErrors(['email' => __('Неверная комбинация Email / Пароль')])
               ->withInput(); // Сохраняем введённые значения форм
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        App::setLocale('ru');
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    protected function loadAllowAdminRegistration(): bool
    {
        
        // Получаем запись из базы данных
        $setting = Setting::where('group', 'admin')
            ->where('key', 'allowAdminRegistration')
            ->first();
        
        if ($setting === null) {
            // Если записи нет, создаем новую с значением 0
            $newSetting = new Setting();
            $newSetting->group = 'admin';
            $newSetting->key = 'allowAdminRegistration';
            $newSetting->value = 0;
            
            // Сохраняем новую запись
            $newSetting->save();
            
            return false;
        }
        
        // Преобразуем значение в целое число и возвращаем
        return (bool)$setting->value;
    }
    protected function loadAllowAdminLogin(): bool
    {
        
        // Получаем запись из базы данных
        $setting = Setting::where('group', 'admin')
            ->where('key', 'allowAdminLogin')
            ->first();
        
        if ($setting === null) {
            // Если записи нет, создаем новую с значением 0
            $newSetting = new Setting();
            $newSetting->group = 'admin';
            $newSetting->key = 'allowAdminLogin';
            $newSetting->value = 0;
            
            // Сохраняем новую запись
            $newSetting->save();
            
            return false;
        }
        
        // Преобразуем значение в целое число и возвращаем
        return (bool)$setting->value;
    }
}
