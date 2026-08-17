<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        $plans = [
            [
                'key'          => 'launch-blueprint',
                'name'         => 'Launch Blueprint',
                'price'        => 197,
                'description'  => 'Custom launch plan and sequencing document.',
                'badge'        => 'LAUNCH STRATEGY',
                'button_text'  => 'Get Started',
                'features'     => [
                    'Custom launch plan',
                    'Timeline & milestones',
                    'Platform recommendations',
                    'Email sequence template',
                ],
                'is_featured' => false,
                'is_active'   => true,
                'sort_order'  => 27,
            ],
            [
                'key'          => 'launch-manager',
                'name'         => 'Launch Manager',
                'price'        => 397,
                'description'  => 'Weekly strategy support and launch team coordination.',
                'badge'        => 'LAUNCH STRATEGY',
                'button_text'  => 'Get Started',
                'features'     => [
                    'Everything in Blueprint',
                    'Weekly strategy calls',
                    'Launch team coordination',
                    'Social media planning',
                    'ARC management',
                ],
                'is_featured' => true,
                'is_active'   => true,
                'sort_order'  => 28,
            ],
            [
                'key'          => 'launch-bestseller',
                'name'         => 'Bestseller Launch',
                'price'        => 597,
                'description'  => 'Full launch execution with ads, PR and post-launch review.',
                'badge'        => 'LAUNCH STRATEGY',
                'button_text'  => 'Get Started',
                'features'     => [
                    'Everything in Launch Manager',
                    'Full execution support',
                    'Ad campaign management',
                    'PR outreach',
                    'Post-launch review',
                ],
                'is_featured' => false,
                'is_active'   => true,
                'sort_order'  => 29,
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
            [
                'key'         => 'launch-coaching',
                'name'        => 'Launch Coaching Call',
                'price'       => 187,
                'description' => 'Personal guidance session',
            ],
            [
                'key'         => 'launch-execution',
                'name'        => 'Execution Support',
                'price'       => 627,
                'description' => 'Hands-on launch help',
            ],
        ];

        $sort = DB::table('addons')->max('sort_order') ?? 0;

        foreach ($addons as $i => $addon) {
            DB::table('addons')->updateOrInsert(
                ['key' => $addon['key']],
                [
                    'name'        => $addon['name'],
                    'price'       => $addon['price'],
                    'description' => $addon['description'],
                    'service'     => 'Launch Strategy',
                    'is_active'   => true,
                    'sort_order'  => $sort + $i + 1,
                ]
            );
        }
    }

    public function down(): void
    {
        DB::table('plans')->whereIn('key', [
            'launch-blueprint',
            'launch-manager',
            'launch-bestseller',
        ])->delete();
        DB::table('addons')->whereIn('key', [
            'launch-coaching',
            'launch-execution',
        ])->delete();
    }
};