<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>Book Your Free Consultation | HMD Publishing</title>

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
    max-width:820px;
    margin:auto;
    text-align:center;
}

.eyebrow{
    color:var(--gold);
    text-transform:uppercase;
    letter-spacing:2px;
    font-size:10px;
    font-weight:800;
    margin-bottom:14px;
}

.hero h1{
    font-family:Georgia,serif;
    font-size:56px;
    line-height:1.08;
    letter-spacing:-2px;
    color:var(--green);
}

.hero h1 span{
    color:var(--gold);
}

.hero-text{
    max-width:640px;
    margin:20px auto 0;
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
   TRUST STRIP
========================= */

.trust{
    max-width:1050px;
    margin:-30px auto 0;
    padding:0 20px;
    position:relative;
}

.trust-box{
    background:#fff;
    border:1px solid var(--border);
    border-radius:10px;
    box-shadow:0 15px 40px rgba(20,55,40,.07);
    display:grid;
    grid-template-columns:repeat(4,1fr);
}

.trust-item{
    text-align:center;
    padding:23px 10px;
    border-right:1px solid #e8ece9;
}

.trust-item:last-child{
    border-right:0;
}

.trust-item strong{
    display:block;
    font-family:Georgia,serif;
    font-size:24px;
    color:var(--green);
}

.trust-item span{
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
   CONSULTATION OPTIONS
========================= */

.consult-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:18px;
}

.consult-card{
    background:#fff;
    border:1px solid var(--border);
    border-radius:11px;
    padding:30px;
    display:flex;
    flex-direction:column;
    position:relative;
    transition:.25s;
}

.consult-card:hover{
    transform:translateY(-4px);
    box-shadow:0 18px 40px rgba(20,55,40,.08);
}

.consult-card .badge{
    position:absolute;
    top:-12px;
    left:50%;
    transform:translateX(-50%);
    background:var(--gold);
    color:#fff;
    font-size:9px;
    font-weight:800;
    letter-spacing:1px;
    text-transform:uppercase;
    padding:5px 14px;
    border-radius:99px;
}

.consult-card h3{
    font-family:Georgia,serif;
    font-size:22px;
    color:var(--green);
    margin-top:6px;
}

.consult-card .consult-price{
    margin:14px 0 2px;
}

.consult-card .consult-price strong{
    font-family:Georgia,serif;
    font-size:34px;
    color:var(--green);
}

.consult-card .consult-price span{
    color:var(--text);
    font-size:11px;
}

.consult-card .consult-duration{
    color:var(--gold);
    font-size:10px;
    font-weight:800;
    text-transform:uppercase;
    letter-spacing:1px;
}

.consult-card p{
    color:var(--text);
    font-size:12px;
    margin:14px 0 22px;
    flex:1;
}

.consult-card .btn{
    width:100%;
}


/* =========================
   WHY BOOK
========================= */

.why-grid{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:18px;
}

.why-item{
    background:#fff;
    border:1px solid var(--border);
    border-radius:11px;
    padding:26px;
}

.why-item h3{
    font-family:Georgia,serif;
    font-size:18px;
    color:var(--green);
    margin-bottom:8px;
}

.why-item p{
    color:var(--text);
    font-size:12px;
}


/* =========================
   HOW IT WORKS
========================= */

.steps-grid{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:18px;
}

.step{
    text-align:center;
    padding:26px 16px;
}

.step-num{
    width:46px;
    height:46px;
    margin:0 auto 14px;
    border-radius:50%;
    background:var(--green);
    color:#fff;
    font-family:Georgia,serif;
    font-size:18px;
    display:flex;
    align-items:center;
    justify-content:center;
}

.step h3{
    font-family:Georgia,serif;
    font-size:17px;
    color:var(--green);
    margin-bottom:8px;
}

.step p{
    color:var(--text);
    font-size:11px;
}


/* =========================
   EXPECT
========================= */

.expect-grid{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:16px;
}

.expect-item{
    background:#fff;
    border:1px solid var(--border);
    border-radius:11px;
    padding:22px 24px;
    display:flex;
    gap:14px;
    align-items:flex-start;
}

.expect-item .check{
    flex-shrink:0;
    width:22px;
    height:22px;
    border-radius:50%;
    background:var(--gold);
    color:#fff;
    font-size:11px;
    display:flex;
    align-items:center;
    justify-content:center;
    margin-top:2px;
}

.expect-item h3{
    font-family:Georgia,serif;
    font-size:16px;
    color:var(--green);
    margin-bottom:5px;
}

.expect-item p{
    color:var(--text);
    font-size:11px;
}


/* =========================
   TESTIMONIALS
========================= */

.testimonial-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:18px;
}

