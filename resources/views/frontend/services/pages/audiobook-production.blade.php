<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Audiobook Production | HMD Publishing</title>

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
    color:#193d2d;
    background:#f7f8f5;
    line-height:1.6;
}

a{
    text-decoration:none;
    color:inherit;
}

:root{
    --green:#173d2d;
    --dark:#102c21;
    --gold:#b7833c;
    --gold-light:#d2a15e;
    --cream:#f7f8f5;
    --light:#eef2ee;
    --text:#66736c;
    --border:#dfe6e1;
    --white:#fff;
}


/* =========================
   HERO
========================= */

.hero{
    padding:90px 20px 85px;
    background:
        radial-gradient(
            circle at 80% 20%,
            rgba(184,132,62,.10),
            transparent 30%
        ),
        linear-gradient(
            180deg,
            #fbfcfa 0%,
            #f5f7f4 100%
        );
}

.hero-inner{
    max-width:1050px;
    margin:auto;
    text-align:center;
}

.trustpilot{
    display:flex;
    align-items:center;
    justify-content:center;
    gap:10px;
    color:#7b867f;
    font-size:11px;
    margin-bottom:17px;
}

.stars{
    color:#bd853a;
    letter-spacing:2px;
    font-size:15px;
}

.hero h1{
    max-width:850px;
    margin:auto;
    font-family:Georgia,serif;
    font-size:60px;
    line-height:1.05;
    letter-spacing:-2px;
    color:var(--green);
}

.hero h1 span{
    color:var(--gold);
}

.hero-text{
    max-width:700px;
    margin:22px auto 0;
    color:#6f7c74;
    font-size:14px;
}

.hero-buttons{
    display:flex;
    justify-content:center;
    gap:12px;
    margin-top:30px;
}

.btn{
    display:inline-flex;
    align-items:center;
    justify-content:center;
    min-height:47px;
    padding:0 25px;
    border-radius:6px;
    font-size:11px;
    font-weight:800;
    transition:.25s;
}

.btn-primary{
    color:#fff;
    background:var(--green);
}

.btn-primary:hover{
    background:var(--gold);
    transform:translateY(-2px);
}

.btn-outline{
    border:1px solid #bcc9c1;
    color:var(--green);
    background:#fff;
}

.btn-outline:hover{
    border-color:var(--green);
}


/* =========================
   STATS
========================= */

.stats{
    max-width:1050px;
    margin:-30px auto 0;
    padding:0 20px;
    position:relative;
}

.stats-box{
    background:#fff;
    border:1px solid var(--border);
    border-radius:10px;
    box-shadow:0 15px 40px rgba(20,55,40,.07);
    display:grid;
    grid-template-columns:repeat(4,1fr);
}

.stat{
    text-align:center;
    padding:23px 10px;
    border-right:1px solid #e8ece9;
}

.stat:last-child{
    border-right:0;
}

.stat strong{
    display:block;
    font-family:Georgia,serif;
    font-size:24px;
    color:var(--green);
}

.stat span{
    color:#77837c;
    font-size:10px;
}


/* =========================
   GENERAL SECTION
========================= */

.section{
    padding:90px 20px;
}

.container{
    max-width:1080px;
    margin:auto;
}

.section-heading{
    text-align:center;
    max-width:730px;
    margin:0 auto 45px;
}

.eyebrow{
    color:var(--gold);
    text-transform:uppercase;
    letter-spacing:2px;
    font-size:10px;
    font-weight:800;
    margin-bottom:10px;
}

.section-heading h2{
    font-family:Georgia,serif;
    color:var(--green);
    font-size:43px;
    line-height:1.12;
    letter-spacing:-1px;
}

.section-heading p{
    margin-top:13px;
    color:var(--text);
    font-size:13px;
}


/* =========================
   PACKAGE OVERVIEW
========================= */

.package-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:18px;
}

.package{
    background:#fff;
    border:1px solid var(--border);
    border-radius:11px;
    padding:28px;
    position:relative;
    transition:.25s;
}

