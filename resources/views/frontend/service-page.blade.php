<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $servicePage->title }} | HMD Publishing</title>
    @if($servicePage->short_description)
        <meta name="description" content="{{ $servicePage->short_description }}">
    @endif
</head>

<body>

    @include('frontend.partials.navbar')

<!-- =========================================================
     HERO
========================================================= -->
<section class="hmd-hero">
    <div class="hmd-container hmd-hero-inner">

        @if($servicePage->badge)
            <div class="hmd-pill">
                <span style="color:#2563eb; font-weight:800;">{{ $servicePage->badge }}</span>
            </div>
        @endif

        <div class="hmd-eyebrow hmd-eyebrow-blue hmd-eyebrow-mb">
            {{ $servicePage->category->name ?? 'Service' }}
        </div>

        <h1 class="hmd-hero-title">
            {{ $servicePage->title }}
        </h1>

        @if($servicePage->short_description)
            <p class="hmd-hero-desc">
                {{ $servicePage->short_description }}
            </p>
        @endif

        @if($servicePage->price_text || $servicePage->delivery_time)
            <div style="display:flex; justify-content:center; gap:30px; margin-top:30px; flex-wrap:wrap;">
                @if($servicePage->price_text)
                    <div style="text-align:center;">
                        <div style="font-size:14px; color:#6b7280; text-transform:uppercase; letter-spacing:1px; font-weight:700;">Starting from</div>
                        <div style="font-size:28px; font-weight:800; color:#111827; letter-spacing:-1px;">{{ $servicePage->price_text }}</div>
                    </div>
                @endif
                @if($servicePage->delivery_time)
                    <div style="text-align:center;">
                        <div style="font-size:14px; color:#6b7280; text-transform:uppercase; letter-spacing:1px; font-weight:700;">Delivery Time</div>
                        <div style="font-size:28px; font-weight:800; color:#111827; letter-spacing:-1px;">{{ $servicePage->delivery_time }}</div>
                    </div>
                @endif
            </div>
        @endif

    </div>
</section>

<!-- =========================================================
     DESCRIPTION
========================================================= -->
@if($servicePage->description)
<main class="hmd-main">
    <div class="hmd-container" style="max-width:900px;">
        <div class="service-content">
            {!! $servicePage->description !!}
        </div>
    </div>
</main>
@endif

<!-- =========================================================
     PRICING PLANS
========================================================= -->
@if($servicePage->plans->count() > 0)
<section style="padding:70px 5%; background:#f8fafc; border-top:1px solid #e5e7eb; border-bottom:1px solid #e5e7eb;">
    <div class="hmd-container">
        <div style="text-align:center; margin-bottom:50px;">
            <div class="hmd-eyebrow hmd-eyebrow-blue" style="margin-bottom:12px;">Pricing</div>
            <h2 style="margin:0; font-size:38px; letter-spacing:-1.5px;">Choose your plan</h2>
        </div>

        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(280px, 1fr)); gap:24px; max-width:1100px; margin:auto;">
            @foreach ($servicePage->plans as $plan)
                <div style="background:#fff; border:1px solid #e5e7eb; border-radius:16px; padding:32px 28px; position:relative; {{ $plan->is_featured ? 'border:2px solid #2563eb; box-shadow: 0 8px 30px rgba(37,99,235,0.1);' : '' }}">

                    @if($plan->badge)
                        <div style="display:inline-block; background:{{ $plan->is_featured ? '#2563eb' : '#eff6ff' }}; color:{{ $plan->is_featured ? '#fff' : '#2563eb' }}; padding:5px 12px; border-radius:6px; font-size:11px; font-weight:800; margin-bottom:16px; text-transform:uppercase;">
                            {{ $plan->badge }}
                        </div>
                    @endif

                    <h3 style="margin:0 0 6px; font-size:22px;">{{ $plan->name }}</h3>

                    @if($plan->description)
                        <p style="margin:0 0 20px; color:#6b7280; font-size:14px;">{{ $plan->description }}</p>
                    @else
                        <div style="height:20px;"></div>
                    @endif

                    <div style="margin-bottom:24px;">
                        <span style="font-size:40px; font-weight:800; letter-spacing:-2px;">£{{ number_format($plan->price, 0) }}</span>
                        @if($plan->separate_cost)
                            <span style="font-size:16px; color:#9ca3af; text-decoration:line-through; margin-left:8px;">£{{ number_format($plan->separate_cost, 0) }}</span>
                        @endif
                    </div>

                    @if($plan->separate_cost && $plan->separate_cost > $plan->price)
                        @php $savings = $plan->separate_cost - $plan->price; @endphp
                        <div style="background:#ecfdf5; color:#059669; padding:8px 14px; border-radius:8px; font-size:13px; font-weight:600; margin-bottom:20px;">
                            💰 Save £{{ number_format($savings, 0) }}
                        </div>
                    @endif

                    @if($plan->features && count($plan->features) > 0)
                        <ul style="list-style:none; padding:0; margin:0 0 28px;">
                            @foreach ($plan->features as $feature)
                                <li style="padding:8px 0; font-size:14px; color:#374151; display:flex; gap:10px; align-items:flex-start;">
                                    <span style="color:#2563eb; font-weight:bold; flex-shrink:0;">✓</span>
                                    <span>{{ $feature }}</span>
                                </li>
                            @endforeach
                        </ul>
                    @endif

                    <a href="#" style="display:block; text-align:center; background:{{ $plan->is_featured ? '#2563eb' : '#fff' }}; color:{{ $plan->is_featured ? '#fff' : '#111827' }}; border:{{ $plan->is_featured ? 'none' : '2px solid #e5e7eb' }}; padding:14px 24px; border-radius:10px; font-weight:800; font-size:14px; text-decoration:none; transition:all 0.2s ease;">
                        {{ $plan->button_text }}
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- =========================================================
     ADD-ONS
