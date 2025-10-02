<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Models\User;

class DeleteInactiveUsers extends Command
{
    protected $signature = 'delete:inactive-users';

    protected $description = 'Удаляет пользователей, не подтвердивших почту в течение недели.';

    public function handle()
    {
        $oneWeekAgo = Carbon::now()->subDays(7); // Дата неделю назад

        User::whereNull('email_verified_at')
            ->where('created_at', '<=', $oneWeekAgo)
            ->delete();

        $this->info('Пользователи успешно удалены.');
    }
}
