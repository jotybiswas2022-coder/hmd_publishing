<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Book Formatting Services | HMD Publishing</title>
<meta name="csrf-token" content="{{ csrf_token() }}">

<style>
/* =========================================================
   RESET
========================================================= */

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

html{
    scroll-behavior:smooth;
}

body{
    font-family: Arial, Helvetica, sans-serif;
    background:#fff;
    color:#17251f;
    line-height:1.6;
}

img{
    max-width:100%;
    display:block;
}

a{
    text-decoration:none;
    color:inherit;
}

button,
input,
select{
    font:inherit;
}

.container{
    width:min(1180px, calc(100% - 40px));
    margin:auto;
}


/* =========================================================
   TOP BAR
========================================================= */

.topbar{
    background:#123c2d;
    color:#fff;
    font-size:13px;
}

.topbar-inner{
    min-height:40px;
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:20px;
}

.top-left{
    font-weight:600;
}

.top-right{
    display:flex;
    gap:25px;
    flex-wrap:wrap;
}

.top-right span{
    opacity:.95;
}


/* =========================================================
   HEADER
========================================================= */

header{
    background:#fff;
    border-bottom:1px solid #e9eee9;
    position:sticky;
    top:0;
    z-index:999;
}

.navbar{
    min-height:78px;
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:30px;
}

.logo{
    font-size:25px;
    font-weight:800;
    letter-spacing:-1px;
    color:#163d2e;
}

.logo span{
    color:#c58b37;
}

.nav-menu{
    display:flex;
    align-items:center;
    gap:28px;
    list-style:none;
    font-size:14px;
    font-weight:600;
}

.nav-menu > li{
    position:relative;
}

.nav-menu a{
    transition:.25s ease;
}

.nav-menu a:hover{
    color:#b47b2e;
}

.dropdown{
    position:absolute;
    top:35px;
    left:-15px;
    width:260px;
    background:#fff;
    border:1px solid #e7ebe7;
    box-shadow:0 18px 50px rgba(0,0,0,.10);
    padding:12px;
    border-radius:12px;
    opacity:0;
    visibility:hidden;
    transform:translateY(8px);
    transition:.25s ease;
}

.nav-menu li:hover .dropdown{
    opacity:1;
    visibility:visible;
    transform:translateY(0);
}

.dropdown a{
    display:block;
    padding:10px 12px;
    border-radius:8px;
}

.dropdown a:hover{
    background:#f2f7f3;
}

.nav-btn{
    background:#163f2f;
    color:#fff !important;
    padding:12px 19px;
    border-radius:7px;
}

.nav-btn:hover{
    background:#b98538;
}


/* =========================================================
   HERO
========================================================= */

