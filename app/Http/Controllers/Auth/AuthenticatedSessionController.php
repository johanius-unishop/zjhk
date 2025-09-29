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

        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)
    {
        App::setLocale('ru'); // Установка локали

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) { // Попытка аутентификации
            $user = Auth::user(); // получаем текущего залогинившегося пользователя

            if (!$user->email_verified_at) { // Проверяем статус подтверждения почты
                Auth::logout(); // Если почта не подтверждена, отменяем авторизацию

                toastr()
                ->title('Внимание!')
                ->warning('Для входа на сайт необходимо подтвердить email!');

                session()->flash('form_error_source', 'login');

                return back()
                    ->withInput(); // Сохраняем введённые данные
            }

            // Успешная регистрация, выдача уведомления
            toastr()
                ->title('Успех')
                ->succes('Вы вошли в свою учетную запись!');


            // Авторизация пройдена успешно, пользователь с подтвержденной почтой направляется на главную страницу
            return redirect()->route('home');
        } else {
            return back()
                ->withErrors(['email' => __('Неверная комбинация Email / Пароль')])
                ->withInput(); // Если аутентификация неуспешна, возвращаем назад с ошибкой
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
}
