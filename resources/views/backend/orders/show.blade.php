@extends('backend.app')

@section('title', 'Order #' . $order->order_number)

@section('content')

@if (session('success'))
    <input type="hidden" id="sessionSuccess" value="{{ session('success') }}">
@endif

<div class="od-page">

    {{-- Header --}}
    <div class="od-header">
        <div class="od-header-inner">
            <div>
                <a href="{{ route('orders.index') }}" class="od-back">
                    <i class="bi bi-arrow-left"></i> Back to Orders
                </a>
                <h4 class="od-header-title">Order #{{ $order->order_number }}</h4>
                <p class="od-header-sub">Placed on {{ $order->created_at->format('F j, Y g:i A') }}</p>
            </div>
            <div class="od-header-actions">
                <span class="od-status od-status-{{ $order->status }}">{{ $order->status }}</span>
                <form action="{{ route('orders.destroy', $order) }}" method="POST" class="d-inline delete-form">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="od-btn-danger">
                        <i class="bi bi-trash me-1"></i> Delete Order
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="od-grid">

        {{-- Order Summary --}}
        <div class="od-card">
            <div class="od-card-title">
                <i class="bi bi-receipt me-2"></i> Order Summary
            </div>
            <div class="od-detail-box">
                <div class="od-row">
                    <span>Plan</span>
                    <strong>{{ $order->plan_name }}</strong>
                </div>
                <div class="od-row">
                    <span>Plan Price</span>
                    <span>${{ number_format($order->plan_price) }}.00</span>
                </div>

                @foreach ($order->addons ?? [] as $addon)
                    <div class="od-row">
                        <span>{{ $addon['name'] }}</span>
                        <span>+${{ number_format($addon['price']) }}.00</span>
                    </div>
                @endforeach

                <div class="od-row od-row-total">
                    <span>Total</span>
                    <span>${{ number_format($order->total) }}.00 {{ $order->currency }}</span>
                </div>
            </div>

            {{-- Status update --}}
            <form action="{{ route('orders.status', $order) }}" method="POST" class="od-status-form">
                @csrf
                @method('PATCH')
                <label class="od-form-label">Update Status</label>
                <div class="od-status-controls">
                    <select name="status" class="od-select">
                        @foreach (\App\Models\Order::STATUSES as $status)
                            <option value="{{ $status }}" @selected($order->status === $status)>
                                {{ ucfirst($status) }}
                            </option>
                        @endforeach
                    </select>
                    <button type="submit" class="od-btn-primary">
                        <i class="bi bi-check2 me-1"></i> Save
                    </button>
                </div>
            </form>
        </div>

        {{-- Customer Details --}}
        <div class="od-card">
            <div class="od-card-title">
                <i class="bi bi-person me-2"></i> Customer Details
            </div>
            <div class="od-detail-box">
                <div class="od-row">
                    <span>Name</span>
                    <strong>{{ $order->customer_name }}</strong>
                </div>
                <div class="od-row">
                    <span>Email</span>
                    <span>{{ $order->email }}</span>
                </div>
                @if ($order->country)
                    <div class="od-row">
                        <span>Country</span>
                        <span>{{ $order->country }}</span>
                    </div>
                @endif
                @if ($order->website)
                    <div class="od-row">
                        <span>Website</span>
                        <span>{{ $order->website }}</span>
                    </div>
                @endif
                <div class="od-row">
                    <span>Payment Method</span>
                    <span>{{ ucfirst($order->payment_method) }}</span>
                </div>
            </div>

            {{-- Billing Address --}}
            @if ($order->billing_first_name || $order->billing_address)
                <div class="od-card-title" style="margin-top:24px;">
                    <i class="bi bi-house me-2"></i> Billing Address
                </div>
                <div class="od-detail-box">
                    @if ($order->billing_first_name || $order->billing_last_name)
                        <div class="od-row">
                            <span>Name</span>
                            <span>{{ trim($order->billing_first_name . ' ' . $order->billing_last_name) }}</span>
                        </div>
                    @endif
                    @if ($order->billing_address)
                        <div class="od-row">
                            <span>Address</span>
                            <span>{{ $order->billing_address }}</span>
                        </div>
                    @endif
                    @if ($order->billing_city || $order->billing_postal_code)
                        <div class="od-row">
                            <span>City / Postal</span>
                            <span>{{ $order->billing_city }} {{ $order->billing_postal_code }}</span>
                        </div>
                    @endif
                </div>
            @endif
        </div>

    </div>

</div>

