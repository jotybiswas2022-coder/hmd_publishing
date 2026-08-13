<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        $plans = [
            [
                'key'          => 'ghost-cover-ebook',
                'name'         => 'eBook Essential',
                'price'        => 127,
                'description'  => 'Front cover only — perfect for eBook authors.',
                'badge'        => 'BOOK COVER',
                'button_text'  => 'Get Started',
                'features'     => [
                    '1 custom cover concept',
                    '2 revision rounds',
                    '3D mockup included',
                    'Source file included',
                    'eBook cover JPG/PNG',
                ],
                'is_featured' => false,
                'is_active'   => true,
                'sort_order'  => 19,
            ],
            [
                'key'          => 'ghost-cover-print',
                'name'         => 'Print Ready',
                'price'        => 197,
                'description'  => 'Full wrap — complete solution for eBook + paperback.',
                'badge'        => 'MOST POPULAR',
                'button_text'  => 'Get Started',
                'features'     => [
                    '2 custom cover concepts',
                    '3 revision rounds',
                    'Front + back + spine',
                    'eBook + print-ready PDF',
                    '3D mockup included',
                    'ISBN barcode placement',
                ],
                'is_featured' => true,
                'is_active'   => true,
                'sort_order'  => 20,
            ],
            [
                'key'          => 'ghost-cover-launch',
                'name'         => 'Launch Bundle',
                'price'        => 297,
                'description'  => 'Everything you need for a professional launch.',
                'badge'        => 'BOOK COVER',
                'button_text'  => 'Get Started',
                'features'     => [
                    '3 custom concepts',
                    '4 revision rounds',
                    'Full wrap design',
                    'Audiobook cover (ACX)',
                    'Social media kit — 10 graphics',
                    'ISBN barcode placement',
                    'Priority support',
                ],
                'is_featured' => false,
                'is_active'   => true,
                'sort_order'  => 21,
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
            'cover-concept'    => ['Additional Concept',        67,   'Extra design direction'],
            'cover-back-spine' => ['Back & Spine',              67,   'Add to Basic package'],
            'cover-hardcover'  => ['Hardcover Jacket',          67,   'Dust jacket design'],
            'cover-audiobook'  => ['Audiobook Cover (ACX)',     67,   'Square format for audiobook'],
            'cover-social'     => ['Social Media Kit (10)',     147,  '10 promotional graphics'],
            'cover-animated'   => ['Animated Cover',            127,  'Motion graphic animation'],
            'cover-mockup'     => ['3D Mockup Pack (5)',        59,   '5 professional angles'],
            'cover-series'     => ['Series Branding',           147,  'Style guide for series'],
            'cover-rush'       => ['Rush 48-Hour',              127,  'Urgent turnaround'],
            'cover-revision'   => ['Additional Revision',       19.99,'Extra revision round'],
            'cover-copy'       => ['Back Cover Copy',           67,   'Professional blurb writing'],
            'cover-coaching'   => ['1 Hour Coaching',           127,  'Design consultation call'],
        ];

        foreach ($addons as $key => [$name, $price, $desc]) {
            $sort = DB::table('addons')->max('sort_order') ?? 0;
            DB::table('addons')->updateOrInsert(
                ['key' => $key],
                [
                    'name'        => $name,
                    'price'       => $price,
                    'description' => $desc,
                    'service'     => 'Book Cover Design',
                    'is_active'   => true,
                    'sort_order'  => $sort + 1,
                ]
            );
        }
    }

    public function down(): void
    {
        DB::table('plans')->whereIn('key', [
            'ghost-cover-ebook',
            'ghost-cover-print',
            'ghost-cover-launch',
        ])->delete();

        DB::table('addons')->where('service', 'Book Cover Design')->delete();
    }
};
