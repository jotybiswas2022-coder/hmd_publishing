<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Children's Book Formatting | HMD Publishing</title>
<meta name="csrf-token" content="{{ csrf_token() }}">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

html{
    scroll-behavior:smooth;
}

body{
    font-family:Arial, Helvetica, sans-serif;
    color:#18382b;
    background:#fff;
    line-height:1.6;
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

img{
    max-width:100%;
    display:block;
}

.container{
    width:min(1180px, calc(100% - 40px));
    margin:auto;
}


/* =====================================================
   TOP BAR
===================================================== */

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

.topbar-right{
    display:flex;
    gap:25px;
    flex-wrap:wrap;
}


/* =====================================================
   HEADER
===================================================== */

header{
    background:#fff;
    border-bottom:1px solid #e7ebe7;
    position:sticky;
    top:0;
    z-index:999;
}

.navbar{
    min-height:78px;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.logo{
    font-family:Georgia,serif;
    font-size:25px;
    font-weight:700;
    color:#173d2e;
}

.logo span{
    color:#bd8738;
}

.nav{
    display:flex;
    align-items:center;
    gap:27px;
    font-size:14px;
    font-weight:600;
}

.nav a{
    transition:.25s;
}

.nav a:hover{
    color:#b17c34;
}

.services{
    position:relative;
}

.services-menu{
    position:absolute;
    top:28px;
    left:-15px;
    width:270px;
    padding:12px;
    background:#fff;
    border:1px solid #e1e7e2;
    border-radius:10px;
    box-shadow:0 18px 45px rgba(0,0,0,.10);

    opacity:0;
    visibility:hidden;
    transform:translateY(8px);
    transition:.25s;
}

.services:hover .services-menu{
    opacity:1;
    visibility:visible;
    transform:translateY(0);
}

.services-menu a{
    display:block;
    padding:10px 12px;
    border-radius:7px;
}

.services-menu a:hover{
    background:#f1f6f2;
}


/* =====================================================
   HERO
===================================================== */

.hero{
    padding:72px 0 85px;

    background:
        radial-gradient(
            circle at 85% 20%,
            rgba(190,145,72,.13),
            transparent 28%
        ),
        linear-gradient(
            180deg,
            #f5f8f4 0%,
            #ffffff 100%
        );
}

.hero-grid{
    display:grid;
    grid-template-columns:1.05fr .95fr;
    gap:70px;
    align-items:center;
}

.trust{
    display:flex;
    align-items:center;
    gap:9px;
    font-size:13px;
    font-weight:700;
    margin-bottom:18px;
    color:#244937;
}

.stars{
    color:#b8893f;
    letter-spacing:2px;
}

.hero h1{
    font-family:Georgia,serif;
    font-size:clamp(42px,5vw,65px);
    line-height:1.05;
    letter-spacing:-2.5px;
    color:#163d2d;
    margin-bottom:20px;
}

.hero h1 span{
    color:#b17c35;
}

.hero-description{
    max-width:650px;
    font-size:17px;
    color:#637069;
    margin-bottom:27px;
}

.hero-actions{
    display:flex;
    gap:12px;
    flex-wrap:wrap;
    margin-bottom:23px;
}

.btn{
    display:inline-flex;
    align-items:center;
    justify-content:center;
    border:1px solid transparent;
    border-radius:7px;
    padding:13px 21px;
    font-size:13px;
    font-weight:700;
    cursor:pointer;
    transition:.25s;
}

.btn-primary{
    background:#173f2e;
    color:#fff;
}

.btn-primary:hover{
    background:#b27e35;
    transform:translateY(-2px);
}

.btn-outline{
    border-color:#173f2e;
    color:#173f2e;
    background:#fff;
}

.btn-outline:hover{
    background:#173f2e;
    color:#fff;
}

.hero-features{
    display:flex;
    flex-wrap:wrap;
    gap:16px;
    font-size:12px;
    color:#596760;
}

.hero-features span::before{
    content:"✓";
    color:#b17c34;
    font-weight:bold;
    margin-right:6px;
}


/* =====================================================
   QUOTE CARD
===================================================== */

.quote-card{
    background:#fff;
    border:1px solid #dfe6e0;
    border-radius:17px;
    padding:29px;
    box-shadow:0 25px 70px rgba(22,61,45,.12);
}

.quote-card h2{
    font-family:Georgia,serif;
    font-size:25px;
    color:#173d2d;
    margin-bottom:5px;
}

.quote-card > p{
    font-size:13px;
    color:#748079;
    margin-bottom:22px;
}

.step-label{
    font-size:11px;
    color:#8a938e;
    font-weight:700;
    margin-bottom:16px;
}

.form-group{
    margin-bottom:17px;
}

.form-group label{
    display:block;
    font-size:12px;
    font-weight:700;
    color:#30443a;
    margin-bottom:7px;
}

input,
select{
    width:100%;
    height:46px;
    padding:0 13px;
    border:1px solid #d6ded8;
    border-radius:7px;
    background:#fff;
    outline:none;
    color:#273a31;
}

input:focus,
select:focus{
    border-color:#507d65;
    box-shadow:0 0 0 3px rgba(53,103,76,.08);
}

.honeypot{
    display:none;
}

.quote-note{
    text-align:center;
    color:#7b8580;
    font-size:10px;
    margin-top:10px;
}


/* =====================================================
   WHAT YOU RECEIVE
===================================================== */

.receive{
    padding:90px 0;
}

.section-label{
    color:#b17d35;
    font-size:11px;
    font-weight:800;
    letter-spacing:2px;
    text-transform:uppercase;
    margin-bottom:9px;
}

.section-title{
    font-family:Georgia,serif;
    font-size:clamp(32px,4vw,48px);
    line-height:1.12;
    letter-spacing:-1.5px;
    color:#173d2d;
}

.section-description{
    color:#68746e;
    max-width:650px;
    margin-top:13px;
}

.receive-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:20px;
    margin-top:38px;
}

.receive-card{
    border:1px solid #e0e7e1;
    border-radius:13px;
    overflow:hidden;
    background:#fff;
}

.receive-image{
    height:280px;
    padding:30px;
    display:flex;
    align-items:center;
    justify-content:center;

    background:
        linear-gradient(
            135deg,
            #dfe9df,
            #f8f1df
        );
}

.mock-spread{
    width:80%;
    height:82%;
    display:grid;
    grid-template-columns:1fr 1fr;
    box-shadow:0 12px 30px rgba(0,0,0,.15);
}

.mock-page{
    position:relative;
    overflow:hidden;
    padding:23px;
    background:#f6e9c7;
}

.mock-page:first-child{
    background:#b9d7c1;
}

.mock-circle{
    width:95px;
    height:95px;
    border-radius:50%;
    background:#d49b58;
    position:absolute;
    top:35px;
    right:20px;
}

.mock-title{
    position:absolute;
    bottom:35px;
    left:20px;
    font-family:Georgia,serif;
    font-size:16px;
    color:#294333;
    font-weight:bold;
}

.mock-text{
    height:5px;
    background:#7d8b7f;
    margin:8px 0;
    border-radius:5px;
}

.receive-info{
    padding:21px;
}

.receive-info h3{
    font-family:Georgia,serif;
    color:#193d2e;
    font-size:20px;
    margin-bottom:6px;
}

.receive-info p{
    color:#6c7771;
    font-size:13px;
}

.receive-list{
    list-style:none;
    margin-top:12px;
}

.receive-list li{
    font-size:12px;
    color:#59665f;
    padding:4px 0;
}

.receive-list li::before{
    content:"✓";
    color:#a97834;
    font-weight:bold;
    margin-right:7px;
}


/* =====================================================
   TRUST / TESTIMONIAL
===================================================== */

.testimonials{
    background:#173f2e;
    color:#fff;
    padding:85px 0;
}

.testimonials .section-label{
    color:#d0a25c;
}

.testimonials .section-title{
    color:#fff;
}

.testimonials .section-description{
    color:#bdc9c2;
}

.rating{
    margin-top:20px;
    color:#d0a25c;
    font-size:15px;
    letter-spacing:2px;
}

.rating-text{
    color:#bdc9c2;
    font-size:12px;
    margin-left:7px;
}

.testimonial-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:17px;
    margin-top:35px;
}

