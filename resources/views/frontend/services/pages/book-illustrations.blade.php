<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Custom Book Illustrations | HMD Publishing</title>

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
    color:#173b2c;
    background:#fff;
    line-height:1.6;
}

a{
    text-decoration:none;
    color:inherit;
}

img{
    max-width:100%;
    display:block;
}

button{
    font-family:inherit;
}


/* =====================================================
   GENERAL
===================================================== */

.container{
    max-width:1180px;
    margin:auto;
    padding:0 20px;
}

.section-label{
    color:#b37d35;
    text-transform:uppercase;
    font-size:11px;
    font-weight:800;
    letter-spacing:2px;
    margin-bottom:10px;
}

.section-title{
    font-family:Georgia,serif;
    font-size:clamp(34px,4vw,50px);
    line-height:1.1;
    letter-spacing:-1.5px;
    color:#183d2e;
}

.section-text{
    color:#6b7770;
    font-size:15px;
    max-width:680px;
}


/* =====================================================
   HERO
===================================================== */

.hero{
    background:
        radial-gradient(
            circle at 85% 20%,
            rgba(188,139,64,.15),
            transparent 28%
        ),
        linear-gradient(
            180deg,
            #f4f8f4,
            #ffffff
        );

    padding:75px 0 85px;
}

.hero-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:65px;
    align-items:center;
}

.trust{
    display:flex;
    align-items:center;
    gap:10px;
    margin-bottom:20px;

    font-size:13px;
    color:#67746c;
}

.stars{
    color:#c08a3c;
    letter-spacing:2px;
}

.hero h1{
    font-family:Georgia,serif;

    font-size:
        clamp(45px,5vw,68px);

    line-height:1.03;

    letter-spacing:-3px;

    color:#173d2d;

    margin-bottom:20px;
}

.hero h1 span{
    color:#b37d35;
}

.hero-description{
    max-width:650px;
    color:#68756e;
    font-size:17px;
    margin-bottom:27px;
}

.hero-buttons{
    display:flex;
    gap:12px;
    flex-wrap:wrap;
}

.btn{
    display:inline-flex;
    align-items:center;
    justify-content:center;

    padding:13px 22px;

    border-radius:7px;

    font-size:13px;
    font-weight:700;

    border:1px solid transparent;

    transition:.25s;

    cursor:pointer;
}

.btn-primary{
    background:#173e2e;
    color:#fff;
}

.btn-primary:hover{
    background:#b27d35;
    transform:translateY(-2px);
}

.btn-outline{
    background:#fff;
    color:#173e2e;
    border-color:#173e2e;
}

.btn-outline:hover{
    background:#173e2e;
    color:#fff;
}


/* HERO ART */

.hero-art{
    position:relative;
    min-height:470px;

    display:flex;
    align-items:center;
    justify-content:center;
}

.art-card{
    width:330px;
    height:405px;

    position:relative;

    background:
        linear-gradient(
            145deg,
            #d8e9d5,
            #f5dfae
        );

    border-radius:5px;

    box-shadow:
        25px 30px 65px rgba(28,59,44,.2);

    transform:rotate(-4deg);

    overflow:hidden;
}

.art-card::before{
    content:"";

    position:absolute;

    width:210px;
    height:210px;

    border-radius:50%;

    background:#d49356;

    right:-45px;
    top:45px;
}

.art-card::after{
    content:"";

    position:absolute;

    width:170px;
    height:170px;

    border-radius:50%;

    background:#7aa68c;

    left:-50px;
    bottom:65px;
}

.art-title{
    position:absolute;

    bottom:55px;
    left:30px;
    right:30px;

    font-family:Georgia,serif;

    font-size:31px;
    font-weight:bold;

    line-height:1.05;

    color:#264432;

    z-index:2;
}

.art-subtitle{
    position:absolute;

    bottom:30px;
    left:31px;

    font-size:10px;
    letter-spacing:2px;

    color:#607165;

    z-index:2;
}


/* floating cards */

