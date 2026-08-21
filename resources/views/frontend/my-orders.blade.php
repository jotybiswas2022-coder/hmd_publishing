<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders | HMD Publishing</title>
</head>

<body style="margin:0; padding:0; font-family:Arial,Helvetica,sans-serif; color:#111827; background:#ffffff;">

@include('frontend.partials.navbar')

<section style="background:#f8fafc; padding:60px 5% 50px; border-bottom:1px solid #e5e7eb; text-align:center;">
    <div style="max-width:800px; margin:auto;">
        <div style="display:inline-block; background:#eff6ff; color:#2563eb; padding:7px 13px; border-radius:50px; font-size:11px; font-weight:800; text-transform:uppercase; letter-spacing:1px; margin-bottom:14px;">
            My Account
        </div>
        <h1 style="margin:0 0 10px; font-size:42px; line-height:1.05; letter-spacing:-2px;">My Orders</h1>
        <p style="margin:0; color:#6b7280; font-size:16px;">View and manage your orders</p>
    </div>
</section>

<main style="max-width:1000px; margin:auto; padding:40px 5% 80px;">

    @if(session('success'))
        <div style="background:#ecfdf5; border:1px solid #a7f3d0; color:#065f46; padding:14px 18px; border-radius:10px; margin-bottom:24px; font-size:14px;">
            {{ session('success') }}
        </div>
    @endif

    @if($orders->isEmpty())
        <div style="text-align:center; padding:80px 20px; background:#ffffff; border:1px solid #e5e7eb; border-radius:14px;">
            <div style="font-size:48px; margin-bottom:16px;">📦</div>
            <h2 style="margin:0 0 8px; font-size:22px; color:#111827;">No orders yet</h2>
            <p style="margin:0 0 24px; color:#6b7280; font-size:15px;">You haven't placed any orders. Browse our services to get started.</p>
            <a href="/services" style="display:inline-block; background:#2563eb; color:#fff; padding:13px 28px; border-radius:8px; text-decoration:none; font-weight:800; font-size:14px;">
                Browse Services →
            </a>
        </div>
    @else
        <div style="background:#ffffff; border:1px solid #e5e7eb; border-radius:14px; overflow:hidden; box-shadow:0 5px 20px rgba(17,24,39,0.035);">

            <!-- TABLE HEADER -->
            <div style="display:grid; grid-template-columns:1.2fr 1fr 0.8fr 0.7fr 0.7fr 0.5fr; gap:15px; padding:16px 24px; background:#f8fafc; border-bottom:1px solid #e5e7eb; font-size:12px; font-weight:700; color:#6b7280; text-transform:uppercase; letter-spacing:0.5px;">
                <div>Order</div>
                <div>Plan</div>
                <div>Total</div>
                <div>Date</div>
                <div>Status</div>
                <div></div>
            </div>

            @foreach ($orders as $order)
                <a href="{{ route('my-order.show', $order) }}" style="display:grid; grid-template-columns:1.2fr 1fr 0.8fr 0.7fr 0.7fr 0.5fr; gap:15px; padding:18px 24px; border-bottom:1px solid #f3f4f6; text-decoration:none; color:inherit; transition:background 0.15s; align-items:center;" onmouseover="this.style.background='#f9fafb'" onmouseout="this.style.background=''">
                    <div>
                        <div style="font-weight:700; font-size:14px; color:#111827;">{{ $order->order_number }}</div>
                    </div>
                    <div>
                        <div style="font-size:14px; color:#374151;">{{ $order->plan_name }}</div>
                        @if(count($order->addons ?? []) > 0)
                            <div style="font-size:12px; color:#9ca3af; margin-top:2px;">+{{ count($order->addons) }} addon(s)</div>
                        @endif
                    </div>
                    <div style="font-weight:700; font-size:14px;">£{{ number_format($order->total, 2) }}</div>
                    <div style="font-size:13px; color:#6b7280;">{{ $order->created_at->format('d M Y') }}</div>
                    <div>
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
                        <span style="display:inline-block; background:{{ $s['bg'] }}; color:{{ $s['text'] }}; border:1px solid {{ $s['border'] }}; padding:4px 10px; border-radius:20px; font-size:11px; font-weight:700; text-transform:capitalize;">
                            {{ $order->status }}
                        </span>
                    </div>
                    <div style="text-align:right; color:#2563eb; font-weight:700; font-size:13px;">
                        View →
                    </div>
                </a>
            @endforeach

        </div>

        <div style="margin-top:24px; text-align:center;">
            {{ $orders->links() }}
        </div>
    @endif

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
