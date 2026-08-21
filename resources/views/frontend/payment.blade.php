<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Secure Checkout | HMD Publishing</title>

@php
    $planModels = \App\Models\ServicePlan::where('is_active', true)->orderBy('sort_order')->get();

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

    $currency = '£';
    $currencyCode = 'GBP';

    $customerName  = trim(request('name', ''));
    $nameParts     = preg_split('/\s+/', $customerName);
    $firstName     = $nameParts[0] ?? '';
    $lastName      = count($nameParts) > 1 ? $nameParts[count($nameParts) - 1] : '';
    $customerEmail = request('email', '');
    $customerCountry = request('country', '');

    $addonModels = \App\Models\ServiceAddon::where('is_active', true)->orderBy('sort_order')->get();
    $addons = $addonModels->mapWithKeys(fn ($addon) => [
        $addon->id => ['name' => $addon->name, 'price' => $addon->price],
    ])->all();

    $selectedAddons = [];
    foreach (array_keys($addons) as $addonId) {
        if (request("addon.$addonId") === '1') {
            $selectedAddons[$addonId] = $addons[$addonId];
        }
    }
    $addonTotal = array_sum(array_column($selectedAddons, 'price'));
    $grandTotal = $plan['price'] + $addonTotal;
    $grandTotalPrice = number_format($grandTotal);
@endphp

<style>
*{
    box-sizing:border-box;
}

body{
    margin:0;
    font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,
    Helvetica,Arial,sans-serif;
    background:#ffffff;
    color:#30313d;
}

.checkout-page{
    min-height:100vh;
    display:flex;
    justify-content:center;
}

.checkout-wrapper{
    width:100%;
    max-width:1100px;
    min-height:100vh;
    display:grid;
    grid-template-columns:45% 55%;
}


/* =========================================
   LEFT SIDE
========================================= */

.order-side{
    background:#f7f7f9;
    padding:70px 55px;
    border-right:1px solid #e6e6e8;
}

.order-inner{
    max-width:400px;
    margin-left:auto;
    margin-right:35px;
}

.logo{
    display:flex;
    align-items:center;
    gap:10px;
    margin-bottom:55px;
}

.logo-icon{
    width:36px;
    height:36px;
    border-radius:8px;
    background:#635bff;
    color:#fff;
    display:flex;
    align-items:center;
    justify-content:center;
    font-weight:800;
    font-size:18px;
}

.logo-text{
    font-size:19px;
    font-weight:700;
    color:#1d1d1f;
}

.small-label{
    font-size:13px;
    color:#6b6f7b;
    margin-bottom:8px;
}

.product-name{
    font-size:18px;
    font-weight:600;
    margin-bottom:8px;
    color:#25262b;
}

.price{
    font-size:36px;
    line-height:1;
    font-weight:650;
    color:#202124;
    margin-bottom:30px;
}

.price span{
    font-size:14px;
    font-weight:400;
    color:#6b6f7b;
}

.order-box{
    border-top:1px solid #dedee2;
    padding-top:22px;
}

.order-row{
    display:flex;
    justify-content:space-between;
    gap:20px;
    margin-bottom:15px;
    font-size:14px;
}

.order-row span:first-child{
    color:#5f626b;
}

.order-row span:last-child{
    color:#30313d;
    font-weight:500;
}

.total-row{
    border-top:1px solid #dedee2;
    margin-top:20px;
    padding-top:20px;
    display:flex;
    justify-content:space-between;
    font-size:16px;
    font-weight:650;
}

.secure-note{
    margin-top:35px;
    padding:14px;
    border-radius:8px;
    background:#ffffff;
    border:1px solid #e2e2e6;
    color:#686b75;
    font-size:12px;
    line-height:1.5;
}

.powered{
    margin-top:45px;
    color:#8a8d96;
    font-size:11px;
}


/* =========================================
   RIGHT SIDE
========================================= */

.payment-side{
    padding:70px 55px;
    background:#ffffff;
}

.payment-inner{
    max-width:470px;
    margin-left:35px;
}

