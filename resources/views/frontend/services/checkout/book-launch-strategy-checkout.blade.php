<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Review & Checkout | HMD Publishing</title>

<style>

/* =====================================================
   RESET
===================================================== */

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
    color:#183c2d;
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


/* =====================================================
   COLORS
===================================================== */

:root{
    --green:#183c2d;
    --dark-green:#10291f;
    --gold:#b4864a;
    --gold-light:#d1a064;

    --cream:#f7f8f6;
    --white:#fff;

    --text:#53635b;
    --muted:#8a958f;

    --border:#dce4df;
    --soft:#eef3ef;
}


/* =====================================================
   CHECKOUT HERO
===================================================== */

.checkout-hero{
    padding:58px 20px 40px;

    background:
        radial-gradient(
            circle at 10% 10%,
            rgba(180,134,74,.08),
            transparent 30%
        ),
        #f7f8f6;

    text-align:center;
}

.breadcrumb{
    margin-bottom:12px;

    font-size:9px;
    color:#8b958f;
}

.breadcrumb span{
    color:var(--gold);
}

.checkout-hero h1{
    font-family:Georgia, "Times New Roman", serif;

    font-size:44px;
    line-height:1.15;

    font-weight:500;

    letter-spacing:-.7px;
}

.checkout-hero p{
    margin:10px auto 0;

    max-width:620px;

    font-size:11px;

    color:#68756e;
}


/* =====================================================
   MAIN CHECKOUT
===================================================== */

.checkout-section{
    padding:20px 20px 75px;
}

.checkout-container{
    max-width:1050px;
    margin:auto;

    display:grid;

    grid-template-columns:
        1.1fr .9fr;

    gap:22px;

    align-items:start;
}


/* =====================================================
   LEFT COLUMN
===================================================== */

.left-column{
    display:flex;
    flex-direction:column;

    gap:16px;
}


/* =====================================================
   CARD
===================================================== */

.card{
    background:#fff;

    border:1px solid var(--border);

    border-radius:9px;

    box-shadow:
        0 5px 20px rgba(20,55,40,.025);
}

.card-header{
    padding:21px 23px;

    border-bottom:1px solid var(--border);
}

.card-header h2{
    font-family:Georgia, "Times New Roman", serif;

    font-size:22px;

    font-weight:500;
}

.card-header p{
    margin-top:4px;

    font-size:9px;

    color:#8a958f;
}

.card-body{
    padding:22px 23px;
}


/* =====================================================
   ORDER SUMMARY
===================================================== */

.order-row{
    display:flex;

    align-items:center;
    justify-content:space-between;

    gap:20px;

    padding:7px 0;
}

.order-name{
    font-size:11px;
    font-weight:700;
}

.order-price{
    font-family:Georgia, "Times New Roman", serif;

    font-size:18px;

    white-space:nowrap;
}

.order-sub{
    font-size:8px;

    color:#8a958f;
}

.divider{
    height:1px;

    margin:12px 0;

    background:var(--border);
}

.total-row{
    display:flex;

    justify-content:space-between;
    align-items:center;

    padding-top:5px;
}

.total-label{
    font-size:10px;
    font-weight:bold;
}

.total-price{
    font-family:Georgia, "Times New Roman", serif;

    font-size:25px;
}

.vat{
    margin-top:4px;

    font-size:8px;

    color:#8a958f;
}


/* =====================================================
   ADDONS
===================================================== */

.addon-title{
    margin-bottom:12px;

    font-size:10px;
    font-weight:bold;

    color:var(--green);
}

.addon{
    position:relative;

    display:flex;

    align-items:center;

    gap:13px;

    padding:14px;

    margin-bottom:9px;

    border:1px solid var(--border);

    border-radius:7px;

    background:#fff;

    cursor:pointer;

    transition:.2s;
}

.addon:hover{
    border-color:#b7c7bd;
    background:#fafcfa;
}

.addon.selected{
    border-color:var(--gold);

    background:#fbfaf7;
}

.addon-checkbox{
    width:18px;
    height:18px;

    accent-color:var(--green);

    flex-shrink:0;
}

