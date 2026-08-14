<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Book Translation Services | HMD Publishing</title>

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
    background:#f8faf8;
    color:#173d2d;
    line-height:1.6;
}

:root{
    --green:#173d2d;
    --dark:#102c21;
    --gold:#b8833e;
    --gold-light:#d4a15e;
    --cream:#f5f7f4;
    --light:#eef3ef;
    --text:#69776f;
    --border:#dfe7e1;
    --white:#fff;
}

a{
    text-decoration:none;
    color:inherit;
}

.container{
    max-width:1160px;
    margin:auto;
    padding:0 25px;
}


/* =========================
   HERO
========================= */

.hero{
    padding:80px 20px 75px;

    background:
        radial-gradient(
            circle at 82% 20%,
            rgba(184,131,62,.13),
            transparent 30%
        ),
        linear-gradient(
            180deg,
            #fbfcfa,
            #f3f7f4
        );
}

.hero-inner{
    max-width:1100px;
    margin:auto;
    text-align:center;
}

.trust{
    display:flex;
    align-items:center;
    justify-content:center;
    gap:8px;

    color:#6e7d74;
    font-size:10px;
    margin-bottom:23px;
}

.stars{
    color:#c58d42;
    letter-spacing:2px;
}

.eyebrow{
    color:var(--gold);
    text-transform:uppercase;
    letter-spacing:2px;
    font-size:9px;
    font-weight:900;
    margin-bottom:12px;
}

.hero h1{
    max-width:900px;
    margin:auto;

    font-family:Georgia,serif;
    color:var(--green);

    font-size:61px;
    line-height:1.04;
    letter-spacing:-2.5px;
}

.hero h1 span{
    color:var(--gold);
}

.hero-description{
    max-width:750px;
    margin:22px auto 0;

    color:#69776f;
    font-size:13px;
}

.hero-price{
    margin-top:24px;

    font-family:Georgia,serif;
    font-size:23px;
    color:var(--green);
}

.hero-price small{
    font-family:Arial,sans-serif;
    font-size:10px;
    color:#7b8880;
}

.hero-buttons{
    display:flex;
    justify-content:center;
    gap:12px;

    margin-top:28px;
}

