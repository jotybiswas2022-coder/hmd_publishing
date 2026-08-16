<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Review & Checkout - HMD Publishing</title>

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
    background:#f7f8f6;
    color:#18382b;
    line-height:1.5;
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


/* =========================================
   MAIN
========================================= */

.checkout-section{
    padding:55px 0 90px;
}

.page-title{
    text-align:center;
    margin-bottom:40px;
}

.page-title h1{
    font-family:Georgia,serif;
    font-size:46px;
    line-height:1.1;
    color:#173d2d;
    margin-bottom:12px;
}

.page-title p{
    color:#66726c;
    font-size:16px;
}


/* =========================================
   CHECKOUT GRID
========================================= */

.checkout-grid{
    display:grid;
    grid-template-columns:1.35fr .85fr;
    gap:25px;
    align-items:start;
}


/* =========================================
   CARD
========================================= */

.card{
    background:#fff;
    border:1px solid #e1e7e2;
    border-radius:13px;
    box-shadow:0 8px 30px rgba(26,57,42,.05);
}

.card-header{
    padding:23px 27px;
    border-bottom:1px solid #e8ece8;
}

.card-header h2{
    font-family:Georgia,serif;
    font-size:24px;
    color:#183d2e;
}

.card-header p{
    color:#748079;
    font-size:13px;
    margin-top:3px;
}

.card-body{
    padding:27px;
}


/* =========================================
   ORDER SUMMARY
========================================= */

.order-summary{
    position:sticky;
    top:105px;
}

.summary-product{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding-bottom:18px;
    border-bottom:1px solid #e9ede9;
}

.product-name{
    font-family:Georgia,serif;
    font-size:18px;
    font-weight:bold;
    color:#1b3e30;
}

.product-type{
    font-size:12px;
    color:#7a847f;
    margin-top:3px;
}

.product-price{
    font-weight:bold;
    font-size:17px;
}

.summary-row{
    display:flex;
    justify-content:space-between;
    padding:12px 0;
    color:#5f6b65;
    font-size:14px;
}

.summary-row.total{
    border-top:1px solid #dfe5df;
    margin-top:5px;
    padding-top:17px;
    color:#173d2d;
    font-weight:800;
    font-size:19px;
}


/* =========================================
   ADDONS
========================================= */

.addons-title{
    font-family:Georgia,serif;
    font-size:23px;
    margin-bottom:4px;
}

.addons-sub{
    font-size:13px;
    color:#748079;
    margin-bottom:20px;
}

.addon{
    border:1px solid #dfe5e0;
    border-radius:9px;
    padding:15px;
    margin-bottom:10px;
    display:flex;
    align-items:flex-start;
    gap:12px;
    cursor:pointer;
    transition:.2s;
}

.addon:hover{
    border-color:#86a694;
    background:#fafcfb;
}

.addon.active{
    border-color:#27563f;
    background:#f3f8f4;
}

.addon input[type="checkbox"]{
    width:17px;
    height:17px;
    margin-top:3px;
    accent-color:#214e39;
}

.addon-content{
    flex:1;
}

.addon-top{
    display:flex;
    justify-content:space-between;
    gap:15px;
    font-weight:700;
    font-size:14px;
    color:#263e33;
}

.addon-price{
    color:#a87531;
    white-space:nowrap;
}

.addon-description{
    font-size:12px;
    color:#78827d;
    margin-top:3px;
}


/* =========================================
   YOUR DETAILS
========================================= */

.details-title{
    font-family:Georgia,serif;
    font-size:24px;
    margin-bottom:20px;
}

.form-group{
    margin-bottom:19px;
}

.form-group label{
    display:block;
    font-size:13px;
    font-weight:700;
    color:#32443b;
    margin-bottom:7px;
}

.form-group input,
.form-group select{
    width:100%;
    height:48px;
    border:1px solid #d6ded8;
    border-radius:7px;
    padding:0 14px;
    background:#fff;
    outline:none;
    color:#263a31;
}

.form-group input:focus,
.form-group select:focus{
    border-color:#507b64;
    box-shadow:0 0 0 3px rgba(55,105,78,.08);
}

.required{
    color:#a84b3c;
}


/* honeypot */

.website-field{
    display:none !important;
}


/* =========================================
   PAYMENT BUTTON
========================================= */

