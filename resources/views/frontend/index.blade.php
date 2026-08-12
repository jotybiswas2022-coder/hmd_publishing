<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMD Publishing - From Manuscript to Bestseller</title>
</head>

@php
    $plans = \App\Models\Plan::where('is_active', true)
        ->whereIn('badge', ['ESSENTIALS', 'PROFESSIONAL', 'PREMIUM'])
        ->orderBy('sort_order')
        ->get();
@endphp

<body>

    @include('frontend.partials.navbar')


    <!-- HERO -->
    <section class="hmd-hero">
        <div class="hmd-container hmd-hero-inner">

            <div class="hmd-hero-text">

                <div class="hmd-badge">
                    ★★★★★ 4.7 out of 5 · Trustpilot rated
                </div>

                <h1 class="hmd-hero-title">
                    You wrote the book.<br>
                    We'll make sure<br>
                    it succeeds.
                </h1>

                <p class="hmd-hero-desc">
                    HMD Publishing helps independent authors turn manuscripts
                    into professionally edited, designed, formatted and published books.
                    From your first draft to your launch, one team handles the journey.
                </p>

                <div class="hmd-hero-btns">
                    <a href="#contact" class="hmd-btn hmd-btn-dark">
                        Start your project →
                    </a>

                    <a href="#pricing" class="hmd-btn hmd-btn-outline">
                        Explore packages
                    </a>
                </div>

                <div class="hmd-hero-checks">
                    ✓ You keep 100% of rights & royalties
                    &nbsp;&nbsp;&nbsp;
                    ✓ 47 countries served
                    &nbsp;&nbsp;&nbsp;
                    ✓ Free quote
                </div>

            </div>


            <!-- HERO CARD -->
            <div class="hmd-hero-card-wrap">

                <div class="hmd-card">

                    <div class="hmd-card-label">
                        Project enquiry
                    </div>

                    <h2 class="hmd-card-title">
                        Tell us about your book.
                    </h2>

                    <p class="hmd-card-desc">
                        We'll reply within one business day with next steps.
                    </p>

                    <form action="{{ route('contact.submit') }}" method="POST">

                        @csrf

                        @if (session('success'))
                            <div class="hmd-hero-form-note hmd-hero-form-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="hmd-hero-form-note hmd-hero-form-error">
                                @foreach ($errors->all() as $error)
                                    {{ $error }}<br>
                                @endforeach
                            </div>
                        @endif

                        <input type="text"
                               name="first_name"
                               placeholder="First name"
                               value="{{ old('first_name') }}"
                               class="hmd-input">

                        <input type="text"
                               name="last_name"
                               placeholder="Last name"
                               value="{{ old('last_name') }}"
                               class="hmd-input">

                        <input type="email"
                               name="email"
                               placeholder="Email address"
                               value="{{ old('email') }}"
                               class="hmd-input"
                               required>

                        <input type="tel"
                               name="phone"
                               placeholder="Phone number (optional)"
                               value="{{ old('phone') }}"
                               class="hmd-input">

                        <select name="service" class="hmd-input">
                            <option value="">What do you need help with?</option>
                            <option>Editing</option>
                            <option>Book Cover Design</option>
                            <option>Formatting</option>
                            <option>Publishing</option>
                            <option>Marketing</option>
                        </select>

                        <textarea
                            name="message"
                            placeholder="Tell us a little about your book"
                            class="hmd-input hmd-textarea"
                            required>{{ old('message') }}</textarea>

                        <button type="submit" class="hmd-card-btn">
                            Send my request
                        </button>

                    </form>

                    <div class="hmd-card-foot">
                        ✓ No pressure &nbsp; ✓ No obligation
                    </div>

                </div>

            </div>

        </div>
    </section>


    <!-- STATS -->
    <section class="hmd-stats">
        <div class="hmd-stats-inner">

            <div>
                <div class="hmd-stat-num">10,000+</div>
                <div class="hmd-stat-label">books published</div>
            </div>

            <div>
                <div class="hmd-stat-num">87%</div>
                <div class="hmd-stat-label">bestseller rate</div>
            </div>

            <div>
                <div class="hmd-stat-num">47</div>
                <div class="hmd-stat-label">countries served</div>
            </div>

            <div>
                <div class="hmd-stat-num">4.7★</div>
                <div class="hmd-stat-label">Trustpilot rating</div>
            </div>

        </div>
    </section>


    <!-- SERVICES -->
    <section id="services" class="hmd-section">
        <div class="hmd-container">

            <div class="hmd-section-head">
                <div class="hmd-eyebrow">
                    How HMD helps
                </div>

                <h2 class="hmd-section-title">
                    Three ways we support independent authors.
                </h2>
            </div>


            <div class="hmd-grid">

                <!-- CARD -->
                <div class="hmd-service-card">
                    <div class="hmd-card-no">No. 1</div>

                    <h3 class="hmd-card-subtitle">
                        Create your book
                    </h3>

                    <p class="hmd-card-copy">
                        Manuscript editing, book cover design and interior formatting
                        shaped to make your finished book commercially credible.
                    </p>

                    <a href="/services/editing" class="hmd-link">
                        Explore editing →
                    </a>
                </div>


                <!-- CARD -->
                <div class="hmd-service-card">
                    <div class="hmd-card-no">No. 2</div>

                    <h3 class="hmd-card-subtitle">
                        Publish professionally
                    </h3>

                    <p class="hmd-card-copy">
                        Amazon KDP, IngramSpark and retail metadata handled
                        with professional publishing standards.
                    </p>

                    <a href="/services/book-cover-design" class="hmd-link">
                        Publishing services →
                    </a>
                </div>


                <!-- CARD -->
                <div class="hmd-service-card">
                    <div class="hmd-card-no">No. 3</div>

                    <h3 class="hmd-card-subtitle">
                        Grow your audience
                    </h3>

                    <p class="hmd-card-copy">
                        Amazon Ads, launch strategy and PR support to help
                        your book continue selling after publication.
                    </p>

                    <a href="/services/publishing" class="hmd-link">
                        Marketing services →
                    </a>
                </div>

            </div>

        </div>
    </section>


    <!-- PACKAGE -->
    <section id="pricing" class="hmd-pricing">
        <div class="hmd-container">

            <div class="hmd-section-head hmd-center">
                <div class="hmd-eyebrow hmd-eyebrow-dark">
                    COMPLETE PACKAGE
                </div>

                <h2 class="hmd-section-title">
                    One team, from manuscript to launch.
                </h2>

                <p class="hmd-pricing-desc">
                    Editing, cover design, formatting, publishing and launch support
                    handled by one accountable team.
                </p>
            </div>


            <div class="hmd-grid">

                @forelse ($plans as $plan)

                    @if($plan->is_featured)

                        <!-- FEATURED PACKAGE -->
                        <div class="hmd-package hmd-package-featured">

                            <div class="hmd-featured-tag">
                                MOST POPULAR
                            </div>

                            <div class="hmd-package-name hmd-package-name-dark">
                                {{ strtoupper($plan->name) }}
                            </div>

                            <h3 class="hmd-package-price hmd-package-price-dark">£{{ number_format($plan->price) }}</h3>

                            <p class="hmd-package-copy hmd-package-copy-dark">
                                {{ $plan->description }}
                            </p>

                            <ul class="hmd-package-list hmd-package-list-dark">
                                @foreach ($plan->features ?? [] as $feature)
                                    <li>{{ $feature }}</li>
                                @endforeach
                            </ul>

                            <a href="{{ route('checkout', ['plan' => $plan->key]) }}" class="hmd-package-btn hmd-package-btn-dark">
                                {{ $plan->button_text }}
                            </a>

                        </div>

                    @else

                        <!-- PACKAGE -->
                        <div class="hmd-package hmd-package-dark">

                            <div class="hmd-package-name">
                                {{ strtoupper($plan->name) }}
                            </div>

                            <h3 class="hmd-package-price">£{{ number_format($plan->price) }}</h3>

                            <p class="hmd-package-copy">
                                {{ $plan->description }}
                            </p>

                            <ul class="hmd-package-list">
                                @foreach ($plan->features ?? [] as $feature)
                                    <li>{{ $feature }}</li>
                                @endforeach
                            </ul>

                            <a href="{{ route('checkout', ['plan' => $plan->key]) }}" class="hmd-package-btn hmd-package-btn-light">
                                {{ $plan->button_text }}
                            </a>

                        </div>

                    @endif

                @empty

                    <div class="hmd-package hmd-package-dark">
                        <div class="hmd-package-name">
                            NO PLANS AVAILABLE
                        </div>
                        <p class="hmd-package-copy">
                            Pricing packages will be added soon.
                        </p>
                    </div>

                @endforelse

            </div>

        </div>
    </section>


    <!-- PORTFOLIO -->
    <section id="portfolio" class="hmd-portfolio">
        <div class="hmd-container">

            <div class="hmd-section-head hmd-center">
                <div class="hmd-eyebrow">
                    PROOF OF CRAFT
                </div>

                <h2 class="hmd-section-title">
                    10,000+ books, brought to market.
                </h2>
            </div>


            <div class="hmd-portfolio-grid">

                @forelse ($portfolioItems->take(12) as $item)
                    <a href="{{ route('portfolio.show', $item) }}" class="hmd-cover-card">
                        <div class="hmd-cover-img">
                            <img src="{{ $item->cover }}" alt="{{ $item->title }}" loading="lazy">
                        </div>
                        <div class="hmd-cover-info">
                            <span class="hmd-cover-type">{{ $item->type_label ?: $item->category }}</span>
                            <strong class="hmd-cover-title">{{ $item->title }}</strong>
                            <span class="hmd-cover-author">{{ $item->author }}</span>
                        </div>
                    </a>
                @empty
                    @for ($i = 1; $i <= 6; $i++)
                        <div class="hmd-cover">
                            <span>Book Cover {{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</span>
                        </div>
                    @endfor
                @endforelse

            </div>

            @if($portfolioItems->count() > 0)
                <div class="hmd-portfolio-more">
                    <a href="{{ route('portfolio') }}">
                        View full portfolio →
                    </a>
                </div>
            @endif

        </div>
    </section>


    <!-- PROCESS -->
    <section id="process" class="hmd-section">
        <div class="hmd-container hmd-narrow">

            <div class="hmd-section-head hmd-center">
                <div class="hmd-eyebrow">
                    PROCESS
                </div>

                <h2 class="hmd-section-title">
                    A clearer route from draft to launch.
                </h2>
            </div>


            <div class="hmd-process-grid">

                <div>
                    <div class="hmd-step-num">01</div>
                    <h3>Assess where you are</h3>
                    <p class="hmd-step-copy">
                        We look at your manuscript, goals, timeline and market.
                    </p>
                </div>

                <div>
                    <div class="hmd-step-num">02</div>
                    <h3>Build your production stack</h3>
                    <p class="hmd-step-copy">
                        Editing, design, formatting and publishing support are assembled.
                    </p>
                </div>

                <div>
                    <div class="hmd-step-num">03</div>
                    <h3>Publish with precision</h3>
                    <p class="hmd-step-copy">
                        Files, metadata and retail setup are prepared for launch.
                    </p>
                </div>

                <div>
                    <div class="hmd-step-num">04</div>
                    <h3>Launch and grow</h3>
                    <p class="hmd-step-copy">
                        Continue with ads, launch strategy and visibility work.
                    </p>
                </div>

            </div>

        </div>
    </section>


    <!-- TESTIMONIAL -->
    <section class="hmd-testimonial">
        <div class="hmd-testimonial-inner">

            <div class="hmd-stars">
                ★★★★★
            </div>

            <blockquote class="hmd-quote">
                "The team understood exactly what I needed.
                My book now looks and feels like a professionally published title."
            </blockquote>

            <div class="hmd-author">
                H. C. Ruby
            </div>

            <div class="hmd-author-role">
                Author
            </div>

        </div>
    </section>


    <!-- CTA -->
    <section id="contact" class="hmd-cta">

        <h2 class="hmd-cta-title">
            Ready to bring your book to life?
        </h2>

        <p class="hmd-cta-desc">
            Tell us about your manuscript and we'll help you decide the next step.
        </p>

        <a href="mailto:info@hmdpublishing.com" class="hmd-cta-btn">
            Tell us about your book →
        </a>

    </section>


    <!-- FOOTER -->
    <footer class="hmd-footer">

        <div class="hmd-footer-inner">

            <div>
                <div class="hmd-footer-brand">
                    HMD Publishing
                </div>

                <p class="hmd-footer-desc">
                    Professional publishing services for independent authors.
                </p>
            </div>

            <div>
                <div class="hmd-footer-head">
                    Contact
                </div>

                <div>UK: +44 7888 862764</div>
                <div>US: +1 888 832 8969</div>
                <div>info@hmdpublishing.com</div>
            </div>

        </div>

        <div class="hmd-footer-bottom">
            © 2026 HMD Publishing. All rights reserved.
        </div>

    </footer>

    <style>
        /* ===== HMD Publishing - Homepage Styles ===== */

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            color: #171717;
            background: #fff;
        }

        .hmd-container {
            max-width: 1200px;
            margin: auto;
        }

        .hmd-narrow {
            max-width: 1100px;
        }

        /* ===== HERO ===== */
        .hmd-hero {
            padding: 85px 5%;
            background: #f6f4ef;
        }

        .hmd-hero-inner {
            display: flex;
            align-items: center;
            gap: 70px;
            flex-wrap: wrap;
        }

        .hmd-hero-text {
            flex: 1;
            min-width: 320px;
        }

        .hmd-badge {
            display: inline-block;
            background: #fff;
            border: 1px solid #ddd;
            padding: 8px 14px;
            border-radius: 30px;
            font-size: 13px;
            margin-bottom: 25px;
        }

        .hmd-hero-title {
            font-size: 64px;
            line-height: 1.02;
            letter-spacing: -3px;
            margin: 0 0 25px;
            font-weight: 800;
        }

        .hmd-hero-desc {
            font-size: 18px;
            line-height: 1.7;
            color: #555;
            max-width: 650px;
            margin-bottom: 30px;
        }

        .hmd-hero-btns {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .hmd-btn {
            display: inline-block;
            padding: 16px 25px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 700;
        }

        .hmd-btn-dark {
            background: #111;
            color: #fff;
        }

        .hmd-btn-outline {
            background: #fff;
            color: #111;
            border: 1px solid #ccc;
        }

        .hmd-hero-checks {
            margin-top: 30px;
            font-size: 14px;
            color: #555;
        }

        /* ===== HERO CARD ===== */
        .hmd-hero-card-wrap {
            flex: 0 0 390px;
            min-width: 300px;
        }

        .hmd-card {
            background: #111;
            color: #fff;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 25px 60px rgba(0,0,0,.15);
        }

        .hmd-card-label {
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: #aaa;
        }

        .hmd-card-title {
            font-size: 30px;
            margin: 12px 0 10px;
        }

        .hmd-card-desc {
            color: #bbb;
            line-height: 1.6;
            font-size: 14px;
        }

        .hmd-input {
            width: 100%;
            box-sizing: border-box;
            padding: 14px;
            margin: 7px 0;
            border: 0;
            border-radius: 4px;
        }

        .hmd-textarea {
            height: 90px;
            resize: none;
        }

        .hmd-card-btn {
            width: 100%;
            padding: 15px;
            margin-top: 8px;
            border: 0;
            border-radius: 4px;
            background: #fff;
            color: #111;
            font-weight: 700;
            cursor: pointer;
        }

        .hmd-card-foot {
            font-size: 12px;
            color: #aaa;
            margin-top: 15px;
        }

        .hmd-hero-form-note {
            font-size: 13px;
            border-radius: 4px;
            padding: 10px 12px;
            margin-bottom: 12px;
            line-height: 1.4;
        }

        .hmd-hero-form-success {
            background: rgba(16, 185, 129, 0.12);
            border: 1px solid rgba(16, 185, 129, 0.35);
            color: #34d399;
        }

        .hmd-hero-form-error {
            background: rgba(248, 113, 113, 0.12);
            border: 1px solid rgba(248, 113, 113, 0.35);
            color: #f87171;
        }

        /* ===== STATS ===== */
        .hmd-stats {
            padding: 35px 5%;
            border-bottom: 1px solid #eee;
        }

        .hmd-stats-inner {
            max-width: 1100px;
            margin: auto;
            display: flex;
            justify-content: space-around;
            text-align: center;
            flex-wrap: wrap;
            gap: 30px;
        }

        .hmd-stat-num {
            font-size: 36px;
            font-weight: 800;
        }

        .hmd-stat-label {
            color: #777;
        }

        /* ===== SECTIONS ===== */
        .hmd-section {
            padding: 90px 5%;
        }

        .hmd-section-head {
            max-width: 650px;
            margin-bottom: 55px;
        }

        .hmd-center {
            text-align: center;
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
        }

        .hmd-center p {
            margin-left: auto;
            margin-right: auto;
        }

        .hmd-eyebrow {
            font-size: 13px;
            color: #777;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .hmd-eyebrow-dark {
            color: #999;
        }

        .hmd-section-title {
            font-size: 45px;
            letter-spacing: -2px;
            margin: 15px 0;
        }

        .hmd-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }

        /* ===== SERVICE CARDS ===== */
        .hmd-service-card {
            border: 1px solid #ddd;
            padding: 35px;
            border-radius: 10px;
            background: #fff;
        }

        .hmd-card-no {
            font-size: 14px;
            color: #999;
        }

        .hmd-card-subtitle {
            font-size: 27px;
            margin: 15px 0;
        }

        .hmd-card-copy {
            line-height: 1.7;
            color: #666;
        }

        .hmd-link {
            color: #111;
            font-weight: 700;
            text-decoration: none;
        }

        /* ===== PRICING ===== */
        .hmd-pricing {
            padding: 90px 5%;
            background: #111;
            color: #fff;
        }

        .hmd-pricing-desc {
            color: #aaa;
            max-width: 650px;
            line-height: 1.7;
        }

        .hmd-package {
            background: #1d1d1d;
            padding: 35px;
            border: 1px solid #333;
            border-radius: 10px;
        }

        .hmd-package-price {
            font-size: 27px;
            margin: 10px 0;
        }

        .hmd-package-name {
            color: #aaa;
            font-size: 13px;
        }

        .hmd-package-copy {
            color: #aaa;
        }

        .hmd-package-list {
            padding-left: 20px;
            line-height: 2;
            color: #ddd;
        }

        .hmd-package-btn {
            display: block;
            text-align: center;
            padding: 14px;
            text-decoration: none;
            border-radius: 4px;
            font-weight: 700;
        }

        .hmd-package-btn-light {
            background: #fff;
            color: #111;
        }

        .hmd-package-btn-dark {
            background: #111;
            color: #fff;
        }

        /* Featured package */
        .hmd-package-featured {
            background: #fff;
            color: #111;
            padding: 35px;
            border-radius: 10px;
            position: relative;
        }

        .hmd-featured-tag {
            display: inline-block;
            background: #111;
            color: #fff;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 11px;
        }

        .hmd-package-name-dark {
            color: #777;
            margin-top: 20px;
        }

        .hmd-package-price-dark {
            font-size: 32px;
        }

        .hmd-package-copy-dark {
            color: #666;
        }

        .hmd-package-list-dark {
            color: #444;
        }

        /* ===== PORTFOLIO ===== */
        .hmd-portfolio {
            padding: 90px 5%;
            background: #f7f7f5;
        }

        .hmd-portfolio-grid {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 18px;
            align-items: start;
            grid-auto-flow: dense;
        }

        .hmd-cover {
            height: 280px;
            background: #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 7px;
        }

        .hmd-cover span {
            font-weight: 700;
        }

        .hmd-cover-card {
            display: block;
            text-decoration: none;
            background: #fff;
            border-radius: 7px;
            overflow: hidden;
            box-shadow: 0 6px 20px rgba(0,0,0,0.05);
            border: 1px solid #eee;
            transition: transform .3s ease, box-shadow .3s ease, border-color .3s ease;
        }

        .hmd-cover-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 18px 44px rgba(0,0,0,0.12);
            border-color: #d8d2c5;
        }

        .hmd-cover-card.hidden {
            display: none;
        }

        .hmd-cover-img {
            background: #eee;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hmd-cover-img img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform .5s ease;
        }

        .hmd-cover-card:hover .hmd-cover-img img {
            transform: scale(1.05);
        }

        .hmd-cover-info {
            padding: 14px 16px 16px;
            display: flex;
            flex-direction: column;
            gap: 3px;
        }

        .hmd-cover-type {
            font-size: 11px;
            font-weight: 700;
            color: #777;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .hmd-cover-title {
            font-size: 15px;
            line-height: 1.3;
            color: #111;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .hmd-cover-author {
            font-size: 13px;
            color: #666;
        }

        .hmd-portfolio-more {
            text-align: center;
            margin-top: 32px;
        }

        .hmd-portfolio-more a {
            display: inline-block;
            padding: 13px 28px;
            border: 1px solid #ccc;
            border-radius: 5px;
            color: #111;
            font-weight: 700;
            text-decoration: none;
            background: #fff;
            transition: all .25s ease;
        }

        .hmd-portfolio-more a:hover {
            background: #111;
            color: #fff;
            border-color: #111;
        }

        /* ===== PROCESS ===== */
        .hmd-process-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
            gap: 35px;
        }

        .hmd-step-num {
            font-size: 30px;
            font-weight: 800;
        }

        .hmd-step-copy {
            color: #666;
            line-height: 1.7;
        }

        /* ===== TESTIMONIAL ===== */
        .hmd-testimonial {
            padding: 90px 5%;
            background: #f5f2ec;
        }

        .hmd-testimonial-inner {
            max-width: 900px;
            margin: auto;
            text-align: center;
        }

        .hmd-stars {
            font-size: 25px;
            letter-spacing: 4px;
        }

        .hmd-quote {
            font-size: 28px;
            line-height: 1.6;
            margin: 25px 0;
        }

        .hmd-author {
            font-weight: 700;
        }

        .hmd-author-role {
            color: #777;
            margin-top: 5px;
        }

        /* ===== CTA ===== */
        .hmd-cta {
            padding: 100px 5%;
            background: #111;
            color: #fff;
            text-align: center;
        }

        .hmd-cta-title {
            font-size: 50px;
            letter-spacing: -2px;
            margin: 0 0 20px;
        }

        .hmd-cta-desc {
            color: #aaa;
            font-size: 17px;
            margin-bottom: 35px;
        }

        .hmd-cta-btn {
            display: inline-block;
            background: #fff;
            color: #111;
            text-decoration: none;
            padding: 16px 30px;
            border-radius: 5px;
            font-weight: 700;
        }

        /* ===== FOOTER ===== */
        .hmd-footer {
            background: #080808;
            color: #aaa;
            padding: 50px 5%;
        }

        .hmd-footer-inner {
            max-width: 1200px;
            margin: auto;
            display: flex;
            justify-content: space-between;
            gap: 40px;
            flex-wrap: wrap;
        }

        .hmd-footer-brand {
            font-size: 24px;
            color: #fff;
            font-weight: 800;
        }

        .hmd-footer-desc {
            max-width: 350px;
            line-height: 1.7;
        }

        .hmd-footer-head {
            color: #fff;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .hmd-footer-bottom {
            max-width: 1200px;
            margin: 40px auto 0;
            padding-top: 20px;
            border-top: 1px solid #222;
            font-size: 13px;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 1200px) {
            .hmd-portfolio-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }
        @media (max-width: 768px) {
            .hmd-hero-title {
                font-size: 40px;
            }

            .hmd-section-title,
            .hmd-cta-title {
                font-size: 32px;
            }

            .hmd-portfolio-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 14px;
            }
        }
        @media (max-width: 480px) {
            .hmd-portfolio-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <script>
        (function() {
            var cards = Array.prototype.slice.call(document.querySelectorAll('.hmd-cover-card'));
            var vertical = [];
            var pending = cards.length;

            function settle() {
                if (pending > 0) return;
                vertical.forEach(function(card, i) {
                    if (i >= 6) card.classList.add('hidden');
                });
            }

            cards.forEach(function(card) {
                var img = card.querySelector('img');

                function layout() {
                    if (img.naturalWidth > img.naturalHeight) {
                        card.classList.add('hidden');
                    } else {
                        vertical.push(card);
                    }
                    pending--;
                    settle();
                }

                if (!img) {
                    card.classList.add('hidden');
                    pending--;
                    settle();
                } else if (img.complete && img.naturalWidth > 0) {
                    layout();
                } else {
                    img.addEventListener('load', layout);
                }
            });
        })();
    </script>

</body>
</html>