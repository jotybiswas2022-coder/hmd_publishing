<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | HMD Publishing</title>
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
        animation: pfAurora 8s ease-in-out infinite alternate;
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

    <!-- Watermark -->
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
    ">PORTFOLIO</div>

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
            margin-bottom: 28px;
            color: rgba(255,255,255,0.7);
        ">
            <span style="color: #00b67a; font-weight: 800;">★★★★★</span>
            <strong style="color: #fff;">4.7 out of 5</strong>
            <span style="color: rgba(255,255,255,0.4);">· Based on 83 Trustpilot reviews</span>
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
        ">HMD Publishing Portfolio</div>

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
        ">Book design and<br>children's illustration portfolio.</h1>

        <!-- Description -->
        <p style="
            font-size: 18px;
            line-height: 1.7;
            color: rgba(255,255,255,0.5);
            max-width: 650px;
            margin: 0 auto;
        ">Real covers, interior formatting, and children's illustration built for print, ebook, and Amazon KDP.</p>

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
    <div style="max-width: 1100px; margin: auto; display: grid; grid-template-columns: repeat(4, 1fr); gap: 0; text-align: center;" class="pf-stats-grid">
        <div style="padding: 20px 15px; border-right: 1px solid #f0f0f0;">
            <div style="font-size: 40px; font-weight: 900; letter-spacing: -1.5px; color: #111;">692</div>
            <div style="color: #999; font-size: 14px; margin-top: 6px;">All work</div>
        </div>
        <div style="padding: 20px 15px; border-right: 1px solid #f0f0f0;">
            <div style="font-size: 40px; font-weight: 900; letter-spacing: -1.5px; color: #111;">354</div>
            <div style="color: #999; font-size: 14px; margin-top: 6px;">Book covers</div>
        </div>
        <div style="padding: 20px 15px; border-right: 1px solid #f0f0f0;">
            <div style="font-size: 40px; font-weight: 900; letter-spacing: -1.5px; color: #111;">238</div>
            <div style="color: #999; font-size: 14px; margin-top: 6px;">Interior formatting</div>
        </div>
        <div style="padding: 20px 15px;">
            <div style="font-size: 40px; font-weight: 900; letter-spacing: -1.5px; color: #111;">100</div>
            <div style="color: #999; font-size: 14px; margin-top: 6px;">Children's illustrations</div>
        </div>
    </div>
</section>


<!-- =========================================================
     PORTFOLIO GRID
========================================================= -->
<section style="
    padding: 80px 5%;
    background: #fff;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
