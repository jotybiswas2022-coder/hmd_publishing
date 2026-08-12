<?php

namespace Database\Seeders;

use App\Models\Addon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddonSeeder extends Seeder
{
    public function run(): void
    {
        $addons = [
            ['key' => 'rush',          'name' => 'Rush Delivery (2-3 Days)',      'price' => 127,  'description' => 'Express 2-3 day turnaround for entire package', 'service' => 'Complete Publishing'],
            ['key' => 'audiobook',     'name' => 'Audiobook Production',          'price' => 1497, 'description' => 'Professional narration and production', 'service' => 'Complete Publishing'],
            ['key' => 'translation',   'name' => 'Book Translation',              'price' => 1297, 'description' => 'Translate to Spanish, German, or French', 'service' => 'Complete Publishing'],
            ['key' => 'illustrations', 'name' => 'Custom Illustrations (10)',     'price' => 1097, 'description' => '10 custom full-color illustrations', 'service' => 'Complete Publishing'],
            ['key' => 'advertising',   'name' => 'Amazon Advertising (3 Months)', 'price' => 1897, 'description' => 'Expert Amazon Ads management for 3 months', 'service' => 'Complete Publishing'],
            ['key' => 'website',       'name' => 'Author Website',                'price' => 997,  'description' => 'Professional 5-page author website', 'service' => 'Complete Publishing'],
            ['key' => 'press',         'name' => 'Press Release & Distribution',  'price' => 497,  'description' => 'Professional press release and media distribution', 'service' => 'Complete Publishing'],
            ['key' => 'wordcount',     'name' => 'Extended Word Count (+20k words)', 'price' => 317, 'description' => 'Add 20,000 words to your editing allowance', 'service' => 'Complete Publishing'],
            ['key' => 'revisions',     'name' => 'Unlimited Revisions',           'price' => 187,  'description' => 'Unlimited revision rounds for all services', 'service' => 'Complete Publishing'],
            ['key' => 'vip',           'name' => 'VIP Priority Support',          'price' => 249,  'description' => '24/7 priority support with dedicated manager', 'service' => 'Complete Publishing'],
            ['key' => 'ghostwords',    'name' => '10,000 Extra Words',             'price' => 997,  'description' => 'Extend your ghostwriting word count', 'service' => 'Book Writing & Ghostwriting'],
        ];

        DB::table('addons')->truncate();

        foreach ($addons as $index => $addon) {
            $addon['sort_order'] = $index + 1;
            Addon::create($addon);
        }
    }
}