.package:hover{
    transform:translateY(-5px);
    box-shadow:0 18px 45px rgba(20,55,40,.09);
}

.package.featured{
    border:2px solid var(--gold);
}

.popular{
    position:absolute;
    top:-12px;
    right:20px;
    padding:4px 10px;
    border-radius:20px;
    background:var(--gold);
    color:#fff;
    font-size:8px;
    font-weight:900;
    letter-spacing:.8px;
    text-transform:uppercase;
}

.package h3{
    font-family:Georgia,serif;
    color:var(--green);
    font-size:24px;
}

.package .price{
    font-size:30px;
    color:var(--green);
    font-weight:900;
    margin:10px 0 5px;
}

.package .description{
    color:#7a867f;
    font-size:10px;
    min-height:48px;
}

.package ul{
    list-style:none;
    margin-top:18px;
}

.package li{
    color:#59685f;
    font-size:10px;
    padding:6px 0;
    border-bottom:1px solid #edf0ed;
}

.package li::before{
    content:"✓";
    color:var(--gold);
    font-weight:bold;
    margin-right:8px;
}


/* =========================
   PROBLEM SECTION
========================= */

.dark-section{
    background:var(--green);
    color:#fff;
}

.dark-section .section-heading h2{
    color:#fff;
}

.dark-section .section-heading p{
    color:#b8c6be;
}

.problem-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:20px;
}

.problem-card{
    padding:28px;
    border:1px solid rgba(255,255,255,.12);
    border-radius:10px;
    background:rgba(255,255,255,.035);
}

.problem-icon{
    width:40px;
    height:40px;
    border-radius:50%;
    background:rgba(209,159,88,.15);
    color:#d4a15d;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:16px;
    margin-bottom:16px;
}

.problem-card h3{
    font-family:Georgia,serif;
    font-size:21px;
    margin-bottom:9px;
}

.problem-card p{
    color:#b8c5be;
    font-size:11px;
}


/* =========================
   CHANNELS
========================= */

.channels{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:14px;
}

.channel{
    background:#fff;
    border:1px solid var(--border);
    border-radius:8px;
    padding:25px 15px;
    text-align:center;
    font-weight:800;
    color:#42574b;
    font-size:12px;
    transition:.25s;
}

.channel:hover{
    transform:translateY(-4px);
    border-color:#b7c5bc;
}


/* =========================
   VOICE STORY
========================= */

.story-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:45px;
    align-items:center;
}

.story-content h2{
    font-family:Georgia,serif;
    color:var(--green);
    font-size:42px;
    line-height:1.1;
    margin-bottom:17px;
}

.story-content p{
    color:#69766e;
    font-size:12px;
    margin-bottom:18px;
}

.check-list{
    list-style:none;
}

.check-list li{
    font-size:11px;
    color:#52635a;
    padding:7px 0;
}

.check-list li::before{
    content:"✓";
    color:var(--gold);
    font-weight:bold;
    margin-right:9px;
}

.story-box{
    min-height:360px;
    border-radius:14px;
    background:
        linear-gradient(
            145deg,
            rgba(23,61,45,.98),
            rgba(36,76,57,.95)
        );
    display:flex;
    align-items:center;
    justify-content:center;
    position:relative;
    overflow:hidden;
}

.story-box::before{
    content:"";
    width:250px;
    height:250px;
    border:1px solid rgba(255,255,255,.15);
    border-radius:50%;
    position:absolute;
}

.mic{
    font-size:90px;
    position:relative;
    color:#d2a15e;
}


/* =========================
   PRICING
========================= */

.pricing-bg{
    background:#f0f3f0;
}

.price-tabs{
    display:flex;
    justify-content:center;
    gap:7px;
    margin-bottom:30px;
}

.price-tab{
    border:1px solid #d2dbd5;
    background:#fff;
    padding:9px 18px;
    border-radius:5px;
    font-size:10px;
    font-weight:800;
    color:#53645a;
}