.payment-title{
    font-size:25px;
    font-weight:650;
    margin:0 0 30px;
    color:#25262b;
}

.section-title{
    font-size:13px;
    font-weight:600;
    margin-bottom:9px;
    color:#30313d;
}


/* INPUT */

.input-group{
    margin-bottom:20px;
}

.input{
    width:100%;
    height:48px;
    border:1px solid #c9cad0;
    border-radius:6px;
    padding:0 13px;
    outline:none;
    font-size:15px;
    color:#30313d;
    background:#ffffff;
    transition:.15s;
}

.input:focus{
    border-color:#635bff;
    box-shadow:0 0 0 1px #635bff;
}

.input::placeholder{
    color:#9a9ca4;
}


/* CARD */

.card-wrapper{
    border:1px solid #c9cad0;
    border-radius:6px;
    overflow:hidden;
    transition:.15s;
}

.card-wrapper:focus-within{
    border-color:#635bff;
    box-shadow:0 0 0 1px #635bff;
}

.card-main{
    height:48px;
    display:flex;
    align-items:center;
    padding:0 13px;
}

.card-main input{
    border:0;
    outline:0;
    width:100%;
    font-size:15px;
}

.card-main input::placeholder{
    color:#9a9ca4;
}

.card-icon{
    font-size:18px;
    margin-right:9px;
    color:#62646d;
}

.card-bottom{
    display:grid;
    grid-template-columns:1fr 1fr;
    border-top:1px solid #d7d7db;
}

.card-bottom input{
    height:46px;
    border:0;
    outline:0;
    padding:0 13px;
    font-size:14px;
}

.card-bottom input:first-child{
    border-right:1px solid #d7d7db;
}


/* COUNTRY */

.select{
    width:100%;
    height:48px;
    border:1px solid #c9cad0;
    border-radius:6px;
    padding:0 12px;
    background:#fff;
    font-size:14px;
    color:#30313d;
    outline:none;
}

.select:focus{
    border-color:#635bff;
    box-shadow:0 0 0 1px #635bff;
}


/* BILLING */

.billing-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:12px;
}


/* CHECKBOX */

.checkbox-row{
    display:flex;
    align-items:flex-start;
    gap:10px;
    margin:10px 0 25px;
}

.checkbox-row input{
    margin-top:3px;
    width:16px;
    height:16px;
}

.checkbox-row label{
    font-size:12px;
    line-height:1.5;
    color:#686b75;
}


/* PAYMENT METHOD */

.methods{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:10px;
}

.method-option{
    display:flex;
    flex-direction:column;
    align-items:center;
    gap:6px;
    border:1px solid #c9cad0;
    border-radius:6px;
    padding:14px 8px;
    cursor:pointer;
    transition:.15s;
}

.method-option:hover{
    border-color:#635bff;
}

.method-option input{
    display:none;
}

.method-option:has(input:checked){
    border-color:#635bff;
    box-shadow:0 0 0 1px #635bff;
    background:#f7f6ff;
}

.method-icon{
    height:26px;
    display:flex;
    align-items:center;
    justify-content:center;
    gap:6px;
}

.method-icon svg{
    display:block;
    height:20px;
    width:auto;
}

.method-icon .card-badges svg{
    height:15px;
}

.method-name{
    font-size:12px;
    font-weight:600;
    color:#30313d;
    text-align:center;
}

.method-note{
    margin-top:10px;
    padding:11px 13px;
    border-radius:6px;
    background:#f7f6ff;
    border:1px solid #dcd8ff;
    color:#5149dc;
    font-size:12px;
}


/* PAY BUTTON */

.pay-button{
    width:100%;
    height:50px;
    border:0;
    border-radius:6px;
    background:#635bff;
    color:#fff;
    font-size:15px;
    font-weight:600;
    cursor:pointer;
    transition:.2s;
}

.pay-button:hover{
    background:#5149dc;
}

.pay-button:active{
    transform:translateY(1px);
}


/* FOOTER */

