<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Complete Publishing Package | HMD Publishing</title>

<style>

/* =========================================================
   RESET
========================================================= */

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

:root{
    --green:#173d2d;
    --dark:#10291f;
    --gold:#b9843f;
    --gold2:#d1a05d;
    --cream:#f7f5ef;
    --light:#f4f7f4;
    --white:#ffffff;
    --text:#65736b;
    --border:#dfe6e1;
    --soft:#edf2ee;
}

html{
    scroll-behavior:smooth;
}

body{
    font-family:Arial,Helvetica,sans-serif;
    color:var(--green);
    background:#fff;
    line-height:1.55;
}

a{
    text-decoration:none;
    color:inherit;
}

img{
    max-width:100%;
    display:block;
}

button,
input,
select{
    font-family:inherit;
}


/* =========================================================
   HERO
========================================================= */

.hero{
    background:
        radial-gradient(
            circle at 15% 20%,
            rgba(185,132,63,.12),
            transparent 30%
        ),
        linear-gradient(
            180deg,
            #f7f9f7,
            #ffffff
        );

    padding:75px 24px 70px;
}

.hero-inner{
    max-width:1060px;
    margin:auto;
    text-align:center;
}

.trust{
    display:flex;
    align-items:center;
    justify-content:center;
    gap:9px;

    font-size:10px;
    color:#68766e;

    margin-bottom:17px;
}

.stars{
    color:#bd8845;
    letter-spacing:2px;
}

.hero-label{
    display:inline-block;

    padding:7px 13px;

    border:1px solid #d8e0da;
    border-radius:30px;

    background:#fff;

    color:var(--gold);

    font-size:9px;
    font-weight:bold;
    letter-spacing:1px;
    text-transform:uppercase;

    margin-bottom:17px;
}

.hero h1{
    font-family:Georgia,serif;
    font-size:56px;
    line-height:1.05;
    letter-spacing:-1.5px;

    max-width:800px;
    margin:auto;

    color:var(--green);
}

.hero h1 span{
    color:var(--gold);
}

.hero-subtitle{
    max-width:680px;
    margin:18px auto 0;

    font-size:13px;
    color:var(--text);
}

.hero-meta{
    margin-top:22px;

    display:flex;
    justify-content:center;
    gap:30px;
    flex-wrap:wrap;

    font-size:10px;
    color:#627168;
}

.hero-meta strong{
    color:var(--green);
}


/* =========================================================
   HERO BUTTONS
========================================================= */

.hero-buttons{
    margin-top:28px;

    display:flex;
    justify-content:center;
    gap:10px;
    flex-wrap:wrap;
}

.btn{
    display:inline-flex;
    align-items:center;
    justify-content:center;

    min-height:45px;
    padding:0 22px;

    border-radius:5px;

    font-size:10px;
    font-weight:bold;

    transition:.25s;
}

.btn-primary{
    background:var(--green);
    color:#fff;
}

.btn-primary:hover{
    background:var(--gold);
    transform:translateY(-2px);
}

.btn-secondary{
    background:#fff;
    color:var(--green);
    border:1px solid #ccd8d0;
}

.btn-secondary:hover{
    border-color:var(--green);
}


/* =========================================================
   STATS
========================================================= */

.stats{
    max-width:900px;
    margin:-1px auto 0;

    display:grid;
    grid-template-columns:repeat(4,1fr);

    background:#fff;

    border:1px solid var(--border);
    border-radius:10px;

    box-shadow:0 15px 45px rgba(20,55,40,.06);

    overflow:hidden;
}

.stat{
    text-align:center;
    padding:22px 10px;
    border-right:1px solid var(--border);
}

.stat:last-child{
    border-right:none;
}

.stat-number{
    font-family:Georgia,serif;
    font-size:25px;
    color:var(--green);
}

.stat-label{
    margin-top:4px;
    font-size:8px;
    color:var(--text);
}


/* =========================================================
   SECTION COMMON
========================================================= */

.section{
    max-width:1100px;
    margin:auto;
    padding:75px 24px;
}

.section-header{
    max-width:700px;
    margin:0 auto 38px;
    text-align:center;
}

.section-kicker{
    color:var(--gold);
    font-size:9px;
    font-weight:bold;
    letter-spacing:1.5px;
    text-transform:uppercase;
}

.section-header h2{
    font-family:Georgia,serif;
    font-size:38px;
    line-height:1.15;

    margin-top:9px;
}

.section-header p{
    margin-top:11px;

    font-size:11px;
    color:var(--text);
}


/* =========================================================
   BOOK FIT FORM
========================================================= */

.fit-section{
    background:var(--cream);
}

.fit-box{
    max-width:850px;
    margin:auto;

    background:#fff;

    border:1px solid var(--border);
    border-radius:10px;

    padding:35px;

    box-shadow:0 12px 35px rgba(20,55,40,.05);
}

