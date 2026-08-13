<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChildrensQuote extends Model
{
    protected $fillable = [
        'word_count',
        'output_format',
        'trim_size',
        'manuscript_status',
        'complexity',
    ];
}