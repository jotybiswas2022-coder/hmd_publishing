<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        $plans = [
            [
                'key'          => 'translation-essential',
                'name'         => 'Essential Translation',
                'price'        => 1010,
                'description'  => 'Basic translation for manuscripts up to 30k words.',
                'badge'        => 'TRANSLATION',
                'button_text'  => 'Get Started',
                'features'     => [
                    'Native speaker translator',
                    'One revision round',
                    'Metadata translation',
                    'Professional translation',
                ],
                'is_featured' => false,
                'is_active'   => true,
                'sort_order'  => 22,
            ],
            [
                'key'          => 'translation-ready',
                'name'         => 'Publishing Ready',
                'price'        => 1897,
                'description'  => 'Editorial quality translation for manuscripts up to 60k words.',
                'badge'        => 'MOST POPULAR',
                'button_text'  => 'Get Started',
                'features'     => [
                    'Professional literary translator',
                    'Editorial proofreading',
                    'Cultural adaptation',
                    'Two revision rounds',
                ],
                'is_featured' => true,
                'is_active'   => true,
                'sort_order'  => 23,
            ],
            [
                'key'          => 'translation-pro',
                'name'         => 'Localization Pro',
                'price'        => 3164,
                'description'  => 'Full localization for manuscripts up to 100k words.',
                'badge'        => 'TRANSLATION',
                'button_text'  => 'Get Started',
                'features'     => [
                    'Genre specialist translator',
                    'Full cultural localization',
                    'Marketing copy translation',
                    'Unlimited revisions',
                ],
                'is_featured' => false,
                'is_active'   => true,
                'sort_order'  => 24,
            ],
        ];

        foreach ($plans as $plan) {
            DB::table('plans')->updateOrInsert(
                ['key' => $plan['key']],
                [
                    'name'        => $plan['name'],
                    'price'       => $plan['price'],
                    'description' => $plan['description'],
                    'badge'       => $plan['badge'],
                    'button_text' => $plan['button_text'],
                    'features'    => json_encode($plan['features']),
                    'is_featured' => $plan['is_featured'],
                    'is_active'   => $plan['is_active'],
                    'sort_order'  => $plan['sort_order'],
                ]
            );
        }

        $addons = [
            'transl-words' => ['10,000 Additional Words', 497, 'Extend word count'],
            'transl-rush'  => ['Rush Delivery (2-3 Days)', 127, '2-3 day turnaround'],
        ];

        foreach ($addons as $key => [$name, $price, $desc]) {
            $sort = DB::table('addons')->max('sort_order') ?? 0;
            DB::table('addons')->updateOrInsert(
                ['key' => $key],
                [
                    'name'        => $name,
                    'price'       => $price,
                    'description' => $desc,
                    'service'     => 'Book Translation',
                    'is_active'   => true,
                    'sort_order'  => $sort + 1,
                ]
            );
        }
    }

    public function down(): void
    {
        DB::table('plans')->whereIn('key', [
            'translation-essential',
            'translation-ready',
            'translation-pro',
        ])->delete();

        DB::table('addons')->where('service', 'Book Translation')->delete();
    }
};