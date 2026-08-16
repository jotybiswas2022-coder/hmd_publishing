<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Editing Services | HMD Publishing</title>
</head>

<body>

    @include('frontend.partials.navbar')

<!-- ================= TRUSTPILOT ================= -->

<div class="ec-trustbar">

    <span class="ec-trust-stars">
        ★★★★★
    </span>

    <strong>
        4.7 out of 5
    </strong>

    <span>
        · Based on 83 Trustpilot reviews
    </span>

</div>


<!-- ================= MAIN ================= -->

<main class="ec-checkout">


    <div class="ec-heading">

        <h1>
            Review &amp; Checkout
        </h1>

        <p>
            Review your order and proceed to secure payment
        </p>

    </div>


    <div class="ec-grid">


        <!-- ================= LEFT ================= -->

        <div>


            <!-- ORDER SUMMARY -->

            <div class="ec-card">

                <div class="ec-card-head">

                    <h2>
                        Order Summary
                    </h2>

                    <p>
                        Professional editing service
                    </p>

                </div>


                <div class="ec-card-body">


                    <div class="ec-product">

                        <div>

                            <div class="ec-product-name">
                                {{ $package['name'] }}
                            </div>

                            <span class="ec-product-type">
                                {{ $package['type'] }}
                            </span>

                        </div>

                        <div class="ec-product-price">
                            ${{ number_format($package['price']) }}
                        </div>

                    </div>


                    <div class="ec-row">

                        <span>
                            Subtotal
                        </span>

                        <strong id="subtotal">
                            ${{ number_format($package['price']) }}
                        </strong>

                    </div>


                    <div class="ec-row">

                        <span>
                            VAT
                        </span>

                        <strong>
                            $0
                        </strong>

                    </div>


                    <div class="ec-row ec-total-row">

                        <span>
                            Total
                        </span>

                        <strong id="total">
                            ${{ number_format($package['price']) }}
                        </strong>

                    </div>


                    <div class="ec-no-vat">
                        No VAT applicable
                    </div>


                    <div class="ec-stripe">

                        <div class="ec-stripe-logo">
                            S
                        </div>

                        <span>
                            Secure checkout powered by Stripe
                        </span>

                    </div>


                    <!-- ADDONS -->

                    <div class="ec-addons">

                        <div class="ec-addons-title">
                            Enhance Your Order
                        </div>

                        <div class="ec-addons-subtitle">
                            Optional add-ons to get more from
                            your professional editing
                        </div>

                        @php
                            $addonModels = \App\Models\Addon::where('service', 'Editing & Proofreading')
                                ->where('is_active', true)
                                ->orderBy('sort_order')
                                ->get();
                        @endphp

                        @forelse ($addonModels as $addon)

                            <div class="ec-addon"
                                 data-key="{{ $addon->key }}"
                                 data-price="{{ $addon->price }}"
                                 onclick="toggleAddon(this)">

                                <input
                                    type="hidden"
                                    form="checkoutForm"
                                    name="addon[{{ $addon->key }}]"
                                    value=""
                                >

                                <div class="ec-addon-left">

                                    <div class="ec-check"></div>

                                    <div>

                                        <div class="ec-addon-name">
                                            {{ $addon->name }}
                                        </div>

                                        <div class="ec-addon-description">
                                            {{ $addon->description }}
                                        </div>

                                    </div>

                                </div>

                                <div class="ec-addon-price">
                                    +${{ number_format($addon->price) }}
                                </div>

                            </div>

                        @empty

                            <p style="font-size:10px; color:#8a938e;">
                                No add-ons available at the moment.
                            </p>

                        @endforelse

                    </div>

                </div>

            </div>


            <!-- WHAT HAPPENS NEXT -->

            <div class="ec-card ec-next">

                <div class="ec-card-head">

                    <h2>
                        What Happens Next?
                    </h2>

                    <p>
                        Your editing project journey
                    </p>

                </div>

                <div class="ec-card-body">

                    <div class="ec-steps">

                        <div class="ec-step">

                            <div class="ec-step-number">
                                1
                            </div>

                            <div class="ec-step-text">

                                <strong>
                                    Complete payment securely with Stripe
                                </strong>

                                <span>
                                    Your payment is processed
                                    securely.
                                </span>

                            </div>

                        </div>

                        <div class="ec-step">

                            <div class="ec-step-number">
                                2
                            </div>

                            <div class="ec-step-text">

                                <strong>
                                    Provide your project details
                                </strong>

                                <span>
                                    Upload your manuscript and
                                    required project information.
                                </span>

                            </div>

                        </div>

                        <div class="ec-step">

                            <div class="ec-step-number">
                                3
                            </div>

                            <div class="ec-step-text">

                                <strong>
                                    Our team reviews your project
                                </strong>

                                <span>
                                    Work begins within 24 hours.
                                </span>

                            </div>

                        </div>

                        <div class="ec-step">

                            <div class="ec-step-number">
                                4
                            </div>

                            <div class="ec-step-text">

                                <strong>
                                    Receive your completed work
                                </strong>

                                <span>
                                    Receive your edited manuscript
                                    and request revisions as needed.
                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- ================= RIGHT ================= -->

        <div>


            <div class="ec-card">

                <div class="ec-card-head">

                    <h2>
                        Your Details
                    </h2>

                    <p>
                        Enter your information to continue
                    </p>

                </div>


                <div class="ec-card-body">

                    <form
                        id="checkoutForm"
                        method="GET"
                        action="{{ route('checkout.payment') }}"
                        onsubmit="submitCheckout(event)"
                    >

                        <input type="hidden" name="plan" value="{{ $package['plan'] }}">

                        <!-- Honeypot -->

                        <div class="ec-honeypot">

                            <label>
                                Website
                            </label>

                            <input
                                type="text"
                                name="website"
                                tabindex="-1"
                                autocomplete="off"
                            >

                        </div>


                        <!-- NAME -->

                        <div class="ec-form-group">

                            <label>
                                Full Name
                                <span class="ec-required">*</span>
                            </label>

                            <input
                                class="ec-input"
                                type="text"
                                placeholder="John Smith"
                                name="name"
                                required
                            >

                        </div>


                        <!-- EMAIL -->

                        <div class="ec-form-group">

                            <label>
                                Email Address
                                <span class="ec-required">*</span>
                            </label>

                            <input
                                class="ec-input"
                                type="email"
                                placeholder="john@example.com"
                                name="email"
                                required
                            >

                        </div>


                        <!-- COUNTRY -->

                        <div class="ec-form-group">

                            <label>
                                Country
                                <span class="ec-required">*</span>
                            </label>

                            <select
                                class="ec-input"
                                name="country"
                                required
                            >

                                <option value="">
                                    Select
                                </option>

                                <option>United States</option>
                                <option>United Kingdom</option>
                                <option>Canada</option>
                                <option>Australia</option>
                                <option>Bangladesh</option>
                                <option>India</option>
                                <option>Germany</option>
                                <option>France</option>
                                <option>Other</option>

                            </select>

                        </div>


                        <!-- PAYMENT -->

                        <button
                            type="submit"
                            class="ec-pay"
                            id="payButton"
                        >
                            Pay ${{ number_format($package['price']) }}
                        </button>


                        <div class="ec-payment-note">
                            You'll enter payment securely
                            on the next screen (Stripe).
                        </div>


                        <!-- SECURITY -->

                        <div class="ec-security">

                            <div class="ec-security-box">

                                <span class="ec-security-icon">
                                    🔒
                                </span>

                                Secure Checkout

                            </div>

                            <div class="ec-security-box">

                                <span class="ec-security-icon">
                                    ✓
                                </span>

                                SSL Encrypted

                            </div>

                            <div class="ec-security-box">

                                <span class="ec-security-icon">
                                    ★
                                </span>

                                4.9/5 (500+ reviews)

                            </div>

                        </div>


                        <!-- TERMS -->

                        <div class="ec-terms">

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


            <!-- TOTAL -->

            <div class="ec-bottom-total">

                <span>
                    Total
                </span>

                <strong id="bottomTotal">
                    ${{ number_format($package['price']) }}.00
                </strong>

            </div>

        </div>

    </div>

