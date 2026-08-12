<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookBrief extends Model
{
    protected $fillable = [
        'book_type',
        'target_length',
        'genre',
        'material',
        'timeline',
        'email',
        'idea',
    ];
}