========================================================= -->
@if($servicePage->addons->count() > 0)
<section style="padding:70px 5%;">
    <div class="hmd-container" style="max-width:900px;">
        <div style="text-align:center; margin-bottom:40px;">
            <div class="hmd-eyebrow hmd-eyebrow-blue" style="margin-bottom:12px;">Add-ons</div>
            <h2 style="margin:0; font-size:36px; letter-spacing:-1.5px;">Enhance your order</h2>
            <p style="margin:12px 0 0; color:#6b7280; font-size:17px;">Optional extras available during checkout</p>
        </div>

        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(250px, 1fr)); gap:18px;">
            @foreach ($servicePage->addons as $addon)
                <div style="background:#fff; border:1px solid #e5e7eb; border-radius:12px; padding:22px; display:flex; flex-direction:column; gap:10px;">
                    <h4 style="margin:0; font-size:16px;">{{ $addon->name }}</h4>
                    @if($addon->description)
                        <p style="margin:0; color:#6b7280; font-size:14px;">{{ $addon->description }}</p>
                    @endif
                    <div style="margin-top:auto; padding-top:10px;">
                        <span style="font-size:22px; font-weight:800; color:#111827;">+£{{ number_format($addon->price, 0) }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- =========================================================
     CTA
========================================================= -->
<section class="hmd-cta-box">
    <div class="hmd-cta-inner">
        <div class="hmd-eyebrow hmd-eyebrow-blue hmd-eyebrow-cta">
            Ready to get started?
        </div>
        <h2 class="hmd-cta-title">
            Tell us about your book
        </h2>
        <p class="hmd-cta-desc">
            Tell us about your book and we'll help you choose the right plan.
        </p>
        <a href="/contact" class="hmd-cta-btn">
            Book a free consultation →
        </a>
    </div>
</section>

<!-- =========================================================
     FOOTER
========================================================= -->
<footer class="hmd-footer">
    <div class="hmd-container">
        <div class="hmd-footer-grid">
            <div>
                <a href="/" class="hmd-footer-brand">
                    HMD <span class="hmd-brand-accent">Publishing</span>
                </a>
                <p class="hmd-footer-about">
                    Professional book publishing services.
                    10,000+ books published across 47 countries since 2015.
                </p>
                <p class="hmd-footer-line">2 Castle Meadow Rd,<br>Nottingham NG2 1AJ</p>
                <p class="hmd-footer-line">info@hmdpublishing.com</p>
                <p class="hmd-footer-line">+44 7888 862764</p>
            </div>
            <div>
                <h4 class="hmd-footer-head">Services</h4>
                <a href="/services" class="hmd-footer-link hmd-footer-link-bold">All services →</a>
            </div>
            <div>
                <h4 class="hmd-footer-head">Free tools</h4>
                <a href="/tools" class="hmd-footer-link hmd-footer-link-bold">All 28 tools →</a>
            </div>
            <div>
                <h4 class="hmd-footer-head">Company</h4>
                <a href="/about" class="hmd-footer-link">About</a>
                <a href="/contact" class="hmd-footer-link">Contact</a>
            </div>
        </div>
        <div class="hmd-footer-bottom">
            <div>© 2026 HMDPublishing Limited. All rights reserved.</div>
            <div class="hmd-footer-rights">You keep 100% of your rights and royalties — always.</div>
        </div>
    </div>
</footer>

    <style>
        body { margin:0; padding:0; font-family:Arial,Helvetica,sans-serif; background:#fff; color:#111827; line-height:1.6; }
        .hmd-container { max-width:1200px; margin:auto; }
        .hmd-hero { background:#f8fafc; padding:70px 5% 65px; border-bottom:1px solid #e5e7eb; text-align:center; }
        .hmd-hero-inner { max-width:1100px; margin:auto; }
        .hmd-pill { display:inline-flex; align-items:center; gap:12px; background:#fff; border:1px solid #e5e7eb; padding:9px 16px; border-radius:50px; margin-bottom:25px; font-size:14px; }
        .hmd-eyebrow { font-weight:700; font-size:14px; text-transform:uppercase; letter-spacing:1px; }
        .hmd-eyebrow-blue { color:#2563eb; }
        .hmd-eyebrow-mb { margin-bottom:12px; }
        .hmd-hero-title { margin:0 0 20px; font-size:clamp(42px,6vw,72px); line-height:1.05; letter-spacing:-3px; font-weight:800; color:#111827; }
        .hmd-hero-desc { max-width:720px; margin:0 auto; font-size:19px; color:#6b7280; }
        .hmd-main { max-width:1200px; margin:auto; padding:70px 5%; }
        .service-content { font-size:17px; line-height:1.8; color:#374151; }
        .service-content h2 { font-size:28px; letter-spacing:-1px; margin:40px 0 16px; color:#111827; }
        .service-content h3 { font-size:22px; margin:30px 0 12px; color:#111827; }
        .service-content p { margin:0 0 16px; }
        .service-content ul { padding-left:24px; margin:0 0 16px; }
        .service-content li { margin-bottom:8px; }
        .hmd-cta-box { background:#111827; color:#fff; border-radius:20px; padding:55px 40px; text-align:center; margin:0 5% 80px; }
        .hmd-cta-inner { max-width:700px; margin:auto; }
        .hmd-eyebrow-cta { color:#93c5fd; margin-bottom:12px; }
        .hmd-cta-title { margin:0 0 15px; font-size:38px; line-height:1.15; letter-spacing:-1.5px; }
        .hmd-cta-desc { margin:0 auto 28px; max-width:580px; color:#d1d5db; font-size:17px; }
        .hmd-cta-btn { display:inline-block; text-decoration:none; background:#fff; color:#111827; padding:14px 24px; border-radius:8px; font-weight:800; font-size:14px; }
        .hmd-footer { background:#f8fafc; border-top:1px solid #e5e7eb; padding:60px 5% 25px; }
        .hmd-footer-grid { display:grid; grid-template-columns:2fr 1fr 1fr 1fr; gap:45px; margin-bottom:50px; }
        .hmd-footer-brand { text-decoration:none; color:#111827; font-size:25px; font-weight:800; }
        .hmd-brand-accent { font-weight:400; }
        .hmd-footer-about { max-width:360px; color:#6b7280; margin:18px 0; font-size:14px; }
        .hmd-footer-line { margin:8px 0; color:#4b5563; font-size:14px; }
        .hmd-footer-head { margin:0 0 18px; font-size:15px; }
        .hmd-footer-link { display:block; text-decoration:none; color:#6b7280; font-size:14px; margin:10px 0; }
        .hmd-footer-link-bold { color:#111827; font-weight:700; margin-top:16px; }
        .hmd-footer-bottom { border-top:1px solid #e5e7eb; padding-top:22px; display:flex; justify-content:space-between; align-items:center; gap:20px; flex-wrap:wrap; color:#6b7280; font-size:13px; }
        .hmd-footer-rights { font-weight:600; color:#374151; }
        @media (max-width:768px) { .hmd-hero-title { font-size:40px; } .hmd-footer-grid { grid-template-columns:1fr 1fr; } }
        @media (max-width:480px) { .hmd-footer-grid { grid-template-columns:1fr; } .hmd-footer-bottom { flex-direction:column; align-items:flex-start; } }
    </style>

</body>
</html>
