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

    <!-- Aurora glow -->
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
        animation: aboutAurora 8s ease-in-out infinite alternate;
    "></div>

    <!-- Grid overlay -->
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

    <!-- Giant watermark -->
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
    ">ABOUT US</div>

    <div style="position: relative; z-index: 10; max-width: 900px; margin: auto;">

        <!-- Trustpilot pill -->
        <div style="
            display: inline-flex;
            align-items: center;
            gap: 12px;
            padding: 10px 20px;
            border-radius: 30px;
            background: rgba(255,255,255,0.06);
            border: 1px solid rgba(255,255,255,0.12);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            font-size: 14px;
            margin-bottom: 32px;
            color: rgba(255,255,255,0.7);
        ">
            <span style="color: #00b67a; font-weight: 800;">{{ $hm('hero', 'pill_stars', '★★★★★') }}</span>
            <strong style="color: #fff;">{{ $hm('hero', 'pill_rating', '4.7 out of 5') }}</strong>
            <span style="color: rgba(255,255,255,0.4);">{{ $hm('hero', 'pill_text', 'Based on 83 Trustpilot reviews') }}</span>
        </div>

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
        ">{{ $h('hero', 'title', 'About HMD Publishing') }}</div>

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
        ">{{ $h('hero', 'description', 'We help authors turn serious manuscripts into credible published books.') }}</h1>

        <!-- Description -->
        <p style="
            font-size: 20px;
            line-height: 1.8;
            color: rgba(255,255,255,0.65);
            max-width: 700px;
            margin: 0 auto 40px;
            letter-spacing: -0.2px;
        ">{{ $h('hero', 'content', 'Since 2015, HMD has supported authors across editing, design, formatting, publishing setup, and marketing.') }}</p>

        <!-- Buttons -->
        <div style="display: flex; justify-content: center; gap: 16px; flex-wrap: wrap;">
            <a href="{{ $h('hero', 'url', '/contact') }}" style="
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
                {{ $h('hero', 'button_text', 'Start a publishing conversation →') }}
            </a>
            <a href="{{ $hm('hero', 'btn2_url', '/portfolio') }}" style="
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
                {{ $hm('hero', 'btn2_text', 'View portfolio work') }}
            </a>
        </div>
    </div>
</section>


<!-- =========================================================
     STATS — Clean modern
========================================================= -->
<section style="
    padding: 50px 5%;
    background: #fff;
    border-bottom: 1px solid #f0f0f0;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
">
    <div style="max-width: 1100px; margin: auto; display: grid; grid-template-columns: repeat(4, 1fr); gap: 0; text-align: center;" class="about-stats-grid">
        @php $stats = $sections->where('section_type', 'stats')->values(); @endphp
        @foreach($stats as $i => $stat)
            <div style="padding: 20px 15px; {{ $i < $stats->count() - 1 ? 'border-right: 1px solid #f0f0f0;' : '' }}">
                <div style="font-size: 40px; font-weight: 900; letter-spacing: -1.5px; color: #111;">{{ $stat->title }}</div>
                <div style="color: #999; font-size: 14px; margin-top: 6px;">{{ $stat->description }}</div>
            </div>
        @endforeach
    </div>
</section>


<!-- =========================================================
     WHAT AUTHORS NEED
========================================================= -->
<section style="
    padding: 100px 5%;
    background: #fff;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
