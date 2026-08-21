<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomepagePlan extends Model
{
    protected $fillable = [
        'name',
        'price',
        'description',
        'badge',
        'button_text',
        'button_url',
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

    public function addons()
    {
        return $this->hasMany(HomepageAddon::class)->orderBy('sort_order');
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