.price-tab.active{
    background:var(--green);
    border-color:var(--green);
    color:#fff;
}

.price-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:18px;
}

.price-card{
    background:#fff;
    border:1px solid var(--border);
    border-radius:11px;
    padding:30px;
}

.price-card.featured{
    border:2px solid var(--gold);
    transform:translateY(-7px);
}

.price-card h3{
    font-family:Georgia,serif;
    color:var(--green);
    font-size:25px;
}

.price-card .price{
    font-size:37px;
    font-weight:900;
    color:var(--green);
    margin:8px 0;
}

.price-card .price-note{
    font-size:10px;
    color:#849088;
    margin-bottom:20px;
}

.price-card ul{
    list-style:none;
    margin-bottom:22px;
}

.price-card li{
    font-size:10px;
    color:#617068;
    padding:6px 0;
}

.price-card li::before{
    content:"✓";
    color:var(--gold);
    margin-right:8px;
}


/* =========================
   PROCESS
========================= */

.process-grid{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:15px;
    position:relative;
}

.process-card{
    text-align:center;
    padding:15px;
}

.process-number{
    width:48px;
    height:48px;
    margin:0 auto 15px;
    border-radius:50%;
    background:var(--green);
    color:#fff;
    display:flex;
    align-items:center;
    justify-content:center;
    font-weight:900;
    font-size:14px;
    position:relative;
    z-index:2;
}

.process-card h3{
    color:var(--green);
    font-family:Georgia,serif;
    font-size:19px;
    margin-bottom:7px;
}

.process-card p{
    color:#738078;
    font-size:10px;
}


/* =========================
   MANAGED DELIVERY
========================= */

.delivery{
    background:#fff;
}

.delivery-box{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:25px;
}

.delivery-card{
    padding:27px;
    border:1px solid var(--border);
    border-radius:10px;
}

.delivery-card h3{
    color:var(--green);
    font-family:Georgia,serif;
    font-size:22px;
    margin-bottom:10px;
}

.delivery-card p{
    color:#707d75;
    font-size:11px;
}

.delivery-card ul{
    list-style:none;
    margin-top:15px;
}

.delivery-card li{
    font-size:10px;
    color:#59685f;
    padding:6px 0;
}

.delivery-card li::before{
    content:"→";
    color:var(--gold);
    margin-right:8px;
}


/* =========================
   FAQ
========================= */

.faq{
    max-width:800px;
    margin:auto;
}

details{
    background:#fff;
    border:1px solid var(--border);
    border-radius:7px;
    margin-bottom:8px;
    padding:16px 19px;
}

summary{
    cursor:pointer;
    font-size:11px;
    font-weight:800;
    color:var(--green);
}

details p{
    padding-top:12px;
    color:#718078;
    font-size:10px;
}


/* =========================
   CTA
========================= */

.cta{
    padding:95px 20px;
    background:
        linear-gradient(
            135deg,
            var(--green),
            #244b39
        );
    color:#fff;
    text-align:center;
}

.cta h2{
    max-width:750px;
    margin:auto;
    font-family:Georgia,serif;
    font-size:47px;
    line-height:1.1;
}

.cta p{
    max-width:650px;
    margin:17px auto 25px;
    color:#c1cec6;
    font-size:12px;
}

.cta .btn-primary{
    background:#fff;
    color:var(--green);
}

.cta .btn-primary:hover{
    background:var(--gold);
    color:#fff;
}


/* =========================
   FOOTER
========================= */

footer{
    background:#102c21;
    color:#aebbb3;
    padding:50px 20px 20px;
}

.footer-container{
    max-width:1100px;
    margin:auto;
}

.footer-grid{
    display:grid;
    grid-template-columns:1.5fr 1fr 1fr 1fr;
    gap:35px;
}

.footer-logo{
    font-family:Georgia,serif;
    color:#fff;
    font-size:23px;
    font-weight:bold;
}

.footer-logo span{
    color:#c28b45;
}

