@php
    $h = fn($key, $field = 'title', $default = '') => $sections[$key]->$field ?? $default;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team | HMD Publishing</title>
    <style>
        body { margin: 0; padding: 0; font-family: Arial, Helvetica, sans-serif; background: #ffffff; color: #111827; line-height: 1.6; }
        .hmd-container { max-width: 1200px; margin: auto; }
        .hmd-eyebrow { font-weight: 700; font-size: 14px; text-transform: uppercase; letter-spacing: 1px; }
        .hmd-eyebrow-blue { color: #2563eb; }
        .hmd-eyebrow-mb { margin-bottom: 12px; }

        /* Hero */
        .team-hero { background: #f8fafc; padding: 80px 5% 70px; border-bottom: 1px solid #e5e7eb; text-align: center; }
        .team-hero h1 { margin: 0 0 18px; font-size: clamp(36px, 5vw, 56px); line-height: 1.08; letter-spacing: -2.5px; font-weight: 800; }
        .team-hero p { max-width: 700px; margin: 0 auto 28px; color: #6b7280; font-size: 18px; }
        .team-back-link { display: inline-flex; align-items: center; gap: 6px; color: #2563eb; font-weight: 700; font-size: 14px; text-decoration: none; margin-top: 8px; }
        .team-back-link:hover { text-decoration: underline; }

        /* Grid */
        .team-section { padding: 70px 5%; }
        .team-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; max-width: 1100px; margin: auto; }
        .team-card { border: 1px solid #e5e7eb; border-radius: 14px; overflow: hidden; background: #ffffff; transition: box-shadow 0.2s, transform 0.2s; }
        .team-card:hover { box-shadow: 0 8px 30px rgba(0,0,0,0.08); transform: translateY(-3px); }
        .team-card-photo { height: 220px; background: linear-gradient(135deg, #dbeafe, #f3f4f6); display: flex; align-items: center; justify-content: center; font-size: 64px; overflow: hidden; }
        .team-card-photo img { width: 100%; height: 100%; object-fit: cover; }
        .team-card-body { padding: 22px; }
        .team-card-body h3 { margin: 0 0 4px; font-size: 18px; }
        .team-card-role { color: #2563eb; font-size: 13px; font-weight: 700; margin-bottom: 10px; }
        .team-card-body p { margin: 0; color: #6b7280; font-size: 14px; }

        /* CTA */
        .team-cta { padding: 20px 5% 80px; }
        .team-cta-box { max-width: 900px; margin: auto; background: #111827; color: #fff; border-radius: 20px; padding: 50px 40px; text-align: center; }
        .team-cta-box h2 { margin: 0 0 14px; font-size: 32px; letter-spacing: -1.5px; }
        .team-cta-box p { margin: 0 auto 28px; color: #d1d5db; max-width: 600px; }
        .team-cta-btns { display: flex; justify-content: center; gap: 12px; flex-wrap: wrap; }
        .team-cta-btn { display: inline-block; text-decoration: none; background: #fff; color: #111827; padding: 14px 22px; border-radius: 8px; font-size: 14px; font-weight: 800; }
        .team-cta-btn-outline { display: inline-block; text-decoration: none; border: 1px solid #4b5563; color: #fff; padding: 14px 22px; border-radius: 8px; font-size: 14px; font-weight: 800; }

        /* Footer */
        .hmd-footer { background: #f8fafc; border-top: 1px solid #e5e7eb; padding: 60px 5% 25px; }
        .hmd-footer-grid { display: grid; grid-template-columns: 2fr 1fr 1fr; gap: 45px; margin-bottom: 50px; }
        .hmd-footer-brand { text-decoration: none; color: #111827; font-size: 25px; font-weight: 800; }
        .hmd-brand-accent { color: #2563eb; }
        .hmd-footer-about { max-width: 360px; color: #6b7280; margin: 18px 0; font-size: 14px; }
        .hmd-footer-line { margin: 8px 0; color: #4b5563; font-size: 14px; }
        .hmd-footer-head { margin: 0 0 18px; font-size: 15px; }
        .hmd-footer-link { display: block; text-decoration: none; color: #6b7280; font-size: 14px; margin: 10px 0; }
        .hmd-footer-link-bold { color: #111827; font-weight: 700; margin-top: 16px; }
        .hmd-footer-bottom { border-top: 1px solid #e5e7eb; padding-top: 22px; display: flex; justify-content: space-between; align-items: center; gap: 20px; flex-wrap: wrap; color: #6b7280; font-size: 13px; }
        .hmd-footer-rights { font-weight: 600; color: #374151; }
        .hmd-footer-legal { display: flex; gap: 18px; }
        .hmd-footer-legal a { color: #6b7280; text-decoration: none; }

        @media (max-width: 900px) { .team-grid { grid-template-columns: 1fr 1fr; } .hmd-footer-grid { grid-template-columns: 1fr 1fr; } }
        @media (max-width: 600px) { .team-grid { grid-template-columns: 1fr; } .hmd-footer-grid { grid-template-columns: 1fr; } .hmd-footer-bottom { flex-direction: column; align-items: flex-start; } }
    </style>
</head>

<body>

@include('frontend.partials.navbar')

<section class="team-hero">
    <div class="hmd-container">
        <div class="hmd-eyebrow hmd-eyebrow-blue hmd-eyebrow-mb">Team</div>
        <h1>{{ $h('team', 'title', 'The people behind the publishing work.') }}</h1>
        <p>{{ $h('team', 'description', 'The team spans editorial, design, production, publishing, and marketing support.') }}</p>
        <a href="/about" class="team-back-link"><i class="bi bi-arrow-left"></i> Back to About</a>
    </div>
</section>

<section class="team-section">
    <div class="team-grid">
        @foreach($sections->where('section_type', 'team_members')->values() as $member)
            <div class="team-card">
                <div class="team-card-photo">
                    @if($member->image)
                        @if(preg_match('#^https?://#i', $member->image))
                            <img src="{{ $member->image }}" alt="{{ $member->title }}">
                        @else
                            <img src="{{ asset($member->image) }}" alt="{{ $member->title }}">
                        @endif
                    @else
                        {{ $member->icon ?? '👤' }}
                    @endif
                </div>
                <div class="team-card-body">
                    <h3>{{ $member->title }}</h3>
                    <div class="team-card-role">{{ $member->description }}</div>
                    <p>{{ $member->content }}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>

<section class="team-cta">
    <div class="team-cta-box">
        <h2>Want to work with us?</h2>
        <p>We can look at your manuscript stage, publishing goal, and likely next step, then point you toward the right package or service.</p>
        <div class="team-cta-btns">
            <a href="/contact" class="team-cta-btn">Book a free consultation →</a>
            <a href="/services" class="team-cta-btn-outline">Explore services</a>
        </div>
    </div>
</section>

<footer class="hmd-footer">
    <div class="hmd-container">
        <div class="hmd-footer-grid">
            <div>
                <a href="/" class="hmd-footer-brand">HMD <span class="hmd-brand-accent">Publishing</span></a>
                <p class="hmd-footer-about">Professional book publishing services. 10,000+ books published across 47 countries since 2015.</p>
                <p class="hmd-footer-line">2 Castle Meadow Rd,<br>Nottingham NG2 1AJ</p>
                <p class="hmd-footer-line">info@hmdpublishing.com</p>
                <p class="hmd-footer-line">+44 7888 862764</p>
            </div>
            <div>
                <h4 class="hmd-footer-head">Services</h4>
                <a href="/services" class="hmd-footer-link">Complete Package</a>
                <a href="/services/editing" class="hmd-footer-link">Editing</a>
                <a href="/services/book-cover-design" class="hmd-footer-link">Cover Design</a>
                <a href="/services/book-formatting" class="hmd-footer-link">Book Formatting</a>
                <a href="/services" class="hmd-footer-link hmd-footer-link-bold">All services →</a>
            </div>
            <div>
                <h4 class="hmd-footer-head">Company</h4>
                <a href="/about" class="hmd-footer-link">About</a>
                <a href="/#portfolio" class="hmd-footer-link">Portfolio</a>
                <a href="/contact" class="hmd-footer-link">Contact</a>
            </div>
        </div>
        <div class="hmd-footer-bottom">
            <div>© 2026 HMDPublishing Limited. All rights reserved.</div>
            <div class="hmd-footer-rights">You keep 100% of your rights and royalties — always.</div>
            <div class="hmd-footer-legal">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>
                <a href="#">Refund Policy</a>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
