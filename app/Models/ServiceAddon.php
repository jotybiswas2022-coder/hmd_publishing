<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceAddon extends Model
{
    protected $fillable = [
        'service_page_id',
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

    public function servicePage()
    {
        return $this->belongsTo(ServicePage::class);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
