<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Order Confirmed | HMD Publishing</title>

<style>
*{
    box-sizing:border-box;
}

body{
    margin:0;
    font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,
    Helvetica,Arial,sans-serif;
    background:#f7f7f9;
    color:#30313d;
    display:flex;
    justify-content:center;
    min-height:100vh;
    padding:60px 20px;
}

.confirm-card{
    width:100%;
    max-width:560px;
    background:#ffffff;
    border:1px solid #e6e6e8;
    border-radius:16px;
    padding:45px 45px;
    align-self:flex-start;
}

.logo{
    display:flex;
    align-items:center;
    gap:10px;
    margin-bottom:30px;
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

.check-icon{
    width:64px;
    height:64px;
    border-radius:50%;
    background:#e6f6ec;
    color:#1a9d56;
    font-size:30px;
    display:flex;
    align-items:center;
    justify-content:center;
    margin:0 auto 20px;
}

.confirm-title{
    text-align:center;
    font-size:26px;
    font-weight:700;
    color:#202124;
    margin:0 0 8px;
}

.confirm-sub{
    text-align:center;
    font-size:14px;
    color:#6b6f7b;
    margin:0 0 30px;
}

.order-number{
    display:flex;
    justify-content:space-between;
    align-items:center;
    background:#f7f7f9;
    border:1px solid #e6e6e8;
    border-radius:10px;
    padding:14px 18px;
    margin-bottom:30px;
    font-size:14px;
}

.order-number span:first-child{
    color:#6b6f7b;
}

.order-number strong{
    color:#202124;
    font-size:15px;
    letter-spacing:0.5px;
}

.section-title{
    font-size:12px;
    font-weight:600;
    color:#6b6f7b;
    text-transform:uppercase;
    letter-spacing:0.6px;
    margin-bottom:14px;
}

.detail-box{
    border:1px solid #e6e6e8;
    border-radius:10px;
    padding:6px 18px;
    margin-bottom:26px;
}

.detail-row{
    display:flex;
    justify-content:space-between;
    gap:16px;
    padding:11px 0;
    font-size:14px;
    border-bottom:1px solid #f0f0f2;
}

.detail-row:last-child{
    border-bottom:0;
}

.detail-row span:first-child{
    color:#6b6f7b;
}

.detail-row span:last-child{
    color:#30313d;
    font-weight:500;
    text-align:right;
}

.total-row{
    border-top:2px solid #e6e6e8;
    margin-top:4px;
    font-weight:700;
    font-size:15px;
}

.total-row span:last-child{
    color:#635bff;
}

.status-badge{
    display:inline-block;
    background:#fff4e5;
    color:#b26200;
    border:1px solid #ffddb0;
    border-radius:20px;
    padding:3px 12px;
    font-size:12px;
    font-weight:600;
    text-transform:capitalize;
}

.back-link{
    display:block;
    text-align:center;
    margin-top:10px;
    color:#635bff;
    font-size:14px;
    text-decoration:none;
}

.back-link:hover{
    text-decoration:underline;
}

@media(max-width:480px){
    body{ padding:30px 14px; }
    .confirm-card{ padding:30px 22px; }
}
</style>

</head>
<body>

<div class="confirm-card">

    <div class="logo">
        <div class="logo-icon">H</div>
        <div class="logo-text">HMD Publishing</div>
    </div>

    <div class="check-icon">✓</div>

    <h1 class="confirm-title">
        Order Confirmed!
    </h1>

    <p class="confirm-sub">
        Thank you, {{ $order->customer_name }}. Your order has been received
        and is being processed.
    </p>

    <div class="order-number">
        <span>Order Number</span>
        <strong>{{ $order->order_number }}</strong>
    </div>

    <div class="section-title">Order Summary</div>

    <div class="detail-box">

        <div class="detail-row">
            <span>{{ $order->plan_name }}</span>
            <span>${{ number_format($order->plan_price) }}.00</span>
        </div>

        @foreach ($order->addons ?? [] as $addon)
            <div class="detail-row">
                <span>{{ $addon['name'] }}</span>
                <span>+${{ number_format($addon['price']) }}.00</span>
            </div>
        @endforeach

        <div class="detail-row total-row">
            <span>Total</span>
            <span>${{ number_format($order->total) }}.00 USD</span>
        </div>

    </div>

    <div class="section-title">Customer Details</div>

    <div class="detail-box">

        <div class="detail-row">
            <span>Email</span>
            <span>{{ $order->email }}</span>
        </div>

        @if ($order->country)
            <div class="detail-row">
                <span>Country</span>
                <span>{{ $order->country }}</span>
            </div>
        @endif

        @if ($order->website)
            <div class="detail-row">
                <span>Website</span>
                <span>{{ $order->website }}</span>
            </div>
        @endif

        <div class="detail-row">
            <span>Payment Method</span>
            <span>{{ ucfirst($order->payment_method) }}</span>
        </div>

        <div class="detail-row">
            <span>Status</span>
            <span><span class="status-badge">{{ $order->status }}</span></span>
        </div>

    </div>

    <p class="confirm-sub" style="margin:0;">
        A confirmation has been recorded in your admin panel.
        We'll contact you at {{ $order->email }} shortly.
    </p>

    <a href="/" class="back-link">← Back to Home</a>

</div>

</body>
</html>
