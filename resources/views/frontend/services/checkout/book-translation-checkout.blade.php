<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Checkout - Professional Translation | HMD Publishing</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

:root{
    --green:#173d2d;
    --dark:#102c21;
    --gold:#b8833e;
    --gold-light:#d5a05d;
    --bg:#f5f7f5;
    --white:#fff;
    --border:#dfe6e1;
    --text:#69776f;
    --light:#eef3ef;
}

body{
    font-family:Arial,Helvetica,sans-serif;
    background:var(--bg);
    color:var(--green);
    line-height:1.5;
}

a{
    text-decoration:none;
    color:inherit;
}


/* =========================
   MAIN
========================= */

.main{
    max-width:1040px;
    margin:auto;
    padding:55px 24px 80px;
}


/* =========================
   PAGE HEADER
========================= */

.page-header{
    text-align:center;
    margin-bottom:38px;
}

.trust{
    display:flex;
    justify-content:center;
    align-items:center;
    gap:9px;

    margin-bottom:15px;

    font-size:10px;
    color:#68766e;
}

.stars{
    color:#c18a42;
    letter-spacing:2px;
}

.page-header h1{
    font-family:Georgia,serif;
    font-size:45px;
    line-height:1.1;
    letter-spacing:-1px;

    color:var(--green);
}

.page-header p{
    margin-top:10px;

    font-size:11px;
    color:var(--text);
}


/* =========================
   CHECKOUT GRID
========================= */

.checkout-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:22px;

    align-items:start;
}


/* =========================
   CARD
========================= */

.card{
    background:#fff;

    border:1px solid var(--border);
    border-radius:9px;

    box-shadow:0 12px 35px rgba(20,55,40,.055);
}


/* =========================
   ORDER SUMMARY
========================= */

.card-header{
    padding:22px 25px;

    border-bottom:1px solid var(--border);
}

.card-header h2{
    font-family:Georgia,serif;
    font-size:22px;
    color:var(--green);
}

.card-header p{
    margin-top:4px;
    font-size:10px;
    color:var(--text);
}

.card-body{
    padding:25px;
}

.order-row{
    display:flex;
    justify-content:space-between;
    align-items:center;

    padding:14px 0;

    border-bottom:1px solid #edf1ee;
}

.order-name{
    font-size:12px;
    font-weight:800;
    color:var(--green);
}

.order-description{
    margin-top:3px;
    font-size:9px;
    color:#78847d;
}

.order-price{
    font-size:14px;
    font-weight:900;
    color:var(--green);
}

.total-row{
    display:flex;
    justify-content:space-between;

    padding:20px 0 5px;

    font-size:16px;
    font-weight:900;
}

.total-price{
    color:var(--green);
}

.vat{
    font-size:9px;
    color:#79867f;
    margin-top:3px;
}


/* =========================
   ADDONS
========================= */

.addons{
    margin-top:28px;
}

.addons-title{
    font-family:Georgia,serif;
    font-size:18px;
    margin-bottom:4px;
}

.addons-description{
    color:var(--text);
    font-size:9px;
    margin-bottom:15px;
}

.addon{
    border:1px solid var(--border);
    border-radius:7px;

    padding:14px;

    display:flex;
    justify-content:space-between;
    align-items:center;

    margin-bottom:9px;

    cursor:pointer;
    transition:.2s;
}

.addon:hover{
    border-color:var(--gold);
    background:#fffdf9;
}

.addon-left{
    display:flex;
    gap:11px;
    align-items:flex-start;
}

.checkbox{
    width:17px;
    height:17px;

    margin-top:1px;

    accent-color:var(--green);

    cursor:pointer;
}

.addon-title{
    font-size:10px;
    font-weight:800;
}

.addon-desc{
    margin-top:2px;
    font-size:8px;
    color:#7a867f;
}

.addon-price{
    white-space:nowrap;

    color:var(--green);
    font-size:10px;
    font-weight:900;
}


