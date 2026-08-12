<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormatSample extends Model
{
    protected $fillable = [
        'email',
        'style',
        'file_path',
        'original_name',
    ];
}