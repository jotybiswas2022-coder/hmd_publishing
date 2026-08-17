<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Book Launch Strategy | HMD Publishing</title>

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
    font-family:Arial, Helvetica, sans-serif;
    color:#183c2d;
    background:#f7f8f6;
    line-height:1.5;
}

a{
    color:inherit;
    text-decoration:none;
}

button{
    font-family:inherit;
}


/* =========================================================
   VARIABLES
========================================================= */

:root{
    --green:#183c2d;
    --dark:#10291f;
    --gold:#b4864a;
    --gold-light:#d2a267;

    --cream:#f7f8f6;
    --white:#ffffff;

    --text:#58665f;
    --muted:#87918b;

    --border:#dce5df;
    --soft:#edf3ef;
}


/* =========================================================
   HERO
========================================================= */

.hero{
    padding:80px 20px 75px;

    background:
        radial-gradient(
            circle at 12% 15%,
            rgba(180,134,74,.09),
            transparent 30%
        ),
        radial-gradient(
            circle at 90% 80%,
            rgba(24,60,45,.06),
            transparent 30%
        ),
        #f7f8f6;
}

.hero-inner{
    max-width:1100px;
    margin:auto;
}

.hero-content{
    max-width:850px;
}

.eyebrow{
    display:inline-block;

    margin-bottom:15px;

    font-size:10px;
    font-weight:700;

    text-transform:uppercase;
    letter-spacing:1.8px;

    color:#b4864a;
}

.hero h1{
    max-width:880px;

    font-family:Georgia,"Times New Roman",serif;

    font-size:57px;
    line-height:1.06;
    font-weight:500;

    letter-spacing:-1.4px;

    color:#183c2d;
}

.hero p{
    max-width:730px;

    margin-top:20px;

    font-size:13px;
    line-height:1.8;

    color:#5c6962;
}

.hero-actions{
    display:flex;
    align-items:center;

    gap:12px;

    margin-top:27px;
}

.btn-primary{
    display:inline-flex;
    align-items:center;
    justify-content:center;

    min-height:45px;

    padding:0 21px;

    border-radius:5px;

    background:#183c2d;
    color:#fff;

    font-size:10px;
    font-weight:700;

    transition:.25s;
}

.btn-primary:hover{
    background:#b4864a;
    transform:translateY(-2px);
}

.btn-secondary{
    display:inline-flex;
    align-items:center;
    justify-content:center;

    min-height:45px;

    padding:0 21px;

    border:1px solid #b9c7bf;

    border-radius:5px;

    color:#183c2d;

    font-size:10px;
    font-weight:700;

    background:transparent;

    transition:.25s;
}

.btn-secondary:hover{
    background:#fff;
    border-color:#183c2d;
}


/* =========================================================
   HERO STATS
========================================================= */

.hero-stats{
    display:grid;

    grid-template-columns:
        repeat(4,1fr);

    max-width:900px;

    margin-top:55px;

    border-top:1px solid #d9e1dc;
    border-bottom:1px solid #d9e1dc;
}

.hero-stat{
    min-height:100px;

    padding:20px 18px;

    border-right:1px solid #d9e1dc;
}

.hero-stat:last-child{
    border-right:0;
}

.hero-stat-number{
    font-family:Georgia,"Times New Roman",serif;

    font-size:27px;

    color:#183c2d;
}

.hero-stat-text{
    margin-top:4px;

    font-size:9px;
    line-height:1.5;

    color:#78847e;
}


/* =========================================================
   PACKAGE OVERVIEW
========================================================= */

.overview{
    padding:75px 20px;

    background:#fff;
}

.container{
    max-width:1080px;
    margin:auto;
}

.section-heading{
    margin-bottom:32px;
}

.section-heading .eyebrow{
    margin-bottom:9px;
}

.section-heading h2{
    max-width:650px;

    font-family:Georgia,"Times New Roman",serif;

    font-size:39px;
    line-height:1.15;

    font-weight:500;
}

.section-heading p{
    max-width:680px;

    margin-top:10px;

    font-size:11px;
    line-height:1.7;

    color:#68756e;
}


/* =========================================================
   PACKAGE CARDS
========================================================= */

.package-grid{
    display:grid;

    grid-template-columns:
        repeat(3,1fr);

    gap:17px;
}

.package{
    position:relative;

    padding:26px 23px;

    background:#fff;

    border:1px solid var(--border);

    border-radius:9px;

    transition:.25s;
}

.package:hover{
    transform:translateY(-5px);

    box-shadow:
        0 15px 35px rgba(20,55,40,.08);
}

.package.popular{
    border-color:#b4864a;

    box-shadow:
        0 10px 35px rgba(180,134,74,.12);
}

.popular-label{
    position:absolute;

    top:0;
    right:20px;

    padding:5px 9px;

    background:#b4864a;

    color:#fff;

    border-radius:0 0 5px 5px;

    font-size:7px;
    font-weight:700;

    text-transform:uppercase;
    letter-spacing:.7px;
}

.package-label{
    font-size:8px;

    color:#b4864a;

    font-weight:700;

    text-transform:uppercase;
    letter-spacing:1px;
}

