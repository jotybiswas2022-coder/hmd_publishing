<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Ghostwriting Services | HMD Publishing</title>
</head>

<body>

    @include('frontend.partials.navbar')

<!-- =========================================
     TRUST
========================================== -->
<div class="ck-trust">

    <span class="ck-trust-stars">
        ★★★★★
    </span>

    <strong>
        4.7 out of 5
    </strong>

    <span>
        · Based on 83 Trustpilot reviews
    </span>

</div>

<!-- =========================================
     CHECKOUT PAGE
========================================== -->
<main class="ck-page">

    <!-- PAGE HEADING -->

    <div class="ck-heading">

        <h1>
            Review &amp; Checkout
        </h1>

        <p>
            Review your order and proceed to secure payment
        </p>

    </div>

    <!-- CHECKOUT GRID -->

    <div class="ck-grid">

        <!-- =============================
             LEFT SIDE
        ============================== -->

        <div>

            <!-- ORDER SUMMARY -->

            <div class="ck-card">

                <div class="ck-card-header">

                    <h2>
                        Order Summary
                    </h2>

                    <p>
                        Ghostwriting service
                    </p>

                </div>

                <div class="ck-card-body">

                    <div class="ck-summary-product">

                        <div class="ck-product-info">

                            <strong>
                                {{ $package['name'] }}
                            </strong>

                            <span>
                                Professional Ghostwriting · {{ $package['words'] }}
                            </span>

                        </div>

                        <div class="ck-product-price">
                            £{{ number_format($package['price']) }}
                        </div>

                    </div>

                    <div class="ck-total-row">

                        <span>
                            Subtotal
                        </span>

                        <strong id="subtotal">
                            £{{ number_format($package['price']) }}
                        </strong>

                    </div>

                    <div class="ck-total-row">

                        <span>
                            VAT
                        </span>

                        <strong>
                            £0
                        </strong>

                    </div>

                    <div class="ck-total-row ck-main">

                        <span>
                            Total
                        </span>

                        <strong id="total">
                            £{{ number_format($package['price']) }}
                        </strong>

                    </div>

                    <div class="ck-vat">
                        No VAT applicable
                    </div>

                    <div class="ck-stripe-note">

                        <div class="ck-stripe-icon">
                            S
                        </div>

                        <div>
                            Secure checkout powered by Stripe
                        </div>

                    </div>

                    <!-- ADDON -->

                    @php
                        $addon = \App\Models\Addon::where('service', 'Book Writing & Ghostwriting')
                            ->where('is_active', true)
                            ->orderBy('sort_order')
                            ->first();
                    @endphp

                    @if ($addon)

                    <div class="ck-addon-section">

                        <div class="ck-addon-title">
                            Enhance Your Order
                        </div>

                        <div
                            class="ck-addon"
                            id="addon"
                            onclick="toggleAddon()">

                            <input
                                type="hidden"
                                name="addon[{{ $addon->key }}]"
                                id="addonInput"
                                value=""
                            >

                            <div class="ck-addon-left">

                                <div class="ck-checkbox"
                                     id="addonCheck">

                                </div>

                                <div>

                                    <div class="ck-addon-name">

                                        {{ $addon->name }}

                                    </div>

                                    <div class="ck-addon-desc">

                                        {{ $addon->description }}

                                    </div>

                                </div>

                            </div>

                            <div class="ck-addon-price">
                                +£{{ number_format($addon->price) }}
                            </div>

                        </div>

                    </div>

                    @endif

                </div>

            </div>

            <!-- WHAT HAPPENS NEXT -->

            <div class="ck-card ck-next-card">

                <div class="ck-card-header">

                    <h2>
                        What Happens Next?
                    </h2>

                    <p>
                        Your project journey after checkout
                    </p>

                </div>

                <div class="ck-card-body">

                    <div class="ck-steps">

                        <div class="ck-step">

                            <div class="ck-step-number">
                                1
                            </div>

                            <div class="ck-step-content">

                                <strong>
                                    Complete payment securely with Stripe
                                </strong>

                                <span>
                                    You'll be redirected to secure payment.
                                </span>

                            </div>

                        </div>

                        <div class="ck-step">

                            <div class="ck-step-number">
                                2
                            </div>

                            <div class="ck-step-content">

                                <strong>
                                    Provide your project details
                                </strong>

                                <span>
                                    Complete the paid-project brief.
                                </span>

                            </div>

                        </div>

                        <div class="ck-step">

                            <div class="ck-step-number">
                                3
                            </div>

                            <div class="ck-step-content">

                                <strong>
                                    Confirm the project direction
                                </strong>

                                <span>
                                    Confirm outline, voice direction,
                                    schedule and feedback plan.
                                </span>

                            </div>

                        </div>

                        <div class="ck-step">

                            <div class="ck-step-number">
                                4
                            </div>

                            <div class="ck-step-content">

                                <strong>
                                    Begin drafting
                                </strong>

                                <span>
                                    Work begins under the written
                                    project scope.
                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- =============================
             RIGHT SIDE
        ============================== -->

        <div>

            <div class="ck-card">

                <div class="ck-card-header">

                    <h2>
                        Your Details
                    </h2>

                    <p>
                        Enter your information to continue
                    </p>

                </div>

                <div class="ck-card-body">

                    <form
                        id="checkoutForm"
                        method="GET"
                        action="{{ route('checkout.payment') }}"
                        onsubmit="processCheckout(event)"
                    >

                        <input type="hidden" name="plan" value="{{ $package['plan'] }}">
                        <input type="hidden" name="addon[ghostwords]" id="addonState" value="">

                        <!-- HONEYPOT -->

                        <div class="ck-honeypot">

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

                        <!-- FULL NAME -->

                        <div class="ck-form-group">

                            <label>
                                Full Name
                                <span class="ck-required">*</span>
                            </label>

                            <input
                                type="text"
                                class="ck-input"
                                placeholder="John Smith"
                                name="name"
                                required
                            >

                        </div>

                        <!-- EMAIL -->

                        <div class="ck-form-group">

                            <label>
                                Email Address
                                <span class="ck-required">*</span>
                            </label>

                            <input
                                type="email"
                                class="ck-input"
                                placeholder="john@example.com"
                                name="email"
                                required
                            >

                        </div>

                        <!-- COUNTRY -->

                        <div class="ck-form-group">

                            <label>
                                Country
                                <span class="ck-required">*</span>
                            </label>

                            <select
                                class="ck-input"
                                name="country"
                                required
                            >

                                <option value="">
                                    Select your country
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

                        <!-- PAYMENT BUTTON -->

                        <button
                            type="submit"
                            class="ck-pay-button"
                            id="payButton"
                        >

                            Pay £{{ number_format($package['price']) }}

                        </button>

                        <div class="ck-next-note">
                            You'll enter payment securely on the next screen (Stripe).
                        </div>

                        <!-- SECURITY -->

                        <div class="ck-security">

                            <div class="ck-security-item">
                                <span class="ck-security-icon">🔒</span>
                                Secure Checkout
                            </div>

                            <div class="ck-security-item">
                                <span class="ck-security-icon">✓</span>
                                SSL Encrypted
                            </div>

                            <div class="ck-security-item">
                                <span class="ck-security-icon">★</span>
                                4.9/5 (500+ reviews)
                            </div>

                            <div class="ck-security-item">
                                <span class="ck-security-icon">💳</span>
                                Stripe Payment
                            </div>

                        </div>

                        <!-- TERMS -->

                        <div class="ck-terms">

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

            <!-- BOTTOM TOTAL -->

            <div class="ck-bottom-total">

                <span>
                    Total
                </span>

                <strong id="bottomTotal">
                    £{{ number_format($package['price']) }}.00
                </strong>

            </div>

        </div>

    </div>