.fit-top{
    display:flex;
    justify-content:space-between;
    align-items:center;

    margin-bottom:25px;
}

.step{
    color:var(--text);
    font-size:9px;
}

.step strong{
    color:var(--green);
}

.form-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:18px;
}

.form-group{
    margin-bottom:5px;
}

.form-group.full{
    grid-column:1/-1;
}

.form-group label{
    display:block;

    margin-bottom:6px;

    font-size:9px;
    font-weight:bold;
    color:var(--green);
}

input,
select{
    width:100%;
    height:44px;

    padding:0 13px;

    border:1px solid #d5dfd8;
    border-radius:5px;

    background:#fff;
    color:#30473c;

    outline:none;

    font-size:10px;

    transition:.2s;
}

input:focus,
select:focus{
    border-color:var(--green);
    box-shadow:0 0 0 3px rgba(23,61,45,.06);
}

.form-footer{
    display:flex;
    justify-content:space-between;
    align-items:center;

    margin-top:22px;
}

.form-note{
    font-size:8px;
    color:#7b8880;
}

.continue-btn{
    border:0;
    cursor:pointer;
}


/* =========================================================
   PACKAGE CARDS
========================================================= */

.packages{
    background:#fff;
}

.package-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:18px;
    align-items:stretch;
}

.package{
    position:relative;

    background:#fff;

    border:1px solid var(--border);
    border-radius:10px;

    overflow:hidden;

    display:flex;
    flex-direction:column;

    transition:.3s;
}

.package:hover{
    transform:translateY(-5px);
    box-shadow:0 20px 50px rgba(20,55,40,.09);
}

.package.popular{
    border:2px solid var(--gold);
}

.popular-label{
    background:var(--gold);
    color:#fff;

    text-align:center;

    padding:7px;

    font-size:8px;
    font-weight:bold;
    letter-spacing:1px;
    text-transform:uppercase;
}

.package-body{
    padding:26px;
    display:flex;
    flex-direction:column;
    height:100%;
}

.package-name{
    font-family:Georgia,serif;
    font-size:23px;
}

.package-price{
    margin-top:9px;

    font-family:Georgia,serif;
    font-size:34px;
    color:var(--green);
}

.package-save{
    margin-top:3px;

    font-size:9px;
    color:var(--gold);
    font-weight:bold;
}

.package-description{
    margin-top:15px;

    min-height:48px;

    font-size:9px;
    color:var(--text);
}

.package-list{
    list-style:none;
    margin-top:20px;
    flex:1;
}

.package-list li{
    position:relative;

    padding:8px 0 8px 20px;

    border-top:1px solid #edf1ee;

    font-size:9px;
    color:#56655c;
}

.package-list li::before{
    content:"✓";

    position:absolute;
    left:0;
    top:8px;

    color:var(--gold);
    font-weight:bold;
}

.package-btn{
    width:100%;
    margin-top:22px;
}


/* =========================================================
   INCLUDED
========================================================= */

.included-section{
    background:var(--light);
}

.included-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:13px;
}

.included-card{
    padding:19px;

    background:#fff;

    border:1px solid var(--border);
    border-radius:8px;
}

.icon{
    width:32px;
    height:32px;

    display:flex;
    align-items:center;
    justify-content:center;

    border-radius:7px;

    background:#edf3ef;
    color:var(--gold);

    margin-bottom:11px;

    font-size:14px;
}

.included-card h3{
    font-family:Georgia,serif;
    font-size:15px;
}

.included-card p{
    margin-top:5px;

    font-size:8px;
    color:var(--text);
}


/* =========================================================
   WHY PACKAGE
========================================================= */

.why-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:35px;
    align-items:center;
}

.why-copy h2{
    font-family:Georgia,serif;
    font-size:38px;
    line-height:1.15;
}

.why-copy p{
    margin-top:13px;
    color:var(--text);
    font-size:10px;
}

.reason-list{
    margin-top:20px;
}

.reason{
    display:flex;
    gap:12px;

    padding:13px 0;

    border-bottom:1px solid #edf1ee;
}

.reason-icon{
    min-width:29px;
    height:29px;

    display:flex;
    align-items:center;
    justify-content:center;

    border-radius:50%;

    background:var(--green);
    color:#fff;

    font-size:9px;
}

.reason h3{
    font-size:10px;
}

.reason p{
    margin-top:2px;
    font-size:8px;
    color:var(--text);
}

.why-box{
    background:var(--green);
    color:#fff;

    padding:35px;

    border-radius:10px;

    box-shadow:0 20px 45px rgba(23,61,45,.15);
}

.why-box h3{
    font-family:Georgia,serif;
    font-size:25px;
}

.why-box p{
    margin-top:9px;
    font-size:9px;
    color:#cbd8d0;
}

.big-saving{
    margin-top:25px;

    font-family:Georgia,serif;
    font-size:45px;
    color:#fff;
}

