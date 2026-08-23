@php
    // Helper to safely get section data
    $h = fn($key, $field = 'title', $default = '') => $sections[$key]->$field ?? $default;
    $hm = fn($key, $metaKey, $default = '') => ($sections[$key]->meta[$metaKey] ?? $default) ?? $default;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About HMD Publishing | HMD Publishing</title>
</head>

<body>

@include('frontend.partials.navbar')

<!-- HERO -->
<section class="hmd-about-hero">
    <div class="hmd-container hmd-about-hero-inner">

        <div class="hmd-pill">
            <span class="hmd-pill-stars">{{ $hm('hero', 'pill_stars', '★★★★★') }}</span>
            <strong>{{ $hm('hero', 'pill_rating', '4.7 out of 5') }}</strong>
            <span class="hmd-pill-text">{{ $hm('hero', 'pill_text', 'Based on 83 Trustpilot reviews') }}</span>
        </div>

        <div class="hmd-eyebrow hmd-eyebrow-blue hmd-eyebrow-mb">
            {{ $h('hero', 'title', 'About HMD Publishing') }}
        </div>

        <h1 class="hmd-about-hero-title">
            {{ $h('hero', 'description', 'We help authors turn serious manuscripts into credible published books.') }}
        </h1>

        <p class="hmd-about-hero-desc">
            {{ $h('hero', 'content', 'Since 2015, HMD has supported authors across editing, design, formatting, publishing setup, and marketing.') }}
        </p>

        <div class="hmd-about-hero-btns">
            <a href="{{ $h('hero', 'url', '/contact') }}" class="hmd-btn hmd-btn-dark">
                {{ $h('hero', 'button_text', 'Start a publishing conversation →') }}
            </a>
            <a href="{{ $hm('hero', 'btn2_url', '/portfolio') }}" class="hmd-btn hmd-btn-outline">
                {{ $hm('hero', 'btn2_text', 'View portfolio work') }}
            </a>
        </div>

    </div>
</section>

<!-- STATS -->
<section class="hmd-about-stats">
    <div class="hmd-container hmd-about-stats-grid">
        @php $stats = $sections->where('section_type', 'stats')->values(); @endphp
        @foreach($stats as $i => $stat)
            <div class="hmd-about-stat {{ $i === $stats->count() - 1 ? 'hmd-about-stat-last' : '' }}">
                <div class="hmd-about-stat-number">{{ $stat->title }}</div>
                <div class="hmd-about-stat-label">{{ $stat->description }}</div>
            </div>
        @endforeach
    </div>
</section>

