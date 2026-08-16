<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Checkout — {{ $package['name'] }} | HMD Publishing</title>

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
    background:#f7f8f6;
    color:#183d2d;
    line-height:1.5;
}

a{
    text-decoration:none;
    color:inherit;
}

button,
input,
select{
    font-family:inherit;
}


/* =========================================================
   VARIABLES
========================================================= */

:root{
    --green:#173d2d;
    --green-dark:#102d22;
    --green-light:#204b38;

    --gold:#b77e35;
    --gold-light:#d1a05d;

    --cream:#f7f8f6;

    --text:#64716a;
    --border:#dfe6e1;

    --white:#ffffff;
}


/* =========================================================
   CHECKOUT AREA
========================================================= */

.checkout-section{
    padding:65px 20px 90px;
}

.checkout-container{
    max-width:1080px;

    margin:auto;
}


/* =========================================================
   PAGE HEADER
========================================================= */

.page-header{
    text-align:center;

    margin-bottom:38px;
}

.trustpilot{
    display:flex;

    align-items:center;

    justify-content:center;

    gap:9px;

    margin-bottom:14px;

    font-size:11px;

    color:#77827c;
}

.stars{
    color:#bd873b;

    letter-spacing:2px;

    font-size:15px;
}

.page-header h1{
    font-family:Georgia,serif;

    color:var(--green);

    font-size:48px;

    line-height:1.1;

    letter-spacing:-1.7px;

    margin-bottom:9px;
}

.page-header p{
    color:#76817b;

    font-size:13px;
}


/* =========================================================
   MAIN GRID
========================================================= */

.checkout-grid{
    display:grid;

    grid-template-columns:
        1fr
        1.05fr;

    gap:22px;

    align-items:start;
}


/* =========================================================
   CARD
========================================================= */

.card{
    background:#fff;

    border:1px solid var(--border);

    border-radius:12px;

    box-shadow:
        0 8px 30px rgba(20,55,40,.05);

    overflow:hidden;
}

.card-header{
    padding:23px 25px;

    border-bottom:1px solid #edf0ed;
}

.card-header h2{
    font-family:Georgia,serif;

    color:var(--green);

    font-size:22px;
}

.card-header p{
    color:#849089;

    font-size:10px;

    margin-top:4px;
}

.card-body{
    padding:24px 25px;
}


/* =========================================================
   ORDER SUMMARY
========================================================= */

.order-row{
    display:flex;

    align-items:center;

    justify-content:space-between;

    padding:13px 0;

    border-bottom:1px solid #edf0ed;

    font-size:12px;
}

.order-name{
    font-weight:800;

    color:#2e493c;
}

.order-price{
    font-weight:800;

    color:var(--green);

    font-size:15px;
}

.order-total{
    display:flex;

    justify-content:space-between;

    align-items:center;

    padding:18px 0 3px;
}

.order-total span:first-child{
    font-weight:800;

    color:#29483a;
}

.order-total span:last-child{
    font-size:25px;

    font-weight:900;

    color:var(--green);
}

.vat{
    color:#8a938e;

    font-size:9px;

    margin-top:2px;
}


/* =========================================================
   STRIPE
========================================================= */

.stripe-box{
    margin-top:18px;

    padding:12px 14px;

    background:#f5f8f5;

    border-radius:7px;

    text-align:center;

    font-size:10px;

    color:#65736b;
}

.stripe-box strong{
    color:#314d40;
}


/* =========================================================
   ADDONS
========================================================= */

.addons-title{
    font-family:Georgia,serif;

    font-size:21px;

    color:var(--green);

    margin-bottom:4px;
}

.addons-subtitle{
    color:#7d8882;

    font-size:10px;

    margin-bottom:17px;
}

.addon-list{
    display:flex;

    flex-direction:column;

    gap:8px;
}

.addon{
    display:flex;

    align-items:center;

    gap:11px;

    padding:12px;

    border:1px solid #e1e7e3;

    border-radius:7px;

    background:#fff;

    transition:.2s;

    cursor:pointer;
}

.addon:hover{
    border-color:#aabdb0;

    background:#fafcfb;
}

.addon-checkbox{
    width:17px;

    height:17px;

    accent-color:var(--green);

    cursor:pointer;

    flex-shrink:0;
}

.addon-info{
    flex:1;
}

.addon-name{
    display:block;

    color:#314b3f;

    font-size:11px;

    font-weight:800;
}

