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
            ['key' => 'ed-rush-3',      'name' => 'Rush Delivery (3 Days)',         'price' => 75,   'description' => 'Express 3-day turnaround for Fresh Eyes tier', 'service' => 'Editing & Proofreading'],
            ['key' => 'ed-rush-5',      'name' => 'Rush Delivery (5 Days)',         'price' => 60,   'description' => 'Express 5-day turnaround for Deep Clean tier', 'service' => 'Editing & Proofreading'],
            ['key' => 'ed-rush-7',      'name' => 'Rush Delivery (7 Days)',         'price' => 40,   'description' => 'Express 7-day turnaround for Full Makeover tier', 'service' => 'Editing & Proofreading'],
            ['key' => 'ed-revision',    'name' => 'Additional Revision',            'price' => 15,   'description' => 'One additional revision round', 'service' => 'Editing & Proofreading'],
            ['key' => 'ed-line-edit',   'name' => 'Line Edit',                      'price' => 95,   'description' => 'Sentence-level refinement for flow and clarity', 'service' => 'Editing & Proofreading'],
            ['key' => 'ed-plagiarism',  'name' => 'Plagiarism Check',               'price' => 45,   'description' => 'Full plagiarism scan with detailed report', 'service' => 'Editing & Proofreading'],
            ['key' => 'ed-report',      'name' => 'Editing Summary Report',         'price' => 35,   'description' => 'Comprehensive report of all edits and suggestions', 'service' => 'Editing & Proofreading'],
            ['key' => 'ed-formatting',  'name' => 'Book Formatting',                'price' => 295,  'description' => 'Professional interior layout and formatting', 'service' => 'Editing & Proofreading'],
            ['key' => 'ed-query-help',  'name' => 'Query Letter Help',              'price' => 125,  'description' => 'Guidance and feedback on your query letter', 'service' => 'Editing & Proofreading'],
            ['key' => 'ed-query-letter','name' => 'Query Letter',                   'price' => 95,   'description' => 'Professional query letter written for you', 'service' => 'Editing & Proofreading'],
            ['key' => 'ed-two-pass',    'name' => 'Two-pass Edit',                  'price' => 95,   'description' => 'Second editing pass for extra polish', 'service' => 'Editing & Proofreading'],
            ['key' => 'ed-style-sheet', 'name' => 'Style Sheet',                    'price' => 55,   'description' => 'Custom style guide for your manuscript', 'service' => 'Editing & Proofreading'],
            ['key' => 'ed-synopsis',    'name' => 'Book Synopsis',                  'price' => 75,   'description' => 'Professional book synopsis for submissions', 'service' => 'Editing & Proofreading'],
            ['key' => 'ed-fact-check',  'name' => 'Fact-checking',                  'price' => 115,  'description' => 'Verify facts, dates, and references', 'service' => 'Editing & Proofreading'],
            ['key' => 'format-rush2',     'name' => 'Rush Delivery (2-3 Days)',           'price' => 97,    'description' => 'Express 2-3 day turnaround', 'service' => 'Book Formatting'],
            ['key' => 'format-ebook',     'name' => 'eBook Formatting Bundle',            'price' => 45,    'description' => 'Professional ePub formatting included', 'service' => 'Book Formatting'],
            ['key' => 'format-revisions', 'name' => 'Unlimited Revisions Upgrade',        'price' => 45,    'description' => 'Upgrade from 3 revisions to unlimited', 'service' => 'Book Formatting'],
            ['key' => 'format-copyright', 'name' => 'Copyright Page Setup',               'price' => 45,    'description' => 'Professionally formatted copyright page', 'service' => 'Book Formatting'],
            ['key' => 'format-kw',        'name' => 'Amazon Keywords & Categories Research', 'price' => 81, 'description' => 'Optimized keywords and categories for Amazon', 'service' => 'Book Formatting'],
            ['key' => 'format-cover',     'name' => 'Book Cover Design (Print & eBook)',  'price' => 265.50,'description' => 'Professional cover for print and digital', 'service' => 'Book Formatting'],
            ['key' => 'format-kdp',       'name' => 'Amazon KDP Upload Service',          'price' => 445.50,'description' => 'Includes metadata optimization', 'service' => 'Book Formatting'],
        ];

        DB::table('addons')->truncate();

        foreach ($addons as $index => $addon) {
            $addon['sort_order'] = $index + 1;
            Addon::create($addon);
        }
    }
}
