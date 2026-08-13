<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Checkout - Book Illustrations | HMD Publishing</title>

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
    background:#f6f8f6;
    color:#173d2d;
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
   MAIN CHECKOUT
===================================================== */

.checkout-wrapper{
    max-width:1080px;

    margin:0 auto;

    padding:58px 20px 80px;
}


/* =====================================================
   PAGE HEADER
===================================================== */

.page-header{
    text-align:center;

    margin-bottom:38px;
}

.rating{
    display:flex;

    justify-content:center;
    align-items:center;

    gap:9px;

    margin-bottom:15px;

    font-size:13px;

    color:#68766e;
}

.stars{
    color:#c08b42;

    letter-spacing:2px;

    font-size:16px;
}

.page-header h1{
    font-family:Georgia,serif;

    font-size:45px;

    line-height:1.1;

    color:#183d2d;

    margin-bottom:10px;
}

.page-header p{
    color:#6f7b74;

    font-size:15px;
}


/* =====================================================
   CHECKOUT GRID
===================================================== */

.checkout-grid{
    display:grid;

    grid-template-columns:
        1fr
        390px;

    gap:24px;

    align-items:start;
}


/* =====================================================
   CARD
===================================================== */

.card{
    background:#fff;

    border:1px solid #dfe6e1;

    border-radius:12px;

    box-shadow:
        0 8px 30px rgba(20,55,40,.045);
}

.card-header{
    padding:24px 26px;

    border-bottom:1px solid #edf0ed;
}

.card-header h2{
    font-family:Georgia,serif;

    color:#1a4030;

    font-size:22px;

    margin-bottom:4px;
}

.card-header p{
    color:#7a847e;

    font-size:12px;
}


/* =====================================================
   ORDER SUMMARY
===================================================== */

.summary{
    padding:24px 26px;
}

.summary-row{
    display:flex;

    align-items:center;
    justify-content:space-between;

    padding:15px 0;

    border-bottom:1px solid #edf0ed;
}

.product-info{
    display:flex;
    flex-direction:column;

    gap:3px;
}

.product-name{
    font-size:14px;

    font-weight:700;

    color:#294638;
}

.product-description{
    font-size:11px;

    color:#89928d;
}

.product-price{
    font-size:15px;

    font-weight:800;

    color:#183d2d;
}

.total-row{
    display:flex;

    align-items:center;
    justify-content:space-between;

    padding:20px 0 5px;
}

.total-label{
    font-weight:700;

    color:#274638;
}

.total-price{
    font-size:25px;

    font-weight:800;

    color:#173d2d;
}

.vat{
    text-align:right;

    color:#8a928d;

    font-size:10px;

    margin-top:3px;
}


/* =====================================================
   ADDONS
===================================================== */

.addons{
    margin-top:22px;
}

.addons-title{
    font-size:12px;

    font-weight:800;

    color:#30483c;

    text-transform:uppercase;

    letter-spacing:.7px;

    margin-bottom:11px;
}

.addon{
    border:1px solid #dfe6e1;

    border-radius:8px;

    padding:14px;

    margin-bottom:9px;

    cursor:pointer;

    display:flex;

    align-items:center;

    justify-content:space-between;

    transition:.2s;
}

.addon:hover{
    border-color:#b68a4d;

    background:#fcfdfc;
}

.addon.selected{
    border-color:#9f7439;

    background:#faf8f2;
}

.addon-left{
    display:flex;

    align-items:center;

    gap:12px;
}

.addon-check{
    width:18px;
    height:18px;

    accent-color:#173d2d;
}

.addon-name{
    font-size:12px;

    font-weight:700;

    color:#324b3e;
}

.addon-description{
    display:block;

    font-size:10px;

    font-weight:400;

    color:#8a938e;

    margin-top:2px;
}

.addon-price{
    font-size:12px;

    font-weight:800;

    color:#b07831;

    white-space:nowrap;
}


/* =====================================================
   DETAILS FORM
===================================================== */

.form-card{
    margin-top:24px;
}

.form-body{
    padding:25px 26px;
}

.form-group{
    margin-bottom:18px;
}

.form-group:last-child{
    margin-bottom:0;
}

label{
    display:block;

    font-size:12px;

    font-weight:700;

    color:#354d41;

    margin-bottom:7px;
}

.required{
    color:#b97935;
}

input,
select{
    width:100%;

    height:46px;

    border:1px solid #d8e0da;

    border-radius:7px;

    background:#fff;

    padding:0 13px;

    outline:none;

    color:#344a3e;

    font-size:13px;

    transition:.2s;
}

