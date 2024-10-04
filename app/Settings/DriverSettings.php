<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class DriverSettings extends Settings
{
    public string $max_pay_per_day;
    public int $penalty_for_canceling;
    public bool $driver_waiting_signal;
    public int $driver_comission_percent;
    public int $min_amount_for_confirm_order;
    public int $amount_for_card_verification;
    public int $min_withdrawal_amount_for_driver;
    public int $range_of_selection_of_orders_for_drivers;
    public static function group(): string
    {
        return 'driver';
    }
}