.addon-content{
    flex:1;
}

.addon-name{
    font-size:10px;
    font-weight:bold;
}

.addon-description{
    margin-top:2px;

    font-size:8px;

    color:#8a958f;
}

.addon-price{
    font-family:Georgia, "Times New Roman", serif;

    font-size:16px;

    white-space:nowrap;
}


/* =====================================================
   YOUR DETAILS
===================================================== */

.form-grid{
    display:grid;

    grid-template-columns:1fr 1fr;

    gap:14px;
}

.form-group{
    display:flex;
    flex-direction:column;
}

.form-group.full{
    grid-column:1 / -1;
}

.form-group label{
    margin-bottom:6px;

    font-size:9px;
    font-weight:bold;

    color:#3d5147;
}

.form-group label span{
    color:#b64d43;
}

.form-control{
    width:100%;

    min-height:43px;

    padding:0 12px;

    border:1px solid #d4ded8;

    border-radius:5px;

    outline:none;

    background:#fff;

    color:#183c2d;

    font-size:10px;

    transition:.2s;
}

textarea.form-control{
    padding:12px;

    min-height:90px;

    resize:vertical;
}

.form-control:focus{
    border-color:var(--gold);

    box-shadow:
        0 0 0 3px rgba(180,134,74,.08);
}

.form-control::placeholder{
    color:#a0aaa5;
}


/* =====================================================
   WEBSITE HONEYPOT
===================================================== */

.honeypot{
    display:none !important;
}


/* =====================================================
   RIGHT COLUMN
===================================================== */

.right-column{
    position:sticky;
    top:95px;
}


/* =====================================================
   PAYMENT CARD
===================================================== */

.payment-card{
    background:#fff;

    border:1px solid var(--border);

    border-radius:9px;

    overflow:hidden;

    box-shadow:
        0 10px 35px rgba(20,55,40,.07);
}

.payment-top{
    padding:25px;

    background:var(--green);

    color:#fff;
}

.payment-top-small{
    font-size:8px;

    color:#bfcfc6;

    text-transform:uppercase;

    letter-spacing:1.2px;
}

.payment-top h2{
    margin-top:7px;

    font-family:Georgia, "Times New Roman", serif;

    font-size:27px;

    font-weight:500;
}

.payment-price{
    margin-top:8px;

    font-family:Georgia, "Times New Roman", serif;

    font-size:39px;
}

.payment-price-note{
    margin-top:2px;

    font-size:8px;

    color:#bfcfc6;
}

.payment-body{
    padding:22px 24px;
}


/* =====================================================
   PAYMENT BREAKDOWN
===================================================== */

.breakdown{
    margin-bottom:18px;
}

.breakdown-row{
    display:flex;

    align-items:center;
    justify-content:space-between;

    margin:8px 0;

    font-size:9px;

    color:#68756e;
}

.breakdown-row strong{
    color:#183c2d;
}

.breakdown-total{
    padding-top:12px;

    margin-top:12px;

    border-top:1px solid var(--border);

    display:flex;

    align-items:center;
    justify-content:space-between;
}

.breakdown-total span:first-child{
    font-size:10px;
    font-weight:bold;
}

.breakdown-total span:last-child{
    font-family:Georgia, "Times New Roman", serif;

    font-size:24px;
}


/* =====================================================
   PAY BUTTON
===================================================== */

.pay-btn{
    width:100%;

    min-height:50px;

    border:0;

    border-radius:5px;

    background:var(--green);

    color:#fff;

    font-size:10px;

    font-weight:bold;

    cursor:pointer;

    transition:.25s;
}

.pay-btn:hover{
    background:var(--gold);

    transform:translateY(-1px);
}

.pay-note{
    margin-top:10px;

    text-align:center;

    font-size:8px;

    color:#8b958f;

    line-height:1.5;
}


/* =====================================================
   SECURITY
===================================================== */

.security{
    margin-top:17px;

    display:grid;

    grid-template-columns:
        repeat(3,1fr);

    gap:7px;
}

