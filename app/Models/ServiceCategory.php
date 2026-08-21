<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function pages()
    {
        return $this->hasMany(ServicePage::class);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
