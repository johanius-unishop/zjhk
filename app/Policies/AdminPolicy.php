<?php

namespace App\Policies;

use App\Models\User;


class AdminPolicy
{
    /**
     * Определяет, является ли пользователь администратором.
     */
    public function isAdmin(User $user)
    {
        return $user->group_id === 4 ||
               $user->group->name === 'Администратор';
    }
}