.hero{
    background:
        radial-gradient(circle at 85% 20%, rgba(190,145,72,.12), transparent 30%),
        linear-gradient(180deg,#f5f8f4 0%,#fff 100%);
    padding:75px 0 80px;
}

.hero-grid{
    display:grid;
    grid-template-columns:1.05fr .95fr;
    align-items:center;
    gap:70px;
}

.trust{
    display:inline-flex;
    align-items:center;
    gap:8px;
    color:#173e2f;
    font-size:14px;
    font-weight:700;
    margin-bottom:18px;
}

.stars{
    color:#b88638;
    letter-spacing:2px;
}

.hero h1{
    font-family:Georgia, serif;
    font-size:clamp(42px,5vw,67px);
    line-height:1.04;
    letter-spacing:-2.5px;
    color:#153d2d;
    margin-bottom:22px;
}

.hero h1 span{
    color:#b17d35;
}

.hero-text{
    font-size:18px;
    max-width:640px;
    color:#526059;
    margin-bottom:28px;
}

.hero-buttons{
    display:flex;
    gap:13px;
    flex-wrap:wrap;
    margin-bottom:22px;
}

.btn{
    display:inline-flex;
    justify-content:center;
    align-items:center;
    padding:14px 22px;
    border-radius:7px;
    font-size:14px;
    font-weight:700;
    border:1px solid transparent;
    transition:.25s ease;
    cursor:pointer;
}

.btn-primary{
    background:#173f2f;
    color:#fff;
}

.btn-primary:hover{
    background:#b68134;
    transform:translateY(-2px);
}

.btn-outline{
    border-color:#173f2f;
    color:#173f2f;
    background:#fff;
}

.btn-outline:hover{
    background:#173f2f;
    color:#fff;
}

.hero-points{
    display:flex;
    flex-wrap:wrap;
    gap:17px;
    color:#53615b;
    font-size:13px;
}

.hero-points span::before{
    content:"✓";
    color:#b37f35;
    font-weight:bold;
    margin-right:6px;
}

.hero-card{
    background:#fff;
    border:1px solid #e0e7e1;
    border-radius:18px;
    padding:28px;
    box-shadow:0 25px 70px rgba(24,54,41,.12);
}

.hero-card-title{
    font-family:Georgia,serif;
    color:#183e2f;
    font-size:25px;
    margin-bottom:6px;
}

.hero-card-sub{
    color:#68746e;
    font-size:13px;
    margin-bottom:22px;
}


/* =========================================================
   FORM
========================================================= */

.form-group{
    margin-bottom:18px;
}

.form-group label{
    display:block;
    font-size:13px;
    font-weight:700;
    margin-bottom:7px;
    color:#304039;
}

input[type="text"],
input[type="email"],
input[type="url"],
select{
    width:100%;
    height:46px;
    padding:0 13px;
    border:1px solid #d8dfda;
    border-radius:7px;
    outline:none;
    background:#fff;
    color:#28352f;
}

input:focus,
select:focus{
    border-color:#638f7a;
    box-shadow:0 0 0 3px rgba(79,124,99,.10);
}

.website-field{
    display:none;
}

.upload-box{
    border:1.5px dashed #b8c8be;
    border-radius:10px;
    padding:25px;
    text-align:center;
    background:#f8fbf8;
    cursor:pointer;
    transition:.25s ease;
}

.upload-box:hover{
    border-color:#638f7a;
    background:#f2f8f3;
}

.upload-icon{
    width:44px;
    height:44px;
    border-radius:50%;
    background:#e5eee8;
    color:#28563f;
    display:flex;
    align-items:center;
    justify-content:center;
    margin:0 auto 10px;
    font-size:20px;
}

.upload-box strong{
    display:block;
    color:#263a31;
    font-size:14px;
}

.upload-box small{
    color:#7b8681;
    font-size:12px;
}

.file-input{
    display:none;
}

.style-options{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:8px;
}

.style-option{
    position:relative;
}

.style-option input{
    display:none;
}

.style-option label{
    display:block;
    padding:10px 5px;
    text-align:center;
    border:1px solid #dbe2dc;
    border-radius:7px;
    font-size:11px;
    cursor:pointer;
}

.style-option input:checked + label{
    border-color:#214d39;
    background:#eff6f1;
    color:#1b4b35;
    font-weight:700;
}

.form-note{
    color:#7c8581;
    font-size:11px;
    margin-top:10px;
    text-align:center;
}


/* =========================================================
   SECTION COMMON
========================================================= */

section{
    padding:90px 0;
}

.section-label{
    color:#b37f35;
    font-size:12px;
    font-weight:800;
    text-transform:uppercase;
    letter-spacing:2px;
    margin-bottom:10px;
}

.section-title{
    font-family:Georgia,serif;
    color:#173e2e;
    font-size:clamp(32px,4vw,48px);
    line-height:1.12;
    letter-spacing:-1.3px;
}

.section-desc{
    color:#68736e;
    max-width:650px;
    margin-top:14px;
}


/* =========================================================
   PORTFOLIO
========================================================= */

.portfolio{
    background:#fff;
}

.portfolio-head{
    display:flex;
    justify-content:space-between;
    align-items:end;
    gap:30px;
    margin-bottom:35px;
}

.portfolio-grid{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:18px;
}

.portfolio-card{
    border:1px solid #e5eae6;
    border-radius:12px;
    overflow:hidden;
    background:#fff;
    transition:.3s ease;
}

.portfolio-card:hover{
    transform:translateY(-5px);
    box-shadow:0 18px 40px rgba(0,0,0,.08);
}

.portfolio-img{
    height:245px;
    background:
        linear-gradient(145deg,#dfe7df,#f8f7ef);
    display:flex;
    justify-content:center;
    align-items:center;
    padding:25px;
}

.book-page{
    width:75%;
    height:88%;
    background:#fffdf6;
    box-shadow:0 8px 20px rgba(0,0,0,.12);
    padding:22px;
    font-family:Georgia,serif;
    color:#333;
}

.book-page .fake-title{
    font-size:15px;
    margin-bottom:15px;
    color:#23382e;
}

.fake-line{
    height:4px;
    background:#d8d5cb;
    margin:7px 0;
    border-radius:4px;
}

.portfolio-info{
    padding:17px;
}

.category{
    color:#a77b3d;
    font-size:11px;
    text-transform:uppercase;
    letter-spacing:1px;
    font-weight:700;
}

.portfolio-info h3{
    font-family:Georgia,serif;
    margin-top:4px;
    font-size:19px;
    color:#1d392d;
}


/* =========================================================
   CHANNELS
========================================================= */

.channels{
    background:#f5f7f4;
}

.channel-grid{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:15px;
    margin-top:35px;
}

.channel{
    background:#fff;
    border:1px solid #e3e9e4;
    border-radius:12px;
    padding:30px 20px;
    text-align:center;
    font-weight:800;
    color:#294437;
    font-size:19px;
}


/* =========================================================
   PRICING
========================================================= */

.pricing{
    background:#fff;
}

.pricing-head{
    text-align:center;
    max-width:680px;
    margin:0 auto 45px;
}

.pricing-tabs{
    display:flex;
    justify-content:center;
    gap:8px;
    margin:25px 0 35px;
}

.pricing-tabs button{
    border:1px solid #dbe2dd;
    background:#fff;
    padding:10px 16px;
    border-radius:30px;
    cursor:pointer;
    font-size:12px;
    font-weight:700;
}

.pricing-tabs button.active{
    background:#183f30;
    color:#fff;
    border-color:#183f30;
}

.pricing-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:20px;
    align-items:stretch;
}

.price-card{
    border:1px solid #dde4de;
    border-radius:14px;
    padding:30px;
    position:relative;
    background:#fff;
}

.price-card.popular{
    border:2px solid #1d503a;
    box-shadow:0 20px 50px rgba(30,71,52,.13);
    transform:translateY(-8px);
}

.badge{
    position:absolute;
    top:-14px;
    left:25px;
    background:#1c4b37;
    color:#fff;
    padding:6px 13px;
    border-radius:20px;
    font-size:10px;
    text-transform:uppercase;
    letter-spacing:1px;
    font-weight:800;
}

.price-card h3{
    font-family:Georgia,serif;
    font-size:26px;
    color:#183e2e;
}

.price{
    font-size:44px;
    color:#183e2e;
    font-weight:800;
    margin:8px 0;
}

.price-card > p{
    font-size:13px;
    color:#69746f;
    min-height:62px;
}

.features{
    list-style:none;
    margin:22px 0;
}

.features li{
    font-size:13px;
    color:#52605a;
    padding:8px 0;
    border-bottom:1px solid #edf0ed;
}

.features li::before{
    content:"✓";
    color:#b27e35;
    margin-right:9px;
    font-weight:bold;
}

.full-btn{
    width:100%;
}


/* =========================================================
   TESTIMONIAL
========================================================= */

.testimonials{
    background:#173d2e;
    color:#fff;
}

.testimonials .section-label{
    color:#d0a35d;
}

.testimonials .section-title{
    color:#fff;
}

.testimonials .section-desc{
    color:#bdc9c3;
}

.testimonial-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:18px;
    margin-top:40px;
}