">
    <div style="max-width: 1280px; margin: auto;">

        <!-- Section heading -->
        <div style="text-align: center; margin-bottom: 40px;">
            <div style="display: inline-block; padding: 6px 16px; border-radius: 6px; border: 1px solid #e5e7eb; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; color: #999; margin-bottom: 20px;">Browse our work</div>
            <h2 style="font-size: clamp(28px, 4vw, 36px); letter-spacing: -1.5px; margin: 0 0 12px; color: #111;">Browse book design samples</h2>
            <p style="color: #999; font-size: 15px; max-width: 500px; margin: auto;">Search by title, author, genre, or category.</p>
        </div>

        <!-- Search -->
        <div style="max-width: 650px; margin: 0 auto 30px; position: relative;">
            <span style="position: absolute; left: 20px; top: 50%; transform: translateY(-50%); color: #bbb; font-size: 16px;">🔍</span>
            <input
                type="text"
                id="searchInput"
                placeholder="Search by title, author, or creator..."
                style="
                    width: 100%;
                    height: 56px;
                    border: 1px solid #e8e8e8;
                    border-radius: 14px;
                    padding: 0 20px 0 50px;
                    font-size: 15px;
                    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
                    outline: none;
                    transition: all 0.3s ease;
                    background: #f9f9f9;
                    box-sizing: border-box;
                "
                onfocus="this.style.borderColor='#3b82f6';this.style.boxShadow='0 0 0 4px rgba(59,130,246,0.08)';this.style.background='#fff'"
                onblur="this.style.borderColor='#e8e8e8';this.style.boxShadow='none';this.style.background='#f9f9f9'"
            >
        </div>

        <!-- Filters -->
        <div style="display: flex; justify-content: center; gap: 10px; flex-wrap: wrap; margin-bottom: 40px;">
            <button class="pf-filter active" data-filter="all" style="
                border: 1px solid #e8e8e8;
                background: #111;
                color: #fff;
                padding: 10px 20px;
                border-radius: 50px;
                font-size: 13px;
                font-weight: 600;
                cursor: pointer;
                font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
                transition: all 0.3s ease;
            ">All</button>
            @foreach ($portfolioCategories as $cat)
                <button class="pf-filter" data-filter="{{ $cat['id'] }}" style="
                    border: 1px solid #e8e8e8;
                    background: #fff;
                    color: #666;
                    padding: 10px 20px;
                    border-radius: 50px;
                    font-size: 13px;
                    font-weight: 600;
                    cursor: pointer;
                    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
                    transition: all 0.3s ease;
                " onmouseover="this.style.borderColor='#ccc'" onmouseout="this.style.borderColor='#e8e8e8'">
                    {{ $cat['name'] }} <span style="opacity:0.5;margin-left:3px;">({{ $cat['count'] }})</span>
                </button>
            @endforeach
        </div>

        <!-- Project grid -->
        <div id="projectGrid" style="
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
            grid-auto-flow: dense;
        " class="pf-project-grid">

            @forelse ($portfolioItems as $item)
                <article class="pf-project-card" data-category="{{ $item->portfolio_category_id ?? '' }}" data-orientation="{{ $categoryOrientations[$item->id] ?? '' }}" data-search="{{ $item->search_text }}" style="
                    border: 1px solid #f0f0f0;
                    border-radius: 16px;
                    overflow: hidden;
                    background: #fff;
                    display: flex;
                    flex-direction: column;
                    transition: all 0.4s cubic-bezier(0.16,1,0.3,1);
                " onmouseover="this.style.transform='translateY(-6px)';this.style.boxShadow='0 20px 50px rgba(0,0,0,0.1)'" onmouseout="this.style.transform='none';this.style.boxShadow='none'">

                    <div class="pf-project-image" style="
                        background: #f5f5f5;
                        overflow: hidden;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        aspect-ratio: 3/4;
                    ">
                        <img src="{{ $item->cover }}" alt="{{ $item->title }}" style="width:100%;height:100%;object-fit:cover;display:block;transition:transform 0.4s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='none'">
                    </div>

                    <div style="padding: 20px; display: flex; flex-direction: column; flex: 1;">
                        <div style="font-size: 11px; color: #3b82f6; font-weight: 800; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">{{ $item->type_label }}</div>
                        <div style="font-size: 16px; font-weight: 750; line-height: 1.3; margin-bottom: 6px; color: #111;">{{ $item->title }}</div>
                        <div style="color: #999; font-size: 13px; margin-bottom: 14px;">{{ $item->author }}</div>
                        <a href="{{ route('portfolio.show', $item) }}" style="color: #3b82f6; font-size: 13px; font-weight: 700; margin-top: auto; text-decoration: none; transition: gap 0.3s ease; display: inline-flex; align-items: center; gap: 6px;" onmouseover="this.style.gap='10px'" onmouseout="this.style.gap='6px'">
                            View project →
                        </a>
                    </div>
                </article>
            @empty
                <p style="text-align:center;color:#999;grid-column:1/-1;padding:40px 0;font-size:15px;">No portfolio items yet. Add some from the admin panel.</p>
            @endforelse

        </div>

        <!-- Load more -->
        <div style="text-align: center; margin-top: 40px;">
            <button id="loadMore" style="
                border: 1px solid #e0e0e0;
                background: #fff;
                padding: 14px 28px;
                border-radius: 50px;
                cursor: pointer;
                font-size: 14px;
                font-weight: 700;
                font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
                color: #555;
                transition: all 0.3s ease;
            " onmouseover="this.style.background='#111';this.style.color='#fff';this.style.borderColor='#111'" onmouseout="this.style.background='#fff';this.style.color='#555';this.style.borderColor='#e0e0e0'">
                Load 24 more
            </button>
        </div>

    </div>
</section>


<!-- =========================================================
     GENRE SECTION
========================================================= -->
<section style="
    padding: 100px 5%;
    background: #f9f9f9;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
