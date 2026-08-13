<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChildrensQuote extends Model
{
    protected $fillable = [
        'name',
        'email',
        'word_count',
        'output_format',
        'trim_size',
        'manuscript_status',
        'complexity',
        'budget',
        'preferred_start',
    ];
}