<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServicePlan extends Model
{
    protected $fillable = [
        'service_page_id',
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
        'features'     => 'array',
        'is_featured'  => 'boolean',
        'is_active'    => 'boolean',
        'price'        => 'float',
        'separate_cost' => 'float',
    ];

    public function servicePage()
    {
        return $this->belongsTo(ServicePage::class);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