.saving-label{
    font-size:9px;
    color:#c5d2ca;
}


/* =========================================================
   PUBLISHING CHANNELS
========================================================= */

.channels{
    background:var(--cream);
}

.channel-grid{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:14px;
}

.channel{
    background:#fff;

    border:1px solid var(--border);
    border-radius:8px;

    padding:22px;

    text-align:center;
}

.channel-logo{
    font-family:Georgia,serif;
    font-size:19px;
    font-weight:bold;
}

.channel p{
    margin-top:6px;

    font-size:8px;
    color:var(--text);
}


/* =========================================================
   COMPARISON
========================================================= */

.comparison{
    background:#fff;
}

.comparison-box{
    border:1px solid var(--border);
    border-radius:10px;
    overflow:hidden;
}

.comparison-header,
.comparison-row{
    display:grid;
    grid-template-columns:2fr 1fr 1fr 1fr;
}

.comparison-header{
    background:var(--green);
    color:#fff;
}

.comparison-header div,
.comparison-row div{
    padding:14px 15px;

    border-right:1px solid var(--border);

    font-size:9px;
}

.comparison-header div{
    font-weight:bold;
}

.comparison-row div{
    color:#5e6d64;
}

.comparison-row:nth-child(even){
    background:#f8faf8;
}

.comparison-row strong{
    color:var(--green);
}


/* =========================================================
   TESTIMONIALS
========================================================= */

.testimonials{
    background:var(--light);
}

.testimonial-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:15px;
}

.testimonial{
    background:#fff;

    border:1px solid var(--border);
    border-radius:9px;

    padding:22px;
}

.testimonial-stars{
    color:var(--gold);
    letter-spacing:2px;
    font-size:9px;
}

.testimonial p{
    margin-top:11px;

    font-family:Georgia,serif;

    font-size:10px;
    line-height:1.7;

    color:#526159;
}

.author{
    margin-top:17px;

    display:flex;
    align-items:center;
    gap:9px;
}

.avatar{
    width:30px;
    height:30px;

    display:flex;
    align-items:center;
    justify-content:center;

    border-radius:50%;

    background:var(--green);
    color:#fff;

    font-size:9px;
    font-weight:bold;
}

.author-name{
    font-size:9px;
    font-weight:bold;
}

.author-book{
    margin-top:2px;
    font-size:7px;
    color:#7c8981;
}


/* =========================================================
   FAQ
========================================================= */

.faq-list{
    max-width:850px;
    margin:auto;
}

.faq{
    border-top:1px solid var(--border);
}

.faq:last-child{
    border-bottom:1px solid var(--border);
}

.faq-question{
    width:100%;

    padding:18px 0;

    border:0;
    background:none;

    display:flex;
    align-items:center;
    justify-content:space-between;

    cursor:pointer;

    text-align:left;

    color:var(--green);

    font-size:10px;
    font-weight:bold;
}

.faq-question span{
    font-size:17px;
    color:var(--gold);
}

.faq-answer{
    display:none;

    padding:0 30px 18px 0;

    font-size:9px;
    color:var(--text);
}

.faq.active .faq-answer{
    display:block;
}


/* =========================================================
   FINAL CTA
========================================================= */

.final-cta{
    background:
        linear-gradient(
            135deg,
            var(--green),
            #214b38
        );

    color:#fff;

    padding:75px 24px;
}

.final-inner{
    max-width:850px;
    margin:auto;
    text-align:center;
}

.final-inner h2{
    font-family:Georgia,serif;
    font-size:43px;
    line-height:1.1;
}

.final-inner p{
    margin:13px auto 0;

    max-width:620px;

    color:#cbd8d0;
    font-size:10px;
}

.final-buttons{
    margin-top:25px;

    display:flex;
    justify-content:center;
    gap:10px;
}

.final-white{
    background:#fff;
    color:var(--green);
}

.final-outline{
    border:1px solid rgba(255,255,255,.45);
    color:#fff;
}


/* =========================================================
   FOOTER
========================================================= */

footer{
    background:#0d241b;
    color:#aab8b0;

    padding:45px 24px 18px;
}

.footer-inner{
    max-width:1100px;
    margin:auto;
}

.footer-grid{
    display:grid;
    grid-template-columns:1.6fr 1fr 1fr 1fr;
    gap:35px;
}

.footer-logo{
    font-family:Georgia,serif;
    font-size:23px;
    font-weight:bold;
    color:#fff;
}

.footer-logo span{
    color:var(--gold2);
}

.footer-col h3{
    color:#fff;
    font-size:10px;
    margin-bottom:11px;
}

.footer-col a,
.footer-col p{
    display:block;

    margin:5px 0;

    font-size:8px;
    color:#aab8b0;
}

.footer-col a:hover{
    color:#fff;
}

