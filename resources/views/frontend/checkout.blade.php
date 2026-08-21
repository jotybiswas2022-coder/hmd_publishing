<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review & Checkout | HMD Publishing</title>
</head>

@php
    $planModels = \App\Models\ServicePlan::where('is_active', true)->orderBy('sort_order')->get();
    $addons = \App\Models\ServiceAddon::where('is_active', true)->orderBy('sort_order')->get();

    $planId = request('plan');
    $selected = $planModels->find($planId) ?? $planModels->first();

    $plan = [
        'name'  => $selected->name,
        'price' => $selected->price,
        'desc'  => $selected->description,
        'badge' => $selected->badge,
    ];

    $planName  = $plan['name'];
    $planPrice = number_format($plan['price']);
@endphp

<body style="
    margin:0;
    padding:0;
    font-family:Arial, Helvetica, sans-serif;
    color:#111827;
    background:#ffffff;
">

@include('frontend.partials.navbar')


<!-- =========================================================
TRUSTPILOT
========================================================= -->

<div style="
    max-width:1200px;
    margin:auto;
    padding:25px 5% 0;
">

    <div style="
        display:flex;
        justify-content:center;
        align-items:center;
        gap:9px;
        color:#6b7280;
        font-size:13px;
        flex-wrap:wrap;
    ">

        <span style="
            color:#00b67a;
            font-size:17px;
            letter-spacing:1px;
        ">
            ★★★★★
        </span>

        <strong style="color:#111827;">
            4.7 out of 5
        </strong>

        <span>
            · Based on 83 Trustpilot reviews
        </span>

    </div>

</div>


<!-- =========================================================
MAIN CHECKOUT AREA
========================================================= -->

<main style="
    background:#f8fafc;
    padding:55px 5% 80px;
">

    <div style="
        max-width:1100px;
        margin:auto;
    ">


        <!-- TITLE -->

        <div style="
            text-align:center;
            margin-bottom:45px;
        ">

            <div style="
                display:inline-block;
                background:#eff6ff;
                color:#2563eb;
                padding:7px 13px;
                border-radius:50px;
                font-size:11px;
                font-weight:800;
                text-transform:uppercase;
                letter-spacing:1px;
                margin-bottom:14px;
            ">
                Secure Checkout
            </div>


            <h1 style="
                margin:0 0 10px;
                font-size:46px;
                line-height:1.05;
                letter-spacing:-2px;
            ">
                Review & Checkout
            </h1>


            <p style="
                margin:0;
                color:#6b7280;
                font-size:16px;
            ">
                Review your order and proceed to secure payment
            </p>

        </div>


        <!-- =====================================================
        CHECKOUT GRID
        ===================================================== -->

        <form
            method="GET"
            action="{{ route('checkout.payment') }}"
            id="checkout-form"
        >

        <input type="hidden" name="plan" value="{{ $selected->id }}">

        <div style="
            display:grid;
            grid-template-columns:1.15fr 0.85fr;
            gap:25px;
            align-items:start;
        ">


            <!-- =================================================
            LEFT COLUMN
            ================================================= -->

            <div>


                <!-- ORDER SUMMARY -->

                <div style="
                    background:#ffffff;
                    border:1px solid #e5e7eb;
                    border-radius:14px;
                    padding:28px;
                    margin-bottom:20px;
                    box-shadow:0 5px 20px rgba(17,24,39,0.035);
                ">

                    <div style="
                        display:flex;
                        justify-content:space-between;
                        align-items:center;
                        margin-bottom:22px;
                    ">

                        <h2 style="
                            margin:0;
                            font-size:21px;
                            letter-spacing:-0.5px;
                        ">
                            Order Summary
                        </h2>


                        <span style="
                            background:#eff6ff;
                            color:#2563eb;
                            padding:5px 9px;
                            border-radius:5px;
                            font-size:10px;
                            font-weight:800;
                        ">
                            {{ $plan['badge'] }}
                        </span>

                    </div>


                    <div style="
                        display:flex;
                        justify-content:space-between;
                        align-items:center;
                        padding-bottom:18px;
                        border-bottom:1px solid #e5e7eb;
                    ">

                        <div>

                            <div style="
                                font-size:16px;
                                font-weight:800;
                            ">
                                {{ $planName }}
                            </div>

                            <div style="
                                margin-top:5px;
                                color:#6b7280;
                                font-size:12px;
                            ">
                                {{ $plan['desc'] }}
                            </div>

                        </div>


                        <div style="
                            font-size:20px;
                            font-weight:800;
                        ">
                            £{{ $planPrice }}
                        </div>

                    </div>


                    <div style="
                        display:flex;
                        justify-content:space-between;
                        padding-top:18px;
                        font-size:17px;
                        font-weight:800;
                    ">

                        <span>
                            Total
                        </span>

                        <span>
                            £{{ $planPrice }}
                        </span>

                    </div>


                    <div style="
                        margin-top:10px;
                        color:#6b7280;
                        font-size:12px;
                    ">
                        No VAT applicable
                    </div>


                    <div style="
                        margin-top:18px;
                        background:#f8fafc;
                        border-radius:8px;
                        padding:12px 14px;
                        color:#6b7280;
                        font-size:12px;
                        text-align:center;
                    ">
                        🔒 Secure checkout powered by Stripe
                    </div>

                </div>


                <!-- =================================================
                ADD ONS
                ================================================= -->

                <div style="
                    background:#ffffff;
                    border:1px solid #e5e7eb;
                    border-radius:14px;
                    padding:28px;
                    box-shadow:0 5px 20px rgba(17,24,39,0.035);
                ">

                    <h2 style="
                        margin:0 0 7px;
                        font-size:21px;
                    ">
                        Enhance Your Order
                    </h2>


                    <p style="
                        margin:0 0 22px;
                        color:#6b7280;
                        font-size:13px;
                    ">
                        Optional add-ons to get more from your complete
                        publishing package
                    </p>


                    <!-- ADD-ONS FROM DATABASE -->