.package h3{
    margin-top:8px;

    font-family:Georgia,"Times New Roman",serif;

    font-size:25px;

    font-weight:500;
}

.package-price{
    margin-top:12px;

    font-family:Georgia,"Times New Roman",serif;

    font-size:35px;

    color:#183c2d;
}

.package-type{
    margin-top:2px;

    font-size:8px;

    color:#8a958f;
}

.package ul{
    list-style:none;

    margin-top:20px;

    padding-top:17px;

    border-top:1px solid var(--border);
}

.package li{
    position:relative;

    padding-left:17px;

    margin:9px 0;

    font-size:9px;

    color:#5c6962;
}

.package li::before{
    content:"✓";

    position:absolute;

    left:0;

    color:#b4864a;

    font-weight:bold;
}

.package .btn-primary{
    width:100%;

    margin-top:15px;
}


/* =========================================================
   WHAT THIS FIXES
========================================================= */

.fixes{
    padding:80px 20px;

    background:#edf3ef;
}

.fix-grid{
    display:grid;

    grid-template-columns:
        repeat(3,1fr);

    gap:16px;
}

.fix-card{
    padding:27px;

    background:#fff;

    border:1px solid #dce5df;

    border-radius:8px;
}

.fix-number{
    font-family:Georgia,"Times New Roman",serif;

    font-size:14px;

    color:#b4864a;
}

.fix-card h3{
    margin-top:10px;

    font-family:Georgia,"Times New Roman",serif;

    font-size:20px;

    line-height:1.25;

    font-weight:500;
}

.fix-card p{
    margin-top:10px;

    font-size:9px;

    line-height:1.75;

    color:#68756e;
}


/* =========================================================
   PUBLISHING STACK
========================================================= */

.stack{
    padding:75px 20px;

    background:#fff;
}

.stack-inner{
    display:grid;

    grid-template-columns:1fr 1fr;

    gap:55px;

    align-items:center;
}

.stack-text h2{
    font-family:Georgia,"Times New Roman",serif;

    font-size:38px;

    font-weight:500;

    line-height:1.15;
}

.stack-text p{
    margin-top:14px;

    font-size:10px;

    line-height:1.8;

    color:#66736c;
}

.stack-list{
    display:grid;

    grid-template-columns:1fr 1fr;

    gap:10px;

    margin-top:20px;
}

.stack-item{
    padding:13px;

    background:#f7f9f7;

    border:1px solid #e1e8e3;

    border-radius:6px;

    font-size:9px;

    font-weight:700;

    color:#365244;
}

.stack-visual{
    min-height:310px;

    display:flex;
    align-items:center;
    justify-content:center;

    border-radius:10px;

    background:
        linear-gradient(
            145deg,
            #183c2d,
            #244d3b
        );

    overflow:hidden;

    position:relative;
}

.stack-visual::before{
    content:"";

    position:absolute;

    width:260px;
    height:260px;

    border:1px solid rgba(255,255,255,.12);

    border-radius:50%;
}

.stack-visual::after{
    content:"";

    position:absolute;

    width:170px;
    height:170px;

    border:1px solid rgba(255,255,255,.10);

    border-radius:50%;
}

.stack-center{
    position:relative;
    z-index:2;

    width:115px;
    height:115px;

    display:flex;
    align-items:center;
    justify-content:center;

    text-align:center;

    border:1px solid rgba(255,255,255,.25);

    border-radius:50%;

    background:rgba(255,255,255,.08);

    color:#fff;

    font-family:Georgia,"Times New Roman",serif;

    font-size:16px;
}


/* =========================================================
   STRATEGIC PLANNING
========================================================= */

.strategy{
    padding:80px 20px;

    background:#f7f8f6;
}

.strategy-grid{
    display:grid;

    grid-template-columns:
        1.1fr .9fr;

    gap:55px;
}

.strategy-content h2{
    font-family:Georgia,"Times New Roman",serif;

    font-size:39px;

    font-weight:500;

    line-height:1.12;
}

.strategy-content > p{
    margin-top:14px;

    font-size:10px;

    line-height:1.8;

    color:#66736c;
}

.strategy-points{
    margin-top:25px;

    display:grid;

    gap:10px;
}

.strategy-point{
    padding:14px 16px;

    border-left:2px solid #b4864a;

    background:#fff;

    border-radius:0 6px 6px 0;

    font-size:9px;

    color:#53625a;
}

.strategy-box{
    padding:30px;

    background:#183c2d;

    color:#fff;

    border-radius:9px;
}

.strategy-box .small{
    color:#c6d4cc;

    font-size:8px;

    text-transform:uppercase;

    letter-spacing:1.2px;
}

.strategy-box h3{
    margin-top:10px;

    font-family:Georgia,"Times New Roman",serif;

    font-size:29px;

    font-weight:500;
}

.strategy-box p{
    margin-top:11px;

    font-size:9px;

    line-height:1.7;

    color:#c9d5cf;
}

.includes{
    margin-top:23px;

    padding-top:20px;

    border-top:1px solid rgba(255,255,255,.16);
}

