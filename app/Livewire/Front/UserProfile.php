<?php

namespace App\Livewire\Front;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class UserProfile extends Component
{
    use LivewireAlert;

    public string $activePanel = 'profile'; // По умолчанию активная панель - профиль

    public function render()
    {
        return view('livewire.front.user-profile');
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


    // Основной метод удаления пользователя
    public function deleteUser()
    {
        // Получаем текущего авторизованного пользователя
        $user = Auth::user();

        // Удаляем аккаунт пользователя
        // $user->delete();

        // Завершаем сеанс
        // Auth::logout();
        //session()->invalidate(); // Инвалидирует сессионные данные
        //session()->regenerateToken(); // Генерирует новый CSRF-токен

        // Сохраняем flash-сообщение
        //session()->flash('toast_message', 'Аккаунт успешно удалён.');
        //session()->flash('toast_type', 'success');

        $this->dispatch('toast', ['message' => 'Запись удалена.', 'notify' => 'success']);
        sleep(5);
        // Перенаправляем на главную страницу
        return redirect()->route('home');
    }
}