.testimonial{
    background:#214b39;
    border:1px solid rgba(255,255,255,.1);
    padding:24px;
    border-radius:12px;
}

.quote{
    color:#d0a25c;
    font-size:30px;
}

.testimonial p{
    font-family:Georgia,serif;
    font-size:15px;
    line-height:1.65;
    margin:7px 0 20px;
}

.author{
    display:flex;
    align-items:center;
    gap:10px;
}

.author-avatar{
    width:39px;
    height:39px;
    border-radius:50%;
    display:flex;
    justify-content:center;
    align-items:center;
    background:#d0a25c;
    color:#183f2e;
    font-weight:bold;
}

.author strong{
    display:block;
    font-size:12px;
}

.author small{
    color:#afbeb6;
    font-size:11px;
}


/* =====================================================
   REAL BOOK SHOWCASE
===================================================== */

.showcase{
    padding:90px 0;
}

.showcase-grid{
    display:grid;
    grid-template-columns:.9fr 1.1fr;
    gap:55px;
    align-items:center;
}

.showcase-visual{
    min-height:430px;
    border-radius:18px;
    padding:30px;
    background:#f1f4ef;
    display:flex;
    align-items:center;
    justify-content:center;
}

.big-book{
    width:330px;
    height:360px;
    background:
        linear-gradient(
            135deg,
            #d9e6d5,
            #f7e6b7
        );
    position:relative;
    box-shadow:18px 22px 45px rgba(0,0,0,.17);
    transform:rotate(-2deg);
    padding:30px;
}

.big-book::after{
    content:"";
    position:absolute;
    right:-12px;
    top:12px;
    width:12px;
    height:330px;
    background:#d6c79f;
}

.big-book-title{
    font-family:Georgia,serif;
    font-size:28px;
    font-weight:bold;
    color:#254432;
    position:absolute;
    bottom:50px;
    left:30px;
    right:30px;
}

.big-book-sub{
    font-size:11px;
    color:#5e6e62;
    position:absolute;
    bottom:27px;
    left:30px;
}

.showcase-content p{
    color:#69756e;
    margin-top:15px;
}

.showcase-points{
    list-style:none;
    margin-top:25px;
}

.showcase-points li{
    padding:8px 0;
    color:#59665f;
    font-size:13px;
}

.showcase-points li::before{
    content:"✓";
    color:#b07d35;
    font-weight:bold;
    margin-right:8px;
}


/* =====================================================
   PUBLISHING CHANNELS
===================================================== */

.channels{
    background:#f6f8f5;
    padding:75px 0;
}

.channel-grid{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:15px;
    margin-top:32px;
}

.channel{
    background:#fff;
    border:1px solid #e1e7e2;
    border-radius:12px;
    padding:28px 15px;
    text-align:center;
    font-weight:800;
    color:#294638;
    font-size:17px;
}