.includes-title{
    font-size:8px;

    font-weight:700;

    text-transform:uppercase;

    letter-spacing:1px;

    color:#d2a267;
}

.includes ul{
    list-style:none;

    margin-top:9px;
}

.includes li{
    margin:8px 0;

    font-size:9px;

    color:#d5dfda;
}

.includes li::before{
    content:"✓";

    margin-right:7px;

    color:#d2a267;
}


/* =========================================================
   LAUNCH WINDOW
========================================================= */

.launch-window{
    padding:80px 20px;

    background:#fff;
}

.launch-header{
    max-width:780px;

    margin-bottom:35px;
}

.launch-header h2{
    font-family:Georgia,"Times New Roman",serif;

    font-size:40px;

    font-weight:500;

    line-height:1.12;
}

.launch-header p{
    margin-top:13px;

    font-size:10px;

    line-height:1.8;

    color:#66736c;
}

.window-grid{
    display:grid;

    grid-template-columns:
        1fr 1fr;

    gap:15px;
}

.window-card{
    padding:21px;

    border:1px solid var(--border);

    border-radius:7px;

    background:#fafbfa;
}

.window-card h3{
    font-family:Georgia,"Times New Roman",serif;

    font-size:18px;

    font-weight:500;
}

.window-card p{
    margin-top:8px;

    font-size:9px;

    line-height:1.7;

    color:#69766f;
}

.window-list{
    margin-top:28px;

    display:grid;

    grid-template-columns:
        repeat(4,1fr);

    gap:10px;
}

.window-list-item{
    padding:17px;

    background:#edf3ef;

    border-radius:6px;

    font-size:9px;

    line-height:1.5;

    color:#40564a;
}


/* =========================================================
   INVESTMENT
========================================================= */

.investment{
    padding:85px 20px;

    background:#edf3ef;
}

.investment-header{
    text-align:center;

    margin-bottom:35px;
}

.investment-header h2{
    font-family:Georgia,"Times New Roman",serif;

    font-size:40px;

    font-weight:500;
}

.investment-header p{
    margin-top:7px;

    font-size:10px;

    color:#6c7972;
}

.price-grid{
    display:grid;

    grid-template-columns:
        repeat(3,1fr);

    gap:17px;

    max-width:1050px;

    margin:auto;
}

.price-card{
    padding:28px 24px;

    background:#fff;

    border:1px solid var(--border);

    border-radius:9px;

    position:relative;

    transition:.25s;
}

.price-card:hover{
    transform:translateY(-5px);

    box-shadow:0 15px 35px rgba(20,55,40,.08);
}

.price-card.featured{
    border:2px solid #b4864a;

    transform:translateY(-7px);
}

.price-card.featured:hover{
    transform:translateY(-11px);
}

.price-badge{
    position:absolute;

    top:0;
    left:50%;

    transform:translateX(-50%);

    padding:5px 12px;

    background:#b4864a;

    color:#fff;

    border-radius:0 0 5px 5px;

    font-size:7px;

    font-weight:bold;

    text-transform:uppercase;

    white-space:nowrap;
}

.price-card h3{
    font-family:Georgia,"Times New Roman",serif;

    font-size:25px;

    font-weight:500;
}

.price{
    margin-top:10px;

    font-family:Georgia,"Times New Roman",serif;

    font-size:37px;

    color:#183c2d;
}

.price-description{
    margin-top:2px;

    font-size:8px;

    color:#8b958f;
}

.price-card ul{
    list-style:none;

    margin-top:20px;

    padding-top:18px;

    border-top:1px solid var(--border);
}

.price-card li{
    margin:9px 0;

    padding-left:17px;

    position:relative;

    font-size:9px;

    color:#56655d;
}

.price-card li::before{
    content:"✓";

    position:absolute;

    left:0;

    color:#b4864a;
}

.price-card .btn-primary{
    width:100%;

    margin-top:18px;
}


/* =========================================================
   SEQUENCING
========================================================= */

.sequencing{
    padding:80px 20px;

    background:#fff;
}

.sequence-header{
    max-width:800px;
}

.sequence-header h2{
    font-family:Georgia,"Times New Roman",serif;

    font-size:40px;

    font-weight:500;

    line-height:1.12;
}

.sequence-header p{
    margin-top:12px;

    font-size:10px;

    line-height:1.8;

    color:#65726b;
}

.sequence-grid{
    display:grid;

    grid-template-columns:
        repeat(3,1fr);

    gap:16px;

    margin-top:35px;
}

.sequence-card{
    padding:26px;

    background:#f7f8f6;

    border:1px solid #e0e7e2;

    border-radius:8px;
}

.sequence-number{
    font-size:8px;

    text-transform:uppercase;

    letter-spacing:1.2px;

    font-weight:700;

    color:#b4864a;
}

.sequence-card h3{
    margin-top:9px;

    font-family:Georgia,"Times New Roman",serif;

    font-size:20px;

    font-weight:500;
}

.sequence-card p{
    margin-top:9px;

    font-size:9px;

    line-height:1.75;

    color:#68756e;
}


/* =========================================================
   PROCESS
========================================================= */