">
    <div style="max-width: 1150px; margin: auto;">

        <div style="text-align: center; margin-bottom: 45px;">
            <div style="display: inline-block; padding: 6px 16px; border-radius: 6px; border: 1px solid #e5e7eb; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; color: #999; margin-bottom: 20px; background: #fff;">Browse by genre</div>
            <h2 style="font-size: clamp(28px, 4vw, 38px); letter-spacing: -1.5px; margin: 0 0 12px; color: #111;">Browse the portfolio by genre</h2>
            <p style="color: #999; font-size: 15px;">Every genre below is a full collection of real HMD work.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 14px;" class="pf-genre-grid">
            @php
                $genres = [
                    ['name' => 'Romance', 'count' => 117],
                    ['name' => "Children's Books", 'count' => 112],
                    ['name' => 'Business', 'count' => 85],
                    ['name' => 'Self-Help', 'count' => 75],
                    ['name' => 'Fantasy', 'count' => 69],
                    ['name' => 'Religious & Spiritual', 'count' => 44],
                    ['name' => "Children's", 'count' => 35],
                    ['name' => 'Fiction', 'count' => 33],
                    ['name' => 'Health & Wellness', 'count' => 26],
                    ['name' => 'Mystery & Thriller', 'count' => 12],
                    ['name' => 'Memoir & Biography', 'count' => 8],
                    ['name' => 'Poetry', 'count' => 3],
                ];
            @endphp
            @foreach($genres as $genre)
                <a href="#" style="
                    background: #fff;
                    border: 1px solid #f0f0f0;
                    border-radius: 12px;
                    padding: 20px 22px;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    text-decoration: none;
                    color: inherit;
                    transition: all 0.3s cubic-bezier(0.16,1,0.3,1);
                " class="pf-genre-link" onmouseover="this.style.borderColor='#e0e0e0';this.style.transform='translateY(-3px)';this.style.boxShadow='0 8px 25px rgba(0,0,0,0.06)'" onmouseout="this.style.borderColor='#f0f0f0';this.style.transform='none';this.style.boxShadow='none'">
                    <span style="font-size: 14px; font-weight: 700; color: #111;">{{ $genre['name'] }}</span>
                    <span style="color: #bbb; font-size: 13px;">{{ $genre['count'] }}</span>
                </a>
            @endforeach
        </div>

    </div>
</section>


<!-- =========================================================
     SERVICES
========================================================= -->
<section style="
    padding: 100px 5%;
    background: #fff;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
