<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>Book Cover Design | HMD Publishing</title>

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
    color:#173d2d;
    background:#fff;
    line-height:1.6;
}

a{
    text-decoration:none;
    color:inherit;
}

button,
input,
textarea{
    font-family:inherit;
}

img{
    max-width:100%;
    display:block;
}


/* =========================================================
   VARIABLES
========================================================= */

:root{
    --green:#173d2d;
    --green-2:#204b38;
    --gold:#b77e35;
    --gold-light:#d7b47a;
    --cream:#f7f4ed;
    --soft:#f5f8f5;
    --border:#dfe6e1;
    --text:#64736a;
}


/* =========================================================
   GENERAL
========================================================= */

.container{
    max-width:1180px;
    margin:auto;
    padding:0 20px;
}

.section-label{
    color:var(--gold);
    text-transform:uppercase;
    font-size:10px;
    font-weight:800;
    letter-spacing:2px;
    margin-bottom:10px;
}

.section-title{
    font-family:Georgia,serif;
    font-size:clamp(36px,4.5vw,55px);
    line-height:1.08;
    letter-spacing:-2px;
    color:var(--green);
}

.section-text{
    color:var(--text);
    font-size:14px;
    max-width:690px;
}


/* =========================================================
   HERO
========================================================= */

.hero{
    background:
        radial-gradient(
            circle at 80% 15%,
            rgba(185,126,53,.12),
            transparent 30%
        ),
        linear-gradient(
            180deg,
            #f5f8f5 0%,
            #ffffff 100%
        );

    padding:78px 0 70px;
}

.hero-grid{
    display:grid;
    grid-template-columns:1.05fr .95fr;
    gap:70px;
    align-items:center;
}

.rating{
    display:flex;
    align-items:center;
    gap:8px;

    color:#6e7973;
    font-size:12px;

    margin-bottom:17px;
}

.stars{
    color:#bd873b;
    letter-spacing:2px;
    font-size:16px;
}

.hero h1{
    font-family:Georgia,serif;
    color:var(--green);

    font-size:clamp(45px,5vw,69px);
    line-height:1.02;

    letter-spacing:-3px;

    margin-bottom:20px;
}

.hero h1 span{
    color:var(--gold);
}

.hero-text{
    max-width:650px;

    color:#68756e;

    font-size:16px;
    line-height:1.8;

    margin-bottom:24px;
}

.hero-buttons{
    display:flex;
    gap:11px;
    flex-wrap:wrap;
}

.btn{
    display:inline-flex;
    align-items:center;
    justify-content:center;

    min-height:45px;
    padding:0 21px;

    border-radius:7px;

    font-size:12px;
    font-weight:800;

    border:1px solid transparent;

    transition:.25s;

    cursor:pointer;
}

.btn-primary{
    background:var(--green);
    color:#fff;
}

.btn-primary:hover{
    background:var(--gold);
    transform:translateY(-2px);
}

.btn-outline{
    background:#fff;
    border-color:var(--green);
    color:var(--green);
}

.btn-outline:hover{
    background:var(--green);
    color:#fff;
}


/* HERO COVER */

.hero-visual{
    min-height:470px;

    position:relative;

    display:flex;
    align-items:center;
    justify-content:center;
}

.book-cover{
    width:285px;
    height:405px;

    position:relative;

    overflow:hidden;

    border-radius:3px;

    background:
        linear-gradient(
            145deg,
            #182b28,
            #765c3e 52%,
            #1d302b
        );

    box-shadow:
        25px 28px 65px rgba(0,0,0,.24);

    transform:rotate(-4deg);
}

.book-cover:before{
    content:"";

    position:absolute;

    width:230px;
    height:230px;

    border-radius:50%;

    right:-75px;
    top:50px;

    background:
        radial-gradient(
            circle,
            #c4a26d,
            #70583f
        );

    opacity:.9;
}

.book-cover:after{
    content:"";

    position:absolute;

    width:190px;
    height:270px;

    left:-75px;
    bottom:-85px;

    border-radius:50%;

    background:#213f36;

    opacity:.8;
}

.cover-content{
    position:absolute;

    z-index:3;

    top:65px;
    left:28px;
    right:28px;

    text-align:center;

    color:#f3e7c9;
}

.cover-small{
    font-size:8px;
    letter-spacing:4px;
    text-transform:uppercase;
}

.cover-title{
    font-family:Georgia,serif;

    font-size:39px;
    line-height:.95;

    margin-top:20px;

    text-shadow:
        0 2px 5px rgba(0,0,0,.4);
}

.cover-line{
    width:55px;
    height:1px;

    background:#d2b57b;

    margin:18px auto;
}

.cover-author{
    font-size:10px;
    letter-spacing:3px;
    text-transform:uppercase;
}

.visual-card{
    position:absolute;

    background:#fff;

    border:1px solid var(--border);

    border-radius:10px;

    padding:13px 16px;

    box-shadow:0 15px 40px rgba(0,0,0,.1);

    font-size:10px;

    color:#4f6056;
}

.visual-card strong{
    display:block;

    color:#294839;

    font-size:11px;

    margin-bottom:2px;
}

.visual-one{
    right:5px;
    top:65px;
}

.visual-two{
    left:5px;
    bottom:70px;
}


/* =========================================================
   FREE MOCKUP FORM
========================================================= */

.mockup{
    padding:70px 0 80px;
}

.mockup-box{
    max-width:850px;
    margin:auto;

    background:#fff;

    border:1px solid var(--border);

    border-radius:15px;

    padding:40px;

    box-shadow:
        0 20px 60px rgba(20,55,40,.07);

    text-align:center;
}