.process{
    padding:80px 20px;

    background:#f7f8f6;
}

.process-heading{
    text-align:center;

    margin-bottom:38px;
}

.process-heading h2{
    font-family:Georgia,"Times New Roman",serif;

    font-size:40px;

    font-weight:500;
}

.process-heading p{
    margin-top:7px;

    font-size:10px;

    color:#6e7a73;
}

.process-grid{
    display:grid;

    grid-template-columns:
        repeat(4,1fr);

    gap:15px;

    position:relative;
}

.process-card{
    text-align:center;

    padding:20px 15px;
}

.process-circle{
    width:53px;
    height:53px;

    margin:0 auto 15px;

    display:flex;
    align-items:center;
    justify-content:center;

    border-radius:50%;

    background:#183c2d;

    color:#fff;

    font-family:Georgia,"Times New Roman",serif;

    font-size:16px;

    position:relative;

    z-index:2;
}

.process-card h3{
    font-family:Georgia,"Times New Roman",serif;

    font-size:18px;

    font-weight:500;
}

.process-card p{
    margin-top:7px;

    font-size:9px;

    line-height:1.65;

    color:#6b7871;
}


/* =========================================================
   FAQ
========================================================= */

.faq{
    padding:80px 20px;

    background:#fff;
}

.faq-heading{
    max-width:650px;

    margin-bottom:28px;
}

.faq-heading h2{
    font-family:Georgia,"Times New Roman",serif;

    font-size:39px;

    font-weight:500;
}

.faq-heading p{
    margin-top:8px;

    font-size:10px;

    color:#718078;
}

.faq-list{
    max-width:850px;
}

.faq-item{
    border-top:1px solid var(--border);
}

.faq-item:last-child{
    border-bottom:1px solid var(--border);
}

.faq-question{
    width:100%;

    display:flex;

    align-items:center;
    justify-content:space-between;

    gap:20px;

    padding:18px 0;

    border:0;

    background:none;

    color:#183c2d;

    text-align:left;

    font-size:10px;
    font-weight:700;
}

.faq-plus{
    width:24px;
    height:24px;

    display:flex;
    align-items:center;
    justify-content:center;

    border:1px solid #ccd7d0;

    border-radius:50%;

    flex-shrink:0;

    font-size:14px;

    color:#b4864a;

    transition:.25s;
}

.faq-answer{
    max-height:0;

    overflow:hidden;

    transition:max-height .3s ease;

    font-size:9px;

    line-height:1.8;

    color:#6a776f;
}

.faq-answer-inner{
    padding:0 45px 18px 0;
}

.faq-item.active .faq-plus{
    transform:rotate(45deg);

    background:#183c2d;

    color:#fff;

    border-color:#183c2d;
}


/* =========================================================
   FINAL CTA
========================================================= */

.final-cta{
    padding:90px 20px;

    background:#183c2d;

    color:#fff;

    text-align:center;
}

.final-cta .eyebrow{
    color:#d2a267;
}

.final-cta h2{
    max-width:750px;

    margin:auto;

    font-family:Georgia,"Times New Roman",serif;

    font-size:43px;

    font-weight:500;

    line-height:1.12;
}

.final-cta p{
    max-width:650px;

    margin:14px auto 0;

    font-size:10px;

    line-height:1.7;

    color:#c5d3cb;
}

.final-actions{
    display:flex;

    justify-content:center;

    gap:12px;

    margin-top:25px;
}

.final-cta .btn-primary{
    background:#fff;

    color:#183c2d;
}

.final-cta .btn-primary:hover{
    background:#d2a267;

    color:#fff;
}

.final-cta .btn-secondary{
    border-color:rgba(255,255,255,.35);

    color:#fff;
}

.final-cta .btn-secondary:hover{
    background:#fff;

    color:#183c2d;
}


/* =========================================================
   FOOTER
========================================================= */

.footer{
    padding:45px 20px 20px;

    background:#0d241b;

    color:#a5b4ac;
}

.footer-inner{
    max-width:1080px;
    margin:auto;
}

.footer-grid{
    display:grid;

    grid-template-columns:
        1.6fr 1fr 1fr 1fr;

    gap:30px;
}

.footer-logo{
    font-family:Georgia,"Times New Roman",serif;

    font-size:23px;

    font-weight:bold;

    color:#fff;
}

.footer-logo span{
    color:#d2a267;
}

.footer-desc{
    max-width:280px;

    margin-top:9px;

    font-size:8px;

    line-height:1.7;

    color:#84968d;
}

.footer-column h4{
    margin-bottom:11px;

    font-size:9px;

    color:#fff;
}

.footer-column a{
    display:block;

    margin:6px 0;

    font-size:8px;

    color:#91a198;
}

.footer-column a:hover{
    color:#fff;
}