.copyright{
    margin-top:35px;
    padding-top:15px;

    border-top:1px solid rgba(255,255,255,.1);

    text-align:center;

    font-size:8px;
    color:#6f8178;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media(max-width:900px){

    .hero h1{
        font-size:45px;
    }

    .package-grid,
    .included-grid{
        grid-template-columns:1fr;
    }

    .why-grid{
        grid-template-columns:1fr;
    }

    .channel-grid{
        grid-template-columns:1fr 1fr;
    }

    .testimonial-grid{
        grid-template-columns:1fr;
    }

    .stats{
        grid-template-columns:1fr 1fr;
    }

    .stat:nth-child(2){
        border-right:none;
    }

    .stat{
        border-bottom:1px solid var(--border);
    }

    .footer-grid{
        grid-template-columns:1fr 1fr;
    }
}


@media(max-width:600px){

    .hero{
        padding:55px 17px;
    }

    .hero h1{
        font-size:34px;
    }

    .hero-subtitle{
        font-size:11px;
    }

    .section{
        padding:55px 17px;
    }

    .section-header h2,
    .why-copy h2{
        font-size:30px;
    }

    .stats{
        margin:0 15px;
    }

    .form-grid{
        grid-template-columns:1fr;
    }

    .form-group.full{
        grid-column:auto;
    }

    .form-footer{
        display:block;
    }

    .form-note{
        margin-bottom:12px;
    }

    .channel-grid{
        grid-template-columns:1fr;
    }

    .comparison{
        overflow-x:auto;
    }

    .comparison-box{
        min-width:650px;
    }

    .final-inner h2{
        font-size:32px;
    }

    .final-buttons{
        flex-direction:column;
    }

    .footer-grid{
        grid-template-columns:1fr;
    }
}

</style>
</head>


<body>


@include('frontend.partials.navbar')


@php
    $packageKeys = [
        'essentials' => 'essentials',
        'bestseller' => 'bestseller',
        'empire'     => 'empire',
    ];

    $packageMeta = [
        'essentials' => [
            'separate' => 1205,
            'save'     => 208,
            'save_pct' => '17%',
        ],
        'bestseller' => [
            'separate' => 3673,
            'save'     => 676,
            'save_pct' => '18%',
        ],
        'empire'     => [
            'separate' => 8693,
            'save'     => 3696,
            'save_pct' => '43%',
        ],
    ];

    $startingPrice = $plans->isNotEmpty() ? $plans->min('price') : null;
    $maxSaving     = $plans->isNotEmpty()
        ? collect($packageMeta)->max('save')
        : null;
    $maxSavingPct  = $plans->isNotEmpty()
        ? collect($packageMeta)->max('save_pct')
        : null;
@endphp


<!-- =====================================================
     HERO
===================================================== -->

<section class="hero">

    <div class="hero-inner">

        <div class="trust">

            <span class="stars">
                ★★★★★
            </span>

            <span>
                4.7 out of 5 · Based on 83 Trustpilot reviews
            </span>

        </div>


        <div class="hero-label">
            Most Popular Package
        </div>


        <h1>
            The Complete
            <span>Publishing Package</span>
        </h1>


        <p class="hero-subtitle">
            One team from manuscript to published book.
            Editing, design, formatting and publishing —
            coordinated under one managed project.
        </p>


        <div class="hero-meta">

            <span>
                Save up to
                <strong>{{ $maxSaving ? '£' . number_format($maxSaving) : '' }}</strong>
            </span>

            <span>
                <strong>6–13 weeks</strong>
                depending on tier
            </span>

            <span>
                <strong>1</strong>
                dedicated project manager
            </span>

            <span>
                <strong>100%</strong>
                rights & royalties kept
            </span>

        </div>


        <div class="hero-buttons">

            <a href="#packages"
               class="btn btn-primary">
                Get Started Today
            </a>

            <a href="#pricing"
               class="btn btn-secondary">
                See Pricing
            </a>

        </div>

    </div>

</section>


<!-- =====================================================
     STATS
===================================================== -->

<div class="stats">

    <div class="stat">

        <div class="stat-number">
            {{ $maxSavingPct ?? '43%' }}
        </div>

        <div class="stat-label">
            Maximum package saving
        </div>

    </div>


    <div class="stat">

        <div class="stat-number">
            6–13
        </div>

        <div class="stat-label">
            Weeks depending on tier
        </div>

    </div>


    <div class="stat">

        <div class="stat-number">
            1
        </div>

        <div class="stat-label">
            Dedicated project manager
        </div>

    </div>


    <div class="stat">

        <div class="stat-number">
            100%
        </div>

        <div class="stat-label">
            Rights & royalties retained
        </div>

    </div>

</div>


<!-- =====================================================
     FIND RIGHT PACKAGE
===================================================== -->

