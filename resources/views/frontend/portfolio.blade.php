<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Portfolio | HMD Publishing</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:
    -apple-system,
    BlinkMacSystemFont,
    "Segoe UI",
    Roboto,
    Helvetica,
    Arial,
    sans-serif;

    color:#171717;
    background:#ffffff;
    line-height:1.5;
}

a{
    text-decoration:none;
    color:inherit;
}

button,
input,
select{
    font-family:inherit;
}


/* =====================================================
TRUSTPILOT
===================================================== */

.trust-section{
    padding:18px 5% 0;
}

.trust{
    display:flex;
    justify-content:center;
    align-items:center;
    gap:8px;

    font-size:13px;
    color:#666666;
}

.stars{
    color:#00b67a;
    font-size:16px;
    letter-spacing:1px;
}


/* =====================================================
HERO
===================================================== */

.hero{
    max-width:1100px;
    margin:auto;

    text-align:center;

    padding:65px 25px 45px;
}

.hero-label{
    display:inline-block;

    padding:7px 12px;

    border-radius:50px;

    background:#f1f5f9;

    color:#475569;

    font-size:11px;

    font-weight:700;

    text-transform:uppercase;

    letter-spacing:1px;

    margin-bottom:18px;
}

.hero h1{
    font-size:52px;
    line-height:1.05;

    letter-spacing:-2.5px;

    margin-bottom:18px;
}

.hero p{
    max-width:690px;
    margin:auto;

    color:#666666;

    font-size:17px;
}


/* =====================================================
PORTFOLIO COUNTERS
===================================================== */

.stats{
    max-width:1000px;
    margin:15px auto 55px;

    display:grid;
    grid-template-columns:repeat(4,1fr);

    border-top:1px solid #e8e8e8;
    border-bottom:1px solid #e8e8e8;
}

.stat{
    text-align:center;
    padding:23px 10px;

    border-right:1px solid #e8e8e8;
}

.stat:last-child{
    border-right:0;
}

.stat-number{
    font-size:25px;
    font-weight:800;
}

.stat-label{
    font-size:12px;
    color:#777777;
    margin-top:3px;
}


/* =====================================================
PORTFOLIO SECTION
===================================================== */

.portfolio-section{
    max-width:1280px;
    margin:auto;

    padding:0 5% 80px;
}

.section-heading{
    text-align:center;

    margin-bottom:30px;
}

.section-heading h2{
    font-size:30px;
    letter-spacing:-1px;

    margin-bottom:8px;
}

.section-heading p{
    color:#737373;
    font-size:14px;
}


/* SEARCH */

.search-wrapper{
    max-width:650px;
    margin:0 auto 25px;

    position:relative;
}

.search-input{
    width:100%;

    height:52px;

    border:1px solid #d9d9d9;

    border-radius:8px;

    padding:0 18px 0 46px;

    font-size:14px;

    outline:none;

    transition:.2s;
}

.search-input:focus{
    border-color:#2563eb;

    box-shadow:
    0 0 0 3px rgba(37,99,235,.08);
}

.search-icon{
    position:absolute;

    left:17px;
    top:50%;

    transform:translateY(-50%);

    color:#888888;
}


/* FILTERS */

.filters{
    display:flex;
    justify-content:center;

    gap:8px;

    flex-wrap:wrap;

    margin-bottom:35px;
}

.filter{
    border:1px solid #dddddd;

    background:#ffffff;

    padding:8px 14px;

    border-radius:50px;

    font-size:12px;

    color:#555555;

    cursor:pointer;

    transition:.2s;
}

.filter:hover,
.filter.active{
    background:#111111;
    color:#ffffff;
    border-color:#111111;
}


/* =====================================================
PROJECT GRID
===================================================== */

.project-grid{
    display:grid;

    grid-template-columns:
    repeat(4,1fr);

    gap:20px;

    align-items:start;

    grid-auto-flow:dense;
}


/* PROJECT CARD */

