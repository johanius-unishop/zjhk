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

    // Метод для запуска окна подтверждения удаления профиля
    public function showDeleteModal()
    {
        $this->confirm(
            'Вы действительно хотите удалить свою учетную запись?',
            [
                'onConfirmed' => 'deleteUser', // Указываем метод, который будет вызван при подтверждении
                'showCancelButton' => true,
                'cancelButtonText' => 'Нет',
                'acceptButtonText' => 'Да, удалить!',
            ]
        );
       dd("1");
    }

    // Основной метод удаления пользователя
    public function deleteUser()
    {
        // Получаем текущего авторизованного пользователя
        $user = Auth::user();

        // Удаляем аккаунт пользователя
        $user->delete();

        // Завершаем сеанс
        Auth::logout();
        session()->invalidate(); // Инвалидирует сессионные данные
        session()->regenerateToken(); // Генерирует новый CSRF-токен

        // Перенаправляем на главную страницу
        return redirect()->route('home');
    }
}
