<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    public function run(): void
    {
        $plans = [
            [
                'key'          => 'essentials',
                'name'         => 'Author Essentials',
                'price'        => 997,
                'description'  => 'KDP-ready publishing essentials for your first release.',
                'badge'        => 'ESSENTIALS',
                'button_text'  => 'Start with Essentials',
                'features'     => [
                    'Proofread + edit',
                    'Full-wrap cover design',
                    'Print + eBook formatting',
                    'KDP setup & upload',
                    'A+ Content basics',
                ],
                'is_featured' => false,
                'is_active'   => true,
                'sort_order'  => 1,
            ],
            [
                'key'          => 'bestseller',
                'name'         => 'Bestseller Bundle',
                'price'        => 2997,
                'description'  => 'Sales-ready publishing plus launch momentum.',
                'badge'        => 'PROFESSIONAL',
                'button_text'  => 'Choose the Bundle',
                'features'     => [
                    'Everything in Essentials',
                    'Developmental editing support',
                    'KDP + IngramSpark',
                    '90-day Amazon Ads campaign',
                    'Launch strategy & assets',
                    'Project-managed delivery',
                ],
                'is_featured' => true,
                'is_active'   => true,
                'sort_order'  => 2,
            ],
            [
                'key'          => 'empire',
                'name'         => 'Empire Builder',
                'price'        => 4997,
                'description'  => 'Author-brand expansion across formats and campaigns.',
                'badge'        => 'PREMIUM',
                'button_text'  => 'Build the Empire',
                'features'     => [
                    'Everything in Bestseller Bundle',
                    'Audiobook production',
                    'Author website',
                    'PR & podcast outreach',
                    'Ongoing ads management',
                ],
                'is_featured' => false,
                'is_active'   => true,
                'sort_order'  => 3,
            ],
        ];

        DB::table('plans')->truncate();

        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}
