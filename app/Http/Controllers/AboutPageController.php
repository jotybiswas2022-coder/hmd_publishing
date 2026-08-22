<?php

namespace App\Http\Controllers;

use App\Models\AboutPageSection;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AboutPageController extends Controller
{
    public function index()
    {
        $sections = AboutPageSection::orderBy('sort_order')->get();

        return view('backend.about-page.index', compact('sections'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'hero_eyebrow'        => 'nullable|string|max:255',
            'hero_title'          => 'nullable|string|max:500',
            'hero_description'    => 'nullable|string|max:1000',
            'hero_btn1_text'      => 'nullable|string|max:100',
            'hero_btn1_url'       => 'nullable|string|max:500',
            'hero_btn2_text'      => 'nullable|string|max:100',
            'hero_btn2_url'       => 'nullable|string|max:500',
            'hero_pill_stars'     => 'nullable|string|max:100',
            'hero_pill_rating'    => 'nullable|string|max:100',
            'hero_pill_text'      => 'nullable|string|max:255',

            'stat_number.*'       => 'nullable|string|max:50',
            'stat_label.*'        => 'nullable|string|max:255',
            'stat_is_active.*'    => 'nullable',

            'need_eyebrow'        => 'nullable|string|max:255',
            'need_title'          => 'nullable|string|max:500',
            'need_description'    => 'nullable|string|max:1000',

            'need_card_title.*'   => 'nullable|string|max:255',
            'need_card_text.*'    => 'nullable|string|max:500',
            'need_card_is_active.*' => 'nullable',

            'principle_eyebrow'   => 'nullable|string|max:255',
            'principle_title'     => 'nullable|string|max:500',
            'principle_desc'      => 'nullable|string|max:1000',

            'principle_card_icon.*'   => 'nullable|string|max:10',
            'principle_card_title.*'  => 'nullable|string|max:255',
            'principle_card_text.*'   => 'nullable|string|max:500',
            'principle_card_is_active.*' => 'nullable',

            'thinking_eyebrow'    => 'nullable|string|max:255',
            'thinking_title'      => 'nullable|string|max:500',
            'thinking_desc'       => 'nullable|string|max:1000',

            'thinking_card_title.*' => 'nullable|string|max:255',
            'thinking_card_text.*'  => 'nullable|string|max:500',
            'thinking_card_is_active.*' => 'nullable',

            'model_eyebrow'       => 'nullable|string|max:255',
            'model_title'         => 'nullable|string|max:500',
            'model_desc'          => 'nullable|string|max:1000',

            'model_card_title.*'  => 'nullable|string|max:255',
            'model_card_text.*'   => 'nullable|string|max:500',
            'model_card_is_active.*' => 'nullable',

            'team_eyebrow'        => 'nullable|string|max:255',
            'team_title'          => 'nullable|string|max:500',
            'team_desc'           => 'nullable|string|max:1000',
            'team_link_text'      => 'nullable|string|max:100',
            'team_link_url'       => 'nullable|string|max:500',

            'team_member_name.*'        => 'nullable|string|max:255',
            'team_member_role.*'        => 'nullable|string|max:255',
            'team_member_bio.*'         => 'nullable|string|max:500',
            'team_member_emoji.*'       => 'nullable|string|max:10',
            'team_member_photo.*'       => 'nullable|image|mimes:jpeg,png,webp,gif|max:2048',
            'team_member_photo_url.*'   => 'nullable|string|max:500',
            'team_member_is_active.*'   => 'nullable',

            'proof_eyebrow'       => 'nullable|string|max:255',
            'proof_title'         => 'nullable|string|max:500',
            'proof_desc'          => 'nullable|string|max:1000',

            'testimonial_stars.*'     => 'nullable|string|max:10',
            'testimonial_quote.*'     => 'nullable|string|max:1000',
            'testimonial_author.*'    => 'nullable|string|max:255',
            'testimonial_label.*'     => 'nullable|string|max:255',
            'testimonial_book.*'      => 'nullable|string|max:255',
            'testimonial_is_active.*' => 'nullable',

            'faq_eyebrow'         => 'nullable|string|max:255',
            'faq_title'           => 'nullable|string|max:500',
            'faq_desc'            => 'nullable|string|max:1000',

            'faq_question.*'      => 'nullable|string|max:500',
            'faq_answer.*'        => 'nullable|string|max:1000',
            'faq_is_active.*'     => 'nullable',

            'cta_eyebrow'         => 'nullable|string|max:255',
            'cta_title'           => 'nullable|string|max:500',
            'cta_desc'            => 'nullable|string|max:1000',
            'cta_btn1_text'       => 'nullable|string|max:100',
            'cta_btn1_url'        => 'nullable|string|max:500',
            'cta_btn2_text'       => 'nullable|string|max:100',
            'cta_btn2_url'        => 'nullable|string|max:500',
        ]);

        // --- Hero ---
        $this->upsert('hero', 'hero', $request->only([
            'hero_eyebrow', 'hero_title', 'hero_description',
            'hero_btn1_text', 'hero_btn1_url', 'hero_btn2_text', 'hero_btn2_url',
            'hero_pill_stars', 'hero_pill_rating', 'hero_pill_text',
        ]), [
            'eyebrow'       => $request->input('hero_eyebrow'),
            'title'         => $request->input('hero_title'),
            'description'   => $request->input('hero_description'),
            'button_text'   => $request->input('hero_btn1_text'),
            'url'           => $request->input('hero_btn1_url'),
            'meta'          => [
                'btn2_text'     => $request->input('hero_btn2_text'),
                'btn2_url'      => $request->input('hero_btn2_url'),
                'pill_stars'    => $request->input('hero_pill_stars'),
                'pill_rating'   => $request->input('hero_pill_rating'),
                'pill_text'     => $request->input('hero_pill_text'),
            ],
        ]);

        // --- Stats ---
        $this->syncIndexed('stat', 'stats', [
            'title'       => 'stat_number',
            'description' => 'stat_label',
        ]);

        // --- Need cards ---
        $this->upsert('need', 'need', [], [
            'title'       => $request->input('need_title'),
            'description' => $request->input('need_description'),
        ]);

        $this->syncIndexed('need_card', 'need_cards', [
            'title'       => 'need_card_title',
            'description' => 'need_card_text',
        ]);

        // --- Principle ---
        $this->upsert('principle', 'principle', [], [
            'title'       => $request->input('principle_title'),
            'description' => $request->input('principle_desc'),
        ]);

        $this->syncIndexed('principle_card', 'principle_cards', [
            'icon'        => 'principle_card_icon',
            'title'       => 'principle_card_title',
            'description' => 'principle_card_text',
        ]);

        // --- Thinking ---
        $this->upsert('thinking', 'thinking', [], [
            'title'       => $request->input('thinking_title'),
            'description' => $request->input('thinking_desc'),
        ]);

        $this->syncIndexed('thinking_card', 'thinking_cards', [
            'title'       => 'thinking_card_title',
            'description' => 'thinking_card_text',
        ]);

        // --- Model ---
        $this->upsert('model', 'model', [], [
            'title'       => $request->input('model_title'),
            'description' => $request->input('model_desc'),
        ]);

        $this->syncIndexed('model_card', 'model_cards', [
            'title'       => 'model_card_title',
            'description' => 'model_card_text',
        ]);

        // --- Team ---
        $this->upsert('team', 'team', [], [
            'title'       => $request->input('team_title'),
            'description' => $request->input('team_desc'),
            'url'         => $request->input('team_link_url'),
            'button_text' => $request->input('team_link_text'),
        ]);

        $this->syncTeamMembers($request);

        // --- Proof / Testimonials ---
        $this->upsert('proof', 'proof', [], [
            'title'       => $request->input('proof_title'),
            'description' => $request->input('proof_desc'),
        ]);

        $this->syncIndexed('testimonial', 'testimonials', [
            'content'     => 'testimonial_quote',
            'title'       => 'testimonial_author',
            'description' => 'testimonial_label',
            'url'         => 'testimonial_book',
        ], 'testimonial_stars');

        // --- FAQ ---
        $this->upsert('faq', 'faq', [], [
            'title'       => $request->input('faq_title'),
            'description' => $request->input('faq_desc'),
        ]);

        $this->syncIndexed('faq_item', 'faq_items', [
            'title'       => 'faq_question',
            'content'     => 'faq_answer',
        ]);

        // --- CTA ---
        $this->upsert('cta', 'cta', [], [
            'title'       => $request->input('cta_title'),
            'description' => $request->input('cta_desc'),
            'button_text' => $request->input('cta_btn1_text'),
            'url'         => $request->input('cta_btn1_url'),
            'meta'        => [
                'btn2_text' => $request->input('cta_btn2_text'),
                'btn2_url'  => $request->input('cta_btn2_url'),
            ],
        ]);

        return redirect()->route('about-page.index')
            ->with('success', 'About page updated successfully.');
    }

    private function upsert(string $key, string $type, array $rawOverrides, array $attributes): void
    {
        $meta = $attributes['meta'] ?? null;
        unset($attributes['meta']);

        AboutPageSection::updateOrCreate(
            ['key' => $key],
            array_merge($attributes, [
                'section_type' => $type,
                'meta'         => $meta,
                'is_active'    => true,
                'sort_order'   => $this->sortForType($type),
            ])
        );
    }

    private function syncIndexed(string $prefix, string $type, array $fieldMap, ?string $starsField = null): void
    {
        // Delete old entries
        AboutPageSection::where('section_type', $type)->delete();

        $titles = request()->input($fieldMap['title'] ?? null);
        if (!is_array($titles)) return;

        foreach ($titles as $i => $title) {
            if (empty(trim($title ?? '')) && empty(trim(($fieldMap['content'] ? request()->input($fieldMap['content'])[$i] ?? '' : '') ?? ''))) {
                continue;
            }

            $meta = null;
            if ($starsField) {
                $meta = ['stars' => request()->input($starsField)[$i] ?? '★★★★★'];
            }

            $actives = request()->input($prefix . '_is_active');
            $isActive = !is_array($actives) || !isset($actives[$i]) || $actives[$i];

            $data = [
                'key'          => $prefix . '_' . ($i + 1),
                'section_type' => $type,
                'title'        => isset($fieldMap['title']) ? request()->input($fieldMap['title'])[$i] ?? null : null,
                'description'  => isset($fieldMap['description']) ? request()->input($fieldMap['description'])[$i] ?? null : null,
                'content'      => isset($fieldMap['content']) ? request()->input($fieldMap['content'])[$i] ?? null : null,
                'icon'         => isset($fieldMap['icon']) ? request()->input($fieldMap['icon'])[$i] ?? null : null,
                'url'          => isset($fieldMap['url']) ? request()->input($fieldMap['url'])[$i] ?? null : null,
                'meta'         => $meta,
                'is_active'    => $isActive,
                'sort_order'   => $i,
            ];

            AboutPageSection::create($data);
        }
    }

    private function syncTeamMembers(Request $request): void
    {
        AboutPageSection::where('section_type', 'team_members')->delete();

        $names = $request->input('team_member_name');
        if (!is_array($names)) return;

        $roles    = $request->input('team_member_role', []);
        $bios     = $request->input('team_member_bio', []);
        $emojis   = $request->input('team_member_emoji', []);
        $urls     = $request->input('team_member_photo_url', []);
        $actives  = $request->input('team_member_is_active', []);
        $files    = $request->file('team_member_photo', []);

        foreach ($names as $i => $name) {
            if (empty(trim($name ?? ''))) continue;

            $imagePath = null;

            // Priority: uploaded file > URL > null
            if (isset($files[$i]) && $files[$i]->isValid()) {
                $ext  = $files[$i]->getClientOriginalExtension();
                $fname = 'team-' . ($i + 1) . '-' . Str::random(6) . '.' . $ext;
                $files[$i]->storeAs('team/uploads', $fname, 'assets');
                $imagePath = 'team/uploads/' . $fname;
            } elseif (!empty(trim($urls[$i] ?? ''))) {
                $imagePath = trim($urls[$i]);
            }

            $isActive = !isset($actives[$i]) || $actives[$i];

            AboutPageSection::create([
                'key'          => 'team_member_' . ($i + 1),
                'section_type' => 'team_members',
                'title'        => $name,
                'description'  => $roles[$i] ?? null,
                'content'      => $bios[$i] ?? null,
                'icon'         => $emojis[$i] ?? '👤',
                'image'        => $imagePath,
                'is_active'    => $isActive,
                'sort_order'   => $i,
            ]);
        }
    }

    private function sortForType(string $type): int
    {
        $order = [
            'hero' => 0, 'stats' => 1, 'need' => 2, 'need_cards' => 3,
            'principle' => 4, 'principle_cards' => 5,
            'thinking' => 6, 'thinking_cards' => 7,
            'model' => 8, 'model_cards' => 9,
            'team' => 10, 'team_members' => 11,
            'proof' => 12, 'testimonials' => 13,
            'faq' => 14, 'faq_items' => 15,
            'cta' => 16,
        ];
        return $order[$type] ?? 99;
    }
}
