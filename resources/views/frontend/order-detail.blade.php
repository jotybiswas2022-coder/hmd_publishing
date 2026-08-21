<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order {{ $order->order_number }} | HMD Publishing</title>
</head>

<body style="margin:0; padding:0; font-family:Arial,Helvetica,sans-serif; color:#111827; background:#ffffff;">

@include('frontend.partials.navbar')

<section style="background:#f8fafc; padding:50px 5% 40px; border-bottom:1px solid #e5e7eb;">
    <div style="max-width:900px; margin:auto;">
        <a href="{{ route('my-orders') }}" style="display:inline-flex; align-items:center; gap:6px; color:#2563eb; text-decoration:none; font-size:14px; font-weight:600; margin-bottom:16px;">
            ← Back to My Orders
        </a>
        <h1 style="margin:0 0 8px; font-size:32px; letter-spacing:-1.5px;">Order {{ $order->order_number }}</h1>
        <p style="margin:0; color:#6b7280; font-size:14px;">Placed on {{ $order->created_at->format('d M Y \a\t g:i A') }}</p>
    </div>
</section>

<main style="max-width:900px; margin:auto; padding:40px 5% 80px;">

    @php
        $statusColors = [
            'pending' => ['bg' => '#fef3c7', 'text' => '#92400e', 'border' => '#fcd34d'],
            'paid' => ['bg' => '#dbeafe', 'text' => '#1e40af', 'border' => '#93c5fd'],
            'processing' => ['bg' => '#e0e7ff', 'text' => '#3730a3', 'border' => '#a5b4fc'],
            'completed' => ['bg' => '#ecfdf5', 'text' => '#065f46', 'border' => '#a7f3d0'],
            'cancelled' => ['bg' => '#fee2e2', 'text' => '#991b1b', 'border' => '#fca5a5'],
        ];
        $s = $statusColors[$order->status] ?? $statusColors['pending'];
    @endphp

    <!-- STATUS BAR -->
    <div style="display:flex; justify-content:space-between; align-items:center; background:#ffffff; border:1px solid #e5e7eb; border-radius:14px; padding:20px 24px; margin-bottom:24px; box-shadow:0 5px 20px rgba(17,24,39,0.035);">
        <div>
            <div style="font-size:13px; color:#6b7280; margin-bottom:4px;">Status</div>
            <span style="display:inline-block; background:{{ $s['bg'] }}; color:{{ $s['text'] }}; border:1px solid {{ $s['border'] }}; padding:5px 14px; border-radius:20px; font-size:13px; font-weight:700; text-transform:capitalize;">
                {{ $order->status }}
            </span>
        </div>
        <div style="text-align:right;">
            <div style="font-size:13px; color:#6b7280; margin-bottom:4px;">Order Number</div>
            <div style="font-size:18px; font-weight:800; letter-spacing:0.5px;">{{ $order->order_number }}</div>
        </div>
    </div>

    <div style="display:grid; grid-template-columns:1fr 1fr; gap:24px;">

        <!-- ORDER DETAILS -->
        <div style="background:#ffffff; border:1px solid #e5e7eb; border-radius:14px; padding:28px; box-shadow:0 5px 20px rgba(17,24,39,0.035);">
            <h2 style="margin:0 0 20px; font-size:18px; letter-spacing:-0.5px;">Order Details</h2>

            <div style="border:1px solid #e5e7eb; border-radius:10px; overflow:hidden;">
                <!-- Plan -->
                <div style="display:flex; justify-content:space-between; padding:14px 16px; border-bottom:1px solid #f3f4f6;">
                    <span style="color:#6b7280; font-size:14px;">Plan</span>
                    <span style="font-weight:700; font-size:14px;">{{ $order->plan_name }}</span>
                </div>

                <div style="display:flex; justify-content:space-between; padding:14px 16px; border-bottom:1px solid #f3f4f6;">
                    <span style="color:#6b7280; font-size:14px;">Plan Price</span>
                    <span style="font-weight:700; font-size:14px;">£{{ number_format($order->plan_price, 2) }}</span>
                </div>

                <!-- Addons -->
                @foreach ($order->addons ?? [] as $addon)
                    <div style="display:flex; justify-content:space-between; padding:14px 16px; border-bottom:1px solid #f3f4f6;">
                        <span style="color:#6b7280; font-size:14px;">{{ $addon['name'] }}</span>
                        <span style="font-weight:600; font-size:14px; color:#059669;">+£{{ number_format($addon['price'], 2) }}</span>
                    </div>
                @endforeach

                @if($order->addon_total > 0)
                    <div style="display:flex; justify-content:space-between; padding:14px 16px; border-bottom:1px solid #f3f4f6;">
                        <span style="color:#6b7280; font-size:14px;">Add-ons Total</span>
                        <span style="font-weight:600; font-size:14px;">£{{ number_format($order->addon_total, 2) }}</span>
                    </div>
                @endif

                <!-- Total -->
                <div style="display:flex; justify-content:space-between; padding:16px; background:#f8fafc; font-size:17px; font-weight:800;">
                    <span>Total</span>
                    <span style="color:#2563eb;">£{{ number_format($order->total, 2) }}</span>
                </div>
            </div>
        </div>

        <!-- CUSTOMER & PAYMENT INFO -->
        <div style="background:#ffffff; border:1px solid #e5e7eb; border-radius:14px; padding:28px; box-shadow:0 5px 20px rgba(17,24,39,0.035);">
            <h2 style="margin:0 0 20px; font-size:18px; letter-spacing:-0.5px;">Customer Information</h2>

            <div style="border:1px solid #e5e7eb; border-radius:10px; overflow:hidden;">
                <div style="display:flex; justify-content:space-between; padding:14px 16px; border-bottom:1px solid #f3f4f6;">
                    <span style="color:#6b7280; font-size:14px;">Name</span>
                    <span style="font-weight:600; font-size:14px;">{{ $order->customer_name }}</span>
                </div>

                <div style="display:flex; justify-content:space-between; padding:14px 16px; border-bottom:1px solid #f3f4f6;">
                    <span style="color:#6b7280; font-size:14px;">Email</span>
                    <span style="font-weight:600; font-size:14px;">{{ $order->email }}</span>
                </div>

                @if($order->country)
                    <div style="display:flex; justify-content:space-between; padding:14px 16px; border-bottom:1px solid #f3f4f6;">
                        <span style="color:#6b7280; font-size:14px;">Country</span>
                        <span style="font-weight:600; font-size:14px;">{{ $order->country }}</span>
                    </div>
                @endif

                <div style="display:flex; justify-content:space-between; padding:14px 16px; border-bottom:1px solid #f3f4f6;">
                    <span style="color:#6b7280; font-size:14px;">Payment Method</span>
                    <span style="font-weight:600; font-size:14px;">{{ ucfirst($order->payment_method) }}</span>
                </div>

                <div style="display:flex; justify-content:space-between; padding:14px 16px; border-bottom:1px solid #f3f4f6;">
                    <span style="color:#6b7280; font-size:14px;">Currency</span>
                    <span style="font-weight:600; font-size:14px;">{{ $order->currency }}</span>
                </div>

                <div style="display:flex; justify-content:space-between; padding:14px 16px;">
                    <span style="color:#6b7280; font-size:14px;">Order Date</span>
                    <span style="font-weight:600; font-size:14px;">{{ $order->created_at->format('d M Y, g:i A') }}</span>
                </div>
            </div>

            @if($order->billing_address || $order->billing_city || $order->billing_postal_code)
                <h3 style="margin:24px 0 12px; font-size:15px; font-weight:700;">Billing Address</h3>
                <div style="color:#6b7280; font-size:14px; line-height:1.8;">
                    @if($order->billing_first_name || $order->billing_last_name)
                        {{ trim(($order->billing_first_name ?? '') . ' ' . ($order->billing_last_name ?? '')) }}<br>
                    @endif
                    @if($order->billing_address){{ $order->billing_address }}<br>@endif
                    @if($order->billing_city || $order->billing_postal_code)
                        {{ $order->billing_city }}{{ $order->billing_city && $order->billing_postal_code ? ', ' : '' }}{{ $order->billing_postal_code }}
                    @endif
                </div>
            @endif
        </div>

    </div>

    <!-- HELPFUL NOTE -->
    <div style="background:#f8fafc; border:1px solid #e5e7eb; border-radius:14px; padding:24px; margin-top:24px; text-align:center;">
        <p style="margin:0; color:#6b7280; font-size:14px;">
            Questions about this order? <a href="/contact" style="color:#2563eb; text-decoration:none; font-weight:600;">Contact us</a> and reference your order number <strong>{{ $order->order_number }}</strong>.
        </p>
    </div>

