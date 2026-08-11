<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Secure Checkout | HMD Publishing</title>

@php
    $planModels = \App\Models\Plan::where('is_active', true)->orderBy('sort_order')->get();

    $planKey = request('plan', 'bestseller');
    $selected = $planModels->firstWhere('key', $planKey)
        ?? $planModels->firstWhere('key', 'bestseller')
        ?? $planModels->first();

    $plan = [
        'name'  => $selected->name,
        'price' => $selected->price,
        'desc'  => $selected->description,
        'badge' => $selected->badge,
    ];

    $planName  = $plan['name'];
    $planPrice = number_format($plan['price']);

    $customerName  = trim(request('name', ''));
    $nameParts     = preg_split('/\s+/', $customerName);
    $firstName     = $nameParts[0] ?? '';
    $lastName      = count($nameParts) > 1 ? $nameParts[count($nameParts) - 1] : '';
    $customerEmail = request('email', '');
    $customerCountry = request('country', '');

    $addonModels = \App\Models\Addon::where('is_active', true)->orderBy('sort_order')->get();
    $addons = $addonModels->mapWithKeys(fn ($addon) => [
        $addon->key => ['name' => $addon->name, 'price' => $addon->price],
    ])->all();

    $selectedAddons = [];
    foreach (array_keys($addons) as $key) {
        if (request("addon.$key") === '1') {
            $selectedAddons[$key] = $addons[$key];
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
    font-size:20px;
    line-height:1;
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
                    ${{ $planPrice }}
                    <span>USD</span>
                </div>


                <div class="order-box">

                    <div class="order-row">
                        <span>{{ $planName }}</span>
                        <span>${{ $planPrice }}.00</span>
                    </div>

                    <div class="order-row">
                        <span>Quantity</span>
                        <span>1</span>
                    </div>

                    <div class="order-row">
                        <span>Subtotal</span>
                        <span>${{ $planPrice }}.00</span>
                    </div>

                    <div class="order-row">
                        <span>Tax</span>
                        <span>$0.00</span>
                    </div>


                    @foreach ($selectedAddons as $addon)

                        <div class="order-row">
                            <span>{{ $addon['name'] }}</span>
                            <span>${{ number_format($addon['price']) }}.00</span>
                        </div>

                    @endforeach


                    <div class="total-row">
                        <span>Total</span>
                        <span>${{ $grandTotalPrice }}.00 USD</span>
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
                        class="input"
                        placeholder="you@example.com"
                        value="{{ $customerEmail }}"
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

                            <span class="method-icon">
                                💳
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
                                🅿️
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
                                💠
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
                                placeholder="Card number"
                                maxlength="19"
                            >

                        </div>


                        <div class="card-bottom">

                            <input
                                type="text"
                                placeholder="MM / YY"
                                maxlength="7"
                            >

                            <input
                                type="text"
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

                    <select class="select">

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
                            class="input"
                            placeholder="First name"
                            value="{{ $firstName }}"
                        >

                        <input
                            type="text"
                            class="input"
                            placeholder="Last name"
                            value="{{ $lastName }}"
                        >

                    </div>


                    <input
                        type="text"
                        class="input"
                        placeholder="Address"
                        style="margin-top:12px;"
                    >


                    <div class="billing-grid"
                         style="margin-top:12px;">

                        <input
                            type="text"
                            class="input"
                            placeholder="City"
                        >

                        <input
                            type="text"
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
                    >

                    <label for="saveInfo">

                        Securely save my information for faster
                        checkout next time.

                    </label>

                </div>


                <!-- PAY -->

                <button
                    class="pay-button"
                    type="button"
                    onclick="alert('Demo checkout — connect this button to Stripe Checkout or Stripe Elements for real payments.')"
                >
                    Pay ${{ $grandTotalPrice }}.00
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