">
    <div style="max-width: 1150px; margin: auto;">

        <div style="margin-bottom: 50px;">
            <div style="display: inline-block; padding: 6px 16px; border-radius: 6px; border: 1px solid #e5e7eb; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; color: #999; margin-bottom: 20px;">Services behind the portfolio</div>
            <h2 style="max-width: 700px; font-size: clamp(28px, 4vw, 38px); line-height: 1.15; letter-spacing: -1.5px; margin: 0 0 16px; color: #111;">Choose the route that matches where your book is now.</h2>
            <p style="color: #999; font-size: 15px; max-width: 600px; line-height: 1.7;">Some authors need one strong cover. Others need manuscript formatting or complete publishing support.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;" class="pf-service-grid">

            <div style="border: 1px solid #f0f0f0; border-radius: 16px; padding: 30px; transition: all 0.3s cubic-bezier(0.16,1,0.3,1);" class="pf-service-card" onmouseover="this.style.transform='translateY(-5px)';this.style.boxShadow='0 15px 40px rgba(0,0,0,0.08)'" onmouseout="this.style.transform='none';this.style.boxShadow='none'">
                <div style="width: 48px; height: 48px; display: flex; align-items: center; justify-content: center; border-radius: 12px; background: #eff6ff; color: #3b82f6; font-size: 22px; margin-bottom: 20px;">✦</div>
                <h3 style="font-size: 18px; margin: 0 0 12px; color: #111; letter-spacing: -0.3px;">Book cover design</h3>
                <p style="color: #999; font-size: 14px; line-height: 1.7; margin: 0 0 20px;">Professional front covers, ebook covers, paperback wraps, and hardback-ready direction designed around your genre.</p>
                <a href="/services" style="color: #3b82f6; font-size: 13px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 6px; transition: gap 0.3s ease;" onmouseover="this.style.gap='10px'" onmouseout="this.style.gap='6px'">Explore cover design →</a>
            </div>

            <div style="border: 1px solid #f0f0f0; border-radius: 16px; padding: 30px; transition: all 0.3s cubic-bezier(0.16,1,0.3,1);" class="pf-service-card" onmouseover="this.style.transform='translateY(-5px)';this.style.boxShadow='0 15px 40px rgba(0,0,0,0.08)'" onmouseout="this.style.transform='none';this.style.boxShadow='none'">
                <div style="width: 48px; height: 48px; display: flex; align-items: center; justify-content: center; border-radius: 12px; background: #f0fdf4; color: #22c55e; font-size: 22px; margin-bottom: 20px;">▤</div>
                <h3 style="font-size: 18px; margin: 0 0 12px; color: #111; letter-spacing: -0.3px;">Book formatting</h3>
                <p style="color: #999; font-size: 14px; line-height: 1.7; margin: 0 0 20px;">Clean interior layouts, readable typography, trim-size control and production-ready files.</p>
                <a href="/services" style="color: #3b82f6; font-size: 13px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 6px; transition: gap 0.3s ease;" onmouseover="this.style.gap='10px'" onmouseout="this.style.gap='6px'">Explore formatting →</a>
            </div>

            <div style="border: 1px solid #f0f0f0; border-radius: 16px; padding: 30px; transition: all 0.3s cubic-bezier(0.16,1,0.3,1);" class="pf-service-card" onmouseover="this.style.transform='translateY(-5px)';this.style.boxShadow='0 15px 40px rgba(0,0,0,0.08)'" onmouseout="this.style.transform='none';this.style.boxShadow='none'">
                <div style="width: 48px; height: 48px; display: flex; align-items: center; justify-content: center; border-radius: 12px; background: #fef3c7; color: #f59e0b; font-size: 22px; margin-bottom: 20px;">✎</div>
                <h3 style="font-size: 18px; margin: 0 0 12px; color: #111; letter-spacing: -0.3px;">Children's illustrations</h3>
                <p style="color: #999; font-size: 14px; line-height: 1.7; margin: 0 0 20px;">Story-led artwork, consistent character development and finished scenes for children's books.</p>
                <a href="/services" style="color: #3b82f6; font-size: 13px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 6px; transition: gap 0.3s ease;" onmouseover="this.style.gap='10px'" onmouseout="this.style.gap='6px'">Explore illustrations →</a>
            </div>

            <div style="border: 1px solid #f0f0f0; border-radius: 16px; padding: 30px; transition: all 0.3s cubic-bezier(0.16,1,0.3,1);" class="pf-service-card" onmouseover="this.style.transform='translateY(-5px)';this.style.boxShadow='0 15px 40px rgba(0,0,0,0.08)'" onmouseout="this.style.transform='none';this.style.boxShadow='none'">
                <div style="width: 48px; height: 48px; display: flex; align-items: center; justify-content: center; border-radius: 12px; background: #ede9fe; color: #8b5cf6; font-size: 22px; margin-bottom: 20px;">✓</div>
                <h3 style="font-size: 18px; margin: 0 0 12px; color: #111; letter-spacing: -0.3px;">Complete publishing support</h3>
                <p style="color: #999; font-size: 14px; line-height: 1.7; margin: 0 0 20px;">Design, formatting, publishing setup, metadata, launch preparation and release support.</p>
                <a href="/services" style="color: #3b82f6; font-size: 13px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 6px; transition: gap 0.3s ease;" onmouseover="this.style.gap='10px'" onmouseout="this.style.gap='6px'">Explore publishing →</a>
            </div>

        </div>

    </div>
</section>


