<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioCategory extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'orientation',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public const ORIENTATIONS = [
        'vertical'   => 'Vertical (Book Cover, Published Books)',
        'horizontal' => 'Horizontal (Interior Formatting, Children\'s Illustrations)',
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
