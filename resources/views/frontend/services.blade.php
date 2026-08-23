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

                @foreach ($category->pages as $service)

                    <a href="{{ route('services.show', $service->slug) }}" class="hmd-card">

                        @if($service->badge)
                            <span class="hmd-card-tag-blue">{{ $service->badge }}</span>
                        @endif

                        <h3>{{ $service->title }}</h3>

                        @if($service->short_description)
                            <p class="hmd-card-time" style="margin-top: 10px; font-size: 15px; color: #374151;">{{ \Illuminate\Support\Str::limit($service->short_description, 80) }}</p>
                        @endif

                        @if($service->price_text)
                            <p class="hmd-card-price" style="margin-top: 14px;">{{ $service->price_text }}</p>
                        @endif

                        @if($service->delivery_time)
                            <p class="hmd-card-time">{{ $service->delivery_time }}</p>
                        @endif

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
            background: #ffffff;
            color: #111827;
            line-height: 1.6;
        }

        .hmd-container {
            max-width: 1200px;
            margin: auto;
        }

        /* ===== HERO ===== */
        .hmd-hero {
            background: #f8fafc;
            padding: 70px 5% 65px;
            border-bottom: 1px solid #e5e7eb;
        }

        .hmd-hero-inner {
            max-width: 1100px;
            text-align: center;
        }

        .hmd-pill {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            background: #ffffff;
            border: 1px solid #e5e7eb;
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
            color: #2563eb;
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
            color: #111827;
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
            background: #ffffff;
            border-bottom: 1px solid #e5e7eb;
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
            background: #f3f4f6;
            color: #374151;
            padding: 11px 20px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 700;
        }

        .hmd-cat-btn-dark {
            background: #111827;
            color: #ffffff;
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
        }

        .hmd-section-note {
            margin: 0;
            color: #6b7280;
            max-width: 430px;
        }

        /* ===== CARDS ===== */
        .hmd-cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 18px;
        }

        .hmd-card {
            text-decoration: none;
            color: inherit;
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 14px;
            padding: 25px;
            display: block;
            transition: all .2s ease;
        }

        .hmd-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 24px rgba(17, 24, 39, .08);
        }

        .hmd-card-top {
            display: flex;
            justify-content: space-between;
            gap: 15px;
            align-items: flex-start;
        }

        .hmd-card h3 {
            margin: 0;
            font-size: 18px;
        }

        .hmd-card-arrow {
            color: #2563eb;
            font-weight: 700;
            font-size: 20px;
        }

        .hmd-card-price {
            margin: 18px 0 8px;
            font-size: 17px;
            font-weight: 700;
        }

        .hmd-card-price-sm {
            margin: 13px 0 8px;
        }

        .hmd-card-price-mt {
            margin: 13px 0 8px;
        }

        .hmd-card-time {
            margin: 0;
            color: #6b7280;
            font-size: 14px;
        }

        .hmd-card-time-dark {
            color: #d1d5db;
        }

        .hmd-card-badge {
            display: inline-block;
            background: #eff6ff;
            color: #2563eb;
            padding: 4px 8px;
            border-radius: 5px;
            font-size: 11px;
            font-weight: 700;
            margin-top: 13px;
        }

        .hmd-card-badge-gray {
            background: #f3f4f6;
            color: #374151;
        }

        .hmd-card-badge-mt {
            margin-top: 12px;
        }

        .hmd-card-dark {
            background: #111827;
            color: #ffffff !important;
            border-color: #111827;
        }

        .hmd-card-dark .hmd-card-time {
            color: #d1d5db;
        }

        .hmd-card-tag-blue {
            display: inline-block;
            background: #2563eb;
            color: #ffffff !important;
            padding: 5px 9px;
            border-radius: 5px;
            font-size: 10px;
            font-weight: 800;
            margin-bottom: 13px;
        }

        /* ===== CTA ===== */
        .hmd-cta-box {
            background: #111827;
            color: #ffffff;
            border-radius: 20px;
            padding: 55px 40px;
            text-align: center;
            margin-bottom: 80px;
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
            color: #111827;
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