.copyright{
    margin-top:35px;

    padding-top:15px;

    border-top:1px solid rgba(255,255,255,.1);

    text-align:center;

    font-size:7px;

    color:#667a70;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media(max-width:900px){

    .nav{
        display:none;
    }

    .hero h1{
        font-size:45px;
    }

    .hero-stats{
        grid-template-columns:1fr 1fr;
    }

    .hero-stat:nth-child(2){
        border-right:0;
    }

    .package-grid,
    .fix-grid,
    .price-grid{
        grid-template-columns:1fr;
    }

    .stack-inner,
    .strategy-grid{
        grid-template-columns:1fr;
    }

    .window-list{
        grid-template-columns:1fr 1fr;
    }

    .sequence-grid{
        grid-template-columns:1fr;
    }

    .process-grid{
        grid-template-columns:1fr 1fr;
    }

    .footer-grid{
        grid-template-columns:1fr 1fr;
    }

    .price-card.featured{
        transform:none;
    }

}


@media(max-width:600px){

    .hero{
        padding:55px 16px;
    }

    .hero h1{
        font-size:36px;

        letter-spacing:-.7px;
    }

    .hero p{
        font-size:11px;
    }

    .hero-actions,
    .final-actions{
        flex-direction:column;

        align-items:stretch;
    }

    .hero-stats{
        grid-template-columns:1fr 1fr;
    }

    .hero-stat{
        padding:16px 10px;
    }

    .hero-stat-number{
        font-size:23px;
    }

    .section-heading h2,
    .stack-text h2,
    .strategy-content h2,
    .launch-header h2,
    .investment-header h2,
    .sequence-header h2,
    .process-heading h2,
    .faq-heading h2{
        font-size:31px;
    }

    .stack-list{
        grid-template-columns:1fr;
    }

    .window-grid{
        grid-template-columns:1fr;
    }

    .window-list{
        grid-template-columns:1fr;
    }

    .process-grid{
        grid-template-columns:1fr;
    }

    .footer-grid{
        grid-template-columns:1fr;
    }

}

</style>
</head>


<body>


@include('frontend.partials.navbar')


<!-- =====================================================
     HERO
===================================================== -->

<section class="hero">

    <div class="hero-inner">

        <div class="hero-content">

            <div class="eyebrow">
                Marketing
            </div>

            <h1>
                Launch Strategy That Turns A Release Date Into A Coordinated Sales Window.
            </h1>

            <p>
                Launch planning, campaign sequencing, and execution support
                for authors who need their release to feel deliberate,
                visible, and commercially focused rather than improvised.
            </p>


            <div class="hero-actions">

                <a href="#pricing" class="btn-primary">
                    Start your launch plan
                </a>

                <a href="#sequencing" class="btn-secondary">
                    See launch sequencing
                </a>

            </div>


            <div class="hero-stats">

                <div class="hero-stat">

                    <div class="hero-stat-number">
                        4–8
                    </div>

                    <div class="hero-stat-text">
                        weeks of prep cadence
                    </div>

                </div>


                <div class="hero-stat">

                    <div class="hero-stat-number">
                        Launch
                    </div>

                    <div class="hero-stat-text">
                        window orchestration
                    </div>

                </div>


                <div class="hero-stat">

                    <div class="hero-stat-number">
                        Multi
                    </div>

                    <div class="hero-stat-text">
                        channel sequencing
                    </div>

                </div>


                <div class="hero-stat">

                    <div class="hero-stat-number">
                        Post
                    </div>

                    <div class="hero-stat-text">
                        release follow-through
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =====================================================
     PACKAGE OVERVIEW
===================================================== -->

<section class="overview">

    <div class="container">

        <div class="section-heading">

            <div class="eyebrow">
                Package overview
            </div>

            <h2>
                Choose the level of launch support your book needs.
            </h2>

            <p>
                From a focused strategy document to full launch execution,
                each package is designed around the level of planning,
                coordination, and support you need.
            </p>

        </div>


        <div class="package-grid">


            <div class="package">

                <div class="package-label">
                    Strategy document
                </div>

                <h3>
                    Launch Blueprint
                </h3>

                <div class="package-price">
                    £197
                </div>

                <div class="package-type">
                    Custom launch plan
                </div>

                <ul>
                    <li>Custom launch plan</li>
                    <li>Timeline & milestones</li>
                    <li>Platform recommendations</li>
                    <li>Email sequence template</li>
                </ul>

                <a href="{{ route('services.bookLaunchStrategyCheckout', ['package' => 'blueprint']) }}" class="btn-primary">
                    Get Started
                </a>

            </div>


            <div class="package popular">

                <div class="popular-label">
                    Most popular
                </div>

                <div class="package-label">
                    Full support
                </div>

                <h3>
                    Launch Manager
                </h3>

                <div class="package-price">
                    £397
                </div>

                <div class="package-type">
                    Weekly strategy support
                </div>

                <ul>
                    <li>Everything in Blueprint</li>
                    <li>Weekly strategy calls</li>
                    <li>Launch team coordination</li>
                    <li>Social media planning</li>
                    <li>ARC management</li>
                </ul>

                <a href="{{ route('services.bookLaunchStrategyCheckout', ['package' => 'manager']) }}" class="btn-primary">
                    Get Started
                </a>

            </div>


            <div class="package">

                <div class="package-label">
                    Done-for-you
                </div>

                <h3>
                    Bestseller Launch
                </h3>

                <div class="package-price">
                    £597
                </div>

                <div class="package-type">
                    Full execution support
                </div>

                <ul>
                    <li>Everything in Launch Manager</li>
                    <li>Full execution support</li>
                    <li>Ad campaign management</li>
                    <li>PR outreach</li>
                    <li>Post-launch review</li>
                </ul>

                <a href="{{ route('services.bookLaunchStrategyCheckout', ['package' => 'bestseller']) }}" class="btn-primary">
                    Get Started
                </a>

            </div>


        </div>

    </div>

