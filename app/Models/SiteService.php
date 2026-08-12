<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteService extends Model
{
    protected $fillable = [
        'name',
        'category',
        'url',
        'price',
        'delivery_time',
        'badge',
        'has_arrow',
        'is_dark',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'has_arrow' => 'boolean',
        'is_dark'   => 'boolean',
        'is_active' => 'boolean',
    ];

    public const CATEGORIES = [
        'production' => 'Production & Design',
        'publishing' => 'Publishing & Strategy',
        'marketing'  => 'Marketing & Promotion',
    ];

    public const CATEGORY_LABELS = [
        'production' => 'Create',
        'publishing' => 'Publish',
        'marketing'  => 'Grow',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}