<section class="section fit-section">

    <div class="section-header">

        <div class="section-kicker">
            Find the right package
        </div>

        <h2>
            Tell us about your book.
        </h2>

        <p>
            Word count and where the manuscript is now —
            we'll recommend the tier that fits and confirm
            the exact cost before anything starts.
        </p>

    </div>


    <div class="fit-box">

        <div class="fit-top">

            <span>
                Package consultation
            </span>

            <span class="step">
                Step <strong>1 of 2</strong>
            </span>

        </div>


        <form id="fitForm">

            <div class="form-grid">


                <div class="form-group">

                    <label>
                        Word count
                    </label>

                    <input
                        type="number"
                        placeholder="e.g. 65000"
                    >

                </div>


                <div class="form-group">

                    <label>
                        Manuscript readiness
                    </label>

                    <select>

                        <option value="">
                            Select
                        </option>

                        <option>
                            Finished and ready
                        </option>

                        <option>
                            Needs proofreading
                        </option>

                        <option>
                            Needs copy editing
                        </option>

                        <option>
                            Needs developmental editing
                        </option>

                    </select>

                </div>


                <div class="form-group full">

                    <label>
                        Website
                        <small>(leave this empty)</small>
                    </label>

                    <input type="text">

                </div>


            </div>


            <div class="form-footer">

                <div class="form-note">
                    No call required. We reply within 1 business day.
                    Packages from {{ $startingPrice ? '£' . number_format($startingPrice) : '' }}.
                </div>

                <button
                    class="btn btn-primary continue-btn"
                    type="submit"
                >
                    Continue
                </button>

            </div>

        </form>

    </div>

</section>


<!-- =====================================================
     PACKAGE CARDS
===================================================== -->

<section class="section packages" id="packages">

    <div class="section-header">

        <div class="section-kicker">
            Choose your route
        </div>

        <h2>
            Three ways to publish professionally.
        </h2>

        <p>
            Every tier gives you one coordinated team,
            clear milestones and full ownership of your book.
        </p>

    </div>


    <div class="package-grid">

        @forelse ($plans as $plan)

            <article class="package {{ $plan->is_featured ? 'popular' : '' }}">

                @if ($plan->is_featured)

                    <div class="popular-label">
                        Most Popular
                    </div>

                @endif


                <div class="package-body">

                    <div class="package-name">
                        {{ $plan->name }}
                    </div>

                    <div class="package-price">
                        £{{ number_format($plan->price) }}
                    </div>

                    <div class="package-save">
                        Save £{{ number_format($packageMeta[$plan->key]['save'] ?? 0) }} ·
                        {{ $packageMeta[$plan->key]['save_pct'] ?? '' }}
                    </div>

                    <p class="package-description">
                        {{ $plan->description }}
                    </p>


                    <ul class="package-list">

                        @foreach ($plan->features ?? [] as $feature)

                            <li>
                                {{ $feature }}
                            </li>

                        @endforeach

                    </ul>


                    <a
                        href="{{ route('services.completePublishingPackageCheckout', ['package' => $packageKeys[$plan->key] ?? 'bestseller']) }}"
                        class="btn btn-primary package-btn"
                    >
                        {{ $plan->button_text }}
                    </a>

                </div>

            </article>

        @empty

            <p>
                Packages will be available soon.
            </p>

        @endforelse

    </div>

</section>


<!-- =====================================================
     INCLUDED SERVICES
===================================================== -->

<section class="section included-section">

    <div class="section-header">

        <div class="section-kicker">
            Included
        </div>

        <h2>
            The publishing stack is coordinated from the start.
        </h2>

        <p>
            Everything works together instead of being bought
            as disconnected services.
        </p>

    </div>


    <div class="included-grid">


        <div class="included-card">

            <div class="icon">✎</div>

            <h3>
                Professional Editing
            </h3>

            <p>
                Proofreading through developmental editing,
                depending on your selected tier.
            </p>

        </div>


        <div class="included-card">

            <div class="icon">◆</div>

            <h3>
                Custom Cover Design
            </h3>

            <p>
                Genre-matched cover design from basic
                through premium packages.
            </p>

        </div>


        <div class="included-card">

            <div class="icon">▤</div>

            <h3>
                Interior Formatting
            </h3>

            <p>
                Professional print and eBook interiors
                prepared for distribution.
            </p>

        </div>


        <div class="included-card">

            <div class="icon">◈</div>

            <h3>
                Multi-Platform Publishing
            </h3>

            <p>
                Retailer setup and distribution across
                the platforms included in your tier.
            </p>

        </div>


        <div class="included-card">

            <div class="icon">#</div>

            <h3>
                ISBN Assignment
            </h3>

            <p>
                ISBN assignment and registration support
                as part of the publishing process.
            </p>

        </div>


        <div class="included-card">

            <div class="icon">⌕</div>

            <h3>
                Metadata Optimization
            </h3>

            <p>
                Metadata structured to improve discoverability
                across retail listings.
            </p>

        </div>


        <div class="included-card">

            <div class="icon">T</div>

            <h3>
                Book Description
            </h3>

            <p>
                Professional book description copywriting
                for your retail listing.
            </p>

        </div>


        <div class="included-card">

            <div class="icon">◉</div>

            <h3>
                3D Mockups
            </h3>

            <p>
                Professional book mockups and marketing
                materials for launch.
            </p>

        </div>


        <div class="included-card">

            <div class="icon">→</div>

            <h3>
                Launch Support
            </h3>

            <p>
                Launch strategy consultation and post-launch
                support depending on your tier.
            </p>

        </div>

    </div>

