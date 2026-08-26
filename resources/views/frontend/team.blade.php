@php
    $h = fn($key, $field = 'title', $default = '') => $sections[$key]->$field ?? $default;
    $teamMembers = $sections->where('section_type', 'team_members')->values();
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team | HMD Publishing</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>

@include('frontend.partials.navbar')

<!-- =========================================================
     HERO — Dark cinematic
========================================================= -->
<section style="
    position: relative;
    padding: 100px 5% 90px;
    background: #0a0a0a;
    overflow: hidden;
    text-align: center;
    color: #fff;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
">

    <!-- Animated aurora glow -->
    <div style="
        position: absolute;
        left: 50%;
        top: 50%;
        width: 80vw;
        height: 60vh;
        border-radius: 50%;
        filter: blur(120px);
        pointer-events: none;
        z-index: 0;
        transform: translate(-50%, -50%);
        background: radial-gradient(circle, rgba(59,130,246,0.15) 0%, rgba(139,92,246,0.12) 40%, transparent 70%);
        animation: teamAurora 8s ease-in-out infinite alternate;
    "></div>

    <!-- Grid background -->
    <div style="
        position: absolute;
        inset: 0;
        z-index: 0;
        pointer-events: none;
        background-size: 60px 60px;
        background-image:
            linear-gradient(to right, rgba(255,255,255,0.025) 1px, transparent 1px),
            linear-gradient(to bottom, rgba(255,255,255,0.025) 1px, transparent 1px);
        mask-image: linear-gradient(to bottom, transparent, black 20%, black 80%, transparent);
        -webkit-mask-image: linear-gradient(to bottom, transparent, black 20%, black 80%, transparent);
    "></div>

    <!-- Giant watermark text -->
    <div style="
        position: absolute;
        bottom: 20%;
        left: 50%;
        transform: translateX(-50%);
        white-space: nowrap;
        z-index: 0;
        pointer-events: none;
        user-select: none;
        font-size: 14vw;
        line-height: 0.75;
        font-weight: 900;
        letter-spacing: -0.03em;
        color: transparent;
        -webkit-text-stroke: 1px rgba(255,255,255,0.04);
    ">OUR TEAM</div>

    <div style="position: relative; z-index: 10; max-width: 800px; margin: auto;">

        <!-- Eyebrow -->
        <div style="
            display: inline-block;
            padding: 8px 20px;
            border-radius: 30px;
            background: rgba(255,255,255,0.06);
            border: 1px solid rgba(255,255,255,0.12);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: rgba(255,255,255,0.6);
            margin-bottom: 28px;
        ">Team</div>

        <!-- Title -->
        <h1 style="
            font-size: clamp(40px, 6vw, 72px);
            font-weight: 900;
            letter-spacing: -3px;
            line-height: 1;
            margin: 0 0 24px;
            background: linear-gradient(180deg, #ffffff 0%, rgba(255,255,255,0.45) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            filter: drop-shadow(0 0 40px rgba(255,255,255,0.06));
        ">{{ $h('team', 'title', 'The people behind the publishing work.') }}</h1>

        <!-- Description -->
        <p style="
            font-size: 18px;
            line-height: 1.7;
            color: rgba(255,255,255,0.5);
            max-width: 600px;
            margin: 0 auto 32px;
        ">{{ $h('team', 'description', 'The team spans editorial, design, production, publishing, and marketing support.') }}</p>

        <!-- Back link -->
        <a href="/about" style="
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: rgba(255,255,255,0.6);
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            padding: 12px 24px;
            border-radius: 30px;
            border: 1px solid rgba(255,255,255,0.1);
            background: rgba(255,255,255,0.04);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            transition: all 0.3s cubic-bezier(0.16,1,0.3,1);
        " onmouseover="this.style.borderColor='rgba(255,255,255,0.25)';this.style.color='#fff';this.style.transform='translateY(-2px)'" onmouseout="this.style.borderColor='rgba(255,255,255,0.1)';this.style.color='rgba(255,255,255,0.6)';this.style.transform='none'">
            ← Back to About
        </a>

    </div>
</section>


<!-- =========================================================
     TEAM GRID — Elegant cards
========================================================= -->
<section style="
    padding: 100px 5%;
    background: #fff;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
">
    <div style="max-width: 1200px; margin: auto;">

        <!-- Section header -->
        <div style="text-align: center; margin-bottom: 60px;">
            <div style="
                display: inline-block;
                padding: 6px 16px;
                border-radius: 6px;
                border: 1px solid #e5e7eb;
                font-size: 12px;
                font-weight: 700;
                text-transform: uppercase;
                letter-spacing: 2px;
                color: #999;
                margin-bottom: 20px;
            ">Meet the team</div>
            <h2 style="
                font-size: clamp(32px, 4vw, 48px);
                font-weight: 900;
                letter-spacing: -2px;
                margin: 0 0 16px;
                color: #111;
            ">Our talented people</h2>
            <p style="
                color: #888;
                font-size: 17px;
                max-width: 550px;
                margin: auto;
                line-height: 1.7;
            ">Passionate professionals dedicated to bringing your book to life.</p>
        </div>

        <!-- Team grid -->
        <div style="
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
        " class="team-new-grid">

            @foreach($teamMembers as $index => $member)
                <div style="
                    border-radius: 16px;
                    overflow: hidden;
                    background: #fff;
                    border: 1px solid #f0f0f0;
                    transition: all 0.4s cubic-bezier(0.16,1,0.3,1);
                    position: relative;
                " class="team-new-card" onmouseover="this.style.transform='translateY(-8px)';this.style.boxShadow='0 25px 60px rgba(0,0,0,0.12)';this.style.borderColor='#e0e0e0'" onmouseout="this.style.transform='none';this.style.boxShadow='none';this.style.borderColor='#f0f0f0'">

                    <!-- Image area -->
                    <div style="
                        height: 280px;
                        background: linear-gradient(135deg, {{ ['#dbeafe','#ede9fe','#d1fae5','#fef3c7','#fce7f3','#e0e7ff','#ccfbf1','#fed7aa'][$index % 8] }}, #f3f4f6);
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        overflow: hidden;
                        position: relative;
                    ">
                        @if($member->image)
                            @if(preg_match('#^https?://#i', $member->image))
                                <img src="{{ $member->image }}" alt="{{ $member->title }}" style="width:100%;height:100%;object-fit:cover;">
                            @else
                                <img src="{{ asset($member->image) }}" alt="{{ $member->title }}" style="width:100%;height:100%;object-fit:cover;">
                            @endif
                        @else
                            <div style="font-size: 72px; opacity: 0.6;">{{ $member->icon ?? '👤' }}</div>
                        @endif

                        <!-- Gradient overlay at bottom of image -->
                        <div style="
                            position: absolute;
                            bottom: 0;
                            left: 0;
                            right: 0;
                            height: 60px;
                            background: linear-gradient(to top, #fff, transparent);
                            pointer-events: none;
                        "></div>
                    </div>

                    <!-- Info -->
                    <div style="padding: 24px;">
                        <h3 style="
                            margin: 0 0 6px;
                            font-size: 19px;
                            font-weight: 800;
                            color: #111;
                            letter-spacing: -0.5px;
                        ">{{ $member->title }}</h3>

                        <div style="
                            font-size: 13px;
                            font-weight: 700;
                            color: #3b82f6;
                            text-transform: uppercase;
                            letter-spacing: 1px;
                            margin-bottom: 12px;
                        ">{{ $member->description }}</div>

                        <p style="
                            margin: 0;
                            color: #666;
                            font-size: 14px;
                            line-height: 1.7;
                        ">{{ $member->content }}</p>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</section>


<!-- =========================================================
     TESTIMONIALS — Marquee columns
========================================================= -->
<section style="
    padding: 100px 0;
    background: #f7f7f5;
    overflow: hidden;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    position: relative;
" id="team-testimonials-section">

    <!-- Section header -->
    <div style="text-align: center; margin-bottom: 50px; padding: 0 5%;">
        <div style="
            display: inline-block;
            padding: 6px 16px;
            border-radius: 6px;
            border: 1px solid #ddd;
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: #999;
            margin-bottom: 20px;
        ">Testimonials</div>
        <h2 style="
            font-size: clamp(32px, 4vw, 48px);
            font-weight: 900;
            letter-spacing: -2px;
            margin: 0 0 16px;
            color: #111;
        ">What our users say</h2>
        <p style="
            color: #888;
            font-size: 17px;
            max-width: 550px;
            margin: auto;
            line-height: 1.7;
        ">See what our customers have to say about us.</p>
    </div>

    @php
        $testimonials = [
            ['text' => 'This ERP revolutionized our operations, streamlining finance and inventory. The cloud-based platform keeps us productive, even remotely.', 'image' => 'https://randomuser.me/api/portraits/women/1.jpg', 'name' => 'Briana Patton', 'role' => 'Operations Manager'],
            ['text' => 'Implementing this ERP was smooth and quick. The customizable, user-friendly interface made team training effortless.', 'image' => 'https://randomuser.me/api/portraits/men/2.jpg', 'name' => 'Bilal Ahmed', 'role' => 'IT Manager'],
            ['text' => 'The support team is exceptional, guiding us through setup and providing ongoing assistance, ensuring our satisfaction.', 'image' => 'https://randomuser.me/api/portraits/women/3.jpg', 'name' => 'Saman Malik', 'role' => 'Customer Support Lead'],
            ['text' => 'This ERP\'s seamless integration enhanced our business operations and efficiency. Highly recommend for its intuitive interface.', 'image' => 'https://randomuser.me/api/portraits/men/4.jpg', 'name' => 'Omar Raza', 'role' => 'CEO'],
            ['text' => 'Its robust features and quick support have transformed our workflow, making us significantly more efficient.', 'image' => 'https://randomuser.me/api/portraits/women/5.jpg', 'name' => 'Zainab Hussain', 'role' => 'Project Manager'],
            ['text' => 'The smooth implementation exceeded expectations. It streamlined processes, improving overall business performance.', 'image' => 'https://randomuser.me/api/portraits/women/6.jpg', 'name' => 'Aliza Khan', 'role' => 'Business Analyst'],
            ['text' => 'Our business functions improved with a user-friendly design and positive customer feedback.', 'image' => 'https://randomuser.me/api/portraits/men/7.jpg', 'name' => 'Farhan Siddiqui', 'role' => 'Marketing Director'],
            ['text' => 'They delivered a solution that exceeded expectations, understanding our needs and enhancing our operations.', 'image' => 'https://randomuser.me/api/portraits/women/8.jpg', 'name' => 'Sana Sheikh', 'role' => 'Sales Manager'],
            ['text' => 'Using this ERP, our online presence and conversions significantly improved, boosting business performance.', 'image' => 'https://randomuser.me/api/portraits/men/9.jpg', 'name' => 'Hassan Ali', 'role' => 'E-commerce Manager'],
        ];
        $col1 = array_slice($testimonials, 0, 3);
        $col2 = array_slice($testimonials, 3, 3);
        $col3 = array_slice($testimonials, 6, 3);
    @endphp

    <!-- Marquee columns with mask -->
    <div style="
        display: flex;
        justify-content: center;
        gap: 24px;
        max-height: 740px;
        overflow: hidden;
        mask-image: linear-gradient(to bottom, transparent, black 25%, black 75%, transparent);
        -webkit-mask-image: linear-gradient(to bottom, transparent, black 25%, black 75%, transparent);
    ">

        <!-- Column 1 -->
        <div style="width: 340px; overflow: hidden;">
            <div style="
                display: flex;
                flex-direction: column;
                gap: 24px;
                padding-bottom: 24px;
                animation: teamMarqueeScroll 15s linear infinite;
            ">
                @for($repeat = 0; $repeat < 2; $repeat++)
                    @foreach($col1 as $t)
                        <div style="
                            padding: 28px;
                            border-radius: 20px;
                            border: 1px solid #e8e8e8;
                            background: #fff;
                            box-shadow: 0 4px 20px rgba(0,0,0,0.04);
                        ">
                            <div style="font-size: 14px; line-height: 1.7; color: #444;">{{ $t['text'] }}</div>
                            <div style="display: flex; align-items: center; gap: 12px; margin-top: 18px;">
                                <img src="{{ $t['image'] }}" alt="{{ $t['name'] }}" style="width: 42px; height: 42px; border-radius: 50%; object-fit: cover;">
                                <div>
                                    <div style="font-weight: 700; font-size: 14px; color: #111; letter-spacing: -0.3px;">{{ $t['name'] }}</div>
                                    <div style="font-size: 13px; color: #999; letter-spacing: -0.2px;">{{ $t['role'] }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endfor
            </div>
        </div>

        <!-- Column 2 -->
        <div style="width: 340px; overflow: hidden;" class="team-marquee-col-2">
            <div style="
                display: flex;
                flex-direction: column;
                gap: 24px;
                padding-bottom: 24px;
                animation: teamMarqueeScroll 19s linear infinite;
            ">
                @for($repeat = 0; $repeat < 2; $repeat++)
                    @foreach($col2 as $t)
                        <div style="
                            padding: 28px;
                            border-radius: 20px;
                            border: 1px solid #e8e8e8;
                            background: #fff;
                            box-shadow: 0 4px 20px rgba(0,0,0,0.04);
                        ">
                            <div style="font-size: 14px; line-height: 1.7; color: #444;">{{ $t['text'] }}</div>
                            <div style="display: flex; align-items: center; gap: 12px; margin-top: 18px;">
                                <img src="{{ $t['image'] }}" alt="{{ $t['name'] }}" style="width: 42px; height: 42px; border-radius: 50%; object-fit: cover;">
                                <div>
                                    <div style="font-weight: 700; font-size: 14px; color: #111; letter-spacing: -0.3px;">{{ $t['name'] }}</div>
                                    <div style="font-size: 13px; color: #999; letter-spacing: -0.2px;">{{ $t['role'] }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endfor
            </div>
        </div>

        <!-- Column 3 -->
        <div style="width: 340px; overflow: hidden;" class="team-marquee-col-3">
            <div style="
                display: flex;
                flex-direction: column;
                gap: 24px;
                padding-bottom: 24px;
                animation: teamMarqueeScroll 17s linear infinite;
            ">
                @for($repeat = 0; $repeat < 2; $repeat++)
                    @foreach($col3 as $t)
                        <div style="
                            padding: 28px;
                            border-radius: 20px;
                            border: 1px solid #e8e8e8;
                            background: #fff;
                            box-shadow: 0 4px 20px rgba(0,0,0,0.04);
                        ">
                            <div style="font-size: 14px; line-height: 1.7; color: #444;">{{ $t['text'] }}</div>
                            <div style="display: flex; align-items: center; gap: 12px; margin-top: 18px;">
                                <img src="{{ $t['image'] }}" alt="{{ $t['name'] }}" style="width: 42px; height: 42px; border-radius: 50%; object-fit: cover;">
                                <div>
                                    <div style="font-weight: 700; font-size: 14px; color: #111; letter-spacing: -0.3px;">{{ $t['name'] }}</div>
                                    <div style="font-size: 13px; color: #999; letter-spacing: -0.2px;">{{ $t['role'] }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endfor
            </div>
        </div>

    </div>
</section>


<!-- =========================================================
     CTA — Dark cinematic
========================================================= -->
<section style="
    padding: 100px 5%;
    background: #0a0a0a;
    text-align: center;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    position: relative;
    overflow: hidden;
">

    <!-- Subtle glow -->
    <div style="
        position: absolute;
        left: 50%;
        top: 50%;
        width: 60vw;
        height: 40vh;
        border-radius: 50%;
        filter: blur(100px);
        pointer-events: none;
        transform: translate(-50%, -50%);
        background: radial-gradient(circle, rgba(59,130,246,0.08) 0%, transparent 70%);
    "></div>

    <div style="position: relative; z-index: 10;">
        <h2 style="
            font-size: clamp(36px, 5vw, 56px);
            font-weight: 900;
            letter-spacing: -2.5px;
            margin: 0 0 20px;
            color: #fff;
            line-height: 1.05;
        ">Want to work with us?</h2>

        <p style="
            color: #888;
            font-size: 17px;
            max-width: 600px;
            margin: 0 auto 40px;
            line-height: 1.7;
        ">We can look at your manuscript stage, publishing goal, and likely next step, then point you toward the right package or service.</p>

        <div style="display: flex; justify-content: center; gap: 16px; flex-wrap: wrap;">
            <a href="/contact" style="
                display: inline-flex;
                align-items: center;
                gap: 10px;
                padding: 18px 36px;
                border-radius: 50px;
                font-weight: 700;
                font-size: 15px;
                color: #fafafa;
                text-decoration: none;
                background: linear-gradient(145deg, rgba(255,255,255,0.08) 0%, rgba(255,255,255,0.02) 100%);
                box-shadow: 0 10px 30px -10px rgba(0,0,0,0.5), inset 0 1px 1px rgba(255,255,255,0.1);
                border: 1px solid rgba(255,255,255,0.12);
                backdrop-filter: blur(16px);
                -webkit-backdrop-filter: blur(16px);
                transition: all 0.3s cubic-bezier(0.16,1,0.3,1);
            " onmouseover="this.style.background='linear-gradient(145deg, rgba(255,255,255,0.14) 0%, rgba(255,255,255,0.04) 100%)';this.style.borderColor='rgba(255,255,255,0.3)';this.style.transform='translateY(-3px) scale(1.03)'" onmouseout="this.style.background='linear-gradient(145deg, rgba(255,255,255,0.08) 0%, rgba(255,255,255,0.02) 100%)';this.style.borderColor='rgba(255,255,255,0.12)';this.style.transform='none'">
                Book a free consultation →
            </a>

            <a href="/services" style="
                display: inline-flex;
                align-items: center;
                gap: 10px;
                padding: 18px 36px;
                border-radius: 50px;
                font-weight: 700;
                font-size: 15px;
                color: #aaa;
                text-decoration: none;
                background: transparent;
                border: 1px solid rgba(255,255,255,0.12);
                transition: all 0.3s ease;
            " onmouseover="this.style.borderColor='rgba(255,255,255,0.3)';this.style.color='#fff'" onmouseout="this.style.borderColor='rgba(255,255,255,0.12)';this.style.color='#aaa'">
                Explore services
            </a>
        </div>
    </div>
</section>


@include('frontend.partials.cinematic-footer')


<!-- =========================================================
     ANIMATIONS + RESPONSIVE
========================================================= -->
<style>
    @keyframes teamAurora {
        0% { transform: translate(-50%, -50%) scale(1); opacity: 0.6; }
        100% { transform: translate(-50%, -50%) scale(1.15); opacity: 1; }
    }

    @keyframes teamMarqueeScroll {
        0% { transform: translateY(0); }
        100% { transform: translateY(-50%); }
    }

    /* Grid responsive */
    @media (max-width: 1024px) {
        .team-new-grid {
            grid-template-columns: repeat(2, 1fr) !important;
        }
    }

    @media (max-width: 768px) {
        .team-new-grid {
            grid-template-columns: 1fr !important;
            max-width: 420px !important;
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .team-marquee-col-2,
        .team-marquee-col-3 {
            display: none !important;
        }
    }
</style>

</body>
</html>
