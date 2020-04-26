<?php


namespace App\Enums;


class Social
{
    const GOOGLE = 'google';
    const FACEBOOK = 'facebook';

    public static function providers(): array
    {
        return [self::GOOGLE, self::FACEBOOK];
    }
}