.project-card{
    border:1px solid #e6e6e6;

    border-radius:12px;

    overflow:hidden;

    background:#ffffff;

    display:flex;
    flex-direction:column;

    transition:
    transform .25s ease,
    box-shadow .25s ease;

    cursor:pointer;
}

.project-card.wide{
    grid-column:span 2;
}

.project-card:hover{
    transform:translateY(-5px);

    box-shadow:
    0 15px 35px rgba(0,0,0,.10);
}


/* IMAGE */

.project-image{
    background:#f2f2f2;

    overflow:hidden;

    display:flex;
    align-items:center;
    justify-content:center;
}

.project-image img{
    width:100%;
    height:auto;

    display:block;

    transition:.35s;
}

.project-card:hover img{
    transform:scale(1.04);
}


/* CONTENT */

.project-content{
    padding:17px;

    display:flex;
    flex-direction:column;

    flex:1;

    min-height:118px;
}

.project-type{
    font-size:10px;

    color:#2563eb;

    font-weight:800;

    text-transform:uppercase;

    letter-spacing:.5px;

    margin-bottom:7px;
}

.project-title{
    font-size:16px;

    font-weight:750;

    line-height:1.25;

    margin-bottom:6px;
}

.project-author{
    color:#777777;

    font-size:12px;

    margin-bottom:13px;
}

.project-link{
    color:#2563eb;

    font-size:12px;

    font-weight:700;

    margin-top:auto;
}


/* =====================================================
LOAD MORE
===================================================== */

.load-more{
    text-align:center;

    margin-top:35px;
}

.load-more button{
    border:1px solid #d5d5d5;

    background:#ffffff;

    padding:12px 22px;

    border-radius:7px;

    cursor:pointer;

    font-size:13px;

    font-weight:600;

    transition:.2s;
}

.load-more button:hover{
    background:#111111;
    color:#ffffff;
}


/* =====================================================
GENRE SECTION
===================================================== */

.genre-section{
    background:#f8f8f8;

    padding:80px 5%;
}

.genre-inner{
    max-width:1150px;
    margin:auto;
}

.genre-heading{
    text-align:center;
    margin-bottom:35px;
}

.genre-heading h2{
    font-size:32px;
    letter-spacing:-1px;

    margin-bottom:8px;
}

.genre-heading p{
    color:#777777;
    font-size:14px;
}

.genre-grid{
    display:grid;

    grid-template-columns:
    repeat(4,1fr);

    gap:12px;
}

.genre{
    background:#ffffff;

    border:1px solid #e6e6e6;

    border-radius:8px;

    padding:18px;

    display:flex;
    justify-content:space-between;
    align-items:center;

    transition:.2s;
}

.genre:hover{
    border-color:#111111;

    transform:translateY(-2px);
}

.genre-name{
    font-size:13px;
    font-weight:650;
}

.genre-count{
    color:#999999;
    font-size:12px;
}


/* =====================================================
SERVICES BEHIND PORTFOLIO
===================================================== */

.services-section{
    padding:85px 5%;
}

.services-inner{
    max-width:1150px;
    margin:auto;
}

.services-heading{
    max-width:700px;
    margin-bottom:38px;
}

.services-heading .eyebrow{
    color:#2563eb;

    text-transform:uppercase;

    font-size:11px;

    font-weight:800;

    letter-spacing:1px;

    margin-bottom:10px;
}

.services-heading h2{
    font-size:36px;

    line-height:1.15;

    letter-spacing:-1.5px;

    margin-bottom:12px;
}

.services-heading p{
    color:#6f6f6f;
    font-size:14px;
}


/* SERVICE CARDS */

.service-grid{
    display:grid;

    grid-template-columns:
    repeat(4,1fr);

    gap:17px;
}

.service-card{
    border:1px solid #e6e6e6;

    border-radius:12px;

    padding:24px;

    transition:.25s;
}

.service-card:hover{
    box-shadow:
    0 15px 35px rgba(0,0,0,.07);

    transform:translateY(-4px);
}

.service-icon{
    width:42px;
    height:42px;

    display:flex;
    align-items:center;
    justify-content:center;

    border-radius:9px;

    background:#f1f5ff;

    color:#2563eb;

    font-size:18px;

    margin-bottom:18px;
}