footer h3{
    color:#fff;
    font-size:11px;
    margin-bottom:13px;
}

footer p,
footer a{
    display:block;
    color:#aebbb3;
    font-size:9px;
    margin:6px 0;
}

footer a:hover{
    color:#fff;
}

.copyright{
    border-top:1px solid rgba(255,255,255,.1);
    margin-top:35px;
    padding-top:17px;
    text-align:center;
    font-size:8px;
    color:#7f9087;
}


/* =========================
   RESPONSIVE
========================= */

@media(max-width:900px){

    .hero h1{
        font-size:48px;
    }

    .stats-box{
        grid-template-columns:repeat(2,1fr);
    }

    .stat:nth-child(2){
        border-right:0;
    }

    .package-grid,
    .price-grid,
    .problem-grid{
        grid-template-columns:1fr;
    }

    .price-card.featured{
        transform:none;
    }

    .channels{
        grid-template-columns:repeat(2,1fr);
    }

    .story-grid,
    .delivery-box{
        grid-template-columns:1fr;
    }

    .process-grid{
        grid-template-columns:repeat(2,1fr);
    }

    .footer-grid{
        grid-template-columns:1fr 1fr;
    }
}


@media(max-width:600px){

    .hero{
        padding:65px 15px;
    }

    .hero h1{
        font-size:38px;
        letter-spacing:-1px;
    }

    .hero-text{
        font-size:12px;
    }

    .hero-buttons{
        flex-direction:column;
        align-items:center;
    }

    .btn{
        width:100%;
        max-width:280px;
    }

    .stats{
        margin:-15px 12px 0;
        padding:0;
    }

    .section{
        padding:65px 15px;
    }

    .section-heading h2,
    .story-content h2{
        font-size:34px;
    }

    .stats-box{
        grid-template-columns:1fr 1fr;
    }

    .channels{
        grid-template-columns:1fr 1fr;
    }

    .process-grid{
        grid-template-columns:1fr;
    }

    .footer-grid{
        grid-template-columns:1fr;
    }

    .cta h2{
        font-size:35px;
    }

}
</style>
</head>


<body>


@include('frontend.partials.navbar')


<!-- HERO -->

<section class="hero">

    <div class="hero-inner">

        <div class="trustpilot">
            <span class="stars">★★★★★</span>
            <span>4.7 out of 5</span>
            <span>· Based on 83 Trustpilot reviews</span>
        </div>

        <h1>
            Audiobook Production That Sounds
            <span>Credible</span>
            From The First Sentence.
        </h1>

        <p class="hero-text">
            Casting, recording, editing, mastering, and delivery
            planning for authors who need an audiobook that feels
            commercially ready, not improvised.
        </p>

        <div class="hero-buttons">

            <a href="#pricing" class="btn btn-primary">
                Get your audiobook quote
            </a>

            <a href="#pricing" class="btn btn-outline">
                See simple pricing
            </a>

        </div>

    </div>

</section>


<!-- STATS -->

<div class="stats">

    <div class="stats-box">

        <div class="stat">
            <strong>£350</strong>
            <span>per finished hour</span>
        </div>

        <div class="stat">
            <strong>3–10</strong>
            <span>finished-hour packages</span>
        </div>

        <div class="stat">
            <strong>ACX</strong>
            <span>delivery standard</span>
        </div>

        <div class="stat">
            <strong>10K+</strong>
            <span>books brought to market</span>
        </div>

    </div>

</div>


<!-- PACKAGE OVERVIEW -->