.addon-description{
    display:block;

    color:#8a938e;

    font-size:9px;

    margin-top:2px;
}

.addon-price{
    font-weight:800;

    color:var(--gold);

    font-size:11px;

    white-space:nowrap;
}


/* =========================================================
   CUSTOMER DETAILS
========================================================= */

.details-card{
    margin-top:22px;
}

.form-group{
    margin-bottom:16px;
}

.form-group label{
    display:block;

    color:#344d41;

    font-size:11px;

    font-weight:800;

    margin-bottom:6px;
}

.required{
    color:#b14f43;
}

.input,
.select{
    width:100%;

    height:45px;

    border:1px solid #dce4df;

    border-radius:6px;

    padding:0 13px;

    outline:none;

    color:#405247;

    background:#fff;

    font-size:11px;

    transition:.2s;
}

.input:focus,
.select:focus{
    border-color:#91aa9c;

    box-shadow:
        0 0 0 3px rgba(23,61,45,.06);
}


/* TWO COLUMNS */

.form-two{
    display:grid;

    grid-template-columns:1fr 1fr;

    gap:12px;
}


/* HONEYPOT */

.website-field{
    position:absolute;

    left:-9999px;

    opacity:0;
}


/* =========================================================
   PAYMENT BUTTON
========================================================= */

.pay-button{
    width:100%;

    height:50px;

    margin-top:7px;

    border:0;

    border-radius:7px;

    background:var(--green);

    color:#fff;

    font-size:12px;

    font-weight:900;

    cursor:pointer;

    transition:.25s;
}

.pay-button:hover{
    background:var(--gold);

    transform:translateY(-1px);
}

.payment-note{
    text-align:center;

    color:#89928d;

    font-size:9px;

    margin-top:10px;
}


/* =========================================================
   SECURITY BADGES
========================================================= */

.security{
    display:grid;

    grid-template-columns:
        1fr 1fr;

    gap:8px;

    margin-top:13px;
}

.security-box{
    display:flex;

    align-items:center;

    justify-content:center;

    gap:7px;

    border:1px solid #e5eae6;

    border-radius:6px;

    padding:9px;

    color:#6d7972;

    font-size:9px;
}

.security-icon{
    color:#3f7356;

    font-size:13px;
}


/* =========================================================
   TERMS
========================================================= */

.terms{
    text-align:center;

    color:#8a928e;

    font-size:9px;

    margin-top:13px;

    line-height:1.6;
}

.terms a{
    color:#547360;

    text-decoration:underline;
}


/* =========================================================
   WHAT HAPPENS NEXT
========================================================= */

.next-card{
    margin-top:22px;
}

.steps{
    display:grid;

    grid-template-columns:
        repeat(4,1fr);

    gap:9px;
}

.step{
    text-align:center;

    padding:13px 8px;

    background:#f6f8f6;

    border-radius:7px;
}

.step-number{
    width:30px;

    height:30px;

    margin:0 auto 8px;

    display:flex;

    align-items:center;

    justify-content:center;

    border-radius:50%;

    background:var(--green);

    color:#fff;

    font-size:10px;

    font-weight:900;
}

.step p{
    color:#68756d;

    font-size:9px;

    line-height:1.5;
}


/* =========================================================
   TESTIMONIAL
========================================================= */

.testimonial-card{
    margin-top:22px;

    background:var(--green);

    border-radius:12px;

    padding:25px;

    color:#fff;
}

.testimonial-card .stars{
    color:#d4a461;

    font-size:12px;

    margin-bottom:11px;
}

.testimonial-quote{
    font-family:Georgia,serif;

    font-size:14px;

    line-height:1.7;

    color:#e4ebe6;

    margin-bottom:16px;
}

.testimonial-author{
    display:flex;

    align-items:center;

    gap:10px;
}

.avatar{
    width:34px;

    height:34px;

    border-radius:50%;

    background:#d2a05c;

    color:var(--green);

    display:flex;

    align-items:center;

    justify-content:center;

    font-weight:900;

    font-size:10px;
}

.author-name{
    font-size:10px;

    font-weight:800;
}

.author-book{
    color:#aebfb5;

    font-size:9px;

    margin-top:2px;
}


/* =========================================================
   FINAL TOTAL
========================================================= */

.bottom-total{
    margin-top:22px;

    background:#fff;

    border:1px solid var(--border);

    border-radius:12px;

    padding:20px 25px;

    display:flex;

    align-items:center;

    justify-content:space-between;
}