.float-card{
    position:absolute;

    background:#fff;

    border:1px solid #e1e7e2;

    border-radius:10px;

    padding:14px 17px;

    box-shadow:0 15px 40px rgba(0,0,0,.1);

    font-size:11px;

    color:#43564c;
}

.float-one{
    top:60px;
    right:0;
}

.float-two{
    bottom:65px;
    left:0;
}

.float-icon{
    font-size:18px;
    margin-bottom:3px;
}


/* =====================================================
   BENEFITS
===================================================== */

.benefits{
    padding:85px 0;
}

.benefit-header{
    max-width:700px;
}

.benefit-grid{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:16px;

    margin-top:38px;
}

.benefit{
    padding:25px;

    border:1px solid #e0e7e1;
    border-radius:12px;

    background:#fff;

    transition:.25s;
}

.benefit:hover{
    transform:translateY(-5px);

    box-shadow:
        0 18px 40px rgba(20,60,42,.08);
}

.benefit-icon{
    width:45px;
    height:45px;

    display:flex;
    align-items:center;
    justify-content:center;

    background:#edf4ef;

    border-radius:9px;

    font-size:20px;

    margin-bottom:16px;
}

.benefit h3{
    font-family:Georgia,serif;

    color:#1c4030;

    font-size:19px;

    margin-bottom:6px;
}

.benefit p{
    color:#717c76;

    font-size:12px;
}


/* =====================================================
   INCLUDED
===================================================== */

.included{
    background:#f5f8f5;

    padding:85px 0;
}

.included-grid{
    display:grid;

    grid-template-columns:
        1fr
        1fr;

    gap:55px;

    align-items:center;
}

.included-art{
    min-height:410px;

    border-radius:16px;

    background:
        linear-gradient(
            135deg,
            #dce8dc,
            #f5e7c8
        );

    display:flex;
    align-items:center;
    justify-content:center;

    padding:30px;
}

.mock-spread{
    width:85%;
    max-width:530px;

    height:290px;

    display:grid;
    grid-template-columns:1fr 1fr;

    box-shadow:
        0 22px 45px rgba(0,0,0,.14);
}

.mock-page{
    position:relative;

    overflow:hidden;

    background:#c5dfc7;
}

.mock-page:nth-child(2){
    background:#f5e4be;
}

.mock-shape{
    position:absolute;

    width:150px;
    height:150px;

    border-radius:50%;

    background:#d59657;

    top:40px;
    right:25px;
}

.mock-shape-two{
    position:absolute;

    width:130px;
    height:130px;

    border-radius:50%;

    background:#78a88c;

    bottom:-30px;
    left:-20px;
}

.mock-text{
    position:absolute;

    bottom:35px;
    left:22px;

    right:22px;

    font-family:Georgia,serif;

    color:#294536;

    font-size:17px;

    font-weight:bold;
}

.mock-lines{
    position:absolute;

    left:25px;
    right:25px;

    top:60px;
}

.mock-line{
    height:5px;

    background:#718076;

    margin-bottom:9px;

    border-radius:5px;

    opacity:.55;
}

.included-content .section-text{
    margin-top:16px;
}

.check-list{
    list-style:none;

    margin-top:23px;
}

.check-list li{
    padding:8px 0;

    font-size:13px;

    color:#59675f;
}

.check-list li::before{
    content:"✓";

    color:#b27d35;

    font-weight:bold;

    margin-right:9px;
}


/* =====================================================
   PLATFORM
===================================================== */

.platforms{
    padding:75px 0;

    text-align:center;
}

.platforms .section-text{
    margin:14px auto 0;
}

.platform-grid{
    display:grid;

    grid-template-columns:repeat(5,1fr);

    gap:15px;

    margin-top:35px;
}

.platform{
    min-height:90px;

    display:flex;

    align-items:center;
    justify-content:center;

    background:#fff;

    border:1px solid #e1e7e2;

    border-radius:10px;

    font-weight:800;

    color:#334a3e;

    transition:.2s;
}

.platform:hover{
    transform:translateY(-3px);

    box-shadow:
        0 13px 30px rgba(0,0,0,.06);
}


/* =====================================================
   PROCESS
===================================================== */