<!-- =========================================================
     HOW TO JUDGE — Dark
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
        left: -10%;
        top: 30%;
        width: 50vw;
        height: 50vh;
        border-radius: 50%;
        filter: blur(120px);
        pointer-events: none;
        background: radial-gradient(circle, rgba(59,130,246,0.08) 0%, transparent 70%);
    "></div>

    <div style="max-width: 1150px; margin: auto; position: relative; z-index: 10;">

        <div style="margin-bottom: 50px;">
            <h2 style="max-width: 700px; font-size: clamp(28px, 4vw, 38px); line-height: 1.15; letter-spacing: -1.5px; margin: 0 0 16px;">The right portfolio should make your next publishing decision easier.</h2>
            <p style="color: rgba(255,255,255,0.5); font-size: 15px; max-width: 600px; line-height: 1.7;">Use the examples to judge genre fit, cover clarity, page readability and overall market readiness.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 18px;" class="pf-judge-grid">

            <div style="border: 1px solid rgba(255,255,255,0.08); border-radius: 16px; padding: 28px; background: rgba(255,255,255,0.03); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); transition: all 0.3s ease;" class="pf-judge-card" onmouseover="this.style.borderColor='rgba(255,255,255,0.15)';this.style.background='rgba(255,255,255,0.06)'" onmouseout="this.style.borderColor='rgba(255,255,255,0.08)';this.style.background='rgba(255,255,255,0.03)'">
                <div style="color: #60a5fa; font-size: 14px; font-weight: 800; margin-bottom: 22px; letter-spacing: 1px;">01</div>
                <p style="font-size: 14px; line-height: 1.7; color: rgba(255,255,255,0.5); margin: 0;">Book covers designed to read clearly in Amazon thumbnail, ebook and paperback contexts.</p>
            </div>

            <div style="border: 1px solid rgba(255,255,255,0.08); border-radius: 16px; padding: 28px; background: rgba(255,255,255,0.03); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); transition: all 0.3s ease;" class="pf-judge-card" onmouseover="this.style.borderColor='rgba(255,255,255,0.15)';this.style.background='rgba(255,255,255,0.06)'" onmouseout="this.style.borderColor='rgba(255,255,255,0.08)';this.style.background='rgba(255,255,255,0.03)'">
                <div style="color: #60a5fa; font-size: 14px; font-weight: 800; margin-bottom: 22px; letter-spacing: 1px;">02</div>
                <p style="font-size: 14px; line-height: 1.7; color: rgba(255,255,255,0.5); margin: 0;">Interior formatting samples showing readable typography, chapter rhythm and print-ready spacing.</p>
            </div>

            <div style="border: 1px solid rgba(255,255,255,0.08); border-radius: 16px; padding: 28px; background: rgba(255,255,255,0.03); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); transition: all 0.3s ease;" class="pf-judge-card" onmouseover="this.style.borderColor='rgba(255,255,255,0.15)';this.style.background='rgba(255,255,255,0.06)'" onmouseout="this.style.borderColor='rgba(255,255,255,0.08)';this.style.background='rgba(255,255,255,0.03)'">
                <div style="color: #60a5fa; font-size: 14px; font-weight: 800; margin-bottom: 22px; letter-spacing: 1px;">03</div>
                <p style="font-size: 14px; line-height: 1.7; color: rgba(255,255,255,0.5); margin: 0;">Story-led illustration proof showing final artwork, character development and sketch progression.</p>
            </div>

            <div style="border: 1px solid rgba(255,255,255,0.08); border-radius: 16px; padding: 28px; background: rgba(255,255,255,0.03); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); transition: all 0.3s ease;" class="pf-judge-card" onmouseover="this.style.borderColor='rgba(255,255,255,0.15)';this.style.background='rgba(255,255,255,0.06)'" onmouseout="this.style.borderColor='rgba(255,255,255,0.08)';this.style.background='rgba(255,255,255,0.03)'">
                <div style="color: #60a5fa; font-size: 14px; font-weight: 800; margin-bottom: 22px; letter-spacing: 1px;">04</div>
                <p style="font-size: 14px; line-height: 1.7; color: rgba(255,255,255,0.5); margin: 0;">Publishing production work that helps manuscripts feel ready for KDP, IngramSpark and launch assets.</p>
            </div>

        </div>

    </div>
</section>


<!-- =========================================================
     FEATURED WORK
========================================================= -->
<section style="
    padding: 100px 5%;
    background: #fff;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