.service-card h3{
    font-size:17px;
    margin-bottom:9px;
}

.service-card p{
    color:#737373;
    font-size:12px;
    line-height:1.7;

    margin-bottom:17px;
}

.service-card a{
    color:#2563eb;

    font-size:12px;

    font-weight:700;
}


/* =====================================================
HOW TO JUDGE
===================================================== */

.judge-section{
    background:#111111;

    color:#ffffff;

    padding:85px 5%;
}

.judge-inner{
    max-width:1150px;
    margin:auto;
}

.judge-heading{
    max-width:700px;
    margin-bottom:40px;
}

.judge-heading h2{
    font-size:36px;

    line-height:1.15;

    letter-spacing:-1.5px;

    margin-bottom:13px;
}

.judge-heading p{
    color:#b9b9b9;
    font-size:14px;
}

.judge-grid{
    display:grid;

    grid-template-columns:
    repeat(4,1fr);

    gap:15px;
}

.judge-card{
    border:1px solid #333333;

    border-radius:10px;

    padding:23px;

    background:#171717;
}

.judge-number{
    color:#777777;

    font-size:11px;

    margin-bottom:22px;
}

.judge-card p{
    font-size:13px;

    line-height:1.65;

    color:#dddddd;
}


/* =====================================================
FEATURED IMAGES
===================================================== */

.featured-section{
    padding:80px 5%;
}

.featured-inner{
    max-width:1150px;
    margin:auto;
}

.featured-grid{
    display:grid;

    grid-template-columns:
    repeat(4,1fr);

    gap:18px;
}

.featured-image{
    border-radius:12px;

    overflow:hidden;

    background:#eeeeee;
}

.featured-image img{
    width:100%;
    height:auto;

    display:block;

    transition:.35s;
}

.featured-image:hover img{
    transform:scale(1.04);
}


/* =====================================================
CTA
===================================================== */

.cta-section{
    padding:20px 5% 90px;
}

.cta{
    max-width:1150px;

    margin:auto;

    background:#f4f6ff;

    border-radius:18px;

    padding:60px 50px;

    text-align:center;
}

.cta h2{
    font-size:36px;

    letter-spacing:-1.5px;

    margin-bottom:12px;
}

.cta p{
    max-width:650px;

    margin:auto;

    color:#666666;

    font-size:14px;

    line-height:1.7;

    margin-bottom:25px;
}

.cta-buttons{
    display:flex;

    justify-content:center;

    gap:10px;

    flex-wrap:wrap;
}

.btn-primary{
    background:#111111;

    color:#ffffff;

    padding:13px 22px;

    border-radius:7px;

    font-size:13px;

    font-weight:700;
}

.btn-secondary{
    background:#ffffff;

    border:1px solid #d8d8d8;

    padding:13px 22px;

    border-radius:7px;

    font-size:13px;

    font-weight:700;
}


/* =====================================================
FOOTER
===================================================== */

.footer{
    background:#f8f8f8;

    border-top:1px solid #e7e7e7;

    padding:65px 5% 25px;
}

.footer-inner{
    max-width:1200px;
    margin:auto;
}

.footer-grid{
    display:grid;

    grid-template-columns:
    2fr 1fr 1fr 1fr;

    gap:45px;

    padding-bottom:45px;
}

.footer-brand .logo{
    margin-bottom:15px;
}

.footer-brand p{
    max-width:330px;

    color:#777777;

    font-size:12px;

    line-height:1.7;

    margin-bottom:10px;
}

.footer-column h4{
    font-size:13px;

    margin-bottom:15px;
}

.footer-column a{
    display:block;

    color:#777777;

    font-size:12px;

    margin:9px 0;

    transition:.2s;
}

.footer-column a:hover{
    color:#2563eb;
}

.footer-bottom{
    border-top:1px solid #e4e4e4;

    padding-top:20px;

    display:flex;

    justify-content:space-between;

    gap:15px;

    color:#888888;

    font-size:10px;
}


/* =====================================================
RESPONSIVE
===================================================== */

