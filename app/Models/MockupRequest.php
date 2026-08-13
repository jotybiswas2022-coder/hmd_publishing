<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MockupRequest extends Model
{
    protected $fillable = [
        'genre',
        'book_details',
        'email',
    ];
}
