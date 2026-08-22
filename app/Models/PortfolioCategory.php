<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioCategory extends Model
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

    public function getLabelAttribute()
    {
        return $this->name;
    }

    public function portfolioItems()
    {
        return $this->hasMany(PortfolioItem::class, 'portfolio_category_id');
    }

    public function portfolioItemsCount()
    {
        return $this->portfolioItems()->count();
    }
}
