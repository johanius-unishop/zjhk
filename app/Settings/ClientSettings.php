<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class ClientSettings extends Settings
{
    public int $minimum_bonuses_for_order;
    public int $referral_friend_bonus;
    public int $penalty_for_canceling;
    public int $percentage_payment_with_bonuses;
    public int $welcome_bonus;
    public int $waiting_above_5_min;
    public int $amount_for_card_verification;
    public static function group(): string
    {
        return 'client';
    }
}