@media(max-width:1050px){

    .project-grid{
        grid-template-columns:
        repeat(3,1fr);
    }

    .service-grid{
        grid-template-columns:
        repeat(2,1fr);
    }

    .genre-grid{
        grid-template-columns:
        repeat(3,1fr);
    }

    .judge-grid{
        grid-template-columns:
        repeat(2,1fr);
    }

    .featured-grid{
        grid-template-columns:
        repeat(2,1fr);
    }

}


@media(max-width:800px){

    .top-right{
        display:none;
    }

    .nav{
        display:none;
    }

    .stats{
        grid-template-columns:
        repeat(2,1fr);
    }

    .stat:nth-child(2){
        border-right:0;
    }

    .stat:nth-child(1),
    .stat:nth-child(2){
        border-bottom:1px solid #e8e8e8;
    }

    .project-grid{
        grid-template-columns:
        repeat(2,1fr);
    }

    .genre-grid{
        grid-template-columns:
        repeat(2,1fr);
    }

    .footer-grid{
        grid-template-columns:
        repeat(2,1fr);
    }

}


@media(max-width:550px){

    .hero{
        padding-top:45px;
    }

    .hero h1{
        font-size:38px;
    }

    .hero p{
        font-size:15px;
    }

    .stats{
        grid-template-columns:1fr 1fr;
    }

    .project-grid{
        grid-template-columns:1fr;
    }

    .genre-grid{
        grid-template-columns:1fr;
    }

    .service-grid{
        grid-template-columns:1fr;
    }

    .judge-grid{
        grid-template-columns:1fr;
    }

    .featured-grid{
        grid-template-columns:1fr;
    }

    .cta{
        padding:40px 25px;
    }

    .cta h2{
        font-size:28px;
    }

    .footer-grid{
        grid-template-columns:1fr;
    }

    .footer-bottom{
        flex-direction:column;
    }

}

</style>

</head>


<body>

    @include('frontend.partials.navbar')

<!-- =====================================================
TRUST
===================================================== -->

<section class="trust-section">

    <div class="trust">

        <span class="stars">
            ★★★★★
        </span>

        <strong>
            4.7 out of 5
        </strong>

        <span>
            · Based on 83 Trustpilot reviews
        </span>

    </div>

</section>



<!-- =====================================================
HERO
===================================================== -->

<section class="hero">

    <span class="hero-label">
        HMD Publishing Portfolio
    </span>


    <h1>
        Book design and<br>
        children’s illustration portfolio.
    </h1>


    <p>
        Real covers, interior formatting, and children’s
        illustration built for print, ebook, and Amazon KDP.
    </p>

</section>



<!-- =====================================================
STATS
===================================================== -->

<section class="stats">

    <div class="stat">

        <div class="stat-number">
            692
        </div>

        <div class="stat-label">
            All work
        </div>

    </div>


    <div class="stat">

        <div class="stat-number">
            354
        </div>

        <div class="stat-label">
            Book covers
        </div>

    </div>


    <div class="stat">

        <div class="stat-number">
            238
        </div>

        <div class="stat-label">
            Interior formatting
        </div>

    </div>


    <div class="stat">

        <div class="stat-number">
            100
        </div>

        <div class="stat-label">
            Children's illustrations
        </div>

    </div>

</section>



<!-- =====================================================
PORTFOLIO
===================================================== -->

