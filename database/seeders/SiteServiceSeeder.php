<?php

namespace Database\Seeders;

use App\Models\SiteService;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            // ================= PRODUCTION & DESIGN =================
            ['name' => 'Book Writing & Ghostwriting',    'category' => 'production', 'url' => '/services/book-writing',       'price' => 'From £1,497', 'delivery_time' => '4–13 weeks',     'badge' => null,        'has_arrow' => true,  'is_dark' => false],
            ['name' => 'Editing Services',               'category' => 'production', 'url' => '/services/editing',           'price' => 'From £117',   'delivery_time' => '7–14 days',     'badge' => 'POPULAR',   'has_arrow' => true,  'is_dark' => false],
            ['name' => 'Book Formatting',                'category' => 'production', 'url' => '/services/book-formatting', 'price' => 'From £147',   'delivery_time' => '5–10 days',     'badge' => null,        'has_arrow' => true,  'is_dark' => false],
            ['name' => 'Children\'s Book Formatting',    'category' => 'production', 'url' => null,                          'price' => 'From £97',    'delivery_time' => '5–10 days',     'badge' => null,        'has_arrow' => false, 'is_dark' => false],
            ['name' => 'Children\'s Book Illustrations', 'category' => 'production', 'url' => '/services/book-illustrations', 'price' => 'From £497',   'delivery_time' => '3–6 weeks',     'badge' => null,        'has_arrow' => true,  'is_dark' => false],
            ['name' => 'Custom Cover Design',            'category' => 'production', 'url' => '/services/book-cover-design', 'price' => 'From £127',   'delivery_time' => '7–14 days',     'badge' => 'POPULAR',   'has_arrow' => true,  'is_dark' => false],
            ['name' => 'Audio Book Production',          'category' => 'production', 'url' => null,                          'price' => 'From £1,050', 'delivery_time' => '2–4 weeks',     'badge' => null,        'has_arrow' => false, 'is_dark' => false],
            ['name' => 'Book Translation',               'category' => 'production', 'url' => null,                          'price' => 'From £797',   'delivery_time' => '2–4 weeks',     'badge' => null,        'has_arrow' => false, 'is_dark' => false],

            // ================= PUBLISHING & STRATEGY =================
            ['name' => 'Publishing Services',            'category' => 'publishing', 'url' => '/services/publishing',        'price' => 'From £297',   'delivery_time' => '7–21 days',     'badge' => null,             'has_arrow' => false, 'is_dark' => false],
            ['name' => 'Complete Publishing Package',    'category' => 'publishing', 'url' => null,                          'price' => '£2,997',      'delivery_time' => '6–13 weeks',    'badge' => 'MOST POPULAR',   'has_arrow' => false, 'is_dark' => true],
            ['name' => 'Book Launch Strategy',           'category' => 'publishing', 'url' => null,                          'price' => 'From £197',   'delivery_time' => '7–21 days',     'badge' => null,             'has_arrow' => false, 'is_dark' => false],
            ['name' => 'Series Strategy & Backlist',     'category' => 'publishing', 'url' => null,                          'price' => 'From £147',   'delivery_time' => '7–21 days',     'badge' => null,             'has_arrow' => false, 'is_dark' => false],
            ['name' => 'Consultation & Contact',         'category' => 'publishing', 'url' => null,                          'price' => 'From £97',    'delivery_time' => 'Same day',      'badge' => null,             'has_arrow' => false, 'is_dark' => false],
            ['name' => 'ISBN Registration',              'category' => 'publishing', 'url' => null,                          'price' => 'From £27.99', 'delivery_time' => 'Same day',      'badge' => 'QUICK START',   'has_arrow' => false, 'is_dark' => false],

            // ================= MARKETING & PROMOTION =================
            ['name' => 'Book Marketing & Amazon Ads',    'category' => 'marketing',  'url' => null,                          'price' => 'From £467',     'delivery_time' => 'Ongoing',      'badge' => 'POPULAR',   'has_arrow' => false, 'is_dark' => false],
            ['name' => 'Email Marketing for Authors',    'category' => 'marketing',  'url' => null,                          'price' => 'From £197/month', 'delivery_time' => 'Ongoing',    'badge' => null,        'has_arrow' => false, 'is_dark' => false],
            ['name' => 'Review Management',              'category' => 'marketing',  'url' => null,                          'price' => 'From £97',      'delivery_time' => '2–4 weeks',    'badge' => null,        'has_arrow' => false, 'is_dark' => false],
            ['name' => 'Social Media Management',        'category' => 'marketing',  'url' => null,                          'price' => 'From £197/month', 'delivery_time' => 'Ongoing',    'badge' => null,        'has_arrow' => false, 'is_dark' => false],
            ['name' => 'PR and Podcast Outreach',        'category' => 'marketing',  'url' => null,                          'price' => 'From £297',     'delivery_time' => '2–6 weeks',    'badge' => null,        'has_arrow' => false, 'is_dark' => false],
            ['name' => 'Content Repurposing',            'category' => 'marketing',  'url' => null,                          'price' => 'From £147',     'delivery_time' => '7–21 days',    'badge' => null,        'has_arrow' => false, 'is_dark' => false],
            ['name' => 'Book Video Trailer',             'category' => 'marketing',  'url' => null,                          'price' => 'From £297',     'delivery_time' => '7–14 days',    'badge' => null,        'has_arrow' => false, 'is_dark' => false],
            ['name' => 'Amazon A+ Content',              'category' => 'marketing',  'url' => null,                          'price' => 'From £147',     'delivery_time' => '5–10 days',    'badge' => null,        'has_arrow' => false, 'is_dark' => false],
            ['name' => 'Author Website Design',          'category' => 'marketing',  'url' => null,                          'price' => 'From £397',     'delivery_time' => '2–4 weeks',    'badge' => null,        'has_arrow' => false, 'is_dark' => false],
        ];

        DB::table('site_services')->truncate();

        foreach ($services as $index => $service) {
            $service['sort_order'] = $index + 1;
            $service['is_active'] = true;
            SiteService::create($service);
        }
    }
}