.security-item{
    padding:10px 5px;

    text-align:center;

    border:1px solid var(--border);

    border-radius:5px;

    background:#fafbfa;
}

.security-icon{
    font-size:13px;
}

.security-text{
    margin-top:3px;

    font-size:7px;

    color:#718078;
}


/* =====================================================
   TERMS
===================================================== */

.terms{
    margin-top:16px;

    font-size:8px;

    line-height:1.7;

    text-align:center;

    color:#89938e;
}

.terms a{
    color:var(--green);

    text-decoration:underline;
}


/* =====================================================
   WHAT HAPPENS NEXT
===================================================== */

.next-card{
    margin-top:16px;

    background:#edf3ef;

    border:1px solid #dbe5df;

    border-radius:9px;

    padding:22px 23px;
}

.next-card h3{
    font-family:Georgia, "Times New Roman", serif;

    font-size:21px;

    font-weight:500;
}

.steps{
    margin-top:17px;

    display:flex;

    flex-direction:column;

    gap:13px;
}

.step{
    display:flex;

    gap:11px;

    align-items:flex-start;
}

.step-number{
    width:25px;
    height:25px;

    display:flex;

    align-items:center;
    justify-content:center;

    flex-shrink:0;

    border-radius:50%;

    background:var(--green);

    color:#fff;

    font-family:Georgia, "Times New Roman", serif;

    font-size:10px;
}

.step-text{
    padding-top:3px;

    font-size:8px;

    line-height:1.55;

    color:#65736b;
}

.step-text strong{
    display:block;

    margin-bottom:1px;

    color:#30483c;

    font-size:9px;
}


/* =====================================================
   TRUST STRIP
===================================================== */

.trust{
    max-width:1050px;

    margin:20px auto 0;

    padding:17px 20px;

    background:#fff;

    border:1px solid var(--border);

    border-radius:8px;

    display:flex;

    align-items:center;

    justify-content:center;

    gap:25px;

    flex-wrap:wrap;
}

.trust-item{
    display:flex;

    align-items:center;

    gap:7px;

    font-size:8px;

    color:#68766e;
}

.trust-check{
    width:19px;
    height:19px;

    display:flex;
    align-items:center;
    justify-content:center;

    background:#edf3ef;

    border-radius:50%;

    color:var(--gold);

    font-size:9px;
}


/* =====================================================
   FOOTER
===================================================== */

.footer{
    padding:40px 20px 20px;

    background:#0d241b;

    color:#94a49b;
}

.footer-inner{
    max-width:1050px;

    margin:auto;
}

.footer-main{
    display:flex;

    justify-content:space-between;

    align-items:flex-start;

    gap:30px;
}

.footer-logo{
    font-family:Georgia, "Times New Roman", serif;

    font-size:22px;
    font-weight:bold;

    color:#fff;
}

.footer-logo span{
    color:var(--gold-light);
}

.footer-desc{
    max-width:300px;

    margin-top:7px;

    font-size:8px;

    line-height:1.7;

    color:#788b81;
}

.footer-links{
    display:flex;

    gap:18px;

    font-size:8px;
}

.footer-links a:hover{
    color:#fff;
}

.copyright{
    margin-top:30px;

    padding-top:15px;

    border-top:1px solid rgba(255,255,255,.1);

    text-align:center;

    font-size:7px;

    color:#63766c;
}


/* =====================================================
   RESPONSIVE
===================================================== */

@media(max-width:900px){

    .checkout-container{
        grid-template-columns:1fr;
    }

    .right-column{
        position:static;
    }

}


@media(max-width:650px){

    .checkout-hero{
        padding:45px 16px 30px;
    }

    .checkout-hero h1{
        font-size:34px;
    }

    .checkout-section{
        padding:15px 12px 55px;
    }

    .card-header,
    .card-body{
        padding:18px;
    }

    .form-grid{
        grid-template-columns:1fr;
    }

    .form-group.full{
        grid-column:auto;
    }

    .security{
        grid-template-columns:1fr;
    }

    .footer-main{
        flex-direction:column;
    }

    .footer-links{
        flex-wrap:wrap;
    }

}

</style>
</head>


