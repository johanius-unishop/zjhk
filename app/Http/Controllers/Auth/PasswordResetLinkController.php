<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\View\View;
use Illuminate\Support\Facades\App;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     */
    public function create(Request $request)
    {
        App::setLocale('ru');

        session()->flash('form_error_source', 'password-reset-link');

        return redirect()->route('home');
    }

    /**
     * Обработка запроса на получение ссылки для сброса пароля.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        // Устанавливаем локаль на русский
        App::setLocale('ru');
        try {
            $validatedData = $request->validate([
                'email' => ['required', 'email'],
            ]);

            // Код, исполняемый после успешной валидации
            // Доступ к валидированным данным через $validatedData
        } catch (\Illuminate\Validation\ValidationException $exception) {
            // Ошибки валидации были обнаружены
            // Можно вывести ошибки в консоль или записать в журнал

            foreach ($exception->errors() as $field => $messages) {
                foreach ($messages as $message) {
                    toastr()->warning($message);
                }
            }

            return redirect()->route('home');
        }


        // Отправляем ссылку для сброса пароля
        $status = Password::sendResetLink(
            $request->only('email')
        );

        // Проверяем результат и возвращаем соответствующее сообщение
        if ($status === Password::RESET_LINK_SENT) {

            toastr()->success('Ссылка для сброса пароля отправлена на указанный Email!');
            return redirect()->route('home');
        }

        // Если произошла ошибка, возвращаем сообщение об ошибке
        session()->flash('form_error_source', 'password-reset-link');
        toastr()->error('Учетная запись с таким Email не найдена!');
        return redirect()->route('home')->withInput();
    }
}
