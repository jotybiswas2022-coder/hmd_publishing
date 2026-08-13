<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('site_services')
            ->where('name', 'Audio Book Production')
            ->update([
                'url'       => '/services/audiobook-production',
                'has_arrow' => true,
            ]);
    }

    public function down(): void
    {
        DB::table('site_services')
            ->where('name', 'Audio Book Production')
            ->update([
                'url'       => null,
                'has_arrow' => false,
            ]);
    }
};