.bottom-total-label{
    color:#6c7972;

    font-size:11px;

    font-weight:700;
}

.bottom-total-price{
    color:var(--green);

    font-size:28px;

    font-weight:900;
}


/* =========================================================
   FOOTER
========================================================= */

footer{
    background:var(--green-dark);

    color:#aebbb3;

    padding:45px 20px 20px;
}

.footer-container{
    max-width:1080px;

    margin:auto;
}

.footer-grid{
    display:grid;

    grid-template-columns:
        1.5fr 1fr 1fr 1fr;

    gap:35px;
}

.footer-logo{
    font-family:Georgia,serif;

    color:#fff;

    font-size:23px;

    font-weight:bold;
}

.footer-logo span{
    color:#c18b42;
}

footer h3{
    color:#fff;

    font-size:11px;

    margin-bottom:12px;
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

    margin-top:30px;

    padding-top:16px;

    text-align:center;

    color:#81918a;

    font-size:8px;
}


/* =========================================================
   RESPONSIVE
========================================================= */

@media(max-width:900px){

    .checkout-grid{
        grid-template-columns:1fr;
    }

    .steps{
        grid-template-columns:
            repeat(2,1fr);
    }

    .footer-grid{
        grid-template-columns:
            1fr 1fr;
    }

}


@media(max-width:700px){

    .page-header h1{
        font-size:38px;
    }

    .checkout-section{
        padding:45px 13px 65px;
    }

    .form-two{
        grid-template-columns:1fr;
    }

    .footer-grid{
        grid-template-columns:1fr;
    }

}


@media(max-width:480px){

    .page-header h1{
        font-size:32px;

        letter-spacing:-1px;
    }

    .card-body,
    .card-header{
        padding-left:18px;
        padding-right:18px;
    }

    .steps{
        grid-template-columns:1fr;
    }

    .security{
        grid-template-columns:1fr;
    }

    .bottom-total{
        padding:17px;
    }

    .bottom-total-price{
        font-size:23px;
    }

}

</style>
</head>


<body>


@include('frontend.partials.navbar')



<!-- =========================================================
     CHECKOUT
========================================================= -->

@php
    $addonKeys = [
        'rush',
        'audiobook',
        'translation',
        'illustrations',
        'advertising',
        'website',
        'press',
        'wordcount',
        'revisions',
        'vip',
    ];

    $addonModels = \App\Models\Addon::whereIn('key', $addonKeys)
        ->where('is_active', true)
        ->get()
        ->keyBy('key');
@endphp