input::placeholder{
    color:#a0a8a3;
}

input:focus,
select:focus{
    border-color:#8ea999;

    box-shadow:
        0 0 0 3px rgba(67,108,86,.08);
}

.website-note{
    font-size:10px;

    color:#929a95;

    margin-top:5px;
}


/* =====================================================
   PAYMENT CARD
===================================================== */

.payment-card{
    position:sticky;

    top:25px;
}

.payment-body{
    padding:25px;
}

.secure-message{
    display:flex;

    gap:11px;

    padding:13px;

    background:#f3f7f4;

    border-radius:8px;

    margin-bottom:20px;
}

.secure-icon{
    width:32px;
    height:32px;

    flex-shrink:0;

    border-radius:50%;

    background:#dfece3;

    display:flex;

    align-items:center;
    justify-content:center;

    font-size:15px;
}

.secure-message strong{
    display:block;

    font-size:12px;

    color:#31503f;

    margin-bottom:2px;
}

.secure-message span{
    font-size:10px;

    color:#7c8780;
}


/* =====================================================
   PAY BUTTON
===================================================== */

.pay-button{
    width:100%;

    height:52px;

    border:none;

    border-radius:7px;

    background:#173d2d;

    color:#fff;

    font-size:14px;

    font-weight:800;

    cursor:pointer;

    transition:.25s;
}

.pay-button:hover{
    background:#b27d35;

    transform:translateY(-1px);
}

.pay-button:active{
    transform:translateY(0);
}

.payment-note{
    text-align:center;

    color:#858e89;

    font-size:10px;

    line-height:1.6;

    margin-top:12px;
}


/* =====================================================
   SECURITY FEATURES
===================================================== */

.security-features{
    display:grid;

    grid-template-columns:1fr 1fr;

    gap:8px;

    margin-top:18px;
}

.security-item{
    padding:10px 7px;

    text-align:center;

    background:#f7f9f7;

    border-radius:7px;

    color:#78837d;

    font-size:9px;
}

.security-item strong{
    display:block;

    color:#43594c;

    font-size:10px;

    margin-bottom:2px;
}


/* =====================================================
   TERMS
===================================================== */

.terms{
    text-align:center;

    font-size:10px;

    color:#858e89;

    line-height:1.7;

    margin-top:18px;
}

.terms a{
    color:#41614f;

    text-decoration:underline;
}


/* =====================================================
   WHAT HAPPENS NEXT
===================================================== */

.next-card{
    margin-top:24px;
}

.next-body{
    padding:25px 26px;
}

.next-step{
    display:flex;

    gap:13px;

    margin-bottom:18px;
}

.next-step:last-child{
    margin-bottom:0;
}

.step-number{
    width:27px;
    height:27px;

    flex-shrink:0;

    display:flex;

    align-items:center;
    justify-content:center;

    background:#e8f0ea;

    color:#2e503d;

    border-radius:50%;

    font-size:11px;

    font-weight:800;
}

.step-content strong{
    display:block;

    color:#344d40;

    font-size:12px;

    margin-bottom:2px;
}

.step-content p{
    color:#858e89;

    font-size:10px;

    line-height:1.5;
}


/* =====================================================
   FOOTER
===================================================== */

footer{
    background:#102d22;

    color:#aebbb3;

    padding:45px 0 20px;
}

.footer-container{
    max-width:1080px;

    margin:auto;

    padding:0 20px;
}