.pay-button{
    width:100%;
    border:0;
    background:#173f2e;
    color:#fff;
    padding:16px 20px;
    border-radius:7px;
    cursor:pointer;
    font-weight:800;
    font-size:15px;
    transition:.25s;
}

.pay-button:hover{
    background:#b47e34;
    transform:translateY(-1px);
}

.payment-note{
    text-align:center;
    font-size:11px;
    color:#7b8580;
    margin-top:11px;
}


/* =========================================
   SECURITY
========================================= */

.security{
    margin-top:18px;
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:10px;
}

.security-box{
    border:1px solid #e0e6e1;
    border-radius:7px;
    padding:13px;
    text-align:center;
    font-size:12px;
    color:#66726c;
    background:#fafbfa;
}

.security-icon{
    font-size:18px;
    display:block;
    margin-bottom:3px;
}


/* =========================================
   TERMS
========================================= */

.terms{
    margin-top:18px;
    color:#7a847f;
    font-size:11px;
    line-height:1.6;
    text-align:center;
}

.terms a{
    color:#385f4b;
    text-decoration:underline;
}


/* =========================================
   WHAT HAPPENS NEXT
========================================= */

.next-section{
    margin-top:25px;
}

.next-title{
    font-family:Georgia,serif;
    font-size:24px;
    margin-bottom:22px;
}

.steps{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:15px;
}

.step{
    border:1px solid #e1e7e2;
    background:#fff;
    border-radius:10px;
    padding:20px;
}

.step-number{
    width:35px;
    height:35px;
    border-radius:50%;
    background:#173f2e;
    color:#fff;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:13px;
    font-weight:bold;
    margin-bottom:13px;
}

.step h3{
    font-family:Georgia,serif;
    font-size:17px;
    color:#1d3d30;
    margin-bottom:6px;
}

.step p{
    font-size:12px;
    color:#707b75;
}


/* =========================================
   TRUST SECTION
========================================= */

.trust-card{
    margin-top:25px;
    background:#173f2e;
    color:#fff;
    border-radius:13px;
    padding:28px;
    text-align:center;
}

.trust-stars{
    color:#d2a05a;
    letter-spacing:2px;
    margin-bottom:7px;
}

.trust-score{
    font-size:14px;
    color:#d3ded8;
    margin-bottom:20px;
}

.review{
    font-family:Georgia,serif;
    font-size:17px;
    line-height:1.6;
    max-width:650px;
    margin:auto;
}

.review-author{
    margin-top:16px;
    font-size:13px;
    color:#bdcac3;
}

.review-author strong{
    color:#fff;
}


/* =========================================
   FOOTER
========================================= */

footer{
    background:#102d22;
    color:#aebbb4;
    padding:40px 0 22px;
}

.footer-grid{
    display:grid;
    grid-template-columns:1.5fr 1fr 1fr 1fr;
    gap:35px;
}

.footer-logo{
    font-family:Georgia,serif;
    color:#fff;
    font-size:24px;
    font-weight:bold;
}

.footer-logo span{
    color:#bd873b;
}

footer h4{
    color:#fff;
    margin-bottom:12px;
}

footer a,
footer p{
    font-size:13px;
    margin:7px 0;
    display:block;
}

footer a:hover{
    color:#fff;
}

.copyright{
    margin-top:30px;
    padding-top:18px;
    border-top:1px solid rgba(255,255,255,.1);
    text-align:center;
    font-size:11px;
}


/* =========================================
   TOAST
========================================= */

.toast{
    position:fixed;
    right:25px;
    bottom:25px;
    background:#173f2e;
    color:#fff;
    padding:15px 20px;
    border-radius:8px;
    box-shadow:0 10px 30px rgba(0,0,0,.2);
    font-size:13px;
    transform:translateY(100px);
    opacity:0;
    transition:.3s;
    z-index:9999;
}

.toast.show{
    transform:translateY(0);
    opacity:1;
}


/* =========================================
   RESPONSIVE
========================================= */

@media(max-width:900px){

    .checkout-grid{
        grid-template-columns:1fr;
    }

    .order-summary{
        position:static;
    }

    .steps{
        grid-template-columns:1fr 1fr;
    }

    .footer-grid{
        grid-template-columns:1fr 1fr;
    }

}