.testimonial{
    background:#fff;
    border:1px solid var(--border);
    border-radius:11px;
    padding:26px;
}

.testimonial .stars{
    color:#bd853a;
    letter-spacing:2px;
    font-size:13px;
    margin-bottom:10px;
}

.testimonial p{
    color:var(--text);
    font-size:12px;
    font-style:italic;
}

.testimonial .who{
    margin-top:14px;
    font-weight:800;
    font-size:11px;
    color:var(--green);
}

.testimonial .role{
    color:#93a098;
    font-size:10px;
}


/* =========================
   FAQ
========================= */

.faq-list{
    max-width:760px;
    margin:auto;
}

.faq-item{
    background:#fff;
    border:1px solid var(--border);
    border-radius:10px;
    margin-bottom:12px;
    overflow:hidden;
}

.faq-q{
    width:100%;
    background:none;
    border:0;
    padding:18px 22px;
    text-align:left;
    font-family:Georgia,serif;
    font-size:16px;
    color:var(--green);
    cursor:pointer;
    display:flex;
    justify-content:space-between;
    align-items:center;
    gap:12px;
}

.faq-q .arrow{
    color:var(--gold);
    font-size:14px;
    transition:.25s;
}

.faq-item.open .arrow{
    transform:rotate(180deg);
}

.faq-a{
    display:none;
    padding:0 22px 18px;
    color:var(--text);
    font-size:12px;
}

.faq-item.open .faq-a{
    display:block;
}


/* =========================
   CONTACT FORM
========================= */

.contact-section{
    background:var(--dark);
    padding:90px 20px;
}

.contact-section .section-heading h2{
    color:#fff;
}

.contact-section .section-heading p{
    color:#aebbb3;
}

.contact-card{
    max-width:760px;
    margin:auto;
    background:#fff;
    border-radius:12px;
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
}

.form-group textarea{
    min-height:110px;
    resize:vertical;
}

.hp-field{
    position:absolute;
    left:-9999px;
    opacity:0;
    pointer-events:none;
    height:0;
    width:0;
}

.form-note{
    font-size:11px;
    color:#93a098;
    margin-bottom:18px;
}

.form-status{
    margin-top:14px;
    font-size:12px;
    font-weight:700;
    text-align:center;
    min-height:18px;
}

.form-status.success{
    color:#16a34a;
}

.form-status.error{
    color:#dc2626;
}


/* =========================
   CTA
========================= */