<section class="checkout-section">

    <div class="checkout-container">


        <!-- PAGE TITLE -->

        <div class="page-header">

            <div class="trustpilot">

                <span class="stars">
                    ★★★★★
                </span>

                <span>
                    4.7 out of 5
                </span>

                <span>
                    · Based on 83 Trustpilot reviews
                </span>

            </div>


            <h1>
                Checkout — {{ $package['name'] }}
            </h1>

            <p>
                Review your Complete Publishing Package and proceed
                to secure payment
            </p>

        </div>



        <!-- MAIN GRID -->

        <div class="checkout-grid">


            <!-- =================================================
                 LEFT COLUMN
            ================================================= -->

            <div>


                <!-- ORDER SUMMARY -->

                <div class="card">

                    <div class="card-header">

                        <h2>
                            Order Summary
                        </h2>

                    </div>


                    <div class="card-body">


                        <div class="order-row">

                            <span class="order-name">
                                {{ $package['name'] }}
                            </span>

                            <span
                                class="order-price"
                                id="basePrice"
                            >
                                £{{ $package['price'] }}
                            </span>

                        </div>


                        <div class="order-total">

                            <span>
                                Total
                            </span>

                            <span id="totalPrice">
                                £{{ number_format($package['price'], 2) }}
                            </span>

                        </div>

                        <div class="vat">
                            No VAT applicable
                        </div>


                        <div class="stripe-box">

                            🔒

                            Secure checkout powered by
                            <strong>
                                Stripe
                            </strong>

                        </div>

                    </div>

                </div>



                <!-- ADDONS -->

                <div class="card" style="margin-top:22px;">

                    <div class="card-body">

                        <div class="addons-title">
                            Enhance Your Order
                        </div>

                        <div class="addons-subtitle">
                            Optional add-ons to get more from your
                            Complete Publishing Package
                        </div>


                        <div class="addon-list">

                        @foreach ($addonKeys as $key)

                            @php $addon = $addonModels[$key] ?? null; @endphp

                            @if ($addon)

                                <label class="addon">

                                    <input
                                        type="checkbox"
                                        class="addon-checkbox"
                                        data-price="{{ $addon->price }}"
                                        data-key="{{ $key }}"
                                    >

                                    <input
                                        type="hidden"
                                        form="checkoutForm"
                                        name="addon[{{ $key }}]"
                                        value=""
                                    >

                                    <span class="addon-info">

                                        <span class="addon-name">
                                            {{ $addon->name }}
                                        </span>

                                        <span class="addon-description">
                                            {{ $addon->description }}
                                        </span>

                                    </span>

                                    <span class="addon-price">
                                        +£{{ number_format($addon->price) }}
                                    </span>

                                </label>

                            @endif

                        @endforeach

                        </div>

                    </div>

                </div>


            </div>



            <!-- =================================================
                 RIGHT COLUMN
            ================================================= -->

            <div>


                <!-- DETAILS -->

                <div class="card details-card">

                    <div class="card-header">

                        <h2>
                            Your Details
                        </h2>

                    </div>


                    <div class="card-body">

                        <form
                            id="checkoutForm"
                            method="GET"
                            action="{{ route('checkout.payment') }}"
                            onsubmit="submitCheckout(event)"
                        >


                            <input
                                type="hidden"
                                name="plan"
                                value="{{ $package['plan'] }}"
                            >


                            <div class="form-group">

                                <label>
                                    Full Name
                                    <span class="required">*</span>
                                </label>

                                <input
                                    type="text"
                                    name="name"
                                    class="input"
                                    placeholder="John Smith"
                                    required
                                >

                            </div>



                            <div class="form-group">

                                <label>
                                    Email Address
                                    <span class="required">*</span>
                                </label>

                                <input
                                    type="email"
                                    name="email"
                                    class="input"
                                    placeholder="john@example.com"
                                    required
                                >

                            </div>



                            <div class="form-group">

                                <label>
                                    Country
                                    <span class="required">*</span>
                                </label>

                                <select
                                    name="country"
                                    class="select"
                                    required
                                >

                                    <option value="">
                                        Select your country
                                    </option>

                                    <option>
                                        United Kingdom
                                    </option>

                                    <option>
                                        United States
                                    </option>

                                    <option>
                                        Canada
                                    </option>

                                    <option>
                                        Australia
                                    </option>

                                    <option>
                                        Bangladesh
                                    </option>

                                    <option>
                                        India
                                    </option>

                                    <option>
                                        Germany
                                    </option>

                                    <option>
                                        Other
                                    </option>

                                </select>

                            </div>



                            <!-- HONEYPOT -->

                            <div class="website-field">

                                <label>
                                    Website (leave this empty)
                                </label>

                                <input
                                    type="text"
                                    name="website"
                                    autocomplete="off"
                                >

                            </div>



                            <button
                                type="submit"
                                class="pay-button"
                                id="payButton"
                            >
                                Pay £{{ number_format($package['price'], 2) }}
                            </button>


                            <div class="payment-note">

                                You'll enter payment securely
                                on the next screen (Stripe).

                            </div>


                            <div class="security">

                                <div class="security-box">

                                    <span class="security-icon">
                                        🔒
                                    </span>

                                    SSL Encrypted

                                </div>


                                <div class="security-box">

                                    <span class="security-icon">
                                        ✓
                                    </span>

                                    Secure Checkout

                                </div>

                            </div>


                            <div class="terms">

                                By proceeding, you agree to our

                                <a href="#">
                                    Terms
                                </a>

                                and

                                <a href="#">
                                    Refund Policy
                                </a>

                            </div>


                        </form>

                    </div>

                </div>



                <!-- WHAT HAPPENS NEXT -->

                <div class="card next-card">

                    <div class="card-header">

                        <h2>
                            What Happens Next?
                        </h2>

                    </div>


                    <div class="card-body">

                        <div class="steps">


                            <div class="step">

                                <div class="step-number">
                                    1
                                </div>

                                <p>
                                    Complete payment securely with Stripe
                                </p>

                            </div>


                            <div class="step">

                                <div class="step-number">
                                    2
                                </div>

                                <p>
                                    Provide your manuscript and project details
                                </p>

                            </div>


                            <div class="step">

                                <div class="step-number">
                                    3
                                </div>

                                <p>
                                    Our publishing team reviews and starts within 24 hours
                                </p>

                            </div>


                            <div class="step">

                                <div class="step-number">
                                    4
                                </div>

                                <p>
                                    Receive your completed package and request revisions
                                </p>

                            </div>


                        </div>

                    </div>

                </div>



                <!-- TESTIMONIAL -->

                <div class="testimonial-card">

                    <div class="stars">
                        ★★★★★
                    </div>

                    <div class="testimonial-quote">

                        “The Complete Publishing Package took care of everything —
                        writing, editing, formatting, and cover. My book is live on
                        Amazon and I couldn't be happier!”

                    </div>


                    <div class="testimonial-author">

                        <div class="avatar">
                            E
                        </div>

                        <div>

                            <div class="author-name">
                                Eleanor Voss
                            </div>

                            <div class="author-book">
                                Author of The Silent Harbor
                            </div>

                        </div>

                    </div>

                </div>


            </div>

        </div>



        <!-- FINAL TOTAL -->

        <div class="bottom-total">

            <div class="bottom-total-label">
                Total
            </div>

            <div
                class="bottom-total-price"
                id="bottomTotal"
            >
                £{{ number_format($package['price'], 2) }}
            </div>

        </div>


    </div>