/* =====================================================
   PRICING
===================================================== */

.pricing{
    padding:90px 0;
}

.pricing-head{
    text-align:center;
    max-width:720px;
    margin:auto;
}

.pricing-head .section-description{
    margin-left:auto;
    margin-right:auto;
}

.pricing-tabs{
    display:flex;
    justify-content:center;
    gap:8px;
    margin:28px 0 38px;
    flex-wrap:wrap;
}

.pricing-tab{
    border:1px solid #dbe2dc;
    background:#fff;
    color:#536158;
    padding:9px 15px;
    border-radius:25px;
    font-size:11px;
    font-weight:700;
    cursor:pointer;
}

.pricing-tab.active{
    background:#183f2e;
    color:#fff;
    border-color:#183f2e;
}

.pricing-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:20px;
    align-items:stretch;
}

.price-card{
    border:1px solid #dfe5e0;
    border-radius:14px;
    padding:29px;
    background:#fff;
    position:relative;
}

.price-card.popular{
    border:2px solid #214f3a;
    box-shadow:0 20px 50px rgba(24,61,45,.12);
    transform:translateY(-7px);
}

.popular-badge{
    position:absolute;
    left:25px;
    top:-14px;
    background:#1d4b37;
    color:#fff;
    border-radius:20px;
    padding:6px 13px;
    font-size:10px;
    text-transform:uppercase;
    letter-spacing:1px;
    font-weight:bold;
}

.price-card h3{
    font-family:Georgia,serif;
    font-size:24px;
    color:#183d2e;
}

.price{
    font-size:43px;
    font-weight:800;
    color:#183d2e;
    margin:8px 0;
}

.price-card > p{
    min-height:58px;
    color:#69756e;
    font-size:12px;
}

.features{
    list-style:none;
    margin:21px 0;
}

.features li{
    border-bottom:1px solid #edf0ed;
    padding:8px 0;
    font-size:12px;
    color:#56635c;
}

.features li::before{
    content:"✓";
    color:#b17c35;
    font-weight:bold;
    margin-right:8px;
}

.full{
    width:100%;
}

.price-note{
    text-align:center;
    color:#747f79;
    font-size:11px;
    margin-top:24px;
}


/* =====================================================
   PROCESS
===================================================== */

.process{
    background:#f6f8f5;
    padding:90px 0;
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
}

.step-number{
    width:55px;
    height:55px;
    margin:auto auto 17px;
    display:flex;
    align-items:center;
    justify-content:center;
    border-radius:50%;
    background:#193f2f;
    color:#fff;
    font-weight:bold;
}

.process-step h3{
    font-family:Georgia,serif;
    color:#1a3d2e;
    font-size:19px;
    margin-bottom:6px;
}

.process-step p{
    color:#6c7771;
    font-size:12px;
}


/* =====================================================
   MANAGED DELIVERY
===================================================== */

.managed{
    padding:80px 0;
}

.managed-box{
    background:#f0f5f1;
    border-radius:19px;
    padding:55px;
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:50px;
    align-items:center;
}

.managed-list{
    list-style:none;
    margin-top:23px;
}

.managed-list li{
    color:#59665f;
    font-size:13px;
    margin:11px 0;
}

.managed-list li::before{
    content:"✓";
    color:#b17c35;
    font-weight:bold;
    margin-right:8px;
}

.managed-image{
    min-height:300px;
    border-radius:15px;
    background:
        linear-gradient(
            135deg,
            #183e2e,
            #38634d
        );
    display:flex;
    justify-content:center;
    align-items:center;
}

.managed-book{
    width:185px;
    height:245px;
    background:#f3e9cb;
    color:#244331;
    padding:30px 20px;
    font-family:Georgia,serif;
    font-size:21px;
    box-shadow:18px 20px 35px rgba(0,0,0,.2);
    transform:rotate(-5deg);
}


/* =====================================================
   FAQ
===================================================== */

.faq{
    background:#f7f8f6;
    padding:90px 0;
}

.faq-head{
    text-align:center;
    max-width:750px;
    margin:0 auto 35px;
}

.faq-head .section-description{
    margin-left:auto;
    margin-right:auto;
}

.faq-list{
    max-width:850px;
    margin:auto;
}

.faq-item{
    background:#fff;
    border:1px solid #e1e7e2;
    border-radius:9px;
    overflow:hidden;
    margin-bottom:9px;
}

.faq-question{
    width:100%;
    background:#fff;
    border:0;
    padding:19px 20px;
    text-align:left;
    display:flex;
    justify-content:space-between;
    align-items:center;
    cursor:pointer;
    font-size:13px;
    font-weight:700;
    color:#294035;
}

.faq-question span{
    font-size:21px;
    transition:.25s;
}

.faq-answer{
    max-height:0;
    overflow:hidden;
    transition:.3s ease;
}

.faq-answer p{
    padding:0 20px 20px;
    color:#69746e;
    font-size:12px;
}

.faq-item.active .faq-answer{
    max-height:200px;
}

.faq-item.active .faq-question span{
    transform:rotate(45deg);
}


/* =====================================================
   FINAL CTA
===================================================== */

.final-cta{
    background:#173f2e;
    color:#fff;
    text-align:center;
    padding:90px 0;
}

.final-cta .section-label{
    color:#d0a15b;
}

.final-cta .section-title{
    color:#fff;
    max-width:800px;
    margin:auto;
}

.final-cta p{
    color:#c1cdc6;
    max-width:650px;
    margin:17px auto 28px;
}

.final-cta .btn-primary{
    background:#c18a3b;
}