</section>


<!-- =====================================================
     WHAT THIS FIXES
===================================================== -->

<section class="fixes">

    <div class="container">

        <div class="section-heading">

            <div class="eyebrow">
                What this route fixes
            </div>

            <h2>
                Launches perform better when all the moving parts support the same week.
            </h2>

        </div>


        <div class="fix-grid">


            <div class="fix-card">

                <div class="fix-number">
                    01
                </div>

                <h3>
                    One coordinated release window
                </h3>

                <p>
                    Reviews, email, social, retailer updates,
                    paid traffic, and supporting proof become
                    more effective when scheduled around one
                    coherent release window.
                </p>

            </div>


            <div class="fix-card">

                <div class="fix-number">
                    02
                </div>

                <h3>
                    Plan around the bottleneck
                </h3>

                <p>
                    Some books need stronger proof before launch.
                    Others need pre-order momentum, category
                    targeting, retailer conversion, or sharper
                    message sequencing.
                </p>

            </div>


            <div class="fix-card">

                <div class="fix-number">
                    03
                </div>

                <h3>
                    Keep momentum after release
                </h3>

                <p>
                    A useful launch plan includes what happens
                    after release week, what gets measured, and
                    how the next decision is made.
                </p>

            </div>


        </div>

    </div>

</section>


<!-- =====================================================
     PUBLISHING STACK
===================================================== -->

<section class="stack">

    <div class="container">

        <div class="stack-inner">


            <div class="stack-text">

                <div class="eyebrow">
                    Publishing channels
                </div>

                <h2>
                    Build the book once, then release it across the channels that matter.
                </h2>

                <p>
                    Files, metadata, and distribution are coordinated
                    across the retail channels that matter to your launch.
                </p>


                <div class="stack-list">

                    <div class="stack-item">
                        Amazon KDP
                    </div>

                    <div class="stack-item">
                        IngramSpark
                    </div>

                    <div class="stack-item">
                        Apple Books
                    </div>

                    <div class="stack-item">
                        Kobo
                    </div>

                </div>

            </div>


            <div class="stack-visual">

                <div class="stack-center">
                    Your<br>Book
                </div>

            </div>


        </div>

    </div>

</section>


<!-- =====================================================
     STRATEGIC PLANNING
===================================================== -->

<section class="strategy">

    <div class="container">

        <div class="strategy-grid">


            <div class="strategy-content">

                <div class="eyebrow">
                    Package rationale
                </div>

                <h2>
                    Strategic Launch Planning
                </h2>

                <p>
                    A successful book launch requires timing and
                    coordination. We help you build a launch team,
                    plan promotions, and generate buzz.
                </p>


                <div class="strategy-points">

                    <div class="strategy-point">
                        Step-by-step launch plan
                    </div>

                    <div class="strategy-point">
                        Launch team management
                    </div>

                    <div class="strategy-point">
                        Promo scheduling
                    </div>

                    <div class="strategy-point">
                        Bestseller targeting
                    </div>

                </div>

            </div>


            <div class="strategy-box">

                <div class="small">
                    Included
                </div>

                <h3>
                    The publishing stack is coordinated from the start.
                </h3>

                <p>
                    Every launch element is designed to support the
                    same release window and the same commercial objective.
                </p>


                <div class="includes">

                    <div class="includes-title">
                        What every plan includes
                    </div>

                    <ul>
                        <li>Launch calendar</li>
                        <li>Email templates</li>
                        <li>Social media schedule</li>
                        <li>Ad strategy</li>
                    </ul>

                </div>

            </div>


        </div>

    </div>

</section>


<!-- =====================================================
     LAUNCH WINDOW
===================================================== -->

<section class="launch-window">

    <div class="container">

        <div class="launch-header">

            <div class="eyebrow">
                Launch window
            </div>

            <h2>
                The launch week works best when the audience is warmed up before the book is live.
            </h2>

            <p>
                Release-day activity only performs when the groundwork
                is already in place: messaging is clear, assets are ready,
                early proof is accounted for, and the audience knows where
                to focus its attention.
            </p>

        </div>


        <div class="window-grid">

            <div class="window-card">

                <h3>
                    Build anticipation
                </h3>

                <p>
                    Pre-launch communication is timed to build anticipation
                    without exhausting attention.
                </p>

            </div>


            <div class="window-card">

                <h3>
                    Check conversion assets
                </h3>

                <p>
                    Retail and conversion assets are checked before
                    launch traffic starts.
                </p>

            </div>


        </div>


        <div class="window-list">

            <div class="window-list-item">
                ARC timing and review-readiness
            </div>

            <div class="window-list-item">
                Pre-order or release-week email sequencing
            </div>

            <div class="window-list-item">
                Retail updates, category checks, and proof placement
            </div>

            <div class="window-list-item">
                Social, ads, and visibility pushes
            </div>

        </div>

    </div>

