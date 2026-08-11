@extends('backend.app')

@section('title', 'Orders')

@section('content')

@if (session('success'))
    <input type="hidden" id="sessionSuccess" value="{{ session('success') }}">
@endif

<div class="order-page">

    {{-- Header --}}
    <div class="order-header">
        <div class="order-header-inner">
            <div>
                <h4 class="order-header-title">Orders</h4>
                <p class="order-header-sub">All customer orders placed through the checkout</p>
            </div>
            <div class="order-header-actions">
                <span class="order-header-badge">
                    <i class="bi bi-bag-check me-1"></i>
                    {{ $orders->total() }} Orders
                </span>
            </div>
        </div>
    </div>

    {{-- Summary cards --}}
    <div class="order-stats">
        @php
            $totalRevenue = $orders->sum('total');
            $pendingCount = $orders->where('status', 'pending')->count();
            $paidCount = $orders->where('status', 'paid')->count();
        @endphp
        <div class="stat-card">
            <div class="stat-label">Total Revenue</div>
            <div class="stat-value">${{ number_format($totalRevenue) }}.00</div>
        </div>
        <div class="stat-card">
            <div class="stat-label">Pending</div>
            <div class="stat-value stat-amber">{{ $pendingCount }}</div>
        </div>
        <div class="stat-card">
            <div class="stat-label">Paid</div>
            <div class="stat-value stat-green">{{ $paidCount }}</div>
        </div>
    </div>

    {{-- Card --}}
    <div class="order-card-wrap">
        <div class="order-card">
            <div class="table-scroll-wrap">
                <table class="order-table">
                    <thead>
                        <tr>
                            <th style="width:170px;"><i class="bi bi-receipt me-1"></i> Order No</th>
                            <th class="text-start"><i class="bi bi-person me-1"></i> Customer</th>
                            <th style="width:130px;"><i class="bi bi-tags me-1"></i> Plan</th>
                            <th style="width:110px;"><i class="bi bi-cash-coin me-1"></i> Total</th>
                            <th style="width:110px;"><i class="bi bi-credit-card me-1"></i> Payment</th>
                            <th style="width:100px;"><i class="bi bi-power me-1"></i> Status</th>
                            <th style="width:100px;"><i class="bi bi-calendar me-1"></i> Date</th>
                            <th style="width:130px;"><i class="bi bi-gear me-1"></i> Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($orders as $order)
                            <tr>
                                <td>
                                    <div class="order-no">{{ $order->order_number }}</div>
                                </td>
                                <td class="text-start">
                                    <div class="order-name">{{ $order->customer_name }}</div>
                                    <div class="order-email">{{ $order->email }}</div>
                                </td>
                                <td><span class="order-plan">{{ $order->plan_name }}</span></td>
                                <td><span class="order-total">${{ number_format($order->total) }}.00</span></td>
                                <td>
                                    <span class="order-pay">{{ ucfirst($order->payment_method) }}</span>
                                    @if ($order->addons)
                                        <div class="order-addon-count">+{{ count($order->addons) }} add-on(s)</div>
                                    @endif
                                </td>
                                <td>
                                    <span class="order-status order-status-{{ $order->status }}">
                                        {{ $order->status }}
                                    </span>
                                </td>
                                <td><span class="order-muted">{{ $order->created_at->format('M j, Y') }}</span></td>
                                <td>
                                    <div class="order-actions">
                                        <a href="{{ route('orders.show', $order) }}" class="order-action-btn" title="View Details">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <form action="{{ route('orders.destroy', $order) }}" method="POST" class="d-inline delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="order-action-btn order-action-danger" title="Delete">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="empty-row">
                                    <div class="empty-state">
                                        <i class="bi bi-bag-x empty-icon"></i>
                                        <div class="empty-title">No Orders Found</div>
                                        <div class="empty-sub">Orders placed from the checkout will appear here.</div>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @if ($orders->hasPages())
                <div class="order-pagination">
                    {{ $orders->links() }}
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
    --cprimary-dim: rgba(96,165,250,0.12);
    --chover: rgba(255,255,255,0.06);
    --cthead-bg: rgba(255,255,255,0.05);
}
.order-page { padding: 24px 28px; height: 100%; }
.order-header {
    background: var(--crd); border: 1px solid var(--cborder); border-radius: 14px;
    padding: 18px 22px; backdrop-filter: blur(8px); margin-bottom: 18px;
}
.order-header-inner {
    display: flex; flex-wrap: wrap; justify-content: space-between;
    align-items: center; gap: 12px;
}
.order-header-title { font-size: 18px; font-weight: 700; color: var(--ctext); margin: 0 0 2px 0; }
.order-header-sub { font-size: 13px; color: var(--cmuted); margin: 0; }
.order-header-actions { display: flex; align-items: center; gap: 10px; flex-wrap: wrap; }
.order-header-badge {
    display: inline-flex; align-items: center; gap: 6px;
    background: var(--cprimary-dim); color: var(--cprimary);
    padding: 8px 16px; border-radius: 24px; font-size: 13px;
    font-weight: 600; border: 1px solid rgba(96,165,250,0.2);
}
.order-stats {
    display: grid; grid-template-columns: repeat(3, 1fr); gap: 14px;
    margin-bottom: 18px;
}
.stat-card {
    background: var(--crd); border: 1px solid var(--cborder);
    border-radius: 12px; padding: 16px 20px;
}
.stat-label { font-size: 12px; color: var(--csub); font-weight: 600; text-transform: uppercase; letter-spacing: 0.4px; }
.stat-value { font-size: 22px; font-weight: 700; color: var(--ctext); margin-top: 6px; }
.stat-green { color: #10b981; }
.stat-amber { color: #f59e0b; }
.order-card-wrap {
    border-radius: 14px; border: 1px solid var(--cborder);
    background: var(--crd); overflow: hidden; backdrop-filter: blur(8px);
}
.table-scroll-wrap { overflow-x: auto; }
.order-table { width: 100%; border-collapse: collapse; font-size: 14px; }
.order-table thead {
    background: var(--cthead-bg); position: sticky; top: 0; z-index: 5;
}
.order-table th {
    padding: 14px 16px; text-align: center; font-weight: 600;
    font-size: 12px; color: var(--cmuted); text-transform: uppercase;
    letter-spacing: 0.4px; border-bottom: 1px solid var(--cborder);
    white-space: nowrap;
}
.order-table th i { color: var(--cprimary); }
.order-table td {
    padding: 14px 16px; text-align: center; color: var(--ctext);
    border-bottom: 1px solid var(--cborder); vertical-align: middle;
}
.order-table tbody tr { transition: background 0.18s ease; }
.order-table tbody tr:hover { background: var(--chover); }
.order-table tbody tr:last-child td { border-bottom: none; }
.order-no { font-weight: 600; color: var(--cprimary); font-size: 13px; }
.order-name { font-weight: 600; color: var(--ctext); }
.order-email { font-size: 12px; color: var(--csub); margin-top: 2px; }
.order-plan { font-weight: 600; color: var(--ctext); }
.order-total { font-weight: 700; color: #10b981; }
.order-pay { color: var(--ctext); }
.order-addon-count { font-size: 11px; color: var(--csub); margin-top: 3px; }
.order-status {
    display: inline-block; padding: 4px 12px; border-radius: 20px;
    font-size: 12px; font-weight: 600; text-transform: capitalize;
}
.order-status-pending { background: rgba(245,158,11,0.12); color: #f59e0b; border: 1px solid rgba(245,158,11,0.25); }
.order-status-paid { background: rgba(16,185,129,0.12); color: #10b981; border: 1px solid rgba(16,185,129,0.25); }
.order-status-processing { background: rgba(96,165,250,0.12); color: #60A5FA; border: 1px solid rgba(96,165,250,0.25); }
.order-status-completed { background: rgba(139,92,246,0.12); color: #a78bfa; border: 1px solid rgba(139,92,246,0.25); }
.order-status-cancelled { background: rgba(248,113,113,0.12); color: #f87171; border: 1px solid rgba(248,113,113,0.25); }
.order-muted { color: var(--csub); font-size: 13px; }
.order-actions { display: flex; gap: 6px; justify-content: center; }
.order-action-btn {
    width: 34px; height: 34px; display: inline-flex; align-items: center; justify-content: center;
    background: rgba(255,255,255,0.04); border: 1px solid var(--cborder);
    border-radius: 8px; color: var(--cprimary); cursor: pointer;
    transition: all 0.2s ease; font-size: 0.9rem; text-decoration: none;
}
.order-action-btn:hover { background: var(--cprimary-dim); color: var(--cprimary); }
.order-action-danger { color: #f87171; }
.order-action-danger:hover { background: rgba(248,113,113,0.1); color: #f87171; }
.order-pagination { padding: 16px 20px; border-top: 1px solid var(--cborder); display: flex; justify-content: flex-end; }
.empty-row { text-align: center; padding: 60px 20px !important; }
.empty-state { display: flex; flex-direction: column; align-items: center; gap: 8px; }
.empty-icon { font-size: 40px; color: var(--csub); margin-bottom: 8px; display: block; }
.empty-title { font-weight: 600; font-size: 16px; color: var(--cmuted); }
.empty-sub { font-size: 13px; color: var(--csub); }
@media (max-width: 992px) {
    .order-page { padding: 20px 22px; }
    .order-table td, .order-table th { padding: 12px 14px; font-size: 13px; }
    .order-stats { grid-template-columns: 1fr; }
}
@media (max-width: 768px) {
    .order-page { padding: 16px; }
    .order-header { padding: 14px 16px; }
    .order-table td, .order-table th { padding: 10px 12px; }
    .order-header-inner { flex-direction: column; align-items: flex-start; gap: 10px; }
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