.mockup-box h2{
    font-family:Georgia,serif;

    font-size:34px;

    color:var(--green);

    margin-bottom:6px;
}

.mockup-box > p{
    color:#7b857f;
    font-size:13px;
    margin-bottom:28px;
}

.genre-list{
    display:flex;
    justify-content:center;
    flex-wrap:wrap;
    gap:8px;

    margin-bottom:20px;
}

.genre-btn{
    padding:8px 14px;

    border:1px solid #dce4df;

    background:#fff;

    color:#53645a;

    border-radius:20px;

    font-size:11px;
    font-weight:700;

    cursor:pointer;

    transition:.2s;
}

.genre-btn:hover,
.genre-btn.active{
    background:var(--green);
    color:#fff;
    border-color:var(--green);
}

.mockup-form{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:12px;
}

.mockup-form textarea{
    grid-column:1 / -1;

    min-height:105px;

    padding:13px;

    border:1px solid #dbe3de;

    border-radius:7px;

    resize:vertical;

    outline:none;

    font-size:12px;
}

.mockup-form input{
    height:45px;

    border:1px solid #dbe3de;

    border-radius:7px;

    padding:0 13px;

    outline:none;

    font-size:12px;
}

.mockup-form input:focus,
.mockup-form textarea:focus{
    border-color:#8ca999;

    box-shadow:
        0 0 0 3px rgba(23,61,45,.06);
}

.mockup-submit{
    grid-column:1 / -1;
    height:47px;

    border:0;

    background:var(--green);

    color:#fff;

    border-radius:7px;

    font-size:12px;
    font-weight:800;

    cursor:pointer;
}

.mockup-submit:hover{
    background:var(--gold);
}

.form-note{
    color:#909892;

    font-size:10px;

    margin-top:11px;
}


/* =========================================================
   FREE MOCKUP FEATURES
========================================================= */

.features{
    background:var(--soft);

    padding:80px 0;
}

.feature-grid{
    display:grid;
    grid-template-columns:1fr 1fr;

    gap:60px;

    align-items:center;
}

.feature-list{
    margin-top:22px;
}

.feature-item{
    display:flex;
    gap:13px;

    padding:12px 0;

    border-bottom:1px solid #e5ebe6;
}

.check{
    width:25px;
    height:25px;

    flex-shrink:0;

    display:flex;
    align-items:center;
    justify-content:center;

    background:#e3eee6;

    border-radius:50%;

    color:#2d573f;

    font-size:11px;
    font-weight:bold;
}

.feature-item strong{
    display:block;

    color:#2e483b;

    font-size:12px;
}

.feature-item span{
    color:#7b857f;

    font-size:10px;
}


/* MOCKUP VISUAL */

.mockup-visual{
    min-height:380px;

    background:
        linear-gradient(
            135deg,
            #e9dfca,
            #dbe8df
        );

    border-radius:14px;

    display:flex;

    align-items:center;
    justify-content:center;

    position:relative;
}

.mini-cover{
    width:190px;
    height:270px;

    position:relative;

    background:
        linear-gradient(
            145deg,
            #30251d,
            #9c704c,
            #263f35
        );

    box-shadow:
        20px 25px 45px rgba(0,0,0,.2);

    transform:rotate(-5deg);
}

.mini-cover-content{
    position:absolute;

    inset:35px 18px;

    color:#f4e8cc;

    text-align:center;
}

.mini-cover-title{
    font-family:Georgia,serif;

    font-size:24px;

    line-height:1;

    margin-top:35px;
}

.mockup-label{
    position:absolute;

    background:#fff;

    padding:9px 12px;

    border-radius:7px;

    box-shadow:0 10px 25px rgba(0,0,0,.1);

    font-size:9px;

    color:#405447;
}

.label-one{
    right:30px;
    top:50px;
}

.label-two{
    left:25px;
    bottom:55px;
}


/* =========================================================
   PORTFOLIO
========================================================= */

.portfolio{
    padding:90px 0;
}

.center-heading{
    text-align:center;
    max-width:700px;
    margin:0 auto 40px;
}

.center-heading .section-text{
    margin:12px auto 0;
}

.portfolio-grid{
    display:grid;

    grid-template-columns:
        repeat(4,1fr);

    gap:15px;
}

.portfolio-card{
    height:310px;

    position:relative;

    overflow:hidden;

    border-radius:7px;

    background:#263c35;

    transition:.3s;
}

.portfolio-card:hover{
    transform:translateY(-5px);

    box-shadow:
        0 20px 40px rgba(0,0,0,.12);
}

.portfolio-art{
    width:100%;
    height:100%;

    display:flex;

    align-items:flex-end;

    justify-content:center;

    padding-bottom:35px;

    color:#fff;

    text-align:center;

    position:relative;
}

.portfolio-art:before{
    content:"";

    position:absolute;

    width:180px;
    height:180px;

    border-radius:50%;

    background:rgba(210,170,105,.55);

    top:30px;
    right:-50px;
}

.portfolio-art:after{
    content:"";

    position:absolute;

    width:160px;
    height:160px;

    border-radius:50%;

    background:rgba(20,55,42,.8);

    bottom:-50px;
    left:-40px;
}