@forelse ($addons as $addon)

    <label style="
        display:flex;
        justify-content:space-between;
        align-items:center;
        gap:15px;
        border:1px solid #e5e7eb;
        border-radius:10px;
        padding:15px;
        margin-bottom:10px;
        cursor:pointer;
    ">

        <div style="
            display:flex;
            gap:12px;
            align-items:flex-start;
        ">

            <input type="checkbox"
                   name="addon[{{ $addon->id }}]"
                   value="1"
                   @checked(request('addon.' . $addon->id) === '1')
                   style="
                        width:17px;
                        height:17px;
                        margin-top:3px;
                   ">

            <div>

                <div style="
                    font-weight:700;
                    font-size:14px;
                ">
                    {{ $addon->name }}
                </div>

                <div style="
                    color:#6b7280;
                    font-size:12px;
                    margin-top:3px;
                ">
                    {{ $addon->description }}
                </div>

            </div>

        </div>

        <strong style="
            white-space:nowrap;
            font-size:14px;
        ">
            +${{ number_format($addon->price) }}
        </strong>

    </label>

@empty

    <div style="
        color:#6b7280;
        font-size:13px;
        padding:10px 0;
    ">
        No add-ons are available right now.
    </div>

@endforelse


                </div>

            </div>


            <!-- =================================================
            RIGHT COLUMN
            ================================================= -->

            <div style="
                position:sticky;
                top:25px;
            ">


                <!-- CUSTOMER DETAILS -->

                <div style="
                    background:#ffffff;
                    border:1px solid #e5e7eb;
                    border-radius:14px;
                    padding:28px;
                    box-shadow:0 5px 20px rgba(17,24,39,0.05);
                ">

                    <h2 style="
                        margin:0 0 22px;
                        font-size:21px;
                    ">
                        Your Details
                    </h2>


                    <!-- NAME -->

                    <label style="
                        display:block;
                        margin-bottom:16px;
                    ">

                        <span style="
                            display:block;
                            margin-bottom:7px;
                            font-size:13px;
                            font-weight:700;
                        ">
                            Full Name *
                        </span>

                        <input
                            type="text"
                            name="name"
                            placeholder="John Smith"
                            required
                            style="
                                width:100%;
                                box-sizing:border-box;
                                padding:13px 14px;
                                border:1px solid #d1d5db;
                                border-radius:7px;
                                font-size:14px;
                                outline:none;
                            "
                        >

                    </label>


                    <!-- EMAIL -->

                    <label style="
                        display:block;
                        margin-bottom:16px;
                    ">

                        <span style="
                            display:block;
                            margin-bottom:7px;
                            font-size:13px;
                            font-weight:700;
                        ">
                            Email Address *
                        </span>

                        <input
                            type="email"
                            name="email"
                            placeholder="john@example.com"
                            required
                            style="
                                width:100%;
                                box-sizing:border-box;
                                padding:13px 14px;
                                border:1px solid #d1d5db;
                                border-radius:7px;
                                font-size:14px;
                                outline:none;
                            "
                        >

                    </label>


                    <!-- COUNTRY -->

                    <label style="
                        display:block;
                        margin-bottom:16px;
                    ">

                        <span style="
                            display:block;
                            margin-bottom:7px;
                            font-size:13px;
                            font-weight:700;
                        ">
                            Country *
                        </span>

                        <select name="country" style="
                            width:100%;
                            box-sizing:border-box;
                            padding:13px 14px;
                            border:1px solid #d1d5db;
                            border-radius:7px;
                            font-size:14px;
                            background:#ffffff;
                        ">

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

                    </label>


                    <!-- WEBSITE -->

                    <label style="
                        display:block;
                        margin-bottom:22px;
                    ">

                        <span style="
                            display:block;
                            margin-bottom:7px;
                            font-size:13px;
                            font-weight:700;
                        ">
                            Website
                            <span style="
                                font-weight:400;
                                color:#9ca3af;
                            ">
                                (leave this empty)
                            </span>
                        </span>

                        <input
                            type="url"
                            name="website"
                            placeholder=""
                            style="
                                width:100%;
                                box-sizing:border-box;
                                padding:13px 14px;
                                border:1px solid #d1d5db;
                                border-radius:7px;
                                font-size:14px;
                                outline:none;
                            "
                        >

                    </label>


                    <!-- PAY BUTTON -->

                    <button
                        type="submit"
                        style="
                            width:100%;
                            border:none;
                            background:#111827;
                            color:#ffffff;
                            padding:16px 20px;
                            border-radius:8px;
                            font-size:15px;
                            font-weight:800;
                            cursor:pointer;
                            transition:all .2s ease;
                        "
                        onmouseover="
                            this.style.background='#2563eb';
                            this.style.transform='translateY(-1px)';
                        "
                        onmouseout="
                            this.style.background='#111827';
                            this.style.transform='translateY(0)';
                        "
                    >
                        Pay £{{ $planPrice }}
                    </button>


                    <p style="
                        margin:12px 0 0;
                        text-align:center;
                        color:#6b7280;
                        font-size:11px;
                        line-height:1.5;
                    ">
                        You'll enter payment securely on the next screen
                        (Stripe).
                    </p>


                    <!-- SECURITY -->

                    <div style="
                        display:flex;
                        justify-content:center;
                        gap:15px;
                        margin-top:22px;
                        padding-top:18px;
                        border-top:1px solid #e5e7eb;
                        flex-wrap:wrap;
                    ">

                        <span style="
                            color:#374151;
                            font-size:11px;
                        ">
                            🔒 Secure Checkout
                        </span>

                        <span style="
                            color:#374151;
                            font-size:11px;
                        ">
                            🛡 SSL Encrypted
                        </span>

                    </div>


                    <div style="
                        text-align:center;
                        margin-top:12px;
                        color:#6b7280;
                        font-size:11px;
                    ">
                        4.9/5 (500+ reviews)
                    </div>


                    <!-- TERMS -->

                    <div style="
                        margin-top:18px;
                        color:#6b7280;
                        font-size:11px;
                        text-align:center;
                        line-height:1.6;
                    ">

                        By proceeding, you agree to our

                        <a href="#"
                           style="
                                color:#2563eb;
                                text-decoration:none;
                           ">
                            Terms
                        </a>

                        and

                        <a href="#"
                           style="
                                color:#2563eb;
                                text-decoration:none;
                           ">
                            Refund Policy
                        </a>

                    </div>

                </div>


                <!-- =================================================
                WHAT HAPPENS NEXT
                ================================================= -->

                <div style="
                    background:#ffffff;
                    border:1px solid #e5e7eb;
                    border-radius:14px;
                    padding:25px;
                    margin-top:18px;
                ">

                    <h3 style="
                        margin:0 0 20px;
                        font-size:18px;
                    ">
                        What Happens Next?
                    </h3>


                    <!-- STEP 1 -->

                    <div style="
                        display:flex;
                        gap:13px;
                        margin-bottom:18px;
                    ">

                        <div style="
                            width:28px;
                            height:28px;
                            min-width:28px;
                            border-radius:50%;
                            background:#111827;
                            color:#ffffff;
                            display:flex;
                            align-items:center;
                            justify-content:center;
                            font-size:12px;
                            font-weight:800;
                        ">
                            1
                        </div>

                        <div>

                            <div style="
                                font-size:13px;
                                font-weight:800;
                            ">
                                Complete payment securely with Stripe
                            </div>

                        </div>

                    </div>


                    <!-- STEP 2 -->

                    <div style="
                        display:flex;
                        gap:13px;
                        margin-bottom:18px;
                    ">

                        <div style="
                            width:28px;
                            height:28px;
                            min-width:28px;
                            border-radius:50%;
                            background:#111827;
                            color:#ffffff;
                            display:flex;
                            align-items:center;
                            justify-content:center;
                            font-size:12px;
                            font-weight:800;
                        ">
                            2
                        </div>

                        <div>

                            <div style="
                                font-size:13px;
                                font-weight:800;
                            ">
                                Provide your project details and any required files
                            </div>

                        </div>

                    </div>


                    <!-- STEP 3 -->

                    <div style="
                        display:flex;
                        gap:13px;
                        margin-bottom:18px;
                    ">

                        <div style="
                            width:28px;
                            height:28px;
                            min-width:28px;
                            border-radius:50%;
                            background:#111827;
                            color:#ffffff;
                            display:flex;
                            align-items:center;
                            justify-content:center;
                            font-size:12px;
                            font-weight:800;
                        ">
                            3
                        </div>

                        <div>

                            <div style="
                                font-size:13px;
                                font-weight:800;
                            ">
                                Our team will review and start work within 24 hours
                            </div>

                        </div>

                    </div>


                    <!-- STEP 4 -->

                    <div style="
                        display:flex;
                        gap:13px;
                    ">

                        <div style="
                            width:28px;
                            height:28px;
                            min-width:28px;
                            border-radius:50%;
                            background:#111827;
                            color:#ffffff;
                            display:flex;
                            align-items:center;
                            justify-content:center;
                            font-size:12px;
                            font-weight:800;
                        ">
                            4
                        </div>

                        <div>

                            <div style="
                                font-size:13px;
                                font-weight:800;
                            ">
                                Receive your completed work and request revisions as needed
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        </form>

    </div>

