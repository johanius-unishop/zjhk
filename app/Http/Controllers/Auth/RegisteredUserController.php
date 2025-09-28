<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

use App\Http\Controllers\Controller;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        App::setLocale('ru');
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        App::setLocale('ru');

        // Пробуем провести валидацию
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|email|lowercase|max:255|unique:' . User::class,
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);

            // Если дошли сюда, значит, данные валидные
            $user = User::create([
                'name' => $validatedData['name'],
                'last_name' => $validatedData['last_name'],
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
            ]);

            event(new Registered($user));

            // Успешная регистрация, выдача уведомления
            toastr()
                ->persistent()
                ->closeButton(false)
                ->title('Поздравляем!')
                ->success('Регистрация прошла успешно.');

            toastr()
                ->persistent()
                ->closeButton(false)
                ->info('На указанную при регистрации почту отправлено письмо, для входа на сайт необходимо подтвердить электронную почту.');

            return redirect()->route('home');
        } catch (\Illuminate\Validation\ValidationException $validationException) {
            // Записываем ошибку валидации в логи
            Log::error('Ошибка валидации данных при регистрации пользователя', [
                'errors' => $validationException->errors(),
                'inputs' => $request->except('password')
            ]);
            dd($validationException->errors());
            // Возвращаем пользователя обратно с ошибками
            return back()->withErrors($validationException->errors())->withInput();
        } catch (\Throwable $exception) {
            // Все остальные ошибки (кроме валидации)
            Log::error('Ошибка при создании пользователя: ', [$exception->getMessage()]);
            throw new ValidationException(__('Registration failed.'));
        }
    }
}
