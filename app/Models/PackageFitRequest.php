<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PackageFitRequest extends Model
{
    protected $fillable = [
        'word_count',
        'manuscript_readiness',
    ];
}