<section class="section">

    <div class="container">

        <div class="section-heading">

            <div class="eyebrow">
                Package Overview
            </div>

            <h2>
                Choose the production length
                your book actually needs.
            </h2>

            <p>
                Audiobook production is priced by the finished
                mastered runtime, keeping the scope simple.
            </p>

        </div>


        <div class="package-grid">


            <div class="package">

                <h3>3 finished hours</h3>

                <div class="price">
                    £1,050
                </div>

                <p class="description">
                    Typical for shorter books, lead magnets,
                    or compact non-fiction.
                </p>

                <ul>
                    <li>Professional narration</li>
                    <li>Editing and mastering</li>
                    <li>Production-ready files</li>
                    <li>ACX-ready delivery</li>
                </ul>

            </div>


            <div class="package featured">

                <div class="popular">
                    Most Popular
                </div>

                <h3>6 finished hours</h3>

                <div class="price">
                    £2,100
                </div>

                <p class="description">
                    Typical for many business books,
                    memoirs, and shorter novels.
                </p>

                <ul>
                    <li>Voice casting support</li>
                    <li>Professional narration</li>
                    <li>Editing and mastering</li>
                    <li>Production-ready files</li>
                    <li>ACX-ready delivery</li>
                </ul>

            </div>


            <div class="package">

                <h3>10 finished hours</h3>

                <div class="price">
                    £3,500
                </div>

                <p class="description">
                    Typical for longer fiction and
                    full-length non-fiction audiobooks.
                </p>

                <ul>
                    <li>Long-form narration planning</li>
                    <li>Editing and mastering</li>
                    <li>Production-ready files</li>
                    <li>ACX-ready delivery</li>
                    <li>Launch-ready handoff</li>
                </ul>

            </div>

        </div>

    </div>

</section>


<!-- WHAT THIS ROUTE FIXES -->

<section class="section dark-section">

    <div class="container">

        <div class="section-heading">

            <div class="eyebrow">
                What This Route Fixes
            </div>

            <h2>
                Production quality changes
                how the book is judged.
            </h2>

            <p>
                Voice, pacing, engineering and delivery all affect
                whether listeners trust the production.
            </p>

        </div>


        <div class="problem-grid">

            <div class="problem-card">

                <div class="problem-icon">
                    ♫
                </div>

                <h3>
                    Narration quality
                </h3>

                <p>
                    The voice, pacing and engineering shape whether
                    listeners feel they are hearing a professional
                    audiobook or an amateur recording.
                </p>

            </div>


            <div class="problem-card">

                <div class="problem-icon">
                    ◉
                </div>

                <h3>
                    Market-fit casting
                </h3>

                <p>
                    The narrator needs to sound believable for the
                    genre, audience and commercial promise of your book.
                </p>

            </div>


            <div class="problem-card">

                <div class="problem-icon">
                    ✓
                </div>

                <h3>
                    Launch momentum
                </h3>

                <p>
                    Proper mastering and technical checks help avoid
                    preventable platform friction and resubmission delays.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- CHANNELS -->

<section class="section">

    <div class="container">

        <div class="section-heading">

            <div class="eyebrow">
                Audiobook Channels
            </div>

            <h2>
                Ready for the platforms
                your listeners already use.
            </h2>

            <p>
                Mastered files prepared for major audiobook
                delivery routes.
            </p>

        </div>


        <div class="channels">

            <div class="channel">
                Audible
            </div>

            <div class="channel">
                ACX
            </div>

            <div class="channel">
                Apple Books
            </div>

            <div class="channel">
                Google Play
            </div>

        </div>

    </div>

</section>


<!-- VOICE OF YOUR STORY -->

<section class="section">

    <div class="container">

        <div class="story-grid">

            <div class="story-content">

                <div class="eyebrow">
                    Package Rationale
                </div>

                <h2>
                    Voice of Your Story
                </h2>

                <p>
                    Audiobooks are a powerful part of modern publishing.
                    We produce broadcast-quality audiobooks with
                    professional narrators and production support.
                </p>

                <ul class="check-list">

                    <li>
                        Professional voice actors
                    </li>

                    <li>
                        ACX / Audible compliant
                    </li>

                    <li>
                        Sound engineering included
                    </li>

                    <li>
                        Distribution assistance
                    </li>

                </ul>

            </div>


            <div class="story-box">

                <div class="mic">
                    🎙
                </div>

            </div>

        </div>

    </div>

</section>


<!-- WHAT EVERY EDIT INCLUDES -->

