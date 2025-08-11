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
        dd($user->user_group_id );
        return $user->user_group_id === 4 ||
               $user->group->name === 'Администратор';
    }
}
