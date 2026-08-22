@extends('backend.app')
@section('title', 'Edit About Page')

@section('content')
<div class="ab-page-wrap">

    <div class="ab-page-header">
        <div>
            <h1 class="ab-page-title"><i class="bi bi-info-circle me-2"></i>About Page Editor</h1>
            <p class="ab-page-sub">Manage all sections of the /about page from one place.</p>
        </div>
    </div>

    @if(session('success'))
        <div class="ab-alert ab-alert-success">
            <i class="bi bi-check-circle me-1"></i> {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="ab-alert ab-alert-error">
            <i class="bi bi-exclamation-triangle me-1"></i>
            Please fix the errors below.
        </div>
    @endif

    <form action="{{ route('about-page.update') }}" method="POST">
        @csrf
        @method('PUT')

        {{-- ===== HERO SECTION ===== --}}
        <div class="ab-section">
            <details open>
                <summary class="ab-section-header">
                    <span><i class="bi bi-layout-wtf me-2"></i>Hero Section</span>
                </summary>
                <div class="ab-section-body">
                    @php
                        $hero = $sections->where('key', 'hero')->first();
                        $hm = $hero->meta ?? [];
                    @endphp

                    <div class="ab-grid ab-grid-2">
                        <div class="ab-field">
                            <label>Eyebrow Text</label>
                            <input type="text" name="hero_eyebrow" class="ab-input"
                                   value="{{ old('hero_eyebrow', $hero->title ?? 'About HMD Publishing') }}">
                        </div>
                        <div class="ab-field">
                            <label>Trustpilot Pill Stars</label>
                            <input type="text" name="hero_pill_stars" class="ab-input"
                                   value="{{ old('hero_pill_stars', $hm['pill_stars'] ?? '★★★★★') }}">
                        </div>
                    </div>
                    <div class="ab-grid ab-grid-2">
                        <div class="ab-field">
                            <label>Pill Rating Text</label>
                            <input type="text" name="hero_pill_rating" class="ab-input"
                                   value="{{ old('hero_pill_rating', $hm['pill_rating'] ?? '4.7 out of 5') }}">
                        </div>
                        <div class="ab-field">
                            <label>Pill Sub-text</label>
                            <input type="text" name="hero_pill_text" class="ab-input"
                                   value="{{ old('hero_pill_text', $hm['pill_text'] ?? 'Based on 83 Trustpilot reviews') }}">
                        </div>
                    </div>

                    <div class="ab-field">
                        <label>Hero Title</label>
                        <textarea name="hero_title" class="ab-input ab-textarea" rows="2">{{ old('hero_title', $hero->description ?? 'We help authors turn serious manuscripts into credible published books.') }}</textarea>
                    </div>
                    <div class="ab-field">
                        <label>Hero Description</label>
                        <textarea name="hero_description" class="ab-input ab-textarea" rows="3">{{ old('hero_description', $hero->content ?? '') }}</textarea>
                    </div>

                    <div class="ab-grid ab-grid-2">
                        <div class="ab-field">
                            <label>CTA Button 1 Text</label>
                            <input type="text" name="hero_btn1_text" class="ab-input"
                                   value="{{ old('hero_btn1_text', $hero->button_text ?? 'Start a publishing conversation →') }}">
                        </div>
                        <div class="ab-field">
                            <label>CTA Button 1 URL</label>
                            <input type="text" name="hero_btn1_url" class="ab-input"
                                   value="{{ old('hero_btn1_url', $hero->url ?? '/contact') }}">
                        </div>
                    </div>
                    <div class="ab-grid ab-grid-2">
                        <div class="ab-field">
                            <label>CTA Button 2 Text</label>
                            <input type="text" name="hero_btn2_text" class="ab-input"
                                   value="{{ old('hero_btn2_text', $hm['btn2_text'] ?? 'View portfolio work') }}">
                        </div>
                        <div class="ab-field">
                            <label>CTA Button 2 URL</label>
                            <input type="text" name="hero_btn2_url" class="ab-input"
                                   value="{{ old('hero_btn2_url', $hm['btn2_url'] ?? '/portfolio') }}">
                        </div>
                    </div>
                </div>
            </details>
        </div>

        {{-- ===== STATS SECTION ===== --}}
        <div class="ab-section">
            <details open>
                <summary class="ab-section-header">
                    <span><i class="bi bi-bar-chart me-2"></i>Stats Section</span>
                </summary>
                <div class="ab-section-body">
                    @php
                        $stats = $sections->where('section_type', 'stats')->values();
                    @endphp

                    @for($i = 0; $i < 4; $i++)
                    <div class="ab-repeat-row">
                        <div class="ab-grid ab-grid-2">
                            <div class="ab-field">
                                <label>Stat #{{ $i + 1 }} Number</label>
                                <input type="text" name="stat_number[]" class="ab-input"
                                       value="{{ old('stat_number.'.$i, $stats[$i]->title ?? '') }}">
                            </div>
                            <div class="ab-field">
                                <label>Stat #{{ $i + 1 }} Label</label>
                                <input type="text" name="stat_label[]" class="ab-input"
                                       value="{{ old('stat_label.'.$i, $stats[$i]->description ?? '') }}">
                            </div>
                        </div>
                        <label class="ab-check">
                            <input type="checkbox" name="stat_is_active[]" value="1"
                                   {{ old('stat_is_active.'.$i, $stats[$i]->is_active ?? true) ? 'checked' : '' }}>
                            Active
                        </label>
                    </div>
                    @endfor
                </div>
            </details>
        </div>

        {{-- ===== WHAT AUTHORS NEED ===== --}}
        <div class="ab-section">
            <details>
                <summary class="ab-section-header">
                    <span><i class="bi bi-lightbulb me-2"></i>What Authors Need</span>
                </summary>
                <div class="ab-section-body">
                    @php
                        $need = $sections->where('key', 'need')->first();
                    @endphp

                    <div class="ab-field">
                        <label>Eyebrow</label>
                        <input type="text" name="need_eyebrow" class="ab-input"
                               value="{{ old('need_eyebrow', 'What authors usually need') }}">
                    </div>
                    <div class="ab-field">
                        <label>Section Title</label>
                        <textarea name="need_title" class="ab-input ab-textarea" rows="2">{{ old('need_title', $need->title ?? '') }}</textarea>
                    </div>
                    <div class="ab-field">
                        <label>Section Description</label>
                        <textarea name="need_description" class="ab-input ab-textarea" rows="2">{{ old('need_description', $need->description ?? '') }}</textarea>
                    </div>

                    <hr class="ab-divider">
                    <strong class="ab-subhead">Cards</strong>

                    @php $needCards = $sections->where('section_type', 'need_cards')->values(); @endphp
                    @for($i = 0; $i < 3; $i++)
                    <div class="ab-repeat-row">
                        <div class="ab-field">
                            <label>Card {{ $i + 1 }} Title</label>
                            <input type="text" name="need_card_title[]" class="ab-input"
                                   value="{{ old('need_card_title.'.$i, $needCards[$i]->title ?? '') }}">
                        </div>
                        <div class="ab-field">
                            <label>Card {{ $i + 1 }} Text</label>
                            <textarea name="need_card_text[]" class="ab-input ab-textarea" rows="2">{{ old('need_card_text.'.$i, $needCards[$i]->description ?? '') }}</textarea>
                        </div>
                        <label class="ab-check">
                            <input type="checkbox" name="need_card_is_active[]" value="1"
                                   {{ old('need_card_is_active.'.$i, $needCards[$i]->is_active ?? true) ? 'checked' : '' }}>
                            Active
                        </label>
                    </div>
                    @endfor
                </div>
            </details>
        </div>

        {{-- ===== WORKING PRINCIPLE ===== --}}
        <div class="ab-section">
            <details>
                <summary class="ab-section-header">
                    <span><i class="bi bi-gear me-2"></i>Working Principle</span>
                </summary>
                <div class="ab-section-body">
                    @php $principle = $sections->where('key', 'principle')->first(); @endphp

                    <div class="ab-field">
                        <label>Eyebrow</label>
                        <input type="text" name="principle_eyebrow" class="ab-input"
                               value="{{ old('principle_eyebrow', 'Working principle') }}">
                    </div>
                    <div class="ab-field">
                        <label>Section Title</label>
                        <textarea name="principle_title" class="ab-input ab-textarea" rows="2">{{ old('principle_title', $principle->title ?? '') }}</textarea>
                    </div>
                    <div class="ab-field">
                        <label>Section Description</label>
                        <textarea name="principle_desc" class="ab-input ab-textarea" rows="2">{{ old('principle_desc', $principle->description ?? '') }}</textarea>
                    </div>

                    <hr class="ab-divider">
                    <strong class="ab-subhead">Cards</strong>

                    @php $pCards = $sections->where('section_type', 'principle_cards')->values(); @endphp
                    @for($i = 0; $i < 4; $i++)
                    <div class="ab-repeat-row">
                        <div class="ab-grid ab-grid-2">
                            <div class="ab-field">
                                <label>Card {{ $i + 1 }} Icon</label>
                                <input type="text" name="principle_card_icon[]" class="ab-input"
                                       value="{{ old('principle_card_icon.'.$i, $pCards[$i]->icon ?? '') }}">
                            </div>
                            <div class="ab-field">
                                <label>Card {{ $i + 1 }} Title</label>
                                <input type="text" name="principle_card_title[]" class="ab-input"
                                       value="{{ old('principle_card_title.'.$i, $pCards[$i]->title ?? '') }}">
                            </div>
                        </div>
                        <div class="ab-field">
                            <label>Card {{ $i + 1 }} Text</label>
                            <textarea name="principle_card_text[]" class="ab-input ab-textarea" rows="2">{{ old('principle_card_text.'.$i, $pCards[$i]->description ?? '') }}</textarea>
                        </div>
                        <label class="ab-check">
                            <input type="checkbox" name="principle_card_is_active[]" value="1"
                                   {{ old('principle_card_is_active.'.$i, $pCards[$i]->is_active ?? true) ? 'checked' : '' }}>
                            Active
                        </label>
                    </div>
                    @endfor
                </div>
            </details>
        </div>

        {{-- ===== HOW WE THINK ===== --}}
        <div class="ab-section">
            <details>
                <summary class="ab-section-header">
                    <span><i class="bi bi-brain me-2"></i>How We Think</span>
                </summary>
                <div class="ab-section-body">
                    @php $thinking = $sections->where('key', 'thinking')->first(); @endphp

                    <div class="ab-field">
                        <label>Eyebrow</label>
                        <input type="text" name="thinking_eyebrow" class="ab-input"
                               value="{{ old('thinking_eyebrow', 'How we think') }}">
                    </div>
                    <div class="ab-field">
                        <label>Section Title</label>
                        <textarea name="thinking_title" class="ab-input ab-textarea" rows="2">{{ old('thinking_title', $thinking->title ?? '') }}</textarea>
                    </div>
                    <div class="ab-field">
                        <label>Section Description</label>
                        <textarea name="thinking_desc" class="ab-input ab-textarea" rows="2">{{ old('thinking_desc', $thinking->description ?? '') }}</textarea>
                    </div>

                    <hr class="ab-divider">
                    <strong class="ab-subhead">Cards</strong>

                    @php $tCards = $sections->where('section_type', 'thinking_cards')->values(); @endphp
                    @for($i = 0; $i < 3; $i++)
                    <div class="ab-repeat-row">
                        <div class="ab-field">
                            <label>Card {{ $i + 1 }} Title</label>
                            <input type="text" name="thinking_card_title[]" class="ab-input"
                                   value="{{ old('thinking_card_title.'.$i, $tCards[$i]->title ?? '') }}">
                        </div>
                        <div class="ab-field">
                            <label>Card {{ $i + 1 }} Text</label>
                            <textarea name="thinking_card_text[]" class="ab-input ab-textarea" rows="2">{{ old('thinking_card_text.'.$i, $tCards[$i]->description ?? '') }}</textarea>
                        </div>
                        <label class="ab-check">
                            <input type="checkbox" name="thinking_card_is_active[]" value="1"
                                   {{ old('thinking_card_is_active.'.$i, $tCards[$i]->is_active ?? true) ? 'checked' : '' }}>
                            Active
                        </label>
                    </div>
                    @endfor
                </div>
            </details>
        </div>

        {{-- ===== OPERATING MODEL ===== --}}
        <div class="ab-section">
            <details>
                <summary class="ab-section-header">
                    <span><i class="bi bi-diagram-3 me-2"></i>Operating Model</span>
                </summary>
                <div class="ab-section-body">
                    @php $model = $sections->where('key', 'model')->first(); @endphp

                    <div class="ab-field">
                        <label>Eyebrow</label>
                        <input type="text" name="model_eyebrow" class="ab-input"
                               value="{{ old('model_eyebrow', 'Operating model') }}">
                    </div>
                    <div class="ab-field">
                        <label>Section Title</label>
                        <textarea name="model_title" class="ab-input ab-textarea" rows="2">{{ old('model_title', $model->title ?? '') }}</textarea>
                    </div>
                    <div class="ab-field">
                        <label>Section Description</label>
                        <textarea name="model_desc" class="ab-input ab-textarea" rows="2">{{ old('model_desc', $model->description ?? '') }}</textarea>
                    </div>

                    <hr class="ab-divider">
                    <strong class="ab-subhead">Cards</strong>

                    @php $mCards = $sections->where('section_type', 'model_cards')->values(); @endphp
                    @for($i = 0; $i < 4; $i++)
                    <div class="ab-repeat-row">
                        <div class="ab-field">
                            <label>Card {{ $i + 1 }} Title</label>
                            <input type="text" name="model_card_title[]" class="ab-input"
                                   value="{{ old('model_card_title.'.$i, $mCards[$i]->title ?? '') }}">
                        </div>
                        <div class="ab-field">
                            <label>Card {{ $i + 1 }} Text</label>
                            <textarea name="model_card_text[]" class="ab-input ab-textarea" rows="2">{{ old('model_card_text.'.$i, $mCards[$i]->description ?? '') }}</textarea>
                        </div>
                        <label class="ab-check">
                            <input type="checkbox" name="model_card_is_active[]" value="1"
                                   {{ old('model_card_is_active.'.$i, $mCards[$i]->is_active ?? true) ? 'checked' : '' }}>
                            Active
                        </label>
                    </div>
                    @endfor
                </div>
            </details>
        </div>

        {{-- ===== TEAM ===== --}}
        <div class="ab-section">
            <details>
                <summary class="ab-section-header">
                    <span><i class="bi bi-people me-2"></i>Team Section</span>
                </summary>
                <div class="ab-section-body">
                    @php $team = $sections->where('key', 'team')->first(); @endphp

                    <div class="ab-field">
                        <label>Eyebrow</label>
                        <input type="text" name="team_eyebrow" class="ab-input"
                               value="{{ old('team_eyebrow', 'Team') }}">
                    </div>
                    <div class="ab-field">
                        <label>Section Title</label>
                        <textarea name="team_title" class="ab-input ab-textarea" rows="2">{{ old('team_title', $team->title ?? '') }}</textarea>
                    </div>
                    <div class="ab-field">
                        <label>Section Description</label>
                        <textarea name="team_desc" class="ab-input ab-textarea" rows="2">{{ old('team_desc', $team->description ?? '') }}</textarea>
                    </div>
                    <div class="ab-grid ab-grid-2">
                        <div class="ab-field">
                            <label>Link Text</label>
                            <input type="text" name="team_link_text" class="ab-input"
                                   value="{{ old('team_link_text', $team->button_text ?? 'Meet the full team →') }}">
                        </div>
                        <div class="ab-field">
                            <label>Link URL</label>
                            <input type="text" name="team_link_url" class="ab-input"
                                   value="{{ old('team_link_url', $team->url ?? '/contact') }}">
                        </div>
                    </div>

                    <hr class="ab-divider">
                    <strong class="ab-subhead">Team Members</strong>

                    @php $members = $sections->where('section_type', 'team_members')->values(); @endphp
                    @for($i = 0; $i < count($members); $i++)
                    <div class="ab-repeat-row ab-member-row">
                        <div class="ab-grid ab-grid-4">
                            <div class="ab-field">
                                <label>Name</label>
                                <input type="text" name="team_member_name[]" class="ab-input"
                                       value="{{ old('team_member_name.'.$i, $members[$i]->title ?? '') }}">
                            </div>
                            <div class="ab-field">
                                <label>Role</label>
                                <input type="text" name="team_member_role[]" class="ab-input"
                                       value="{{ old('team_member_role.'.$i, $members[$i]->description ?? '') }}">
                            </div>
                            <div class="ab-field">
                                <label>Bio</label>
                                <input type="text" name="team_member_bio[]" class="ab-input"
                                       value="{{ old('team_member_bio.'.$i, $members[$i]->content ?? '') }}">
                            </div>
                            <div class="ab-field">
                                <label>Emoji</label>
                                <input type="text" name="team_member_emoji[]" class="ab-input"
                                       value="{{ old('team_member_emoji.'.$i, $members[$i]->icon ?? '👤') }}" style="width:70px;">
                            </div>
                        </div>
                        <label class="ab-check">
                            <input type="checkbox" name="team_member_is_active[]" value="1"
                                   {{ old('team_member_is_active.'.$i, $members[$i]->is_active ?? true) ? 'checked' : '' }}>
                            Active
                        </label>
                    </div>
                    @endfor

                    <button type="button" class="ab-btn-add" onclick="addTeamMember()">
                        <i class="bi bi-plus-circle me-1"></i> Add Team Member
                    </button>

                    <template id="team-member-tpl">
                        <div class="ab-repeat-row ab-member-row">
                            <div class="ab-grid ab-grid-4">
                                <div class="ab-field">
                                    <label>Name</label>
                                    <input type="text" name="team_member_name[]" class="ab-input">
                                </div>
                                <div class="ab-field">
                                    <label>Role</label>
                                    <input type="text" name="team_member_role[]" class="ab-input">
                                </div>
                                <div class="ab-field">
                                    <label>Bio</label>
                                    <input type="text" name="team_member_bio[]" class="ab-input">
                                </div>
                                <div class="ab-field">
                                    <label>Emoji</label>
                                    <input type="text" name="team_member_emoji[]" class="ab-input" value="👤" style="width:70px;">
                                </div>
                            </div>
                            <label class="ab-check">
                                <input type="checkbox" name="team_member_is_active[]" value="1" checked> Active
                            </label>
                        </div>
                    </template>
                </div>
            </details>
        </div>

        {{-- ===== AUTHOR PROOF / TESTIMONIALS ===== --}}
        <div class="ab-section">
            <details>
                <summary class="ab-section-header">
                    <span><i class="bi bi-chat-quote me-2"></i>Author Proof / Testimonials</span>
                </summary>
                <div class="ab-section-body">
                    @php $proof = $sections->where('key', 'proof')->first(); @endphp

                    <div class="ab-field">
                        <label>Eyebrow</label>
                        <input type="text" name="proof_eyebrow" class="ab-input"
                               value="{{ old('proof_eyebrow', 'Author proof') }}">
                    </div>
                    <div class="ab-field">
                        <label>Section Title</label>
                        <textarea name="proof_title" class="ab-input ab-textarea" rows="2">{{ old('proof_title', $proof->title ?? '') }}</textarea>
                    </div>
                    <div class="ab-field">
                        <label>Section Description</label>
                        <textarea name="proof_desc" class="ab-input ab-textarea" rows="2">{{ old('proof_desc', $proof->description ?? '') }}</textarea>
                    </div>

                    <hr class="ab-divider">
                    <strong class="ab-subhead">Testimonials</strong>

                    @php $testimonials = $sections->where('section_type', 'testimonials')->values(); @endphp
                    @for($i = 0; $i < 3; $i++)
                    <div class="ab-repeat-row">
                        <div class="ab-grid ab-grid-2">
                            <div class="ab-field">
                                <label>Stars</label>
                                <input type="text" name="testimonial_stars[]" class="ab-input"
                                       value="{{ old('testimonial_stars.'.$i, ($testimonials[$i]->meta['stars'] ?? '★★★★★')) }}">
                            </div>
                            <div class="ab-field">
                                <label>Author</label>
                                <input type="text" name="testimonial_author[]" class="ab-input"
                                       value="{{ old('testimonial_author.'.$i, $testimonials[$i]->title ?? '') }}">
                            </div>
                        </div>
                        <div class="ab-field">
                            <label>Quote</label>
                            <textarea name="testimonial_quote[]" class="ab-input ab-textarea" rows="2">{{ old('testimonial_quote.'.$i, $testimonials[$i]->content ?? '') }}</textarea>
                        </div>
                        <div class="ab-grid ab-grid-2">
                            <div class="ab-field">
                                <label>Author Label</label>
                                <input type="text" name="testimonial_label[]" class="ab-input"
                                       value="{{ old('testimonial_label.'.$i, $testimonials[$i]->description ?? '') }}">
                            </div>
                            <div class="ab-field">
                                <label>Book Title</label>
                                <input type="text" name="testimonial_book[]" class="ab-input"
                                       value="{{ old('testimonial_book.'.$i, $testimonials[$i]->url ?? '') }}">
                            </div>
                        </div>
                        <label class="ab-check">
                            <input type="checkbox" name="testimonial_is_active[]" value="1"
                                   {{ old('testimonial_is_active.'.$i, $testimonials[$i]->is_active ?? true) ? 'checked' : '' }}>
                            Active
                        </label>
                    </div>
                    @endfor
                </div>
            </details>
        </div>

        {{-- ===== FAQ ===== --}}
        <div class="ab-section">
            <details>
                <summary class="ab-section-header">
                    <span><i class="bi bi-question-circle me-2"></i>FAQ Section</span>
                </summary>
                <div class="ab-section-body">
                    @php $faq = $sections->where('key', 'faq')->first(); @endphp

                    <div class="ab-field">
                        <label>Eyebrow</label>
                        <input type="text" name="faq_eyebrow" class="ab-input"
                               value="{{ old('faq_eyebrow', 'FAQ') }}">
                    </div>
                    <div class="ab-field">
                        <label>Section Title</label>
                        <input type="text" name="faq_title" class="ab-input"
                               value="{{ old('faq_title', $faq->title ?? 'Common questions about HMD.') }}">
                    </div>
                    <div class="ab-field">
                        <label>Section Description</label>
                        <textarea name="faq_desc" class="ab-input ab-textarea" rows="2">{{ old('faq_desc', $faq->description ?? '') }}</textarea>
                    </div>

                    <hr class="ab-divider">
                    <strong class="ab-subhead">FAQ Items</strong>

                    @php $faqItems = $sections->where('section_type', 'faq_items')->values(); @endphp
                    @for($i = 0; $i < count($faqItems); $i++)
                    <div class="ab-repeat-row">
                        <div class="ab-field">
                            <label>Question #{{ $i + 1 }}</label>
                            <input type="text" name="faq_question[]" class="ab-input"
                                   value="{{ old('faq_question.'.$i, $faqItems[$i]->title ?? '') }}">
                        </div>
                        <div class="ab-field">
                            <label>Answer #{{ $i + 1 }}</label>
                            <textarea name="faq_answer[]" class="ab-input ab-textarea" rows="3">{{ old('faq_answer.'.$i, $faqItems[$i]->content ?? '') }}</textarea>
                        </div>
                        <label class="ab-check">
                            <input type="checkbox" name="faq_is_active[]" value="1"
                                   {{ old('faq_is_active.'.$i, $faqItems[$i]->is_active ?? true) ? 'checked' : '' }}>
                            Active
                        </label>
                    </div>
                    @endfor

                    <button type="button" class="ab-btn-add" onclick="addFaq()">
                        <i class="bi bi-plus-circle me-1"></i> Add FAQ Item
                    </button>

                    <template id="faq-tpl">
                        <div class="ab-repeat-row">
                            <div class="ab-field">
                                <label>Question</label>
                                <input type="text" name="faq_question[]" class="ab-input">
                            </div>
                            <div class="ab-field">
                                <label>Answer</label>
                                <textarea name="faq_answer[]" class="ab-input ab-textarea" rows="3"></textarea>
                            </div>
                            <label class="ab-check">
                                <input type="checkbox" name="faq_is_active[]" value="1" checked> Active
                            </label>
                        </div>
                    </template>
                </div>
            </details>
        </div>

        {{-- ===== CTA SECTION ===== --}}
        <div class="ab-section">
            <details>
                <summary class="ab-section-header">
                    <span><i class="bi bi-megaphone me-2"></i>CTA Section</span>
                </summary>
                <div class="ab-section-body">
                    @php $cta = $sections->where('key', 'cta')->first(); $ctaM = $cta->meta ?? []; @endphp

                    <div class="ab-field">
                        <label>Eyebrow</label>
                        <input type="text" name="cta_eyebrow" class="ab-input"
                               value="{{ old('cta_eyebrow', 'Start here') }}">
                    </div>
                    <div class="ab-field">
                        <label>Title</label>
                        <textarea name="cta_title" class="ab-input ab-textarea" rows="2">{{ old('cta_title', $cta->title ?? '') }}</textarea>
                    </div>
                    <div class="ab-field">
                        <label>Description</label>
                        <textarea name="cta_desc" class="ab-input ab-textarea" rows="2">{{ old('cta_desc', $cta->description ?? '') }}</textarea>
                    </div>
                    <div class="ab-grid ab-grid-2">
                        <div class="ab-field">
                            <label>Button 1 Text</label>
                            <input type="text" name="cta_btn1_text" class="ab-input"
                                   value="{{ old('cta_btn1_text', $cta->button_text ?? 'Book a free consultation →') }}">
                        </div>
                        <div class="ab-field">
                            <label>Button 1 URL</label>
                            <input type="text" name="cta_btn1_url" class="ab-input"
                                   value="{{ old('cta_btn1_url', $cta->url ?? '/contact') }}">
                        </div>
                    </div>
                    <div class="ab-grid ab-grid-2">
                        <div class="ab-field">
                            <label>Button 2 Text</label>
                            <input type="text" name="cta_btn2_text" class="ab-input"
                                   value="{{ old('cta_btn2_text', $ctaM['btn2_text'] ?? 'Explore services') }}">
                        </div>
                        <div class="ab-field">
                            <label>Button 2 URL</label>
                            <input type="text" name="cta_btn2_url" class="ab-input"
                                   value="{{ old('cta_btn2_url', $ctaM['btn2_url'] ?? '/services') }}">
                        </div>
                    </div>
                </div>
            </details>
        </div>

        <div class="ab-save-bar">
            <a href="{{ route('about') }}" target="_blank" class="ab-btn ab-btn-preview">
                <i class="bi bi-eye me-1"></i> Preview
            </a>
            <button type="submit" class="ab-btn ab-btn-save">
                <i class="bi bi-check-lg me-1"></i> Save All Changes
            </button>
        </div>

    </form>
</div>

<style>
.ab-page-wrap { padding: 28px 32px; }
.ab-page-header { margin-bottom: 28px; }
.ab-page-title { margin: 0; font-size: 1.6rem; font-weight: 800; color: #f1f5f9; }
.ab-page-sub { margin: 4px 0 0; color: #64748b; font-size: 0.88rem; }

.ab-alert { padding: 14px 18px; border-radius: 10px; margin-bottom: 20px; font-size: 0.88rem; }
.ab-alert-success { background: rgba(34,197,94,0.1); border: 1px solid rgba(34,197,94,0.2); color: #4ade80; }
.ab-alert-error { background: rgba(239,68,68,0.1); border: 1px solid rgba(239,68,68,0.2); color: #f87171; }

.ab-section { margin-bottom: 16px; border: 1px solid rgba(255,255,255,0.06); border-radius: 14px; overflow: hidden; background: rgba(255,255,255,0.02); }
.ab-section-header { padding: 18px 22px; cursor: pointer; font-weight: 700; font-size: 0.95rem; color: #e2e8f0; display: flex; align-items: center; background: rgba(255,255,255,0.03); border: none; width: 100%; text-align: left; }
.ab-section-header:hover { background: rgba(255,255,255,0.05); }
.ab-section-header::-webkit-details-marker { display: none; }
.ab-section-body { padding: 22px; }

.ab-field { margin-bottom: 14px; }
.ab-field label { display: block; font-size: 0.78rem; font-weight: 600; color: #94a3b8; margin-bottom: 5px; letter-spacing: 0.3px; }
.ab-input { width: 100%; padding: 10px 14px; background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08); border-radius: 8px; color: #e2e8f0; font-size: 0.88rem; font-family: inherit; transition: border 0.2s; }
.ab-input:focus { outline: none; border-color: rgba(37,99,235,0.5); box-shadow: 0 0 0 2px rgba(37,99,235,0.1); }
.ab-textarea { resize: vertical; min-height: 60px; }

.ab-grid { display: grid; gap: 14px; }
.ab-grid-2 { grid-template-columns: 1fr 1fr; }
.ab-grid-4 { grid-template-columns: 2fr 2fr 3fr auto; }

.ab-repeat-row { background: rgba(255,255,255,0.02); border: 1px solid rgba(255,255,255,0.04); border-radius: 10px; padding: 16px 18px; margin-bottom: 12px; }
.ab-check { display: inline-flex; align-items: center; gap: 6px; font-size: 0.8rem; color: #94a3b8; margin-top: 4px; cursor: pointer; }
.ab-check input[type="checkbox"] { accent-color: #2563eb; }

.ab-divider { border: none; border-top: 1px solid rgba(255,255,255,0.06); margin: 20px 0; }
.ab-subhead { font-size: 0.85rem; color: #94a3b8; display: block; margin-bottom: 14px; }

.ab-btn-add { display: inline-flex; align-items: center; gap: 6px; padding: 10px 16px; background: rgba(37,99,235,0.08); border: 1px dashed rgba(37,99,235,0.3); border-radius: 8px; color: #60A5FA; font-size: 0.85rem; font-weight: 600; cursor: pointer; font-family: inherit; margin-top: 4px; transition: all 0.2s; }
.ab-btn-add:hover { background: rgba(37,99,235,0.15); border-color: rgba(37,99,235,0.5); }

.ab-save-bar { display: flex; justify-content: flex-end; gap: 12px; padding: 24px 0 60px; position: sticky; bottom: 0; background: #0f172a; z-index: 10; }
.ab-btn { display: inline-flex; align-items: center; gap: 6px; padding: 12px 24px; border-radius: 10px; font-size: 0.9rem; font-weight: 700; cursor: pointer; border: none; font-family: inherit; transition: all 0.2s; text-decoration: none; }
.ab-btn-save { background: linear-gradient(135deg, #2563EB, #1E40AF); color: #fff; box-shadow: 0 2px 12px rgba(37,99,235,0.3); }
.ab-btn-save:hover { box-shadow: 0 4px 20px rgba(37,99,235,0.4); transform: translateY(-1px); }
.ab-btn-preview { background: rgba(255,255,255,0.05); color: #94a3b8; border: 1px solid rgba(255,255,255,0.08); }
.ab-btn-preview:hover { background: rgba(255,255,255,0.08); color: #e2e8f0; }

@media (max-width: 900px) {
    .ab-grid-2, .ab-grid-4 { grid-template-columns: 1fr; }
    .ab-page-wrap { padding: 16px; }
}
</style>

@endsection

@section('scripts')
<script>
function addTeamMember() {
    const tpl = document.getElementById('team-member-tpl').content.cloneNode(true);
    const last = document.querySelector('.ab-member-row:last-of-type');
    last.parentNode.insertBefore(tpl, last.nextSibling);
}
function addFaq() {
    const tpl = document.getElementById('faq-tpl').content.cloneNode(true);
    const last = document.querySelectorAll('.ab-repeat-row');
    last[last.length - 1].parentNode.insertBefore(tpl, last[last.length - 1].nextSibling);
}
</script>
@endsection