</section>


<!-- =====================================================
     WHY COMPLETE PACKAGE
===================================================== -->

<section class="section">

    <div class="why-grid">


        <div class="why-copy">

            <div class="section-kicker">
                Package rationale
            </div>

            <h2>
                Everything You Need to Publish Professionally
            </h2>

            <p>
                One coordinated route from finished manuscript
                to published book. Editing, cover, interior,
                retailer setup and launch support are planned
                together.
            </p>


            <div class="reason-list">


                <div class="reason">

                    <div class="reason-icon">
                        ✓
                    </div>

                    <div>

                        <h3>
                            One coordinated scope
                        </h3>

                        <p>
                            Fewer disconnected jobs and fewer
                            handoffs throughout production.
                        </p>

                    </div>

                </div>


                <div class="reason">

                    <div class="reason-icon">
                        ✓
                    </div>

                    <div>

                        <h3>
                            Fewer handoffs, cleaner feedback
                        </h3>

                        <p>
                            A single workflow reduces duplicated
                            revision cycles.
                        </p>

                    </div>

                </div>


                <div class="reason">

                    <div class="reason-icon">
                        ✓
                    </div>

                    <div>

                        <h3>
                            Commercial consistency
                        </h3>

                        <p>
                            Cover, files, metadata and distribution
                            support the same positioning.
                        </p>

                    </div>

                </div>


                <div class="reason">

                    <div class="reason-icon">
                        ✓
                    </div>

                    <div>

                        <h3>
                            You retain full ownership
                        </h3>

                        <p>
                            Keep 100% of your rights, royalties
                            and creative control.
                        </p>

                    </div>

                </div>

            </div>

        </div>


        <div class="why-box">

            <h3>
                Buy the package.
                Save more.
            </h3>

            <p>
                The package combines services that would cost
                significantly more when purchased individually.
            </p>

            <div class="big-saving">
                {{ $maxSaving ? '£' . number_format($maxSaving) : '' }}
            </div>

            <div class="saving-label">
                Maximum saving compared with buying separately
            </div>

        </div>

    </div>

</section>


<!-- =====================================================
     PUBLISHING CHANNELS
===================================================== -->

<section class="section channels">

    <div class="section-header">

        <div class="section-kicker">
            Publishing channels
        </div>

        <h2>
            Build the book once.
            Release it where readers are.
        </h2>

        <p>
            Files, metadata and distribution are handled
            across the retail channels included in your package.
        </p>

    </div>


    <div class="channel-grid">


        <div class="channel">

            <div class="channel-logo">
                Amazon KDP
            </div>

            <p>
                Kindle Direct Publishing
            </p>

        </div>


        <div class="channel">

            <div class="channel-logo">
                IngramSpark
            </div>

            <p>
                Global print distribution
            </p>

        </div>


        <div class="channel">

            <div class="channel-logo">
                Apple Books
            </div>

            <p>
                Apple reading platform
            </p>

        </div>


        <div class="channel">

            <div class="channel-logo">
                Kobo
            </div>

            <p>
                Global ebook retail
            </p>

        </div>

    </div>

</section>


<!-- =====================================================
     COMPARISON
===================================================== -->

<section class="section comparison" id="pricing">

    <div class="section-header">

        <div class="section-kicker">
            Investment
        </div>

        <h2>
            Transparent Investment
        </h2>

        <p>
            Choose the package that fits your goals.
            No hidden fees.
        </p>

    </div>


    <div class="comparison-box">


        <div class="comparison-header">

            <div>
                Package
            </div>

            <div>
                Price
            </div>

            <div>
                Separate Cost
            </div>

            <div>
                You Save
            </div>

        </div>


        @forelse ($plans as $plan)

            <div class="comparison-row">

                <div>
                    <strong>{{ $plan->name }}</strong>
                </div>

                <div>
                    £{{ number_format($plan->price) }}
                </div>

                <div>
                    £{{ number_format($packageMeta[$plan->key]['separate'] ?? 0) }}
                </div>

                <div>
                    £{{ number_format($packageMeta[$plan->key]['save'] ?? 0) }}
                </div>

            </div>

        @empty

            <div class="comparison-row">

                <div>
                    <strong>No packages yet</strong>
                </div>

                <div>—</div>

                <div>—</div>

                <div>—</div>

            </div>

        @endforelse

    </div>

