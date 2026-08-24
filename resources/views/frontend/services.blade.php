<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publishing Services | HMD Publishing</title>
</head>

<body>

    @include('frontend.partials.navbar')

<!-- =========================================================
     HERO
========================================================= -->
<section class="hmd-hero">
    <div class="hmd-container hmd-hero-inner">

        <div class="hmd-pill">
            <span class="hmd-pill-stars">★★★★★</span>
            <strong>4.7 out of 5</strong>
            <span class="hmd-pill-text">Based on 83 Trustpilot reviews</span>
        </div>            <div class="hmd-eyebrow hmd-eyebrow-blue hmd-eyebrow-mb">
            {{ $categories->sum(fn($c) => $c->pages->count()) }} professional services
        </div>

        <h1 class="hmd-hero-title">
            Publishing services
        </h1>

        <p class="hmd-hero-desc">
            Find the service you need, compare the starting price and
            delivery time, then view the details.
        </p>

    </div>
</section>

<!-- =========================================================
     CATEGORY NAV
========================================================= -->
<section class="hmd-catnav">
    <div class="hmd-container hmd-catnav-inner">

        @foreach ($categories as $category)
            <a href="#{{ $category->slug }}" class="hmd-cat-btn @if($loop->first) hmd-cat-btn-dark @endif">
                {{ $category->name }}
            </a>
        @endforeach

    </div>
</section>

<!-- =========================================================
     MAIN CONTENT
========================================================= -->
<main class="hmd-main">    @foreach ($categories as $category)

        <section id="{{ $category->slug }}" class="hmd-service-section">

            <div class="hmd-section-row">

                <div>
                    <div class="hmd-eyebrow hmd-eyebrow-blue hmd-eyebrow-mb">
                        {{ $category->name }}
                    </div>
                    <h2 class="hmd-section-title">
                        {{ $category->name }}
                    </h2>
                </div>

                @if($category->description)
                    <p class="hmd-section-note">
                        {{ $category->description }}
                    </p>
                @endif

            </div>

            <div class="hmd-cards-grid">

                @php
                    $gradients = [
                        ['#6366f1', '#8b5cf6'],
                        ['#06b6d4', '#3b82f6'],
                        ['#10b981', '#059669'],
                        ['#f59e0b', '#ef4444'],
                        ['#ec4899', '#8b5cf6'],
                        ['#14b8a6', '#22d3ee'],
                    ];
                @endphp

                @foreach ($category->pages as $service)

                    @php
                        $grad = $gradients[$loop->index % count($gradients)];
                    @endphp

                    <a href="{{ route('services.show', $service->slug) }}" class="hmd-gc" style="--gc-from: {{ $grad[0] }}; --gc-to: {{ $grad[1] }};">

                        <div class="hmd-gc-back"></div>

                        <div class="hmd-gc-glow"></div>

                        <div class="hmd-gc-front">

                            @if($service->badge)
                                <span class="hmd-gc-badge">{{ $service->badge }}</span>
                            @endif

                            <h3 class="hmd-gc-title">{{ $service->title }}</h3>

                            @if($service->short_description)
                                <p class="hmd-gc-desc">{{ \Illuminate\Support\Str::limit($service->short_description, 80) }}</p>
                            @endif

                            @if($service->price_text)
                                <div class="hmd-gc-meta">
                                    <span class="hmd-gc-price">{{ $service->price_text }}</span>
                                </div>
                            @endif

                            @if($service->delivery_time)
                                <p class="hmd-gc-time">{{ $service->delivery_time }}</p>
                            @endif

                            <span class="hmd-gc-arrow">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                            </span>

                        </div>

                    </a>

                @endforeach

            </div>

        </section>

    @endforeach

    <!-- =========================================================
         CTA
    ========================================================= -->
    <section class="hmd-cta-box">

        <div class="hmd-cta-inner">

            <div class="hmd-eyebrow hmd-eyebrow-blue hmd-eyebrow-cta">
                Not sure what you need?
            </div>

            <h2 class="hmd-cta-title">
                Tell us about your book
            </h2>

            <p class="hmd-cta-desc">
                Tell us about your book and we'll recommend
                the right service for your goals.
            </p>

            <a href="/contact" class="hmd-cta-btn">
                Book a free consultation →
            </a>

        </div>

    </section>

</main>