.final-cta .btn-primary:hover{
    background:#d29b50;
}


/* =====================================================
   SERVICES
===================================================== */

.services-section{
    padding:80px 0;
}

.services-grid{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:16px;
    margin-top:35px;
}

.service{
    border:1px solid #e1e7e2;
    border-radius:11px;
    padding:23px;
    background:#fff;
    transition:.25s;
}

.service:hover{
    transform:translateY(-4px);
    box-shadow:0 15px 35px rgba(0,0,0,.07);
}

.service-price{
    color:#b07d35;
    font-size:12px;
    font-weight:800;
}

.service h3{
    font-family:Georgia,serif;
    font-size:19px;
    color:#1b3d2e;
    margin:6px 0;
}

.service p{
    color:#6b7670;
    font-size:12px;
}


/* =====================================================
   FOOTER
===================================================== */

footer{
    background:#102d22;
    color:#abb9b1;
    padding:48px 0 22px;
}

.footer-grid{
    display:grid;
    grid-template-columns:1.4fr 1fr 1fr 1fr;
    gap:35px;
}

.footer-logo{
    font-family:Georgia,serif;
    font-size:24px;
    font-weight:bold;
    color:#fff;
}

.footer-logo span{
    color:#c08a3c;
}

footer h4{
    color:#fff;
    margin-bottom:13px;
}

footer p,
footer a{
    display:block;
    font-size:12px;
    margin:7px 0;
}

footer a:hover{
    color:#fff;
}

.copyright{
    border-top:1px solid rgba(255,255,255,.1);
    margin-top:30px;
    padding-top:18px;
    text-align:center;
    font-size:11px;
}


/* =====================================================
   TOAST
===================================================== */

.toast{
    position:fixed;
    right:22px;
    bottom:22px;
    background:#173f2e;
    color:#fff;
    padding:14px 19px;
    border-radius:8px;
    font-size:12px;
    box-shadow:0 12px 35px rgba(0,0,0,.2);

    opacity:0;
    transform:translateY(80px);
    transition:.3s;

    z-index:9999;
}

.toast.show{
    opacity:1;
    transform:translateY(0);
}


/* =====================================================
   RESPONSIVE
===================================================== */

@media(max-width:1000px){

    .hero-grid{
        grid-template-columns:1fr;
    }

    .receive-grid{
        grid-template-columns:1fr;
    }

    .showcase-grid{
        grid-template-columns:1fr;
    }

    .pricing-grid{
        grid-template-columns:1fr;
        max-width:620px;
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
    }

    .services-grid{
        grid-template-columns:1fr 1fr;
    }

    .footer-grid{
        grid-template-columns:1fr 1fr;
    }
}