</section>


<!-- =====================================================
     TESTIMONIALS
===================================================== -->

<section class="section testimonials">

    <div class="section-header">

        <div class="section-kicker">
            Authors who published with HMD
        </div>

        <h2>
            Trusted by Authors Worldwide
        </h2>

        <p>
            Real authors who went through the full managed
            publishing route.
        </p>

    </div>


    <div class="testimonial-grid">


        <div class="testimonial">

            <div class="testimonial-stars">
                ★★★★★
            </div>

            <p>
                “Started with just an unedited manuscript.
                HMD handled everything — editing, formatting,
                cover, and ads. Six months later, I'm a
                bestselling author in three categories.”
            </p>

            <div class="author">

                <div class="avatar">
                    S
                </div>

                <div>

                    <div class="author-name">
                        Sahil
                    </div>

                    <div class="author-book">
                        Author of THE FREEDOM FORMULA
                    </div>

                </div>

            </div>

        </div>



        <div class="testimonial">

            <div class="testimonial-stars">
                ★★★★★
            </div>

            <p>
                “The team's communication is outstanding.
                They explained every step, met every deadline,
                and the quality exceeded expectations.”
            </p>

            <div class="author">

                <div class="avatar">
                    J
                </div>

                <div>

                    <div class="author-name">
                        Dr. James Orrington
                    </div>

                    <div class="author-book">
                        Author of The Throne and Liberty
                    </div>

                </div>

            </div>

        </div>



        <div class="testimonial">

            <div class="testimonial-stars">
                ★★★★★
            </div>

            <p>
                “As a first-time author, I was overwhelmed.
                They guided me through ISBN registration,
                metadata optimization and pricing strategy.”
            </p>

            <div class="author">

                <div class="avatar">
                    A
                </div>

                <div>

                    <div class="author-name">
                        Avery Brooks
                    </div>

                    <div class="author-book">
                        Author of The Science of Getting Rich
                    </div>

                </div>

            </div>

        </div>



        <div class="testimonial">

            <div class="testimonial-stars">
                ★★★★★
            </div>

            <p>
                “We run a small press. HMD handles our
                formatting and distribution, freeing us to
                focus on acquisitions.”
            </p>

            <div class="author">

                <div class="avatar">
                    C
                </div>

                <div>

                    <div class="author-name">
                        Chris Coll & James Artman
                    </div>

                    <div class="author-book">
                        Authors of Founder H.E.R.O
                    </div>

                </div>

            </div>

        </div>



        <div class="testimonial">

            <div class="testimonial-stars">
                ★★★★★
            </div>

            <p>
                “They helped me go wide after being exclusive
                to Amazon. Now I reach readers on Apple,
                Kobo, and Google Play.”
            </p>

            <div class="author">

                <div class="avatar">
                    D
                </div>

                <div>

                    <div class="author-name">
                        Dr. Dawn Airhart Witte
                    </div>

                    <div class="author-book">
                        Author of You are a Dream Come True
                    </div>

                </div>

            </div>

        </div>



        <div class="testimonial">

            <div class="testimonial-stars">
                ★★★★★
            </div>

            <p>
                “Launching my book was complex.
                They coordinated everything, including
                pre-orders, pricing and cross-linking.”
            </p>

            <div class="author">

                <div class="avatar">
                    C
                </div>

                <div>

                    <div class="author-name">
                        Chad Teague
                    </div>

                    <div class="author-book">
                        Author of Onboard Like A Fraternity
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =====================================================
     FAQ
===================================================== -->