</main>

<!-- =========================================
     FOOTER
========================================== -->
<footer class="ck-footer">

    <div class="ck-footer-logo">
        HMD <span>Publishing</span>
    </div>

    <p>
        Professional book publishing services for authors.
    </p>

    <p>
        © 2026 HMD Publishing Limited.
        All rights reserved.
    </p>

</footer>

    <style>
        /* ===== HMD Publishing - Book Writing Checkout Page ===== */

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif;
            background: #f7f7f8;
            color: #171717;
            line-height: 1.5;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        button, input, select {
            font-family: inherit;
        }

        /* ===== TRUST ===== */
        .ck-trust {
            max-width: 1280px;
            margin: auto;
            padding: 19px 28px 0;
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 12px;
            color: #666;
        }

        .ck-trust-stars {
            color: #00b67a;
            font-size: 16px;
            letter-spacing: 1px;
        }

        /* ===== MAIN CHECKOUT ===== */
        .ck-page {
            max-width: 1060px;
            margin: 0 auto;
            padding: 38px 25px 80px;
        }

        /* ===== PAGE HEADING ===== */
        .ck-heading {
            text-align: center;
            margin-bottom: 35px;
        }

        .ck-heading h1 {
            margin: 0 0 8px;
            font-size: 37px;
            line-height: 1.15;
            letter-spacing: -1.4px;
        }

        .ck-heading p {
            color: #777;
            font-size: 14px;
            margin: 0;
        }

        /* ===== CHECKOUT GRID ===== */
        .ck-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 22px;
            align-items: start;
        }

        /* ===== CARD ===== */
        .ck-card {
            background: #fff;
            border: 1px solid #e1e1e1;
            border-radius: 12px;
            box-shadow: 0 7px 25px rgba(0,0,0,.04);
            overflow: hidden;
        }

        .ck-card-header {
            padding: 22px 24px;
            border-bottom: 1px solid #ededed;
        }

        .ck-card-header h2 {
            margin: 0 0 3px;
            font-size: 17px;
        }

        .ck-card-header p {
            color: #888;
            font-size: 11px;
            margin: 0;
        }

        .ck-card-body {
            padding: 24px;
        }

        /* ===== ORDER SUMMARY ===== */
        .ck-summary-product {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding-bottom: 20px;
            border-bottom: 1px solid #ededed;
            margin-bottom: 19px;
        }

        .ck-product-info strong {
            display: block;
            font-size: 15px;
            margin-bottom: 4px;
        }

        .ck-product-info span {
            color: #777;
            font-size: 12px;
        }

        .ck-product-price {
            font-size: 17px;
            font-weight: 800;
            white-space: nowrap;
        }

        .ck-total-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 4px 0;
        }

        .ck-total-row span {
            font-size: 13px;
            color: #555;
        }

        .ck-total-row strong {
            font-size: 14px;
        }

        .ck-total-row.ck-main {
            margin-top: 10px;
            padding-top: 17px;
            border-top: 1px solid #ddd;
        }

        .ck-total-row.ck-main span {
            font-size: 15px;
            font-weight: 700;
            color: #222;
        }

        .ck-total-row.ck-main strong {
            font-size: 21px;
        }

        .ck-vat {
            color: #888;
            font-size: 10px;
            text-align: right;
            margin-top: 3px;
        }

        /* ===== STRIPE NOTE ===== */
        .ck-stripe-note {
            margin-top: 20px;
            padding: 12px;
            border-radius: 7px;
            background: #f6f8ff;
            color: #4b5563;
            font-size: 11px;
            display: flex;
            align-items: center;
            gap: 9px;
        }

        .ck-stripe-icon {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: #635bff;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 10px;
            font-weight: 800;
            flex-shrink: 0;
        }

        /* ===== ADDON ===== */
        .ck-addon-section {
            margin-top: 25px;
        }

        .ck-addon-title {
            font-size: 13px;
            font-weight: 700;
            margin-bottom: 11px;
        }

        .ck-addon {
            border: 1px solid #ddd;
            border-radius: 9px;
            padding: 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            cursor: pointer;
            transition: .2s;
        }

        .ck-addon:hover {
            border-color: #aaa;
        }

        .ck-addon.active {
            border-color: #2563eb;
            background: #f8faff;
        }

        .ck-addon-left {
            display: flex;
            gap: 12px;
            align-items: flex-start;
        }

        .ck-checkbox {
            width: 19px;
            height: 19px;
            border: 1px solid #bbb;
            border-radius: 4px;
            flex-shrink: 0;
            margin-top: 2px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            font-size: 12px;
        }

        .ck-addon.active .ck-checkbox {
            background: #2563eb;
            border-color: #2563eb;
        }

        .ck-addon-name {
            font-size: 13px;
            font-weight: 700;
            margin-bottom: 2px;
        }

        .ck-addon-desc {
            color: #888;
            font-size: 10px;
        }

        .ck-addon-price {
            white-space: nowrap;
            font-size: 13px;
            font-weight: 800;
        }

        /* ===== DETAILS FORM ===== */
        .ck-form-group {
            margin-bottom: 18px;
        }

        .ck-form-group label {
            display: block;
            font-size: 12px;
            font-weight: 700;
            color: #333;
            margin-bottom: 7px;
        }

        .ck-required {
            color: #dc2626;
        }

        .ck-input {
            width: 100%;
            height: 46px;
            border: 1px solid #d5d5d5;
            border-radius: 6px;
            padding: 0 12px;
            outline: none;
            font-size: 13px;
            color: #222;
            background: #fff;
            transition: .2s;
        }

        .ck-input::placeholder {
            color: #aaa;
        }

        .ck-input:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37,99,235,.08);
        }

        select.ck-input {
            cursor: pointer;
        }

        /* ===== HONEYPOT ===== */
        .ck-honeypot {
            position: absolute;
            left: -99999px;
            width: 1px;
            height: 1px;
            opacity: 0;
            overflow: hidden;
        }

        /* ===== PAY BUTTON ===== */
        .ck-pay-button {
            width: 100%;
            height: 50px;
            border: none;
            border-radius: 7px;
            background: #111;
            color: #fff;
            font-size: 14px;
            font-weight: 700;
            cursor: pointer;
            transition: .2s;
            margin-top: 5px;
        }

        .ck-pay-button:hover {
            background: #292929;
            transform: translateY(-1px);
        }

        .ck-pay-button:active {
            transform: translateY(0);
        }

        .ck-pay-button.loading {
            opacity: .7;
            pointer-events: none;
        }

        /* ===== SECURITY ===== */
        .ck-security {
            margin-top: 16px;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 8px;
        }

        .ck-security-item {
            border: 1px solid #e6e6e6;
            border-radius: 6px;
            padding: 10px;
            text-align: center;
            color: #777;
            font-size: 10px;
        }

        .ck-security-icon {
            display: block;
            color: #222;
            font-size: 15px;
            margin-bottom: 2px;
        }

        /* ===== TERMS ===== */
        .ck-terms {
            margin-top: 17px;
            color: #888;
            font-size: 10px;
            line-height: 1.6;
            text-align: center;
        }

        .ck-terms a {
            text-decoration: underline;
            color: #555;
        }

        /* ===== WHAT HAPPENS NEXT ===== */
        .ck-next-card {
            margin-top: 24px;
        }

        .ck-steps {
            display: grid;
            gap: 11px;
        }

        .ck-step {
            display: flex;
            gap: 12px;
            align-items: flex-start;
        }

        .ck-step-number {
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background: #111;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            font-size: 10px;
            font-weight: 800;
        }

        .ck-step-content strong {
            display: block;
            font-size: 12px;
            margin-bottom: 2px;
        }

        .ck-step-content span {
            display: block;
            color: #777;
            font-size: 10px;
            line-height: 1.5;
        }

        /* ===== BOTTOM TOTAL ===== */
        .ck-bottom-total {
            max-width: 500px;
            margin: 25px auto 0;
            background: #111;
            color: #fff;
            padding: 15px 20px;
            border-radius: 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 12px;
        }

        .ck-bottom-total strong {
            font-size: 17px;
        }

        /* ===== NEXT NOTE ===== */
        .ck-next-note {
            margin: 12px 0 0;
            text-align: center;
            color: #888;
            font-size: 11px;
            line-height: 1.5;
        }

        /* ===== FOOTER ===== */
        .ck-footer {
            background: #fff;
            border-top: 1px solid #e5e5e5;
            padding: 30px 25px;
            text-align: center;
        }

        .ck-footer-logo {
            font-size: 18px;
            font-weight: 800;
            margin-bottom: 8px;
        }

        .ck-footer-logo span {
            color: #2563eb;
        }

        .ck-footer p {
            color: #888;
            font-size: 10px;
            line-height: 1.7;
            margin: 0 0 4px;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 850px) {
            .ck-grid {
                grid-template-columns: 1fr;
            }

            .ck-page {
                padding-left: 18px;
                padding-right: 18px;
            }

            .ck-trust {
                justify-content: center;
            }
        }

        @media (max-width: 550px) {
            .ck-heading h1 {
                font-size: 30px;
            }

            .ck-heading p {
                font-size: 12px;
            }

            .ck-card-body,
            .ck-card-header {
                padding: 19px;
            }

            .ck-security {
                grid-template-columns: 1fr;
            }

            .ck-bottom-total {
                margin-left: 0;
                margin-right: 0;
            }
        }
    </style>

    <script>
        const BASE_PRICE = {{ $package['price'] }};
        const ADDON_PRICE = {{ $addon->price ?? 0 }};

        let addonSelected = false;

        function money(amount) {
            return "£" + amount.toLocaleString("en-US");
        }

        function updateTotal() {
            let total = BASE_PRICE;

            if (addonSelected) {
                total += ADDON_PRICE;
            }

            document.getElementById("subtotal").innerText = money(total);
            document.getElementById("total").innerText = money(total);
            document.getElementById("bottomTotal").innerText = money(total) + ".00";
            document.getElementById("payButton").innerText = "Pay " + money(total);
        }

        function toggleAddon() {
            addonSelected = !addonSelected;

            const addon = document.getElementById("addon");
            const checkbox = document.getElementById("addonCheck");
            const addonInput = document.getElementById("addonInput");

            if (addonSelected) {
                addon.classList.add("active");
                checkbox.innerText = "✓";
                addonInput.value = "1";
            } else {
                addon.classList.remove("active");
                checkbox.innerText = "";
                addonInput.value = "";
            }

            updateTotal();
        }

        function processCheckout(event) {
            event.preventDefault();

            const form = document.getElementById("checkoutForm");
            const honeypot = form.querySelector('input[name="website"]');

            if (honeypot.value !== "") {
                return;
            }

            const addonInput = document.getElementById("addonInput");
            const addonState = document.getElementById("addonState");

            if (addonInput && addonInput.value === "1") {
                addonState.value = "1";
            }

            form.submit();
        }
    </script>

</body>
</html>