.art-1{
    background:linear-gradient(145deg,#301e26,#9c5e64);
}

.art-2{
    background:linear-gradient(145deg,#d5b27c,#62583c);
}

.art-3{
    background:linear-gradient(145deg,#142e3a,#6b758d);
}

.art-4{
    background:linear-gradient(145deg,#231c22,#72594d);
}

.art-title{
    position:relative;
    z-index:3;

    font-family:Georgia,serif;

    font-size:22px;

    line-height:1.05;

    max-width:170px;
}

.portfolio-info{
    position:absolute;

    bottom:0;
    left:0;
    right:0;

    padding:12px;

    background:
        linear-gradient(
            transparent,
            rgba(0,0,0,.7)
        );

    color:#fff;

    z-index:5;

    font-size:9px;
}


/* =========================================================
   EVERY DESIGN INCLUDES
========================================================= */

.included{
    background:var(--soft);

    padding:90px 0;
}

.included-grid{
    display:grid;

    grid-template-columns:
        .9fr
        1.1fr;

    gap:65px;

    align-items:center;
}

.included-list{
    display:grid;

    grid-template-columns:1fr 1fr;

    gap:10px;

    margin-top:25px;
}

.included-box{
    background:#fff;

    border:1px solid #e2e8e3;

    border-radius:9px;

    padding:17px;
}

.included-box h3{
    font-family:Georgia,serif;

    color:#2b493a;

    font-size:16px;

    margin-bottom:5px;
}

.included-box p{
    color:#78837c;

    font-size:10px;
}


/* =========================================================
   THUMBNAIL TEST
========================================================= */

.thumbnail{
    padding:90px 0;
}

.thumbnail-grid{
    display:grid;

    grid-template-columns:
        1fr
        1fr;

    gap:60px;

    align-items:center;
}

.thumbnail-demo{
    display:flex;

    align-items:center;
    justify-content:center;

    gap:25px;

    min-height:370px;

    background:#f5f6f4;

    border-radius:14px;
}

.thumb-cover{
    width:100px;
    height:145px;

    background:
        linear-gradient(
            145deg,
            #172b27,
            #a7784d,
            #233e34
        );

    box-shadow:0 15px 25px rgba(0,0,0,.18);

    position:relative;
}

.thumb-cover:after{
    content:"BOOK TITLE";

    position:absolute;

    top:57px;
    left:8px;
    right:8px;

    text-align:center;

    font-family:Georgia,serif;

    font-size:11px;

    color:#fff;
}

.thumb-cover.small{
    width:56px;
    height:82px;
}

.thumb-cover.small:after{
    font-size:6px;
    top:34px;
}

.thumbnail-copy{
    max-width:550px;
}

.thumbnail-copy p{
    color:#717d76;

    font-size:13px;

    margin-top:14px;
}


/* =========================================================
   PUBLISHING CHANNELS
========================================================= */

.channels{
    padding:75px 0;

    text-align:center;
}

.channel-grid{
    display:grid;

    grid-template-columns:
        repeat(4,1fr);

    gap:14px;

    margin-top:35px;
}

.channel{
    min-height:90px;

    display:flex;

    align-items:center;
    justify-content:center;

    border:1px solid var(--border);

    border-radius:10px;

    font-weight:800;

    color:#334d40;

    background:#fff;
}


/* =========================================================
   PRICING
========================================================= */

.pricing{
    background:#f6f8f6;

    padding:90px 0;
}

.pricing-grid{
    display:grid;

    grid-template-columns:
        repeat(3,1fr);

    gap:18px;

    margin-top:45px;

    align-items:stretch;
}

.price-card{
    background:#fff;

    border:1px solid var(--border);

    border-radius:13px;

    padding:28px;

    position:relative;

    transition:.25s;
}

.price-card:hover{
    transform:translateY(-5px);

    box-shadow:
        0 20px 50px rgba(20,55,40,.09);
}

.price-card.popular-card{
    border:2px solid var(--green);

    transform:translateY(-8px);

    box-shadow:
        0 20px 50px rgba(20,55,40,.12);
}

.price-card.popular-card:hover{
    transform:translateY(-13px);
}

.popular{
    position:absolute;

    top:-13px;
    left:23px;

    padding:5px 12px;

    background:var(--green);

    color:#fff;

    border-radius:20px;

    font-size:9px;

    text-transform:uppercase;

    font-weight:800;

    letter-spacing:1px;
}

.price-card h3{
    font-family:Georgia,serif;

    font-size:23px;

    color:#214535;

    margin-bottom:4px;
}

.price{
    font-size:42px;

    font-weight:800;

    color:var(--green);

    margin:8px 0;
}

.price-desc{
    min-height:40px;

    color:#7e8882;

    font-size:10px;
}

.price-list{
    list-style:none;

    margin:20px 0;
}

.price-list li{
    padding:8px 0;

    border-bottom:1px solid #edf0ed;

    color:#5f6d65;

    font-size:11px;
}

.price-list li:before{
    content:"✓";

    color:var(--gold);

    font-weight:bold;

    margin-right:8px;
}

.full{
    width:100%;
}


/* =========================================================
   ADDONS
========================================================= */

.addons{
    text-align:center;

    padding:45px 0 0;
}

.addons p{
    color:#737f78;
    font-size:11px;
}

.addon-links{
    margin-top:10px;

    color:var(--gold);

    font-size:11px;
}


/* =========================================================
   TESTIMONIALS
========================================================= */

.testimonials{
    padding:90px 0;
}

.testimonial-grid{
    display:grid;

    grid-template-columns:
        repeat(3,1fr);

    gap:18px;

    margin-top:40px;
}

.testimonial{
    border:1px solid var(--border);

    border-radius:12px;

    padding:25px;

    background:#fff;
}

.testimonial-stars{
    color:#bd873b;

    letter-spacing:2px;

    font-size:13px;

    margin-bottom:14px;
}

.quote{
    color:#53645b;

    font-family:Georgia,serif;

    font-size:14px;

    line-height:1.7;

    margin-bottom:20px;
}

.author{
    display:flex;
    align-items:center;

    gap:10px;
}

.author-avatar{
    width:35px;
    height:35px;

    border-radius:50%;

    display:flex;
    align-items:center;
    justify-content:center;

    background:#e5ede7;

    color:#385745;

    font-size:11px;

    font-weight:bold;
}

.author strong{
    display:block;

    color:#334c3f;

    font-size:11px;
}

.author span{
    color:#8a938e;

    font-size:9px;
}


/* =========================================================
   PROCESS
========================================================= */

.process{
    background:var(--green);

    color:#fff;

    padding:90px 0;
}

.process .section-label{
    color:#d1a15e;
}

.process .section-title{
    color:#fff;
}

.process-intro{
    color:#bac8c0;

    font-size:13px;

    max-width:680px;

    margin-top:12px;
}

.process-grid{
    display:grid;

    grid-template-columns:
        repeat(4,1fr);

    gap:18px;

    margin-top:45px;
}

.step{
    background:#204b38;

    border:1px solid rgba(255,255,255,.08);

    border-radius:11px;

    padding:23px;
}

.step-number{
    width:43px;
    height:43px;

    display:flex;
    align-items:center;
    justify-content:center;

    background:#d0a05c;

    color:var(--green);

    border-radius:50%;

    font-weight:800;

    margin-bottom:17px;
}

.step h3{
    font-family:Georgia,serif;

    font-size:19px;

    margin-bottom:6px;
}

.step p{
    color:#b8c7be;

    font-size:10px;
}


/* =========================================================
   FAQ
========================================================= */

.faq{
    background:#f6f8f6;

    padding:90px 0;
}

.faq-list{
    max-width:850px;

    margin:40px auto 0;
}

.faq-item{
    background:#fff;

    border:1px solid var(--border);

    border-radius:8px;

    margin-bottom:9px;

    overflow:hidden;
}

.faq-question{
    width:100%;

    border:0;

    background:#fff;

    padding:18px 20px;

    display:flex;
    align-items:center;
    justify-content:space-between;

    cursor:pointer;

    color:#334c40;

    font-size:12px;

    font-weight:800;

    text-align:left;
}

.faq-question span{
    font-size:20px;

    transition:.25s;
}

.faq-answer{
    max-height:0;

    overflow:hidden;

    transition:.3s ease;
}

.faq-answer p{
    padding:0 20px 19px;

    color:#758078;

    font-size:11px;

    line-height:1.7;
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
    background:
        radial-gradient(
            circle at 50% 0%,
            rgba(191,143,72,.13),
            transparent 35%
        ),
        var(--green);

    color:#fff;

    text-align:center;

    padding:95px 0;
}

.final-cta .section-label{
    color:#d2a361;
}

.final-cta .section-title{
    color:#fff;

    max-width:800px;

    margin:auto;
}

.final-cta p{
    color:#bfcbc4;

    max-width:650px;

    margin:15px auto 25px;

    font-size:13px;
}

.final-buttons{
    display:flex;

    justify-content:center;

    gap:10px;

    flex-wrap:wrap;
}


/* =========================================================
   FOOTER
========================================================= */

footer{
    background:#102d22;

    color:#aebbb3;

    padding:48px 0 20px;
}

.footer-grid{
    display:grid;

    grid-template-columns:
        1.4fr 1fr 1fr 1fr;

    gap:30px;
}

.footer-logo{
    font-family:Georgia,serif;

    color:#fff;

    font-size:24px;

    font-weight:bold;
}

.footer-logo span{
    color:#c18b42;
}

footer h4{
    color:#fff;

    font-size:12px;

    margin-bottom:12px;
}

footer a,
footer p{
    display:block;

    color:#aebbb3;

    font-size:10px;

    margin:6px 0;
}

footer a:hover{
    color:#fff;
}

.copyright{
    border-top:1px solid rgba(255,255,255,.1);

    margin-top:30px;

    padding-top:18px;

    text-align:center;

    font-size:9px;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media(max-width:1000px){

    .hero-grid{
        grid-template-columns:1fr;
    }

    .feature-grid,
    .included-grid,
    .thumbnail-grid{
        grid-template-columns:1fr;
    }

    .portfolio-grid{
        grid-template-columns:1fr 1fr;
    }

    .pricing-grid{
        grid-template-columns:1fr;

        max-width:620px;

        margin-left:auto;
        margin-right:auto;
    }

    .price-card.popular-card{
        transform:none;
    }

    .price-card.popular-card:hover{
        transform:translateY(-5px);
    }

    .testimonial-grid{
        grid-template-columns:1fr;
    }

    .process-grid{
        grid-template-columns:1fr 1fr;
    }

    .channel-grid{
        grid-template-columns:1fr 1fr;
    }

    .footer-grid{
        grid-template-columns:1fr 1fr;
    }

}


@media(max-width:700px){

    .hero{
        padding:55px 0;
    }

    .hero h1{
        font-size:43px;
    }

    .hero-visual{
        min-height:420px;
    }

    .portfolio-grid{
        grid-template-columns:1fr 1fr;
    }

    .included-list{
        grid-template-columns:1fr;
    }

    .process-grid{
        grid-template-columns:1fr;
    }

    .mockup-box{
        padding:28px 18px;
    }

    .mockup-form{
        grid-template-columns:1fr;
    }

    .mockup-form textarea,
    .mockup-submit{
        grid-column:auto;
    }

    .footer-grid{
        grid-template-columns:1fr;
    }

}


@media(max-width:480px){

    .container{
        padding-left:14px;
        padding-right:14px;
    }

    .hero h1{
        font-size:37px;
        letter-spacing:-2px;
    }

    .hero-buttons{
        flex-direction:column;
    }

    .hero-buttons .btn{
        width:100%;
    }

    .book-cover{
        width:245px;
        height:350px;
    }

    .visual-one{
        right:-5px;
    }

    .visual-two{
        left:-5px;
    }

    .portfolio-grid{
        grid-template-columns:1fr;
    }

    .portfolio-card{
        height:360px;
    }

    .channel-grid{
        grid-template-columns:1fr;
    }

    .thumbnail-demo{
        min-height:300px;
    }

    .thumbnail-grid{
        gap:30px;
    }

}

</style>
</head>


<body>


@include('frontend.partials.navbar')



<!-- =========================================================
     HERO
========================================================= -->

<section class="hero">

    <div class="container hero-grid">


        <div>

            <div class="rating">

                <span class="stars">
                    ★★★★★
                </span>

                <span>
                    4.7 out of 5 on Trustpilot
                </span>

            </div>


            <div class="section-label">
                Book Cover Design · Free Mockup
            </div>


            <h1>
                Book cover design
                <span>you don’t pay for</span>
                until you love it.
            </h1>


            <p class="hero-text">

                Tell us your genre, your title, and what your
                book’s about. A designer sends back a real mockup
                of your cover — built for your book, not a template.
                Love it and we finish it. Don’t and you owe us nothing.

            </p>


            <div class="hero-buttons">

                <a
                    href="#mockup"
                    class="btn btn-primary"
                >
                    Get my free mockup
                </a>

                <a
                    href="#portfolio"
                    class="btn btn-outline"
                >
                    See our covers
                </a>

            </div>

        </div>



        <div class="hero-visual">


            <div class="book-cover">

                <div class="cover-content">

                    <div class="cover-small">
                        A Novel
                    </div>

                    <div class="cover-title">
                        THE<br>
                        LAST<br>
                        SECRET
                    </div>

                    <div class="cover-line"></div>

                    <div class="cover-author">
                        Your Author
                    </div>

                </div>

            </div>


            <div class="visual-card visual-one">

                <strong>
                    ✓ Free mockup
                </strong>

                No card details

            </div>


            <div class="visual-card visual-two">

                <strong>
                    ⚡ Back in 48 hrs
                </strong>

                Pay only if you say yes

            </div>


        </div>

    </div>

</section>



<!-- =========================================================
     FREE MOCKUP
========================================================= -->

<section
    class="mockup"
    id="mockup"
>

    <div class="container">

        <div class="mockup-box">

            <div class="section-label">
                Free — Before You Decide
            </div>

            <h2>
                Start your free mockup
            </h2>

            <p>
                Three questions. Under a minute.
            </p>


            <div class="genre-list">

                <button class="genre-btn active">
                    Thriller
                </button>

                <button class="genre-btn">
                    Romance
                </button>

                <button class="genre-btn">
                    Fantasy
                </button>

                <button class="genre-btn">
                    Memoir
                </button>

                <button class="genre-btn">
                    Business
                </button>

                <button class="genre-btn">
                    Other
                </button>

            </div>


            <form class="mockup-form" id="mockupForm" action="{{ route('mockup.submit') }}" method="POST">

                @csrf

                <input type="hidden" name="genre" id="mockupGenre" value="Thriller">

                <textarea
                    name="book_details"
                    placeholder="Your title, subtitle, author name — and what it’s about"
                    required
                ></textarea>

                <input
                    type="email"
                    name="email"
                    placeholder="you@example.com"
                    required
                >

                <input
                    type="text"
                    name="website"
                    placeholder="Website (leave this empty)"
                    class="website"
                >

                <button
                    type="submit"
                    class="mockup-submit"
                >
                    Send my free mockup
                </button>

            </form>


            <div class="form-note">
                No payment details. Nothing owed if you pass.
            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     FREE MOCKUP FEATURES
========================================================= -->

<section class="features">

    <div class="container feature-grid">


        <div>

            <div class="section-label">
                Free Mockup First
            </div>

            <h2 class="section-title">
                The mockup costs
                you nothing.
            </h2>


            <div class="feature-list">


                <div class="feature-item">

                    <div class="check">✓</div>

                    <div>

                        <strong>
                            One front cover mockup
                        </strong>

                        <span>
                            Designed specifically for your book.
                        </span>

                    </div>

                </div>


                <div class="feature-item">

                    <div class="check">✓</div>

                    <div>

                        <strong>
                            3D render + flat preview
                        </strong>

                        <span>
                            See your cover in realistic presentation.
                        </span>

                    </div>

                </div>


                <div class="feature-item">

                    <div class="check">✓</div>

                    <div>

                        <strong>
                            One round of changes
                        </strong>

                        <span>
                            Give feedback before committing.
                        </span>

                    </div>

                </div>


                <div class="feature-item">

                    <div class="check">✓</div>

                    <div>

                        <strong>
                            No payment details
                        </strong>

                        <span>
                            You only pay when you approve.
                        </span>

                    </div>

                </div>


            </div>

        </div>



        <div class="mockup-visual">

            <div class="mini-cover">

                <div class="mini-cover-content">

                    <small>
                        A NOVEL
                    </small>

                    <div class="mini-cover-title">
                        THE<br>
                        SECRET<br>
                        GARDEN
                    </div>

                </div>

            </div>


            <div class="mockup-label label-one">
                3D Render
            </div>

            <div class="mockup-label label-two">
                Flat Preview
            </div>

        </div>


    </div>

</section>



<!-- =========================================================
     WHEN YOU APPROVE
========================================================= -->

<section class="included">

    <div class="container included-grid">


        <div>

            <div class="section-label">
                When You Approve It
            </div>

            <h2 class="section-title">
                We finish the cover,
                production-ready.
            </h2>


            <p
                class="section-text"
                style="margin-top:15px;"
            >

                Once you approve the concept, we turn it into
                a complete professional cover ready for your
                chosen publishing platform.

            </p>

        </div>



        <div class="included-list">


            <div class="included-box">

                <h3>
                    Full Wrap
                </h3>

                <p>
                    Spine and back cover for print editions.
                </p>

            </div>


            <div class="included-box">

                <h3>
                    Blurb Layout
                </h3>

                <p>
                    Professional back-cover typography.
                </p>

            </div>


            <div class="included-box">

                <h3>
                    Exact Sizing
                </h3>

                <p>
                    Sized to your trim and page count.
                </p>

            </div>


            <div class="included-box">

                <h3>
                    Print Ready PDF
                </h3>

                <p>
                    Prepared for KDP and IngramSpark.
                </p>

            </div>


            <div class="included-box">

                <h3>
                    eBook JPEG
                </h3>

                <p>
                    Digital cover for online retailers.
                </p>

            </div>


            <div class="included-box">

                <h3>
                    Source Files
                </h3>

                <p>
                    Editable files where included in package.
                </p>

            </div>


        </div>

    </div>

</section>



<!-- =========================================================
     PORTFOLIO
========================================================= -->

<section
    class="portfolio"
    id="portfolio"
>

    <div class="container">

        <div class="center-heading">

            <div class="section-label">
                Portfolio
            </div>

            <h2 class="section-title">
                This is a visual decision.
                Judge the work.
            </h2>

            <p class="section-text">

                Real cover concepts across multiple genres,
                designed to stand out at retail size.

            </p>

        </div>


        <div class="portfolio-grid">


            <div class="portfolio-card">

                <div class="portfolio-art art-1">

                    <div class="art-title">
                        VELVET<br>
                        VOWS
                    </div>

                </div>

                <div class="portfolio-info">
                    Dark Romance
                </div>

            </div>


            <div class="portfolio-card">

                <div class="portfolio-art art-2">

                    <div class="art-title">
                        ROSEHOLLOW
                    </div>

                </div>

                <div class="portfolio-info">
                    Regency Romance
                </div>

            </div>


            <div class="portfolio-card">

                <div class="portfolio-art art-3">

                    <div class="art-title">
                        THE HOLLOW VOW
                    </div>

                </div>

                <div class="portfolio-info">
                    Romantasy
                </div>

            </div>


            <div class="portfolio-card">

                <div class="portfolio-art art-4">

                    <div class="art-title">
                        THRONE OF BLOOD
                    </div>

                </div>

                <div class="portfolio-info">
                    Dark Romance
                </div>

            </div>


        </div>

    </div>

</section>



<!-- =========================================================
     THUMBNAIL TEST
========================================================= -->

<section class="thumbnail">

    <div class="container thumbnail-grid">


        <div class="thumbnail-demo">

            <div>

                <div
                    style="
                        text-align:center;
                        color:#849087;
                        font-size:9px;
                        margin-bottom:8px;
                    "
                >
                    56px
                </div>

                <div class="thumb-cover small"></div>

            </div>


            <div>

                <div
                    style="
                        text-align:center;
                        color:#849087;
                        font-size:9px;
                        margin-bottom:8px;
                    "
                >
                    Full Size
                </div>

                <div class="thumb-cover"></div>

            </div>

        </div>



        <div class="thumbnail-copy">

            <div class="section-label">
                The Thumbnail Test
            </div>

            <h2 class="section-title">
                Real cover.
                Retail size.
            </h2>

            <p>

                Amazon shoppers see your cover as a thumbnail
                first. We stress-test every concept there —
                contrast, focal point, and title legibility —
                before it's ever shown full size.

            </p>

            <p>

                Same design, legible at both sizes — that's the
                bar every concept has to clear.

            </p>

            <a
                href="#mockup"
                class="btn btn-primary"
                style="margin-top:20px;"
            >
                Get my free mockup
            </a>

        </div>


    </div>

</section>



<!-- =========================================================
     PUBLISHING CHANNELS
========================================================= -->

<section class="channels">

    <div class="container">

        <div class="section-label">
            Publishing Channels
        </div>

        <h2 class="section-title">
            Build the book once,
            release it everywhere.
        </h2>

        <p
            class="section-text"
            style="margin:13px auto 0;"
        >

            Professional files prepared for the retail channels
            that matter to modern authors.

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



<!-- =========================================================
     PRICING
========================================================= -->

<section class="pricing">

    <div class="container">


        <div class="center-heading">

            <div class="section-label">
                Transparent Pricing
            </div>

            <h2 class="section-title">
                Three packages.
                Fixed prices.
            </h2>

        </div>


        @php
            $packageKeys = [
                'ghost-cover-ebook'  => 'ebook',
                'ghost-cover-print'  => 'print',
                'ghost-cover-launch' => 'launch',
            ];

            $startingPrice = $plans->isNotEmpty() ? $plans->min('price') : null;
        @endphp

        <div class="pricing-grid">

            @forelse ($plans as $plan)

                <div class="price-card {{ $plan->is_featured ? 'popular-card' : '' }}">

                    @if ($plan->is_featured)

                        <div class="popular">
                            Most Popular
                        </div>

                    @endif

                    <h3>
                        {{ $plan->name }}
                    </h3>

                    <div class="price">
                        £{{ number_format($plan->price) }}
                    </div>

                    <div class="price-desc">
                        {{ $plan->description }}
                    </div>


                    <ul class="price-list">

                        @foreach ($plan->features ?? [] as $feature)

                            <li>
                                {{ $feature }}
                            </li>

                        @endforeach

                    </ul>


                    <a
                        href="{{ route('services.bookCoverDesignCheckout', ['package' => $packageKeys[$plan->key] ?? 'print']) }}"
                        class="btn btn-primary full"
                    >
                        {{ $plan->button_text }}
                    </a>

                </div>

            @empty

                <div class="price-card">

                    <h3>
                        No Packages Available
                    </h3>

                    <div class="price-desc">
                        Cover design packages will be added soon.
                    </div>

                </div>

            @endforelse

        </div>


        <div class="addons">

            <p>
                Need a series, hardcover jacket,
                or something bespoke?
            </p>

            <div class="addon-links">

                Additional Concept £67 ·
                Audiobook Cover £67 ·
                Social Media Kit £147 ·
                Hardcover Jacket £67 ·
                Series Branding £147

            </div>

        </div>

    </div>

</section>



<!-- =========================================================
     TESTIMONIALS
========================================================= -->

<section class="testimonials">

    <div class="container">

        <div class="center-heading">

            <div class="section-label">
                Verified Author Feedback
            </div>

            <h2 class="section-title">
                What cover design
                clients say.
            </h2>

        </div>


        <div class="testimonial-grid">


            <div class="testimonial">

                <div class="testimonial-stars">
                    ★★★★★
                </div>

                <div class="quote">

                    “They took a vague idea about roses and
                    mystery and created exactly what I didn't
                    know I needed.”

                </div>

                <div class="author">

                    <div class="author-avatar">
                        HC
                    </div>

                    <div>

                        <strong>
                            H. C. Ruby
                        </strong>

                        <span>
                            Author of Broken Evil
                        </span>

                    </div>

                </div>

            </div>



            <div class="testimonial">

                <div class="testimonial-stars">
                    ★★★★★
                </div>

                <div class="quote">

                    “The cover they designed stopped scrollers
                    in their tracks. They understood the romance
                    market perfectly.”

                </div>

                <div class="author">

                    <div class="author-avatar">
                        RD
                    </div>

                    <div>

                        <strong>
                            Rhonda DiMartino
                        </strong>

                        <span>
                            Author of When Love Remains
                        </span>

                    </div>

                </div>

            </div>



            <div class="testimonial">

                <div class="testimonial-stars">
                    ★★★★★
                </div>

                <div class="quote">

                    “Clean, modern, and inviting. They achieved
                    exactly the calm and expertise my wellness
                    book needed.”

                </div>

                <div class="author">

                    <div class="author-avatar">
                        RF
                    </div>

                    <div>

                        <strong>
                            Rachel Lynn Fox
                        </strong>

                        <span>
                            Author of From Cursed to Cured
                        </span>

                    </div>

                </div>

            </div>


        </div>

    </div>

</section>



<!-- =========================================================
     HOW IT WORKS
========================================================= -->

<section class="process">

    <div class="container">

        <div class="section-label">
            How It Works
        </div>

        <h2 class="section-title">
            Market research first,
            so the design isn't a guess.
        </h2>

        <p class="process-intro">

            Every project starts with genre research, so your
            first concept already looks like it belongs in your
            category.

        </p>


        <div class="process-grid">


            <div class="step">

                <div class="step-number">
                    1
                </div>

                <h3>
                    Market Research
                </h3>

                <p>

                    We analyze bestsellers in your genre for
                    colour, type and composition cues.

                </p>

            </div>


            <div class="step">

                <div class="step-number">
                    2
                </div>

                <h3>
                    Concept Development
                </h3>

                <p>

                    Multiple unique directions, each stress-tested
                    at thumbnail size.

                </p>

            </div>


            <div class="step">

                <div class="step-number">
                    3
                </div>

                <h3>
                    Typography & Layout
                </h3>

                <p>

                    Fonts and elements arranged for maximum
                    impact and legibility.

                </p>

            </div>


            <div class="step">

                <div class="step-number">
                    4
                </div>

                <h3>
                    Final Files
                </h3>

                <p>

                    High-resolution artwork, mockups and all
                    formats included in your package.

                </p>

            </div>


        </div>

    </div>

</section>



<!-- =========================================================
     FAQ
========================================================= -->

<section class="faq">

    <div class="container">

        <div class="center-heading">

            <div class="section-label">
                FAQ
            </div>

            <h2 class="section-title">
                Questions authors
                usually ask.
            </h2>

            <p class="section-text">

                Clear answers on timeline, scope, rights,
                revisions and what happens after checkout.

            </p>

        </div>


        <div class="faq-list">


            <div class="faq-item">

                <button class="faq-question">

                    How much do professional book cover design services cost?

                    <span>+</span>

                </button>

                <div class="faq-answer">

                    <p>

                        Professional book cover design services
                        start at {{ $startingPrice ? '£' . number_format($startingPrice) : '£127' }}. The exact quote depends on
                        the editions and add-ons you need.

                    </p>

                </div>

            </div>



            <div class="faq-item">

                <button class="faq-question">

                    What is included in custom book cover design?

                    <span>+</span>

                </button>

                <div class="faq-answer">

                    <p>

                        Every custom cover includes genre research,
                        a retail-thumbnail check, high-resolution
                        final files and a 3D mockup. Packages include
                        1–3 initial concepts and 2–4 revision rounds.

                    </p>

                </div>

            </div>



            <div class="faq-item">

                <button class="faq-question">

                    Can you prepare ebook and print files?

                    <span>+</span>

                </button>

                <div class="faq-answer">

                    <p>

                        Yes. eBook Essential includes an ebook front
                        cover. Print Ready and Launch Bundle add a
                        paperback full wrap with spine and back cover.

                    </p>

                </div>

            </div>



            <div class="faq-item">

                <button class="faq-question">

                    Do you design covers matched to my genre?

                    <span>+</span>

                </button>

                <div class="faq-answer">

                    <p>

                        Yes. We review current covers in your category
                        and develop typography, colour, composition
                        and thumbnail hierarchy around genre expectations.

                    </p>

                </div>

            </div>



            <div class="faq-item">

                <button class="faq-question">

                    Who owns the finished cover?

                    <span>+</span>

                </button>

                <div class="faq-answer">

                    <p>

                        You receive commercial-use rights for the
                        delivered cover artwork, subject to applicable
                        third-party asset and font licence terms.

                    </p>

                </div>

            </div>



            <div class="faq-item">

                <button class="faq-question">

                    How long does book cover design take?

                    <span>+</span>

                </button>

                <div class="faq-answer">

                    <p>

                        Book cover design normally takes 7–14 days,
                        depending on the selected package and how
                        quickly revision feedback is returned.

                    </p>

                </div>

            </div>


        </div>

    </div>

</section>



<!-- =========================================================
     FINAL CTA
========================================================= -->

<section class="final-cta">

    <div class="container">

        <div class="section-label">
            Free Mockup First
        </div>

        <h2 class="section-title">
            Ready to see your cover
            before you pay for it?
        </h2>

        <p>

            Tell us your genre, title and what your book is about.
            Get a watermarked mockup within 48 hours.

        </p>


        <div class="final-buttons">

            <a
                href="#mockup"
                class="btn btn-primary"
            >
                Get my free mockup
            </a>

            <a
                href="#pricing"
                class="btn btn-outline"
                style="
                    background:transparent;
                    color:#fff;
                    border-color:#fff;
                "
            >
                See packages from {{ $startingPrice ? '£' . number_format($startingPrice) : '£127' }}
            </a>

        </div>

    </div>

</section>



<!-- =========================================================
     FOOTER
========================================================= -->

<footer>

    <div class="container">

        <div class="footer-grid">


            <div>

                <div class="footer-logo">
                    HMD<span>Publishing</span>
                </div>

                <p style="margin-top:12px;">

                    Professional book publishing services
                    for authors around the world.

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

                <a href="{{ route('services.bookCover') }}">
                    Book Cover Design
                </a>

                <a href="/services/book-formatting">
                    Book Formatting
                </a>

                <a href="{{ route('services.bookIllustrations') }}">
                    Illustrations
                </a>

                <a href="/services/publishing">
                    Publishing
                </a>

            </div>


            <div>

                <h4>
                    Company
                </h4>

                <a href="#">
                    About
                </a>

                <a href="#">
                    Portfolio
                </a>

                <a href="#">
                    Blog
                </a>

                <a href="#">
                    Contact
                </a>

            </div>


            <div>

                <h4>
                    Support
                </h4>

                <a href="#">
                    FAQ
                </a>

                <a href="#">
                    Privacy Policy
                </a>

                <a href="#">
                    Terms
                </a>

                <a href="#">
                    Refund Policy
                </a>

            </div>


        </div>


        <div class="copyright">

            © 2026 HMD Publishing Limited.
            All rights reserved.

        </div>

    </div>

</footer>



<!-- =========================================================
     JAVASCRIPT
========================================================= -->

<script>

/* =========================================================
   GENRE BUTTONS
========================================================= */

const genreButtons =
    document.querySelectorAll(".genre-btn");

const genreInput =
    document.getElementById("mockupGenre");

genreButtons.forEach(function(button){

    button.addEventListener("click",function(){

        genreButtons.forEach(function(btn){
            btn.classList.remove("active");
        });

        this.classList.add("active");

        if(genreInput){
            genreInput.value =
                this.textContent.trim();
        }

    });

});


/* =========================================================
   FAQ ACCORDION
========================================================= */

const faqItems =
    document.querySelectorAll(".faq-item");

faqItems.forEach(function(item){

    const question =
        item.querySelector(".faq-question");

    question.addEventListener("click",function(){

        faqItems.forEach(function(other){

            if(other !== item){
                other.classList.remove("active");
            }

        });

        item.classList.toggle("active");

    });

});


/* =========================================================
   MOCKUP FORM
========================================================= */

const form =
    document.getElementById("mockupForm");

form.addEventListener("submit",function(e){

    e.preventDefault();

    const email =
        form.querySelector(
            'input[type="email"]'
        );

    const website =
        form.querySelector(".website");

    const token =
        document.querySelector('meta[name="csrf-token"]')
            .getAttribute("content");


    /* Honeypot */

    if(website.value.trim() !== ""){

        return;

    }


    if(!email.value.trim()){

        alert(
            "Please enter your email address."
        );

        return;

    }


    fetch(form.action, {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": token,
            "Accept": "application/json"
        },
        body: new FormData(form)
    })
    .then(function(response){
        return response.json();
    })
    .then(function(data){
        if(data.success){
            form.reset();
            alert(
                "Thanks! Your free mockup request has been submitted."
            );
        }
    })
    .catch(function(){
        alert(
            "Something went wrong. Please try again."
        );
    });

});


/* =========================================================
   SMOOTH SCROLL
========================================================= */

document
.querySelectorAll('a[href^="#"]')
.forEach(function(link){

    link.addEventListener("click",function(e){

        const target =
            document.querySelector(
                this.getAttribute("href")
            );

        if(target){

            e.preventDefault();

            target.scrollIntoView({
                behavior:"smooth",
                block:"start"
            });

        }

    });

});

</script>

</body>
</html>
