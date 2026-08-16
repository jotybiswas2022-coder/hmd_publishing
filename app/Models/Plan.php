<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Plan extends Model
{
    protected $fillable = [
        'key',
        'name',
        'price',
        'separate_cost',
        'description',
        'badge',
        'button_text',
        'features',
        'is_featured',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'features'    => 'array',
        'is_featured' => 'boolean',
        'is_active'   => 'boolean',
        'price'       => 'float',
    ];

    protected function featuresList(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->features ?? []
        );
    }
}