">
    <div style="max-width: 1150px; margin: auto;">

        <div style="text-align: center; margin-bottom: 50px;">
            <div style="display: inline-block; padding: 6px 16px; border-radius: 6px; border: 1px solid #e5e7eb; font-size: 12px; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; color: #999; margin-bottom: 20px;">Featured</div>
            <h2 style="font-size: clamp(28px, 4vw, 38px); letter-spacing: -1.5px; margin: 0 0 12px; color: #111;">Featured portfolio work</h2>
            <p style="color: #999; font-size: 15px;">A closer look at selected recent designs.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;" class="pf-featured-grid">
            @forelse ($portfolioItems->where('is_featured', true)->take(4) as $item)
                <a href="{{ route('portfolio.show', $item) }}" style="
                    border-radius: 16px;
                    overflow: hidden;
                    background: #f5f5f5;
                    display: block;
                    text-decoration: none;
                    color: inherit;
                    transition: all 0.4s cubic-bezier(0.16,1,0.3,1);
                    border: 1px solid #f0f0f0;
                " class="pf-featured-card" onmouseover="this.style.transform='translateY(-6px)';this.style.boxShadow='0 20px 50px rgba(0,0,0,0.1)'" onmouseout="this.style.transform='none';this.style.boxShadow='none'">
                    <div style="aspect-ratio: 3/4; overflow: hidden;">
                        <img src="{{ $item->cover }}" alt="{{ $item->title }}" style="width:100%;height:100%;object-fit:cover;display:block;transition:transform 0.4s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='none'">
                    </div>
                    <div style="padding: 18px;">
                        <div style="font-size: 14px; font-weight: 700; color: #111;">{{ $item->title }}</div>
                        <div style="font-size: 13px; color: #999; margin-top: 4px;">{{ $item->author }}</div>
                    </div>
                </a>
            @empty
            @endforelse
        </div>

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
        max-width: 1150px;
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
            <h2 style="margin: 0 0 16px; font-size: clamp(28px, 4vw, 40px); line-height: 1.1; letter-spacing: -1.8px;">Turn the style you like into a production-ready book.</h2>
            <p style="max-width: 600px; margin: 0 auto 36px; color: rgba(255,255,255,0.5); font-size: 15px; line-height: 1.7;">Share the examples that feel closest to your direction and we will scope the right route: book cover design, book formatting, complete publishing support, or a focused production review before launch.</p>
            <div style="display: flex; justify-content: center; gap: 14px; flex-wrap: wrap;">
                <a href="/services" style="
                    display: inline-flex;
                    align-items: center;
                    gap: 10px;
                    padding: 18px 32px;
                    border-radius: 50px;
                    font-weight: 700;
                    font-size: 14px;
                    color: #fafafa;
                    text-decoration: none;
                    background: linear-gradient(145deg, rgba(255,255,255,0.08) 0%, rgba(255,255,255,0.02) 100%);
                    box-shadow: 0 10px 30px -10px rgba(0,0,0,0.5), inset 0 1px 1px rgba(255,255,255,0.1);
                    border: 1px solid rgba(255,255,255,0.12);
                    backdrop-filter: blur(16px);
                    -webkit-backdrop-filter: blur(16px);
                    transition: all 0.3s cubic-bezier(0.16,1,0.3,1);
                " onmouseover="this.style.background='linear-gradient(145deg, rgba(255,255,255,0.14) 0%, rgba(255,255,255,0.04) 100%)';this.style.borderColor='rgba(255,255,255,0.3)';this.style.transform='translateY(-3px) scale(1.03)'" onmouseout="this.style.background='linear-gradient(145deg, rgba(255,255,255,0.08) 0%, rgba(255,255,255,0.02) 100%)';this.style.borderColor='rgba(255,255,255,0.12)';this.style.transform='none'">
                    Explore cover design →
                </a>
                <a href="/services" style="
                    display: inline-flex;
                    align-items: center;
                    gap: 10px;
                    padding: 18px 32px;
                    border-radius: 50px;
                    font-weight: 700;
                    font-size: 14px;
                    color: #aaa;
                    text-decoration: none;
                    background: transparent;
                    border: 1px solid rgba(255,255,255,0.12);
                    transition: all 0.3s ease;
                " onmouseover="this.style.borderColor='rgba(255,255,255,0.3)';this.style.color='#fff'" onmouseout="this.style.borderColor='rgba(255,255,255,0.12)';this.style.color='#aaa'">
                    Explore formatting
                </a>
                <a href="/services" style="
                    display: inline-flex;
                    align-items: center;
                    gap: 10px;
                    padding: 18px 32px;
                    border-radius: 50px;
                    font-weight: 700;
                    font-size: 14px;
                    color: #aaa;
                    text-decoration: none;
                    background: transparent;
                    border: 1px solid rgba(255,255,255,0.12);
                    transition: all 0.3s ease;
                " onmouseover="this.style.borderColor='rgba(255,255,255,0.3)';this.style.color='#fff'" onmouseout="this.style.borderColor='rgba(255,255,255,0.12)';this.style.color='#aaa'">
                    Browse illustrations
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
    @keyframes pfAurora {
        0% { transform: translate(-50%, -50%) scale(1); opacity: 0.6; }
        100% { transform: translate(-50%, -50%) scale(1.15); opacity: 1; }
    }

    .pf-filter.active {
        background: #111 !important;
        color: #fff !important;
        border-color: #111 !important;
    }

    .pf-project-card.wide {
        grid-column: span 2;
    }

    @media (max-width: 1050px) {
        .pf-project-grid { grid-template-columns: repeat(3, 1fr) !important; }
        .pf-service-grid { grid-template-columns: repeat(2, 1fr) !important; }
        .pf-genre-grid { grid-template-columns: repeat(3, 1fr) !important; }
        .pf-judge-grid { grid-template-columns: repeat(2, 1fr) !important; }
        .pf-featured-grid { grid-template-columns: repeat(2, 1fr) !important; }
    }

    @media (max-width: 800px) {
        .pf-stats-grid { grid-template-columns: repeat(2, 1fr) !important; }
        .pf-project-grid { grid-template-columns: repeat(2, 1fr) !important; }
        .pf-genre-grid { grid-template-columns: repeat(2, 1fr) !important; }
    }

    @media (max-width: 550px) {
        .pf-stats-grid,
        .pf-project-grid,
        .pf-service-grid,
        .pf-genre-grid,
        .pf-judge-grid,
        .pf-featured-grid {
            grid-template-columns: 1fr !important;
        }
        .pf-project-card.wide {
            grid-column: span 1 !important;
        }
    }