<section class="portfolio-section">

    <div class="section-heading">

        <h2>
            Browse book design samples
        </h2>

        <p>
            Search by title, author, genre, or category.
        </p>

    </div>


    <!-- SEARCH -->

    <div class="search-wrapper">

        <span class="search-icon">
            🔍
        </span>

        <input
            type="text"
            class="search-input"
            id="searchInput"
            placeholder="Search by title, author, or creator..."
        >

    </div>


    <!-- FILTERS -->

    <div class="filters">

        <button class="filter active"
                data-filter="all">
            All
        </button>

        @foreach ($filterCategories as $filterCategory)
            <button class="filter"
                    data-filter="{{ $filterCategory['value'] }}">
                {{ $filterCategory['label'] }}
            </button>
        @endforeach

    </div>



    <!-- PROJECT GRID -->

    <div class="project-grid"
         id="projectGrid">

        @forelse ($portfolioItems as $item)

        <!-- CARD -->

        <article class="project-card"
                 data-category="{{ $item->category }}"
                 data-search="{{ $item->search_text }}">

            <div class="project-image">

                <img
                    src="{{ $item->cover }}"
                    alt="{{ $item->title }}"
                >

            </div>

            <div class="project-content">

                <div class="project-type">
                    {{ $item->type_label }}
                </div>

                <div class="project-title">
                    {{ $item->title }}
                </div>

                <div class="project-author">
                    {{ $item->author }}
                </div>

                <div class="project-link">
                    <a href="{{ route('portfolio.show', $item) }}" style="color:inherit;">
                        View project page →
                    </a>
                </div>

            </div>

        </article>

        @empty

        <p style="text-align:center;color:#999;grid-column:1/-1;padding:30px 0;">
            No portfolio items yet. Add some from the admin panel.
        </p>

        @endforelse

    </div>



    <div class="load-more">

        <button id="loadMore">
            Load 24 more
        </button>

    </div>

</section>



<!-- =====================================================
GENRE
===================================================== -->

<section class="genre-section">

    <div class="genre-inner">

        <div class="genre-heading">

            <h2>
                Browse the portfolio by genre
            </h2>

            <p>
                Every genre below is a full collection of real HMD work.
            </p>

        </div>


        <div class="genre-grid">

            <a href="#" class="genre">
                <span class="genre-name">Romance</span>
                <span class="genre-count">117</span>
            </a>

            <a href="#" class="genre">
                <span class="genre-name">Children's Books</span>
                <span class="genre-count">112</span>
            </a>

            <a href="#" class="genre">
                <span class="genre-name">Business</span>
                <span class="genre-count">85</span>
            </a>

            <a href="#" class="genre">
                <span class="genre-name">Self-Help</span>
                <span class="genre-count">75</span>
            </a>

            <a href="#" class="genre">
                <span class="genre-name">Fantasy</span>
                <span class="genre-count">69</span>
            </a>

            <a href="#" class="genre">
                <span class="genre-name">Religious & Spiritual</span>
                <span class="genre-count">44</span>
            </a>

            <a href="#" class="genre">
                <span class="genre-name">Children's</span>
                <span class="genre-count">35</span>
            </a>

            <a href="#" class="genre">
                <span class="genre-name">Fiction</span>
                <span class="genre-count">33</span>
            </a>

            <a href="#" class="genre">
                <span class="genre-name">Health & Wellness</span>
                <span class="genre-count">26</span>
            </a>

            <a href="#" class="genre">
                <span class="genre-name">Mystery & Thriller</span>
                <span class="genre-count">12</span>
            </a>

            <a href="#" class="genre">
                <span class="genre-name">Memoir & Biography</span>
                <span class="genre-count">8</span>
            </a>

            <a href="#" class="genre">
                <span class="genre-name">Poetry</span>
                <span class="genre-count">3</span>
            </a>

        </div>

    </div>

</section>



<!-- =====================================================
SERVICES
===================================================== -->