<!-- WHAT AUTHORS NEED -->
<section class="hmd-about-need">
    <div class="hmd-container hmd-about-need-grid">
        <div>
            <div class="hmd-eyebrow hmd-eyebrow-blue hmd-eyebrow-mb">What authors usually need</div>
            <h2 class="hmd-about-need-title">{{ $h('need', 'title') }}</h2>
            <p class="hmd-about-need-text">{{ $h('need', 'description') }}</p>
        </div>
        <div class="hmd-about-need-cards">
            @foreach($sections->where('section_type', 'need_cards')->values() as $i => $card)
                <div class="hmd-about-need-card">
                    <div class="hmd-about-num-badge">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</div>
                    <strong class="hmd-about-need-card-title">{{ $card->title }}</strong>
                    <p class="hmd-about-need-card-text">{{ $card->description }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- WORKING PRINCIPLE -->
<section class="hmd-about-principle">
    <div class="hmd-container">
        <div class="hmd-eyebrow hmd-eyebrow-blue hmd-eyebrow-mb">Working principle</div>
        <h2 class="hmd-about-principle-title">{{ $h('principle', 'title') }}</h2>
        <p class="hmd-about-principle-desc">{{ $h('principle', 'description') }}</p>
        <div class="hmd-about-principle-grid">
            @foreach($sections->where('section_type', 'principle_cards')->values() as $card)
                <div class="hmd-about-principle-card">
                    <div class="hmd-about-principle-icon">{{ $card->icon }}</div>
                    <strong>{{ $card->title }}</strong>
                    <p>{{ $card->description }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- HOW WE THINK -->
<section class="hmd-about-thinking">
    <div class="hmd-container">
        <div class="hmd-about-thinking-head">
            <div class="hmd-eyebrow hmd-eyebrow-blue hmd-eyebrow-mb">How we think</div>
            <h2 class="hmd-about-thinking-title">{{ $h('thinking', 'title') }}</h2>
            <p class="hmd-about-thinking-desc">{{ $h('thinking', 'description') }}</p>
        </div>
        <div class="hmd-about-thinking-grid">
            @foreach($sections->where('section_type', 'thinking_cards')->values() as $i => $card)
                <div class="hmd-about-thinking-card">
                    <div class="hmd-about-thinking-num">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</div>
                    <h3>{{ $card->title }}</h3>
                    <p>{{ $card->description }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- OPERATING MODEL -->
<section class="hmd-about-model">
    <div class="hmd-container">
        <div class="hmd-eyebrow hmd-about-model-eyebrow hmd-eyebrow-mb">Operating model</div>
        <h2 class="hmd-about-model-title">{{ $h('model', 'title') }}</h2>
        <p class="hmd-about-model-desc">{{ $h('model', 'description') }}</p>
        <div class="hmd-about-model-grid">
            @foreach($sections->where('section_type', 'model_cards')->values() as $i => $card)
                <div class="hmd-about-model-card">
                    <div class="hmd-about-model-num">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</div>
                    <h3>{{ $card->title }}</h3>
                    <p>{{ $card->description }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- TEAM -->
<section class="hmd-about-team">
    <div class="hmd-container">
        <div class="hmd-about-team-head">
            <div>
                <div class="hmd-eyebrow hmd-eyebrow-blue hmd-eyebrow-mb">Team</div>
                <h2 class="hmd-about-team-title">{{ $h('team', 'title') }}</h2>
                <p class="hmd-about-team-desc">{{ $h('team', 'description') }}</p>
            </div>
            <a href="/team" class="hmd-about-team-link">
                {{ $h('team', 'button_text', 'Meet the full team →') }}
            </a>
        </div>
        <div class="hmd-about-team-grid">
            @foreach($sections->where('section_type', 'team_members')->take(4)->values() as $member)
                <div class="hmd-about-team-card">
                    <div class="hmd-about-team-photo">
                        @if($member->image)
                            @if(preg_match('#^https?://#i', $member->image))
                                <img src="{{ $member->image }}" alt="{{ $member->title }}" style="width:100%;height:100%;object-fit:cover;">
                            @else
                                <img src="{{ asset($member->image) }}" alt="{{ $member->title }}" style="width:100%;height:100%;object-fit:cover;">
                            @endif
                        @else
                            {{ $member->icon ?? '👤' }}
                        @endif
                    </div>
                    <div class="hmd-about-team-body">
                        <h3>{{ $member->title }}</h3>
                        <div class="hmd-about-team-role">{{ $member->description }}</div>
                        <p>{{ $member->content }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- AUTHOR PROOF / TESTIMONIALS -->
<section class="hmd-about-proof">
    <div class="hmd-container">
        <div class="hmd-eyebrow hmd-eyebrow-blue hmd-eyebrow-mb">Author proof</div>
        <h2 class="hmd-about-proof-title">{{ $h('proof', 'title') }}</h2>
        <p class="hmd-about-proof-desc">{{ $h('proof', 'description') }}</p>
        <div class="hmd-about-proof-grid">
            @foreach($sections->where('section_type', 'testimonials')->values() as $t)
                <div class="hmd-about-proof-card">
                    <div class="hmd-about-proof-stars">{{ $t->meta['stars'] ?? '★★★★★' }}</div>
                    <p class="hmd-about-proof-quote">"{{ $t->content }}"</p>
                    <strong>{{ $t->title }}</strong>
                    <div class="hmd-about-proof-author">{{ $t->description }}</div>
                    <div class="hmd-about-proof-book">{{ $t->url }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="hmd-about-faq">
    <div class="hmd-container hmd-about-faq-inner">
        <div class="hmd-about-faq-head">
            <div class="hmd-eyebrow hmd-eyebrow-blue hmd-eyebrow-mb">FAQ</div>
            <h2 class="hmd-about-faq-title">{{ $h('faq', 'title', 'Common questions about HMD.') }}</h2>
            <p class="hmd-about-faq-desc">{{ $h('faq', 'description') }}</p>
        </div>
        @foreach($sections->where('section_type', 'faq_items')->values() as $faq)
            <details class="hmd-about-faq-item">
                <summary>
                    {{ $faq->title }}
                    <span class="hmd-about-faq-icon">+</span>
                </summary>
                <p>{{ $faq->content }}</p>
            </details>
        @endforeach
    </div>
</section>

<!-- CTA -->
<section class="hmd-about-cta-section">
    <div class="hmd-container">
        <div class="hmd-cta-box">
            <div class="hmd-cta-inner">
                <div class="hmd-eyebrow hmd-eyebrow-blue hmd-eyebrow-cta">Start here</div>
                <h2 class="hmd-cta-title">{{ $h('cta', 'title') }}</h2>
                <p class="hmd-cta-desc">{{ $h('cta', 'description') }}</p>
                <div class="hmd-cta-btns">
                    <a href="{{ $h('cta', 'url', '/contact') }}" class="hmd-cta-btn">
                        {{ $h('cta', 'button_text', 'Book a free consultation →') }}
                    </a>
                    <a href="{{ $hm('cta', 'btn2_url', '/services') }}" class="hmd-cta-btn-outline">
                        {{ $hm('cta', 'btn2_text', 'Explore services') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@include('frontend.partials.cinematic-footer')


    <style>
        body { margin: 0; padding: 0; font-family: Arial, Helvetica, sans-serif; background: #ffffff; color: #111827; line-height: 1.6; }
        .hmd-container { max-width: 1200px; margin: auto; }
        .hmd-eyebrow { font-weight: 700; font-size: 14px; text-transform: uppercase; letter-spacing: 1px; }
        .hmd-eyebrow-blue { color: #2563eb; }
        .hmd-eyebrow-mb { margin-bottom: 12px; }
        .hmd-btn { display: inline-block; text-decoration: none; padding: 14px 22px; border-radius: 8px; font-size: 14px; font-weight: 800; }
        .hmd-btn-dark { background: #111827; color: #ffffff; }
        .hmd-btn-outline { background: #ffffff; color: #111827; border: 1px solid #d1d5db; }
        .hmd-about-hero { background: #f8fafc; padding: 75px 5% 70px; border-bottom: 1px solid #e5e7eb; }
        .hmd-about-hero-inner { max-width: 1100px; text-align: center; }
        .hmd-pill { display: inline-flex; align-items: center; gap: 12px; background: #ffffff; border: 1px solid #e5e7eb; padding: 9px 16px; border-radius: 50px; margin-bottom: 28px; font-size: 14px; }
        .hmd-pill-stars { color: #00b67a; font-weight: 800; }
        .hmd-pill-text { color: #6b7280; }
        .hmd-about-hero-title { margin: 0 auto 22px; max-width: 900px; font-size: clamp(42px, 6vw, 70px); line-height: 1.04; letter-spacing: -3px; font-weight: 800; color: #111827; }
        .hmd-about-hero-desc { max-width: 760px; margin: 0 auto 30px; color: #6b7280; font-size: 18px; }
        .hmd-about-hero-btns { display: flex; justify-content: center; gap: 12px; flex-wrap: wrap; }
        .hmd-about-stats { padding: 45px 5%; background: #ffffff; border-bottom: 1px solid #e5e7eb; }
        .hmd-about-stats-grid { max-width: 1100px; display: grid; grid-template-columns: repeat(4, 1fr); gap: 0; text-align: center; }
        .hmd-about-stat { padding: 15px; border-right: 1px solid #e5e7eb; }
        .hmd-about-stat-last { border-right: none; }
        .hmd-about-stat-number { font-size: 38px; font-weight: 800; letter-spacing: -1px; }
        .hmd-about-stat-label { color: #6b7280; font-size: 14px; }
        .hmd-about-need { padding: 80px 5%; background: #ffffff; }
        .hmd-about-need-grid { max-width: 1100px; display: grid; grid-template-columns: 1fr 1fr; gap: 70px; align-items: center; }
        .hmd-about-need-title { margin: 0 0 18px; font-size: 40px; line-height: 1.12; letter-spacing: -1.8px; }
        .hmd-about-need-text { margin: 0; color: #6b7280; font-size: 16px; }
        .hmd-about-need-cards { display: flex; flex-direction: column; gap: 15px; }
        .hmd-about-need-card { padding: 20px; border: 1px solid #e5e7eb; border-radius: 12px; background: #ffffff; }
        .hmd-about-num-badge { width: 34px; height: 34px; display: flex; align-items: center; justify-content: center; background: #eff6ff; color: #2563eb; border-radius: 8px; font-weight: 800; margin-bottom: 12px; }
        .hmd-about-need-card-title { font-size: 15px; }
        .hmd-about-need-card-text { margin: 7px 0 0; color: #6b7280; font-size: 14px; }
        .hmd-about-principle { background: #f8fafc; padding: 80px 5%; }
        .hmd-about-principle-title { margin: 0 0 18px; max-width: 800px; font-size: 42px; line-height: 1.1; letter-spacing: -1.8px; }
        .hmd-about-principle-desc { margin: 0 0 40px; max-width: 760px; color: #6b7280; font-size: 17px; }
        .hmd-about-principle-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px; }
        .hmd-about-principle-card { background: #ffffff; border: 1px solid #e5e7eb; border-radius: 12px; padding: 22px; }
        .hmd-about-principle-icon { font-size: 26px; margin-bottom: 12px; }
        .hmd-about-principle-card p { color: #6b7280; font-size: 14px; margin: 8px 0 0; }
        .hmd-about-thinking { padding: 85px 5%; background: #ffffff; }
        .hmd-about-thinking-head { margin-bottom: 45px; }
        .hmd-about-thinking-title { margin: 0 0 15px; font-size: 43px; line-height: 1.1; letter-spacing: -1.8px; max-width: 800px; }
        .hmd-about-thinking-desc { max-width: 760px; color: #6b7280; font-size: 17px; margin: 0; }
        .hmd-about-thinking-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; }
        .hmd-about-thinking-card { border: 1px solid #e5e7eb; border-radius: 15px; padding: 28px; background: #ffffff; }
        .hmd-about-thinking-num { color: #2563eb; font-size: 28px; font-weight: 800; margin-bottom: 15px; }
        .hmd-about-thinking-card h3 { margin: 0 0 10px; font-size: 19px; }
        .hmd-about-thinking-card p { margin: 0; color: #6b7280; font-size: 14px; }
        .hmd-about-model { background: #111827; color: #ffffff; padding: 85px 5%; }
        .hmd-about-model-eyebrow { color: #93c5fd; }
        .hmd-about-model-title { margin: 0 0 15px; max-width: 850px; font-size: 43px; line-height: 1.1; letter-spacing: -1.8px; }
        .hmd-about-model-desc { max-width: 760px; color: #d1d5db; font-size: 16px; margin: 0 0 50px; }
        .hmd-about-model-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px; }
        .hmd-about-model-card { border: 1px solid #374151; border-radius: 14px; padding: 25px; background: #1f2937; }
        .hmd-about-model-num { color: #93c5fd; font-size: 13px; font-weight: 800; margin-bottom: 22px; }
        .hmd-about-model-card h3 { margin: 0 0 12px; font-size: 18px; }
        .hmd-about-model-card p { margin: 0; color: #9ca3af; font-size: 14px; }
        .hmd-about-team { padding: 85px 5%; background: #ffffff; }
        .hmd-about-team-head { display: flex; justify-content: space-between; align-items: flex-end; gap: 25px; flex-wrap: wrap; margin-bottom: 40px; }
        .hmd-about-team-title { margin: 0 0 12px; font-size: 43px; line-height: 1.1; letter-spacing: -1.8px; }
        .hmd-about-team-desc { margin: 0; max-width: 700px; color: #6b7280; font-size: 16px; }
        .hmd-about-team-link { text-decoration: none; background: #111827; color: #ffffff; padding: 12px 18px; border-radius: 7px; font-size: 14px; font-weight: 700; white-space: nowrap; }
        .hmd-about-team-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 18px; }
        .hmd-about-team-card { border: 1px solid #e5e7eb; border-radius: 14px; overflow: hidden; background: #ffffff; }
        .hmd-about-team-photo { height: 190px; background: linear-gradient(135deg, #dbeafe, #f3f4f6); display: flex; align-items: center; justify-content: center; font-size: 58px; }
        .hmd-about-team-body { padding: 20px; }
        .hmd-about-team-body h3 { margin: 0 0 4px; font-size: 17px; }
        .hmd-about-team-role { color: #2563eb; font-size: 13px; font-weight: 700; }
        .hmd-about-team-body p { margin: 10px 0 0; color: #6b7280; font-size: 13px; }
        .hmd-about-proof { background: #f8fafc; padding: 85px 5%; }
        .hmd-about-proof-title { margin: 0 0 15px; max-width: 850px; font-size: 42px; line-height: 1.1; letter-spacing: -1.8px; }
        .hmd-about-proof-desc { max-width: 760px; color: #6b7280; font-size: 16px; margin: 0 0 40px; }
        .hmd-about-proof-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; }
        .hmd-about-proof-card { background: #ffffff; border: 1px solid #e5e7eb; border-radius: 15px; padding: 28px; }
        .hmd-about-proof-stars { color: #f59e0b; font-size: 16px; letter-spacing: 2px; margin-bottom: 18px; }
        .hmd-about-proof-quote { margin: 0 0 22px; font-size: 15px; color: #374151; }
        .hmd-about-proof-author { color: #6b7280; font-size: 13px; margin-top: 3px; }
        .hmd-about-proof-book { margin-top: 20px; padding: 14px; background: #f8fafc; border-radius: 8px; font-size: 13px; font-weight: 700; }
        .hmd-about-faq { padding: 85px 5%; background: #ffffff; }
        .hmd-about-faq-inner { max-width: 900px; }
        .hmd-about-faq-head { text-align: center; margin-bottom: 45px; }
        .hmd-about-faq-title { margin: 0 0 12px; font-size: 43px; letter-spacing: -1.8px; }
        .hmd-about-faq-desc { color: #6b7280; margin: 0 auto; max-width: 650px; font-size: 16px; }
        .hmd-about-faq-item { border-top: 1px solid #e5e7eb; padding: 22px 0; }
        .hmd-about-faq-item:last-of-type { border-bottom: 1px solid #e5e7eb; }
        .hmd-about-faq-item summary { cursor: pointer; list-style: none; font-size: 17px; font-weight: 700; display: flex; justify-content: space-between; gap: 15px; }
        .hmd-about-faq-item summary::-webkit-details-marker { display: none; }
        .hmd-about-faq-icon { color: #2563eb; }
        .hmd-about-faq-item p { margin: 14px 0 0; color: #6b7280; font-size: 15px; }
        .hmd-about-cta-section { padding: 20px 5% 90px; background: #ffffff; }
        .hmd-cta-box { max-width: 1100px; margin: auto; background: #111827; color: #ffffff; border-radius: 20px; padding: 60px 40px; text-align: center; }
        .hmd-cta-inner { max-width: 700px; margin: auto; }
        .hmd-eyebrow-cta { color: #93c5fd; margin-bottom: 12px; }
        .hmd-cta-title { margin: 0 0 16px; font-size: 42px; line-height: 1.1; letter-spacing: -1.8px; }
        .hmd-cta-desc { max-width: 700px; margin: 0 auto 30px; color: #d1d5db; font-size: 16px; }
        .hmd-cta-btns { display: flex; justify-content: center; gap: 12px; flex-wrap: wrap; }
        .hmd-cta-btn { display: inline-block; text-decoration: none; background: #ffffff; color: #111827; padding: 14px 22px; border-radius: 8px; font-size: 14px; font-weight: 800; }
        .hmd-cta-btn-outline { display: inline-block; text-decoration: none; border: 1px solid #4b5563; color: #ffffff; padding: 14px 22px; border-radius: 8px; font-size: 14px; font-weight: 800; }
        .hmd-footer { background: #f8fafc; border-top: 1px solid #e5e7eb; padding: 60px 5% 25px; }
        .hmd-footer-grid { display: grid; grid-template-columns: 2fr 1fr 1fr 1fr; gap: 45px; margin-bottom: 50px; }
        .hmd-footer-brand { text-decoration: none; color: #111827; font-size: 25px; font-weight: 800; }
        .hmd-brand-accent { color: #2563eb; }
        .hmd-footer-about { max-width: 360px; color: #6b7280; margin: 18px 0; font-size: 14px; }
        .hmd-footer-line { margin: 8px 0; color: #4b5563; font-size: 14px; }
        .hmd-footer-head { margin: 0 0 18px; font-size: 15px; }
        .hmd-footer-head-sm { margin: 25px 0 12px; font-size: 14px; }
        .hmd-footer-link { display: block; text-decoration: none; color: #6b7280; font-size: 14px; margin: 10px 0; }
        .hmd-footer-link-bold { color: #111827; font-weight: 700; margin-top: 16px; }
        .hmd-footer-partners { display: flex; flex-direction: column; gap: 8px; }
        .hmd-footer-partner { color: #6b7280; text-decoration: none; font-size: 13px; }
        .hmd-footer-bottom { border-top: 1px solid #e5e7eb; padding-top: 22px; display: flex; justify-content: space-between; align-items: center; gap: 20px; flex-wrap: wrap; color: #6b7280; font-size: 13px; }
        .hmd-footer-rights { font-weight: 600; color: #374151; }
        .hmd-footer-legal { display: flex; gap: 18px; }
        .hmd-footer-legal a { color: #6b7280; text-decoration: none; }
        @media (max-width: 900px) {
            .hmd-about-stats-grid { grid-template-columns: 1fr 1fr; }
            .hmd-about-stat-last { border-right: 1px solid #e5e7eb; }
            .hmd-footer-grid { grid-template-columns: 1fr 1fr; }
            .hmd-about-principle-grid, .hmd-about-model-grid, .hmd-about-team-grid { grid-template-columns: 1fr 1fr; }
            .hmd-about-thinking-grid, .hmd-about-proof-grid { grid-template-columns: 1fr; }
        }
        @media (max-width: 768px) {
            .hmd-about-hero-title { font-size: 40px; }
            .hmd-about-need-grid { grid-template-columns: 1fr; gap: 40px; }
            .hmd-about-need-title, .hmd-about-principle-title, .hmd-about-thinking-title, .hmd-about-model-title, .hmd-about-team-title, .hmd-about-proof-title, .hmd-about-faq-title { font-size: 30px; }
            .hmd-about-team-head { align-items: flex-start; flex-direction: column; }
        }
        @media (max-width: 480px) {
            .hmd-about-stats-grid, .hmd-about-principle-grid, .hmd-about-model-grid, .hmd-about-team-grid { grid-template-columns: 1fr; }
            .hmd-about-stat { border-right: none; }
            .hmd-footer-grid { grid-template-columns: 1fr; }
            .hmd-footer-bottom { flex-direction: column; align-items: flex-start; }
            .hmd-cta-box { padding: 40px 25px; }
        }
    </style>

</body>
</html>
