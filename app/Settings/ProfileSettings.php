<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class ProfileSettings extends Settings
{
    public string $name;
    public string $tagline;
    public ?string $spline_url;

    public static function group(): string
    {
        return 'profile';
    }
}
