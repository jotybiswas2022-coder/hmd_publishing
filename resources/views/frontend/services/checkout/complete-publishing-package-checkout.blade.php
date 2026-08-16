<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Checkout — Complete Publishing Package | HMD Publishing</title>

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

.main{
    max-width:1040px;
    margin:auto;
    padding:50px 24px 80px;
}

.trust{
    display:flex;
    justify-content:center;
    align-items:center;
    gap:9px;
    margin-bottom:16px;
    font-size:10px;
    color:#68766e;
}

.stars{
    color:#c18a42;
    letter-spacing:2px;
}

.page-header{
    text-align:center;
    margin-bottom:38px;
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

.checkout-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:22px;
    align-items:start;
}

.card{
    background:#fff;
    border:1px solid var(--border);
    border-radius:9px;
    box-shadow:0 12px 35px rgba(20,55,40,.055);
}

.card-header{
    padding:22px 25px;
    border-bottom:1px solid var(--border);
}

.card-header h2{
    font-family:Georgia,serif;
    font-size:22px;
    color:var(--green);
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
}

.stripe-small{
    display:flex;
    align-items:center;
    gap:7px;
    margin-top:14px;
    font-size:9px;
    color:#748079;
}

.stripe-dot{
    width:7px;
    height:7px;
    border-radius:50%;
    background:#635bff;
}

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

.website-field{
    position:absolute;
    left:-9999px;
    opacity:0;
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

.next-step:last-child{
    border-bottom:none;
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

footer{
    background:var(--dark);
    color:#aebbb3;
    padding:45px 24px 18px;
}

.footer-inner{
    max-width:1040px;
    margin:auto;
    text-align:center;
    font-size:8px;
    color:#71837a;
}

.copyright{
    border-top:1px solid rgba(255,255,255,.1);
    margin-top:35px;
    padding-top:15px;
}

@media(max-width:900px){

    .checkout-grid{
        grid-template-columns:1fr;
    }

    .page-header h1{
        font-size:38px;
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
}
</style>
</head>


<body>


@include('frontend.partials.navbar')


<main class="main">


    <div class="trust">

        <span class="stars">
            ★★★★★
        </span>

        <span>
            4.7 out of 5 · Based on 83 Trustpilot reviews
        </span>

    </div>


    <div class="page-header">

        <h1>
            Review & Checkout
        </h1>

        <p>
            Review your Complete Publishing Package and proceed
            to secure payment
        </p>

    </div>



    <div class="checkout-grid">


        <div class="card">

            <div class="card-header">

                <h2>
                    Order Summary
                </h2>

            </div>


            <div class="card-body">

                <div class="order-row">

                    <div>

                        <div class="order-name">
                            {{ $package['name'] }}
                        </div>

                    </div>

                    <div class="order-price">
                        £{{ number_format($package['price']) }}
                    </div>

                </div>


                <div class="total-row">

                    <span>
                        Total
                    </span>

                    <span class="total-price">
                        £{{ number_format($package['price']) }}
                    </span>

                </div>


                <div class="vat">
                    No VAT applicable
                </div>


                <div class="stripe-small">

                    <span class="stripe-dot"></span>

                    Secure checkout powered by Stripe

                </div>

            </div>

        </div>



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
                                Select Country
                            </option>

                            <option>United Kingdom</option>
                            <option>United States</option>
                            <option>Canada</option>
                            <option>Australia</option>
                            <option>Bangladesh</option>
                            <option>India</option>
                            <option>Germany</option>
                            <option>France</option>
                            <option>Spain</option>
                            <option>Other</option>

                        </select>

                    </div>


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


                    <button
                        type="submit"
                        class="pay-button"
                    >
                        Pay £{{ number_format($package['price']) }}
                    </button>


                    <div class="stripe-note">
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


                        <div class="security-box">

                            <span class="security-icon">
                                ★
                            </span>

                            4.9/5 (500+ reviews)

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

    </div>



    <div class="card next-section">

        <div class="card-body">

            <div class="next-title">
                What Happens Next?
            </div>


            <div class="next-step">

                <div class="next-number">
                    1
                </div>

                <div>

                    <h3>
                        Complete payment securely with Stripe
                    </h3>

                    <p>
                        Your payment is processed securely through Stripe.
                    </p>

                </div>

            </div>


            <div class="next-step">

                <div class="next-number">
                    2
                </div>

                <div>

                    <h3>
                        Provide your project details and any required files
                    </h3>

                    <p>
                        Submit the required information and files for your project.
                    </p>

                </div>

            </div>


            <div class="next-step">

                <div class="next-number">
                    3
                </div>

                <div>

                    <h3>
                        Our team will review and start work within 24 hours
                    </h3>

                    <p>
                        Our publishing team reviews your project and gets started.
                    </p>

                </div>

            </div>


            <div class="next-step">

                <div class="next-number">
                    4
                </div>

                <div>

                    <h3>
                        Receive your completed work and request revisions as needed
                    </h3>

                    <p>
                        Receive your completed service and request revisions when needed.
                    </p>

                </div>

            </div>

        </div>

    </div>

</main>


<footer>

    <div class="footer-inner">

        <div class="copyright">
            © 2026 HMD Publishing. All rights reserved.
        </div>

    </div>

</footer>


</body>
</html>