</style>


<!-- =========================================================
     JAVASCRIPT
========================================================= -->
<script>
const searchInput = document.getElementById("searchInput");
const cards = document.querySelectorAll(".pf-project-card");
const filters = document.querySelectorAll(".pf-filter");
let currentFilter = "all";

function filterProjects(){
    const search = searchInput.value.toLowerCase().trim();
    cards.forEach(card => {
        const categoryId = card.dataset.category;
        const searchable = card.dataset.search.toLowerCase();
        const matchesFilter = currentFilter === "all" || categoryId === currentFilter;
        const matchesSearch = searchable.includes(search);
        if(matchesFilter && matchesSearch){
            card.style.display = "";
        }else{
            card.style.display = "none";
        }
    });
}

filters.forEach(button => {
    button.addEventListener("click", function(){
        filters.forEach(btn => {
            btn.classList.remove("active");
            btn.style.background = "#fff";
            btn.style.color = "#666";
            btn.style.borderColor = "#e8e8e8";
        });
        this.classList.add("active");
        this.style.background = "#111";
        this.style.color = "#fff";
        this.style.borderColor = "#111";
        currentFilter = this.dataset.filter;
        filterProjects();
    });
});

searchInput.addEventListener("input", filterProjects);

// Wide card detection
cards.forEach(card => {
    const img = card.querySelector("img");
    const orientation = card.dataset.orientation;
    if(!img) return;
    if(orientation === "horizontal"){
        card.classList.add("wide");
        return;
    }
    if(img.complete && img.naturalWidth > 0){
        layoutCard(card, img);
    }else{
        img.addEventListener("load", function(){
            layoutCard(card, img);
        });
    }
});

function layoutCard(card, img){
    const wide = img.naturalWidth > img.naturalHeight;
    card.classList.toggle("wide", wide);
}

// Load more
document.getElementById("loadMore").addEventListener("click", function(){
    this.innerHTML = "More projects coming soon";
    this.style.cursor = "default";
});
</script>


</body>
</html>