</section>



<!-- =========================================================
     FOOTER
========================================================= -->

<footer>

    <div class="footer-container">

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
                    10,000+ books brought to market.
                </p>

            </div>


            <div>

                <h3>
                    Services
                </h3>

                <a href="/services/book-writing">
                    Book Writing
                </a>

                <a href="/services/editing">
                    Editing
                </a>

                <a href="/services/book-cover-design">
                    Book Cover Design
                </a>

                <a href="/services/book-formatting">
                    Book Formatting
                </a>

                <a href="/services/book-illustrations">
                    Illustrations
                </a>

            </div>


            <div>

                <h3>
                    Company
                </h3>

                <a href="/about">
                    About
                </a>

                <a href="/portfolio">
                    Portfolio
                </a>

                <a href="/contact">
                    Contact
                </a>

                <a href="/tools">
                    Tools
                </a>

            </div>


            <div>

                <h3>
                    Support
                </h3>

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

const BASE_PRICE = {{ $package['price'] }};

const addonCheckboxes =
    document.querySelectorAll(".addon-checkbox");

const totalPrice =
    document.getElementById("totalPrice");

const bottomTotal =
    document.getElementById("bottomTotal");

const payButton =
    document.getElementById("payButton");


function money(value){
    return "£" + value.toFixed(2);
}


function updateTotal(){

    let total = BASE_PRICE;

    addonCheckboxes.forEach(function(item){

        const isChecked = item.checked;

        const hidden =
            item.closest(".addon")
                .querySelector('input[type="hidden"]');

        if(hidden){
            hidden.value =
                isChecked ? "1" : "";
        }

        if(isChecked){

            total += parseFloat(
                item.dataset.price
            );

        }

    });


    totalPrice.textContent =
        money(total);

    bottomTotal.textContent =
        money(total);

    payButton.textContent =
        "Pay " + money(total);

}


addonCheckboxes.forEach(function(item){

    item.addEventListener(
        "change",
        updateTotal
    );

});


/* =========================================================
   CHECKOUT FORM
========================================================= */

const checkoutForm =
    document.getElementById("checkoutForm");


function submitCheckout(event){

    event.preventDefault();


    /* Honeypot */

    const website =
        checkoutForm.querySelector(
            'input[name="website"]'
        );


    if(website.value.trim() !== ""){

        return;

    }


    if(!checkoutForm.checkValidity()){

        checkoutForm.reportValidity();

        return;

    }


    checkoutForm.submit();

}


/* =========================================================
   ADDON CLICK FEEDBACK
========================================================= */

document
.querySelectorAll(".addon")
.forEach(function(addon){

    addon.addEventListener(
        "click",
        function(event){

            if(
                event.target.tagName !== "INPUT"
            ){

                const checkbox =
                    this.querySelector(
                        ".addon-checkbox"
                    );

                checkbox.checked =
                    !checkbox.checked;

                updateTotal();

            }

        }
    );

});


/* INITIAL TOTAL */

updateTotal();

</script>

</body>
</html>