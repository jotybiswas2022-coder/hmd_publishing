<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    public function run(): void
    {
        foreach (Genre::DEFAULTS as $slug => $name) {
            Genre::firstOrCreate(
                ['slug' => $slug],
                ['name' => $name, 'is_active' => true]
            );
        }
    }
}
