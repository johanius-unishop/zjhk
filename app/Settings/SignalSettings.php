<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class SignalSettings extends Settings
{

    public int $driver_long_search_signal;
    public int $driver_waiting_signal;
    public int $client_waiting_signal;
    public int $driver_search_signal;

    public static function group(): string
    {
        return 'signal';
    }
}