<section class="services-section">

    <div class="services-inner">

        <div class="services-heading">

            <div class="eyebrow">
                Services behind the portfolio
            </div>

            <h2>
                Choose the route that matches
                where your book is now.
            </h2>

            <p>
                Some authors need one strong cover.
                Others need manuscript formatting or
                complete publishing support.
            </p>

        </div>


        <div class="service-grid">


            <div class="service-card">

                <div class="service-icon">
                    ✦
                </div>

                <h3>
                    Book cover design
                </h3>

                <p>
                    Professional front covers, ebook covers,
                    paperback wraps, and hardback-ready
                    direction designed around your genre.
                </p>

                <a href="{{ route('services.bookCover') }}">
                    Explore cover design →
                </a>

            </div>


            <div class="service-card">

                <div class="service-icon">
                    ▤
                </div>

                <h3>
                    Book formatting
                </h3>

                <p>
                    Clean interior layouts, readable typography,
                    trim-size control and production-ready files.
                </p>

                <a href="{{ route('services.editing') }}">
                    Explore formatting →
                </a>

            </div>


            <div class="service-card">

                <div class="service-icon">
                    ✎
                </div>

                <h3>
                    Children's illustrations
                </h3>

                <p>
                    Story-led artwork, consistent character
                    development and finished scenes for
                    children's books.
                </p>

                <a href="{{ route('services.bookCover') }}">
                    Explore illustrations →
                </a>

            </div>


            <div class="service-card">

                <div class="service-icon">
                    ✓
                </div>

                <h3>
                    Complete publishing support
                </h3>

                <p>
                    Design, formatting, publishing setup,
                    metadata, launch preparation and
                    release support.
                </p>

                <a href="{{ route('services.publishing') }}">
                    Explore publishing →
                </a>

            </div>

        </div>

    </div>

</section>



<!-- =====================================================
HOW TO JUDGE
===================================================== -->

<section class="judge-section">

    <div class="judge-inner">

        <div class="judge-heading">

            <h2>
                The right portfolio should make
                your next publishing decision easier.
            </h2>

            <p>
                Use the examples to judge genre fit,
                cover clarity, page readability and
                overall market readiness.
            </p>

        </div>


        <div class="judge-grid">

            <div class="judge-card">

                <div class="judge-number">
                    01
                </div>

                <p>
                    Book covers designed to read clearly
                    in Amazon thumbnail, ebook and
                    paperback contexts.
                </p>

            </div>


            <div class="judge-card">

                <div class="judge-number">
                    02
                </div>

                <p>
                    Interior formatting samples showing
                    readable typography, chapter rhythm
                    and print-ready spacing.
                </p>

            </div>


            <div class="judge-card">

                <div class="judge-number">
                    03
                </div>

                <p>
                    Story-led illustration proof showing
                    final artwork, character development
                    and sketch progression.
                </p>

            </div>


            <div class="judge-card">

                <div class="judge-number">
                    04
                </div>

                <p>
                    Publishing production work that helps
                    manuscripts feel ready for KDP,
                    IngramSpark and launch assets.
                </p>

            </div>

        </div>

    </div>

</section>



<!-- =====================================================
FEATURED WORK
===================================================== -->

<section class="featured-section">

    <div class="featured-inner">

        <div class="section-heading">

            <h2>
                Featured portfolio work
            </h2>

            <p>
                A closer look at selected recent designs.
            </p>

        </div>


        <div class="featured-grid">

            @forelse ($portfolioItems->where('is_featured', true)->take(4) as $item)

            <div class="featured-image">

                <img
                    src="{{ $item->cover }}"
                    alt="{{ $item->title }}"
                >

            </div>

            @empty
            @endforelse

        </div>

    </div>

</section>



<!-- =====================================================
CTA
===================================================== -->

<section class="cta-section">

    <div class="cta">

        <h2>
            Turn the style you like into
            a production-ready book.
        </h2>

        <p>
            Share the examples that feel closest to
            your direction and we will scope the right
            route: book cover design, book formatting,
            complete publishing support, or a focused
            production review before launch.
        </p>


        <div class="cta-buttons">

            <a href="{{ route('services.bookCover') }}"
               class="btn-primary">
                Explore cover design →
            </a>

            <a href="{{ route('services.editing') }}"
               class="btn-secondary">
                Explore formatting
            </a>

            <a href="{{ route('services.bookCover') }}"
               class="btn-secondary">
                Browse illustrations
            </a>

        </div>

    </div>

</section>



<!-- =====================================================
FOOTER
===================================================== -->