<body>


@include('frontend.partials.navbar')


<!-- =====================================================
     PAGE TITLE
===================================================== -->

<section class="checkout-hero">

    <div class="breadcrumb">
        Home / Services / <span>Launch Strategy</span> / Checkout
    </div>

    <h1>
        Review & Checkout
    </h1>

    <p>
        Review your order and proceed to secure payment
    </p>

</section>


<!-- =====================================================
     CHECKOUT
===================================================== -->

<section class="checkout-section">

    <div class="checkout-container">


        <!-- =================================================
             LEFT
        ================================================== -->

        <div class="left-column">


            <!-- ORDER SUMMARY -->

            <div class="card">

                <div class="card-header">

                    <h2>
                        Order Summary
                    </h2>

                    <p>
                        Your selected launch strategy package
                    </p>

                </div>


                <div class="card-body">

                    <div class="order-row">

                        <div>

                            <div class="order-name">
                                {{ $package['name'] }}
                            </div>

                            <div class="order-sub">
                                @if($packageKey === 'blueprint')
                                    Strategy document
                                @elseif($packageKey === 'bestseller')
                                    Done-for-you
                                @else
                                    Full support
                                @endif
                            </div>

                        </div>

                        <div class="order-price">
                            £{{ number_format($package['price'], 2) }}
                        </div>

                    </div>


                    <div class="divider"></div>


                    <div class="total-row">

                        <div class="total-label">
                            Total
                        </div>

                        <div class="total-price"
                             id="summaryTotal">
                            £{{ number_format($package['price'], 2) }}
                        </div>

                    </div>

                    <div class="vat">
                        No VAT applicable
                    </div>

                </div>

            </div>


            <!-- ADDONS -->

            @php
                $addonModels = \App\Models\Addon::where('service', 'Launch Strategy')
                    ->where('is_active', true)
                    ->orderBy('sort_order')
                    ->get();
            @endphp

            <div class="card">

                <div class="card-header">

                    <h2>
                        Enhance Your Order
                    </h2>

                    <p>
                        Optional add-ons to get more from your book launch strategy
                    </p>

                </div>


                <div class="card-body">


                    @forelse ($addonModels as $addon)

                        <div class="addon"
                             data-price="{{ $addon->price }}">

                            <input
                                type="checkbox"
                                class="addon-checkbox"
                                id="addon_{{ $addon->key }}"
                                data-key="{{ $addon->key }}">

                            <input
                                type="hidden"
                                form="checkoutForm"
                                name="addon[{{ $addon->key }}]"
                                value="">

                            <div class="addon-content">

                                <div class="addon-name">
                                    {{ $addon->name }}
                                </div>

                                <div class="addon-description">
                                    {{ $addon->description }}
                                </div>

                            </div>

                            <div class="addon-price">
                                +£{{ number_format($addon->price) }}
                            </div>

                        </div>

                    @empty

                        <p style="font-size:10px; color:#8a958f;">
                            No add-ons available at the moment.
                        </p>

                    @endforelse


                </div>

            </div>


            <!-- YOUR DETAILS -->

            <div class="card">

                <div class="card-header">

                    <h2>
                        Your Details
                    </h2>

                    <p>
                        Enter your information to continue
                    </p>

                </div>


                <div class="card-body">

                    <form
                        id="checkoutForm"
                        method="GET"
                        action="{{ route('checkout.payment') }}"
                        onsubmit="submitCheckout(event)">

                        <input
                            type="hidden"
                            name="plan"
                            value="{{ $package['plan'] }}">


                        <div class="form-grid">


                            <!-- FULL NAME -->

                            <div class="form-group">

                                <label>
                                    Full Name <span>*</span>
                                </label>

                                <input
                                    type="text"
                                    name="name"
                                    class="form-control"
                                    placeholder="John Smith"
                                    required>

                            </div>


                            <!-- EMAIL -->

                            <div class="form-group">

                                <label>
                                    Email Address <span>*</span>
                                </label>

                                <input
                                    type="email"
                                    name="email"
                                    class="form-control"
                                    placeholder="john@example.com"
                                    required>

                            </div>


                            <!-- COUNTRY -->

                            <div class="form-group">

                                <label>
                                    Country <span>*</span>
                                </label>

                                <select
                                    name="country"
                                    class="form-control"
                                    required>

                                    <option value="">
                                        Select
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
                                        Other
                                    </option>

                                </select>

                            </div>


                            <!-- WEBSITE -->

                            <div class="form-group">

                                <label>
                                    Website
                                </label>

                                <input
                                    type="url"
                                    name="website"
                                    class="form-control"
                                    placeholder="">

                            </div>


                            <!-- HONEYPOT -->

                            <div class="form-group honeypot">

                                <label>
                                    Website
                                </label>

                                <input type="text" name="website_hp" autocomplete="off">

                            </div>


                        </div>


                    </form>

                </div>

            </div>


        </div>


        <!-- =================================================
             RIGHT
        ================================================== -->

        <aside class="right-column">


            <!-- PAYMENT CARD -->

            <div class="payment-card">


                <div class="payment-top">

                    <div class="payment-top-small">
                        Secure checkout
                    </div>

                    <h2>
                        {{ $package['name'] }}
                    </h2>

                    <div class="payment-price"
                         id="paymentPrice">

                        £{{ number_format($package['price'], 2) }}

                    </div>

                    <div class="payment-price-note">
                        One-time payment
                    </div>

                </div>


                <div class="payment-body">


                    <div class="breakdown">


                        <div class="breakdown-row">

                            <span>
                                {{ $package['name'] }}
                            </span>

                            <strong>
                                £{{ number_format($package['price'], 2) }}
                            </strong>

                        </div>


                        @foreach ($addonModels as $addon)

                            <div class="breakdown-row addon-row"
                                 id="row_{{ $addon->key }}"
                                 data-price="{{ $addon->price }}"
                                 style="display:none;">

                                <span>
                                    {{ $addon->name }}
                                </span>

                                <strong>
                                    £{{ number_format($addon->price) }}
                                </strong>

                            </div>

                        @endforeach


                        <div class="breakdown-total">

                            <span>
                                Total
                            </span>

                            <span id="sideTotal">
                                £{{ number_format($package['price'], 2) }}
                            </span>

                        </div>


                    </div>


                    <button
                        type="submit"
                        form="checkoutForm"
                        class="pay-btn"
                        id="payButton">

                        Pay £{{ number_format($package['price'], 2) }}

                    </button>


                    <div class="pay-note">

                        You'll enter payment securely on the next screen (Stripe).

                    </div>


                    <!-- SECURITY -->

                    <div class="security">


                        <div class="security-item">

                            <div class="security-icon">
                                🔒
                            </div>

                            <div class="security-text">
                                Secure Checkout
                            </div>

                        </div>


                        <div class="security-item">

                            <div class="security-icon">
                                ✓
                            </div>

                            <div class="security-text">
                                SSL Encrypted
                            </div>

                        </div>


                        <div class="security-item">

                            <div class="security-icon">
                                ★
                            </div>

                            <div class="security-text">
                                4.9/5 Reviews
                            </div>

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


                </div>

            </div>


            <!-- WHAT HAPPENS NEXT -->

            <div class="next-card">

                <h3>
                    What Happens Next?
                </h3>


                <div class="steps">


                    <div class="step">

                        <div class="step-number">
                            1
                        </div>

                        <div class="step-text">

                            <strong>
                                Complete payment securely with Stripe
                            </strong>

                        </div>

                    </div>


                    <div class="step">

                        <div class="step-number">
                            2
                        </div>

                        <div class="step-text">

                            <strong>
                                Provide your project details
                            </strong>

                            Any required files and information will be collected.

                        </div>

                    </div>


                    <div class="step">

                        <div class="step-number">
                            3
                        </div>

                        <div class="step-text">

                            <strong>
                                Our team reviews your project
                            </strong>

                            Work starts within 24 hours.

                        </div>

                    </div>


                    <div class="step">

                        <div class="step-number">
                            4
                        </div>

                        <div class="step-text">

                            <strong>
                                Receive your completed work
                            </strong>

                            Request revisions as needed.

                        </div>

                    </div>


                </div>

            </div>


        </aside>


    </div>


    <!-- TRUST -->

    <div class="trust">

        <div class="trust-item">

            <div class="trust-check">
                ✓
            </div>

            10,000+ books brought to market

        </div>


        <div class="trust-item">

            <div class="trust-check">
                ✓
            </div>

            4.7/5 Trustpilot rating

        </div>


        <div class="trust-item">

            <div class="trust-check">
                ✓
            </div>

            Secure Stripe checkout

        </div>


        <div class="trust-item">

            <div class="trust-check">
                ✓
            </div>

            Dedicated support

        </div>

    </div>

