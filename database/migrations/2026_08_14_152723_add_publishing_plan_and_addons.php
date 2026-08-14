<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('plans')->updateOrInsert(
            ['key' => 'ghost-publishing-wide'],
            [
                'name'        => 'Wide Distribution',
                'price'       => 497,
                'description' => 'KDP + IngramSpark publishing and global distribution.',
                'badge'       => 'MOST POPULAR',
                'button_text' => 'Get Started',
                'features'    => json_encode([
                    'Everything in Amazon Launcher',
                    'IngramSpark setup',
                    'Global distribution',
                    'Print + eBook',
                    'Priority support',
                ]),
                'is_featured' => true,
                'is_active'   => true,
                'sort_order'  => 25,
            ]
        );

        $sort = DB::table('addons')->max('sort_order') ?? 0;
        DB::table('addons')->updateOrInsert(
            ['key' => 'publishing-marketing'],
            [
                'name'        => 'Marketing Boost Bundle',
                'price'       => 627,
                'description' => 'Social media templates + Amazon A+ Content',
                'service'     => 'Publishing & Distribution',
                'is_active'   => true,
                'sort_order'  => $sort + 1,
            ]
        );
    }

    public function down(): void
    {
        DB::table('plans')->where('key', 'ghost-publishing-wide')->delete();
        DB::table('addons')->where('key', 'publishing-marketing')->delete();
    }
};
