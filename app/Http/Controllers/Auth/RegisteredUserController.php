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

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255', // Новое правило для last_name
            'email' => 'required|email|lowercase|max:255|unique:' . User::class,
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        try {
            $user = User::create([
                'name' => $request->name,
                'last_name' => $request->last_name, // Новая фамилия
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
        } catch (\Throwable $exception) {
            Log::error('Error creating user: ', [$exception->getMessage()]);
            throw new ValidationException(__('Registration failed.'));
        }

        event(new Registered($user));

       // toastr()->success('Регистрация прошла успешно.');
       // toastr()->info('На указанную при регистрации почту отправлено письмо, для входа на сайт необходимо подтвердить электронную почту.');
        return redirect()->route('home')
            //->with('message', __('Регистрация прошла успешно.')) // Только сообщение при удаче
            ->with('success', 'Form submitted successfully!');

        return redirect()->route('verification.notice')
            ->with('message', __('Перед началом использования сайта, пожалуйста, подтвердите ваш email.'));

        //        return redirect()->route('home');
    }
}