</main>


<!-- ================= FOOTER ================= -->

<footer class="ec-footer">

    <div class="ec-footer-logo">
        HMD <span>Publishing</span>
    </div>

    <p>
        Professional book publishing and editing
        services for authors.
    </p>

    <p>
        © 2026 HMD Publishing. All rights reserved.
    </p>

</footer>


    <style>
        /* ===== HMD Publishing - Editing Checkout Page ===== */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f7f7f7;
            color: #171717;
            line-height: 1.5;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* ===== TRUST ===== */
        .ec-trustbar {
            max-width: 1280px;
            margin: auto;
            padding: 17px 30px 0;
            display: flex;
            align-items: center;
            gap: 8px;
            color: #666;
            font-size: 12px;
        }

        .ec-trust-stars {
            color: #00b67a;
            font-size: 16px;
            letter-spacing: 1px;
        }

        /* ===== MAIN ===== */
        .ec-checkout {
            max-width: 1050px;
            margin: auto;
            padding: 40px 25px 75px;
        }

        .ec-heading {
            text-align: center;
            margin-bottom: 34px;
        }

        .ec-heading h1 {
            font-size: 38px;
            line-height: 1.15;
            letter-spacing: -1.5px;
            margin-bottom: 8px;
        }

        .ec-heading p {
            font-size: 14px;
            color: #777;
        }

        /* ===== GRID ===== */
        .ec-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 22px;
            align-items: start;
        }

        /* ===== CARD ===== */
        .ec-card {
            background: #fff;
            border: 1px solid #dfdfdf;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 7px 28px rgba(0,0,0,.035);
        }

        .ec-card-head {
            padding: 21px 23px;
            border-bottom: 1px solid #ededed;
        }

        .ec-card-head h2 {
            font-size: 17px;
            margin-bottom: 3px;
        }

        .ec-card-head p {
            color: #888;
            font-size: 11px;
        }

        .ec-card-body {
            padding: 23px;
        }

        /* ===== ORDER SUMMARY ===== */
        .ec-product {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            padding-bottom: 19px;
            border-bottom: 1px solid #e9e9e9;
            margin-bottom: 18px;
        }

        .ec-product-name {
            font-size: 15px;
            font-weight: 700;
        }

        .ec-product-type {
            display: block;
            margin-top: 3px;
            color: #888;
            font-size: 11px;
        }

        .ec-product-price {
            font-size: 17px;
            font-weight: 800;
        }

        .ec-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 4px 0;
        }

        .ec-row span {
            color: #555;
            font-size: 13px;
        }

        .ec-row strong {
            font-size: 14px;
        }

        .ec-total-row {
            margin-top: 10px;
            padding-top: 16px;
            border-top: 1px solid #ddd;
        }

        .ec-total-row span {
            color: #222;
            font-weight: 700;
            font-size: 15px;
        }

        .ec-total-row strong {
            font-size: 21px;
        }

        .ec-no-vat {
            text-align: right;
            color: #999;
            font-size: 10px;
            margin-top: 2px;
        }

        /* ===== STRIPE ===== */
        .ec-stripe {
            margin-top: 20px;
            padding: 12px 13px;
            background: #f6f7ff;
            border-radius: 7px;
            display: flex;
            align-items: center;
            gap: 10px;
            color: #555;
            font-size: 11px;
        }

        .ec-stripe-logo {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: #635bff;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 10px;
            font-weight: bold;
        }

        /* ===== ADDONS ===== */
        .ec-addons {
            margin-top: 25px;
        }

        .ec-addons-title {
            font-size: 15px;
            font-weight: 750;
            margin-bottom: 3px;
        }

        .ec-addons-subtitle {
            font-size: 11px;
            color: #888;
            margin-bottom: 13px;
        }

        .ec-addon {
            width: 100%;
            border: 1px solid #dedede;
            border-radius: 8px;
            padding: 13px;
            margin-bottom: 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
            cursor: pointer;
            transition: .18s ease;
        }

        .ec-addon:hover {
            border-color: #aaa;
        }

        .ec-addon.selected {
            border-color: #2563eb;
            background: #f7faff;
        }

        .ec-addon-left {
            display: flex;
            align-items: flex-start;
            gap: 11px;
        }

        .ec-check {
            width: 18px;
            height: 18px;
            border: 1px solid #bbb;
            border-radius: 4px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 11px;
            flex-shrink: 0;
            margin-top: 1px;
        }

        .ec-addon.selected .ec-check {
            background: #2563eb;
            border-color: #2563eb;
        }

        .ec-addon-name {
            font-size: 12px;
            font-weight: 700;
        }

        .ec-addon-description {
            font-size: 10px;
            color: #888;
            margin-top: 2px;
        }

        .ec-addon-price {
            font-size: 12px;
            font-weight: 800;
            white-space: nowrap;
        }

        /* ===== FORM ===== */
        .ec-form-group {
            margin-bottom: 17px;
        }

        .ec-form-group label {
            display: block;
            font-size: 12px;
            font-weight: 700;
            margin-bottom: 7px;
        }

        .ec-required {
            color: #e11d48;
        }

        .ec-input {
            width: 100%;
            height: 45px;
            border: 1px solid #d5d5d5;
            border-radius: 6px;
            outline: none;
            padding: 0 12px;
            background: #fff;
            color: #222;
            font-size: 13px;
            transition: .2s;
        }

        .ec-input:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37,99,235,.08);
        }

        .ec-input::placeholder {
            color: #aaa;
        }

        .ec-honeypot {
            position: absolute;
            left: -9999px;
        }

        /* ===== PAYMENT BUTTON ===== */
        .ec-pay {
            width: 100%;
            height: 49px;
            margin-top: 4px;
            border: 0;
            border-radius: 7px;
            background: #111;
            color: #fff;
            font-size: 14px;
            font-weight: 750;
            cursor: pointer;
            transition: .2s;
        }

        .ec-pay:hover {
            background: #2a2a2a;
            transform: translateY(-1px);
        }

        .ec-pay:active {
            transform: translateY(0);
        }

        .ec-pay.loading {
            opacity: .7;
            pointer-events: none;
        }

        /* ===== PAYMENT NOTE ===== */
        .ec-payment-note {
            text-align: center;
            color: #888;
            font-size: 10px;
            margin-top: 9px;
        }

        /* ===== SECURITY ===== */
        .ec-security {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 7px;
            margin-top: 17px;
        }

        .ec-security-box {
            border: 1px solid #e5e5e5;
            border-radius: 6px;
            text-align: center;
            padding: 9px 5px;
            color: #777;
            font-size: 9px;
        }

        .ec-security-icon {
            display: block;
            font-size: 15px;
            margin-bottom: 2px;
            color: #222;
        }

        /* ===== TERMS ===== */
        .ec-terms {
            text-align: center;
            color: #888;
            font-size: 10px;
            line-height: 1.6;
            margin-top: 15px;
        }

        .ec-terms a {
            text-decoration: underline;
        }

        /* ===== WHAT NEXT ===== */
        .ec-next {
            margin-top: 22px;
        }

        .ec-steps {
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .ec-step {
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }

        .ec-step-number {
            width: 26px;
            height: 26px;
            flex-shrink: 0;
            background: #111;
            color: #fff;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 10px;
            font-weight: 800;
        }

        .ec-step-text strong {
            display: block;
            font-size: 12px;
            margin-bottom: 2px;
        }

        .ec-step-text span {
            color: #777;
            font-size: 10px;
        }

        /* ===== BOTTOM TOTAL ===== */
        .ec-bottom-total {
            margin-top: 18px;
            background: #111;
            color: white;
            border-radius: 8px;
            padding: 14px 18px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .ec-bottom-total span {
            font-size: 12px;
        }

        .ec-bottom-total strong {
            font-size: 17px;
        }

        /* ===== FOOTER ===== */
        .ec-footer {
            background: #fff;
            border-top: 1px solid #e5e5e5;
            padding: 30px 20px;
            text-align: center;
        }

        .ec-footer-logo {
            font-size: 19px;
            font-weight: 800;
            margin-bottom: 7px;
        }

        .ec-footer-logo span {
            color: #2563eb;
        }

        .ec-footer p {
            color: #888;
            font-size: 10px;
            margin-top: 4px;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 850px) {
            .ec-grid {
                grid-template-columns: 1fr;
            }

            .ec-trustbar {
                padding-left: 18px;
                padding-right: 18px;
                justify-content: center;
            }
        }

        @media (max-width: 550px) {
            .ec-checkout {
                padding: 32px 16px 60px;
            }

            .ec-heading h1 {
                font-size: 30px;
            }

            .ec-heading p {
                font-size: 12px;
            }

            .ec-card-body,
            .ec-card-head {
                padding: 18px;
            }

            .ec-security {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <script>
        const BASE_PRICE = {{ $package['price'] }};

        function money(amount) {
            return "$" + amount.toLocaleString("en-US");
        }

        function updateTotal() {
            let total = BASE_PRICE;

            document.querySelectorAll(".ec-addon.selected").forEach(function (addon) {
                total += Number(addon.dataset.price);
            });

            const formatted = money(total);

            document.getElementById("subtotal").innerText = formatted;
            document.getElementById("total").innerText = formatted;
            document.getElementById("bottomTotal").innerText = formatted + ".00";
            document.getElementById("payButton").innerText = "Pay " + formatted;
        }

        function toggleAddon(element) {
            element.classList.toggle("selected");

            const check = element.querySelector(".ec-check");
            const input = element.querySelector('input[type="hidden"]');

            if (element.classList.contains("selected")) {
                check.innerHTML = "✓";
                input.value = "1";
            } else {
                check.innerHTML = "";
                input.value = "";
            }

            updateTotal();
        }

        function submitCheckout(event) {
            event.preventDefault();

            const form = document.getElementById("checkoutForm");
            const honeypot = form.querySelector('input[name="website"]');

            if (honeypot.value !== "") {
                return;
            }

            form.submit();
        }
    </script>

</body>
</html>