</main>


<!-- =========================================================
TRUSTED BY AUTHORS
========================================================= -->

<section style="
    background:#ffffff;
    padding:75px 5%;
">

    <div style="
        max-width:1050px;
        margin:auto;
        text-align:center;
    ">

        <h2 style="
            margin:0 0 8px;
            font-size:34px;
            letter-spacing:-1px;
        ">
            Trusted by Authors Worldwide
        </h2>

        <div style="
            color:#6b7280;
            font-size:14px;
            margin-bottom:35px;
        ">
            4.9/5 from 500+ reviews
        </div>


        <div style="
            display:grid;
            grid-template-columns:repeat(3,1fr);
            gap:18px;
            text-align:left;
        ">


            <!-- REVIEW 1 -->

            <div style="
                border:1px solid #e5e7eb;
                border-radius:13px;
                padding:25px;
            ">

                <div style="
                    color:#f59e0b;
                    letter-spacing:2px;
                    margin-bottom:15px;
                ">
                    ★★★★★
                </div>

                <p style="
                    margin:0 0 20px;
                    color:#4b5563;
                    font-size:14px;
                    line-height:1.7;
                ">
                    "HMD Publishing transformed my manuscript.
                    The formatting was flawless and the turnaround
                    was incredibly fast!"
                </p>

                <div style="
                    display:flex;
                    align-items:center;
                    gap:10px;
                ">

                    <div style="
                        width:35px;
                        height:35px;
                        border-radius:50%;
                        background:#111827;
                        color:#ffffff;
                        display:flex;
                        align-items:center;
                        justify-content:center;
                        font-weight:800;
                        font-size:13px;
                    ">
                        J
                    </div>

                    <div>

                        <div style="
                            font-size:13px;
                            font-weight:800;
                        ">
                            Jaclyn Bales
                        </div>

                        <div style="
                            font-size:11px;
                            color:#6b7280;
                        ">
                            Author of Plain Jane
                        </div>

                    </div>

                </div>

            </div>


            <!-- REVIEW 2 -->

            <div style="
                border:1px solid #e5e7eb;
                border-radius:13px;
                padding:25px;
            ">

                <div style="
                    color:#f59e0b;
                    letter-spacing:2px;
                    margin-bottom:15px;
                ">
                    ★★★★★
                </div>

                <p style="
                    margin:0 0 20px;
                    color:#4b5563;
                    font-size:14px;
                    line-height:1.7;
                ">
                    "Professional editing that elevated my book
                    to bestseller quality. Worth every penny!"
                </p>

                <div style="
                    display:flex;
                    align-items:center;
                    gap:10px;
                ">

                    <div style="
                        width:35px;
                        height:35px;
                        border-radius:50%;
                        background:#111827;
                        color:#ffffff;
                        display:flex;
                        align-items:center;
                        justify-content:center;
                        font-weight:800;
                        font-size:13px;
                    ">
                        J
                    </div>

                    <div>

                        <div style="
                            font-size:13px;
                            font-weight:800;
                        ">
                            Josh Felts
                        </div>

                        <div style="
                            font-size:11px;
                            color:#6b7280;
                        ">
                            Author of The Great Reset
                        </div>

                    </div>

                </div>

            </div>


            <!-- REVIEW 3 -->

            <div style="
                border:1px solid #e5e7eb;
                border-radius:13px;
                padding:25px;
            ">

                <div style="
                    color:#f59e0b;
                    letter-spacing:2px;
                    margin-bottom:15px;
                ">
                    ★★★★★
                </div>

                <p style="
                    margin:0 0 20px;
                    color:#4b5563;
                    font-size:14px;
                    line-height:1.7;
                ">
                    "The cover design exceeded my expectations.
                    My book stands out on Amazon now!"
                </p>

                <div style="
                    display:flex;
                    align-items:center;
                    gap:10px;
                ">

                    <div style="
                        width:35px;
                        height:35px;
                        border-radius:50%;
                        background:#111827;
                        color:#ffffff;
                        display:flex;
                        align-items:center;
                        justify-content:center;
                        font-weight:800;
                        font-size:13px;
                    ">
                        D
                    </div>

                    <div>

                        <div style="
                            font-size:13px;
                            font-weight:800;
                        ">
                            Dean Moss
                        </div>

                        <div style="
                            font-size:11px;
                            color:#6b7280;
                        ">
                            Author of The Black Accords: Emergence
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
FINAL TOTAL CTA
========================================================= -->