<section class="section">

    <div class="section-header">

        <div class="section-kicker">
            FAQ
        </div>

        <h2>
            Questions authors usually ask.
        </h2>

        <p>
            Clear answers on timeline, scope, rights,
            revisions and what happens next.
        </p>

    </div>


    <div class="faq-list">


        <div class="faq">

            <button class="faq-question">

                How much does a complete publishing package cost?

                <span>+</span>

            </button>

            <div class="faq-answer">

                HMD's Complete Publishing Package has three tiers:
                @foreach ($plans as $index => $plan)
                    @if ($index === 0)
                        {{ $plan->name }} at £{{ number_format($plan->price) }},
                    @elseif ($index === $plans->count() - 1)
                        and {{ $plan->name }} at £{{ number_format($plan->price) }}.
                    @else
                        {{ $plan->name }} at £{{ number_format($plan->price) }},
                    @endif
                @endforeach
                Each covers editing, cover design, interior
                formatting, retailer setup and launch support
                for one price.

            </div>

        </div>



        <div class="faq">

            <button class="faq-question">

                Is a package actually cheaper than buying
                each service separately?

                <span>+</span>

            </button>

            <div class="faq-answer">

                Yes. The package pricing is designed to provide
                savings compared with buying the equivalent
                services individually. The page shows savings
                of
                @foreach ($plans as $index => $plan)
                    @if ($index === 0)
                        £{{ number_format($packageMeta[$plan->key]['save'] ?? 0) }},
                    @elseif ($index === $plans->count() - 1)
                        and £{{ number_format($packageMeta[$plan->key]['save'] ?? 0) }}
                        across the three tiers.
                    @else
                        £{{ number_format($packageMeta[$plan->key]['save'] ?? 0) }},
                    @endif
                @endforeach

            </div>

        </div>



        <div class="faq">

            <button class="faq-question">

                How long does the complete publishing process take?

                <span>+</span>

            </button>

            <div class="faq-answer">

                Author Essentials takes approximately 6 weeks,
                Bestseller Bundle takes approximately 9 weeks,
                and Empire Builder takes approximately 13 weeks.
                Timing also depends on review and approval speed.

            </div>

        </div>



        <div class="faq">

            <button class="faq-question">

                Do I keep the rights and royalties to my book?

                <span>+</span>

            </button>

            <div class="faq-answer">

                Yes. You retain copyright, distribution rights
                and 100% of the royalties paid by retailers.
                HMD acts as a service provider rather than taking
                a percentage of your book sales.

            </div>

        </div>



        <div class="faq">

            <button class="faq-question">

                What is not included in the package?

                <span>+</span>

            </button>

            <div class="faq-answer">

                The package starts from a finished manuscript.
                Writing the book, marketing beyond the launch
                support stated in your tier, print runs or stock,
                and words beyond your tier's cap are not included.

            </div>

        </div>



        <div class="faq">

            <button class="faq-question">

                What happens if my manuscript is longer than
                the word limit?

                <span>+</span>

            </button>

            <div class="faq-answer">

                Additional editing can be quoted separately
                based on the word count and selected tier.
                The additional cost is confirmed before work
                begins.

            </div>

        </div>

    </div>

</section>


<!-- =====================================================
     FINAL CTA
===================================================== -->

<section class="final-cta">

    <div class="final-inner">

        <h2>
            Ready to publish your book professionally?
        </h2>

        <p>
            Choose the route that matches the book you want
            to release. If you're unsure, start with a
            consultation and we'll help map the right scope.
        </p>


        <div class="final-buttons">

            <a
                href="#packages"
                class="btn final-white"
            >
                Start Your Package
            </a>

            <a
                href="{{ route('services.consultation') }}"
                class="btn final-outline"
            >
                Book a Free Consultation
            </a>

        </div>

    </div>

</section>


<!-- =====================================================
     FOOTER
===================================================== -->

<footer>

    <div class="footer-inner">

        <div class="footer-grid">


            <div class="footer-col">

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


            <div class="footer-col">

                <h3>
                    Services
                </h3>

                <a href="/services/book-writing">Book Writing</a>
                <a href="/services/editing">Editing Services</a>
                <a href="/services/book-cover-design">Book Cover Design</a>
                <a href="/services/book-formatting">Book Formatting</a>
                <a href="{{ route('services.completePublishingPackage') }}">Complete Package</a>

            </div>


            <div class="footer-col">

                <h3>
                    Company
                </h3>

                <a href="/#pricing">Pricing</a>
                <a href="/tools">Tools</a>
                <a href="{{ route('portfolio') }}">Portfolio</a>
                <a href="/about">About</a>
                <a href="/contact">Contact</a>

            </div>


            <div class="footer-col">

                <h3>
                    Support
                </h3>

                <a href="#">Support Center</a>
                <a href="#">Knowledge Base</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Service</a>

            </div>

        </div>


        <div class="copyright">
            © 2026 HMD Publishing. All rights reserved.
        </div>

    </div>

</footer>


<!-- =====================================================
     JAVASCRIPT
===================================================== -->

<script>

/* =========================================================
   FAQ ACCORDION
========================================================= */

const faqButtons =
    document.querySelectorAll(".faq-question");


faqButtons.forEach(function(button){

    button.addEventListener("click",function(){

        const currentFAQ =
            this.parentElement;

        const isOpen =
            currentFAQ.classList.contains("active");


        document
        .querySelectorAll(".faq")
        .forEach(function(item){

            item.classList.remove("active");

            const icon =
                item.querySelector(".faq-question span");

            icon.textContent = "+";

        });


        if(!isOpen){

            currentFAQ.classList.add("active");

            this.querySelector("span")
                .textContent = "−";

        }

    });

});


/* =========================================================
   CONSULTATION FORM
========================================================= */

const fitForm =
    document.getElementById("fitForm");

if (fitForm) {

    fitForm.addEventListener("submit",function(e){

        e.preventDefault();

        alert(
            "Thanks! Your package details have been received.\n\n" +
            "A team member would normally review your information " +
            "and reply within 1 business day."
        );

    });

}

</script>

</body>
</html>