@media(max-width:700px){

    .checkout-section{
        padding:40px 0 60px;
    }

    .page-title h1{
        font-size:37px;
    }

    .card-body{
        padding:20px;
    }

    .card-header{
        padding:20px;
    }

    .steps{
        grid-template-columns:1fr;
    }

    .footer-grid{
        grid-template-columns:1fr;
    }

}

@media(max-width:450px){

    .container{
        width:calc(100% - 26px);
    }

    .page-title h1{
        font-size:32px;
    }

    .addon-top{
        flex-direction:column;
        gap:3px;
    }

    .security{
        grid-template-columns:1fr;
    }

}
</style>
</head>


<body>


@include('frontend.partials.navbar')



<!-- =========================================
     CHECKOUT
========================================= -->

<main class="checkout-section">

    <div class="container">

        <div class="page-title">

            <h1>
                Review & Checkout
            </h1>

            <p>
                Review your order and proceed to secure payment
            </p>

        </div>



        <div class="checkout-grid">


            <!-- =================================
                 LEFT COLUMN
            ================================== -->

            <div>


                <!-- ORDER SUMMARY -->

                <div class="card">

                    <div class="card-header">

                        <h2>
                            Order Summary
                        </h2>

                    </div>

                    <div class="card-body">

                        <div class="summary-product">

                            <div>

                                <div class="product-name">
                                    {{ $package['name'] }}
                                </div>

                                <div class="product-type">
                                    Book Formatting
                                </div>

                            </div>

                            <div class="product-price">
                                £{{ $package['price'] }}
                            </div>

                        </div>


                        <div class="summary-row">

                            <span>
                                Subtotal
                            </span>

                            <strong id="subtotal">
                                £{{ $package['price'] }}.00
                            </strong>

                        </div>


                        <div class="summary-row total">

                            <span>
                                Total
                            </span>

                            <strong id="total">
                                £{{ $package['price'] }}.00
                            </strong>

                        </div>


                    </div>

                </div>



                <!-- ADDONS -->

                <div class="card" style="margin-top:20px;">

                    <div class="card-body">

                        <h2 class="addons-title">
                            Enhance Your Order
                        </h2>

                        <p class="addons-sub">
                            Optional add-ons to get more from your book formatting
                        </p>


                        @php
                            $addonModels = \App\Models\Addon::where('service', 'Book Formatting')
                                ->where('is_active', true)
                                ->orderBy('sort_order')
                                ->get();
                        @endphp


                        @forelse ($addonModels as $addon)

                            <label class="addon">

                                <input
                                    type="checkbox"
                                    class="addon-check"
                                    data-price="{{ $addon->price }}"
                                    data-key="{{ $addon->key }}"
                                >

                                <input
                                    type="hidden"
                                    form="checkoutForm"
                                    name="addon[{{ $addon->key }}]"
                                    value=""
                                >

                                <div class="addon-content">

                                    <div class="addon-top">

                                        <span>
                                            {{ $addon->name }}
                                        </span>

                                        <span class="addon-price">
                                            +£{{ $addon->price }}
                                        </span>

                                    </div>

                                    <div class="addon-description">
                                        {{ $addon->description }}
                                    </div>

                                </div>

                            </label>

                        @empty

                            <p style="font-size:10px; color:#8a938e;">
                                No add-ons available at the moment.
                            </p>

                        @endforelse

                    </div>

                </div>



                <!-- WHAT HAPPENS NEXT -->

                <div class="next-section">

                    <div class="card">

                        <div class="card-body">

                            <h2 class="next-title">
                                What Happens Next?
                            </h2>


                            <div class="steps">


                                <div class="step">

                                    <div class="step-number">
                                        1
                                    </div>

                                    <h3>
                                        Complete payment
                                    </h3>

                                    <p>
                                        Complete payment securely with Stripe.
                                    </p>

                                </div>


                                <div class="step">

                                    <div class="step-number">
                                        2
                                    </div>

                                    <h3>
                                        Provide project details
                                    </h3>

                                    <p>
                                        Provide your project details and required files.
                                    </p>

                                </div>


                                <div class="step">

                                    <div class="step-number">
                                        3
                                    </div>

                                    <h3>
                                        We review
                                    </h3>

                                    <p>
                                        Our team will review and start work within 24 hours.
                                    </p>

                                </div>


                                <div class="step">

                                    <div class="step-number">
                                        4
                                    </div>

                                    <h3>
                                        Receive your work
                                    </h3>

                                    <p>
                                        Receive your completed work and request revisions.
                                    </p>

                                </div>


                            </div>

                        </div>

                    </div>


                    <!-- TRUST -->

                    <div class="trust-card">

                        <div class="trust-stars">
                            ★★★★★
                        </div>

                        <div class="trust-score">
                            4.9/5 from 500+ reviews
                        </div>

                        <div class="review">

                            "HMD Publishing transformed my manuscript.
                            The formatting was flawless and the turnaround
                            was incredibly fast!"

                        </div>

                        <div class="review-author">

                            <strong>
                                Jaclyn Bales
                            </strong>

                            <br>

                            Author of Plain Jane

                        </div>

                    </div>

                </div>

            </div>



            <!-- =================================
                 RIGHT COLUMN
            ================================== -->

            <aside class="order-summary">

                <div class="card">

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

                            <input type="hidden" name="plan" value="{{ $package['plan'] }}">

                            <div class="form-group">

                                <label>
                                    Full Name
                                    <span class="required">*</span>
                                </label>

                                <input
                                    type="text"
                                    name="name"
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
                                    placeholder="john@example.com"
                                    required
                                >

                            </div>


                            <div class="form-group">

                                <label>
                                    Country
                                    <span class="required">*</span>
                                </label>

                                <select name="country" required>

                                    <option value="">
                                        Select country
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
                                        France
                                    </option>

                                    <option>
                                        Other
                                    </option>

                                </select>

                            </div>


                            <p style="
                                font-size:11px;
                                color:#7b8580;
                                margin-top:-7px;
                                margin-bottom:20px;
                            ">
                                No additional taxes or fees will be added at checkout
                            </p>


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
                                Pay £{{ $package['price'] }}
                            </button>


                            <div class="payment-note">
                                You'll enter payment securely on the next screen (Stripe).
                            </div>


                            <div class="security">

                                <div class="security-box">

                                    <span class="security-icon">
                                        🔒
                                    </span>

                                    Secure Checkout

                                </div>


                                <div class="security-box">

                                    <span class="security-icon">
                                        ✓
                                    </span>

                                    SSL Encrypted

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

            </aside>


        </div>

    </div>