@include('frontend.partials.cinematic-footer')


    <style>
        /* ===== HMD Publishing - Services Listing Page ===== */

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #0a0a0f;
            color: #e5e7eb;
            line-height: 1.6;
        }

        .hmd-container {
            max-width: 1200px;
            margin: auto;
        }

        /* ===== HERO ===== */
        .hmd-hero {
            background: #111118;
            padding: 70px 5% 65px;
            border-bottom: 1px solid #1f1f2e;
        }

        .hmd-hero-inner {
            max-width: 1100px;
            text-align: center;
        }

        .hmd-pill {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            background: rgba(255,255,255,0.06);
            border: 1px solid rgba(255,255,255,0.12);
            padding: 9px 16px;
            border-radius: 50px;
            margin-bottom: 25px;
            font-size: 14px;
        }

        .hmd-pill-stars {
            color: #00b67a;
            font-weight: 800;
        }

        .hmd-pill-text {
            color: #6b7280;
        }

        .hmd-eyebrow {
            font-weight: 700;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .hmd-eyebrow-blue {
            color: #60a5fa;
        }

        .hmd-eyebrow-mb {
            margin-bottom: 12px;
        }

        .hmd-hero-title {
            margin: 0 0 20px;
            font-size: clamp(42px, 6vw, 72px);
            line-height: 1.05;
            letter-spacing: -3px;
            font-weight: 800;
            color: #ffffff;
        }

        .hmd-hero-desc {
            max-width: 720px;
            margin: 0 auto;
            font-size: 19px;
            color: #6b7280;
        }

        /* ===== CATEGORY NAV ===== */
        .hmd-catnav {
            padding: 25px 5%;
            background: #0a0a0f;
            border-bottom: 1px solid #1f1f2e;
        }

        .hmd-catnav-inner {
            max-width: 1000px;
            display: flex;
            justify-content: center;
            gap: 12px;
            flex-wrap: wrap;
        }

        .hmd-cat-btn {
            text-decoration: none;
            background: rgba(255,255,255,0.06);
            color: #9ca3af;
            padding: 11px 20px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 700;
            border: 1px solid rgba(255,255,255,0.08);
        }

        .hmd-cat-btn-dark {
            background: #ffffff;
            color: #0a0a0f;
            border-color: #ffffff;
        }

        /* ===== MAIN ===== */
        .hmd-main {
            max-width: 1200px;
            margin: auto;
            padding: 70px 5%;
        }

        .hmd-service-section {
            margin-bottom: 80px;
            padding-top: 20px;
        }

        .hmd-section-row {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            gap: 30px;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }

        .hmd-section-title {
            margin: 0;
            font-size: 36px;
            letter-spacing: -1.5px;
            color: #ffffff;
        }

        .hmd-section-note {
            margin: 0;
            color: #9ca3af;
            max-width: 430px;
        }

        /* ===== CARDS ===== */
        .hmd-cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 28px;
        }

        /* Gradient Card */
        .hmd-gc {
            position: relative;
            display: block;
            text-decoration: none;
            color: inherit;
            cursor: pointer;
            group: yes;
        }

        /* Skewed Back Panel */
        .hmd-gc-back {
            position: absolute;
            inset: 0;
            border-radius: 16px;
            background: linear-gradient(135deg, var(--gc-from), var(--gc-to));
            transform: skewX(15deg) scale(0.95);
            opacity: 0.4;
            transition: all .5s cubic-bezier(.25,.1,.25,1);
            z-index: 0;
        }

        .hmd-gc:hover .hmd-gc-back {
            transform: skewX(15deg) scale(1);
            opacity: 0.7;
        }

        /* Glow Blur */
        .hmd-gc-glow {
            position: absolute;
            inset: -30px;
            border-radius: 50%;
            background: radial-gradient(circle at 50% 50%, var(--gc-from), transparent 70%);
            opacity: 0;
            filter: blur(50px);
            transition: opacity .5s ease;
            z-index: 0;
            pointer-events: none;
        }

        .hmd-gc:hover .hmd-gc-glow {
            opacity: 0.35;
        }

        /* Front Card */
        .hmd-gc-front {
            position: relative;
            z-index: 1;
            background: #0a0a0f;
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 14px;
            padding: 28px;
            transition: all .5s cubic-bezier(.25,.1,.25,1);
            overflow: hidden;
        }

        .hmd-gc:hover .hmd-gc-front {
            transform: translateY(-4px);
            border-color: rgba(255,255,255,0.18);
            box-shadow: 0 25px 60px rgba(0,0,0,0.4), 0 0 40px rgba(var(--gc-from-rgb, 99,102,241), 0.15);
        }

        /* Badge */
        .hmd-gc-badge {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 6px;
            font-size: 11px;
            font-weight: 700;
            background: linear-gradient(135deg, var(--gc-from), var(--gc-to));
            color: #fff;
            margin-bottom: 14px;
            letter-spacing: 0.3px;
        }

        /* Title */
        .hmd-gc-title {
            margin: 0 0 10px;
            font-size: 19px;
            font-weight: 700;
            color: #f3f4f6;
            line-height: 1.3;
        }

        /* Description */
        .hmd-gc-desc {
            margin: 0 0 16px;
            font-size: 14px;
            color: #9ca3af;
            line-height: 1.6;
        }

        /* Price Meta */
        .hmd-gc-meta {
            margin-bottom: 8px;
        }

        .hmd-gc-price {
            display: inline-block;
            font-size: 16px;
            font-weight: 700;
            color: #f3f4f6;
        }

        /* Time */
        .hmd-gc-time {
            margin: 0;
            font-size: 13px;
            color: #6b7280;
        }

        /* Arrow */
        .hmd-gc-arrow {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 32px;
            border-radius: 8px;
            background: rgba(255,255,255,0.06);
            color: #a0a0b8;
            margin-top: 18px;
            transition: all .3s ease;
        }

        .hmd-gc:hover .hmd-gc-arrow {
            background: linear-gradient(135deg, var(--gc-from), var(--gc-to));
            color: #fff;
            transform: translateX(4px);
        }

        /* ===== CTA ===== */
        .hmd-cta-box {
            background: #111118;
            color: #ffffff;
            border-radius: 20px;
            padding: 55px 40px;
            text-align: center;
            margin-bottom: 80px;
            border: 1px solid #1f1f2e;
        }

        .hmd-cta-inner {
            max-width: 700px;
            margin: auto;
        }

        .hmd-eyebrow-cta {
            color: #93c5fd;
            margin-bottom: 12px;
        }

        .hmd-cta-title {
            margin: 0 0 15px;
            font-size: 38px;
            line-height: 1.15;
            letter-spacing: -1.5px;
        }

        .hmd-cta-desc {
            margin: 0 auto 28px;
            max-width: 580px;
            color: #d1d5db;
            font-size: 17px;
        }

        .hmd-cta-btn {
            display: inline-block;
            text-decoration: none;
            background: #ffffff;
            color: #0a0a0f;
            padding: 14px 24px;
            border-radius: 8px;
            font-weight: 800;
            font-size: 14px;
        }

        /* ===== FOOTER ===== */
        .hmd-footer {
            background: #f8fafc;
            border-top: 1px solid #e5e7eb;
            padding: 60px 5% 25px;
        }

        .hmd-footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 45px;
            margin-bottom: 50px;
        }

        .hmd-footer-brand {
            text-decoration: none;
            color: #111827;
            font-size: 25px;
            font-weight: 800;
        }

        .hmd-footer-about {
            max-width: 360px;
            color: #6b7280;
            margin: 18px 0;
            font-size: 14px;
        }

        .hmd-footer-line {
            margin: 8px 0;
            color: #4b5563;
            font-size: 14px;
        }

        .hmd-footer-head {
            margin: 0 0 18px;
            font-size: 15px;
        }

        .hmd-footer-head-sm {
            margin: 25px 0 12px;
            font-size: 14px;
        }

        .hmd-footer-link {
            display: block;
            text-decoration: none;
            color: #6b7280;
            font-size: 14px;
            margin: 10px 0;
        }

        .hmd-footer-link-bold {
            color: #111827;
            font-weight: 700;
            margin-top: 16px;
        }

        .hmd-footer-partners {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .hmd-footer-partner {
            color: #6b7280;
            text-decoration: none;
            font-size: 13px;
        }

        .hmd-footer-bottom {
            border-top: 1px solid #e5e7eb;
            padding-top: 22px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
            color: #6b7280;
            font-size: 13px;
        }

        .hmd-footer-rights {
            font-weight: 600;
            color: #374151;
        }

        .hmd-footer-legal {
            display: flex;
            gap: 18px;
        }

        .hmd-footer-legal a {
            color: #6b7280;
            text-decoration: none;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 900px) {
            .hmd-footer-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 768px) {
            .hmd-hero-title {
                font-size: 40px;
            }

            .hmd-section-title {
                font-size: 28px;
            }

            .hmd-section-row {
                align-items: flex-start;
                flex-direction: column;
                gap: 15px;
            }
        }

        @media (max-width: 480px) {
            .hmd-footer-grid {
                grid-template-columns: 1fr;
            }

            .hmd-footer-bottom {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>

</body>
</html>