.process{
    background:#173e2e;

    color:#fff;

    padding:90px 0;
}

.process .section-label{
    color:#d0a05a;
}

.process .section-title{
    color:#fff;
}

.process-intro{
    color:#bdc9c2;

    max-width:680px;

    margin-top:13px;
}

.process-grid{
    display:grid;

    grid-template-columns:repeat(4,1fr);

    gap:20px;

    margin-top:50px;
}

.process-step{
    position:relative;

    padding:25px;

    background:#204a38;

    border:1px solid rgba(255,255,255,.08);

    border-radius:12px;
}

.process-number{
    width:45px;
    height:45px;

    display:flex;

    align-items:center;
    justify-content:center;

    border-radius:50%;

    background:#d0a05a;

    color:#173e2e;

    font-weight:800;

    margin-bottom:18px;
}

.process-step h3{
    font-family:Georgia,serif;

    font-size:20px;

    margin-bottom:6px;
}

.process-step p{
    color:#b8c6be;

    font-size:12px;
}

.time{
    display:inline-block;

    margin-top:15px;

    color:#d0a05a;

    font-size:10px;

    font-weight:bold;

    text-transform:uppercase;

    letter-spacing:1px;
}


/* =====================================================
   PRICING
===================================================== */

.pricing{
    padding:90px 0;
}

.pricing-heading{
    text-align:center;

    max-width:720px;

    margin:auto;
}

.pricing-heading .section-text{
    margin:13px auto 0;
}

.pricing-grid{
    display:grid;

    grid-template-columns:repeat(3,1fr);

    gap:20px;

    margin-top:45px;

    align-items:stretch;
}

.price-card{
    position:relative;

    background:#fff;

    border:1px solid #dfe6e1;

    border-radius:13px;

    padding:29px;

    transition:.25s;
}

.price-card:hover{
    transform:translateY(-5px);

    box-shadow:
        0 20px 50px rgba(25,60,44,.1);
}

.price-card.popular{
    border:2px solid #214d38;

    box-shadow:
        0 20px 55px rgba(25,60,44,.13);

    transform:translateY(-8px);
}

.price-card.popular:hover{
    transform:translateY(-13px);
}

.popular-badge{
    position:absolute;

    top:-14px;
    left:25px;

    background:#1c4935;

    color:#fff;

    padding:6px 14px;

    border-radius:20px;

    font-size:10px;

    font-weight:800;

    text-transform:uppercase;

    letter-spacing:1px;
}

.price-card h3{
    font-family:Georgia,serif;

    color:#1b4030;

    font-size:24px;

    margin-bottom:5px;
}

.price{
    color:#183d2d;

    font-size:44px;

    font-weight:800;

    margin:7px 0;
}

.price-sub{
    color:#8a938e;

    font-size:11px;

    min-height:38px;
}

.price-features{
    list-style:none;

    margin:22px 0;
}

.price-features li{
    padding:8px 0;

    border-bottom:1px solid #edf0ed;

    font-size:12px;

    color:#59665f;
}

.price-features li::before{
    content:"✓";

    color:#b17d35;

    font-weight:bold;

    margin-right:8px;
}

.full-btn{
    width:100%;
}


/* =====================================================
   STATS
===================================================== */

.stats{
    background:#f5f8f5;

    padding:70px 0;
}

.stats-grid{
    display:grid;

    grid-template-columns:repeat(4,1fr);

    gap:15px;

    text-align:center;
}

.stat{
    padding:22px;
}

.stat-number{
    font-size:35px;

    font-weight:800;

    color:#183d2d;
}

.stat-label{
    color:#78837d;

    font-size:11px;

    margin-top:4px;
}


/* =====================================================
   TESTIMONIAL
===================================================== */

.testimonial-section{
    padding:90px 0;
}

.testimonial-box{
    max-width:900px;

    margin:auto;

    padding:45px;

    border:1px solid #dfe6e1;

    border-radius:15px;

    background:#fff;

    box-shadow:
        0 20px 55px rgba(20,55,40,.07);

    text-align:center;
}

.testimonial-stars{
    color:#bd8739;

    font-size:18px;

    letter-spacing:3px;
}

