<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class ContactSettings extends Settings
{
    public ?string $email;
    public ?string $whatsapp;
    public ?string $instagram;
    public ?string $linkedin;
    public ?string $github;

    public static function group(): string
    {
        return 'contact';
    }
}