.cta{
    background:
        radial-gradient(
            circle at 75% 30%,
            rgba(184,132,62,.18),
            transparent 35%
        ),
        linear-gradient(180deg, #173d2d 0%, #102c21 100%);
    color:#fff;
    text-align:center;
    padding:80px 20px;
}

.cta h2{
    font-family:Georgia,serif;
    font-size:40px;
    line-height:1.15;
    letter-spacing:-1px;
    max-width:680px;
    margin:auto;
}

.cta p{
    max-width:560px;
    margin:16px auto 0;
    color:#c1cec6;
    font-size:13px;
}

.cta .btn-primary{
    background:#fff;
    color:var(--green);
    margin-top:26px;
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
    font-size:9px;
    color:#77837c;
}


/* =========================
   RESPONSIVE
========================= */

@media (max-width:900px){

    .trust-box,
    .consult-grid,
    .steps-grid,
    .testimonial-grid{
        grid-template-columns:1fr 1fr;
    }

    .trust-item{
        border-right:0;
        border-bottom:1px solid #e8ece9;
    }

    .why-grid,
    .expect-grid{
        grid-template-columns:1fr;
    }

    .footer-grid{
        grid-template-columns:1fr 1fr;
    }

}

@media (max-width:600px){

    .hero h1{
        font-size:40px;
    }

    .hero-buttons{
        flex-direction:column;
    }

    .trust-box,
    .consult-grid,
    .steps-grid,
    .testimonial-grid{
        grid-template-columns:1fr;
    }

    .form-row{
        grid-template-columns:1fr;
    }

    .contact-card{
        padding:26px;
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

        <div class="eyebrow">
            Consultations
        </div>

        <h1>
            Book Your Free Consultation
            <span>With Publishing Experts.</span>
        </h1>

        <p class="hero-text">
            Talk to a real publishing professional before you commit to anything.
            No pressure, no jargon — just honest guidance on the next best step
            for your book.
        </p>

        <div class="hero-buttons">

            <a href="#consultation-options" class="btn btn-primary">
                View consultation options
            </a>

            <a href="#book" class="btn btn-outline">
                Book a call now
            </a>

        </div>

    </div>

</section>


<!-- TRUST STRIP -->

<div class="trust">

    <div class="trust-box">

        <div class="trust-item">
            <strong>10K+</strong>
            <span>Authors Helped</span>
        </div>

        <div class="trust-item">
            <strong>100%</strong>
            <span>FREE Calls</span>
        </div>

        <div class="trust-item">
            <strong>4.9/5</strong>
            <span>Client Rating</span>
        </div>

        <div class="trust-item">
            <strong>47</strong>
            <span>Countries Served</span>
        </div>

    </div>

</div>


<!-- CONSULTATION OPTIONS -->

<section class="section" id="consultation-options">

    <div class="container">

        <div class="section-heading">

            <div class="eyebrow">
                Consultation Options
            </div>

            <h2>
                Pick the call that fits where
                you are right now.
            </h2>

            <p>
                Every call is with a member of our publishing team.
                You'll leave with clarity, not a sales pitch.
            </p>

        </div>


        <div class="consult-grid">


            <div class="consult-card">

                <h3>Discovery Call</h3>

                <div class="consult-duration">
                    15 minutes
                </div>

                <div class="consult-price">
                    <strong>Free</strong>
                </div>

                <p>
                    A friendly introduction to HMD Publishing. Tell us where
                    your book is right now and we'll point you in the right
                    direction — whether that's with us or not.
                </p>

                <a href="#book" class="btn btn-primary">
                    Book this call
                </a>

            </div>


            <div class="consult-card">

                <div class="badge">
                    Most Popular
                </div>

                <h3>Strategy Session</h3>

                <div class="consult-duration">
                    60 minutes
                </div>

                <div class="consult-price">
                    <strong>£97</strong>
                </div>

                <p>
                    A deeper working session to map out your publishing roadmap.
                    We review your manuscript, timeline and goals, then hand you
                    a concrete step-by-step plan.
                </p>

                <a href="#book" class="btn btn-primary">
                    Book this session
                </a>

            </div>


            <div class="consult-card">

                <h3>Project Check-In</h3>

                <div class="consult-duration">
                    15–30 minutes
                </div>

                <div class="consult-price">
                    <strong>Free</strong>
                </div>

                <p>
                    Already working with us? Use this call to review progress,
                    ask questions about your project, and make sure everything
                    stays on track.
                </p>

                <a href="#book" class="btn btn-primary">
                    Book this call
                </a>

            </div>


        </div>

    </div>

</section>


<!-- WHY BOOK -->

<section class="section" style="background:#eef2ee;">

    <div class="container">

        <div class="section-heading">

            <div class="eyebrow">
                Why Book A Consultation
            </div>

            <h2>
                A real conversation beats a
                guess every time.
            </h2>

        </div>


        <div class="why-grid">

            <div class="why-item">
                <h3>Expert guidance</h3>
                <p>
                    Speak directly with publishing professionals who have brought
                    thousands of books to market — not a sales team.
                </p>
            </div>

            <div class="why-item">
                <h3>Clear next steps</h3>
                <p>
                    Walk away knowing exactly what to do next, what it costs, and
                    how long it will take.
                </p>
            </div>

            <div class="why-item">
                <h3>No obligation</h3>
                <p>
                    A consultation is advice first. There's no requirement to work
                    with us afterwards.
                </p>
            </div>

            <div class="why-item">
                <h3>Real answers</h3>
                <p>
                    Honest feedback on your manuscript and publishing plan —
                    even when that answer is "not yet."
                </p>
            </div>

        </div>

    </div>

</section>


<!-- HOW IT WORKS -->

<section class="section">

    <div class="container">

        <div class="section-heading">

            <div class="eyebrow">
                How It Works
            </div>

            <h2>
                Book a call in four simple steps.
            </h2>

        </div>


        <div class="steps-grid">

            <div class="step">
                <div class="step-num">1</div>
                <h3>Choose your call</h3>
                <p>
                    Pick the consultation that matches where your book is today.
                </p>
            </div>

            <div class="step">
                <div class="step-num">2</div>
                <h3>Book a time</h3>
                <p>
                    Tell us a little about your project and we'll confirm a slot
                    that suits you.
                </p>
            </div>

            <div class="step">
                <div class="step-num">3</div>
                <h3>Have the conversation</h3>
                <p>
                    Meet with your publishing expert by phone or video call.
                </p>
            </div>

            <div class="step">
                <div class="step-num">4</div>
                <h3>Get your roadmap</h3>
                <p>
                    Leave with clear next steps, a timeline and honest pricing.
                </p>
            </div>

        </div>

    </div>

</section>


<!-- WHAT TO EXPECT -->

<section class="section" style="background:#eef2ee;">

    <div class="container">

        <div class="section-heading">

            <div class="eyebrow">
                What To Expect
            </div>

            <h2>
                Your call, your agenda.
            </h2>

        </div>


        <div class="expect-grid">

            <div class="expect-item">
                <div class="check">✓</div>
                <div>
                    <h3>Honest assessment</h3>
                    <p>Straightforward feedback on your book and its market potential.</p>
                </div>
            </div>

            <div class="expect-item">
                <div class="check">✓</div>
                <div>
                    <h3>Transparent pricing</h3>
                    <p>Clear cost guidance before you spend a penny anywhere.</p>
                </div>
            </div>

            <div class="expect-item">
                <div class="check">✓</div>
                <div>
                    <h3>No high-pressure sales</h3>
                    <p>Advice first. If we're not a fit, we'll tell you.</p>
                </div>
            </div>

            <div class="expect-item">
                <div class="check">✓</div>
                <div>
                    <h3>Actionable takeaways</h3>
                    <p>Leave with specific next steps, not vague ideas.</p>
                </div>
            </div>

            <div class="expect-item">
                <div class="check">✓</div>
                <div>
                    <h3>Time to ask anything</h3>
                    <p>Bring your questions — nothing is off the table.</p>
                </div>
            </div>

            <div class="expect-item">
                <div class="check">✓</div>
                <div>
                    <h3>A written summary</h3>
                    <p>We follow up with a summary of what we discussed.</p>
                </div>
            </div>

        </div>

    </div>

</section>


<!-- TESTIMONIALS -->

<section class="section">

    <div class="container">

        <div class="section-heading">

            <div class="eyebrow">
                Testimonials
            </div>

            <h2>
                Authors who started with a call.
            </h2>

        </div>


        <div class="testimonial-grid">

            <div class="testimonial">
                <div class="stars">★★★★★</div>
                <p>
                    "I booked the free discovery call expecting a sales call.
                    Instead I got a publishing roadmap that saved me months."
                </p>
                <div class="who">Sarah M.</div>
                <div class="role">Memoir Author</div>
            </div>

            <div class="testimonial">
                <div class="stars">★★★★★</div>
                <p>
                    "The strategy session paid for itself ten times over.
                    I finally understood exactly what publishing would cost."
                </p>
                <div class="who">James T.</div>
                <div class="role">Business Book Author</div>
            </div>

            <div class="testimonial">
                <div class="stars">★★★★★</div>
                <p>
                    "Honest, knowledgeable and zero pressure. Best call I've
                    had about my book — ever."
                </p>
                <div class="who">Priya K.</div>
                <div class="role">Fiction Author</div>
            </div>

        </div>

    </div>

</section>


<!-- FAQ -->

<section class="section" style="background:#eef2ee;">

    <div class="container">

        <div class="section-heading">

            <div class="eyebrow">
                FAQ
            </div>

            <h2>
                Questions, answered.
            </h2>

        </div>


        <div class="faq-list">

            <div class="faq-item">
                <button class="faq-q" onclick="toggleFaq(this)">
                    Are the calls really free?
                    <span class="arrow">▾</span>
                </button>
                <div class="faq-a">
                    Yes. The Discovery Call and Project Check-In are completely
                    free with no obligation to work with us.
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-q" onclick="toggleFaq(this)">
                    What if I'm not ready to publish?
                    <span class="arrow">▾</span>
                </button>
                <div class="faq-a">
                    That's fine. Many authors book a consultation months before
                    they're ready — it helps them plan and budget correctly.
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-q" onclick="toggleFaq(this)">
                    How do the calls happen?
                    <span class="arrow">▾</span>
                </button>
                <div class="faq-a">
                    By phone or video call, whichever suits you. After you book,
                    we'll confirm the details and send you a calendar invite.
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-q" onclick="toggleFaq(this)">
                    What should I bring to the call?
                    <span class="arrow">▾</span>
                </button>
                <div class="faq-a">
                    Just your questions. If you have a manuscript or outline,
                    feel free to share a sample beforehand.
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-q" onclick="toggleFaq(this)">
                    What is the Strategy Session?
                    <span class="arrow">▾</span>
                </button>
                <div class="faq-a">
                    A 60-minute working session where we map out your full
                    publishing plan, including timeline, costs and services.
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-q" onclick="toggleFaq(this)">
                    Will I be pressured to buy anything?
                    <span class="arrow">▾</span>
                </button>
                <div class="faq-a">
                    Never. Our consultations exist to help you make an informed
                    decision — even if that decision isn't with us.
                </div>
            </div>

        </div>

    </div>

</section>


<!-- BOOK A CALL -->

<section class="contact-section" id="book">

    <div class="container">

        <div class="section-heading">

            <div class="eyebrow">
                Book A Consultation
            </div>

            <h2>
                Book your consultation today.
            </h2>

            <p>
                Fill in the form and we'll confirm your call by email within one
                business day.
            </p>

        </div>


        <div class="contact-card">

            <form action="{{ route('consultation.submit') }}" method="POST" onsubmit="submitConsultation(event)">

                @csrf

                <div class="hp-field">
                    <label>Leave this field empty</label>
                    <input type="text" name="website" tabindex="-1" autocomplete="off">
                </div>

                <div class="form-row">

                    <div class="form-group">
                        <label for="consultName">Full Name</label>
                        <input id="consultName" type="text" name="name" required placeholder="Jane Smith">
                    </div>

                    <div class="form-group">
                        <label for="consultEmail">Email Address</label>
                        <input id="consultEmail" type="email" name="email" required placeholder="jane@example.com">
                    </div>

                </div>

                <div class="form-row">

                    <div class="form-group">
                        <label for="consultPhone">Phone Number</label>
                        <input id="consultPhone" type="tel" name="phone" placeholder="+44 1234 567890">
                    </div>

                    <div class="form-group">
                        <label for="consultService">Service Interested In</label>
                        <select id="consultService" name="service" required>
                            <option value="Consultation">Book a consultation</option>
                            <option value="Audiobook Production">Audiobook Production</option>
                            <option value="Book Writing & Ghostwriting">Book Writing & Ghostwriting</option>
                            <option value="Editing Services">Editing Services</option>
                            <option value="Book Cover Design">Book Cover Design</option>
                            <option value="Book Formatting">Book Formatting</option>
                            <option value="Book Illustrations">Book Illustrations</option>
                            <option value="Publishing & Distribution">Publishing & Distribution</option>
                        </select>
                    </div>

                </div>

                <div class="form-group">
                    <label for="consultMessage">Your Message</label>
                    <textarea id="consultMessage" name="message" required placeholder="Tell us a little about your book and what you'd like to discuss..."></textarea>
                </div>

                <p class="form-note">
                    By submitting, you agree to be contacted about your
                    consultation. We never share your details.
                </p>

                <button type="submit" class="btn btn-primary" style="width:100%;border:0;cursor:pointer;" id="consultSubmitBtn">
                    Request my consultation
                </button>

                <div class="form-status" id="consultStatus"></div>

            </form>

        </div>

    </div>

</section>


<!-- CTA -->

<section class="cta">

    <h2>
        Not sure which call is right for you?
    </h2>

    <p>
        Start with the free Discovery Call. If it turns out you need more,
        we'll happily recommend the next step.
    </p>

    <a href="#book" class="btn btn-primary">
        Book a free call
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


<script>

function toggleFaq(button) {
    button.closest(".faq-item").classList.toggle("open");
}

function submitConsultation(event) {
    event.preventDefault();

    const form = event.target;
    const button = document.getElementById("consultSubmitBtn");
    const status = document.getElementById("consultStatus");
    const originalText = button.innerText;
    const token = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

    button.innerText = "Sending…";

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
            button.innerText = "Request sent ✓";
            status.innerText = "Thanks — we'll confirm your consultation by email within one business day.";
            status.className = "form-status success";
            form.reset();
        } else {
            button.innerText = "Please check the form";
            status.innerText = "Something went wrong. Please double-check your details and try again.";
            status.className = "form-status error";
        }
        setTimeout(function() {
            button.innerText = originalText;
        }, 4000);
    })
    .catch(function() {
        button.innerText = "Please try again";
        status.innerText = "Network error. Please check your connection and try again.";
        status.className = "form-status error";
        setTimeout(function() {
            button.innerText = originalText;
        }, 4000);
    });
}

</script>


</body>
</html>