.testimonial{
    background:#214a39;
    border:1px solid rgba(255,255,255,.10);
    padding:25px;
    border-radius:13px;
}

.quote{
    color:#d0a35d;
    font-size:30px;
}

.testimonial p{
    font-family:Georgia,serif;
    font-size:16px;
    line-height:1.65;
    margin:10px 0 25px;
}

.author{
    display:flex;
    align-items:center;
    gap:12px;
}

.avatar{
    width:40px;
    height:40px;
    background:#d3a45c;
    color:#173d2e;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    font-weight:800;
}

.author strong{
    display:block;
    font-size:13px;
}

.author small{
    color:#aebdb5;
}


/* =========================================================
   PROCESS
========================================================= */

.process{
    background:#f7f8f6;
}

.process-head{
    text-align:center;
    margin-bottom:45px;
}

.process-grid{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:20px;
}

.process-step{
    text-align:center;
    position:relative;
}

.process-number{
    width:55px;
    height:55px;
    margin:0 auto 17px;
    border-radius:50%;
    background:#1b4735;
    color:#fff;
    display:flex;
    align-items:center;
    justify-content:center;
    font-weight:800;
}

.process-step h3{
    font-family:Georgia,serif;
    color:#1a3c2e;
    margin-bottom:7px;
}

.process-step p{
    color:#68736e;
    font-size:13px;
}


/* =========================================================
   MANAGED DELIVERY
========================================================= */

.managed{
    background:#fff;
}

.managed-box{
    background:#f1f5f1;
    border-radius:20px;
    padding:55px;
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:50px;
    align-items:center;
}

.managed-list{
    list-style:none;
    margin-top:25px;
}

.managed-list li{
    margin:13px 0;
    color:#56645d;
}

.managed-list li::before{
    content:"✓";
    color:#a97936;
    font-weight:bold;
    margin-right:9px;
}

.managed-visual{
    min-height:300px;
    border-radius:15px;
    background:
        linear-gradient(135deg,#173d2e,#315c47);
    display:flex;
    align-items:center;
    justify-content:center;
    color:#fff;
    text-align:center;
    padding:30px;
}

.visual-book{
    width:170px;
    height:220px;
    background:#eee8d7;
    color:#244334;
    padding:30px 20px;
    box-shadow:20px 20px 40px rgba(0,0,0,.2);
    transform:rotate(-6deg);
    font-family:Georgia,serif;
    font-size:20px;
}


/* =========================================================
   FAQ
========================================================= */

.faq{
    background:#f8f9f7;
}

.faq-head{
    text-align:center;
    margin-bottom:35px;
}

.faq-list{
    max-width:850px;
    margin:auto;
}

.faq-item{
    background:#fff;
    border:1px solid #e1e7e2;
    margin-bottom:10px;
    border-radius:9px;
    overflow:hidden;
}

.faq-question{
    width:100%;
    border:0;
    background:#fff;
    padding:20px;
    text-align:left;
    font-weight:700;
    color:#263c32;
    cursor:pointer;
    display:flex;
    align-items:center;
    justify-content:space-between;
}

.faq-question span{
    font-size:20px;
    transition:.25s ease;
}

.faq-answer{
    max-height:0;
    overflow:hidden;
    transition:.3s ease;
}

.faq-answer p{
    padding:0 20px 20px;
    color:#68736e;
    font-size:14px;
}

.faq-item.active .faq-answer{
    max-height:250px;
}

.faq-item.active .faq-question span{
    transform:rotate(45deg);
}


/* =========================================================
   FINAL CTA
========================================================= */

.final-cta{
    background:#173d2e;
    color:#fff;
    text-align:center;
}

.final-cta .section-title{
    color:#fff;
    max-width:800px;
    margin:auto;
}

.final-cta p{
    max-width:650px;
    margin:18px auto 28px;
    color:#c2cec8;
}

.final-cta .btn-primary{
    background:#c18a3a;
}

.final-cta .btn-primary:hover{
    background:#d39c4e;
}


/* =========================================================
   SERVICES
========================================================= */

.services{
    background:#fff;
}

.services-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:18px;
    margin-top:35px;
}

.service-card{
    border:1px solid #e2e8e3;
    padding:25px;
    border-radius:12px;
    transition:.25s ease;
}

.service-card:hover{
    transform:translateY(-4px);
    box-shadow:0 15px 35px rgba(0,0,0,.07);
}

.service-price{
    color:#b07b34;
    font-size:13px;
    font-weight:800;
}

.service-card h3{
    font-family:Georgia,serif;
    color:#193d2f;
    margin:7px 0;
    font-size:22px;
}

.service-card p{
    color:#69756e;
    font-size:13px;
}


/* =========================================================
   FOOTER
========================================================= */

footer{
    background:#102d22;
    color:#d9e1dc;
    padding:50px 0 25px;
}

.footer-grid{
    display:grid;
    grid-template-columns:1.4fr 1fr 1fr 1fr;
    gap:35px;
}

.footer-logo{
    color:#fff;
    font-size:25px;
    font-weight:800;
}

.footer-logo span{
    color:#c18a3a;
}

footer h4{
    color:#fff;
    margin-bottom:15px;
}

footer a,
footer p{
    color:#aebbb4;
    font-size:13px;
    display:block;
    margin:7px 0;
}

footer a:hover{
    color:#fff;
}