</section>


<!-- =====================================================
     INVESTMENT
===================================================== -->

<section class="investment" id="pricing">

    <div class="container">

        <div class="investment-header">

            <div class="eyebrow">
                Investment
            </div>

            <h2>
                Launch Strategy Packages
            </h2>

            <p>
                Choose the level of support that matches your launch.
            </p>

        </div>


        <div class="price-grid">


            <div class="price-card">

                <h3>
                    Launch Blueprint
                </h3>

                <div class="price">
                    £197
                </div>

                <div class="price-description">
                    Strategy document
                </div>

                <ul>
                    <li>Custom launch plan</li>
                    <li>Timeline & milestones</li>
                    <li>Platform recommendations</li>
                    <li>Email sequence template</li>
                </ul>

                <a href="{{ route('services.bookLaunchStrategyCheckout', ['package' => 'blueprint']) }}" class="btn-primary">
                    Get Started
                </a>

            </div>


            <div class="price-card featured">

                <div class="price-badge">
                    Most popular
                </div>

                <h3>
                    Launch Manager
                </h3>

                <div class="price">
                    £397
                </div>

                <div class="price-description">
                    Full support
                </div>

                <ul>
                    <li>Everything in Blueprint</li>
                    <li>Weekly strategy calls</li>
                    <li>Launch team coordination</li>
                    <li>Social media planning</li>
                    <li>ARC management</li>
                </ul>

                <a href="{{ route('services.bookLaunchStrategyCheckout', ['package' => 'manager']) }}" class="btn-primary">
                    Get Started
                </a>

            </div>


            <div class="price-card">

                <h3>
                    Bestseller Launch
                </h3>

                <div class="price">
                    £597
                </div>

                <div class="price-description">
                    Done-for-you
                </div>

                <ul>
                    <li>Everything in Launch Manager</li>
                    <li>Full execution support</li>
                    <li>Ad campaign management</li>
                    <li>PR outreach</li>
                    <li>Post-launch review</li>
                </ul>

                <a href="{{ route('services.bookLaunchStrategyCheckout', ['package' => 'bestseller']) }}" class="btn-primary">
                    Get Started
                </a>

            </div>


        </div>

    </div>

</section>


<!-- =====================================================
     LAUNCH SEQUENCING
===================================================== -->

<section class="sequencing" id="sequencing">

    <div class="container">

        <div class="sequence-header">

            <div class="eyebrow">
                Launch sequencing
            </div>

            <h2>
                A strong launch plan is really a sequencing system for attention.
            </h2>

            <p>
                The point is not to do everything. It is to decide what
                needs to happen first, what has to be synchronized, and
                what should wait until the launch has earned the next
                layer of spend or effort.
            </p>

        </div>


        <div class="sequence-grid">


            <div class="sequence-card">

                <div class="sequence-number">
                    Phase 01
                </div>

                <h3>
                    Pre-launch build
                </h3>

                <p>
                    Prepare the audience, assets, and positioning so
                    launch-week traffic has the highest chance of
                    converting into early momentum.
                </p>

            </div>


            <div class="sequence-card">

                <div class="sequence-number">
                    Phase 02
                </div>

                <h3>
                    Release-week coordination
                </h3>

                <p>
                    Sequence promotions, email, social, and visibility
                    pushes so the campaign feels concentrated rather
                    than diluted.
                </p>

            </div>


            <div class="sequence-card">

                <div class="sequence-number">
                    Phase 03
                </div>

                <h3>
                    Post-launch follow-through
                </h3>

                <p>
                    Use the first results to decide what to sustain,
                    what to scale, and where the next growth lever
                    actually sits.
                </p>

            </div>


        </div>

    </div>

</section>


<!-- =====================================================
     PROCESS
===================================================== -->

<section class="process">

    <div class="container">

        <div class="process-heading">

            <div class="eyebrow">
                Process
            </div>

            <h2>
                Launch Phases
            </h2>

            <p>
                A coordinated workflow from preparation through analysis.
            </p>

        </div>


        <div class="process-grid">


            <div class="process-card">

                <div class="process-circle">
                    1
                </div>

                <h3>
                    Pre-Launch
                </h3>

                <p>
                    Building anticipation and gathering your team.
                </p>

            </div>


            <div class="process-card">

                <div class="process-circle">
                    2
                </div>

                <h3>
                    Launch Week
                </h3>

                <p>
                    Executing the plan for maximum impact.
                </p>

            </div>


            <div class="process-card">

                <div class="process-circle">
                    3
                </div>

                <h3>
                    Post-Launch
                </h3>

                <p>
                    Sustaining momentum and gathering reviews.
                </p>

            </div>


            <div class="process-card">

                <div class="process-circle">
                    4
                </div>

                <h3>
                    Analysis
                </h3>

                <p>
                    Reviewing performance and adjusting strategy.
                </p>

            </div>


        </div>

    </div>

</section>


<!-- =====================================================
     FAQ
