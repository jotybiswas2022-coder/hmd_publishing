<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutPageSection extends Model
{
    protected $fillable = [
        'key',
        'section_type',
        'title',
        'description',
        'content',
        'icon',
        'image',
        'url',
        'button_text',
        'meta',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'meta'       => 'array',
        'is_active'  => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