<section class="section pricing-bg">

    <div class="container">

        <div class="section-heading">

            <div class="eyebrow">
                Included
            </div>

            <h2>
                What every audiobook
                production includes.
            </h2>

        </div>


        <div class="package-grid">

            <div class="package">
                <h3>Casting</h3>
                <p class="description">
                    Assistance finding a voice that fits
                    your book's genre and audience.
                </p>
            </div>

            <div class="package">
                <h3>Recording</h3>
                <p class="description">
                    Professional recording studio time
                    for the complete manuscript.
                </p>
            </div>

            <div class="package">
                <h3>Mastering</h3>
                <p class="description">
                    Editing, cleanup, mastering and
                    platform-ready production files.
                </p>
            </div>

        </div>

    </div>

</section>


<!-- SIMPLE PRICING -->

<section class="section">

    <div class="container">

        <div class="section-heading">

            <div class="eyebrow">
                Simple Pricing
            </div>

            <h2>
                Audiobook pricing is
                £350 per finished hour.
            </h2>

            <p>
                You pay for the final edited and mastered runtime,
                not the raw recording session.
            </p>

        </div>


        <div class="delivery-box">

            <div class="delivery-card">

                <h3>
                    Around 30,000 words
                </h3>

                <p>
                    About 3 finished hours.
                </p>

                <ul>
                    <li>
                        Estimated production fee: £1,050
                    </li>
                    <li>
                        Production-ready files included
                    </li>
                </ul>

            </div>


            <div class="delivery-card">

                <h3>
                    Around 60,000 words
                </h3>

                <p>
                    About 6 to 7 finished hours.
                </p>

                <ul>
                    <li>
                        Estimated fee: £2,100–£2,450
                    </li>
                    <li>
                        Finished-hour pricing
                    </li>
                </ul>

            </div>


            <div class="delivery-card">

                <h3>
                    Around 90,000 words
                </h3>

                <p>
                    About 9 to 10 finished hours.
                </p>

                <ul>
                    <li>
                        Estimated fee: £3,150–£3,500
                    </li>
                    <li>
                        Platform-ready delivery
                    </li>
                </ul>

            </div>


            <div class="delivery-card">

                <h3>
                    Longer manuscripts
                </h3>

                <p>
                    Longer books simply scale according
                    to their final finished-hour count.
                </p>

                <ul>
                    <li>
                        £350 per finished hour
                    </li>
                    <li>
                        Production-ready files included
                    </li>
                </ul>

            </div>

        </div>

    </div>

</section>


<!-- VOICE CASTING -->

<section class="section dark-section">

    <div class="container">

        <div class="section-heading">

            <div class="eyebrow">
                Voice Casting
            </div>

            <h2>
                The narrator has to sound like
                the book belongs in its market.
            </h2>

            <p>
                Casting is about genre fit, authority, pacing,
                tone and listener stamina.
            </p>

        </div>


        <div class="problem-grid">

            <div class="problem-card">

                <h3>
                    Genre promise
                </h3>

                <p>
                    Shortlist voices by genre and commercial
                    positioning rather than vocal quality alone.
                </p>

            </div>


            <div class="problem-card">

                <h3>
                    Audition stage
                </h3>

                <p>
                    Check pacing, tone and listener stamina
                    before committing to the full recording.
                </p>

            </div>


            <div class="problem-card">

                <h3>
                    Author brand
                </h3>

                <p>
                    Align narrator choice with your author brand
                    and the commercial goal of the audiobook.
                </p>

            </div>

        </div>

    </div>

</section>


<!-- PRICING -->

