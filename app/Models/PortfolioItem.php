<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioItem extends Model
{
    protected $fillable = [
        'title',
        'author',
        'category',
        'portfolio_category_id',
        'type_label',
        'image',
        'is_featured',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_active'   => 'boolean',
    ];

    public const CATEGORIES = [
        'romance',
        'fiction',
        'non-fiction',
        'children',
        'fantasy',
        'mystery',
        'thriller',
        'self-help',
        'business',
        'memoir',
        'health',
        'religious',
        'cookbook',
    ];

    public function portfolioCategory()
    {
        return $this->belongsTo(PortfolioCategory::class);
    }

    public function getCoverAttribute()
    {
        if ($this->image) {
            if (preg_match('#^https?://#i', $this->image)) {
                return $this->image;
            }

            return asset($this->image);
        }

        return route('portfolio.cover', $this);
    }

    public function getSearchTextAttribute()
    {
        return strtolower(trim($this->title . ' ' . $this->author . ' ' . $this->category . ' ' . $this->type_label));
    }
}
