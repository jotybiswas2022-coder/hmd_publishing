@extends('backend.app')

@section('title', 'Pricing Plans')

@section('content')

@if (session('success'))
    <input type="hidden" id="sessionSuccess" value="{{ session('success') }}">
@endif

<div class="plan-page">

    {{-- Header --}}
    <div class="plan-header">
        <div class="plan-header-inner">
            <div>
                <h4 class="plan-header-title">Pricing Plans</h4>
                <p class="plan-header-sub">Manage the homepage pricing section from here</p>
            </div>
            <div class="plan-header-actions">
                <span class="plan-header-badge">
                    <i class="bi bi-database me-1"></i>
                    {{ $plans->count() }} Plans
                </span>
                <a href="{{ route('plans.create') }}" class="plan-btn-add">
                    <i class="bi bi-plus-lg me-1"></i> Add New Plan
                </a>
            </div>
        </div>
    </div>

    {{-- Card --}}
    <div class="plan-card-wrap">
        <div class="plan-card">
            <div class="table-scroll-wrap">
                <table class="plan-table">
                    <thead>
                        <tr>
                            <th style="width:45px;">#</th>
                            <th class="text-start"><i class="bi bi-box me-1"></i> Plan</th>
                            <th style="width:110px;"><i class="bi bi-cash-coin me-1"></i> Price</th>
                            <th style="width:230px;"><i class="bi bi-tag me-1"></i> Service / Badge</th>
                            <th style="width:90px;"><i class="bi bi-list-check me-1"></i> Features</th>
                            <th style="width:110px;"><i class="bi bi-star me-1"></i> Featured</th>
                            <th style="width:90px;"><i class="bi bi-power me-1"></i> Status</th>
                            <th style="width:80px;"><i class="bi bi-sort-numeric-down me-1"></i> Order</th>
                            <th style="width:140px;"><i class="bi bi-gear me-1"></i> Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($plans as $plan)
                            <tr>
                                <td class="idx">{{ $loop->iteration }}</td>
                                <td class="text-start">
                                    <div class="plan-name">{{ $plan->name }}</div>
                                    <div class="plan-key">/checkout?plan={{ $plan->key }}</div>
                                </td>
                                <td><span class="plan-price">£{{ number_format($plan->price) }}</span></td>
                                <td>
                                    @if (str_starts_with($plan->key, 'ghost'))
                                        <span class="plan-service plan-service-ghost">Book Writing &amp; Ghostwriting</span>
                                    @else
                                        <span class="plan-service plan-service-package">Complete Publishing</span>
                                    @endif
                                    @if($plan->badge)
                                        <div class="plan-badge plan-badge-sub">{{ $plan->badge }}</div>
                                    @else
                                        <div class="plan-muted">—</div>
                                    @endif
                                </td>
                                <td><span class="plan-features-count">{{ count($plan->features ?? []) }}</span></td>
                                <td>
                                    @if($plan->is_featured)
                                        <span class="plan-featured-tag"><i class="bi bi-star-fill me-1"></i>Most Popular</span>
                                    @else
                                        <span class="plan-muted">—</span>
                                    @endif
                                </td>
                                <td>
                                    <span class="plan-status {{ $plan->is_active ? 'plan-status-on' : 'plan-status-off' }}">
                                        {{ $plan->is_active ? 'Active' : 'Inactive' }}
                                    </span>
                                </td>
                                <td><span class="plan-muted">{{ $plan->sort_order }}</span></td>
                                <td>
                                    <div class="plan-actions">
                                        <a href="{{ route('plans.edit', $plan) }}" class="plan-action-btn" title="Edit">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                        <form action="{{ route('plans.destroy', $plan) }}" method="POST" class="d-inline delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="plan-action-btn plan-action-danger" title="Delete">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" class="empty-row">
                                    <div class="empty-state">
                                        <i class="bi bi-tags empty-icon"></i>
                                        <div class="empty-title">No Plans Found</div>
                                        <div class="empty-sub">Add your first pricing plan to get started.</div>
                                        <a href="{{ route('plans.create') }}" class="plan-btn-add empty-btn">
                                            <i class="bi bi-plus-lg me-1"></i> Add New Plan
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

    {{-- Features Preview Modal --}}
    @foreach ($plans as $plan)
        @if(!empty($plan->features))
            <div class="modal fade" id="featuresModal{{ $plan->id }}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="plan-modal-content">
                        <div class="plan-modal-header">
                            <h5 class="plan-modal-title">
                                <i class="bi bi-list-check me-2"></i> {{ $plan->name }} — Features
                            </h5>
                            <button type="button" class="plan-modal-close" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i></button>
                        </div>
                        <div class="plan-modal-body">
                            <ul class="plan-modal-list">
                                @foreach ($plan->features as $feature)
                                    <li><i class="bi bi-check-circle-fill me-2"></i>{{ $feature }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="plan-modal-footer">
                            <button type="button" class="plan-btn-close" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach

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
.plan-page { padding: 24px 28px; height: 100%; }
.plan-header {
    background: var(--crd); border: 1px solid var(--cborder); border-radius: 14px;
    padding: 18px 22px; backdrop-filter: blur(8px); margin-bottom: 20px;
}
.plan-header-inner {
    display: flex; flex-wrap: wrap; justify-content: space-between;
    align-items: center; gap: 12px;
}
.plan-header-title { font-size: 18px; font-weight: 700; color: var(--ctext); margin: 0 0 2px 0; }
.plan-header-sub { font-size: 13px; color: var(--cmuted); margin: 0; }
.plan-header-actions { display: flex; align-items: center; gap: 10px; flex-wrap: wrap; }
.plan-header-badge {
    display: inline-flex; align-items: center; gap: 6px;
    background: var(--cprimary-dim); color: var(--cprimary);
    padding: 8px 16px; border-radius: 24px; font-size: 13px;
    font-weight: 600; border: 1px solid rgba(96,165,250,0.2);
}
.plan-btn-add {
    display: inline-flex; align-items: center; gap: 6px;
    background: linear-gradient(135deg, #2563EB, #1E40AF);
    color: #fff; text-decoration: none; padding: 9px 18px;
    border-radius: 10px; font-size: 13px; font-weight: 600;
    box-shadow: 0 4px 12px rgba(37,99,235,0.25);
    transition: all 0.2s ease; border: none; cursor: pointer;
}
.plan-btn-add:hover { transform: translateY(-1px); box-shadow: 0 6px 20px rgba(37,99,235,0.35); color: #fff; }
.plan-card-wrap {
    border-radius: 14px; border: 1px solid var(--cborder);
    background: var(--crd); overflow: hidden; backdrop-filter: blur(8px);
}
.table-scroll-wrap { overflow-x: auto; }
.plan-table { width: 100%; border-collapse: collapse; font-size: 14px; }
.plan-table thead {
    background: var(--cthead-bg); position: sticky; top: 0; z-index: 5;
}
.plan-table th {
    padding: 14px 16px; text-align: center; font-weight: 600;
    font-size: 12px; color: var(--cmuted); text-transform: uppercase;
    letter-spacing: 0.4px; border-bottom: 1px solid var(--cborder);
}
.plan-table th i { color: var(--cprimary); }
.plan-table td {
    padding: 14px 16px; text-align: center; color: var(--ctext);
    border-bottom: 1px solid var(--cborder); vertical-align: middle;
}
.plan-table tbody tr { transition: background 0.18s ease; }
.plan-table tbody tr:hover { background: var(--chover); }
.plan-table tbody tr:last-child td { border-bottom: none; }
.idx { color: var(--csub) !important; font-weight: 600; }
.plan-name { font-weight: 600; color: var(--ctext); }
.plan-key { font-size: 12px; color: var(--csub); margin-top: 2px; font-family: monospace; }
.plan-price { font-weight: 700; color: var(--ctext); }
.plan-badge {
    display: inline-block; background: rgba(96,165,250,0.15);
    color: var(--cprimary); border: 1px solid rgba(96,165,250,0.2);
    padding: 3px 10px; border-radius: 6px; font-size: 11px; font-weight: 700;
}
.plan-badge-sub { margin-top: 6px; }
.plan-service {
    display: inline-block; padding: 4px 10px; border-radius: 6px;
    font-size: 11px; font-weight: 700; white-space: nowrap;
}
.plan-service-ghost {
    background: rgba(99,102,241,0.15); color: #818cf8;
    border: 1px solid rgba(99,102,241,0.25);
}
.plan-service-package {
    background: rgba(16,185,129,0.12); color: #34d399;
    border: 1px solid rgba(16,185,129,0.22);
}
.plan-features-count {
    display: inline-block; background: rgba(255,255,255,0.06);
    color: var(--cmuted); border: 1px solid var(--cborder);
    min-width: 28px; padding: 3px 8px; border-radius: 20px; font-size: 12px;
}
.plan-featured-tag {
    display: inline-block; background: rgba(245,158,11,0.12);
    color: #fbbf24; border: 1px solid rgba(245,158,11,0.2);
    padding: 3px 10px; border-radius: 6px; font-size: 11px; font-weight: 700;
}
.plan-status {
    display: inline-block; padding: 4px 12px; border-radius: 20px;
    font-size: 12px; font-weight: 600;
}
.plan-status-on { background: rgba(16,185,129,0.12); color: #10b981; border: 1px solid rgba(16,185,129,0.2); }
.plan-status-off { background: rgba(148,163,184,0.1); color: var(--csub); border: 1px solid var(--cborder); }
.plan-muted { color: var(--csub); }
.plan-actions { display: flex; gap: 6px; justify-content: center; }
.plan-action-btn {
    width: 34px; height: 34px; display: inline-flex; align-items: center; justify-content: center;
    background: rgba(255,255,255,0.04); border: 1px solid var(--cborder);
    border-radius: 8px; color: var(--cprimary); cursor: pointer;
    transition: all 0.2s ease; font-size: 0.9rem; text-decoration: none;
}
.plan-action-btn:hover { background: var(--cprimary-dim); color: var(--cprimary); }
.plan-action-danger { color: #f87171; }
.plan-action-danger:hover { background: rgba(248,113,113,0.1); color: #f87171; }
.plan-modal-content {
    position: relative; display: flex; flex-direction: column; width: 100%;
    background: #1e293b; border: 1px solid rgba(255,255,255,0.1);
    border-radius: 16px; box-shadow: 0 25px 60px rgba(0,0,0,0.5); overflow: hidden;
}
.plan-modal-header {
    display: flex; align-items: center; justify-content: space-between;
    padding: 18px 24px;
    background: linear-gradient(135deg, rgba(96,165,250,0.15), rgba(96,165,250,0.05));
    border-bottom: 1px solid var(--cborder);
}
.plan-modal-title { font-size: 16px; font-weight: 600; color: var(--ctext); margin: 0; }
.plan-modal-title i { color: var(--cprimary); }
.plan-modal-close {
    background: none; border: none; color: var(--cmuted); font-size: 14px;
    cursor: pointer; padding: 6px; border-radius: 6px; transition: all 0.2s;
    width: 32px; height: 32px; display: flex; align-items: center; justify-content: center;
}
.plan-modal-close:hover { background: rgba(255,255,255,0.1); color: var(--ctext); }
.plan-modal-body { padding: 20px 24px; }
.plan-modal-list { list-style: none; margin: 0; padding: 0; }
.plan-modal-list li {
    display: flex; align-items: flex-start; gap: 2px;
    padding: 9px 0; color: #e2e8f0; font-size: 14px; border-bottom: 1px solid rgba(255,255,255,0.04);
}
.plan-modal-list li:last-child { border-bottom: none; }
.plan-modal-list li i { color: #10b981; margin-top: 2px; }
.plan-modal-footer {
    padding: 14px 24px; border-top: 1px solid var(--cborder);
    display: flex; justify-content: flex-end;
}
.plan-btn-close {
    background: rgba(255,255,255,0.08); border: 1px solid var(--cborder);
    color: var(--cmuted); padding: 8px 24px; border-radius: 8px;
    font-size: 14px; font-weight: 500; cursor: pointer; transition: all 0.2s ease;
}
.plan-btn-close:hover { background: rgba(255,255,255,0.14); color: var(--ctext); }
.empty-row { text-align: center; padding: 60px 20px !important; }
.empty-state { display: flex; flex-direction: column; align-items: center; gap: 8px; }
.empty-icon { font-size: 40px; color: var(--csub); margin-bottom: 8px; display: block; }
.empty-title { font-weight: 600; font-size: 16px; color: var(--cmuted); }
.empty-sub { font-size: 13px; color: var(--csub); }
.empty-btn { margin-top: 12px; }
@media (max-width: 992px) {
    .plan-page { padding: 20px 22px; }
    .plan-table td, .plan-table th { padding: 12px 14px; font-size: 13px; }
}
@media (max-width: 768px) {
    .plan-page { padding: 16px; }
    .plan-header { padding: 14px 16px; }
    .plan-table td, .plan-table th { padding: 10px 12px; }
    .plan-header-inner { flex-direction: column; align-items: flex-start; gap: 10px; }
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
                title: 'Delete this plan?',
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