===================================================== -->

<section class="faq">

    <div class="container">

        <div class="faq-heading">

            <div class="eyebrow">
                FAQ
            </div>

            <h2>
                Questions authors usually ask before they commit.
            </h2>

            <p>
                Clear answers on timeline, scope, rights, revisions,
                and what happens after checkout.
            </p>

        </div>


        <div class="faq-list">


            <div class="faq-item">

                <button class="faq-question">

                    <span>
                        How far ahead should a launch plan start?
                    </span>

                    <span class="faq-plus">
                        +
                    </span>

                </button>

                <div class="faq-answer">

                    <div class="faq-answer-inner">

                        A serious launch usually benefits from four to
                        eight weeks of preparation before release,
                        depending on whether pre-orders, ARC coordination,
                        ads, and list activity are part of the plan.

                    </div>

                </div>

            </div>


            <div class="faq-item">

                <button class="faq-question">

                    <span>
                        Is this only for brand-new books?
                    </span>

                    <span class="faq-plus">
                        +
                    </span>

                </button>

                <div class="faq-answer">

                    <div class="faq-answer-inner">

                        No. The same framework can support a relaunch,
                        backlist revival, or a more coordinated campaign
                        for a book that previously went live without a
                        structured release window.

                    </div>

                </div>

            </div>


            <div class="faq-item">

                <button class="faq-question">

                    <span>
                        Does launch strategy include execution support?
                    </span>

                    <span class="faq-plus">
                        +
                    </span>

                </button>

                <div class="faq-answer">

                    <div class="faq-answer-inner">

                        That depends on the package. Some authors only
                        need the roadmap and sequencing, while others
                        need coordination across reviews, email, social,
                        ads, and supporting launch assets.

                    </div>

                </div>

            </div>


            <div class="faq-item">

                <button class="faq-question">

                    <span>
                        Can a launch plan help without a huge audience?
                    </span>

                    <span class="faq-plus">
                        +
                    </span>

                </button>

                <div class="faq-answer">

                    <div class="faq-answer-inner">

                        Yes. A strong launch strategy matters even more
                        when the audience is small, because timing,
                        message clarity, and concentrated proof have to
                        work harder for every reader reached.

                    </div>

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

        <div class="eyebrow">
            Next step
        </div>

        <h2>
            Build a release window that feels coordinated, not improvised.
        </h2>

        <p>
            Choose the launch package that matches the level of planning,
            coordination, and execution support you need before the book
            goes live.
        </p>


        <div class="final-actions">

            <a href="#pricing" class="btn-primary">
                Choose your launch package
            </a>

            <a href="{{ route('services.consultation') }}" class="btn-secondary">
                Talk through the launch
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


            <div>

                <div class="footer-logo">
                    HMD<span>Publishing</span>
                </div>

                <div class="footer-desc">
                    Professional publishing services for authors
                    worldwide. 10,000+ books brought to market.
                </div>

            </div>


            <div class="footer-column">

                <h4>Services</h4>

                <a href="/services/book-writing">Editing Services</a>
                <a href="/services/book-cover-design">Book Cover Design</a>
                <a href="{{ route('services.bookFormatting') }}">Book Formatting</a>
                <a href="/services/publishing">Publishing & Distribution</a>
                <a href="{{ route('services.completePublishingPackage') }}">Complete Package</a>

            </div>


            <div class="footer-column">

                <h4>Marketing</h4>

                <a href="{{ route('services.bookLaunchStrategy') }}">Launch Strategy</a>
                <a href="#">Amazon Advertising</a>
                <a href="#">PR & Podcast Outreach</a>
                <a href="#">Book Marketing</a>

            </div>


            <div class="footer-column">

                <h4>Company</h4>

                <a href="/#pricing">Pricing</a>
                <a href="/tools">Tools</a>
                <a href="{{ route('portfolio') }}">Portfolio</a>
                <a href="/about">About</a>
                <a href="/contact">Contact</a>

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

const faqItems =
    document.querySelectorAll(".faq-item");


faqItems.forEach(function(item){

    const question =
        item.querySelector(".faq-question");

    const answer =
        item.querySelector(".faq-answer");


    question.addEventListener(
        "click",
        function(){

            const isOpen =
                item.classList.contains("active");


            /* Close all */

            faqItems.forEach(function(other){

                other.classList.remove("active");

                other.querySelector(
                    ".faq-answer"
                ).style.maxHeight = null;

            });


            /* Open selected */

            if(!isOpen){

                item.classList.add("active");

                answer.style.maxHeight =
                    answer.scrollHeight + "px";

            }

        }
    );

});


/* =========================================================
   PACKAGE BUTTON DEMO
========================================================= */

document.querySelectorAll(
    ".package .btn-primary, .price-card .btn-primary"
).forEach(function(button){

    button.addEventListener(
        "click",
        function(event){

            const card =
                button.closest(
                    ".package, .price-card"
                );

            if(card){

                const name =
                    card.querySelector("h3");

                if(name){

                    console.log(
                        "Selected package:",
                        name.textContent.trim()
                    );

                }

            }

        }
    );

});

</script>

</body>
</html>