</main>



<!-- =========================================
     FOOTER
========================================= -->

<footer>

    <div class="container">

        <div class="footer-grid">


            <div>

                <div class="footer-logo">
                    HMD<span>Publishing</span>
                </div>

                <p>
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

                <a href="/services/editing">
                    Editing Services
                </a>

                <a href="/services/book-cover-design">
                    Book Cover Design
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


<!-- TOAST -->

<div class="toast" id="toast">
    Demo checkout — connect Stripe to process payment.
</div>


<script>

/* =========================================
   PRICES
========================================= */

const basePrice = {{ $package['price'] }};

const checks =
    document.querySelectorAll(".addon-check");

const totalElement =
    document.getElementById("total");

const subtotalElement =
    document.getElementById("subtotal");

const payButton =
    document.getElementById("payButton");


/* =========================================
   UPDATE TOTAL
========================================= */

function money(value){
    return "£" + value.toFixed(2);
}

function updateTotal(){

    let addons = 0;

    checks.forEach(check => {

        const isChecked = check.checked;

        check.closest(".addon")
            .classList.toggle("active", isChecked);

        check.closest(".addon")
            .querySelector('input[type="hidden"]').value =
                isChecked ? "1" : "";

        if(isChecked){
            addons += parseFloat(check.dataset.price);
        }

    });


    const total = basePrice + addons;


    subtotalElement.textContent = money(total);

    totalElement.textContent =
        money(total);

    payButton.textContent =
        "Pay " + money(total);

}


/* =========================================
   ADDON EVENTS
========================================= */

checks.forEach(check => {

    check.addEventListener(
        "change",
        updateTotal
    );

});


/* =========================================
   FORM
========================================= */

const form =
    document.getElementById("checkoutForm");


function submitCheckout(event) {

    event.preventDefault();

    const honeypot =
        form.querySelector('input[name="website"]');

    if(honeypot && honeypot.value !== ""){

        return;

    }

    form.submit();

}


/* =========================================
   INITIAL CALCULATION
========================================= */

updateTotal();

</script>


</body>
</html>