</section>


<!-- =====================================================
     FOOTER
===================================================== -->

<footer class="footer">

    <div class="footer-inner">


        <div class="footer-main">


            <div>

                <div class="footer-logo">
                    HMD<span>Publishing</span>
                </div>

                <div class="footer-desc">

                    Professional publishing services for
                    independent authors worldwide.

                </div>

            </div>


            <div class="footer-links">

                <a href="{{ route('services.bookLaunchStrategy') }}">
                    Launch Strategy
                </a>

                <a href="#">
                    Refund Policy
                </a>

                <a href="#">
                    Privacy
                </a>

                <a href="/contact">
                    Contact
                </a>

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

const BASE_PRICE = {{ $package['price'] }};

const summaryTotal =
    document.getElementById("summaryTotal");

const sideTotal =
    document.getElementById("sideTotal");

const paymentPrice =
    document.getElementById("paymentPrice");

const payButton =
    document.getElementById("payButton");

const addonCheckboxes =
    document.querySelectorAll(".addon-checkbox");


function money(value){
    return "£" + value.toFixed(2);
}


function updateTotal(){

    let total = BASE_PRICE;

    addonCheckboxes.forEach(function(item){

        const isChecked = item.checked;

        const key = item.dataset.key;

        const hidden = item
            .closest(".addon")
            .querySelector('input[type="hidden"]');

        const row =
            document.getElementById("row_" + key);

        const addon =
            item.closest(".addon");

        if(hidden){
            hidden.value =
                isChecked ? "1" : "";
        }

        if(isChecked){

            total += parseFloat(
                item.closest(".addon").dataset.price
            );

            if(row){
                row.style.display = "flex";
            }

            if(addon){
                addon.classList.add("selected");
            }

        }else{

            if(row){
                row.style.display = "none";
            }

            if(addon){
                addon.classList.remove("selected");
            }

        }

    });

    summaryTotal.textContent =
        money(total);

    sideTotal.textContent =
        money(total);

    paymentPrice.textContent =
        money(total);

    payButton.textContent =
        "Pay " + money(total);

}


/* =====================================================
   CHECKBOX EVENTS
===================================================== */

addonCheckboxes.forEach(function(item){

    item.addEventListener(
        "change",
        updateTotal
    );

});


/* =====================================================
   ADDON CARD CLICK
===================================================== */

document.querySelectorAll(".addon")
.forEach(function(addon){

    addon.addEventListener(
        "click",
        function(event){

            if(
                event.target.tagName !== "INPUT"
            ){

                const checkbox =
                    addon.querySelector(
                        ".addon-checkbox"
                    );

                checkbox.checked =
                    !checkbox.checked;

                checkbox.dispatchEvent(
                    new Event("change")
                );

            }

        }
    );

});


/* =====================================================
   CHECKOUT FORM
===================================================== */

const checkoutForm =
    document.getElementById("checkoutForm");


function submitCheckout(event){

    const websiteHp =
        checkoutForm.querySelector(
            'input[name="website_hp"]'
        );

    if(websiteHp && websiteHp.value.trim() !== ""){

        event.preventDefault();

        return;

    }

    if(!checkoutForm.checkValidity()){

        event.preventDefault();

        checkoutForm.reportValidity();

        return;

    }

    updateTotal();

}


/* INITIAL TOTAL */

updateTotal();

</script>

</body>
</html>