.payment-footer{
    margin-top:25px;
    text-align:center;
    font-size:11px;
    color:#8a8d96;
    line-height:1.6;
}

.payment-footer a{
    color:#635bff;
    text-decoration:none;
}


/* =========================================
   RESPONSIVE
========================================= */

@media(max-width:850px){

    .checkout-wrapper{
        grid-template-columns:1fr;
        max-width:600px;
    }

    .order-side{
        border-right:0;
        border-bottom:1px solid #e6e6e8;
        padding:35px 25px;
    }

    .order-inner{
        max-width:none;
        margin:0;
    }

    .logo{
        margin-bottom:35px;
    }

    .payment-side{
        padding:40px 25px;
    }

    .payment-inner{
        max-width:none;
        margin:0;
    }

    .powered{
        margin-bottom:5px;
    }
}


@media(max-width:480px){

    .order-side{
        padding:30px 20px;
    }

    .payment-side{
        padding:30px 20px;
    }

    .price{
        font-size:32px;
    }

    .payment-title{
        font-size:22px;
    }

    .billing-grid{
        grid-template-columns:1fr;
        gap:0;
    }

}
</style>

</head>


<body>

<div class="checkout-page">

    <div class="checkout-wrapper">


        <!-- =========================================
             ORDER SUMMARY
        ========================================== -->

        <aside class="order-side">

            <div class="order-inner">

                <div class="logo">

                    <div class="logo-icon">
                        H
                    </div>

                    <div class="logo-text">
                        HMD Publishing
                    </div>

                </div>


                <div class="small-label">
                    Pay HMD Publishing
                </div>


                <div class="product-name">
                    {{ $planName }}
                </div>


                <div class="price">
                    {{ $currency }}{{ $planPrice }}
                    <span>{{ $currencyCode }}</span>
                </div>


                <div class="order-box">

                    <div class="order-row">
                        <span>{{ $planName }}</span>
                        <span>{{ $currency }}{{ $planPrice }}.00</span>
                    </div>

                    <div class="order-row">
                        <span>Quantity</span>
                        <span>1</span>
                    </div>

                    <div class="order-row">
                        <span>Subtotal</span>
                        <span>{{ $currency }}{{ $planPrice }}.00</span>
                    </div>

                    <div class="order-row">
                        <span>Tax</span>
                        <span>{{ $currency }}0.00</span>
                    </div>


                    @foreach ($selectedAddons as $addon)

                        <div class="order-row">
                            <span>{{ $addon['name'] }}</span>
                            <span>{{ $currency }}{{ number_format($addon['price']) }}.00</span>
                        </div>

                    @endforeach


                    <div class="total-row">
                        <span>Total</span>
                        <span>{{ $currency }}{{ $grandTotalPrice }}.00 {{ $currencyCode }}</span>
                    </div>

                </div>


                <div class="secure-note">

                    🔒 Your payment information is encrypted
                    and securely processed. HMD Publishing does
                    not store your full card details.

                </div>


                <div class="powered">
                    Powered by secure payment processing
                </div>

            </div>

        </aside>



        <!-- =========================================
             PAYMENT FORM
        ========================================== -->

        <section class="payment-side">

            <form method="POST" action="{{ route('order.store') }}" id="payment-form">

            @csrf

            <input type="hidden" name="plan" value="{{ $selected->id }}">
            <input type="hidden" name="name" value="{{ $customerName }}">
            <input type="hidden" name="website" value="{{ request('website', '') }}">

            @foreach (array_keys($selectedAddons) as $addonId)
                <input type="hidden" name="addon[{{ $addonId }}]" value="1">
            @endforeach

            <div class="payment-inner">

                <h1 class="payment-title">
                    Payment details
                </h1>


                <!-- EMAIL -->

                <div class="input-group">

                    <div class="section-title">
                        Email
                    </div>

                    <input
                        type="email"
                        name="email"
                        class="input"
                        placeholder="you@example.com"
                        value="{{ $customerEmail }}"
                        required
                    >

                </div>


                <!-- PAYMENT METHOD -->

                <div class="input-group">

                    <div class="section-title">
                        Payment method
                    </div>

                    <div class="methods">

                        <label class="method-option">

                            <input type="radio"
                                   name="payment_method"
                                   value="card"
                                   checked>

                            <span class="method-icon card-badges">
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-label="Visa">
                                    <path fill="#1A1F71" d="M9.112 8.262L5.97 15.758H3.92L2.374 9.775c-.094-.368-.175-.503-.461-.658C1.447 8.864.677 8.627 0 8.479l.046-.217h3.3a.904.904 0 01.894.764l.817 4.338 2.018-5.102zm8.033 5.049c.008-1.979-2.736-2.088-2.717-2.972.006-.269.262-.555.822-.628a3.66 3.66 0 011.913.336l.34-1.59a5.207 5.207 0 00-1.814-.333c-1.917 0-3.266 1.02-3.278 2.479-.012 1.079.963 1.68 1.698 2.04.756.367 1.01.603 1.006.931-.005.504-.602.725-1.16.734-.975.015-1.54-.263-1.992-.473l-.351 1.642c.453.208 1.289.39 2.156.398 2.037 0 3.37-1.006 3.377-2.564m5.061 2.447H24l-1.565-7.496h-1.656a.883.883 0 00-.826.55l-2.909 6.946h2.036l.405-1.12h2.488zm-2.163-2.656l1.02-2.815.588 2.815zm-8.16-4.84l-1.603 7.496H8.34l1.605-7.496z"/>
                                </svg>
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-label="Mastercard">
                                    <circle cx="8.5" cy="12" r="7" fill="#EB001B"/>
                                    <circle cx="15.5" cy="12" r="7" fill="#F79E1B"/>
                                    <path fill="#FF5F00" d="M12 7.5a7 7 0 010 9 7 7 0 010-9z"/>
                                </svg>
                            </span>

                            <span class="method-name">
                                Credit / Debit Card
                            </span>

                        </label>

                        <label class="method-option">

                            <input type="radio"
                                   name="payment_method"
                                   value="paypal">

                            <span class="method-icon">
                                <svg viewBox="0 0 124 33" xmlns="http://www.w3.org/2000/svg" aria-label="PayPal">
                                    <path fill="#253B80" d="M46.211 6.749h-6.839c-.468 0-.866.34-.939.802l-2.766 17.537c-.055.346.213.658.564.658h3.265c.468 0 .866-.34.939-.803l.746-4.73c.072-.463.471-.803.938-.803h2.165c4.505 0 7.105-2.18 7.784-6.5.306-1.89.013-3.375-.872-4.415-.897-1.027-2.621-1.631-4.91-1.631zm.789 6.405c-.374 2.454-2.249 2.454-4.062 2.454h-1.032l.724-4.583c.043-.277.283-.481.563-.481h.473c1.235 0 2.4 0 3.002.704.539.63.649 1.254.512 2.116zM66.654 13.075h-3.275c-.279 0-.52.204-.563.481l-.145.916-.229-.332c-.709-1.029-2.29-1.373-3.868-1.373-3.619 0-6.71 2.741-7.312 6.586-.313 1.918.132 3.752 1.22 5.031.998 1.176 2.426 1.666 4.125 1.666 2.916 0 4.533-1.875 4.533-1.875l-.146.91c-.055.348.213.66.562.66h2.95c.469 0 .865-.34.939-.803l1.77-11.209c.055-.348-.212-.661-.562-.661zm-4.565 6.374c-.316 1.871-1.801 3.127-3.695 3.127-.951 0-1.711-.305-2.199-.883-.484-.574-.668-1.391-.514-2.301.295-1.855 1.805-3.152 3.67-3.152.93 0 1.686.309 2.184.892.457.543.655 1.365.512 2.271zM84.096 13.075h-3.291c-.314 0-.609.156-.787.417l-4.539 6.686-1.924-6.425c-.121-.402-.492-.678-.912-.678h-3.234c-.393 0-.666.384-.541.754l3.625 10.638-3.408 4.811c-.268.379.002.9.465.9h3.287c.312 0 .604-.152.781-.408l7.086-10.181c.262-.378-.007-.895-.468-.895zM94.992 6.749h-6.84c-.467 0-.865.34-.938.802l-2.766 17.537c-.055.346.213.658.562.658h3.51c.326 0 .605-.238.656-.562l.785-4.971c.072-.463.471-.803.938-.803h2.164c4.506 0 7.105-2.18 7.785-6.5.307-1.89.012-3.375-.873-4.415-.897-1.027-2.62-1.631-4.909-1.631zm.789 6.405c-.373 2.454-2.248 2.454-4.062 2.454h-1.031l.725-4.583c.043-.277.281-.481.562-.481h.473c1.234 0 2.4 0 3.002.704.538.63.647 1.254.51 2.116zM115.434 13.075h-3.273c-.281 0-.52.204-.562.481l-.145.916-.23-.332c-.709-1.029-2.289-1.373-3.867-1.373-3.619 0-6.709 2.741-7.311 6.586-.312 1.918.131 3.752 1.219 5.031 1 1.176 2.426 1.666 4.125 1.666 2.916 0 4.533-1.875 4.533-1.875l-.146.91c-.055.348.213.66.564.66h2.949c.467 0 .865-.34.938-.803l1.771-11.209c.055-.348-.213-.661-.563-.661zm-4.565 6.374c-.314 1.871-1.801 3.127-3.695 3.127-.949 0-1.711-.305-2.199-.883-.484-.574-.666-1.391-.514-2.301.297-1.855 1.805-3.152 3.67-3.152.93 0 1.686.309 2.184.892.457.543.655 1.365.512 2.271zM119.295 7.23l-2.807 17.858c-.055.346.213.658.562.658h2.822c.469 0 .867-.34.939-.803l2.768-17.536c.055-.346-.213-.659-.562-.659h-3.16c-.141 0-.281.104-.324.281z"/>
                                    <path fill="#179BD7" d="M23.048 7.667c-.028.179-.06.362-.096.55-1.237 6.351-5.469 8.545-10.874 8.545H9.326c-.661 0-1.218.48-1.321 1.132L6.596 26.83l-.399 2.533c-.067.428.263.814.695.814h4.881c.578 0 1.069-.42 1.16-.99l.048-.248.919-5.832.059-.32c.09-.572.582-.992 1.16-.992h.73c4.729 0 8.431-1.92 9.513-7.476.452-2.321.218-4.259-.978-5.622-.24-.269-.576-.487-.894-.664zM7.266 29.154l.523-3.322-1.165-.027H1.061L4.927 1.292c.012-.074.051-.143.108-.192.057-.049.13-.076.206-.076h9.38c3.114 0 5.263.648 6.385 1.927.526.6.861 1.227 1.023 1.917.17.724.173 1.589.007 2.644l-.012.077v.676l.526.298c.443.235.795.504 1.065.812.45.513.741 1.165.864 1.938.127.795.085 1.741-.123 2.812-.24 1.232-.628 2.305-1.152 3.183-.482.809-1.096 1.48-1.825 2-.696.494-1.523.869-2.458 1.109-.906.236-1.939.355-3.072.355h-.73c-.522 0-1.029.188-1.427.525-.399.344-.663.814-.744 1.328l-.055.299-.924 5.855-.042.215c-.011.068-.03.102-.058.125-.025.021-.061.035-.096.035H7.266zM21.754 7.151c-.189-.055-.384-.105-.584-.15-.201-.044-.407-.083-.619-.117-.742-.12-1.555-.177-2.426-.177h-7.352c-.181 0-.353.041-.507.115-.357.173-.609.494-.67.887l-1.562 9.906-.045.289c.103-.652.66-1.132 1.321-1.132h2.752c5.405 0 9.637-2.195 10.874-8.545.037-.188.068-.371.096-.55-.313-.166-.652-.308-1.017-.429-.094-.028-.187-.057-.278-.086zM9.614 7.699c.061-.393.313-.714.652-.876.155-.074.326-.115.507-.115h7.352c.871 0 1.684.057 2.426.177.212.034.418.073.619.117.2.045.395.095.584.15.094.028.187.057.278.086.365.121.704.264 1.017.429.368-2.347-.003-3.945-1.272-5.392C20.378.682 17.853 0 14.622 0h-9.38c-.66 0-1.223.48-1.325 1.133L.01 25.898c-.077.49.301.932.795.932h5.791l1.454-9.225L9.614 7.699z"/>
                                </svg>
                            </span>

                            <span class="method-name">
                                PayPal
                            </span>

                        </label>

                        <label class="method-option">

                            <input type="radio"
                                   name="payment_method"
                                   value="payoneer">

                            <span class="method-icon">
                                <svg viewBox="0 0 132 30" xmlns="http://www.w3.org/2000/svg" aria-label="Payoneer">
                                    <defs>
                                        <linearGradient id="pyRainbow" x1="0" y1="0" x2="1" y2="1">
                                            <stop offset="0" stop-color="#FF6A00"/>
                                            <stop offset="0.4" stop-color="#F64F8B"/>
                                            <stop offset="0.7" stop-color="#B44AE3"/>
                                            <stop offset="1" stop-color="#3D5AFE"/>
                                        </linearGradient>
                                    </defs>
                                    <path fill="url(#pyRainbow)" d="M15 3a12 12 0 100 24 12 12 0 000-24zm-2.9 6.6l1.2 6.2c.08.39.17.73.25.86.43.74.78-.25.78-.25.63-3.58-1.7-6.26-2.33-6.94-.12-.13-.33-.28-.52-.34-.27-.08-.32.07-.32.2l.02.58-.08-.31zm13.9-.84c.27.19 1.19 1.16 0 1.31-1.7.2-4.94.32-10.32 4.82-2.73 2.6-7.2 7.36-9.66 13.3a.15.15 0 01-.19.09c-.22-.06-.61-.3-.41-1.22.27-1.24 2.74-7.67 9.28-13.35 2.13-1.85 7.22-6.2 10.66-3.64z"/>
                                    <text x="30" y="20" font-family="Arial, Helvetica, sans-serif" font-size="17" font-weight="700" fill="#1B1B1B">Payoneer</text>
                                </svg>
                            </span>

                            <span class="method-name">
                                Payoneer
                            </span>

                        </label>

                    </div>

                    <div class="method-note"
                         id="method-note"
                         style="display:none;">
                        You'll be redirected to
                        <span id="method-note-name"></span>
                        to complete your payment securely.
                    </div>

                </div>


                <!-- CARD -->

                <div id="card-fields">

                    <div class="section-title">
                        Card information
                    </div>


                    <div class="card-wrapper">

                        <div class="card-main">

                            <span class="card-icon">
                                ▣
                            </span>

                            <input
                                type="text"
                                name="card_number"
                                placeholder="Card number"
                                maxlength="19"
                            >

                        </div>


                        <div class="card-bottom">

                            <input
                                type="text"
                                name="card_expiry"
                                placeholder="MM / YY"
                                maxlength="7"
                            >

                            <input
                                type="text"
                                name="card_cvc"
                                placeholder="CVC"
                                maxlength="4"
                            >

                        </div>

                    </div>

                </div>


                <!-- COUNTRY -->

                <div class="input-group">

                    <div class="section-title">
                        Country or region
                    </div>

                    <select class="select" name="country">

                        <option value="United States" @selected($customerCountry === 'United States')>United States</option>
                        <option value="United Kingdom" @selected($customerCountry === 'United Kingdom')>United Kingdom</option>
                        <option value="Canada" @selected($customerCountry === 'Canada')>Canada</option>
                        <option value="Australia" @selected($customerCountry === 'Australia')>Australia</option>
                        <option value="Bangladesh" @selected($customerCountry === 'Bangladesh')>Bangladesh</option>
                        <option value="India" @selected($customerCountry === 'India')>India</option>
                        <option value="Germany" @selected($customerCountry === 'Germany')>Germany</option>
                        <option value="France" @selected($customerCountry === 'France')>France</option>
                        <option value="Other" @selected($customerCountry === 'Other')>Other</option>

                    </select>

                </div>


                <!-- BILLING -->

                <div class="input-group">

                    <div class="section-title">
                        Billing address
                    </div>


                    <div class="billing-grid">

                        <input
                            type="text"
                            name="billing_first_name"
                            class="input"
                            placeholder="First name"
                            value="{{ $firstName }}"
                        >

                        <input
                            type="text"
                            name="billing_last_name"
                            class="input"
                            placeholder="Last name"
                            value="{{ $lastName }}"
                        >

                    </div>


                    <input
                        type="text"
                        name="billing_address"
                        class="input"
                        placeholder="Address"
                        style="margin-top:12px;"
                    >


                    <div class="billing-grid"
                         style="margin-top:12px;">

                        <input
                            type="text"
                            name="billing_city"
                            class="input"
                            placeholder="City"
                        >

                        <input
                            type="text"
                            name="billing_postal_code"
                            class="input"
                            placeholder="Postal code"
                        >

                    </div>

                </div>

                </div>


                <!-- SAVE INFO -->

                <div class="checkbox-row">

                    <input
                        type="checkbox"
                        id="saveInfo"
                        name="save_info"
                    >

                    <label for="saveInfo">

                        Securely save my information for faster
                        checkout next time.

                    </label>

                </div>


                <!-- PAY -->

                <button
                    class="pay-button"
                    type="submit"
                >
                    Pay {{ $currency }}{{ $grandTotalPrice }}.00
                </button>


                <!-- FOOTER -->

                <div class="payment-footer">

                    By confirming your payment, you agree to
                    HMD Publishing's terms and refund policy.

                    <br><br>

                    🔒 Secure payment &nbsp; • &nbsp;
                    SSL encrypted

                    <br><br>

                    <a href="#">
                        Terms
                    </a>

                    &nbsp; · &nbsp;

                    <a href="#">
                        Privacy
                    </a>

                </div>

            </div>

            </form>

        </section>

    </div>