.btn{
    min-height:46px;
    padding:0 24px;

    display:inline-flex;
    align-items:center;
    justify-content:center;

    border-radius:5px;

    font-size:10px;
    font-weight:900;

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

.btn-outline{
    background:#fff;
    border:1px solid #cbd6cf;
    color:var(--green);
}

.btn-outline:hover{
    border-color:var(--green);
}


/* =========================
   STATS
========================= */

.stats{
    margin-top:45px;

    display:grid;
    grid-template-columns:repeat(4,1fr);

    border:1px solid var(--border);
    background:#fff;
    border-radius:10px;

    box-shadow:0 15px 40px rgba(20,55,40,.06);
}

.stat{
    text-align:center;
    padding:23px 10px;
    border-right:1px solid #e7ede9;
}

.stat:last-child{
    border-right:none;
}

.stat strong{
    display:block;

    font-family:Georgia,serif;
    font-size:25px;
    color:var(--green);
}

.stat span{
    font-size:9px;
    color:#78857e;
}


/* =========================
   GENERAL SECTION
========================= */

.section{
    padding:90px 0;
}

.section-heading{
    max-width:760px;
    margin:0 auto 45px;
    text-align:center;
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
    font-size:11px;
}


/* =========================
   LIGHT GREEN SECTION
========================= */

.light-section{
    background:#f0f4f1;
}

.two-column{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:60px;
    align-items:center;
}

.column-label{
    color:var(--gold);
    text-transform:uppercase;
    letter-spacing:2px;
    font-size:9px;
    font-weight:900;
    margin-bottom:10px;
}

.column-content h2{
    font-family:Georgia,serif;
    color:var(--green);

    font-size:41px;
    line-height:1.12;
}

.column-content > p{
    color:#69776f;
    font-size:11px;
    margin-top:15px;
}

.info-block{
    margin-top:22px;
}

.info-block h3{
    font-family:Georgia,serif;
    color:var(--green);
    font-size:20px;
}

.info-block p{
    color:#68766e;
    font-size:10px;
    margin-top:5px;
}


/* =========================
   LANGUAGE CARDS
========================= */

.language-grid{
    display:grid;
    grid-template-columns:repeat(5,1fr);
    gap:12px;
}

.language{
    background:#fff;
    border:1px solid var(--border);
    border-radius:8px;

    padding:23px 10px;

    text-align:center;

    font-family:Georgia,serif;
    font-size:18px;

    color:var(--green);

    transition:.25s;
}

.language:hover{
    background:var(--green);
    color:#fff;
    transform:translateY(-3px);
}


/* =========================
   FEATURE LIST
========================= */

.feature-layout{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:20px;
}

.feature-box{
    background:#fff;
    border:1px solid var(--border);
    border-radius:9px;
    padding:28px;
}

.feature-box h3{
    font-family:Georgia,serif;
    color:var(--green);
    font-size:23px;
    margin-bottom:9px;
}

.feature-box p{
    color:#69776f;
    font-size:10px;
}

.feature-list{
    list-style:none;
    margin-top:15px;
}

.feature-list li{
    padding:7px 0;

    color:#5d6c63;
    font-size:10px;
}

.feature-list li::before{
    content:"→";
    color:var(--gold);
    margin-right:8px;
}


/* =========================
   DARK RATIONALE
========================= */

.dark{
    background:var(--green);
    color:#fff;
}

.dark .section-heading h2,
.dark h2,
.dark h3{
    color:#fff;
}

.dark .section-heading p,
.dark p{
    color:#b8c6be;
}

.dark-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:18px;
}

.dark-card{
    border:1px solid rgba(255,255,255,.12);
    background:rgba(255,255,255,.035);

    border-radius:9px;
    padding:27px;
}

.dark-card h3{
    font-family:Georgia,serif;
    font-size:21px;
    margin-bottom:9px;
}

.dark-card p{
    font-size:10px;
}


/* =========================
   INCLUDED
========================= */

.included{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:15px;
}

.included-card{
    padding:25px;

    background:#fff;
    border:1px solid var(--border);
    border-radius:9px;

    text-align:center;
}

.included-icon{
    width:42px;
    height:42px;

    margin:0 auto 14px;

    border-radius:50%;

    display:flex;
    align-items:center;
    justify-content:center;

    background:#edf2ee;
    color:var(--gold);

    font-weight:bold;
}

.included-card h3{
    font-family:Georgia,serif;
    font-size:17px;
    color:var(--green);
}

.included-card p{
    margin-top:6px;
    font-size:9px;
    color:#718078;
}


/* =========================
   PROCESS
========================= */

.process{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:18px;
}

.process-card{
    text-align:center;
    padding:10px;
}

.process-number{
    width:52px;
    height:52px;

    margin:0 auto 15px;

    border-radius:50%;

    background:var(--green);
    color:#fff;

    display:flex;
    justify-content:center;
    align-items:center;

    font-size:14px;
    font-weight:900;
}

.process-card h3{
    font-family:Georgia,serif;
    color:var(--green);
    font-size:20px;
}

.process-card p{
    color:#6d7b73;
    font-size:10px;
    margin-top:6px;
}


/* =========================
   PRICING
========================= */

.pricing-area{
    background:#f0f4f1;
}

.pricing-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:18px;
}

.pricing-card{
    background:#fff;
    border:1px solid var(--border);
    border-radius:10px;
    padding:30px;
    position:relative;
}

.pricing-card.featured{
    border:2px solid var(--gold);
}

