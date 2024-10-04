<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class NotifySettings extends Settings
{

    public int $driver_rating_below;
    public int $unprocessed_message;

    public static function group(): string
    {
        return 'notify';
    }
}