<footer class="footer">

    <div class="footer-inner">

        <div class="footer-grid">


            <!-- BRAND -->

            <div class="footer-brand">

                <div class="logo">

                    HMD
                    <span>Publishing</span>

                </div>

                <p>
                    Professional book publishing services.
                    10,000+ books published across 47 countries
                    since 2015.
                </p>

                <p>
                    2 Castle Meadow Rd,
                    Nottingham NG2 1AJ
                </p>

                <p>
                    info@hmdpublishing.com
                    <br>
                    +44 7888 862764
                </p>

            </div>


            <!-- SERVICES -->

            <div class="footer-column">

                <h4>
                    Services
                </h4>

                <a href="{{ route('services.completePublishingPackage') }}">
                    Complete Package
                </a>

                <a href="{{ route('services.editing') }}">
                    Editing
                </a>

                <a href="{{ route('services.bookCover') }}">
                    Cover Design
                </a>

                <a href="{{ route('services.editing') }}">
                    Book Formatting
                </a>

                <a href="{{ route('services') }}">
                    Amazon Advertising
                </a>

            </div>


            <!-- TOOLS -->

            <div class="footer-column">

                <h4>
                    Free tools
                </h4>

                <a href="{{ route('tools') }}">
                    Royalty Calculator
                </a>

                <a href="{{ route('tools') }}">
                    Keyword Research
                </a>

                <a href="{{ route('tools') }}">
                    Category Finder
                </a>

                <a href="{{ route('tools') }}">
                    Manuscript Readiness
                </a>

                <a href="{{ route('tools') }}">
                    All 28 tools →
                </a>

            </div>


            <!-- COMPANY -->

            <div class="footer-column">

                <h4>
                    Company
                </h4>

                <a href="{{ route('about') }}">
                    About
                </a>

                <a href="{{ route('portfolio') }}">
                    Portfolio
                </a>

                <a href="#">
                    Blog
                </a>

                <a href="{{ route('contact.page') }}">
                    Contact
                </a>

                <h4 style="margin-top:25px;">
                    Verified partners
                </h4>

                <a href="#">
                    Fiverr
                </a>

                <a href="#">
                    Upwork
                </a>

                <a href="#">
                    PeoplePerHour
                </a>

            </div>

        </div>


        <div class="footer-bottom">

            <span>
                © 2026 HMD Publishing Limited.
                All rights reserved.
            </span>

            <span>
                You keep 100% of your rights and royalties — always.
            </span>

        </div>

    </div>

</footer>



<!-- =====================================================
JAVASCRIPT
===================================================== -->

<script>

/* ==========================================
SEARCH + FILTER
========================================== */

const searchInput =
    document.getElementById("searchInput");

const cards =
    document.querySelectorAll(".project-card");

const filters =
    document.querySelectorAll(".filter");


let currentFilter = "all";


function filterProjects(){

    const search =
        searchInput.value
        .toLowerCase()
        .trim();


    cards.forEach(card => {

        const category =
            card.dataset.category;

        const searchable =
            card.dataset.search.toLowerCase();


        const matchesFilter =
            currentFilter === "all"
            ||
            category === currentFilter;


        const matchesSearch =
            searchable.includes(search);


        if(matchesFilter && matchesSearch){

            card.style.display = "";

        }else{

            card.style.display = "none";

        }

    });

}


filters.forEach(button => {

    button.addEventListener(
        "click",
        function(){

            filters.forEach(btn =>
                btn.classList.remove("active")
            );

            this.classList.add("active");

            currentFilter =
                this.dataset.filter;

            filterProjects();

        }
    );

});


searchInput.addEventListener(
    "input",
    filterProjects
);


/* ==========================================
WIDE CARD DETECTION
========================================== */

cards.forEach(card => {

    const img = card.querySelector("img");

    if(!img) return;

    if(img.complete && img.naturalWidth > 0){

        layoutCard(card, img);

    }else{

        img.addEventListener("load", function(){
            layoutCard(card, img);
        });

    }

});

function layoutCard(card, img){

    const wide =
        img.naturalWidth > img.naturalHeight;

    card.classList.toggle(
        "wide",
        wide
    );

}


/* ==========================================
LOAD MORE DEMO
========================================== */

document
.getElementById("loadMore")
.addEventListener(
    "click",
    function(){

        this.innerHTML =
            "More projects coming soon";

        this.style.cursor =
            "default";

    }
);

</script>


</body>
</html>
