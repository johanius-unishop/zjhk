<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\App;

class NewPasswordController extends Controller
{
    /**
     * Display the password reset view.
     */
    public function create()
    {
        App::setLocale('ru');

        session()->flash('form_error_source', 'password-reset');
        return redirect()->route('home');
    }

    /**
     * Handle an incoming new password request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        App::setLocale('ru');

        try {
            $validatedData = $request->validate([
                '_token' => ['required'],
                'email' => ['required', 'email'],
                'password' => ['required', 'confirmed', \Illuminate\Validation\Rules\Password::defaults()],
            ]);

            // Код, исполняемый после успешной валидации
            // Доступ к валидированным данным через $validatedData
        } catch (\Illuminate\Validation\ValidationException $exception) {
            // Ошибки валидации были обнаружены
            // Можно вывести ошибки в консоль или записать в журнал
            dd($exception->errors());
        }

        dd('Все ок');
        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($request->password),
                    'remember_token' => Str::random(60),
                ])->save();

                event(new PasswordReset($user));
            }
        );
        dd($status);

        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.
        return $status == Password::PASSWORD_RESET
            ? redirect()->route('partials.login')->with('status', __($status))
            : back()->withInput($request->only('email'))
            ->withErrors(['email' => __($status)]);
    }
}