/* =========================
   FORM
========================= */

.form-group{
    margin-bottom:17px;
}

.form-group label{
    display:block;

    margin-bottom:6px;

    color:var(--green);
    font-size:10px;
    font-weight:800;
}

.required{
    color:#c26c54;
}

input,
select{
    width:100%;
    height:44px;

    padding:0 13px;

    background:#fff;

    border:1px solid #d4ded7;
    border-radius:5px;

    outline:none;

    font-family:Arial,sans-serif;
    font-size:11px;
    color:#31493d;

    transition:.2s;
}

input:focus,
select:focus{
    border-color:var(--green);
    box-shadow:0 0 0 3px rgba(23,61,45,.06);
}

.website-note{
    font-size:8px;
    color:#849087;
    margin-top:4px;
}

.website-field{
    position:absolute;
    left:-9999px;
    opacity:0;
}


/* =========================
   PAY BUTTON
========================= */

.pay-button{
    width:100%;
    height:50px;

    margin-top:7px;

    border:none;
    border-radius:5px;

    background:var(--green);
    color:#fff;

    font-size:11px;
    font-weight:900;

    cursor:pointer;

    transition:.25s;
}

.pay-button:hover{
    background:var(--gold);
    transform:translateY(-1px);
}

.stripe-note{
    text-align:center;

    margin-top:10px;

    color:#7d8982;
    font-size:8px;
}


/* =========================
   SECURE CHECKOUT
========================= */

.security{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:7px;

    margin-top:22px;
}

.security-box{
    padding:13px 5px;

    text-align:center;

    background:#f7f9f7;
    border:1px solid #e6ece8;
    border-radius:6px;

    font-size:8px;
    color:#66756c;
}

.security-icon{
    display:block;

    margin-bottom:4px;

    color:var(--gold);
    font-size:14px;
}

.rating{
    text-align:center;
    margin-top:13px;

    font-size:9px;
    color:#69776f;
}

.rating strong{
    color:var(--green);
}


/* =========================
   TERMS
========================= */

.terms{
    margin-top:17px;

    font-size:8px;
    line-height:1.6;
    color:#7b8780;

    text-align:center;
}

.terms a{
    color:var(--green);
    text-decoration:underline;
}


/* =========================
   WHAT HAPPENS NEXT
========================= */

.next-section{
    margin-top:28px;
}

.next-title{
    font-family:Georgia,serif;
    font-size:19px;

    margin-bottom:16px;
}

.next-step{
    display:flex;
    gap:13px;

    padding:12px 0;

    border-bottom:1px solid #edf1ee;
}

.next-number{
    min-width:27px;
    height:27px;

    display:flex;
    align-items:center;
    justify-content:center;

    border-radius:50%;

    background:var(--green);
    color:#fff;

    font-size:9px;
    font-weight:bold;
}

.next-step h3{
    font-size:10px;
    color:var(--green);
}

.next-step p{
    margin-top:2px;
    color:#748079;
    font-size:8px;
}


/* =========================
   FOOTER
========================= */

footer{
    background:var(--dark);
    color:#aebbb3;

    padding:45px 24px 18px;
}

.footer-inner{
    max-width:1040px;
    margin:auto;
}

.footer-grid{
    display:grid;
    grid-template-columns:1.6fr 1fr 1fr 1fr;
    gap:35px;
}

.footer-logo{
    font-family:Georgia,serif;
    color:#fff;
    font-size:23px;
    font-weight:bold;
}

.footer-logo span{
    color:var(--gold-light);
}

.footer-col h3{
    color:#fff;
    font-size:10px;
    margin-bottom:11px;
}

.footer-col a,
.footer-col p{
    display:block;

    color:#aab7b0;

    font-size:8px;

    margin:5px 0;
}

.footer-col a:hover{
    color:#fff;
}

.copyright{
    border-top:1px solid rgba(255,255,255,.1);

    margin-top:35px;
    padding-top:15px;

    text-align:center;

    font-size:8px;
    color:#71837a;
}


