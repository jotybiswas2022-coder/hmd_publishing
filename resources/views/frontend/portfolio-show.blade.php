<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>{{ $item->title }} | HMD Publishing Portfolio</title>

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


/* =====================================================
PAGE HEADER
===================================================== */

.pf-show-hero{
    background:#f8fafc;

    border-bottom:1px solid #e7e7e7;

    padding:55px 5% 45px;
}

.pf-show-hero-inner{
    max-width:1200px;
    margin:auto;
}

.pf-show-breadcrumb{
    font-size:12px;

    color:#64748b;

    margin-bottom:28px;
}

.pf-show-breadcrumb a{
    color:#2563eb;

    font-weight:600;
}

.pf-show-breadcrumb a:hover{
    text-decoration:underline;
}

.pf-show-top{
    display:flex;
    justify-content:space-between;
    align-items:center;
    gap:20px;
}

.pf-show-title{
    font-size:40px;
    letter-spacing:-1.5px;

    line-height:1.1;

    margin-bottom:8px;
}

.pf-show-sub{
    color:#64748b;

    font-size:14px;
}

.pf-show-author{
    display:flex;
    align-items:center;
    gap:12px;

    padding:8px 18px;

    background:#ffffff;

    border:1px solid #e6e6e6;

    border-radius:50px;

    color:#475569;

    font-size:13px;
}

.pf-show-author strong{
    color:#171717;

    font-weight:700;
}


/* =====================================================
MAIN
===================================================== */

.pf-show-body{
    max-width:1200px;
    margin:auto;

    padding:55px 5% 75px;
}

.pf-show-grid{
    display:grid;

    grid-template-columns:minmax(0, 380px) 1fr;

    gap:55px;

    align-items:start;
}

.pf-show-cover{
    border:1px solid #e6e6e6;

    border-radius:14px;

    overflow:hidden;

    background:#f2f2f2;

    box-shadow:0 25px 60px rgba(0,0,0,.08);
}

.pf-show-cover img{
    width:100%;
    height:auto;

    display:block;
}

.pf-show-cover-badge{
    text-align:center;

    padding:12px;

    border-top:1px solid #e6e6e6;

    font-size:12px;

    color:#64748b;
}

.pf-show-info h2{
    font-size:22px;

    letter-spacing:-.5px;

    margin-bottom:22px;
}

.pf-show-meta{
    list-style:none;

    margin:0;
    padding:0;

    border:1px solid #e6e6e6;

    border-radius:12px;

    overflow:hidden;
}

.pf-show-meta li{
    display:flex;
    justify-content:space-between;
    gap:20px;

    padding:14px 18px;

    font-size:14px;

    border-bottom:1px solid #e6e6e6;
}

.pf-show-meta li:last-child{
    border-bottom:none;
}

.pf-show-meta .meta-key{
    color:#64748b;

    font-weight:500;
}

.pf-show-meta .meta-value{
    font-weight:600;

    text-align:right;
}

.pf-show-genre{
    display:inline-block;

    padding:4px 14px;

    border-radius:50px;

    background:#eff6ff;

    color:#2563eb;

    font-size:12px;

    font-weight:700;

    text-transform:capitalize;
}

.pf-show-actions{
    display:flex;

    gap:12px;

    margin-top:28px;

    flex-wrap:wrap;
}

.pf-show-btn{
    display:inline-flex;
    align-items:center;
    gap:8px;

    padding:12px 26px;

    border-radius:10px;

    font-size:14px;

    font-weight:700;

    transition:.2s;
}

.pf-show-btn-primary{
    background:#111111;

    color:#ffffff;
}

.pf-show-btn-primary:hover{
    background:#2563eb;
}

.pf-show-btn-secondary{
    background:#ffffff;

    color:#171717;

    border:1px solid #e6e6e6;
}

.pf-show-btn-secondary:hover{
    border-color:#111111;
}


/* =====================================================
RELATED
===================================================== */

.pf-related{
    max-width:1200px;
    margin:auto;

    padding:0 5% 70px;
}

.pf-related-head{
    display:flex;
    justify-content:space-between;
    align-items:flex-end;

    gap:15px;

    margin-bottom:25px;
}

.pf-related-head h2{
    font-size:24px;
    letter-spacing:-.5px;
}

.pf-related-grid{
    display:grid;

    grid-template-columns:
    repeat(4,1fr);

    gap:20px;
}

.pf-related-card{
    border:1px solid #e6e6e6;

    border-radius:12px;

    overflow:hidden;

    background:#ffffff;

    transition:
    transform .25s ease,
    box-shadow .25s ease;
}

.pf-related-card:hover{
    transform:translateY(-5px);

    box-shadow:0 15px 35px rgba(0,0,0,.10);
}

.pf-related-card .rf-img{
    background:#f2f2f2;

    overflow:hidden;

    display:flex;
    align-items:center;
    justify-content:center;
}

.pf-related-card .rf-img img{
    width:100%;
    height:auto;

    display:block;

    transition:.35s;
}

.pf-related-card:hover .rf-img img{
    transform:scale(1.04);
}

.pf-related-card .rf-content{
    padding:15px 17px;
}

.pf-related-card .rf-title{
    font-size:15px;
    font-weight:750;

    line-height:1.25;

    margin-bottom:5px;
}

.pf-related-card .rf-author{
    color:#777777;

    font-size:12px;
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
    font-size:26px;

    font-weight:800;

    letter-spacing:-1px;

    margin-bottom:15px;
}

.footer-brand .logo span{
    color:#2563eb;
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

    .pf-show-grid{
        grid-template-columns:minmax(0, 320px) 1fr;

        gap:35px;
    }

    .pf-related-grid{
        grid-template-columns:
        repeat(3,1fr);
    }

}

