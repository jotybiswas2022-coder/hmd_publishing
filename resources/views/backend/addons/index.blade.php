@extends('backend.app')

@section('title', 'Order Add-ons')

@section('content')

@if (session('success'))
    <input type="hidden" id="sessionSuccess" value="{{ session('success') }}">
@endif

<div class="addon-page">

    {{-- Header --}}
    <div class="addon-header">
        <div class="addon-header-inner">
            <div>
                <h4 class="addon-header-title">Order Add-ons</h4>
                <p class="addon-header-sub">Manage the "Enhance Your Order" options on the checkout page</p>
            </div>
            <div class="addon-header-actions">
                <span class="addon-header-badge">
                    <i class="bi bi-database me-1"></i>
                    {{ $addons->count() }} Add-ons
                </span>
                <a href="{{ route('addons.create') }}" class="addon-btn-add">
                    <i class="bi bi-plus-lg me-1"></i> Add New Add-on
                </a>
            </div>
        </div>
    </div>

    {{-- Card --}}
    <div class="addon-card-wrap">
        <div class="addon-card">
            <div class="table-scroll-wrap">
                <table class="addon-table">
                    <thead>
                        <tr>
                            <th style="width:45px;">#</th>
                            <th class="text-start"><i class="bi bi-box me-1"></i> Add-on</th>
                            <th style="width:110px;"><i class="bi bi-cash-coin me-1"></i> Price</th>
                            <th style="width:90px;"><i class="bi bi-power me-1"></i> Status</th>
                            <th style="width:80px;"><i class="bi bi-sort-numeric-down me-1"></i> Order</th>
                            <th style="width:140px;"><i class="bi bi-gear me-1"></i> Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($addons as $addon)
                            <tr>
                                <td class="idx">{{ $loop->iteration }}</td>
                                <td class="text-start">
                                    <div class="addon-name">{{ $addon->name }}</div>
                                    <div class="addon-key">{{ $addon->description }}</div>
                                </td>
                                <td><span class="addon-price">+${{ number_format($addon->price) }}</span></td>
                                <td>
                                    <span class="addon-status {{ $addon->is_active ? 'addon-status-on' : 'addon-status-off' }}">
                                        {{ $addon->is_active ? 'Active' : 'Inactive' }}
                                    </span>
                                </td>
                                <td><span class="addon-muted">{{ $addon->sort_order }}</span></td>
                                <td>
                                    <div class="addon-actions">
                                        <a href="{{ route('addons.edit', $addon) }}" class="addon-action-btn" title="Edit">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <form action="{{ route('addons.destroy', $addon) }}" method="POST" class="d-inline delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="addon-action-btn addon-action-danger" title="Delete">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="empty-row">
                                    <div class="empty-state">
                                        <i class="bi bi-plus-square empty-icon"></i>
                                        <div class="empty-title">No Add-ons Found</div>
                                        <div class="empty-sub">Add your first checkout add-on to get started.</div>
                                        <a href="{{ route('addons.create') }}" class="addon-btn-add empty-btn">
                                            <i class="bi bi-plus-lg me-1"></i> Add New Add-on
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
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
.addon-page { padding: 24px 28px; height: 100%; }
.addon-header {
    background: var(--crd); border: 1px solid var(--cborder); border-radius: 14px;
    padding: 18px 22px; backdrop-filter: blur(8px); margin-bottom: 20px;
}
.addon-header-inner {
    display: flex; flex-wrap: wrap; justify-content: space-between;
    align-items: center; gap: 12px;
}
.addon-header-title { font-size: 18px; font-weight: 700; color: var(--ctext); margin: 0 0 2px 0; }
.addon-header-sub { font-size: 13px; color: var(--cmuted); margin: 0; }
.addon-header-actions { display: flex; align-items: center; gap: 10px; flex-wrap: wrap; }
.addon-header-badge {
    display: inline-flex; align-items: center; gap: 6px;
    background: var(--cprimary-dim); color: var(--cprimary);
    padding: 8px 16px; border-radius: 24px; font-size: 13px;
    font-weight: 600; border: 1px solid rgba(96,165,250,0.2);
}
.addon-btn-add {
    display: inline-flex; align-items: center; gap: 6px;
    background: linear-gradient(135deg, #2563EB, #1E40AF);
    color: #fff; text-decoration: none; padding: 9px 18px;
    border-radius: 10px; font-size: 13px; font-weight: 600;
    box-shadow: 0 4px 12px rgba(37,99,235,0.25);
    transition: all 0.2s ease; border: none; cursor: pointer;
}
.addon-btn-add:hover { transform: translateY(-1px); box-shadow: 0 6px 20px rgba(37,99,235,0.35); color: #fff; }
.addon-card-wrap {
    border-radius: 14px; border: 1px solid var(--cborder);
    background: var(--crd); overflow: hidden; backdrop-filter: blur(8px);
}
.table-scroll-wrap { overflow-x: auto; }
.addon-table { width: 100%; border-collapse: collapse; font-size: 14px; }
.addon-table thead {
    background: var(--cthead-bg); position: sticky; top: 0; z-index: 5;
}
.addon-table th {
    padding: 14px 16px; text-align: center; font-weight: 600;
    font-size: 12px; color: var(--cmuted); text-transform: uppercase;
    letter-spacing: 0.4px; border-bottom: 1px solid var(--cborder);
}
.addon-table th i { color: var(--cprimary); }
.addon-table td {
    padding: 14px 16px; text-align: center; color: var(--ctext);
    border-bottom: 1px solid var(--cborder); vertical-align: middle;
}
.addon-table tbody tr { transition: background 0.18s ease; }
.addon-table tbody tr:hover { background: var(--chover); }
.addon-table tbody tr:last-child td { border-bottom: none; }
.idx { color: var(--csub) !important; font-weight: 600; }
.addon-name { font-weight: 600; color: var(--ctext); }
.addon-key { font-size: 12px; color: var(--csub); margin-top: 2px; }
.addon-price { font-weight: 700; color: #10b981; }
.addon-status {
    display: inline-block; padding: 4px 12px; border-radius: 20px;
    font-size: 12px; font-weight: 600;
}
.addon-status-on { background: rgba(16,185,129,0.12); color: #10b981; border: 1px solid rgba(16,185,129,0.2); }
.addon-status-off { background: rgba(148,163,184,0.1); color: var(--csub); border: 1px solid var(--cborder); }
.addon-muted { color: var(--csub); }
.addon-actions { display: flex; gap: 6px; justify-content: center; }
.addon-action-btn {
    width: 34px; height: 34px; display: inline-flex; align-items: center; justify-content: center;
    background: rgba(255,255,255,0.04); border: 1px solid var(--cborder);
    border-radius: 8px; color: var(--cprimary); cursor: pointer;
    transition: all 0.2s ease; font-size: 0.9rem; text-decoration: none;
}
.addon-action-btn:hover { background: var(--cprimary-dim); color: var(--cprimary); }
.addon-action-danger { color: #f87171; }
.addon-action-danger:hover { background: rgba(248,113,113,0.1); color: #f87171; }
.empty-row { text-align: center; padding: 60px 20px !important; }
.empty-state { display: flex; flex-direction: column; align-items: center; gap: 8px; }
.empty-icon { font-size: 40px; color: var(--csub); margin-bottom: 8px; display: block; }
.empty-title { font-weight: 600; font-size: 16px; color: var(--cmuted); }
.empty-sub { font-size: 13px; color: var(--csub); }
.empty-btn { margin-top: 12px; }
@media (max-width: 992px) {
    .addon-page { padding: 20px 22px; }
    .addon-table td, .addon-table th { padding: 12px 14px; font-size: 13px; }
}
@media (max-width: 768px) {
    .addon-page { padding: 16px; }
    .addon-header { padding: 14px 16px; }
    .addon-table td, .addon-table th { padding: 10px 12px; }
    .addon-header-inner { flex-direction: column; align-items: flex-start; gap: 10px; }
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
                title: 'Delete this add-on?',
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
