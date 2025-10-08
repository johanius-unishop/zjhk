<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;
use App\Models\Favorite;

class AuthenticatedSessionController extends Controller
{

    /**
     * Display the login view.
     */
    public function create()
    {
        App::setLocale('ru');
        session()->flash('form_error_source', 'authentication');
        return redirect('/');
    }


    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)
    {
        App::setLocale('ru'); // Установка локали

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->filled('remember'))) { // Попытка аутентификации
            $user = Auth::user(); // получаем текущего залогинившегося пользователя

            if (!$user->email_verified_at) { // Проверяем статус подтверждения почты
                Auth::logout(); // Если почта не подтверждена, отменяем авторизацию

                toastr()
                    ->title('Внимание!')
                    ->warning('Для входа на сайт необходимо подтвердить e-mail!');

                session()->flash('form_error_source', 'verify-notes');
                return redirect()->route('home')->withInput();
            }

            // Успешная регистрация, выдача уведомления
            toastr()
                ->title('Успех')
                ->success('Вы вошли в свою учетную запись!');


            // Начинаем проверку избранных товаров
            if (session()->has('guest_favorites')) {
                $user = Auth::user();
                $guestFavorites = session()->get('guest_favorites');

                // Пробегаемся по списку товаров
                foreach ($guestFavorites as $productId) {
                    // Проверяем, существует ли уже пара в базе данных
                    if (!Favorite::where('user_id', $user->id)->where('product_id', $productId)->exists()) {
                        // Если нет, создаём новую запись
                        Favorite::create([
                            'user_id' => $user->id,
                            'product_id' => $productId
                        ]);
                    }
                }

                // Очищаем сессию после удачного переноса
                session()->forget('guest_favorites');
            }
            // Авторизация пройдена успешно, пользователь с подтвержденной почтой направляется на главную страницу
            return back();
        } else {
            session()->flash('form_error_source', 'authentication');
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
