<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        $plans = [
            [
                'key'          => 'ghost-publishing-launcher',
                'name'         => 'Amazon Launcher',
                'price'        => 297,
                'description'  => 'Amazon KDP setup and launch for your book.',
                'badge'        => 'PUBLISHING',
                'button_text'  => 'Get Started',
                'features'     => [
                    'Amazon KDP setup',
                    'ISBN assignment',
                    'Metadata optimization',
                    'Category selection',
                    'Launch checklist',
                ],
                'is_featured' => false,
                'is_active'   => true,
                'sort_order'  => 24,
            ],
            [
                'key'          => 'ghost-publishing-global',
                'name'         => 'Global Publisher',
                'price'        => 897,
                'description'  => 'Full global publishing across 5+ platforms.',
                'badge'        => 'PUBLISHING',
                'button_text'  => 'Talk to our team',
                'features'     => [
                    'Everything in Wide Distribution',
                    'Draft2Digital',
                    'Apple Books',
                    'Kobo & Barnes & Noble',
                    'Dedicated support',
                ],
                'is_featured' => false,
                'is_active'   => true,
                'sort_order'  => 26,
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
    }

    public function down(): void
    {
        DB::table('plans')->whereIn('key', [
            'ghost-publishing-launcher',
            'ghost-publishing-global',
        ])->delete();
    }
};
