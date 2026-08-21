<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomepageAddon extends Model
{
    protected $fillable = [
        'homepage_plan_id',
        'name',
        'price',
        'description',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'price'     => 'float',
    ];

    public function plan()
    {
        return $this->belongsTo(HomepagePlan::class);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