@media(max-width:720px){

    .top-left{
        display:none;
    }

    .topbar-inner{
        justify-content:center;
    }

    .topbar-right{
        justify-content:center;
        gap:8px 15px;
    }

    .nav{
        display:none;
    }

    .hero{
        padding:50px 0 60px;
    }

    .hero h1{
        font-size:41px;
    }

    section,
    .receive,
    .showcase,
    .pricing,
    .process,
    .faq{
        padding:65px 0;
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
}


@media(max-width:480px){

    .container{
        width:calc(100% - 26px);
    }

    .hero h1{
        font-size:36px;
    }

    .quote-card{
        padding:21px;
    }

    .channel-grid{
        grid-template-columns:1fr;
    }

    .big-book{
        width:250px;
        height:300px;
    }

    .managed-box{
        padding:22px;
    }
}
</style>
</head>


<body>


<!-- =====================================================
     TOP BAR
===================================================== -->

<div class="topbar">

    <div class="container topbar-inner">

        <div>
            10,000+ books brought to market
        </div>

        <div class="topbar-right">
            <span>UK +44 7888 862764</span>
            <span>US +1 888 832 8969</span>
            <span>info@hmdpublishing.com</span>
        </div>

    </div>

</div>



<!-- =====================================================
     HEADER
===================================================== -->

<header>

    <div class="container navbar">

        <a href="/" class="logo">
            HMD<span>Publishing</span>
        </a>

        <nav class="nav">

            <div class="services">

                <a href="/services" class="services-top">
                    Services ▾
                </a>

                <div class="services-menu">

                    <a href="/services/book-writing">Editing Services</a>
                    <a href="/services/book-cover-design">Book Cover Design</a>
                    <a href="/services/book-formatting">Book Formatting</a>
                    <a href="/services/publishing">Publishing & Distribution</a>
                    <a href="/services">Complete Package</a>
                    <a href="/services">Audiobook Production</a>
                    <a href="/services">Amazon Advertising</a>
                    <a href="/services">Book Launch Strategy</a>
                    <a href="/services">PR & Podcast Outreach</a>

                </div>

            </div>

            <a href="#pricing">Pricing</a>
            <a href="/tools">Tools</a>
            <a href="/portfolio">Portfolio</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>

        </nav>

    </div>

</header>



<!-- =====================================================
     HERO
===================================================== -->

<section class="hero">

    <div class="container hero-grid">


        <div>

            <div class="trust">

                <span class="stars">
                    ★★★★★
                </span>

                4.7 out of 5

            </div>


            <h1>

                Beautiful children's
                book formatting that
                <span>brings stories to life.</span>

            </h1>


            <p class="hero-description">

                Fixed-layout ePub, full-bleed print setup and
                picture-perfect text placement — vibrant,
                professional layouts designed specifically
                for picture books and illustrated stories.

            </p>


            <div class="hero-actions">

                <a
                    href="#pricing"
                    class="btn btn-primary"
                >
                    See pricing & packages
                </a>

                <a
                    href="#quote"
                    class="btn btn-outline"
                >
                    Get an exact quote
                </a>

            </div>


            <div class="hero-features">

                <span>Fixed-layout ePub + print PDF</span>

                <span>Full-bleed</span>

                <span>Kindle Kids</span>

                <span>5–10 days</span>

            </div>

        </div>



        <!-- QUOTE FORM -->

        <div class="quote-card" id="quote">

            <h2>
                Get an exact children's formatting quote
            </h2>

            <p>
                Tell us about your picture book.
            </p>

            <div class="step-label">
                Step 1 of 2
            </div>


            <form id="quoteForm" action="{{ route('childrensQuote.submit') }}" method="POST" onsubmit="submitChildrensQuote(event)">

                @csrf

                <input
                    type="text"
                    class="honeypot"
                    tabindex="-1"
                    autocomplete="off"
                >


                <div class="form-group">

                    <label>
                        Word count
                        <span style="font-weight:400;">
                            (roughly is fine)
                        </span>
                    </label>

                    <input
                        type="number"
                        name="word_count"
                        placeholder="e.g. 1200"
                    >

                </div>


                <div class="form-group">

                    <label>
                        Output formats
                    </label>

                    <select name="output_format">

                        <option>
                            Select output format
                        </option>

                        <option>
                            Print + Fixed-layout ePub
                        </option>

                        <option>
                            Print PDF only
                        </option>

                        <option>
                            Fixed-layout ePub only
                        </option>

                    </select>

                </div>


                <div class="form-group">

                    <label>
                        Trim size
                        <span style="font-weight:400;">
                            (or unsure)
                        </span>
                    </label>

                    <select name="trim_size">

                        <option>
                            Select trim size
                        </option>

                        <option>
                            8.5 × 8.5 in
                        </option>

                        <option>
                            8 × 10 in
                        </option>

                        <option>
                            10 × 8 in
                        </option>

                        <option>
                            11 × 8.5 in
                        </option>

                        <option>
                            Not sure yet
                        </option>

                    </select>

                </div>


                <div class="form-group">

                    <label>
                        Manuscript readiness
                    </label>

                    <select name="manuscript_status">

                        <option>
                            Select status
                        </option>

                        <option>
                            Fully edited and ready
                        </option>

                        <option>
                            Mostly ready
                        </option>

                        <option>
                            Still being edited
                        </option>

                    </select>

                </div>


                <div class="form-group">

                    <label>
                        Interior complexity
                    </label>

                    <select name="complexity">

                        <option>
                            Select complexity
                        </option>

                        <option>
                            Simple picture book
                        </option>

                        <option>
                            Text + illustrations
                        </option>

                        <option>
                            Activity / workbook
                        </option>

                        <option>
                            Complex illustrated layout
                        </option>

                    </select>

                </div>


                <button
                    type="submit"
                    class="btn btn-primary"
                    style="width:100%;"
                >
                    Continue
                </button>


                <div class="quote-note">

                    No call, no obligation.
                    We reply within 1 business day.
                    Children's formatting from £97.

                </div>

            </form>

        </div>

    </div>

</section>



<!-- =====================================================
     WHAT YOU RECEIVE
===================================================== -->

<section class="receive">

    <div class="container">

        <div class="section-label">
            What you receive
        </div>

        <h2 class="section-title">
            Fixed-layout ebook and full-bleed
            print, prepared together.
        </h2>

        <p class="section-description">

            Your illustrations stay exactly where they belong
            while text is positioned and formatted page by page.

        </p>


        <div class="receive-grid">


            <div class="receive-card">

                <div class="receive-image">

                    <div class="mock-spread">

                        <div class="mock-page">

                            <div class="mock-circle"></div>

                            <div class="mock-title">
                                A BIG ADVENTURE
                            </div>

                        </div>

                        <div class="mock-page">

                            <div class="mock-title">
                                Once upon a time...
                            </div>

                            <div
                                class="mock-text"
                                style="margin-top:80px;"
                            ></div>

                            <div class="mock-text"></div>

                            <div class="mock-text"></div>

                            <div class="mock-text"></div>

                        </div>

                    </div>

                </div>

                <div class="receive-info">

                    <h3>
                        Print-ready PDF
                    </h3>

                    <p>
                        Full-bleed spreads prepared for
                        professional printing.
                    </p>

                    <ul class="receive-list">

                        <li>
                            Full-bleed setup
                        </li>

                        <li>
                            Proper margins
                        </li>

                        <li>
                            Print-ready export
                        </li>

                    </ul>

                </div>

            </div>



            <div class="receive-card">

                <div class="receive-image">

                    <div class="mock-spread">

                        <div
                            class="mock-page"
                            style="background:#f2d7b7;"
                        >

                            <div class="mock-circle"
                                 style="background:#8bb6a0;">
                            </div>

                            <div class="mock-title">
                                THE LITTLE FOX
                            </div>

                        </div>

                        <div
                            class="mock-page"
                            style="background:#d9e9d3;"
                        >

                            <div class="mock-title">
                                A wonderful day...
                            </div>

                            <div
                                class="mock-text"
                                style="margin-top:80px;"
                            ></div>

                            <div class="mock-text"></div>

                            <div class="mock-text"></div>

                        </div>

                    </div>

                </div>

                <div class="receive-info">

                    <h3>
                        Fixed-layout ePub
                    </h3>

                    <p>
                        Same beautiful layout across
                        supported ebook devices.
                    </p>

                    <ul class="receive-list">

                        <li>
                            Kindle Kids compatibility
                        </li>

                        <li>
                            Apple Books ready
                        </li>

                        <li>
                            Fixed-layout text placement
                        </li>

                    </ul>

                </div>

            </div>


        </div>

    </div>

</section>



<!-- =====================================================
     TESTIMONIALS
===================================================== -->

<section class="testimonials">

    <div class="container">

        <div class="section-label">
            Verified on Fiverr
        </div>

        <h2 class="section-title">
            What formatting clients say
        </h2>

        <p class="section-description">

            Picture books, poetry, workbooks and novels —
            typeset to a standard authors come back for,
            book after book.

        </p>


        <div class="rating">

            ★★★★★

            <span class="rating-text">
                4.7 / 5
            </span>

        </div>


        <div class="testimonial-grid">


            <div class="testimonial">

                <div class="quote">
                    “
                </div>

                <p>
                    My picture book required careful integration
                    of illustrations with text. The result is
                    magical — children and parents love how it
                    looks on every page.
                </p>

                <div class="author">

                    <div class="author-avatar">
                        S
                    </div>

                    <div>

                        <strong>
                            Sally Holroyd
                        </strong>

                        <small>
                            Author of TERBY'S FIRST SCHOOL TRIP
                        </small>

                    </div>

                </div>

            </div>



            <div class="testimonial">

                <div class="quote">
                    “
                </div>

                <p>
                    My 400-page fiction had complex formatting
                    needs — maps, family trees, and historical
                    notes. HMD handled it all beautifully.
                </p>

                <div class="author">

                    <div class="author-avatar">
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

                <div class="quote">
                    “
                </div>

                <p>
                    I write technical guides with lots of tables
                    and diagrams. HMD delivered in 5 days and
                    it's perfect.
                </p>

                <div class="author">

                    <div class="author-avatar">
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


        </div>

    </div>

</section>



<!-- =====================================================
     SHOWCASE
===================================================== -->

<section class="showcase">

    <div class="container showcase-grid">


        <div class="showcase-visual">

            <div class="big-book">

                <div class="big-book-title">
                    CONFIDENCE<br>
                    STORIES
                </div>

                <div class="big-book-sub">
                    FOR SHY GIRLS
                </div>

            </div>

        </div>



        <div class="showcase-content">

            <div class="section-label">
                Real HMD-formatted picture book
            </div>

            <h2 class="section-title">
                Every spread is built
                around your illustrations.
            </h2>

            <p>
                The interior above represents the page-by-page
                fixed-layout and full-bleed production used for
                children's books.
            </p>

            <p>
                Existing illustrations can be integrated directly
                into the layout. If artwork is still needed,
                children's illustration services can be added.
            </p>


            <ul class="showcase-points">

                <li>
                    Illustration and text integration
                </li>

                <li>
                    Full-bleed page composition
                </li>

                <li>
                    Consistent typography
                </li>

                <li>
                    Print and ebook production
                </li>

            </ul>


            <a
                href="#quote"
                class="btn btn-primary"
                style="margin-top:22px;"
            >
                Get a quote for your book
            </a>

        </div>

    </div>

</section>



<!-- =====================================================
     CHANNELS
===================================================== -->

<section class="channels">

    <div class="container">

        <div class="section-label">
            Children's publishing channels
        </div>

        <h2 class="section-title">
            Ready for the places
            parents actually buy.
        </h2>

        <p class="section-description">
            Fixed-layout ebook and full-bleed print files
            prepared for major publishing channels.
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



<!-- =====================================================
     PRICING
===================================================== -->

<section class="pricing" id="pricing">

    <div class="container">

        <div class="pricing-head">

            <div class="section-label">
                Transparent pricing
            </div>

            <h2 class="section-title">
                Three packages. Fixed prices.
            </h2>

            <p class="section-description">

                Choose by page count — from £97
                with 5–10 days turnaround.

            </p>


            <div class="pricing-tabs">

                <button
                    class="pricing-tab active"
                >
                    Picture Book Starter
                </button>

                <button
                    class="pricing-tab"
                >
                    Illustrated Pro
                </button>

                <button
                    class="pricing-tab"
                >
                    Full Creative
                </button>

            </div>

        </div>



        <div class="pricing-grid">


            <!-- STARTER -->

            <div class="price-card">

                <h3>
                    Picture Book Starter
                </h3>

                <div class="price">
                    £97
                </div>

                <p>
                    Up to 24 pages
                </p>

                <ul class="features">

                    <li>
                        Fixed-layout ePub
                    </li>

                    <li>
                        Print-ready PDF
                    </li>

                    <li>
                        Full-bleed setup
                    </li>

                    <li>
                        Text-image integration
                    </li>

                    <li>
                        2 revisions
                    </li>

                </ul>

                <a
                    href="#quote"
                    class="btn btn-primary full"
                >
                    Get Started
                </a>

            </div>



            <!-- PRO -->

            <div class="price-card popular">

                <div class="popular-badge">
                    Most popular
                </div>

                <h3>
                    Illustrated Pro
                </h3>

                <div class="price">
                    £197
                </div>

                <p>
                    Up to 48 pages
                </p>

                <ul class="features">

                    <li>
                        Everything in Picture Book
                    </li>

                    <li>
                        Enhanced text pop-ups
                    </li>

                    <li>
                        Multiple trim sizes
                    </li>

                    <li>
                        Kindle Kids compatibility
                    </li>

                    <li>
                        3 revisions
                    </li>

                </ul>

                <a
                    href="#quote"
                    class="btn btn-primary full"
                >
                    Get Started
                </a>

            </div>



            <!-- FULL CREATIVE -->

            <div class="price-card">

                <h3>
                    Full Creative
                </h3>

                <div class="price">
                    £297
                </div>

                <p>
                    Up to 72 pages
                </p>

                <ul class="features">

                    <li>
                        Everything in Illustrated Story
                    </li>

                    <li>
                        Series branding
                    </li>

                    <li>
                        Interactive elements
                    </li>

                    <li>
                        Priority support
                    </li>

                    <li>
                        Unlimited revisions
                    </li>

                </ul>

                <a
                    href="#quote"
                    class="btn btn-primary full"
                >
                    Get Started
                </a>

            </div>


        </div>


        <div class="price-note">

            Board book, activity book, or over 72 pages?
            Send us your project and we'll price it exactly, free.

            <br>

            Popular add-ons:
            Extra pages £75 · Activity-book elements £150

        </div>

    </div>

</section>



<!-- =====================================================
     PROCESS
===================================================== -->

<section class="process">

    <div class="container">

        <div class="process-head">

            <div class="section-label">
                Process
            </div>

            <h2 class="section-title">
                Your illustrations and text,
                combined page by page.
            </h2>

            <p class="section-description"
               style="margin-left:auto;margin-right:auto;">

                You review a proof of every spread before
                the final files are delivered.

            </p>

        </div>


        <div class="process-grid">


            <div class="process-step">

                <div class="step-number">
                    1
                </div>

                <h3>
                    Review
                </h3>

                <p>
                    We review your illustrations and text,
                    confirm the trim size, and flag anything
                    that could affect print quality.
                </p>

            </div>


            <div class="process-step">

                <div class="step-number">
                    2
                </div>

                <h3>
                    Layout
                </h3>

                <p>
                    We combine text and art into a cohesive
                    fixed-layout design with full-bleed setup.
                </p>

            </div>


            <div class="process-step">

                <div class="step-number">
                    3
                </div>

                <h3>
                    Proof
                </h3>

                <p>
                    You check flow, readability and text
                    placement page by page.
                </p>

            </div>


            <div class="process-step">

                <div class="step-number">
                    4
                </div>

                <h3>
                    Finalize
                </h3>

                <p>
                    We deliver files ready for KDP,
                    IngramSpark, Apple Books and other retailers.
                </p>

            </div>


        </div>

    </div>

</section>



<!-- =====================================================
     MANAGED DELIVERY
===================================================== -->

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

                <p class="section-description">

                    One coordinated workflow replaces vendor
                    handoffs, duplicated feedback, and platform
                    administration that can slow a book launch.

                </p>


                <ul class="managed-list">

                    <li>
                        Illustration and text review
                    </li>

                    <li>
                        Fixed-layout ebook production
                    </li>

                    <li>
                        Full-bleed print setup
                    </li>

                    <li>
                        Retailer-ready files
                    </li>

                    <li>
                        Page-by-page proof review
                    </li>

                </ul>

            </div>


            <div class="managed-image">

                <div class="managed-book">

                    CHILDREN'S<br>
                    BOOK<br>
                    FORMATTING

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =====================================================
     FAQ
===================================================== -->

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

            <p class="section-description">

                Clear answers on timeline, scope,
                rights, revisions and delivery.

            </p>

        </div>


        <div class="faq-list">


            <div class="faq-item">

                <button class="faq-question">

                    How much does children's book formatting cost?

                    <span>+</span>

                </button>

                <div class="faq-answer">

                    <p>
                        Children's book formatting starts at £97
                        for Picture Book Starter, £197 for
                        Illustrated Pro and £297 for Full Creative.
                        Extra pages and activity-book elements
                        are available as add-ons.
                    </p>

                </div>

            </div>



            <div class="faq-item">

                <button class="faq-question">

                    What makes children's book formatting different?

                    <span>+</span>

                </button>

                <div class="faq-answer">

                    <p>
                        Children's books require fixed-layout
                        formatting to preserve the precise
                        placement of text and images. Each spread
                        is composed individually so the visual
                        design stays consistent.
                    </p>

                </div>

            </div>



            <div class="faq-item">

                <button class="faq-question">

                    Do you work with both print and ebook formats?

                    <span>+</span>

                </button>

                <div class="faq-answer">

                    <p>
                        Yes. Print-ready PDFs with full-bleed setup
                        can be produced together with fixed-layout
                        ebook files for supported reading platforms.
                    </p>

                </div>

            </div>



            <div class="faq-item">

                <button class="faq-question">

                    Can you help if I don't have illustrations yet?

                    <span>+</span>

                </button>

                <div class="faq-answer">

                    <p>
                        The formatting service focuses on existing
                        illustrations. If artwork is still needed,
                        illustration services can be added separately.
                    </p>

                </div>

            </div>



            <div class="faq-item">

                <button class="faq-question">

                    How long does children's book formatting take?

                    <span>+</span>

                </button>

                <div class="faq-answer">

                    <p>
                        Picture Book Starter is around 5 days,
                        Illustrated Pro around 7 days and Full
                        Creative around 10 days. Complex projects
                        may require additional time.
                    </p>

                </div>

            </div>



            <div class="faq-item">

                <button class="faq-question">

                    Will my book work on Kindle Kids?

                    <span>+</span>

                </button>

                <div class="faq-answer">

                    <p>
                        The Illustrated Pro package and higher tiers
                        include Kindle Kids compatibility and
                        appropriate fixed-layout formatting.
                    </p>

                </div>

            </div>


        </div>

    </div>

</section>



<!-- =====================================================
     FINAL CTA
===================================================== -->

<section class="final-cta">

    <div class="container">

        <div class="section-label">
            Next step — your choice of pace
        </div>

        <h2 class="section-title">
            Ready to bring your
            picture book to life?
        </h2>

        <p>

            Fixed prices from £97.
            Get a free recommendation or start your order.

        </p>


        <div
            style="
                display:flex;
                justify-content:center;
                gap:10px;
                flex-wrap:wrap;
            "
        >

            <a
                href="#pricing"
                class="btn btn-primary"
            >
                See pricing & packages
            </a>

            <a
                href="#quote"
                class="btn btn-outline"
                style="
                    background:transparent;
                    color:#fff;
                    border-color:#fff;
                "
            >
                Get a free quote
            </a>

        </div>

    </div>

</section>



<!-- =====================================================
     SERVICES
===================================================== -->

<section class="services-section">

    <div class="container">

        <div class="section-label">
            Continue the stack
        </div>

        <h2 class="section-title">
            Add the next layer only when
            it supports the launch plan.
        </h2>

        <p class="section-description">
            These adjacent services help once the book itself
            is already structurally sound and market-ready.
        </p>


        <div class="services-grid">


            <div class="service">

                <div class="service-price">
                    From £497
                </div>

                <h3>
                    Illustrations
                </h3>

                <p>
                    Custom characters and spreads shaped
                    for your story and age group.
                </p>

            </div>


            <div class="service">

                <div class="service-price">
                    From £127
                </div>

                <h3>
                    Book Cover Design
                </h3>

                <p>
                    A children's cover designed to stay
                    legible at Amazon thumbnail size.
                </p>

            </div>


            <div class="service">

                <div class="service-price">
                    From £297
                </div>

                <h3>
                    Publishing
                </h3>

                <p>
                    KDP and IngramSpark setup once your
                    print and fixed-layout files are ready.
                </p>

            </div>


            <div class="service">

                <div class="service-price">
                    From £997
                </div>

                <h3>
                    Complete Package
                </h3>

                <p>
                    Editing, design, formatting, publishing
                    and launch handled by one team.
                </p>

            </div>


            <div class="service">

                <div class="service-price">
                    From £117
                </div>

                <h3>
                    Book Editing
                </h3>

                <p>
                    Final editing of your text before layout
                    fixes every word in place.
                </p>

            </div>


            <div class="service">

                <div class="service-price">
                    From £197
                </div>

                <h3>
                    Book Launch Strategy
                </h3>

                <p>
                    A sequenced plan for promoting your
                    finished children's book.
                </p>

            </div>


            <div class="service">

                <div class="service-price">
                    From £147
                </div>

                <h3>
                    Book Formatting
                </h3>

                <p>
                    Standard print and ebook interiors for
                    novels and non-fiction books.
                </p>

            </div>


        </div>

    </div>

</section>



<!-- =====================================================
     FOOTER
===================================================== -->

<footer>

    <div class="container">

        <div class="footer-grid">


            <div>

                <div class="footer-logo">
                    HMD<span>Publishing</span>
                </div>

                <p style="margin-top:14px;">
                    Professional publishing support
                    for independent authors.
                </p>

                <p>
                    10,000+ books brought to market.
                </p>

            </div>


            <div>

                <h4>
                    Services
                </h4>

                <a href="/services">
                    Editing
                </a>

                <a href="/services/book-cover-design">
                    Cover Design
                </a>

                <a href="/services/book-formatting">
                    Book Formatting
                </a>

                <a href="/services">
                    Children's Formatting
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

                <a href="/contact">
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



<!-- =====================================================
     TOAST
===================================================== -->

<div class="toast" id="toast">
    Thank you! We'll review your project details.
</div>



<script>

/* =====================================================
   FAQ
===================================================== */

const faqItems =
    document.querySelectorAll(".faq-item");

faqItems.forEach(item => {

    const button =
        item.querySelector(".faq-question");

    button.addEventListener("click", () => {

        faqItems.forEach(other => {

            if(other !== item){
                other.classList.remove("active");
            }

        });

        item.classList.toggle("active");

    });

});


/* =====================================================
   QUOTE FORM
===================================================== */

function submitChildrensQuote(event) {
    event.preventDefault();

    const form = event.target;
    const toast = document.getElementById("toast");

    const token =
        document.querySelector('meta[name="csrf-token"]')
            .getAttribute("content");

    fetch(form.action, {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": token,
            "Accept": "application/json"
        },
        body: new FormData(form)
    })
    .then(function(response) {
        return response.json();
    })
    .then(function(data) {
        if (data.success) {
            form.reset();
            toast.classList.add("show");
            setTimeout(() => {
                toast.classList.remove("show");
            }, 3500);
        }
    })
    .catch(function() {
        toast.classList.add("show");
        setTimeout(() => {
            toast.classList.remove("show");
        }, 3500);
    });
}


/* =====================================================
   PRICING TABS
===================================================== */

const tabs =
    document.querySelectorAll(".pricing-tab");

tabs.forEach(tab => {

    tab.addEventListener("click", () => {

        tabs.forEach(item => {
            item.classList.remove("active");
        });

        tab.classList.add("active");

    });

});


/* =====================================================
   SMOOTH SCROLL
===================================================== */

document.querySelectorAll('a[href^="#"]').forEach(link => {

    link.addEventListener("click", function(e){

        const target =
            document.querySelector(
                this.getAttribute("href")
            );

        if(target){

            e.preventDefault();

            target.scrollIntoView({
                behavior:"smooth"
            });

        }

    });

});

</script>

</body>
</html>