<section class="section pricing-bg" id="pricing">

    <div class="container">

        <div class="section-heading">

            <div class="eyebrow">
                Investment
            </div>

            <h2>
                Audiobook Pricing
            </h2>

            <p>
                Choose your approximate finished runtime.
            </p>

        </div>


        <div class="price-tabs">

            <div class="price-tab">
                3 finished hours
            </div>

            <div class="price-tab active">
                6 finished hours
            </div>

            <div class="price-tab">
                10 finished hours
            </div>

        </div>


        <div class="price-grid">


            <div class="price-card">

                <h3>
                    3 finished hours
                </h3>

                <div class="price">
                    £1,050
                </div>

                <div class="price-note">
                    Typical for shorter books.
                </div>

                <ul>
                    <li>Professional narration</li>
                    <li>Editing and mastering</li>
                    <li>Production-ready files</li>
                    <li>ACX-ready delivery</li>
                </ul>

                <a href="/contact" class="btn btn-primary">
                    Request quote
                </a>

            </div>


            <div class="price-card featured">

                <div class="popular">
                    Most Popular
                </div>

                <h3>
                    6 finished hours
                </h3>

                <div class="price">
                    £2,100
                </div>

                <div class="price-note">
                    Typical for many business books,
                    memoirs and shorter novels.
                </div>

                <ul>
                    <li>Voice casting support</li>
                    <li>Professional narration</li>
                    <li>Editing and mastering</li>
                    <li>Production-ready files</li>
                    <li>ACX-ready delivery</li>
                </ul>

                <a href="/contact" class="btn btn-primary">
                    Request quote
                </a>

            </div>


            <div class="price-card">

                <h3>
                    10 finished hours
                </h3>

                <div class="price">
                    £3,500
                </div>

                <div class="price-note">
                    Typical for longer fiction and
                    full-length non-fiction.
                </div>

                <ul>
                    <li>Long-form narration planning</li>
                    <li>Editing and mastering</li>
                    <li>Production-ready files</li>
                    <li>ACX-ready delivery</li>
                    <li>Launch-ready handoff</li>
                </ul>

                <a href="/contact" class="btn btn-primary">
                    Request quote
                </a>

            </div>

        </div>

    </div>

</section>


<!-- PRODUCTION STEPS -->

<section class="section">

    <div class="container">

        <div class="section-heading">

            <div class="eyebrow">
                Process
            </div>

            <h2>
                Production Steps
            </h2>

            <p>
                A simple workflow from manuscript
                to platform-ready audiobook.
            </p>

        </div>


        <div class="process-grid">


            <div class="process-card">

                <div class="process-number">
                    1
                </div>

                <h3>
                    Casting
                </h3>

                <p>
                    Audition narrators to find
                    the perfect voice.
                </p>

            </div>


            <div class="process-card">

                <div class="process-number">
                    2
                </div>

                <h3>
                    Recording
                </h3>

                <p>
                    Professional recording of
                    the full manuscript.
                </p>

            </div>


            <div class="process-card">

                <div class="process-number">
                    3
                </div>

                <h3>
                    Post-Production
                </h3>

                <p>
                    Editing breaths, noises,
                    pacing and mastering.
                </p>

            </div>


            <div class="process-card">

                <div class="process-number">
                    4
                </div>

                <h3>
                    Delivery
                </h3>

                <p>
                    Files ready for upload
                    to Audible / ACX.
                </p>

            </div>


        </div>

    </div>

</section>


<!-- MANAGED DELIVERY -->

<section class="section delivery">

    <div class="container">

        <div class="section-heading">

            <div class="eyebrow">
                Managed Delivery
            </div>

            <h2>
                The audiobook is stronger when
                production and launch planning connect.
            </h2>

        </div>


        <div class="delivery-box">


            <div class="delivery-card">

                <h3>
                    Narrator fit
                </h3>

                <p>
                    Shortlist voices that feel commercially
                    right for the genre, tone and listener expectation.
                </p>

                <ul>
                    <li>Genre matching</li>
                    <li>Tone and pacing</li>
                    <li>Listener expectations</li>
                </ul>

            </div>


            <div class="delivery-card">

                <h3>
                    Technical polish
                </h3>

                <p>
                    Editing, mastering, room-noise cleanup and
                    level consistency make the production feel finished.
                </p>

                <ul>
                    <li>Audio cleanup</li>
                    <li>Mastering</li>
                    <li>Platform standards</li>
                </ul>

            </div>


            <div class="delivery-card">

                <h3>
                    Release readiness
                </h3>

                <p>
                    Treat the audiobook as a launch asset,
                    not simply a folder of audio files.
                </p>

                <ul>
                    <li>Packaging</li>
                    <li>Metadata planning</li>
                    <li>Platform submission support</li>
                </ul>

            </div>


            <div class="delivery-card">

                <h3>
                    Production flow
                </h3>

                <p>
                    One coordinated workflow replaces vendor handoffs,
                    duplicated feedback and unnecessary delays.
                </p>

                <ul>
                    <li>Coordinated production</li>
                    <li>Pickups and corrections</li>
                    <li>Final mastered files</li>
                </ul>

            </div>


        </div>

    </div>

