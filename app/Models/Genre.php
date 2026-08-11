<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public const DEFAULTS = [
        'romance'   => 'Romance',
        'fiction'   => 'Fiction',
        'non-fiction' => 'Non-Fiction',
        'children'  => "Children's Books",
        'fantasy'   => 'Fantasy',
        'mystery'   => 'Mystery',
        'thriller'  => 'Thriller',
        'self-help' => 'Self-Help',
        'business'  => 'Business',
        'memoir'    => 'Memoir',
        'health'    => 'Health & Wellness',
        'religious' => 'Religious / Spiritual',
        'cookbook'  => 'Cookbook',
    ];

    public function getLabelAttribute()
    {
        return $this->name;
    }

    public function portfolioItemsCount()
    {
        return PortfolioItem::where('category', $this->slug)->count();
    }
}