">
    <div style="max-width: 1100px; margin: auto; display: grid; grid-template-columns: 1fr 1fr; gap: 70px; align-items: center;" class="about-need-grid">
        <div>
            <div style="display: inline-block; padding: 6px 16px; border-radius: 6px; border: 1px solid #e5e7eb; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; color: #999; margin-bottom: 20px;">What authors usually need</div>
            <h2 style="margin: 0 0 18px; font-size: clamp(32px, 4vw, 42px); line-height: 1.12; letter-spacing: -1.8px; color: #111;">{{ $h('need', 'title') }}</h2>
            <p style="margin: 0; color: #888; font-size: 16px; line-height: 1.7;">{{ $h('need', 'description') }}</p>
        </div>
        <div style="display: flex; flex-direction: column; gap: 16px;">
            @foreach($sections->where('section_type', 'need_cards')->values() as $i => $card)
                <div style="
                    padding: 24px;
                    border: 1px solid #f0f0f0;
                    border-radius: 14px;
                    background: #fff;
                    transition: all 0.3s cubic-bezier(0.16,1,0.3,1);
                " class="about-need-card" onmouseover="this.style.borderColor='#e0e0e0';this.style.boxShadow='0 8px 30px rgba(0,0,0,0.06)'" onmouseout="this.style.borderColor='#f0f0f0';this.style.boxShadow='none'">
                    <div style="width: 36px; height: 36px; display: flex; align-items: center; justify-content: center; background: #eff6ff; color: #3b82f6; border-radius: 10px; font-weight: 800; font-size: 14px; margin-bottom: 14px;">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</div>
                    <strong style="font-size: 16px; color: #111;">{{ $card->title }}</strong>
                    <p style="margin: 8px 0 0; color: #888; font-size: 14px; line-height: 1.6;">{{ $card->description }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>


<!-- =========================================================
     WORKING PRINCIPLE
========================================================= -->
<section style="
    padding: 100px 5%;
    background: #f9f9f9;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
">
    <div style="max-width: 1100px; margin: auto;">
        <div style="display: inline-block; padding: 6px 16px; border-radius: 6px; border: 1px solid #e5e7eb; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; color: #999; margin-bottom: 20px; background: #fff;">Working principle</div>
        <h2 style="margin: 0 0 18px; max-width: 800px; font-size: clamp(32px, 4vw, 44px); line-height: 1.1; letter-spacing: -1.8px; color: #111;">{{ $h('principle', 'title') }}</h2>
        <p style="margin: 0 0 50px; max-width: 700px; color: #888; font-size: 17px; line-height: 1.7;">{{ $h('principle', 'description') }}</p>
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 18px;" class="about-principle-grid">
            @foreach($sections->where('section_type', 'principle_cards')->values() as $card)
                <div style="
                    background: #fff;
                    border: 1px solid #f0f0f0;
                    border-radius: 14px;
                    padding: 28px;
                    transition: all 0.3s cubic-bezier(0.16,1,0.3,1);
                " class="about-principle-card" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='0 12px 35px rgba(0,0,0,0.08)'" onmouseout="this.style.transform='none';this.style.boxShadow='none'">
                    <div style="font-size: 32px; margin-bottom: 16px;">{{ $card->icon }}</div>
                    <strong style="font-size: 16px; color: #111;">{{ $card->title }}</strong>
                    <p style="color: #888; font-size: 14px; margin: 10px 0 0; line-height: 1.6;">{{ $card->description }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>


<!-- =========================================================
     HOW WE THINK
========================================================= -->
<section style="
    padding: 100px 5%;
    background: #fff;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
">
    <div style="max-width: 1100px; margin: auto;">
        <div style="margin-bottom: 50px;">
            <div style="display: inline-block; padding: 6px 16px; border-radius: 6px; border: 1px solid #e5e7eb; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; color: #999; margin-bottom: 20px;">How we think</div>
            <h2 style="margin: 0 0 15px; font-size: clamp(32px, 4vw, 44px); line-height: 1.1; letter-spacing: -1.8px; max-width: 800px; color: #111;">{{ $h('thinking', 'title') }}</h2>
            <p style="max-width: 700px; color: #888; font-size: 17px; margin: 0; line-height: 1.7;">{{ $h('thinking', 'description') }}</p>
        </div>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;" class="about-thinking-grid">
            @foreach($sections->where('section_type', 'thinking_cards')->values() as $i => $card)
                <div style="
                    border: 1px solid #f0f0f0;
                    border-radius: 16px;
                    padding: 32px;
                    background: #fff;
                    transition: all 0.3s cubic-bezier(0.16,1,0.3,1);
                " class="about-thinking-card" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='0 12px 35px rgba(0,0,0,0.08)'" onmouseout="this.style.transform='none';this.style.boxShadow='none'">
                    <div style="color: #3b82f6; font-size: 32px; font-weight: 900; margin-bottom: 18px; letter-spacing: -1px;">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</div>
                    <h3 style="margin: 0 0 12px; font-size: 20px; color: #111; letter-spacing: -0.5px;">{{ $card->title }}</h3>
                    <p style="margin: 0; color: #888; font-size: 14px; line-height: 1.7;">{{ $card->description }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>


<!-- =========================================================
     OPERATING MODEL — Dark
========================================================= -->
<section style="
    background: #0a0a0a;
    color: #fff;
    padding: 100px 5%;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    position: relative;
    overflow: hidden;
">

    <!-- Subtle glow -->
    <div style="
        position: absolute;
        right: -10%;
        top: 20%;
        width: 50vw;
        height: 50vh;
        border-radius: 50%;
        filter: blur(120px);
        pointer-events: none;
        background: radial-gradient(circle, rgba(59,130,246,0.08) 0%, transparent 70%);
    "></div>

    <div style="max-width: 1100px; margin: auto; position: relative; z-index: 10;">
        <div style="display: inline-block; padding: 6px 16px; border-radius: 6px; border: 1px solid rgba(255,255,255,0.1); font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; color: rgba(255,255,255,0.4); margin-bottom: 20px;">Operating model</div>
        <h2 style="margin: 0 0 15px; max-width: 850px; font-size: clamp(32px, 4vw, 44px); line-height: 1.1; letter-spacing: -1.8px;">{{ $h('model', 'title') }}</h2>
        <p style="max-width: 700px; color: rgba(255,255,255,0.5); font-size: 16px; margin: 0 0 50px; line-height: 1.7;">{{ $h('model', 'description') }}</p>
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 18px;" class="about-model-grid">
            @foreach($sections->where('section_type', 'model_cards')->values() as $i => $card)
                <div style="
                    border: 1px solid rgba(255,255,255,0.08);
                    border-radius: 16px;
                    padding: 28px;
                    background: rgba(255,255,255,0.03);
                    backdrop-filter: blur(10px);
                    -webkit-backdrop-filter: blur(10px);
                    transition: all 0.3s cubic-bezier(0.16,1,0.3,1);
                " class="about-model-card" onmouseover="this.style.borderColor='rgba(255,255,255,0.15)';this.style.background='rgba(255,255,255,0.06)';this.style.transform='translateY(-4px)'" onmouseout="this.style.borderColor='rgba(255,255,255,0.08)';this.style.background='rgba(255,255,255,0.03)';this.style.transform='none'">
                    <div style="color: #60a5fa; font-size: 14px; font-weight: 800; margin-bottom: 20px; letter-spacing: 1px;">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</div>
                    <h3 style="margin: 0 0 12px; font-size: 18px; letter-spacing: -0.3px;">{{ $card->title }}</h3>
                    <p style="margin: 0; color: rgba(255,255,255,0.45); font-size: 14px; line-height: 1.7;">{{ $card->description }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>


<!-- =========================================================
     TEAM
========================================================= -->
<section style="padding: 100px 5%; background: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;">
    <div style="max-width: 1100px; margin: auto;">
        <div style="display: flex; justify-content: space-between; align-items: flex-end; gap: 25px; flex-wrap: wrap; margin-bottom: 50px;">
            <div>
                <div style="display: inline-block; padding: 6px 16px; border-radius: 6px; border: 1px solid #e5e7eb; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; color: #999; margin-bottom: 20px;">Team</div>
                <h2 style="margin: 0 0 12px; font-size: clamp(32px, 4vw, 43px); line-height: 1.1; letter-spacing: -1.8px; color: #111;">{{ $h('team', 'title') }}</h2>
                <p style="margin: 0; max-width: 700px; color: #888; font-size: 16px; line-height: 1.7;">{{ $h('team', 'description') }}</p>
            </div>
            <a href="/team" style="display: inline-flex; align-items: center; gap: 8px; text-decoration: none; background: #111; color: #fff; padding: 14px 28px; border-radius: 30px; font-size: 14px; font-weight: 700; white-space: nowrap; transition: all 0.3s cubic-bezier(0.16,1,0.3,1);" onmouseover="this.style.background='#333';this.style.transform='translateY(-2px) scale(1.03)'" onmouseout="this.style.background='#111';this.style.transform='none'">
                {{ $h('team', 'button_text', 'Meet the full team →') }}
            </a>
        </div>
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px;" class="about-team-grid">
            @foreach($sections->where('section_type', 'team_members')->take(4)->values() as $index => $member)
                <div style="border-radius: 16px; overflow: hidden; background: #fff; border: 1px solid #f0f0f0; transition: all 0.4s cubic-bezier(0.16,1,0.3,1);" class="about-team-card" onmouseover="this.style.transform='translateY(-8px)';this.style.boxShadow='0 25px 60px rgba(0,0,0,0.12)';this.style.borderColor='#e0e0e0'" onmouseout="this.style.transform='none';this.style.boxShadow='none';this.style.borderColor='#f0f0f0'">
                    <div style="height: 240px; background: linear-gradient(135deg, {{ ['#dbeafe','#ede9fe','#d1fae5','#fef3c7','#fce7f3','#e0e7ff','#ccfbf1','#fed7aa'][$index % 8] }}, #f3f4f6); display: flex; align-items: center; justify-content: center; overflow: hidden; position: relative;">
                        @if($member->image)
                            @if(preg_match('#^https?://#i', $member->image))
                                <img src="{{ $member->image }}" alt="{{ $member->title }}" style="width:100%;height:100%;object-fit:cover;">
                            @else
                                <img src="{{ asset($member->image) }}" alt="{{ $member->title }}" style="width:100%;height:100%;object-fit:cover;">
                            @endif
                        @else
                            <div style="font-size: 64px; opacity: 0.6;">{{ $member->icon ?? '👤' }}</div>
                        @endif
                        <div style="position: absolute; bottom: 0; left: 0; right: 0; height: 50px; background: linear-gradient(to top, #fff, transparent); pointer-events: none;"></div>
                    </div>
                    <div style="padding: 22px;">
                        <h3 style="margin: 0 0 5px; font-size: 18px; font-weight: 800; color: #111; letter-spacing: -0.5px;">{{ $member->title }}</h3>
                        <div style="font-size: 12px; font-weight: 700; color: #3b82f6; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px;">{{ $member->description }}</div>
                        <p style="margin: 0; color: #666; font-size: 13px; line-height: 1.7;">{{ $member->content }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


<!-- =========================================================
     AUTHOR PROOF / TESTIMONIALS
========================================================= -->
<section style="
    padding: 100px 5%;
    background: #f9f9f9;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
">
    <div style="max-width: 1100px; margin: auto;">
        <div style="text-align: center; margin-bottom: 50px;">
            <div style="display: inline-block; padding: 6px 16px; border-radius: 6px; border: 1px solid #e5e7eb; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; color: #999; margin-bottom: 20px; background: #fff;">Author proof</div>
            <h2 style="margin: 0 0 15px; font-size: clamp(32px, 4vw, 44px); letter-spacing: -1.8px; color: #111;">{{ $h('proof', 'title') }}</h2>
            <p style="color: #888; margin: 0 auto; max-width: 650px; font-size: 16px; line-height: 1.7;">{{ $h('proof', 'description') }}</p>
        </div>
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;" class="about-proof-grid">
            @foreach($sections->where('section_type', 'testimonials')->values() as $t)
                <div style="
                    background: #fff;
                    border: 1px solid #f0f0f0;
                    border-radius: 16px;
                    padding: 32px;
                    transition: all 0.3s cubic-bezier(0.16,1,0.3,1);
                " class="about-proof-card" onmouseover="this.style.transform='translateY(-4px)';this.style.boxShadow='0 12px 35px rgba(0,0,0,0.08)'" onmouseout="this.style.transform='none';this.style.boxShadow='none'">
                    <div style="color: #f59e0b; font-size: 18px; letter-spacing: 3px; margin-bottom: 20px;">{{ $t->meta['stars'] ?? '★★★★★' }}</div>
                    <p style="margin: 0 0 24px; font-size: 15px; color: #555; line-height: 1.7;">"{{ $t->content }}"</p>
                    <div>
                        <strong style="font-size: 15px; color: #111;">{{ $t->title }}</strong>
                        <div style="color: #999; font-size: 13px; margin-top: 4px;">{{ $t->description }}</div>
                    </div>
                    @if($t->url)
                        <div style="margin-top: 18px; padding: 14px; background: #f9f9f9; border-radius: 10px; font-size: 13px; font-weight: 700; color: #666;">{{ $t->url }}</div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>


<!-- =========================================================
     FAQ
========================================================= -->
<section style="
    padding: 100px 5%;
    background: #fff;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
">
    <div style="max-width: 900px; margin: auto;">
        <div style="text-align: center; margin-bottom: 50px;">
            <div style="display: inline-block; padding: 6px 16px; border-radius: 6px; border: 1px solid #e5e7eb; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; color: #999; margin-bottom: 20px;">FAQ</div>
            <h2 style="margin: 0 0 12px; font-size: clamp(32px, 4vw, 44px); letter-spacing: -1.8px; color: #111;">{{ $h('faq', 'title', 'Common questions about HMD.') }}</h2>
            <p style="color: #888; margin: 0 auto; max-width: 650px; font-size: 16px; line-height: 1.7;">{{ $h('faq', 'description') }}</p>
        </div>
        @foreach($sections->where('section_type', 'faq_items')->values() as $faq)
            <details style="border-top: 1px solid #f0f0f0; padding: 24px 0;" class="about-faq-item">
                <summary style="cursor: pointer; list-style: none; font-size: 18px; font-weight: 700; display: flex; justify-content: space-between; gap: 15px; color: #111; letter-spacing: -0.3px;">
                    {{ $faq->title }}
                    <span style="color: #3b82f6; font-size: 20px; transition: transform 0.3s ease; flex-shrink: 0;">+</span>
                </summary>
                <p style="margin: 16px 0 0; color: #888; font-size: 15px; line-height: 1.7;">{{ $faq->content }}</p>
            </details>
        @endforeach
    </div>
</section>


<!-- =========================================================
     CTA — Dark cinematic
========================================================= -->
<section style="
    padding: 20px 5% 100px;
    background: #fff;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
">
    <div style="
        max-width: 1100px;
        margin: auto;
        background: #0a0a0a;
        color: #fff;
        border-radius: 24px;
        padding: 70px 50px;
        text-align: center;
        position: relative;
        overflow: hidden;
    ">
        <!-- Glow -->
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

        <div style="position: relative; z-index: 10; max-width: 700px; margin: auto;">
            <div style="display: inline-block; padding: 6px 16px; border-radius: 6px; border: 1px solid rgba(255,255,255,0.1); font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; color: #60a5fa; margin-bottom: 20px;">Start here</div>
            <h2 style="margin: 0 0 16px; font-size: clamp(32px, 4vw, 44px); line-height: 1.1; letter-spacing: -1.8px;">{{ $h('cta', 'title') }}</h2>
            <p style="max-width: 600px; margin: 0 auto 36px; color: rgba(255,255,255,0.5); font-size: 16px; line-height: 1.7;">{{ $h('cta', 'description') }}</p>
            <div style="display: flex; justify-content: center; gap: 14px; flex-wrap: wrap;">
                <a href="{{ $h('cta', 'url', '/contact') }}" style="
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
                    {{ $h('cta', 'button_text', 'Book a free consultation →') }}
                </a>
                <a href="{{ $hm('cta', 'btn2_url', '/services') }}" style="
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
                    {{ $hm('cta', 'btn2_text', 'Explore services') }}
                </a>
            </div>
        </div>
    </div>
</section>


@include('frontend.partials.cinematic-footer')


<!-- =========================================================
     ANIMATIONS + RESPONSIVE
========================================================= -->
<style>
    body { margin: 0; }

    @keyframes aboutAurora {
        0% { transform: translate(-50%, -50%) scale(1); opacity: 0.6; }
        100% { transform: translate(-50%, -50%) scale(1.15); opacity: 1; }
    }

    details[open] summary span {
        transform: rotate(45deg);
    }

    /* Responsive */
    @media (max-width: 1024px) {
        .about-principle-grid,
        .about-model-grid,
        .about-team-grid {
            grid-template-columns: repeat(2, 1fr) !important;
        }
    }

    @media (max-width: 900px) {
        .about-stats-grid {
            grid-template-columns: repeat(2, 1fr) !important;
        }
        .about-thinking-grid,
        .about-proof-grid {
            grid-template-columns: 1fr !important;
        }
    }

    @media (max-width: 768px) {
        .about-need-grid {
            grid-template-columns: 1fr !important;
            gap: 40px !important;
        }
    }

    @media (max-width: 600px) {
        .about-stats-grid,
        .about-principle-grid,
        .about-model-grid,
        .about-team-grid {
            grid-template-columns: 1fr !important;
        }
    }
</style>

</body>
</html>