.footer-grid{
    display:grid;

    grid-template-columns:
        1.5fr
        1fr
        1fr
        1fr;

    gap:30px;
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

footer h4{
    color:#fff;

    font-size:12px;

    margin-bottom:12px;
}

footer a,
footer p{
    display:block;

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


/* =====================================================
   RESPONSIVE
===================================================== */

@media(max-width:900px){

    .checkout-grid{
        grid-template-columns:1fr;
    }

    .payment-card{
        position:static;
    }

    .footer-grid{
        grid-template-columns:1fr 1fr;
    }

}

@media(max-width:700px){

    .checkout-wrapper{
        padding-top:40px;
    }

    .page-header h1{
        font-size:36px;
    }

    .footer-grid{
        grid-template-columns:1fr;
    }

}

@media(max-width:480px){

    .checkout-wrapper{
        padding-left:12px;
        padding-right:12px;
    }

    .page-header h1{
        font-size:31px;
    }

    .card-header,
    .summary,
    .form-body,
    .payment-body,
    .next-body{
        padding-left:18px;
        padding-right:18px;
    }

    .security-features{
        grid-template-columns:1fr 1fr;
    }

}

</style>
</head>


<body>


@include('frontend.partials.navbar')


<!-- =====================================================
     CHECKOUT
===================================================== -->

<main>

    <div class="checkout-wrapper">


        <!-- PAGE HEADER -->

        <div class="page-header">

            <div class="rating">

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
                Review & Checkout
            </h1>

            <p>
                Review your order and proceed to secure payment
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

                        <p>
                            Your selected illustration package
                        </p>

                    </div>


                    <div class="summary">

                        <div class="summary-row">

                            <div class="product-info">

                                <div class="product-name">
                                    {{ $package['name'] }}
                                </div>

                                <div class="product-description">
                                    Custom book illustration package
                                </div>

                            </div>

                            <div class="product-price">
                                ${{ number_format($package['price']) }}
                            </div>

                        </div>


                        <!-- ADDONS -->

                        <div class="addons">

                            <div class="addons-title">
                                Enhance Your Order
                            </div>

                            <div
                                class="addon"
                                data-price="127"
                            >

                                <div class="addon-left">

                                    <input
                                        type="checkbox"
                                        class="addon-check"
                                        data-price="127"
                                    >

                                    <input
                                        type="hidden"
                                        form="checkoutForm"
                                        name="addon[ill-illustration]"
                                        value=""
                                    >

                                    <div>

                                        <div class="addon-name">
                                            Additional Illustration
                                        </div>

                                        <span class="addon-description">
                                            One more illustration
                                        </span>

                                    </div>

                                </div>

                                <div class="addon-price">
                                    +$127
                                </div>

                            </div>


                            <div
                                class="addon"
                                data-price="249"
                            >

                                <div class="addon-left">

                                    <input
                                        type="checkbox"
                                        class="addon-check"
                                        data-price="249"
                                    >

                                    <input
                                        type="hidden"
                                        form="checkoutForm"
                                        name="addon[ill-sheet]"
                                        value=""
                                    >

                                    <div>

                                        <div class="addon-name">
                                            Character Sheet
                                        </div>

                                        <span class="addon-description">
                                            Detailed character reference
                                        </span>

                                    </div>

                                </div>

                                <div class="addon-price">
                                    +$249
                                </div>

                            </div>

                        </div>


                        <!-- TOTAL -->

                        <div class="total-row">

                            <div class="total-label">
                                Total
                            </div>

                            <div
                                class="total-price"
                                id="totalPrice"
                            >
                                ${{ number_format($package['price']) }}
                            </div>

                        </div>

                        <div class="vat">
                            No VAT applicable
                        </div>

                    </div>

                </div>



                <!-- YOUR DETAILS -->

                <div class="card form-card">

                    <div class="card-header">

                        <h2>
                            Your Details
                        </h2>

                        <p>
                            Enter your information to continue
                        </p>

                    </div>


                    <div class="form-body">

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
                                        Select your country
                                    </option>

                                    <option>
                                        United States
                                    </option>

                                    <option>
                                        United Kingdom
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



                            <div class="form-group">

                                <label>
                                    Website
                                </label>

                                <input
                                    type="text"
                                    name="website"
                                    autocomplete="off"
                                >

                                <div class="website-note">
                                    Leave this empty
                                </div>

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

                        <p>
                            Here's what happens after checkout
                        </p>

                    </div>


                    <div class="next-body">


                        <div class="next-step">

                            <div class="step-number">
                                1
                            </div>

                            <div class="step-content">

                                <strong>
                                    Complete payment securely with Stripe
                                </strong>

                                <p>
                                    You'll be redirected to Stripe's
                                    secure payment screen.
                                </p>

                            </div>

                        </div>



                        <div class="next-step">

                            <div class="step-number">
                                2
                            </div>

                            <div class="step-content">

                                <strong>
                                    Provide your project details
                                </strong>

                                <p>
                                    Share your manuscript, references
                                    and any required files.
                                </p>

                            </div>

                        </div>



                        <div class="next-step">

                            <div class="step-number">
                                3
                            </div>

                            <div class="step-content">

                                <strong>
                                    Our team reviews your project
                                </strong>

                                <p>
                                    Our team will review your project
                                    and start work within 24 hours.
                                </p>

                            </div>

                        </div>



                        <div class="next-step">

                            <div class="step-number">
                                4
                            </div>

                            <div class="step-content">

                                <strong>
                                    Receive your completed work
                                </strong>

                                <p>
                                    Receive the final artwork and
                                    request revisions as needed.
                                </p>

                            </div>

                        </div>


                    </div>

                </div>


            </div>



            <!-- =================================================
                 RIGHT COLUMN
            ================================================= -->

            <aside class="card payment-card">

                <div class="card-header">

                    <h2>
                        Secure Checkout
                    </h2>

                    <p>
                        Powered by Stripe
                    </p>

                </div>


                <div class="payment-body">


                    <div class="secure-message">

                        <div class="secure-icon">
                            🔒
                        </div>

                        <div>

                            <strong>
                                Your payment is secure
                            </strong>

                            <span>
                                Payment details are encrypted
                                and processed securely.
                            </span>

                        </div>

                    </div>


                    <button
                        type="submit"
                        form="checkoutForm"
                        class="pay-button"
                        id="payButton"
                    >
                        Pay ${{ number_format($package['price']) }}
                    </button>


                    <div class="payment-note">

                        You'll enter payment securely
                        on the next screen (Stripe).

                    </div>


                    <div class="security-features">

                        <div class="security-item">

                            <strong>
                                🔒 SSL
                            </strong>

                            Encrypted

                        </div>


                        <div class="security-item">

                            <strong>
                                ✓ Secure
                            </strong>

                            Checkout

                        </div>


                        <div class="security-item">

                            <strong>
                                ★ 4.9/5
                            </strong>

                            500+ reviews

                        </div>


                        <div class="security-item">

                            <strong>
                                💳 Stripe
                            </strong>

                            Protected

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

            </aside>


        </div>

    </div>

</main>



<!-- =====================================================
     FOOTER
===================================================== -->

<footer>

    <div class="footer-container">

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
                    Company
                </h4>

                <a href="#">
                    About
                </a>

                <a href="#">
                    Portfolio
                </a>

                <a href="#">
                    Contact
                </a>

                <a href="#">
                    Blog
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
                    Terms
                </a>

                <a href="#">
                    Refund Policy
                </a>

                <a href="#">
                    Privacy Policy
                </a>

            </div>


        </div>


        <div class="copyright">

            © 2026 HMD Publishing Limited.
            All rights reserved.

        </div>

    </div>

</footer>



<!-- =====================================================
     JAVASCRIPT
===================================================== -->

<script>

const basePrice = {{ $package['price'] }};

const totalPrice =
    document.getElementById("totalPrice");

const payButton =
    document.getElementById("payButton");

const addons =
    document.querySelectorAll(".addon-check");

const form =
    document.getElementById("checkoutForm");


/* ==========================================
   UPDATE TOTAL
========================================== */

function updateTotal(){

    let total = basePrice;

    addons.forEach(function(addon){

        const hidden =
            addon.closest(".addon-left")
                .querySelector('input[type="hidden"]');

        if(hidden){
            hidden.value =
                addon.checked ? "1" : "";
        }

        if(addon.checked){

            total +=
                Number(
                    addon.dataset.price
                );

        }

    });


    totalPrice.textContent =
        "$" + total.toLocaleString();


    payButton.textContent =
        "Pay $" + total.toLocaleString();

}


/* ==========================================
   ADDON CHECKBOX
========================================== */

addons.forEach(function(addon){

    addon.addEventListener(
        "change",
        function(){

            const parent =
                addon.closest(".addon");

            if(addon.checked){

                parent.classList.add(
                    "selected"
                );

            }else{

                parent.classList.remove(
                    "selected"
                );

            }

            updateTotal();

        }
    );

});


/* ==========================================
   CLICK WHOLE ADDON CARD
========================================== */

document
.querySelectorAll(".addon")
.forEach(function(card){

    card.addEventListener(
        "click",
        function(e){

            if(
                e.target.tagName ===
                "INPUT"
            ){

                return;

            }

            const checkbox =
                card.querySelector(
                    ".addon-check"
                );

            checkbox.checked =
                !checkbox.checked;

            checkbox.dispatchEvent(
                new Event("change")
            );

        }
    );

});


/* ==========================================
   FORM
========================================== */

function submitCheckout(event) {

    event.preventDefault();

    const honeypot =
        form.querySelector(
            'input[name="website"]'
        );

    if(honeypot && honeypot.value !== ""){

        return;

    }

    form.submit();

}


/* Initial total */

updateTotal();

</script>


</body>
</html>