@media(max-width:800px){

    .pf-show-top{
        flex-direction:column;
        align-items:flex-start;
    }

    .pf-show-grid{
        grid-template-columns:1fr;

        gap:30px;
    }

    .pf-show-cover{
        max-width:340px;
    }

    .pf-related-grid{
        grid-template-columns:
        repeat(2,1fr);
    }

    .footer-grid{
        grid-template-columns:
        repeat(2,1fr);

        gap:30px;
    }

}

@media(max-width:550px){

    .pf-show-hero{
        padding:40px 5% 35px;
    }

    .pf-show-title{
        font-size:32px;
    }

    .pf-related-grid{
        grid-template-columns:1fr;
    }

    .pf-show-meta li{
        flex-direction:column;

        gap:4px;
    }

    .pf-show-meta .meta-value{
        text-align:left;
    }

    .footer-grid{
        grid-template-columns:1fr;
    }

    .footer-bottom{
        flex-direction:column;

        gap:6px;
    }

}

</style>

</head>


<body>

    @include('frontend.partials.navbar')


<!-- =====================================================
HEADER
===================================================== -->

<section class="pf-show-hero">

    <div class="pf-show-hero-inner">

        <div class="pf-show-breadcrumb">
            <a href="{{ route('portfolio') }}">Portfolio</a>
            <span> / </span>
            <span>{{ $item->type_label ?: ucwords(str_replace('-', ' ', $item->category)) }}</span>
        </div>

        <div class="pf-show-top">

            <div>

                <h1 class="pf-show-title">{{ $item->title }}</h1>

                <div class="pf-show-sub">
                    {{ $item->type_label ?: ucwords(str_replace('-', ' ', $item->category)) }}
                </div>

            </div>

            @if($item->author)
                <div class="pf-show-author">
                    <span>by</span>
                    <strong>{{ $item->author }}</strong>
                </div>
            @endif

        </div>

    </div>

</section>


<!-- =====================================================
MAIN
===================================================== -->

<section class="pf-show-body">

    <div class="pf-show-grid">

        <div class="pf-show-cover">

            <img
                src="{{ $item->cover }}"
                alt="{{ $item->title }}"
            >

            <div class="pf-show-cover-badge">
                Book cover preview
            </div>

        </div>

        <div class="pf-show-info">

            <h2>Project details</h2>

            <ul class="pf-show-meta">

                <li>
                    <span class="meta-key">Title</span>
                    <span class="meta-value">{{ $item->title }}</span>
                </li>

                @if($item->author)
                    <li>
                        <span class="meta-key">Author</span>
                        <span class="meta-value">{{ $item->author }}</span>
                    </li>
                @endif

                <li>
                    <span class="meta-key">Genre</span>
                    <span class="meta-value">
                        <span class="pf-show-genre">{{ ucwords(str_replace('-', ' ', $item->category)) }}</span>
                    </span>
                </li>

                <li>
                    <span class="meta-key">Work type</span>
                    <span class="meta-value">{{ $item->type_label ?: 'Book cover design' }}</span>
                </li>

            </ul>

            <div class="pf-show-actions">

                <a href="{{ route('services.bookCover') }}" class="pf-show-btn pf-show-btn-primary">
                    Get a cover like this
                </a>

                <a href="{{ route('portfolio') }}" class="pf-show-btn pf-show-btn-secondary">
                    ← Back to portfolio
                </a>

            </div>

        </div>

    </div>

</section>


<!-- =====================================================
RELATED
===================================================== -->

@if($related->count() > 0)

<section class="pf-related">

    <div class="pf-related-head">

        <h2>More from the portfolio</h2>

        <a href="{{ route('portfolio') }}" style="font-size:13px;color:#2563eb;font-weight:700;">
            View all →
        </a>

    </div>

    <div class="pf-related-grid">

        @foreach ($related as $rel)

            <a href="{{ route('portfolio.show', $rel) }}" class="pf-related-card">

                <div class="rf-img">

                    <img
                        src="{{ $rel->cover }}"
                        alt="{{ $rel->title }}"
                    >

                </div>

                <div class="rf-content">

                    <div class="rf-title">{{ $rel->title }}</div>

                    <div class="rf-author">{{ $rel->author }}</div>

                </div>

            </a>

        @endforeach

    </div>

</section>

@endif


<!-- =====================================================
FOOTER
===================================================== -->

<footer class="footer">

    <div class="footer-inner">

        <div class="footer-grid">

            <div class="footer-brand">

                <div class="logo">
                    HMD <span>Publishing</span>
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

            <div class="footer-column">

                <h4>Services</h4>

                <a href="{{ route('services') }}">Complete Package</a>

                <a href="{{ route('services.editing') }}">Editing</a>

                <a href="{{ route('services.bookCover') }}">Cover Design</a>

                <a href="{{ route('services.editing') }}">Book Formatting</a>

                <a href="{{ route('services') }}">Amazon Advertising</a>

                <a href="{{ route('services') }}">All services →</a>

            </div>

            <div class="footer-column">

                <h4>Free tools</h4>

                <a href="{{ route('tools') }}">Royalty Calculator</a>

                <a href="{{ route('tools') }}">Keyword Research</a>

                <a href="{{ route('tools') }}">Category Finder</a>

                <a href="{{ route('tools') }}">Manuscript Readiness</a>

                <a href="{{ route('tools') }}">All 28 tools →</a>

            </div>

            <div class="footer-column">

                <h4>Company</h4>

                <a href="{{ route('about') }}">About</a>

                <a href="{{ route('portfolio') }}">Portfolio</a>

                <a href="#">Blog</a>

                <a href="{{ route('contact.page') }}">Contact</a>

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


</body>
</html>