.popular-label{
    position:absolute;
    right:18px;
    top:-12px;

    padding:4px 11px;

    border-radius:20px;

    background:var(--gold);
    color:#fff;

    font-size:8px;
    font-weight:900;
    text-transform:uppercase;
}

.pricing-card h3{
    font-family:Georgia,serif;
    color:var(--green);
    font-size:25px;
}

.pricing-price{
    margin:12px 0;

    font-size:30px;
    font-weight:900;
    color:var(--green);
}

.pricing-sub{
    color:#7b8780;
    font-size:9px;
}

.pricing-card ul{
    list-style:none;
    margin:20px 0;
}

.pricing-card li{
    padding:6px 0;
    border-bottom:1px solid #edf1ee;

    color:#617067;
    font-size:10px;
}

.pricing-card li::before{
    content:"✓";
    color:var(--gold);
    margin-right:8px;
}


/* =========================
   MARKET ENTRY
========================= */

.market-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:18px;
}

.market-card{
    padding:29px;

    border:1px solid var(--border);
    background:#fff;
    border-radius:9px;
}

.market-card h3{
    font-family:Georgia,serif;
    color:var(--green);
    font-size:21px;
    margin-bottom:9px;
}

.market-card p{
    color:#69776f;
    font-size:10px;
}

.best-use{
    margin-top:17px;

    padding-top:13px;

    border-top:1px solid var(--border);

    color:var(--gold);
    font-size:9px;
    font-weight:900;
}


/* =========================
   FAQ
========================= */

.faq{
    max-width:850px;
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

    color:var(--green);
    font-size:11px;
    font-weight:800;
}

details p{
    padding-top:11px;

    color:#69776f;
    font-size:10px;
}


/* =========================
   FINAL CTA
========================= */

.cta{
    padding:90px 20px;

    background:
        linear-gradient(
            135deg,
            #173d2d,
            #294f3c
        );

    text-align:center;
    color:#fff;
}

.cta .eyebrow{
    color:var(--gold-light);
}

.cta h2{
    max-width:800px;
    margin:auto;

    font-family:Georgia,serif;
    font-size:48px;
    line-height:1.1;
}

.cta p{
    max-width:650px;
    margin:17px auto 25px;

    color:#c0ccc5;
    font-size:11px;
}

.cta .btn{
    background:#fff;
    color:var(--green);
}

.cta .btn:hover{
    background:var(--gold);
    color:#fff;
}


/* =========================
   FOOTER
========================= */

footer{
    background:#102c21;
    color:#aebbb3;
    padding:55px 0 20px;
}

.footer-grid{
    display:grid;
    grid-template-columns:1.5fr 1fr 1fr 1fr;
    gap:35px;
}

.footer-logo{
    font-family:Georgia,serif;
    font-size:23px;
    font-weight:bold;
    color:#fff;
}

.footer-logo span{
    color:var(--gold-light);
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
    margin-top:38px;
    padding-top:17px;

    border-top:1px solid rgba(255,255,255,.1);

    text-align:center;

    color:#7e8f86;
    font-size:8px;
}


/* =========================
   FORM
========================= */

.contact-card{
    max-width:760px;
    margin:auto;
    background:#fff;
    border:1px solid var(--border);
    border-radius:12px;
    box-shadow:0 15px 40px rgba(20,55,40,.07);
    padding:40px;
}

.form-row{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:16px;
    margin-bottom:16px;
}

.form-group{
    margin-bottom:16px;
}

.form-group label{
    display:block;
    font-size:10px;
    font-weight:800;
    letter-spacing:1px;
    text-transform:uppercase;
    color:var(--green);
    margin-bottom:7px;
}

