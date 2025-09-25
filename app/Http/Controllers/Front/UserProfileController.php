<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    // Главная страница личного кабинета
    public function index()
    {
        $user = Auth::user();
        return view('front.profile.index', compact('user'));
    }

    // Форма редактирования профиля
    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

    // Обновление профиля
   /* public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . auth()->id(),
        ]);

        $user = Auth::user();
        $user->update($request->all());

        return redirect()->route('profile.index')->with('success', 'Профиль успешно обновлён.');
    }*/

    // Смена пароля
   /* public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'password'], // проверяет пароль текущего пользователя
            'new_password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = Auth::user();
        $user->password = bcrypt($request->input('new_password'));
        $user->save();

        return redirect()->back()->with('success', 'Пароль успешно изменён.');
    }*/
}
