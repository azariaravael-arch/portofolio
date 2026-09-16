<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageSection extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'blocks',
        'is_active',
    ];

    protected $casts = [
        'blocks' => 'array',
        'is_active' => 'boolean',
    ];
}
