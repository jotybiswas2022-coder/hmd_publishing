<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Checkout - Children's Book Formatting | HMD Publishing</title>

<style>

/* =========================
   RESET
========================= */

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

html{
    scroll-behavior:smooth;
}

body{
    font-family:
        Inter,
        -apple-system,
        BlinkMacSystemFont,
        "Segoe UI",
        Arial,
        sans-serif;

    background:#f7f8f6;
    color:#193c2d;
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


/* =========================
   CHECKOUT WRAPPER
========================= */

.checkout-wrapper{
    max-width:1120px;
    margin:0 auto;

    padding:54px 20px 80px;
}


/* =========================
   TRUSTPILOT
========================= */

.trustpilot{
    display:flex;
    align-items:center;
    justify-content:center;
    gap:9px;

    margin-bottom:28px;

    font-size:13px;
    color:#66736c;
}

.trust-stars{
    color:#00b67a;
    font-size:18px;
    letter-spacing:1px;
}

.trust-score{
    font-weight:700;
    color:#2c4438;
}

.trust-reviews{
    color:#7d8782;
}


/* =========================
   MAIN TITLE
========================= */

.checkout-heading{
    text-align:center;
    margin-bottom:38px;
}

.checkout-heading h1{
    font-family:Georgia,serif;

    font-size:
        clamp(34px,4vw,48px);

    color:#183d2d;

    line-height:1.1;

    letter-spacing:-1.5px;

    margin-bottom:9px;
}

.checkout-heading p{
    color:#68756e;
    font-size:15px;
}


/* =========================
   CHECKOUT GRID
========================= */

.checkout-grid{
    display:grid;

    grid-template-columns:
        minmax(0,1fr)
        360px;

    gap:28px;

    align-items:start;
}


/* =========================
   CARDS
========================= */

.card{
    background:#fff;

    border:1px solid #dfe6e1;

    border-radius:12px;

    box-shadow:
        0 8px 30px rgba(25,60,45,.045);
}


/* =========================
   ORDER SUMMARY
========================= */

.order-card{
    padding:27px;
}

.card-title{
    font-family:Georgia,serif;

    font-size:23px;

    color:#183d2d;

    margin-bottom:22px;
}


/* PACKAGE */

.package-box{
    border:1px solid #dfe6e1;
    border-radius:9px;

    padding:18px;

    background:#fbfcfb;
}

.package-top{
    display:flex;
    align-items:flex-start;
    justify-content:space-between;

    gap:20px;
}

.package-name{
    font-size:17px;
    font-weight:750;
    color:#1d4031;
}

.package-price{
    font-size:21px;
    font-weight:800;
    color:#1d4031;
    white-space:nowrap;
}

.package-subtitle{
    color:#7a857f;
    font-size:12px;
    margin-top:3px;
}


/* TOTAL */

.total-row{
    display:flex;
    align-items:center;
    justify-content:space-between;

    margin-top:22px;
    padding-top:18px;

    border-top:1px solid #e4e9e5;
}

.total-label{
    font-weight:700;
    color:#31483d;
}

.total-price{
    font-size:22px;
    font-weight:800;
    color:#173d2d;
}

.vat-note{
    text-align:right;
    font-size:11px;
    color:#8a938e;
    margin-top:5px;
}


/* =========================
   ADDONS
========================= */

.addons{
    margin-top:32px;
}

.addons-title{
    font-family:Georgia,serif;
    font-size:21px;
    color:#183d2d;

    margin-bottom:6px;
}

.addons-subtitle{
    color:#7a857f;
    font-size:12px;

    margin-bottom:16px;
}

.addon{
    display:flex;

    align-items:center;
    justify-content:space-between;

    gap:15px;

    border:1px solid #dfe6e1;

    border-radius:9px;

    padding:15px 16px;

    margin-bottom:10px;

    cursor:pointer;

    transition:.2s;
}

.addon:hover{
    border-color:#aebdb3;
    background:#fbfcfb;
}

.addon-left{
    display:flex;
    align-items:center;
    gap:12px;
}

.addon-checkbox{
    width:18px;
    height:18px;

    accent-color:#173f2e;

    cursor:pointer;
}

.addon-name{
    font-size:13px;
    font-weight:700;
    color:#31483d;
}

.addon-description{
    font-size:11px;
    color:#89928d;
    margin-top:2px;
}

.addon-price{
    font-size:13px;
    font-weight:800;
    color:#a97531;
    white-space:nowrap;
}


/* =========================
   CUSTOMER DETAILS
========================= */

.details-card{
    padding:27px;
}

.details-card h2{
    font-family:Georgia,serif;

    font-size:23px;

    color:#183d2d;

    margin-bottom:20px;
}

.form-group{
    margin-bottom:16px;
}

.form-group label{
    display:block;

    font-size:12px;

    font-weight:700;

    color:#354b40;

    margin-bottom:7px;
}

.required{
    color:#a64040;
}

input,
select{
    width:100%;

    height:47px;

    border:1px solid #d6dfd9;

    background:#fff;

    border-radius:7px;

    padding:0 13px;

    outline:none;

    color:#30463b;

    font-size:13px;

    transition:.2s;
}

input::placeholder{
    color:#9aa39e;
}

input:focus,
select:focus{
    border-color:#648570;

    box-shadow:
        0 0 0 3px rgba(65,105,80,.08);
}


/* HIDDEN WEBSITE FIELD */

.website-field{
    position:absolute;

    left:-9999px;

    opacity:0;

    pointer-events:none;
}


/* =========================
   PAYMENT CARD
========================= */

.payment-card{
    padding:22px;

    margin-top:20px;

    background:#f5f8f5;

    border:1px solid #dce5de;

    border-radius:10px;
}

.payment-title{
    font-weight:800;
    font-size:13px;

    color:#274538;

    margin-bottom:7px;
}

.payment-text{
    color:#77837c;
    font-size:11px;
    line-height:1.6;
}


/* =========================
   PAY BUTTON
========================= */

.pay-button{
    width:100%;

    height:51px;

    margin-top:20px;

    border:none;

    border-radius:7px;

    background:#173f2e;

    color:#fff;

    font-size:14px;

    font-weight:800;

    cursor:pointer;

    transition:.25s;
}

.pay-button:hover{
    background:#a97834;

    transform:translateY(-1px);

    box-shadow:
        0 9px 22px rgba(25,60,45,.14);
}

.pay-button:active{
    transform:translateY(0);
}


/* =========================
   SECURITY
========================= */

.security-row{
    display:flex;

    align-items:center;
    justify-content:center;

    gap:20px;

    margin-top:14px;

    color:#75817a;

    font-size:10px;
}

.security-item{
    display:flex;
    align-items:center;
    gap:5px;
}


/* =========================
   TERMS
========================= */

.terms{
    font-size:10px;

    color:#818b86;

    text-align:center;

    margin-top:15px;

    line-height:1.6;
}

.terms a{
    color:#486756;

    text-decoration:underline;
}


/* =========================
   WHAT HAPPENS NEXT
========================= */

.next-card{
    margin-top:28px;

    padding:27px;
}

.next-card h2{
    font-family:Georgia,serif;

    font-size:23px;

    color:#183d2d;

    margin-bottom:20px;
}

.steps{
    display:flex;

    flex-direction:column;

    gap:17px;
}

.step{
    display:flex;

    align-items:flex-start;

    gap:13px;
}

.step-number{
    flex:0 0 30px;

    width:30px;
    height:30px;

    border-radius:50%;

    background:#e9f0eb;

    color:#244936;

    display:flex;

    align-items:center;
    justify-content:center;

    font-size:11px;

    font-weight:800;
}

.step-content strong{
    display:block;

    color:#30483c;

    font-size:13px;

    margin-bottom:2px;
}

.step-content span{
    display:block;

    color:#7a857f;

    font-size:11px;

    line-height:1.5;
}


/* =========================
   RIGHT SIDE SUMMARY
========================= */

.sticky-summary{
    position:sticky;
    top:110px;
}

.summary-header{
    padding:24px 25px 19px;

    border-bottom:1px solid #e4e9e5;
}

.summary-header h3{
    font-family:Georgia,serif;

    font-size:21px;

    color:#183d2d;
}

.summary-body{
    padding:23px 25px;
}

.summary-package{
    display:flex;

    justify-content:space-between;

    align-items:flex-start;

    gap:15px;

    padding-bottom:18px;

    border-bottom:1px solid #e4e9e5;
}

.summary-package-name{
    font-size:13px;
    font-weight:800;
    color:#2b463a;
}

.summary-package-info{
    color:#7d8782;
    font-size:11px;
    margin-top:3px;
}

.summary-package-price{
    font-size:16px;
    font-weight:800;
    color:#234535;
}

.summary-line{
    display:flex;

    justify-content:space-between;

    font-size:12px;

    color:#66736b;

    margin-top:13px;
}

.summary-total{
    display:flex;

    justify-content:space-between;

    margin-top:18px;

    padding-top:18px;

    border-top:1px solid #e2e8e3;
}

.summary-total span:first-child{
    font-weight:800;
    color:#294539;
}

.summary-total span:last-child{
    font-size:20px;
    font-weight:800;
    color:#173d2d;
}


/* =========================
   FOOTER
========================= */

.footer{
    background:#102f23;

    color:#afbbb4;

    padding:42px 20px 20px;

    margin-top:10px;
}

.footer-inner{
    max-width:1180px;
    margin:auto;
}

.footer-top{
    display:grid;

    grid-template-columns:
        1.5fr
        1fr
        1fr
        1fr;

    gap:35px;
}

.footer-logo{
    font-family:Georgia,serif;

    font-size:24px;

    font-weight:700;

    color:#fff;

    margin-bottom:12px;
}

.footer-logo span{
    color:#c18c42;
}

.footer p{
    font-size:11px;

    line-height:1.7;
}

.footer h4{
    color:#fff;

    font-size:13px;

    margin-bottom:12px;
}

.footer a{
    display:block;

    font-size:11px;

    margin:7px 0;

    transition:.2s;
}

.footer a:hover{
    color:#fff;
}

.footer-bottom{
    border-top:1px solid rgba(255,255,255,.1);

    margin-top:32px;

    padding-top:17px;

    text-align:center;

    font-size:10px;
}


/* =========================
   RESPONSIVE
========================= */

@media(max-width:900px){

    .checkout-grid{
        grid-template-columns:1fr;
    }

    .sticky-summary{
        position:static;
    }

    .footer-top{
        grid-template-columns:1fr 1fr;
    }

}


@media(max-width:700px){

    .checkout-wrapper{
        padding-top:35px;
    }

    .checkout-heading h1{
        font-size:34px;
    }

    .order-card,
    .details-card,
    .next-card{
        padding:21px;
    }

    .footer-top{
        grid-template-columns:1fr;
    }

}


@media(max-width:480px){

    .checkout-heading h1{
        font-size:30px;
    }

    .package-top{
        flex-direction:column;
        gap:5px;
    }

    .security-row{
        flex-direction:column;
        gap:7px;
    }

}

</style>
</head>


<body>


<!-- =========================================
     NAVBAR (shared with home page)
========================================= -->

@include('frontend.partials.navbar')


<!-- =========================================
     CHECKOUT
========================================= -->

<main class="checkout-wrapper">


    <!-- TRUSTPILOT -->

    <div class="trustpilot">

        <span class="trust-stars">
            ★★★★★
        </span>

        <span class="trust-score">
            4.7 out of 5
        </span>

        <span class="trust-reviews">
            Based on 83 Trustpilot reviews
        </span>

    </div>



    <!-- HEADING -->

    <div class="checkout-heading">

        <h1>
            Review & Checkout
        </h1>

        <p>
            Review your order and proceed to secure payment
        </p>

    </div>



    <!-- CHECKOUT GRID -->

    <div class="checkout-grid">


        <!-- =================================
             LEFT COLUMN
        ================================= -->

        <div>


            <!-- ORDER SUMMARY -->

            <section class="card order-card">

                <h2 class="card-title">
                    Order Summary
                </h2>


                <div class="package-box">

                    <div class="package-top">

                        <div>

                            <div class="package-name">
                                {{ $package['name'] }}
                            </div>

                            <div class="package-subtitle">
                                Children's Book Formatting
                            </div>

                        </div>


                        <div class="package-price">
                            £{{ $package['price'] }}
                        </div>

                    </div>

                </div>


                <div class="total-row">

                    <span class="total-label">
                        Total
                    </span>

                    <span
                        class="total-price"
                        id="mainTotal"
                    >
                        £{{ $package['price'] }}
                    </span>

                </div>


                <div class="vat-note">
                    No VAT applicable
                </div>


                <!-- ADDONS -->

                <div class="addons">

                    <h3 class="addons-title">
                        Enhance Your Order
                    </h3>

                    <p class="addons-subtitle">
                        Optional add-ons to get more from
                        your children's book formatting
                    </p>


                    <!-- ADDON 1 -->

                    <label class="addon">

                        <div class="addon-left">

                            <input
                                type="checkbox"
                                class="addon-checkbox"
                                data-price="97"
                            >

                            <input
                                type="hidden"
                                form="checkoutForm"
                                name="addon[kids-pages]"
                                value=""
                            >

                            <div>

                                <div class="addon-name">
                                    Additional 10 Pages
                                </div>

                                <div class="addon-description">
                                    Extend page count
                                </div>

                            </div>

                        </div>

                        <div class="addon-price">
                            +£97
                        </div>

                    </label>


                    <!-- ADDON 2 -->

                    <label class="addon">

                        <div class="addon-left">

                            <input
                                type="checkbox"
                                class="addon-checkbox"
                                data-price="187"
                            >

                            <input
                                type="hidden"
                                form="checkoutForm"
                                name="addon[kids-activity]"
                                value=""
                            >

                            <div>

                                <div class="addon-name">
                                    Activity Pages (5)
                                </div>

                                <div class="addon-description">
                                    Coloring/activity page design
                                </div>

                            </div>

                        </div>

                        <div class="addon-price">
                            +£187
                        </div>

                    </label>

                </div>

            </section>



            <!-- CUSTOMER DETAILS -->

            <section class="card details-card">

                <h2>
                    Your Details
                </h2>


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


                    <!-- NAME -->

                    <div class="form-group">

                        <label>
                            Full Name
                            <span class="required">*</span>
                        </label>

                        <input
                            type="text"
                            name="name"
                            id="fullName"
                            placeholder="John Smith"
                            required
                        >

                    </div>


                    <!-- EMAIL -->

                    <div class="form-group">

                        <label>
                            Email Address
                            <span class="required">*</span>
                        </label>

                        <input
                            type="email"
                            name="email"
                            id="email"
                            placeholder="john@example.com"
                            required
                        >

                    </div>


                    <!-- COUNTRY -->

                    <div class="form-group">

                        <label>
                            Country
                            <span class="required">*</span>
                        </label>

                        <select name="country" id="country" required>

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
                                Other
                            </option>

                        </select>

                    </div>


                    <!-- HONEYPOT -->

                    <div class="website-field">

                        <label>
                            Website
                        </label>

                        <input
                            type="text"
                            name="website"
                            autocomplete="off"
                            tabindex="-1"
                        >

                    </div>


                    <!-- PAYMENT -->

                    <div class="payment-card">

                        <div class="payment-title">
                            Secure checkout powered by Stripe
                        </div>

                        <div class="payment-text">

                            You'll enter payment securely
                            on the next screen (Stripe).

                        </div>

                    </div>


                    <!-- PAY -->

                    <button
                        type="submit"
                        class="pay-button"
                        id="payButton"
                    >
                        Pay £{{ $package['price'] }}
                    </button>


                    <!-- SECURITY -->

                    <div class="security-row">

                        <div class="security-item">
                            🔒 Secure Checkout
                        </div>

                        <div class="security-item">
                            🛡 SSL Encrypted
                        </div>

                        <div class="security-item">
                            ★ 4.9/5 (500+ reviews)
                        </div>

                    </div>


                    <!-- TERMS -->

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

            </section>



            <!-- WHAT HAPPENS NEXT -->

            <section class="card next-card">

                <h2>
                    What Happens Next?
                </h2>


                <div class="steps">


                    <div class="step">

                        <div class="step-number">
                            1
                        </div>

                        <div class="step-content">

                            <strong>
                                Complete payment securely with Stripe
                            </strong>

                            <span>
                                Your payment is processed
                                through Stripe's secure checkout.
                            </span>

                        </div>

                    </div>


                    <div class="step">

                        <div class="step-number">
                            2
                        </div>

                        <div class="step-content">

                            <strong>
                                Provide your project details and files
                            </strong>

                            <span>
                                After checkout, you'll provide
                                your children's book information.
                            </span>

                        </div>

                    </div>


                    <div class="step">

                        <div class="step-number">
                            3
                        </div>

                        <div class="step-content">

                            <strong>
                                Our team will review and start work
                            </strong>

                            <span>
                                The production team reviews your
                                files and begins the project.
                            </span>

                        </div>

                    </div>


                    <div class="step">

                        <div class="step-number">
                            4
                        </div>

                        <div class="step-content">

                            <strong>
                                Receive your completed work
                            </strong>

                            <span>
                                Review the completed formatting
                                and request revisions as needed.
                            </span>

                        </div>

                    </div>


                </div>

            </section>


        </div>



        <!-- =================================
             RIGHT COLUMN
        ================================= -->

        <aside class="sticky-summary">


            <div class="card">

                <div class="summary-header">

                    <h3>
                        Your Order
                    </h3>

                </div>


                <div class="summary-body">


                    <div class="summary-package">

                        <div>

                            <div class="summary-package-name">
                                {{ $package['name'] }}
                            </div>

                            <div class="summary-package-info">
                                Children's Book Formatting
                            </div>

                        </div>

                        <div
                            class="summary-package-price"
                            id="sidePackagePrice"
                        >
                            £{{ $package['price'] }}
                        </div>

                    </div>


                    <div class="summary-line">

                        <span>
                            Package
                        </span>

                        <span>
                            £{{ $package['price'] }}
                        </span>

                    </div>


                    <div
                        class="summary-line"
                        id="addonSummary1"
                        style="display:none;"
                    >

                        <span>
                            Additional 10 Pages
                        </span>

                        <span>
                            +£97
                        </span>

                    </div>


                    <div
                        class="summary-line"
                        id="addonSummary2"
                        style="display:none;"
                    >

                        <span>
                            Activity Pages (5)
                        </span>

                        <span>
                            +£187
                        </span>

                    </div>


                    <div class="summary-total">

                        <span>
                            Total
                        </span>

                        <span id="sideTotal">
                            £{{ $package['price'] }}
                        </span>

                    </div>

                </div>

            </div>

        </aside>


    </div>

</main>



<!-- =========================================
     FOOTER
========================================= -->

<footer class="footer">

    <div class="footer-inner">


        <div class="footer-top">


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

                <a href="/services">
                    Editing Services
                </a>

                <a href="/services/book-cover-design">
                    Book Cover Design
                </a>

                <a href="/services/childrens-book-formatting">
                    Children's Formatting
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

                <a href="/contact">
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


        <div class="footer-bottom">

            © 2026 HMD Publishing. All rights reserved.

        </div>

    </div>

</footer>



<script>

/* =========================================
   PRICE CALCULATION
========================================= */

const basePrice = {{ $package['price'] }};

const checkboxes =
    document.querySelectorAll(".addon-checkbox");

const mainTotal =
    document.getElementById("mainTotal");

const sideTotal =
    document.getElementById("sideTotal");

const sidePackagePrice =
    document.getElementById("sidePackagePrice");

const payButton =
    document.getElementById("payButton");

const addonSummary1 =
    document.getElementById("addonSummary1");

const addonSummary2 =
    document.getElementById("addonSummary2");


function updateTotal(){

    let total = basePrice;


    checkboxes.forEach((checkbox, index) => {

        const hidden = checkbox
            .closest(".addon-left")
            .querySelector('input[type="hidden"]');

        if(hidden){
            hidden.value =
                checkbox.checked ? "1" : "";
        }

        if(checkbox.checked){

            total += Number(
                checkbox.dataset.price
            );

        }

        if(index === 0){

            addonSummary1.style.display =
                checkbox.checked
                ? "flex"
                : "none";

        }

        if(index === 1){

            addonSummary2.style.display =
                checkbox.checked
                ? "flex"
                : "none";

        }

    });


    const formatted =
        "£" + total;


    mainTotal.textContent =
        formatted;

    sideTotal.textContent =
        formatted;

    sidePackagePrice.textContent =
        "£" + basePrice;

    payButton.textContent =
        "Pay " + formatted;

}


checkboxes.forEach(checkbox => {

    checkbox.addEventListener(
        "change",
        updateTotal
    );

});


/* =========================================
   CHECKOUT FORM
========================================= */

const checkoutForm =
    document.getElementById("checkoutForm");


function submitCheckout(event) {

    event.preventDefault();

    const honeypot =
        checkoutForm.querySelector(
            'input[name="website"]'
        );

    if(honeypot && honeypot.value !== ""){

        return;

    }

    checkoutForm.submit();

}

</script>


</body>
</html>