</section>


<!-- FAQ -->

<section class="section">

    <div class="container">

        <div class="section-heading">

            <div class="eyebrow">
                FAQ
            </div>

            <h2>
                Questions authors usually ask
                before they commit.
            </h2>

            <p>
                Clear answers on pricing, narration,
                technical delivery and production.
            </p>

        </div>


        <div class="faq">


            <details>

                <summary>
                    How is audiobook pricing usually calculated?
                </summary>

                <p>
                    Audiobook production is scoped by finished hours,
                    because the real workload includes narration,
                    pickups, editing, mastering and compliance checks.
                </p>

            </details>


            <details>

                <summary>
                    Can I hear narrator auditions before choosing a voice?
                </summary>

                <p>
                    Yes. The casting process can narrow the field
                    to voices that fit the genre, tone and audience
                    expectations of the book.
                </p>

            </details>


            <details>

                <summary>
                    What if I want to narrate the book myself?
                </summary>

                <p>
                    That can work, but the production still needs
                    engineering, editing, mastering and technical
                    cleanup for a professional final result.
                </p>

            </details>


            <details>

                <summary>
                    Will the final files be ready for Audible and ACX?
                </summary>

                <p>
                    The goal is platform-ready technical standards
                    so upload, review and launch are not delayed
                    by preventable audio issues.
                </p>

            </details>


            <details>

                <summary>
                    What does £350 per finished hour mean?
                </summary>

                <p>
                    Finished hour means the final edited and mastered
                    runtime. The price is based on the final production,
                    not the raw recording session.
                </p>

            </details>


        </div>

    </div>

</section>


<!-- CTA -->

<section class="cta">

    <h2>
        Turn the manuscript into an
        audiobook listeners actually finish.
    </h2>

    <p>
        If you know the approximate manuscript length,
        we can map it into finished hours and quote
        the production at £350 per finished hour.
    </p>

    <a href="#pricing" class="btn btn-primary">
        Request your audiobook quote
    </a>

</section>


<!-- FOOTER -->

<footer>

    <div class="footer-container">

        <div class="footer-grid">


            <div>

                <div class="footer-logo">
                    HMD<span>Publishing</span>
                </div>

                <p>
                    Professional publishing services
                    for authors around the world.
                </p>

                <p>
                    10,000+ books brought to market.
                </p>

            </div>


            <div>

                <h3>Services</h3>

                <a href="/services/editing">Editing</a>
                <a href="/services/book-cover-design">Book Cover Design</a>
                <a href="/services/book-formatting">Book Formatting</a>
                <a href="/services/book-illustrations">Illustrations</a>
                <a href="/services/publishing">Publishing</a>

            </div>


            <div>

                <h3>Company</h3>

                <a href="/about">About</a>
                <a href="/portfolio">Portfolio</a>
                <a href="/contact">Contact</a>

            </div>


            <div>

                <h3>Support</h3>

                <a href="#">FAQ</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms</a>
                <a href="#">Refund Policy</a>

            </div>


        </div>


        <div class="copyright">
            © 2026 HMD Publishing Limited. All rights reserved.
        </div>

    </div>

</footer>


</body>
</html>