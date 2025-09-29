<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;

class VerifyEmailController extends Controller
{
    /**
     * Маркерайт email пользователя как подтвержденный.
     */
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
        try {
            dd('Proverka');
            // Определяем пользователя без необходимости быть авторизованным
            $user = User::findOrFail($request->route('id'));

            // Проверяем валидность hash-токена
            if (!$this->isValidHash($user, $request->route('hash'))) {
                abort(403, 'Invalid verification link.');
            }

            // Устанавливаем флаг подтверждения
            $user->markEmailAsVerified();

            event(new Verified($user)); // Отправляем событие успешного подтверждения

            return redirect('/')->with('verified', true);
        } catch (\Throwable $exception) {
            dd('Oshibka');
            report($exception); // Отчёт об ошибке
            return back()->withErrors(['error' => 'Error during email verification process. Please try again later.']);
        }
    }

    protected function isValidHash(User $user, string $hash): bool
    {
        return hash_equals((string)$user->getEmailVerificationToken(), $hash);
    }
}