<section style="
    padding:0 5% 70px;
">

    <div style="
        max-width:1100px;
        margin:auto;
        background:#111827;
        border-radius:16px;
        padding:30px 35px;
        display:flex;
        justify-content:space-between;
        align-items:center;
        gap:20px;
        color:#ffffff;
        flex-wrap:wrap;
    ">

        <div>

            <div style="
                color:#9ca3af;
                font-size:12px;
                margin-bottom:5px;
            ">
                Your selected package
            </div>

            <div style="
                font-size:20px;
                font-weight:800;
            ">
                {{ $planName }}
            </div>

        </div>


        <div style="
            text-align:right;
        ">

            <div style="
                color:#9ca3af;
                font-size:12px;
            ">
                Total
            </div>

            <div style="
                font-size:30px;
                font-weight:800;
            ">
                £{{ $planPrice }}.00
            </div>

        </div>


        <button
            type="button"
            onclick="document.getElementById('checkout-form').submit()"
            style="
                border:0;
                background:#ffffff;
                color:#111827;
                padding:14px 24px;
                border-radius:8px;
                font-size:14px;
                font-weight:800;
                cursor:pointer;
            "
        >
            Pay £{{ $planPrice }}
        </button>

    </div>

</section>


<!-- =========================================================
FOOTER
========================================================= -->