.form-group input,
.form-group select,
.form-group textarea{
    width:100%;
    border:1px solid var(--border);
    border-radius:6px;
    padding:12px 14px;
    font-size:12px;
    font-family:Arial, Helvetica, sans-serif;
    color:var(--green);
    background:#fbfcfa;
    transition:.25s;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus{
    outline:none;
    border-color:var(--gold);
    background:#fff;
    box-shadow:0 0 0 3px rgba(184,132,62,.12);
}

.form-group textarea{
    min-height:110px;
    resize:vertical;
}

.form-consent{
    font-size:11px;
    color:#93a098;
    margin-bottom:18px;
}

.contact-submit{
    width:100%;
    border:none;
    cursor:pointer;
}

.form-note{
    max-width:760px;
    margin:-25px auto 25px;
    padding:12px 18px;

    border-radius:6px;

    font-size:11px;
    font-weight:700;
    text-align:center;
}

.form-note-success{
    background:#e7f3ea;
    color:#173d2d;
    border:1px solid #bfd8c7;
}

.form-note-error{
    background:#fbeaea;
    color:#8b2f2f;
    border:1px solid #eccaca;
}


/* =========================
   RESPONSIVE
========================= */

@media(max-width:950px){

    .nav{
        display:none;
    }

    .hero h1{
        font-size:48px;
    }

    .stats{
        grid-template-columns:repeat(2,1fr);
    }

    .stat:nth-child(2){
        border-right:none;
    }

    .dark-grid,
    .pricing-grid,
    .market-grid{
        grid-template-columns:1fr;
    }

    .included{
        grid-template-columns:repeat(2,1fr);
    }

    .process{
        grid-template-columns:repeat(2,1fr);
    }

    .two-column,
    .feature-layout{
        grid-template-columns:1fr;
        gap:35px;
    }

    .language-grid{
        grid-template-columns:repeat(3,1fr);
    }

    .footer-grid{
        grid-template-columns:1fr 1fr;
    }
}


@media(max-width:600px){

    .hero{
        padding:60px 15px;
    }
    .hero h1{
        font-size:38px;
        letter-spacing:-1px;
    }

    .hero-description{
        font-size:11px;
    }

    .hero-buttons{
        flex-direction:column;
        align-items:center;
    }

    .btn{
        width:100%;
        max-width:290px;
    }

    .form-row{
        grid-template-columns:1fr;
    }

    .contact-card{
        padding:28px 20px;
    }

    .section{
        padding:65px 0;
    }

    .section-heading h2{
        font-size:34px;
    }

    .stats{
        grid-template-columns:1fr 1fr;
    }

    .language-grid{
        grid-template-columns:1fr 1fr;
    }

    .included{
        grid-template-columns:1fr;
    }

    .process{
        grid-template-columns:1fr;
    }

    .column-content h2{
        font-size:34px;
    }

    .cta h2{
        font-size:36px;
    }

    .footer-grid{
        grid-template-columns:1fr;
    }
}
</style>
</head>

<body>

@include('frontend.partials.navbar')


<!-- HERO -->

<section class="hero">

    <div class="hero-inner">

        <div class="trust">
            <span class="stars">★★★★★</span>
            <span>4.7 out of 5 · Based on 83 Trustpilot reviews</span>
        </div>

        <div class="eyebrow">
            Global Reach
        </div>

        <h1>
            Book Translation Built
            <span>For Readers In New Markets.</span>
        </h1>

        <p class="hero-description">
            Native-speaker literary translation, localisation,
            and publication-ready support for authors who want
            a translated edition to feel commercially natural,
            not merely accurate.
        </p>

        <div class="hero-price">
            From £797
            <small> · 10,000+ books</small>
        </div>

        <div class="hero-buttons">

            <a href="#pricing"
               class="btn btn-primary">
                Choose Your Translation Package
            </a>

            <a href="#localisation"
               class="btn btn-outline">
                See Localisation Strategy
            </a>

        </div>


        <div class="stats">

            <div class="stat">
                <strong>5+</strong>
                <span>Core language markets</span>
            </div>

            <div class="stat">
                <strong>Native</strong>
                <span>Speaker-led translation</span>
            </div>

            <div class="stat">
                <strong>2-pass</strong>
                <span>Translation and review</span>
            </div>

            <div class="stat">
                <strong>14–30</strong>
                <span>Day delivery windows</span>
            </div>

        </div>

    </div>

</section>


<!-- WHAT THIS ROUTE FIXES -->

<section class="section light-section">

    <div class="container">

        <div class="section-heading">

            <div class="eyebrow">
                What This Route Fixes
            </div>

            <h2>
                Translation is more than
                changing the words.
            </h2>

        </div>


        <div class="feature-layout">


            <div class="feature-box">

                <h3>
                    Voice matters as much
                    as literal accuracy.
                </h3>

                <p>
                    Readers should feel the translated book
                    was written for them, not mechanically
                    transferred from another language.
                </p>

                <ul class="feature-list">

                    <li>
                        Tone and rhythm preserved
                    </li>

                    <li>
                        Genre cues adapted
                    </li>

                    <li>
                        Cultural context handled naturally
                    </li>

                </ul>

            </div>


            <div class="feature-box">

                <h3>
                    Metadata and positioning
                    need localisation too.
                </h3>

                <p>
                    A translated manuscript alone is not enough.
                    The retail and marketing layer often needs
                    adaptation for the new market.
                </p>

                <ul class="feature-list">

                    <li>
                        Book descriptions
                    </li>

                    <li>
                        Keywords and metadata
                    </li>

                    <li>
                        Retail positioning
                    </li>

                </ul>

            </div>


        </div>

    </div>

</section>


<!-- LANGUAGES -->

<section class="section">

    <div class="container">

        <div class="section-heading">

            <div class="eyebrow">
                Target Languages
            </div>

            <h2>
                Reach readers in
                major publishing markets.
            </h2>

            <p>
                Language choice is guided by audience demand,
                genre fit and launch strategy.
            </p>

        </div>


        <div class="language-grid">

            <div class="language">
                Spanish
            </div>

            <div class="language">
                German
            </div>

            <div class="language">
                French
            </div>

            <div class="language">
                Italian
            </div>

            <div class="language">
                Portuguese
            </div>

        </div>

    </div>

</section>


<!-- LOCALISATION -->

<section class="section dark"
         id="localisation">

    <div class="container">

        <div class="section-heading">

            <div class="eyebrow">
                Package Rationale
            </div>

            <h2>
                Translation should read
                like the book belongs in that market.
            </h2>

            <p>
                Strong translation work preserves tone,
                handles cultural nuance and prepares the
                translated edition for its new audience.
            </p>

        </div>


        <div class="dark-grid">


            <div class="dark-card">

                <h3>
                    Native-Speaker Translators
                </h3>

                <p>
                    Your manuscript is matched with native
                    speakers who understand the target language,
                    genre and reading culture.
                </p>

            </div>


            <div class="dark-card">

                <h3>
                    Cultural Localization
                </h3>

                <p>
                    Phrases, references and genre expectations
                    are adapted so the book feels natural
                    to readers in the new market.
                </p>

            </div>


            <div class="dark-card">

                <h3>
                    Proofreading Included
                </h3>

                <p>
                    A second linguistic review helps identify
                    phrasing that may be technically correct
                    but commercially weak.
                </p>

            </div>


        </div>

    </div>

</section>


<!-- INCLUDED -->

<section class="section">

    <div class="container">

        <div class="section-heading">

            <div class="eyebrow">
                Included
            </div>

            <h2>
                The publishing stack is
                coordinated from the start.
            </h2>

        </div>


        <div class="included">


            <div class="included-card">

                <div class="included-icon">
                    A
                </div>

                <h3>
                    Translation
                </h3>

                <p>
                    Native-language literary translation.
                </p>

            </div>


            <div class="included-card">

                <div class="included-icon">
                    ✓
                </div>

                <h3>
                    Proofreading
                </h3>

                <p>
                    Editorial quality and language review.
                </p>

            </div>


            <div class="included-card">

                <div class="included-icon">
                    ▤
                </div>

                <h3>
                    Formatting
                </h3>

                <p>
                    Formatting adapted for the new language.
                </p>

            </div>


            <div class="included-card">

                <div class="included-icon">
                    #
                </div>

                <h3>
                    Metadata
                </h3>

                <p>
                    Metadata translation for retail platforms.
                </p>

            </div>


        </div>

    </div>

</section>


<!-- PROCESS -->

<section class="section light-section">

    <div class="container">

        <div class="section-heading">

            <div class="eyebrow">
                Process
            </div>

            <h2>
                Translation Process
            </h2>

        </div>


        <div class="process">


            <div class="process-card">

                <div class="process-number">
                    1
                </div>

                <h3>
                    Assessment
                </h3>

                <p>
                    We analyze your text and match
                    it with the right translator.
                </p>

            </div>


            <div class="process-card">

                <div class="process-number">
                    2
                </div>

                <h3>
                    Translation
                </h3>

                <p>
                    Careful translation preserving
                    tone, style and author voice.
                </p>

            </div>


            <div class="process-card">

                <div class="process-number">
                    3
                </div>

                <h3>
                    Editing
                </h3>

                <p>
                    A second linguist reviews
                    the translation for accuracy.
                </p>

            </div>


            <div class="process-card">

                <div class="process-number">
                    4
                </div>

                <h3>
                    Final Polish
                </h3>

                <p>
                    Formatting and final quality
                    checks complete the edition.
                </p>

            </div>


        </div>

    </div>

</section>


<!-- MARKET ENTRY -->

<section class="section">

    <div class="container">

        <div class="section-heading">

            <div class="eyebrow">
                Market Entry
            </div>

            <h2>
                Translation works better when
                localisation and launch planning connect.
            </h2>

            <p>
                Treat market expansion as a release plan,
                not simply a file-delivery task.
            </p>

        </div>


        <div class="market-grid">


            <div class="market-card">

                <h3>
                    Choose The First Market
                </h3>

                <p>
                    Choose your first target language based
                    on demand, genre fit and your ability
                    to support the launch.
                </p>

                <div class="best-use">
                    BEST USE: Strategic first-market entry
                </div>

            </div>


            <div class="market-card">

                <h3>
                    Translate The Retail Layer
                </h3>

                <p>
                    Descriptions, metadata and launch copy
                    should be adapted alongside the manuscript.
                </p>

                <div class="best-use">
                    BEST USE: Publication readiness
                </div>

            </div>


            <div class="market-card">

                <h3>
                    Sequence Additional Languages
                </h3>

                <p>
                    Prove the first edition before expanding
                    into additional language markets.
                </p>

                <div class="best-use">
                    BEST USE: Larger expansion plans
                </div>

            </div>


        </div>

    </div>

</section>


<!-- LANGUAGE FIT -->

<section class="section light-section">

    <div class="container">

        <div class="section-heading">

            <div class="eyebrow">
                Language Fit
            </div>

            <h2>
                A translated book performs better
                when the language feels local.
            </h2>

            <p>
                Literal translation is not enough for
                commercial publishing.
            </p>

        </div>


        <div class="feature-layout">


            <div class="feature-box">

                <h3>
                    Reader-Natural Language
                </h3>

                <p>
                    The translation should sound native to
                    the audience, with phrasing, cadence and
                    genre conventions that feel expected.
                </p>

                <ul class="feature-list">

                    <li>
                        Native-speaker translators
                    </li>

                    <li>
                        Editorial review
                    </li>

                    <li>
                        Author voice preserved
                    </li>

                </ul>

            </div>


            <div class="feature-box">

                <h3>
                    What Gets Localised
                </h3>

                <ul class="feature-list">

                    <li>
                        Manuscript language and readability
                    </li>

                    <li>
                        Book descriptions and author bios
                    </li>

                    <li>
                        Metadata and launch assets
                    </li>

                    <li>
                        Genre cues and cultural references
                    </li>

                </ul>

            </div>


        </div>

    </div>

</section>


<!-- PRICING -->

<section class="section pricing-area"
         id="pricing">

    <div class="container">

        <div class="section-heading">

            <div class="eyebrow">
                Investment
            </div>

            <h2>
                Translation Packages
            </h2>

            <p>
                Packages are built around manuscript size
                and localisation depth.
            </p>

        </div>


        <div class="pricing-grid">


            <div class="pricing-card">

                <h3>
                    Essential Translation
                </h3>

                <div class="pricing-price">
                    £797
                </div>

                <div class="pricing-sub">
                    Basic translation · Up to 30k words
                </div>

                <ul>

                    <li>Native speaker translator</li>
                    <li>One revision round</li>
                    <li>Metadata translation</li>

                </ul>

                <a href="{{ route('services.bookTranslationCheckout', ['package' => 'essential']) }}"
                   class="btn btn-outline">
                    Get Started
                </a>

            </div>


            <div class="pricing-card featured">

                <div class="popular-label">
                    Most Popular
                </div>

                <h3>
                    Publishing Ready
                </h3>

                <div class="pricing-price">
                    £1,497
                </div>

                <div class="pricing-sub">
                    Editorial quality · Up to 60k words
                </div>

                <ul>

                    <li>Professional literary translator</li>
                    <li>Editorial proofreading</li>
                    <li>Cultural adaptation</li>
                    <li>Two revision rounds</li>

                </ul>

                <a href="{{ route('services.bookTranslationCheckout', ['package' => 'ready']) }}"
                   class="btn btn-primary">
                    Get Started
                </a>

            </div>


            <div class="pricing-card">

                <h3>
                    Localization Pro
                </h3>

                <div class="pricing-price">
                    £2,497
                </div>

                <div class="pricing-sub">
                    Full localization · Up to 100k words
                </div>

                <ul>

                    <li>Genre specialist translator</li>
                    <li>Full cultural localization</li>
                    <li>Marketing copy translation</li>
                    <li>Unlimited revisions</li>

                </ul>

                <a href="{{ route('services.bookTranslationCheckout', ['package' => 'pro']) }}"
                   class="btn btn-outline">
                    Get Started
                </a>

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

        </div>


        <div class="faq">


            <details>

                <summary>
                    Which languages can you support?
                </summary>

                <p>
                    The service typically covers major commercial
                    languages such as Spanish, German, French,
                    Italian and Portuguese. Other language pairs
                    can be handled depending on translator
                    availability and genre fit.
                </p>

            </details>


            <details>

                <summary>
                    Are the translators native speakers?
                </summary>

                <p>
                    Yes. The work is matched to native speakers
                    of the target language who understand genre
                    expectations, tone and publishing context.
                </p>

            </details>


            <details>

                <summary>
                    Do you only translate the manuscript?
                </summary>

                <p>
                    No. Depending on the package, metadata,
                    descriptions, retailer copy and other
                    launch materials can also be translated
                    and localised.
                </p>

            </details>


            <details>

                <summary>
                    How should I choose my first language?
                </summary>

                <p>
                    The decision should consider genre demand,
                    reader geography, channel access and how
                    well you can support the launch in that market.
                </p>

            </details>


            <details>

                <summary>
                    How long does translation take?
                </summary>

                <p>
                    Typical delivery windows range from around
                    14 to 30 days depending on manuscript size,
                    language and the selected package.
                </p>

            </details>


        </div>

    </div>

</section>


<!-- CTA -->

<section class="cta">

    <div class="eyebrow">
        Next Step
    </div>

    <h2>
        Ready to expand your book
        into a new market?
    </h2>

    <p>
        Choose the package that fits your manuscript
        and localisation needs, or start a conversation
        if you need help choosing the right market.
    </p>

    <div class="hero-buttons">

        <a href="#pricing"
           class="btn">
            Choose Your Translation Package
        </a>

        <a href="#contact"
           class="btn btn-outline">
            Talk Through Your Market Plan
        </a>

    </div>

</section>


<!-- CONTACT -->

<section class="section"
         id="contact">

    <div class="container">

        <div class="section-heading">

            <div class="eyebrow">
                Start Your Project
            </div>

            <h2>
                Let's take your book
                to a new market.
            </h2>

            <p>
                Tell us about your manuscript, target language
                and publishing goals.
            </p>

        </div>


        @if (session('success'))
            <div class="form-note form-note-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="form-note form-note-error">
                {{ $errors->first() }}
            </div>
        @endif


        <div class="contact-card">

            <form action="{{ route('contact.submit') }}" method="POST">

                @csrf

                <div class="form-row">

                    <div class="form-group">
                        <label for="contactName">Your Name</label>
                        <input id="contactName" type="text" name="name" value="{{ old('name') }}" required placeholder="Jane Smith">
                    </div>

                    <div class="form-group">
                        <label for="contactEmail">Email Address</label>
                        <input id="contactEmail" type="email" name="email" value="{{ old('email') }}" required placeholder="jane@example.com">
                    </div>

                </div>

                <div class="form-row">

                    <div class="form-group">
                        <label for="contactPhone">Phone Number</label>
                        <input id="contactPhone" type="tel" name="phone" value="{{ old('phone') }}" placeholder="+44 1234 567890">
                    </div>

                    <div class="form-group">
                        <label for="contactService">Target Language</label>
                        <select id="contactService" name="service">
                            <option value="Book Translation">Select Target Language</option>
                            <option value="Book Translation – Spanish" @selected(old('service') === 'Book Translation – Spanish')>Spanish</option>
                            <option value="Book Translation – German" @selected(old('service') === 'Book Translation – German')>German</option>
                            <option value="Book Translation – French" @selected(old('service') === 'Book Translation – French')>French</option>
                            <option value="Book Translation – Italian" @selected(old('service') === 'Book Translation – Italian')>Italian</option>
                            <option value="Book Translation – Portuguese" @selected(old('service') === 'Book Translation – Portuguese')>Portuguese</option>
                            <option value="Book Translation – Other" @selected(old('service') === 'Book Translation – Other')>Other</option>
                        </select>
                    </div>

                </div>

                <div class="form-group">
                    <label for="contactMessage">Your Message</label>
                    <textarea id="contactMessage" name="message" required placeholder="Tell us about your book...">{{ old('message') }}</textarea>
                </div>

                <p class="form-consent">
                    By submitting, you agree to be contacted about your
                    translation project. We never share your details.
                </p>

                <button type="submit" class="btn btn-primary contact-submit">
                    Send Project Details
                </button>

            </form>

        </div>

    </div>

</section>


<!-- FOOTER -->

<footer>

    <div class="container">

        <div class="footer-grid">


            <div>

                <div class="footer-logo">
                    HMD<span>Publishing</span>
                </div>

                <p>
                    Professional book publishing services
                    for authors around the world.
                </p>

                <p>
                    Trusted by 10,000+ authors.
                </p>

            </div>


            <div>

                <h3>
                    Services
                </h3>

                <a href="/services/editing">Book Editing</a>
                <a href="/services/book-formatting">Book Formatting</a>
                <a href="/services/book-cover-design">Cover Design</a>
                <a href="{{ route('services.bookTranslation') }}">Translation</a>
                <a href="/services/audiobook-production">Audiobook</a>

            </div>


            <div>

                <h3>
                    Company
                </h3>

                <a href="/about">About</a>
                <a href="/portfolio">Portfolio</a>
                <a href="/#pricing">Pricing</a>
                <a href="/contact">Contact</a>

            </div>


            <div>

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


</body>
</html>