.testimonial-text{
    font-family:Georgia,serif;

    color:#344b40;

    font-size:19px;

    line-height:1.7;

    margin:20px auto;

    max-width:760px;
}

.testimonial-author{
    color:#6c7871;

    font-size:12px;
}

.testimonial-author strong{
    color:#274638;
}


/* =====================================================
   FAQ
===================================================== */

.faq{
    background:#f6f8f6;

    padding:90px 0;
}

.faq-heading{
    text-align:center;

    max-width:720px;

    margin:auto;
}

.faq-heading .section-text{
    margin:13px auto 0;
}

.faq-list{
    max-width:850px;

    margin:40px auto 0;
}

.faq-item{
    background:#fff;

    border:1px solid #e0e6e1;

    border-radius:9px;

    margin-bottom:9px;

    overflow:hidden;
}

.faq-question{
    width:100%;

    background:#fff;

    border:none;

    padding:19px 20px;

    text-align:left;

    display:flex;

    align-items:center;

    justify-content:space-between;

    color:#2e473b;

    font-size:13px;

    font-weight:700;

    cursor:pointer;
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

    color:#69766f;

    font-size:12px;

    line-height:1.7;
}

.faq-item.active .faq-answer{
    max-height:300px;
}

.faq-item.active .faq-question span{
    transform:rotate(45deg);
}


/* =====================================================
   FINAL CTA
===================================================== */

.final-cta{
    background:#173e2e;

    color:#fff;

    text-align:center;

    padding:90px 0;
}

.final-cta .section-label{
    color:#d0a05a;
}

.final-cta .section-title{
    color:#fff;
}

.final-cta p{
    color:#bdc9c2;

    max-width:650px;

    margin:15px auto 25px;
}

.final-buttons{
    display:flex;

    justify-content:center;

    gap:10px;

    flex-wrap:wrap;
}

.final-cta .btn-primary{
    background:#c08b42;
}

.final-cta .btn-primary:hover{
    background:#d09b50;
}


/* =====================================================
   FOOTER
===================================================== */

footer{
    background:#102d22;

    color:#abb8b0;

    padding:48px 0 20px;
}

.footer-grid{
    display:grid;

    grid-template-columns:1.4fr 1fr 1fr 1fr;

    gap:35px;
}

.footer-logo{
    font-family:Georgia,serif;

    font-size:24px;

    color:#fff;

    font-weight:bold;
}

.footer-logo span{
    color:#c08b42;
}

footer h4{
    color:#fff;

    font-size:13px;

    margin-bottom:13px;
}

footer p,
footer a{
    display:block;

    font-size:11px;

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

    font-size:10px;
}


/* =====================================================
   RESPONSIVE
===================================================== */

@media(max-width:1000px){

    .hero-grid,
    .included-grid{
        grid-template-columns:1fr;
    }

    .benefit-grid{
        grid-template-columns:1fr 1fr;
    }

    .process-grid{
        grid-template-columns:1fr 1fr;
    }

    .pricing-grid{
        grid-template-columns:1fr;
        max-width:600px;
        margin:45px auto 0;
    }

    .price-card.popular{
        transform:none;
    }

    .price-card.popular:hover{
        transform:translateY(-5px);
    }

    .platform-grid{
        grid-template-columns:1fr 1fr 1fr;
    }

    .stats-grid{
        grid-template-columns:1fr 1fr;
    }

    .footer-grid{
        grid-template-columns:1fr 1fr;
    }

}


@media(max-width:700px){

    .hero{
        padding:55px 0 65px;
    }

    .hero h1{
        font-size:43px;
        letter-spacing:-2px;
    }

    .hero-art{
        min-height:400px;
    }

    .art-card{
        width:280px;
        height:350px;
    }

    .float-one{
        right:0;
    }

    .float-two{
        left:0;
    }

    .benefit-grid{
        grid-template-columns:1fr;
    }

    .process-grid{
        grid-template-columns:1fr;
    }

    .platform-grid{
        grid-template-columns:1fr 1fr;
    }

    .footer-grid{
        grid-template-columns:1fr;
    }

}


