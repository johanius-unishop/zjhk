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
    public function create(Request $request)
    {
        App::setLocale('ru');

        session()->flash('form_error_source', 'password-reset');
        session()->flash('token', $request->route('token'));
        return redirect()->route('home');
    }

    /**
     * Handle an incoming new password request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        App::setLocale('ru');

        try {
            $validatedData = $request->validate([
                'token' => ['required'],
                'email' => ['required', 'email'],
                'password' => ['required', 'confirmed', \Illuminate\Validation\Rules\Password::defaults()],
            ]);

            // Код, исполняемый после успешной валидации
            // Доступ к валидированным данным через $validatedData
        } catch (\Illuminate\Validation\ValidationException $exception) {
            // Ошибки валидации были обнаружены
            // Можно вывести ошибки в консоль или записать в журнал
            dd ();
            foreach ($exception->errors() as $field => $messages) {
                foreach ($messages as $message) {
                    toastr()->warning($message);
                }
            }
        }


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


        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.
        if ($status == Password::PASSWORD_RESET) {
            session()->flash('form_error_source', 'authentication');
            toastr()->success('Ваш пароль изменен!');
            return redirect()->route('home');
        } else {
            session()->flash('form_error_source', 'authentication');
            toastr()->error('Не удалось изменить пароль!');
            return redirect()->route('home');
        }
    }
}