/* =========================
   MOBILE
========================= */

@media(max-width:900px){

    .nav{
        display:none;
    }

    .checkout-grid{
        grid-template-columns:1fr;
    }

    .page-header h1{
        font-size:38px;
    }

    .footer-grid{
        grid-template-columns:1fr 1fr;
    }
}


@media(max-width:600px){

    .main{
        padding:40px 15px 60px;
    }

    .page-header h1{
        font-size:32px;
    }

    .page-header p{
        font-size:10px;
    }

    .card-header,
    .card-body{
        padding:20px;
    }

    .security{
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



<!-- =========================
     MAIN CHECKOUT
========================= -->

<main class="main">


    <!-- PAGE TITLE -->

    <div class="page-header">

        <div class="trust">

            <span class="stars">
                ★★★★★
            </span>

            <span>
                4.7 out of 5 · Based on 83 Trustpilot reviews
            </span>

        </div>


        <h1>
            Review & Checkout
        </h1>

        <p>
            Review your order and proceed to secure payment
        </p>

    </div>



    <!-- CHECKOUT GRID -->

    <div class="checkout-grid">


        <!-- =========================
             LEFT COLUMN
        ========================= -->

        <div class="card">

            <div class="card-header">

                <h2>
                    Order Summary
                </h2>

            </div>


            <div class="card-body">


                <!-- MAIN PACKAGE -->

                <div class="order-row">

                    <div>

                        <div class="order-name">
                            {{ $package['name'] }}
                        </div>

                        <div class="order-description">
                            Professional Translation
                        </div>

                    </div>

                    <div class="order-price">
                        £{{ number_format($package['price']) }}
                    </div>

                </div>


                <!-- TOTAL -->

                <div class="total-row">

                    <span>
                        Total
                    </span>

                    <span class="total-price" id="totalPrice">
                        £{{ number_format($package['price']) }}
                    </span>

                </div>

                <div class="vat">
                    No VAT applicable
                </div>



                <!-- ADDONS -->

                <div class="addons">

                    <div class="addons-title">
                        Enhance Your Order
                    </div>

                    <div class="addons-description">
                        Optional add-ons to get more from your
                        professional translation
                    </div>

                    @php
                        $addonOptions = [
                            'transl-words' => ['10,000 Additional Words', 497, 'Extend word count'],
                            'transl-rush'  => ['Rush Delivery',            127, '2-3 day turnaround'],
                        ];
                    @endphp


                    @foreach ($addonOptions as $key => [$name, $price, $desc])

                        <!-- ADDON -->

                        <label class="addon">

                            <div class="addon-left">

                                <input
                                    type="checkbox"
                                    class="checkbox"
                                    data-price="{{ $price }}"
                                    data-key="{{ $key }}"
                                >

                                <input
                                    type="hidden"
                                    form="checkoutForm"
                                    name="addon[{{ $key }}]"
                                    value=""
                                >

                                <div>

                                    <div class="addon-title">
                                        {{ $name }}
                                    </div>

                                    <div class="addon-desc">
                                        {{ $desc }}
                                    </div>

                                </div>

                            </div>

                            <div class="addon-price">
                                +£{{ number_format($price) }}
                            </div>

                        </label>

                    @endforeach

                </div>

            </div>

        </div>



        <!-- =========================
             RIGHT COLUMN
        ========================= -->

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

                        <select name="country" required>

                            <option value="">
                                Select Country
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
                                Spain
                            </option>

                            <option>
                                Italy
                            </option>

                            <option>
                                Other
                            </option>

                        </select>

                    </div>


                    <!-- WEBSITE (HONEYPOT) -->

                    <div class="website-field">

                        <label>
                            Website
                        </label>

                        <input
                            type="text"
                            name="website"
                            autocomplete="off"
                        >

                    </div>


                    <!-- PAY -->

                    <button
                        type="submit"
                        class="pay-button"
                        id="payButton"
                    >
                        Pay £{{ number_format($package['price']) }}
                    </button>


                    <div class="stripe-note">
                        You'll enter payment securely on the next screen (Stripe).
                    </div>


                    <!-- SECURITY -->

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

                        <div class="security-box">

                            <span class="security-icon">
                                ★
                            </span>

                            4.9/5 (500+ reviews)

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

            </div>

        </div>

    </div>



    <!-- =========================
         WHAT HAPPENS NEXT
    ========================= -->

    <div class="card next-section">

        <div class="card-body">

            <div class="next-title">
                What Happens Next?
            </div>


            <!-- STEP 1 -->

            <div class="next-step">

                <div class="next-number">
                    1
                </div>

                <div>

                    <h3>
                        Complete payment securely with Stripe
                    </h3>

                    <p>
                        Your payment is processed securely
                        through Stripe.
                    </p>

                </div>

            </div>


            <!-- STEP 2 -->

            <div class="next-step">

                <div class="next-number">
                    2
                </div>

                <div>

                    <h3>
                        Provide your project details and files
                    </h3>

                    <p>
                        Submit your manuscript and required
                        translation information.
                    </p>

                </div>

            </div>


            <!-- STEP 3 -->

            <div class="next-step">

                <div class="next-number">
                    3
                </div>

                <div>

                    <h3>
                        Our team will review and start work
                    </h3>

                    <p>
                        Your project is reviewed and work begins
                        after the required information is received.
                    </p>

                </div>

            </div>


            <!-- STEP 4 -->

            <div class="next-step">

                <div class="next-number">
                    4
                </div>

                <div>

                    <h3>
                        Receive your completed work
                    </h3>

                    <p>
                        Review your translation and request
                        revisions as needed.
                    </p>

                </div>

            </div>

        </div>

    </div>


</main>



<!-- =========================
     FOOTER
========================= -->

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

                <a href="/services/editing">
                    Editing Services
                </a>

                <a href="/services/book-formatting">
                    Book Formatting
                </a>

                <a href="/services/book-cover-design">
                    Cover Design
                </a>

                <a href="{{ route('services.bookTranslation') }}">
                    Translation
                </a>

                <a href="/services/audiobook-production">
                    Audiobook
                </a>

            </div>


            <div class="footer-col">

                <h3>
                    Company
                </h3>

                <a href="/about">
                    About
                </a>

                <a href="/portfolio">
                    Portfolio
                </a>

                <a href="/#pricing">
                    Pricing
                </a>

                <a href="/contact">
                    Contact
                </a>

            </div>


            <div class="footer-col">

                <h3>
                    Support
                </h3>

                <a href="#">
                    Support Center
                </a>

                <a href="#">
                    Knowledge Base
                </a>

                <a href="#">
                    Privacy Policy
                </a>

                <a href="#">
                    Terms of Service
                </a>

            </div>


        </div>


        <div class="copyright">
            © 2026 HMD Publishing. All rights reserved.
        </div>

    </div>

</footer>



<script>

/* =========================
   ADDON PRICE CALCULATION
========================= */

const BASE_PRICE = {{ $package['price'] }};

const addonCheckboxes =
    document.querySelectorAll(".checkbox[data-price]");

const totalPrice =
    document.getElementById("totalPrice");

const payButton =
    document.getElementById("payButton");


function money(value){
    return "£" + value.toLocaleString();
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

            total += parseInt(
                item.dataset.price,
                10
            );

        }

    });


    totalPrice.textContent =
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


/* =========================
   ADDON CLICK FEEDBACK
========================= */

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
                        ".checkbox[data-price]"
                    );

                checkbox.checked =
                    !checkbox.checked;

                updateTotal();

            }

        }
    );

});


/* =========================
   CHECKOUT FORM
========================= */

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


/* INITIAL TOTAL */

updateTotal();

</script>

</body>
</html>