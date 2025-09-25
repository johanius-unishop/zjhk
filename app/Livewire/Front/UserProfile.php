<?php

namespace App\Livewire\Front;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class UserProfile extends Component
{
    use WithPagination;

    public $user;
    public string $activePanel = 'profile'; // По умолчанию активная панель - профиль


   // public function mount($user)
   // {
     //   $this->user = $user;
    //}

    public function render()
    {
        return view('livewire.front.user-profile');//, compact('user'));
    }

    public function selectPanel(string $panel)
    {
        $this->activePanel = $panel;
    }

    // Новый метод для выхода
    public function logout()
    {
        Auth::logout(); // Выход из системы
        session()->invalidate(); // Инвалидирует сессионные данные
        session()->regenerateToken(); // Генерирует новый CSRF-токен
        return redirect()->route('home'); // Перенаправление на главную страницу
    }

    public function deleteUser()
    {
        // Получаем текущего авторизованного пользователя
        $user = Auth::user();
dd($user);
        // Удаляем аккаунт пользователя
        $user->delete();

        // Завершаем сеанс
        Auth::logout();

        // Перенаправляем на главную страницу
        return redirect()->route('home');
    }
}