<style>
:root {
    --cbg: #0f172a;
    --crd: rgba(255,255,255,0.04);
    --ctext: #f1f5f9;
    --cmuted: #94a3b8;
    --csub: #64748b;
    --cborder: rgba(255,255,255,0.08);
    --cprimary: #60A5FA;
    --chover: rgba(255,255,255,0.06);
}
.od-page { padding: 24px 28px; height: 100%; }
.od-header {
    background: var(--crd); border: 1px solid var(--cborder); border-radius: 14px;
    padding: 18px 22px; backdrop-filter: blur(8px); margin-bottom: 20px;
}
.od-header-inner {
    display: flex; flex-wrap: wrap; justify-content: space-between;
    align-items: flex-start; gap: 12px;
}
.od-back {
    display: inline-flex; align-items: center; gap: 6px;
    color: var(--csub); font-size: 13px; text-decoration: none;
    margin-bottom: 8px;
}
.od-back:hover { color: var(--cprimary); }
.od-header-title { font-size: 18px; font-weight: 700; color: var(--ctext); margin: 0 0 2px 0; }
.od-header-sub { font-size: 13px; color: var(--cmuted); margin: 0; }
.od-header-actions { display: flex; align-items: center; gap: 10px; flex-wrap: wrap; }
.od-status {
    display: inline-block; padding: 6px 14px; border-radius: 20px;
    font-size: 12px; font-weight: 600; text-transform: capitalize;
}
.od-status-pending { background: rgba(245,158,11,0.12); color: #f59e0b; border: 1px solid rgba(245,158,11,0.25); }
.od-status-paid { background: rgba(16,185,129,0.12); color: #10b981; border: 1px solid rgba(16,185,129,0.25); }
.od-status-processing { background: rgba(96,165,250,0.12); color: #60A5FA; border: 1px solid rgba(96,165,250,0.25); }
.od-status-completed { background: rgba(139,92,246,0.12); color: #a78bfa; border: 1px solid rgba(139,92,246,0.25); }
.od-status-cancelled { background: rgba(248,113,113,0.12); color: #f87171; border: 1px solid rgba(248,113,113,0.25); }
.od-btn-danger {
    display: inline-flex; align-items: center; gap: 4px;
    background: rgba(248,113,113,0.1); border: 1px solid rgba(248,113,113,0.25);
    color: #f87171; padding: 8px 16px; border-radius: 8px;
    font-size: 13px; font-weight: 600; cursor: pointer;
    transition: all 0.2s ease;
}
.od-btn-danger:hover { background: rgba(248,113,113,0.2); color: #f87171; }
.od-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 18px; align-items: start; }
.od-card {
    background: var(--crd); border: 1px solid var(--cborder);
    border-radius: 14px; padding: 20px 22px;
}
.od-card-title {
    font-size: 14px; font-weight: 700; color: var(--ctext);
    margin-bottom: 16px;
}
.od-card-title i { color: var(--cprimary); }
.od-detail-box { border: 1px solid var(--cborder); border-radius: 10px; padding: 4px 16px; }
.od-row {
    display: flex; justify-content: space-between; align-items: center;
    gap: 14px; padding: 12px 0; font-size: 14px;
    border-bottom: 1px solid var(--cborder);
}
.od-row:last-child { border-bottom: 0; }
.od-row span:first-child { color: var(--csub); }
.od-row span:last-child { color: var(--ctext); text-align: right; word-break: break-word; }
.od-row strong { color: var(--ctext); text-align: right; }
.od-row-total { border-top: 2px solid var(--cborder); margin-top: 4px; font-weight: 700; }
.od-row-total span:last-child { color: #10b981; font-size: 16px; }
.od-status-form { margin-top: 18px; }
.od-form-label {
    display: block; font-size: 12px; font-weight: 600; color: var(--csub);
    margin-bottom: 8px; text-transform: uppercase; letter-spacing: 0.4px;
}
.od-status-controls { display: flex; gap: 8px; }
.od-select {
    flex: 1; height: 42px; background: rgba(255,255,255,0.04);
    border: 1px solid var(--cborder); border-radius: 8px;
    color: var(--ctext); padding: 0 12px; font-size: 14px;
    outline: none; font-family: inherit;
}
.od-select:focus { border-color: var(--cprimary); }
.od-select option { background: #1e293b; color: #f1f5f9; }
.od-btn-primary {
    display: inline-flex; align-items: center; gap: 4px;
    background: linear-gradient(135deg, #2563EB, #1E40AF);
    color: #fff; border: none; padding: 0 18px; border-radius: 8px;
    font-size: 13px; font-weight: 600; cursor: pointer;
    transition: all 0.2s ease;
}
.od-btn-primary:hover { transform: translateY(-1px); box-shadow: 0 4px 12px rgba(37,99,235,0.3); }
@media (max-width: 992px) {
    .od-page { padding: 20px 22px; }
    .od-grid { grid-template-columns: 1fr; }
}
@media (max-width: 768px) {
    .od-page { padding: 16px; }
    .od-header { padding: 14px 16px; }
    .od-card { padding: 16px; }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var sessionSuccess = document.getElementById('sessionSuccess');
    if (sessionSuccess) {
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: sessionSuccess.value,
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 4000,
            timerProgressBar: true,
            background: '#1e293b',
            color: '#f1f5f9',
            iconColor: '#60A5FA',
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer);
                toast.addEventListener('mouseleave', Swal.resumeTimer);
            }
        });
    }

    document.querySelectorAll('.delete-form').forEach(function (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            Swal.fire({
                title: 'Delete this order?',
                text: 'This action cannot be undone.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#ef4444',
                cancelButtonColor: '#475569',
                confirmButtonText: 'Yes, delete',
                background: '#1e293b',
                color: '#f1f5f9'
            }).then(function (result) {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
});
</script>

@endsection