.copyright{
    border-top:1px solid rgba(255,255,255,.10);
    margin-top:35px;
    padding-top:20px;
    text-align:center;
    color:#81928a;
    font-size:12px;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media(max-width:1000px){

    .nav-menu{
        gap:15px;
    }

    .hero-grid{
        grid-template-columns:1fr;
    }

    .portfolio-grid{
        grid-template-columns:repeat(2,1fr);
    }

    .channel-grid{
        grid-template-columns:repeat(2,1fr);
    }

    .pricing-grid{
        grid-template-columns:1fr;
        max-width:600px;
        margin:auto;
    }

    .price-card.popular{
        transform:none;
    }

    .testimonial-grid{
        grid-template-columns:1fr 1fr;
    }

    .process-grid{
        grid-template-columns:1fr 1fr;
        gap:35px;
    }

    .services-grid{
        grid-template-columns:1fr 1fr;
    }

    .footer-grid{
        grid-template-columns:1fr 1fr;
    }
}


@media(max-width:750px){

    .topbar-inner{
        justify-content:center;
        text-align:center;
    }

    .top-left{
        display:none;
    }

    .top-right{
        justify-content:center;
        gap:10px 18px;
    }

    .navbar{
        min-height:65px;
    }

    .nav-menu{
        display:none;
    }

    .hero{
        padding:55px 0;
    }

    .hero h1{
        font-size:43px;
    }

    .hero-text{
        font-size:16px;
    }

    section{
        padding:65px 0;
    }

    .portfolio-head{
        display:block;
    }

    .portfolio-head .btn{
        margin-top:20px;
    }

    .portfolio-grid{
        grid-template-columns:1fr;
    }

    .channel-grid{
        grid-template-columns:1fr 1fr;
    }

    .testimonial-grid{
        grid-template-columns:1fr;
    }

    .process-grid{
        grid-template-columns:1fr;
    }

    .managed-box{
        grid-template-columns:1fr;
        padding:30px;
    }

    .services-grid{
        grid-template-columns:1fr;
    }

    .footer-grid{
        grid-template-columns:1fr;
    }

    .style-options{
        grid-template-columns:1fr 1fr;
    }
}


@media(max-width:480px){

    .container{
        width:min(100% - 26px,1180px);
    }

    .hero h1{
        font-size:38px;
    }

    .hero-card{
        padding:20px;
    }

    .channel-grid{
        grid-template-columns:1fr;
    }

    .pricing-tabs{
        flex-wrap:wrap;
    }

    .managed-box{
        padding:22px;
    }
}
</style>
</head>


<body>


<!-- ======================================================
     TOP BAR
====================================================== -->

<div class="topbar">
    <div class="container topbar-inner">

        <div class="top-left">
            10,000+ books brought to market
        </div>

        <div class="top-right">
            <span>UK +44 7888 862764</span>
            <span>US +1 888 832 8969</span>
            <span>info@hmdpublishing.com</span>
        </div>

    </div>
</div>


<!-- ======================================================
     HEADER
====================================================== -->

<header>

    <div class="container navbar">

        <a href="/" class="logo">
            HMD<span>Publishing</span>
        </a>

        <ul class="nav-menu">

            <li>
                <a href="/services">Services ▾</a>

                <div class="dropdown">

                    <a href="/services/book-writing">Book Writing & Ghostwriting</a>
                    <a href="/services/editing">Editing Services</a>
                    <a href="/services/book-cover-design">Book Cover Design</a>
                    <a href="/services/book-formatting">Book Formatting</a>
                    <a href="/services/publishing">Publishing & Distribution</a>
                    <a href="/services/audiobook-production">Audiobook Production</a>
                    <a href="#">Amazon Advertising</a>

                </div>

            </li>

            <li><a href="#pricing">Pricing</a></li>
            <li><a href="/portfolio">Portfolio</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>

            <li>
                <a href="#upload" class="nav-btn">Get Started</a>
            </li>

        </ul>

    </div>

</header>


<!-- ======================================================
     HERO
====================================================== -->

<section class="hero">

    <div class="container hero-grid">

        <div>

            <div class="trust">
                <span class="stars">★★★★★</span>
                4.7 out of 5 on Trustpilot
            </div>

            <h1>
                Book formatting with
                <span>publisher polish.</span>
                Your first chapter, free.
            </h1>

            <p class="hero-text">
                Send your first chapter. We'll format your own pages
                and return a sample print PDF and Kindle EPUB within
                24 hours. Continue only if you like what you see.
            </p>

            <div class="hero-buttons">

                <a href="#upload" class="btn btn-primary">
                    Format my first chapter free
                </a>

                <a href="#pricing" class="btn btn-outline">
                    See packages from £147
                </a>

            </div>

            <div class="hero-points">
                <span>Back in 24 hrs</span>
                <span>Print + ebook sample</span>
                <span>No card details</span>
            </div>

        </div>


        <!-- FORM -->

        <div class="hero-card" id="upload">

            <h2 class="hero-card-title">
                Upload your first chapter
            </h2>

            <p class="hero-card-sub">
                One chapter, up to 5,000 words. No payment details.
            </p>

            <!-- Honeypot -->
            <input
                type="text"
                name="website"
                class="website-field"
                tabindex="-1"
                autocomplete="off"
            >

            <form
                action="{{ route('formatSample.submit') }}"
                method="POST"
                enctype="multipart/form-data"
                onsubmit="submitFormatSample(event)"
            >

                @csrf

                <div class="form-group">

                    <label>
                        Upload your chapter
                    </label>

                    <label class="upload-box">

                        <input
                            type="file"
                            name="file"
                            class="file-input"
                            accept=".docx"
                        >

                        <div class="upload-icon">
                            ↑
                        </div>

                        <strong>
                            Drop your chapter here or choose a file
                        </strong>

                        <small>
                            DOCX · 10 MB max
                        </small>

                    </label>

                </div>


                <div class="form-group">

                    <label>
                        Choose an interior direction
                    </label>

                    <div class="style-options">

                        <div class="style-option">
                            <input
                                type="radio"
                                id="classic"
                                name="style"
                                checked
                            >
                            <label for="classic">
                                Classic
                            </label>
                        </div>

                        <div class="style-option">
                            <input
                                type="radio"
                                id="modern"
                                name="style"
                            >
                            <label for="modern">
                                Modern
                            </label>
                        </div>

                        <div class="style-option">
                            <input
                                type="radio"
                                id="literary"
                                name="style"
                            >
                            <label for="literary">
                                Literary
                            </label>
                        </div>

                        <div class="style-option">
                            <input
                                type="radio"
                                id="unsure"
                                name="style"
                            >
                            <label for="unsure">
                                Not sure
                            </label>
                        </div>

                    </div>

                </div>


                <div class="form-group">

                    <label>
                        Where should we send the files?
                    </label>

                    <input
                        type="email"
                        name="email"
                        placeholder="you@example.com"
                        required

                    >

                </div>


                <button
                    type="submit"
                    class="btn btn-primary full-btn"
                    id="formatSampleBtn"
                >
                    Send my free chapter
                </button>

                <p class="form-note" id="formatSampleStatus">
                    Confidential · used only to prepare your sample ·
                    no card details.
                </p>

            </form>

        </div>

    </div>

</section>



<!-- ======================================================
     PORTFOLIO
====================================================== -->

<section class="portfolio" id="portfolio">

    <div class="container">

        <div class="portfolio-head">

            <div>
                <div class="section-label">
                    Interior portfolio
                </div>

                <h2 class="section-title">
                    This is what the inside<br>
                    of your book looks like.
                </h2>

                <p class="section-desc">
                    Real interiors from books we typeset — fiction,
                    workbooks, children's, business and devotionals.
                </p>
            </div>

            <a href="/portfolio" class="btn btn-outline">
                View the book formatting portfolio
            </a>

        </div>


        <div class="portfolio-grid">


            <div class="portfolio-card">

                <div class="portfolio-img">

                    <div class="book-page">

                        <div class="fake-title">
                            THE FAITH JOURNAL
                        </div>

                        <div class="fake-line"></div>
                        <div class="fake-line"></div>
                        <div class="fake-line"></div>
                        <div class="fake-line"></div>
                        <div class="fake-line"></div>

                    </div>

                </div>

                <div class="portfolio-info">

                    <div class="category">
                        Workbook
                    </div>

                    <h3>
                        The Faith Journal
                    </h3>

                </div>

            </div>


            <div class="portfolio-card">

                <div class="portfolio-img">

                    <div class="book-page">

                        <div class="fake-title">
                            CONFIDENCE STORIES
                        </div>

                        <div class="fake-line"></div>
                        <div class="fake-line"></div>
                        <div class="fake-line"></div>
                        <div class="fake-line"></div>

                    </div>

                </div>

                <div class="portfolio-info">

                    <div class="category">
                        Children's
                    </div>

                    <h3>
                        Confidence Stories for Shy Girls
                    </h3>

                </div>

            </div>


            <div class="portfolio-card">

                <div class="portfolio-img">

                    <div class="book-page">

                        <div class="fake-title">
                            TURKS AND CHAOS
                        </div>

                        <div class="fake-line"></div>
                        <div class="fake-line"></div>
                        <div class="fake-line"></div>
                        <div class="fake-line"></div>

                    </div>

                </div>

                <div class="portfolio-info">

                    <div class="category">
                        Narrative Nonfiction
                    </div>

                    <h3>
                        Turks and Chaos
                    </h3>

                </div>

            </div>


            <div class="portfolio-card">

                <div class="portfolio-img">

                    <div class="book-page">

                        <div class="fake-title">
                            NAVIGATING
                        </div>

                        <div class="fake-line"></div>
                        <div class="fake-line"></div>
                        <div class="fake-line"></div>
                        <div class="fake-line"></div>

                    </div>

                </div>

                <div class="portfolio-info">

                    <div class="category">
                        Self-Help
                    </div>

                    <h3>
                        Navigating Special Education
                    </h3>

                </div>

            </div>


            <div class="portfolio-card">

                <div class="portfolio-img">

                    <div class="book-page">

                        <div class="fake-title">
                            OUTSIDE DOGS
                        </div>

                        <div class="fake-line"></div>
                        <div class="fake-line"></div>
                        <div class="fake-line"></div>

                    </div>

                </div>

                <div class="portfolio-info">

                    <div class="category">
                        Literary Fiction
                    </div>

                    <h3>
                        Outside Dogs
                    </h3>

                </div>

            </div>


            <div class="portfolio-card">

                <div class="portfolio-img">

                    <div class="book-page">

                        <div class="fake-title">
                            NAMES OF GOD
                        </div>

                        <div class="fake-line"></div>
                        <div class="fake-line"></div>
                        <div class="fake-line"></div>

                    </div>

                </div>

                <div class="portfolio-info">

                    <div class="category">
                        Devotional
                    </div>

                    <h3>
                        Names of God Devotional
                    </h3>

                </div>

            </div>


            <div class="portfolio-card">

                <div class="portfolio-img">

                    <div class="book-page">

                        <div class="fake-title">
                            ART OF TASTING
                        </div>

                        <div class="fake-line"></div>
                        <div class="fake-line"></div>
                        <div class="fake-line"></div>

                    </div>

                </div>

                <div class="portfolio-info">

                    <div class="category">
                        Practical How-To
                    </div>

                    <h3>
                        The Art of Tasting Whiskey
                    </h3>

                </div>

            </div>


            <div class="portfolio-card">

                <div class="portfolio-img">

                    <div class="book-page">

                        <div class="fake-title">
                            ENGINEER THE WIN
                        </div>

                        <div class="fake-line"></div>
                        <div class="fake-line"></div>
                        <div class="fake-line"></div>

                    </div>

                </div>

                <div class="portfolio-info">

                    <div class="category">
                        Business
                    </div>

                    <h3>
                        Engineer the Win
                    </h3>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ======================================================
     CHANNELS
====================================================== -->

<section class="channels">

    <div class="container">

        <div class="section-label">
            Publishing channels
        </div>

        <h2 class="section-title">
            Build the book once.<br>
            Release it everywhere.
        </h2>

        <p class="section-desc">
            Files, metadata, and distribution handled across
            the retail channels that matter.
        </p>


        <div class="channel-grid">

            <div class="channel">
                Amazon KDP
            </div>

            <div class="channel">
                IngramSpark
            </div>

            <div class="channel">
                Apple Books
            </div>

            <div class="channel">
                Kobo
            </div>

        </div>

    </div>

</section>



<!-- ======================================================
     PRICING
====================================================== -->

<section class="pricing" id="pricing">

    <div class="container">

        <div class="pricing-head">

            <div class="section-label">
                Transparent pricing
            </div>

            <h2 class="section-title">
                Three tiers. Fixed prices.
            </h2>

            <p class="section-desc" style="margin-left:auto;margin-right:auto;">
                Choose the level of formatting your manuscript needs.
            </p>

            <div class="pricing-tabs">

                <button class="active">
                    Clean & Simple
                </button>

                <button>
                    Enhanced Layout
                </button>

                <button>
                    Complex Design
                </button>

            </div>

        </div>


        <div class="pricing-grid">


            <!-- BASIC -->

            <div class="price-card">

                <h3>
                    Clean & Simple
                </h3>

                <div class="price">
                    £147
                </div>

                <p>
                    Up to 25k words, 3 revisions.
                    Best for short fiction, novellas
                    and simple text-only books.
                </p>

                <ul class="features">

                    <li>Clean layout styling</li>
                    <li>Page breaks & headers</li>
                    <li>Paragraph formatting</li>
                    <li>Clickable TOC</li>
                    <li>Font + margin setup</li>
                    <li>Chapter breaks</li>
                    <li>PDF + EPUB delivery</li>
                    <li>KDP & IngramSpark ready</li>
                    <li>3 revisions</li>

                </ul>

                <a href="/services/book-formatting/checkout?package=clean" class="btn btn-primary full-btn">
                    Order Now
                </a>

            </div>


            <!-- STANDARD -->

            <div class="price-card popular">

                <div class="badge">
                    Most popular
                </div>

                <h3>
                    Enhanced Layout
                </h3>

                <div class="price">
                    £227
                </div>

                <p>
                    Up to 50k words, 3 revisions.
                    Best for full-length novels with
                    light design elements.
                </p>

                <ul class="features">

                    <li>Everything in Basic</li>
                    <li>Chapter styling</li>
                    <li>Enhanced TOC</li>
                    <li>Section headings</li>
                    <li>3 image placements</li>
                    <li>Scene breaks & quotes</li>
                    <li>Print trim adjustments</li>
                    <li>PDF + EPUB delivery</li>
                    <li>3 revisions</li>

                </ul>

                <a href="/services/book-formatting/checkout?package=enhanced" class="btn btn-primary full-btn">
                    Order Now
                </a>

            </div>


            <!-- COMPLEX -->

            <div class="price-card">

                <h3>
                    Complex Design
                </h3>

                <div class="price">
                    £377
                </div>

                <p>
                    Up to 60k words, 3 revisions.
                    Best for nonfiction, workbooks
                    and design-rich formats.
                </p>

                <ul class="features">

                    <li>Everything in Standard</li>
                    <li>Sidebars & callouts</li>
                    <li>Tables & bullet styling</li>
                    <li>Custom chapter templates</li>
                    <li>Advanced font styling</li>
                    <li>Visual hierarchy tuning</li>
                    <li>KDP & IngramSpark ready</li>
                    <li>PDF + EPUB delivery</li>
                    <li>3 revisions</li>

                </ul>

                <a href="/services/book-formatting/checkout?package=complex" class="btn btn-primary full-btn">
                    Order Now
                </a>

            </div>

        </div>


        <p style="
            text-align:center;
            color:#68736e;
            font-size:12px;
            margin-top:25px;
        ">
            Retailer-ready file promise: If KDP or IngramSpark flags
            a formatting issue caused by our delivered file,
            we correct it free.
        </p>

    </div>

</section>



<!-- ======================================================
     TESTIMONIALS
====================================================== -->

<section class="testimonials">

    <div class="container">

        <div class="section-label">
            Verified on Fiverr
        </div>

        <h2 class="section-title">
            What formatting clients say
        </h2>

        <p class="section-desc">
            Novels, memoirs, academic titles and workbooks —
            typeset to a standard authors come back for.
        </p>


        <div class="testimonial-grid">


            <div class="testimonial">

                <div class="quote">“</div>

                <p>
                    My 400-page fiction had complex formatting
                    needs — maps, family trees, and historical notes.
                    HMD handled it all beautifully.
                </p>

                <div class="author">

                    <div class="avatar">
                        B
                    </div>

                    <div>
                        <strong>
                            Blanca De La Rosa
                        </strong>

                        <small>
                            Author
                        </small>
                    </div>

                </div>

            </div>


            <div class="testimonial">

                <div class="quote">“</div>

                <p>
                    I write technical guides with lots of tables
                    and diagrams. HMD delivered in 5 days and
                    it's perfect.
                </p>

                <div class="author">

                    <div class="avatar">
                        J
                    </div>

                    <div>
                        <strong>
                            John J. Scarpino
                        </strong>

                        <small>
                            Author
                        </small>
                    </div>

                </div>

            </div>


            <div class="testimonial">

                <div class="quote">“</div>

                <p>
                    The 24-hour rush service saved my launch.
                    Every chapter looks crisp and the ebook works
                    flawlessly on all devices.
                </p>

                <div class="author">

                    <div class="avatar">
                        P
                    </div>

                    <div>
                        <strong>
                            Peter Achirem
                        </strong>

                        <small>
                            Author
                        </small>
                    </div>

                </div>

            </div>


        </div>

    </div>

</section>



<!-- ======================================================
     PROCESS
====================================================== -->

<section class="process">

    <div class="container">

        <div class="process-head">

            <div class="section-label">
                Process
            </div>

            <h2 class="section-title">
                Approve the interior style<br>
                before full production begins.
            </h2>

        </div>


        <div class="process-grid">


            <div class="process-step">

                <div class="process-number">
                    1
                </div>

                <h3>
                    Submission
                </h3>

                <p>
                    Send us your final, edited manuscript
                    and design preferences.
                </p>

            </div>


            <div class="process-step">

                <div class="process-number">
                    2
                </div>

                <h3>
                    Design Sample
                </h3>

                <p>
                    We create a sample chapter layout
                    for your approval.
                </p>

            </div>


            <div class="process-step">

                <div class="process-number">
                    3
                </div>

                <h3>
                    Full Layout
                </h3>

                <p>
                    We format the entire book according
                    to the approved style.
                </p>

            </div>


            <div class="process-step">

                <div class="process-number">
                    4
                </div>

                <h3>
                    Final Review
                </h3>

                <p>
                    You review the proofs and we make
                    any necessary adjustments.
                </p>

            </div>


        </div>

    </div>

</section>



<!-- ======================================================
     MANAGED DELIVERY
====================================================== -->

<section class="managed">

    <div class="container">

        <div class="managed-box">

            <div>

                <div class="section-label">
                    Managed delivery
                </div>

                <h2 class="section-title">
                    One coordinated workflow
                    from manuscript to launch.
                </h2>

                <p class="section-desc">
                    One coordinated workflow replaces vendor
                    handoffs, duplicated feedback, and platform
                    admin that usually slow a book launch down.
                </p>


                <ul class="managed-list">

                    <li>
                        One team coordinating the production workflow
                    </li>

                    <li>
                        Print-ready PDF and reflowable EPUB
                    </li>

                    <li>
                        Professional typography and layout
                    </li>

                    <li>
                        Retailer-ready delivery
                    </li>

                </ul>

            </div>


            <div class="managed-visual">

                <div class="visual-book">

                    BOOK<br>
                    FORMATTING

                    <br><br>

                    <small>
                        Publisher-quality interiors
                    </small>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ======================================================
     FAQ
====================================================== -->

<section class="faq">

    <div class="container">

        <div class="faq-head">

            <div class="section-label">
                FAQ
            </div>

            <h2 class="section-title">
                Questions authors usually ask
                before they commit.
            </h2>

            <p class="section-desc" style="margin-left:auto;margin-right:auto;">
                Clear answers on timeline, scope, rights,
                revisions, and what happens after checkout.
            </p>

        </div>


        <div class="faq-list">


            <div class="faq-item">

                <button class="faq-question">

                    How much do book formatting services cost?

                    <span>+</span>

                </button>

                <div class="faq-answer">

                    <p>
                        Book formatting services start at £147.
                        Your exact package depends on word count,
                        trim size, output formats and layout complexity.
                    </p>

                </div>

            </div>


            <div class="faq-item">

                <button class="faq-question">

                    What is included in professional book formatting?

                    <span>+</span>

                </button>

                <div class="faq-answer">

                    <p>
                        Professional book formatting includes
                        professional typesetting, page-by-page
                        quality control, print-ready PDF,
                        reflowable EPUB, clickable contents,
                        professional typography and revisions.
                    </p>

                </div>

            </div>


            <div class="faq-item">

                <button class="faq-question">

                    What is the difference between ebook and print formatting?

                    <span>+</span>

                </button>

                <div class="faq-answer">

                    <p>
                        Ebook formatting produces a reflowable EPUB
                        that adapts to screen and reader settings.
                        Print formatting produces a fixed-layout PDF
                        built around the selected trim size, margins,
                        headers and page numbering.
                    </p>

                </div>

            </div>


            <div class="faq-item">

                <button class="faq-question">

                    Is the book ready for KDP and IngramSpark?

                    <span>+</span>

                </button>

                <div class="faq-answer">

                    <p>
                        Yes. The delivered PDF and EPUB can be prepared
                        for KDP, IngramSpark and other major ebook channels.
                    </p>

                </div>

            </div>


            <div class="faq-item">

                <button class="faq-question">

                    What do you need for an exact book formatting quote?

                    <span>+</span>

                </button>

                <div class="faq-answer">

                    <p>
                        You can provide a final edited manuscript,
                        word count, required print trim size,
                        output formats and details about images,
                        tables, footnotes or other layout elements.
                    </p>

                </div>

            </div>


            <div class="faq-item">

                <button class="faq-question">

                    How long does professional book formatting take?

                    <span>+</span>

                </button>

                <div class="faq-answer">

                    <p>
                        Typical turnaround varies by package.
                        Clean & Simple can take around 5 days,
                        Enhanced Layout around 7 days and Complex
                        Design around 10 days.
                    </p>

                </div>

            </div>


        </div>

    </div>

</section>



<!-- ======================================================
     FINAL CTA
====================================================== -->

<section class="final-cta">

    <div class="container">

        <div class="section-label">
            Free first chapter
        </div>

        <h2 class="section-title">
            See your own pages before you decide.
        </h2>

        <p>
            Send one DOCX. We'll return a sample print PDF
            and Kindle EPUB. No card details and no obligation
            to continue.
        </p>

        <a href="#upload" class="btn btn-primary">
            Send my first chapter
        </a>

    </div>

</section>



<!-- ======================================================
     SERVICES
====================================================== -->

<section class="services">

    <div class="container">

        <div class="section-label">
            Continue the stack
        </div>

        <h2 class="section-title">
            Add the next layer only when
            it supports the launch plan.
        </h2>

        <p class="section-desc">
            These adjacent services help once the book itself
            is already structurally sound and market-ready.
        </p>


        <div class="services-grid">


            <a href="/services/book-cover-design" class="service-card">

                <div class="service-price">
                    From £127
                </div>

                <h3>
                    Cover Design
                </h3>

                <p>
                    Genre-matched covers for ebook and print.
                </p>

            </a>


            <a href="/services/editing" class="service-card">

                <div class="service-price">
                    From £117
                </div>

                <h3>
                    Book Editing
                </h3>

                <p>
                    Professional manuscript editing and proofreading.
                </p>

            </a>


            <div class="service-card">

                <div class="service-price">
                    From £497
                </div>

                <h3>
                    Illustrations
                </h3>

                <p>
                    Custom artwork shaped around your story and audience.
                </p>

            </div>


            <a href="/services/publishing" class="service-card">

                <div class="service-price">
                    From £297
                </div>

                <h3>
                    Publishing
                </h3>

                <p>
                    KDP and IngramSpark publishing support.
                </p>

            </a>


            <div class="service-card">

                <div class="service-price">
                    From £467
                </div>

                <h3>
                    Amazon Ads
                </h3>

                <p>
                    Managed advertising for published books.
                </p>

            </div>


            <div class="service-card">

                <div class="service-price">
                    From £1,050
                </div>

                <h3>
                    Audiobook Production
                </h3>

                <p>
                    Narration, production and retailer-ready audio files.
                </p>

            </div>


        </div>

    </div>

</section>



<!-- ======================================================
     FOOTER
====================================================== -->

<footer>

    <div class="container">

        <div class="footer-grid">


            <div>

                <div class="footer-logo">
                    HMD<span>Publishing</span>
                </div>

                <p style="margin-top:15px;">
                    Professional publishing support for
                    independent authors.
                </p>

                <p>
                    10,000+ books brought to market.
                </p>

            </div>


            <div>

                <h4>
                    Services
                </h4>

                <a href="/services/editing">
                    Editing
                </a>

                <a href="/services/book-cover-design">
                    Cover Design
                </a>

                <a href="/services/book-formatting">
                    Book Formatting
                </a>

                <a href="/services/publishing">
                    Publishing
                </a>

            </div>


            <div>

                <h4>
                    Company
                </h4>

                <a href="/about">
                    About
                </a>

                <a href="/portfolio">
                    Portfolio
                </a>

                <a href="/contact">
                    Contact
                </a>

                <a href="#">
                    Privacy Policy
                </a>

            </div>


            <div>

                <h4>
                    Contact
                </h4>

                <p>
                    UK +44 7888 862764
                </p>

                <p>
                    US +1 888 832 8969
                </p>

                <p>
                    info@hmdpublishing.com
                </p>

            </div>


        </div>


        <div class="copyright">

            © 2026 HMD Publishing. All rights reserved.

        </div>

    </div>

</footer>



<!-- ======================================================
     JAVASCRIPT
====================================================== -->

<script>

/* ================================
   FAQ ACCORDION
================================ */

const faqItems = document.querySelectorAll(".faq-item");

faqItems.forEach(item => {

    const question = item.querySelector(".faq-question");

    question.addEventListener("click", () => {

        faqItems.forEach(other => {

            if(other !== item){
                other.classList.remove("active");
            }

        });

        item.classList.toggle("active");

    });

});


/* ================================
   FILE UPLOAD UI
================================ */

const fileInput = document.querySelector(".file-input");
const uploadBox = document.querySelector(".upload-box");
const uploadStrong = uploadBox.querySelector("strong");

fileInput.addEventListener("change", function(){

    if(this.files.length > 0){

        uploadStrong.textContent =
            this.files[0].name;

    }

});


/* ================================
   FORM SUBMIT
================================ */

function submitFormatSample(event) {
    event.preventDefault();

    const form = event.target;
    const button = document.getElementById("formatSampleBtn");
    const status = document.getElementById("formatSampleStatus");
    const originalText = button.innerText;
    const token = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
    const email = form.querySelector('input[name="email"]').value;

    if (!email) {
        status.innerText = "Please enter your email address.";
        status.style.color = "#b45309";
        return;
    }

    button.innerText = "Sending…";
    button.disabled = true;

    fetch(form.action, {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": token,
            "Accept": "application/json"
        },
        body: new FormData(form)
    })
    .then(function(response) {
        return response.json().then(function(data) {
            return { ok: response.ok, data: data };
        });
    })
    .then(function(result) {
        if (result.ok) {
            button.innerText = "Sample received ✓";
            button.style.background = "#2e7d5b";
            form.reset();
            if (status) {
                status.innerText = "Thanks — we'll email your free sample within 24 hours.";
                status.style.color = "#2e7d5b";
            }
        } else {
            button.innerText = "Please check the form";
            button.style.background = "#b3261e";
        }
        setTimeout(function() {
            button.innerText = originalText;
            button.style.background = "#173f2f";
            button.disabled = false;
        }, 3000);
    })
    .catch(function() {
        button.innerText = "Something went wrong";
        button.style.background = "#b3261e";
        setTimeout(function() {
            button.innerText = originalText;
            button.style.background = "#173f2f";
            button.disabled = false;
        }, 3000);
    });
}


/* ================================
   PRICING TAB DEMO
================================ */

const pricingTabs =
    document.querySelectorAll(".pricing-tabs button");

pricingTabs.forEach(button => {

    button.addEventListener("click", () => {

        pricingTabs.forEach(btn =>
            btn.classList.remove("active")
        );

        button.classList.add("active");

    });

});

</script>

</body>
</html>