@media(max-width:480px){

    .container{
        padding:0 14px;
    }

    .hero h1{
        font-size:37px;
    }

    .hero-description{
        font-size:15px;
    }

    .hero-buttons{
        flex-direction:column;
    }

    .hero-buttons .btn{
        width:100%;
    }

    .mock-spread{
        width:100%;
        height:240px;
    }

    .platform-grid{
        grid-template-columns:1fr;
    }

    .stats-grid{
        grid-template-columns:1fr;
    }

    .testimonial-box{
        padding:28px 20px;
    }

    .testimonial-text{
        font-size:16px;
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

    <div class="container hero-grid">


        <div>

            <div class="trust">

                <span class="stars">
                    ★★★★★
                </span>

                <span>
                    4.7 out of 5
                </span>

            </div>


            <div class="section-label">
                Art & Design
            </div>


            <h1>

                Stunning
                <span>Illustrations</span>

            </h1>


            <p class="hero-description">

                Talented artists ready to visualize your story.
                From whimsical children's book art to detailed
                fantasy maps.

            </p>


            <div class="hero-buttons">

                <a
                    href="#pricing"
                    class="btn btn-primary"
                >
                    Get Custom Artwork
                </a>

                <a
                    href="{{ route('portfolio') }}"
                    class="btn btn-outline"
                >
                    View Portfolio
                </a>

            </div>

        </div>



        <div class="hero-art">

            <div class="art-card">

                <div class="art-title">
                    YOUR STORY<br>
                    COMES TO LIFE
                </div>

                <div class="art-subtitle">
                    CUSTOM BOOK ILLUSTRATIONS
                </div>

            </div>


            <div class="float-card float-one">

                <div class="float-icon">
                    🎨
                </div>

                <strong>
                    Professional Quality
                </strong>

            </div>


            <div class="float-card float-two">

                <div class="float-icon">
                    ✓
                </div>

                <strong>
                    100% Satisfaction Guarantee
                </strong>

            </div>

        </div>


    </div>

</section>



<!-- =====================================================
     BENEFITS
===================================================== -->

<section class="benefits">

    <div class="container">

        <div class="benefit-header">

            <div class="section-label">
                Art That Tells Your Story
            </div>

            <h2 class="section-title">
                Artwork designed around
                your story.
            </h2>

            <p class="section-text" style="margin-top:14px;">

                Work with professional illustrators who
                understand narrative art. We match you
                with an artist whose style fits your vision.

            </p>

        </div>


        <div class="benefit-grid">


            <div class="benefit">

                <div class="benefit-icon">
                    🎨
                </div>

                <h3>
                    Diverse Styles
                </h3>

                <p>
                    Watercolor, digital, cartoon, realistic,
                    whimsical and many more artistic styles.
                </p>

            </div>


            <div class="benefit">

                <div class="benefit-icon">
                    👤
                </div>

                <h3>
                    Character Design
                </h3>

                <p>
                    Character concepts created with
                    consistency across your story.
                </p>

            </div>


            <div class="benefit">

                <div class="benefit-icon">
                    ©
                </div>

                <h3>
                    Commercial Rights
                </h3>

                <p>
                    Full commercial rights so you can use
                    the artwork throughout your project.
                </p>

            </div>


            <div class="benefit">

                <div class="benefit-icon">
                    ✦
                </div>

                <h3>
                    Print Quality
                </h3>

                <p>
                    High-resolution artwork prepared for
                    both print and digital publishing.
                </p>

            </div>


        </div>

    </div>

</section>



<!-- =====================================================
     INCLUDED
===================================================== -->

<section class="included">

    <div class="container included-grid">


        <div class="included-art">

            <div class="mock-spread">

                <div class="mock-page">

                    <div class="mock-shape"></div>

                    <div class="mock-shape-two"></div>

                    <div class="mock-text">
                        THE LITTLE<br>
                        ADVENTURE
                    </div>

                </div>


                <div class="mock-page">

                    <div class="mock-lines">

                        <div class="mock-line"></div>
                        <div class="mock-line"></div>
                        <div class="mock-line"></div>
                        <div class="mock-line"></div>

                    </div>

                    <div class="mock-shape-two"></div>

                </div>

            </div>

        </div>



        <div class="included-content">

            <div class="section-label">
                What's Included
            </div>

            <h2 class="section-title">
                Everything needed to
                build your visual world.
            </h2>

            <p class="section-text">

                From early character sketches to finished
                full-color artwork, our illustrators work
                through each stage with you.

            </p>


            <ul class="check-list">

                <li>
                    Character sketches
                </li>

                <li>
                    Storyboarding
                </li>

                <li>
                    Full color illustrations
                </li>

                <li>
                    Cover art integration
                </li>

                <li>
                    High-resolution final artwork
                </li>

                <li>
                    Print and digital versions
                </li>

            </ul>

        </div>


    </div>

</section>



<!-- =====================================================
     PLATFORMS
===================================================== -->

<section class="platforms">

    <div class="container">

        <div class="section-label">
            Publishing Ready
        </div>

        <h2 class="section-title">
            Artwork optimized for
            every publishing platform.
        </h2>

        <p class="section-text">

            Receive artwork prepared for the major
            platforms where readers discover books.

        </p>


        <div class="platform-grid">

            <div class="platform">
                Amazon Kindle
            </div>

            <div class="platform">
                IngramSpark
            </div>

            <div class="platform">
                Apple Books
            </div>

            <div class="platform">
                Kobo
            </div>

            <div class="platform">
                Google Books
            </div>

        </div>

    </div>

</section>



<!-- =====================================================
     PROCESS
===================================================== -->

<section class="process" id="process">

    <div class="container">

        <div class="section-label">
            How It Works
        </div>

        <h2 class="section-title">
            From your vision to
            finished artwork.
        </h2>

        <p class="process-intro">

            A simple four-stage workflow keeps you involved
            without slowing down the creative process.

        </p>


        <div class="process-grid">


            <div class="process-step">

                <div class="process-number">
                    1
                </div>

                <h3>
                    Share Your Vision
                </h3>

                <p>
                    Tell us about your characters, scenes,
                    story and preferred visual style.
                </p>

                <span class="time">
                    Day 1
                </span>

            </div>


            <div class="process-step">

                <div class="process-number">
                    2
                </div>

                <h3>
                    Concept Sketches
                </h3>

                <p>
                    Review initial sketches and provide
                    feedback before final artwork begins.
                </p>

                <span class="time">
                    Week 1–2
                </span>

            </div>


            <div class="process-step">

                <div class="process-number">
                    3
                </div>

                <h3>
                    Final Artwork
                </h3>

                <p>
                    We create polished, full-color
                    illustrations based on approved concepts.
                </p>

                <span class="time">
                    Week 2–4
                </span>

            </div>


            <div class="process-step">

                <div class="process-number">
                    4
                </div>

                <h3>
                    Delivery
                </h3>

                <p>
                    Receive high-resolution files in all
                    required formats.
                </p>

                <span class="time">
                    Week 4–6
                </span>

            </div>


        </div>

    </div>

</section>



<!-- =====================================================
     PRICING
===================================================== -->

<section class="pricing" id="pricing">

    <div class="container">

        <div class="pricing-heading">

            <div class="section-label">
                Simple, Transparent Pricing
            </div>

            <h2 class="section-title">
                Choose based on your
                illustration needs.
            </h2>

            <p class="section-text">

                Select the package that fits your story,
                characters and illustration requirements.

            </p>

        </div>


        @php
            $packageKeys = [
                'ill-character' => 'character',
                'ill-classic'   => 'classic',
                'ill-full'      => 'full',
            ];

            $startingPrice = $plans->isNotEmpty() ? $plans->min('price') : null;
        @endphp

        <div class="pricing-grid">

            @forelse ($plans as $plan)

                <div class="price-card {{ $plan->is_featured ? 'popular' : '' }}">

                    @if ($plan->is_featured)

                        <div class="popular-badge">
                            Most Popular
                        </div>

                    @endif

                    <h3>
                        {{ $plan->name }}
                    </h3>

                    <div class="price">
                        ${{ number_format($plan->price) }}
                    </div>

                    <div class="price-sub">
                        {{ $plan->description }}
                    </div>


                    <ul class="price-features">

                        @foreach ($plan->features ?? [] as $feature)

                            <li>
                                {{ $feature }}
                            </li>

                        @endforeach

                    </ul>


                    <a
                        href="{{ route('services.bookIllustrationsCheckout', ['package' => $packageKeys[$plan->key] ?? 'classic']) }}"
                        class="btn btn-primary full-btn"
                    >
                        {{ $plan->button_text }}
                    </a>

                </div>

            @empty

                <div class="price-card">

                    <h3>
                        No Plans Available
                    </h3>

                    <div class="price-sub">
                        Illustration pricing packages will be added soon.
                    </div>

                </div>

            @endforelse

        </div>


        <p
            style="
                text-align:center;
                margin-top:25px;
                color:#7d8781;
                font-size:11px;
            "
        >
            Need more illustrations or a custom scope?
            <a
                href="#cta"
                style="
                    color:#a97531;
                    text-decoration:underline;
                "
            >
                Contact us
            </a>
        </p>

    </div>

</section>



<!-- =====================================================
     STATS
===================================================== -->

<section class="stats">

    <div class="container">

        <div class="stats-grid">

            <div class="stat">

                <div class="stat-number">
                    2,500+
                </div>

                <div class="stat-label">
                    Books Illustrated
                </div>

            </div>


            <div class="stat">

                <div class="stat-number">
                    100%
                </div>

                <div class="stat-label">
                    Client Satisfaction
                </div>

            </div>


            <div class="stat">

                <div class="stat-number">
                    4.9/5
                </div>

                <div class="stat-label">
                    Average Rating
                </div>

            </div>


            <div class="stat">

                <div class="stat-number">
                    47
                </div>

                <div class="stat-label">
                    Countries Served
                </div>

            </div>

        </div>

    </div>

</section>



<!-- =====================================================
     TESTIMONIAL
===================================================== -->

<section class="testimonial-section">

    <div class="container">

        <div class="testimonial-box">

            <div class="testimonial-stars">
                ★★★★★
            </div>

            <p class="testimonial-text">

                “I had a vision for my characters but couldn't
                find an illustrator who understood it. HMD's team
                nailed it on the first concept sketches. The final
                illustrations are even better than I imagined.”

            </p>

            <div class="testimonial-author">

                <strong>
                    Patricia Hughes
                </strong>

                <br>

                Children's Book Author

                <br>

                8,000+ Copies Sold

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

            <div class="section-label">
                Frequently Asked Questions
            </div>

            <h2 class="section-title">
                Questions authors
                usually ask.
            </h2>

            <p class="section-text">

                Everything you need to know before
                starting your illustration project.

            </p>

        </div>


        <div class="faq-list">


            <div class="faq-item">

                <button class="faq-question">

                    What illustration styles do you offer?

                    <span>+</span>

                </button>

                <div class="faq-answer">

                    <p>

                        We offer a wide range of styles including
                        watercolor, digital, cartoon, realistic,
                        manga, whimsical and more. We match you
                        with an artist whose style fits your vision.

                    </p>

                </div>

            </div>



            <div class="faq-item">

                <button class="faq-question">

                    How long does illustration take?

                    <span>+</span>

                </button>

                <div class="faq-answer">

                    <p>

                        Timeline varies by project scope.
                        Character designs typically take 2–3 weeks,
                        cover illustrations 3–4 weeks, and full book
                        illustrations 6–8 weeks.

                    </p>

                </div>

            </div>



            <div class="faq-item">

                <button class="faq-question">

                    Do I own the artwork?

                    <span>+</span>

                </button>

                <div class="faq-answer">

                    <p>

                        Yes. You receive full commercial rights
                        to the illustrations upon completion and
                        final payment.

                    </p>

                </div>

            </div>



            <div class="faq-item">

                <button class="faq-question">

                    Can you match an existing art style?

                    <span>+</span>

                </button>

                <div class="faq-answer">

                    <p>

                        Absolutely. You can provide reference
                        images or describe the visual style you
                        want, and we can match you with an
                        illustrator capable of achieving that look.

                    </p>

                </div>

            </div>



            <div class="faq-item">

                <button class="faq-question">

                    How many revisions are included?

                    <span>+</span>

                </button>

                <div class="faq-answer">

                    <p>

                        Character Design includes 2 revision
                        rounds, the Hand-Drawn Classic package
                        includes 3 rounds, and the Full Book
                        package includes unlimited revisions.

                    </p>

                </div>

            </div>



            <div class="faq-item">

                <button class="faq-question">

                    What file formats do I receive?

                    <span>+</span>

                </button>

                <div class="faq-answer">

                    <p>

                        You receive high-resolution PNG, JPEG
                        and PDF files. Layered PSD or AI source
                        files can also be provided when requested.

                    </p>

                </div>

            </div>


        </div>

    </div>

</section>



<!-- =====================================================
     FINAL CTA
===================================================== -->

<section
    class="final-cta"
    id="cta"
>

    <div class="container">

        <div class="section-label">
            Ready to Bring Your Story to Life?
        </div>

        <h2 class="section-title">
            Join thousands of authors
            with stunning custom illustrations.
        </h2>

        <p>

            Professional artwork, full commercial rights,
            high-resolution delivery and a dedicated creative
            process.

        </p>


        <div class="final-buttons">

            <a
                href="#pricing"
                class="btn btn-primary"
            >
                Get Custom Artwork
@if($startingPrice !== null)
    – From ${{ number_format($startingPrice) }}
@endif
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
                View Packages
            </a>

        </div>


        <div
            style="
                margin-top:25px;
                display:flex;
                justify-content:center;
                gap:25px;
                flex-wrap:wrap;
                color:#c2cec7;
                font-size:11px;
            "
        >

            <span>
                ✓ 100% satisfaction rate
            </span>

            <span>
                ✓ 3–6 week delivery
            </span>

            <span>
                ✓ Full commercial rights
            </span>

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

                <p style="margin-top:13px;">

                    Professional book publishing services.
                    10,000+ books published across 47 countries
                    since 2015.

                </p>

            </div>


            <div>

                <h4>
                    Services
                </h4>

                <a href="#">
                    Complete Package
                </a>

                <a href="/services/editing">
                    Editing
                </a>

                <a href="/services/book-cover-design">
                    Cover Design
                </a>

                <a href="/services/book-formatting">
                    Book Formatting
                </a>

                <a href="{{ route('services.bookIllustrations') }}">
                    Illustrations
                </a>

            </div>


            <div>

                <h4>
                    Free Tools
                </h4>

                <a href="#">
                    Royalty Calculator
                </a>

                <a href="#">
                    Keyword Research
                </a>

                <a href="#">
                    Category Finder
                </a>

                <a href="#">
                    Manuscript Readiness
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


        </div>


        <div class="copyright">

            © 2026 HMD Publishing Limited.
            All rights reserved.

            <br><br>

            You keep 100% of your rights and royalties — always.

        </div>

    </div>

</footer>



<!-- =====================================================
     JAVASCRIPT
===================================================== -->

<script>

/* =========================
   FAQ ACCORDION
========================= */

const faqItems =
    document.querySelectorAll(".faq-item");

faqItems.forEach(item => {

    const button =
        item.querySelector(".faq-question");

    button.addEventListener("click", () => {

        faqItems.forEach(other => {

            if(other !== item){

                other.classList.remove(
                    "active"
                );

            }

        });

        item.classList.toggle("active");

    });

});


/* =========================
   SMOOTH SCROLL
========================= */

document
.querySelectorAll('a[href^="#"]')
.forEach(link => {

    link.addEventListener(
        "click",
        function(e){

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

        }
    );

});


/* =========================
   PRICING CARD CLICK
========================= */

const priceCards =
    document.querySelectorAll(".price-card");

priceCards.forEach(card => {

    card.addEventListener(
        "mouseenter",
        function(){

            this.style.cursor =
                "pointer";

        }
    );

});

</script>

</body>
</html>