</main>

<!-- FOOTER -->
<footer style="background:#f8fafc; border-top:1px solid #e5e7eb; padding:50px 5% 25px;">
    <div style="max-width:1200px; margin:auto;">
        <div style="display:grid; grid-template-columns:2fr 1fr 1fr 1fr; gap:45px; margin-bottom:40px;">
            <div>
                <a href="/" style="text-decoration:none; color:#111827; font-size:24px; font-weight:800;">HMD <span style="font-weight:400;">Publishing</span></a>
                <p style="max-width:350px; color:#6b7280; margin:16px 0; font-size:13px;">Professional book publishing services.</p>
            </div>
            <div>
                <h4 style="margin:0 0 14px; font-size:14px;">Services</h4>
                <a href="/services" style="display:block; text-decoration:none; color:#6b7280; font-size:13px; margin:8px 0;">All Services</a>
            </div>
            <div>
                <h4 style="margin:0 0 14px; font-size:14px;">Account</h4>
                <a href="/my-orders" style="display:block; text-decoration:none; color:#2563eb; font-size:13px; margin:8px 0; font-weight:600;">My Orders</a>
            </div>
            <div>
                <h4 style="margin:0 0 14px; font-size:14px;">Contact</h4>
                <div style="color:#6b7280; font-size:13px; line-height:1.8;">info@hmdpublishing.com<br>UK +44 7888 862764</div>
            </div>
        </div>
        <div style="border-top:1px solid #e5e7eb; padding-top:18px; color:#6b7280; font-size:12px; display:flex; justify-content:space-between; flex-wrap:wrap; gap:10px;">
            <div>© 2026 HMD Publishing Limited. All rights reserved.</div>
            <div>You keep 100% of your rights and royalties — always.</div>
        </div>
    </div>
</footer>

</body>
</html>