</div>


<script>

/* =========================================
   CARD NUMBER FORMAT
========================================= */

const cardInput = document.querySelector(
    '.card-main input'
);

cardInput.addEventListener('input', function(e){

    let value = e.target.value
        .replace(/\D/g,'')
        .substring(0,16);

    let formatted = value.match(/.{1,4}/g);

    e.target.value = formatted
        ? formatted.join(' ')
        : '';

});


/* =========================================
   EXPIRY FORMAT
========================================= */

const expiryInput =
    document.querySelector(
        '.card-bottom input:first-child'
    );

expiryInput.addEventListener('input', function(e){

    let value = e.target.value
        .replace(/\D/g,'')
        .substring(0,4);

    if(value.length >= 3){
        value =
            value.substring(0,2)
            + ' / '
            + value.substring(2);
    }

    e.target.value = value;

});


/* =========================================
   PAYMENT METHOD TOGGLE
========================================= */

const methodInputs = document.querySelectorAll(
    'input[name="payment_method"]'
);

const cardFields = document.getElementById('card-fields');
const methodNote = document.getElementById('method-note');
const methodNoteName = document.getElementById('method-note-name');

function updateMethod(){

    const selected = document.querySelector(
        'input[name="payment_method"]:checked'
    ).value;

    const showCard = selected === 'card';

    cardFields.style.display = showCard ? '' : 'none';

    if(showCard){
        methodNote.style.display = 'none';
    }else{
        methodNoteName.textContent =
            selected === 'paypal' ? 'PayPal' : 'Payoneer';
        methodNote.style.display = 'block';
    }

}

methodInputs.forEach(function(input){
    input.addEventListener('change', updateMethod);
});

updateMethod();

</script>

</body>
</html>