<footer style="
    background:#f8fafc;
    border-top:1px solid #e5e7eb;
    padding:55px 5% 25px;
">

    <div style="
        max-width:1200px;
        margin:auto;
    ">

        <div style="
            display:grid;
            grid-template-columns:2fr 1fr 1fr 1fr;
            gap:40px;
            margin-bottom:40px;
        ">


            <!-- BRAND -->

            <div>

                <a href="https://hmdpublishing.com"
                   style="
                        text-decoration:none;
                        color:#111827;
                        font-size:24px;
                        font-weight:800;
                   ">
                    HMD
                    <span style="color:#2563eb;">
                        Publishing
                    </span>
                </a>


                <p style="
                    max-width:350px;
                    color:#6b7280;
                    font-size:13px;
                    line-height:1.7;
                    margin-top:16px;
                ">
                    Professional book publishing services.
                    10,000+ books published across 47 countries since 2015.
                </p>


                <p style="
                    color:#6b7280;
                    font-size:13px;
                ">
                    2 Castle Meadow Rd, Nottingham NG2 1AJ
                </p>

            </div>


            <!-- SERVICES -->

            <div>

                <h4 style="margin:0 0 15px;">
                    Services
                </h4>

                <a href="https://hmdpublishing.com/services/editing"
                   style="
                        display:block;
                        text-decoration:none;
                        color:#6b7280;
                        font-size:13px;
                        margin:8px 0;
                   ">
                    Editing
                </a>

                <a href="https://hmdpublishing.com/services/book-cover-design"
                   style="
                        display:block;
                        text-decoration:none;
                        color:#6b7280;
                        font-size:13px;
                        margin:8px 0;
                   ">
                    Cover Design
                </a>

                <a href="https://hmdpublishing.com/services/book-formatting"
                   style="
                        display:block;
                        text-decoration:none;
                        color:#6b7280;
                        font-size:13px;
                        margin:8px 0;
                   ">
                    Book Formatting
                </a>

                <a href="https://hmdpublishing.com/services/publishing"
                   style="
                        display:block;
                        text-decoration:none;
                        color:#6b7280;
                        font-size:13px;
                        margin:8px 0;
                   ">
                    Publishing
                </a>

            </div>


            <!-- COMPANY -->

            <div>

                <h4 style="margin:0 0 15px;">
                    Company
                </h4>

                <a href="https://hmdpublishing.com/about"
                   style="
                        display:block;
                        color:#6b7280;
                        text-decoration:none;
                        font-size:13px;
                        margin:8px 0;
                   ">
                    About
                </a>

                <a href="https://hmdpublishing.com/portfolio"
                   style="
                        display:block;
                        color:#6b7280;
                        text-decoration:none;
                        font-size:13px;
                        margin:8px 0;
                   ">
                    Portfolio
                </a>

                <a href="https://hmdpublishing.com/blog"
                   style="
                        display:block;
                        color:#6b7280;
                        text-decoration:none;
                        font-size:13px;
                        margin:8px 0;
                   ">
                    Blog
                </a>

                <a href="https://hmdpublishing.com/contact"
                   style="
                        display:block;
                        color:#6b7280;
                        text-decoration:none;
                        font-size:13px;
                        margin:8px 0;
                   ">
                    Contact
                </a>

            </div>


            <!-- CONTACT -->

            <div>

                <h4 style="margin:0 0 15px;">
                    Contact
                </h4>

                <div style="
                    color:#6b7280;
                    font-size:13px;
                    line-height:1.8;
                ">

                    info@hmdpublishing.com<br>

                    UK +44 7888 862764<br>

                    US +1 888 832 8969

                </div>

            </div>

        </div>


        <!-- FOOTER BOTTOM -->

        <div style="
            border-top:1px solid #e5e7eb;
            padding-top:20px;
            display:flex;
            justify-content:space-between;
            gap:15px;
            flex-wrap:wrap;
            color:#6b7280;
            font-size:11px;
        ">

            <div>
                © 2026 HMD Publishing Limited. All rights reserved.
            </div>

            <div>
                You keep 100% of your rights and royalties — always.
            </div>

        </div>

    </div>

</footer>


<!-- =========================================================
RESPONSIVE CSS
========================================================= -->

<style>

@media (max-width:900px){

    nav{
        display:none !important;
    }

    [style*="grid-template-columns:1.15fr 0.85fr"]{
        grid-template-columns:1fr !important;
    }

    [style*="grid-template-columns:repeat(3,1fr)"]{
        grid-template-columns:1fr 1fr !important;
    }

    [style*="grid-template-columns:2fr 1fr 1fr 1fr"]{
        grid-template-columns:1fr 1fr !important;
    }

    div[style*="position:sticky"]{
        position:static !important;
    }

}


@media (max-width:600px){

    main{
        padding-left:18px !important;
        padding-right:18px !important;
    }

    h1{
        font-size:38px !important;
        letter-spacing:-1.5px !important;
    }

    [style*="grid-template-columns:repeat(3,1fr)"],
    [style*="grid-template-columns:1fr 1fr"]{
        grid-template-columns:1fr !important;
    }

    [style*="grid-template-columns:2fr 1fr 1fr 1fr"]{
        grid-template-columns:1fr !important;
    }

    footer{
        padding-left:20px !important;
        padding-right:20px !important;
    }

}

</style>

</body>
</html>
