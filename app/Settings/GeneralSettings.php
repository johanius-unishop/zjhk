<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public string $site_name;
    public int $amount_for_card_verification;
    // public int $amount_for_confirm_card;
    public int $min_withdrawal_amount_for_driver;
    public int $max_withdrawal_amount_for_driver;
    public int $time_withdraw_reload;
    public int $comission_percent;
    public bool $site_active;

    public bool $test_mode;

    public static function group(): string
    {
        return 'general';
    }
}
