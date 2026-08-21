<?php

namespace Database\Seeders;

use App\Models\ServiceCategory;
use App\Models\ServicePage;
use Illuminate\Database\Seeder;

class ServicePagesSeeder extends Seeder
{
    public function run(): void
    {
        $category = ServiceCategory::firstOrCreate(
            ['slug' => 'production-design'],
            ['name' => 'Production and Design', 'is_active' => true, 'sort_order' => 0]
        );

        $marketing = ServiceCategory::firstOrCreate(
            ['slug' => 'marketing'],
            ['name' => 'Marketing & Launch', 'is_active' => true, 'sort_order' => 1]
        );

        // ─── 1. Editing & Proofreading ───
        $editing = ServicePage::updateOrCreate(
            ['slug' => 'editing'],
            [
                'service_category_id' => $category->id,
                'title'               => 'Editing & Proofreading',
                'short_description'   => 'Professional developmental, copyediting and proofreading to polish your manuscript to publishing standard.',
                'description'         => '<h2>Professional Editing Services</h2>
<p>Every great book starts with a great editor. Our team of experienced editors will refine your manuscript at every level — from big-picture structure to the final comma.</p>

<h3>What We Cover</h3>
<ul>
<li><strong>Developmental Editing</strong> — Structure, pacing, plot holes, character arcs and overall readability</li>
<li><strong>Copyediting</strong> — Grammar, consistency, clarity, style and tone alignment</li>
<li><strong>Proofreading</strong> — Final pass for typos, formatting errors and minor inconsistencies</li>
</ul>

<h3>Who Is This For?</h3>
<p>First-time authors, self-publishers and traditionally published authors who need an expert eye before publication.</p>

<h3>Turnaround Time</h3>
<p>Standard delivery is 3–6 weeks depending on word count and editing level. Rush options available.</p>',
                'price_text'          => 'From £497',
                'delivery_time'       => '3–6 weeks',
                'badge'               => 'Best Seller Pick',
                'is_active'           => true,
                'sort_order'          => 1,
            ]
        );

        $editing->plans()->delete();
        $essentials = $editing->plans()->create([
            'name'          => 'Essentials',
            'price'         => 497,
            'separate_cost' => 750,
            'description'   => 'Proofreading only — clean up typos and errors',
            'badge'         => 'ESSENTIALS',
            'button_text'   => 'Get Started',
            'features'      => ['Full proofread (up to 80,000 words)', 'One revision round', 'Style sheet provided', '5–7 day turnaround'],
            'is_featured'   => false,
            'is_active'     => true,
            'sort_order'    => 0,
        ]);

        $professional = $editing->plans()->create([
            'name'          => 'Professional',
            'price'         => 997,
            'separate_cost' => 1500,
            'description'   => 'Copyediting + proofreading for a polished manuscript',
            'badge'         => 'PROFESSIONAL',
            'button_text'   => 'Get Started',
            'features'      => ['Full copyedit (up to 80,000 words)', 'Proofreading pass included', 'Two revision rounds', 'Style sheet & continuity notes', '10–14 day turnaround'],
            'is_featured'   => true,
            'is_active'     => true,
            'sort_order'    => 1,
        ]);

        $premium = $editing->plans()->create([
            'name'          => 'Premium',
            'price'         => 1797,
            'separate_cost' => 2500,
            'description'   => 'Developmental edit + copyedit + proofread',
            'badge'         => 'PREMIUM',
            'button_text'   => 'Get Started',
            'features'      => ['Full developmental edit', 'Copyedit + proofread', 'Unlimited revision rounds', 'Detailed editorial report', 'Author consultation call', 'Priority 3-week turnaround'],
            'is_featured'   => false,
            'is_active'     => true,
            'sort_order'    => 2,
        ]);

        $editing->addons()->delete();
        $editing->addons()->create(['name' => 'Rush Delivery (50%) faster', 'price' => 197, 'description' => 'Cut turnaround time in half', 'is_active' => true, 'sort_order' => 0]);
        $editing->addons()->create(['name' => 'Additional 10,000 words', 'price' => 97, 'description' => 'Per extra 10k words beyond plan limit', 'is_active' => true, 'sort_order' => 1]);
        $editing->addons()->create(['name' => 'Author Consultation Call', 'price' => 127, 'description' => '30-minute call with your editor', 'is_active' => true, 'sort_order' => 2]);

        // ─── 2. Book Cover Design ───
        $cover = ServicePage::updateOrCreate(
            ['slug' => 'book-cover-design'],
            [
                'service_category_id' => $category->id,
                'title'               => 'Book Cover Design',
                'short_description'   => 'Eye-catching, market-ready book covers designed by professional cover artists who understand genre expectations.',
                'description'         => '<h2>Professional Book Cover Design</h2>
<p>Your cover is the first thing readers see. Our designers create covers that stand out on Amazon shelves, bookshop displays and social media feeds.</p>

<h3>What You Get</h3>
<ul>
<li><strong>Custom concept design</strong> — 3 unique concepts to choose from</li>
<li><strong>Unlimited revisions</strong> — until you are 100% happy</li>
<li><strong>Print-ready files</strong> — full wrap, spine and back cover</li>
<li><strong>Ebook cover</strong> — optimised for Amazon KDP, Apple Books and all platforms</li>
</ul>

<h3>Genre Expertise</h3>
<p>From thriller to romance, children\'s picture books to non-fiction — our designers know what works in each genre.</p>',
                'price_text'          => 'From £397',
                'delivery_time'       => '7–14 days',
                'badge'               => null,
                'is_active'           => true,
                'sort_order'          => 2,
            ]
        );

        $cover->plans()->delete();
        $cover->plans()->create([
            'name'          => 'Ebook Only',
            'price'         => 397,
            'separate_cost' => 600,
            'description'   => 'Ebook cover optimised for online platforms',
            'badge'         => 'ESSENTIALS',
            'button_text'   => 'Get Started',
            'features'      => ['1 custom cover concept', '2 revision rounds', 'Ebook-format file (JPG/PNG)', 'Basic typography', '7-day delivery'],
            'is_featured'   => false,
            'is_active'     => true,
            'sort_order'    => 0,
        ]);

        $cover->plans()->create([
            'name'          => 'Print + Ebook',
            'price'         => 697,
            'separate_cost' => 1000,
            'description'   => 'Full print wrap and ebook cover',
            'badge'         => 'PROFESSIONAL',
            'button_text'   => 'Get Started',
            'features'      => ['3 custom cover concepts', 'Unlimited revisions', 'Full print wrap (front, spine, back)', 'Ebook format included', 'Spine width calculation', '10-day delivery'],
            'is_featured'   => true,
            'is_active'     => true,
            'sort_order'    => 1,
        ]);

        $cover->plans()->create([
            'name'          => 'Premium Suite',
            'price'         => 1197,
            'separate_cost' => 1800,
            'description'   => 'Full cover suite with 3D mockups and branding',
            'badge'         => 'PREMIUM',
            'button_text'   => 'Get Started',
            'features'      => ['5 custom cover concepts', 'Unlimited revisions', 'Print + Ebook covers', '3D book mockups', 'Social media promo kit', 'Author branding elements', 'Priority 7-day delivery'],
            'is_featured'   => false,
            'is_active'     => true,
            'sort_order'    => 2,
        ]);

        $cover->addons()->delete();
        $cover->addons()->create(['name' => 'Rush Delivery', 'price' => 147, 'description' => '48-hour priority processing', 'is_active' => true, 'sort_order' => 0]);
        $cover->addons()->create(['name' => 'Audiobook Cover', 'price' => 97, 'description' => 'Square format cover for audiobook platforms', 'is_active' => true, 'sort_order' => 1]);
        $cover->addons()->create(['name' => 'Social Media Kit', 'price' => 77, 'description' => 'Instagram, Facebook and X promo graphics', 'is_active' => true, 'sort_order' => 2]);

        // ─── 3. Book Formatting ───
        $format = ServicePage::updateOrCreate(
            ['slug' => 'book-formatting'],
            [
                'service_category_id' => $category->id,
                'title'               => 'Book Formatting & Interior Design',
                'short_description'   => 'Professional interior formatting for print and ebook, ensuring your book looks polished on every device and in every format.',
                'description'         => '<h2>Professional Book Formatting</h2>
<p>Whether you need a clean ebook layout or a beautifully typeset print interior, our formatting team delivers files that meet retailer specifications and look fantastic.</p>

<h3>Print Formatting</h3>
<ul>
<li>Trim size selection and setup</li>
<li>Chapter headings, headers and footers</li>
<li>Page numbers, margins and gutters</li>
<li>Table of contents and front/back matter</li>
</ul>

<h3>Ebook Formatting</h3>
<ul>
<li>Reflowable EPUB and Kindle KPF</li>
<li>Clickable table of contents</li>
<li>Embedded fonts and images</li>
<li>Tested on Kindle, Apple Books and Kobo</li>
</ul>',
                'price_text'          => 'From £297',
                'delivery_time'       => '5–10 days',
                'badge'               => null,
                'is_active'           => true,
                'sort_order'          => 3,
            ]
        );

        $format->plans()->delete();
        $format->plans()->create([
            'name'          => 'Ebook Only',
            'price'         => 297,
            'separate_cost' => 450,
            'description'   => 'EPUB + Kindle formatted ebook files',
            'badge'         => 'ESSENTIALS',
            'button_text'   => 'Get Started',
            'features'      => ['Reflowable EPUB file', 'Kindle KPF file', 'Clickable table of contents', 'Tested on 3 platforms', '5-day delivery'],
            'is_featured'   => false,
            'is_active'     => true,
            'sort_order'    => 0,
        ]);

        $format->plans()->create([
            'name'          => 'Print + Ebook',
            'price'         => 497,
            'separate_cost' => 750,
            'description'   => 'Complete print and ebook formatting package',
            'badge'         => 'PROFESSIONAL',
            'button_text'   => 'Get Started',
            'features'      => ['Print-ready PDF (InDesign)', 'EPUB + Kindle files', 'Custom chapter design', 'Front & back matter', 'Print-ready proof check', '7-day delivery'],
            'is_featured'   => true,
            'is_active'     => true,
            'sort_order'    => 1,
        ]);

        $format->plans()->create([
            'name'          => 'Premium',
            'price'         => 897,
            'separate_cost' => 1300,
            'description'   => 'Full formatting with custom interior design',
            'badge'         => 'PREMIUM',
            'button_text'   => 'Get Started',
            'features'      => ['Custom interior design', 'Print + Ebook files', 'Custom chapter openers', 'Illustrations/image placement', 'Hardcover + paperback files', 'Unlimited revisions', 'Priority 5-day delivery'],
            'is_featured'   => false,
            'is_active'     => true,
            'sort_order'    => 2,
        ]);

        $format->addons()->delete();
        $format->addons()->create(['name' => 'Large Print Formatting', 'price' => 127, 'description' => '6x9 or 8.5x11 large print edition', 'is_active' => true, 'sort_order' => 0]);
        $format->addons()->create(['name' => 'Hardcover File Setup', 'price' => 97, 'description' => 'Additional hardcover print-ready file', 'is_active' => true, 'sort_order' => 1]);

        // ─── 4. Publishing & Distribution ───
        $pub = ServicePage::updateOrCreate(
            ['slug' => 'publishing'],
            [
                'service_category_id' => $category->id,
                'title'               => 'Publishing & Distribution',
                'short_description'   => 'Full publishing setup on Amazon KDP, IngramSpark and 40+ retailers worldwide — metadata, ISBNs and distribution handled for you.',
                'description'         => '<h2>Professional Publishing & Distribution</h2>
<p>We handle the entire publishing process so your book is available everywhere readers shop — Amazon, bookshops, libraries and online retailers across the globe.</p>

<h3>What Is Included</h3>
<ul>
<li><strong>Amazon KDP setup</strong> — Kindle ebook + paperback publishing</li>
<li><strong>IngramSpark</strong> — worldwide bookshop and library distribution</li>
<li><strong>Metadata & SEO</strong> — title, description, keywords and categories optimised for discoverability</li>
<li><strong>ISBN & barcode</strong> — assigned and formatted for print editions</li>
</ul>

<h3>Distribution Reach</h3>
<p>Your book will be available in 40+ countries through Amazon, Barnes & Noble, Waterstones, Booktopia and thousands of independent bookshops.</p>',
                'price_text'          => 'From £597',
                'delivery_time'       => '7–14 days',
                'badge'               => 'Most Popular',
                'is_active'           => true,
                'sort_order'          => 4,
            ]
        );

        $pub->plans()->delete();
        $pub->plans()->create([
            'name'          => 'Essentials',
            'price'         => 597,
            'separate_cost' => 900,
            'description'   => 'Amazon KDP publishing (Kindle + paperback)',
            'badge'         => 'ESSENTIALS',
            'button_text'   => 'Get Started',
            'features'      => ['Amazon KDP Kindle publishing', 'Amazon KDP paperback setup', 'ISBN assignment', 'Metadata & keyword optimisation', 'Quality check before launch', '7-day turnaround'],
            'is_featured'   => false,
            'is_active'     => true,
            'sort_order'    => 0,
        ]);

        $pub->plans()->create([
            'name'          => 'Professional',
            'price'         => 1197,
            'separate_cost' => 1800,
            'description'   => 'KDP + IngramSpark global distribution',
            'badge'         => 'PROFESSIONAL',
            'button_text'   => 'Get Started',
            'features'      => ['Amazon KDP (Kindle + paperback)', 'IngramSpark distribution', '40+ country availability', 'Library & bookshop access', 'Professional metadata package', 'ISBN + barcode setup', 'Launch readiness check', '10-day turnaround'],
            'is_featured'   => true,
            'is_active'     => true,
            'sort_order'    => 1,
        ]);

        $pub->plans()->create([
            'name'          => 'Premium',
            'price'         => 1997,
            'separate_cost' => 3000,
            'description'   => 'Full global publishing with dedicated support',
            'badge'         => 'PREMIUM',
            'button_text'   => 'Get Started',
            'features'      => ['Everything in Professional', 'Apple Books + Kobo + Google Play', 'Dedicated publishing manager', 'Bulk order setup for authors', 'Bookshop.org listing', 'Advanced SEO & category strategy', 'Post-launch monitoring', 'Priority 7-day turnaround'],
            'is_featured'   => false,
            'is_active'     => true,
            'sort_order'    => 2,
        ]);

        $pub->addons()->delete();
        $pub->addons()->create(['name' => 'Audiobook Distribution', 'price' => 297, 'description' => 'ACX / Findaway setup for audiobook platforms', 'is_active' => true, 'sort_order' => 0]);
        $pub->addons()->create(['name' => 'Additional ISBN', 'price' => 47, 'description' => 'Extra ISBN for a different format (e.g. hardcover)', 'is_active' => true, 'sort_order' => 1]);
        $pub->addons()->create(['name' => 'Author Website Setup', 'price' => 397, 'description' => 'Single-page author landing page with book links', 'is_active' => true, 'sort_order' => 2]);
    }
}
