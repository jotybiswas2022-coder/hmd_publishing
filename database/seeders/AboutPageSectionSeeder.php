<?php

namespace Database\Seeders;

use App\Models\AboutPageSection;
use Illuminate\Database\Seeder;

class AboutPageSectionSeeder extends Seeder
{
    public function run(): void
    {
        // Delete existing
        AboutPageSection::truncate();

        // --- Hero ---
        AboutPageSection::create([
            'key'          => 'hero',
            'section_type' => 'hero',
            'title'        => 'About HMD Publishing',
            'description'  => 'We help authors turn serious manuscripts into credible published books.',
            'content'      => 'Since 2015, HMD has supported authors across editing, design, formatting, publishing setup, and marketing. The aim is not just to finish files. It is to help books look trustworthy, launch cleanly, and perform with more confidence in the market.',
            'button_text'  => 'Start a publishing conversation →',
            'url'          => '/contact',
            'meta'         => [
                'pill_stars'  => '★★★★★',
                'pill_rating' => '4.7 out of 5',
                'pill_text'   => 'Based on 83 Trustpilot reviews',
                'btn2_text'   => 'View portfolio work',
                'btn2_url'    => '/portfolio',
            ],
            'is_active'    => true,
            'sort_order'   => 0,
        ]);

        // --- Stats ---
        $stats = [
            ['10,000+', 'books published'],
            ['4,000+', 'five-star reviews'],
            ['47', 'countries served'],
            ['2015', 'supporting authors since'],
        ];
        foreach ($stats as $i => [$number, $label]) {
            AboutPageSection::create([
                'key' => 'stat_' . ($i + 1), 'section_type' => 'stats',
                'title' => $number, 'description' => $label,
                'is_active' => true, 'sort_order' => 10 + $i,
            ]);
        }

        // --- Need ---
        AboutPageSection::create([
            'key' => 'need', 'section_type' => 'need',
            'title' => 'A team that can connect editorial, design, publishing, and launch decisions.',
            'description' => 'Strong books rarely break because of one giant mistake. They usually underperform because the details are disconnected. HMD was built to coordinate those details.',
            'is_active' => true, 'sort_order' => 20,
        ]);

        $needCards = [
            ['Editing and design aligned to the market', 'Editorial and creative decisions work together around the audience the book wants to reach.'],
            ['Publishing setup handled with retail credibility', 'Files, metadata and publishing details are prepared with the final retail presentation in mind.'],
            ['Launch support when the book needs visibility', 'Marketing and launch support can continue beyond simply delivering the final files.'],
        ];
        foreach ($needCards as $i => [$title, $text]) {
            AboutPageSection::create([
                'key' => 'need_card_' . ($i + 1), 'section_type' => 'need_cards',
                'title' => $title, 'description' => $text,
                'is_active' => true, 'sort_order' => 21 + $i,
            ]);
        }

        // --- Principle ---
        AboutPageSection::create([
            'key' => 'principle', 'section_type' => 'principle',
            'title' => 'The goal is a book that feels commercially ready, not simply completed.',
            'description' => 'That means clearer positioning, stronger production standards, and a publishing route built around what the author actually needs next.',
            'is_active' => true, 'sort_order' => 30,
        ]);

        $pCards = [
            ['✎', 'Editing', 'Editing and manuscript refinement'],
            ['◈', 'Design', 'Cover design and interior formatting'],
            ['□', 'Publishing', 'Publishing setup and distribution'],
            ['↗', 'Growth', 'Launch strategy and audience growth'],
        ];
        foreach ($pCards as $i => [$icon, $title, $text]) {
            AboutPageSection::create([
                'key' => 'principle_card_' . ($i + 1), 'section_type' => 'principle_cards',
                'icon' => $icon, 'title' => $title, 'description' => $text,
                'is_active' => true, 'sort_order' => 31 + $i,
            ]);
        }

        // --- Thinking ---
        AboutPageSection::create([
            'key' => 'thinking', 'section_type' => 'thinking',
            'title' => 'Publishing support works better when it is joined up.',
            'description' => 'HMD sits between the manuscript and the market. The work is not about replacing the author. It is about helping the book cross that gap with more clarity, better execution, and fewer weak links along the way.',
            'is_active' => true, 'sort_order' => 40,
        ]);

        $tCards = [
            ['Publishing support should reduce noise', 'Authors usually need clearer decisions, better sequencing, and more dependable execution rather than a pile of disconnected services.'],
            ['Quality has to hold up in-store', 'The work needs to look credible on retailer pages, inside books, and across launch assets where readers actually make decisions.'],
            ['Commercial thinking matters from the first edit', 'Positioning, design, formatting, metadata, and launch planning all influence each other, so we treat them as one publishing system.'],
        ];
        foreach ($tCards as $i => [$title, $text]) {
            AboutPageSection::create([
                'key' => 'thinking_card_' . ($i + 1), 'section_type' => 'thinking_cards',
                'title' => $title, 'description' => $text,
                'is_active' => true, 'sort_order' => 41 + $i,
            ]);
        }

        // --- Model ---
        AboutPageSection::create([
            'key' => 'model', 'section_type' => 'model',
            'title' => 'The route is designed to keep good books moving with fewer breakdowns.',
            'description' => 'The work changes by project, but the through-line is consistent: understand the stage, coordinate the production path, and prepare the book for the market it is meant to reach.',
            'is_active' => true, 'sort_order' => 50,
        ]);

        $mCards = [
            ['Assess the stage and constraints', 'We look at the manuscript, target reader, launch pressure, and the level of support the book really needs.'],
            ['Build the right production route', 'Editing, design, formatting, publishing setup, and marketing support are chosen around the actual commercial goal.'],
            ['Coordinate the details', 'Files, metadata, retail presentation, and supporting assets are handled together for a consistent final release.'],
            ['Support the launch and next move', 'We can extend into launch strategy, Amazon advertising, audience growth, and longer-term publishing support.'],
        ];
        foreach ($mCards as $i => [$title, $text]) {
            AboutPageSection::create([
                'key' => 'model_card_' . ($i + 1), 'section_type' => 'model_cards',
                'title' => $title, 'description' => $text,
                'is_active' => true, 'sort_order' => 51 + $i,
            ]);
        }

        // --- Team ---
        AboutPageSection::create([
            'key' => 'team', 'section_type' => 'team',
            'title' => 'The people behind the publishing work.',
            'description' => 'The team spans editorial, design, production, publishing, and marketing support. Each project may touch different specialists, but the goal is the same: move the book forward without losing quality in the handoff.',
            'button_text' => 'Meet the full team →',
            'url' => '/contact',
            'is_active' => true, 'sort_order' => 60,
        ]);

        $members = [
            ['Hammad Khalid', 'Founder & CEO', 'Helping authors across 47 countries bring their books to market.', '👤'],
            ['Aeysha Mahmood', 'Creative Director', 'Overseeing design and production output at HMD Publishing.', '👩'],
            ['Muhammad Ali', 'Lead Book Formatter', 'Specialising in print-ready interiors, eBook conversion and typesetting.', '👨'],
            ['Mukaram Hussain', 'Project Manager', 'Ensuring every project is delivered on time and to specification.', '👨'],
            ['Shaheer Ahmed', 'Advertising Strategist', 'Managing Amazon Ads campaigns to maximise visibility and sales.', '👨'],
            ['Omair Saddiq', 'Senior Cover Designer', 'Creating market-ready book covers that capture attention.', '👨'],
            ['Amal Ejaz', 'Book Cover Artist', 'Specialising in illustrated and custom artwork covers.', '👩'],
            ['Daniyal Akbar', 'Head of Operations, Pakistan', "Managing day-to-day workflow for HMD Publishing's Pakistan office.", '👨'],
        ];
        foreach ($members as $i => [$name, $role, $bio, $emoji]) {
            AboutPageSection::create([
                'key' => 'team_member_' . ($i + 1), 'section_type' => 'team_members',
                'title' => $name, 'description' => $role, 'content' => $bio, 'icon' => $emoji,
                'is_active' => true, 'sort_order' => 61 + $i,
            ]);
        }

        // --- Proof ---
        AboutPageSection::create([
            'key' => 'proof', 'section_type' => 'proof',
            'title' => 'Authors usually stay with HMD because the work feels coordinated, not fragmented.',
            'description' => 'The strongest feedback tends to point to the same things: dependable communication, joined-up execution, and a finished book that looks more credible in the market than it did before.',
            'is_active' => true, 'sort_order' => 70,
        ]);

        $testimonials = [
            ['★★★★★', 'Started with just an unedited manuscript. HMD handled everything — editing, formatting, cover, and ads. Six months later, I\'m a bestselling author in three categories. This is my fourth book with them.', 'Sahil', 'Author of THE FREEDOM FORMULA', 'THE FREEDOM FORMULA'],
            ['★★★★★', 'The team\'s communication is outstanding. They explained every step, met every deadline, and the quality exceeded expectations. My book looks and reads professionally.', 'Dr. James Orrington', 'Author of The Throne and Liberty', 'The Throne and Liberty'],
            ['★★★★★', 'Exceeded all expectations. My book looks like it belongs in Waterstones. The complete package took my manuscript from Word document to bestseller.', 'Donna Hoshide', 'Author of What Are You?', 'What Are You?'],
        ];
        foreach ($testimonials as $i => [$stars, $quote, $author, $label, $book]) {
            AboutPageSection::create([
                'key' => 'testimonial_' . ($i + 1), 'section_type' => 'testimonials',
                'title' => $author, 'description' => $label, 'content' => $quote, 'url' => $book,
                'meta' => ['stars' => $stars],
                'is_active' => true, 'sort_order' => 71 + $i,
            ]);
        }

        // --- FAQ ---
        AboutPageSection::create([
            'key' => 'faq', 'section_type' => 'faq',
            'title' => 'Common questions about HMD.',
            'description' => 'These are the questions authors usually ask before deciding whether to start a project or consultation with the team.',
            'is_active' => true, 'sort_order' => 80,
        ]);

        $faqs = [
            ['How long have you been in business?', 'We\'ve been helping authors publish successfully for over 10 years, with more than 10,000 books published across 47 countries.'],
            ['What\'s your success rate?', '87% of books we\'ve worked on have achieved bestseller status in their categories. We\'re proud of our track record in helping authors succeed.'],
            ['Can I see examples of your work?', 'Yes. Visit our portfolio page to see covers, formatting samples, and success stories organised by genre.'],
            ['Do you offer consultations?', 'Yes, we offer free 15-minute consultations to discuss your project and recommend the best services for your needs.'],
        ];
        foreach ($faqs as $i => [$question, $answer]) {
            AboutPageSection::create([
                'key' => 'faq_item_' . ($i + 1), 'section_type' => 'faq_items',
                'title' => $question, 'content' => $answer,
                'is_active' => true, 'sort_order' => 81 + $i,
            ]);
        }

        // --- CTA ---
        AboutPageSection::create([
            'key' => 'cta', 'section_type' => 'cta',
            'title' => 'If the route is still unclear, start with the conversation.',
            'description' => 'We can look at your manuscript stage, publishing goal, and likely next step, then point you toward the package, service, or phased route that makes the most sense.',
            'button_text' => 'Book a free consultation →',
            'url' => '/contact',
            'meta' => [
                'btn2_text' => 'Explore services',
                'btn2_url'  => '/services',
            ],
            'is_active' => true, 'sort_order' => 90,
        ]);
    }
}
