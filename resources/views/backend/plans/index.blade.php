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
                <p class="plan-header-sub">Plans are grouped by badge — click a badge to view its plans</p>
            </div>
            <div class="plan-header-actions">
                <div class="plan-search-wrap">
                    <i class="bi bi-search plan-search-icon"></i>
                    <input
                        type="text"
                        id="planSearch"
                        class="plan-search-input"
                        placeholder="Search plans..."
                        autocomplete="off"
                    >
                </div>
                <span class="plan-header-badge">
                    <i class="bi bi-database me-1"></i>
                    {{ $plans->count() }} Plans
                </span>
                <span class="plan-header-badge">
                    <i class="bi bi-folder me-1"></i>
                    {{ $planGroups->count() }} Badge groups
                </span>
                <a href="{{ route('plans.create') }}" class="plan-btn-add">
                    <i class="bi bi-plus-lg me-1"></i> Add New Plan
                </a>
            </div>
        </div>
    </div>

    {{-- Folders --}}
    <div class="plan-folder-list">

        @forelse ($planGroups as $badge => $badgePlans)

            <div class="plan-folder">

                <button type="button" class="plan-folder-head" onclick="toggleFolder(this)">

                    <span class="plan-folder-chevron">
                        <i class="bi bi-chevron-right"></i>
                    </span>

                    <span class="plan-folder-label">
                        {{ $badge }}
                    </span>

                    <span class="plan-folder-count">
                        {{ $badgePlans->count() }} plan{{ $badgePlans->count() > 1 ? 's' : '' }}
                    </span>

                    <span class="plan-folder-total">
                        from £{{ number_format($badgePlans->min('price')) }}
                    </span>

                </button>

                <div class="plan-folder-body">

                    @foreach ($badgePlans as $plan)

                        <div class="plan-row">

                            <div class="plan-row-main">
                                <div class="plan-name">{{ $plan->name }}</div>
                                <div class="plan-key">/checkout?plan={{ $plan->key }}</div>
                            </div>

                            <div class="plan-cell plan-cell-price">
                                <span class="plan-cell-label">Price</span>
                                <span class="plan-price">£{{ number_format($plan->price) }}</span>
                            </div>

                            <div class="plan-cell plan-cell-features">
                                <span class="plan-cell-label">Features</span>
                                @if(!empty($plan->features))
                                    <button type="button" class="plan-features-btn" data-bs-toggle="modal" data-bs-target="#featuresModal{{ $plan->id }}">
                                        <i class="bi bi-list-check me-1"></i> {{ count($plan->features) }}
                                    </button>
                                @else
                                    <span class="plan-muted">—</span>
                                @endif
                            </div>

                            <div class="plan-cell plan-cell-featured">
                                <span class="plan-cell-label">Featured</span>
                                @if($plan->is_featured)
                                    <span class="plan-featured-tag"><i class="bi bi-star-fill me-1"></i>Most Popular</span>
                                @else
                                    <span class="plan-muted">—</span>
                                @endif
                            </div>

                            <div class="plan-cell plan-cell-status">
                                <span class="plan-cell-label">Status</span>
                                <span class="plan-status {{ $plan->is_active ? 'plan-status-on' : 'plan-status-off' }}">
                                    {{ $plan->is_active ? 'Active' : 'Inactive' }}
                                </span>
                            </div>

                            <div class="plan-cell plan-cell-order">
                                <span class="plan-cell-label">Order</span>
                                <span class="plan-muted">{{ $plan->sort_order }}</span>
                            </div>

                            <div class="plan-row-actions">
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

                        </div>

                    @endforeach

                </div>

            </div>

        @empty

            <div class="empty-state" style="padding:60px 20px; text-align:center;">
                <i class="bi bi-tags empty-icon"></i>
                <div class="empty-title">No Plans Found</div>
                <div class="empty-sub">Add your first pricing plan to get started.</div>
                <a href="{{ route('plans.create') }}" class="plan-btn-add empty-btn">
                    <i class="bi bi-plus-lg me-1"></i> Add New Plan
                </a>
            </div>

        @endforelse

    </div>

    <div class="plan-search-empty" id="planSearchEmpty">
        <i class="bi bi-search" style="font-size:26px; color:var(--csub); display:block; margin-bottom:8px;"></i>
        No plans match your search.
    </div>

    {{-- Features Preview Modals --}}
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

/* ===== Folders ===== */
.plan-folder-list { display: flex; flex-direction: column; gap: 12px; }
.plan-folder {
    border-radius: 14px; border: 1px solid var(--cborder);
    background: var(--crd); overflow: hidden; backdrop-filter: blur(8px);
}
.plan-folder-head {
    width: 100%; display: flex; align-items: center; gap: 12px;
    background: none; border: none; cursor: pointer; padding: 16px 20px;
    color: var(--ctext); text-align: left; transition: background 0.18s ease;
}
.plan-folder-head:hover { background: var(--chover); }
.plan-folder-chevron {
    width: 28px; height: 28px; flex-shrink: 0; border-radius: 8px;
    background: var(--cprimary-dim); color: var(--cprimary);
    display: flex; align-items: center; justify-content: center;
    transition: transform 0.2s ease;
}
.plan-folder-label { font-size: 15px; font-weight: 700; color: var(--ctext); }
.plan-folder-count {
    margin-left: auto; background: rgba(255,255,255,0.06);
    color: var(--cmuted); border: 1px solid var(--cborder);
    padding: 3px 12px; border-radius: 20px; font-size: 12px; font-weight: 600;
}
.plan-folder-total { color: var(--cmuted); font-size: 12px; font-weight: 600; }
.plan-folder-body {
    max-height: 0; overflow: hidden; opacity: 0;
    transition: max-height 0.3s ease, opacity 0.3s ease;
    border-top: 0 solid var(--cborder);
}
.plan-folder.open .plan-folder-body {
    max-height: 2000px; opacity: 1; border-top-width: 1px;
}
.plan-folder.open .plan-folder-chevron { transform: rotate(90deg); }

/* ===== Plan rows ===== */
.plan-row {
    display: flex; align-items: center; gap: 18px;
    padding: 14px 20px; border-bottom: 1px solid var(--cborder);
    flex-wrap: wrap;
}
.plan-row:last-child { border-bottom: none; }
.plan-row:hover { background: var(--chover); }
.plan-row-main { min-width: 200px; flex: 1; }
.plan-name { font-weight: 600; color: var(--ctext); font-size: 14px; }
.plan-key { font-size: 12px; color: var(--csub); margin-top: 2px; font-family: monospace; }
.plan-cell { display: flex; flex-direction: column; gap: 3px; min-width: 90px; }
.plan-cell-price { min-width: 80px; }
.plan-cell-label {
    font-size: 10px; text-transform: uppercase; letter-spacing: 0.4px;
    color: var(--csub); font-weight: 600;
}
.plan-price { font-weight: 700; color: var(--ctext); }
.plan-features-btn {
    background: rgba(96,165,250,0.12); color: var(--cprimary);
    border: 1px solid rgba(96,165,250,0.2); border-radius: 6px;
    padding: 4px 10px; font-size: 12px; font-weight: 600; cursor: pointer; transition: all 0.2s ease;
}
.plan-features-btn:hover { background: var(--cprimary-dim); }
.plan-featured-tag {
    display: inline-block; background: rgba(245,158,11,0.12);
    color: #fbbf24; border: 1px solid rgba(245,158,11,0.2);
    padding: 3px 8px; border-radius: 6px; font-size: 11px; font-weight: 700;
    white-space: nowrap;
}
.plan-status {
    display: inline-block; padding: 4px 10px; border-radius: 20px;
    font-size: 12px; font-weight: 600; white-space: nowrap;
}
.plan-status-on { background: rgba(16,185,129,0.12); color: #10b981; border: 1px solid rgba(16,185,129,0.2); }
.plan-status-off { background: rgba(148,163,184,0.1); color: var(--csub); border: 1px solid var(--cborder); }
.plan-muted { color: var(--csub); font-size: 13px; }
.plan-row-actions { display: flex; gap: 6px; margin-left: auto; }
.plan-action-btn {
    width: 34px; height: 34px; display: inline-flex; align-items: center; justify-content: center;
    background: rgba(255,255,255,0.04); border: 1px solid var(--cborder);
    border-radius: 8px; color: var(--cprimary); cursor: pointer;
    transition: all 0.2s ease; font-size: 0.9rem; text-decoration: none;
}
.plan-action-btn:hover { background: var(--cprimary-dim); color: var(--cprimary); }
.plan-action-danger { color: #f87171; }
.plan-action-danger:hover { background: rgba(248,113,113,0.1); color: #f87171; }

/* ===== Search ===== */
.plan-search-wrap {
    position: relative; display: flex; align-items: center;
}
.plan-search-icon {
    position: absolute; left: 12px; color: var(--csub); font-size: 13px;
    pointer-events: none;
}
.plan-search-input {
    background: rgba(255,255,255,0.05); border: 1px solid var(--cborder);
    color: var(--ctext); border-radius: 10px; padding: 9px 14px 9px 34px;
    font-size: 13px; width: 240px; outline: none; transition: all 0.2s ease;
}
.plan-search-input::placeholder { color: var(--csub); }
.plan-search-input:focus {
    border-color: rgba(96,165,250,0.5);
    box-shadow: 0 0 0 3px rgba(96,165,250,0.15);
    background: rgba(255,255,255,0.07);
}
.plan-folder.hidden { display: none; }
.plan-row.hidden { display: none; }
.plan-search-empty {
    display: none; padding: 40px 20px; text-align: center; color: var(--cmuted);
    border: 1px dashed var(--cborder); border-radius: 14px; font-size: 14px;
}
.plan-search-empty.show { display: block; }

/* ===== Modal ===== */
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

.empty-icon { font-size: 40px; color: var(--csub); margin-bottom: 8px; display: block; }
.empty-title { font-weight: 600; font-size: 16px; color: var(--cmuted); }
.empty-sub { font-size: 13px; color: var(--csub); }
.empty-btn { margin-top: 12px; display: inline-flex; }

@media (max-width: 992px) {
    .plan-page { padding: 20px 22px; }
}
@media (max-width: 768px) {
    .plan-page { padding: 16px; }
    .plan-header { padding: 14px 16px; }
    .plan-header-inner { flex-direction: column; align-items: flex-start; gap: 10px; }
    .plan-row { flex-direction: column; align-items: flex-start; gap: 10px; }
    .plan-row-main { min-width: 100%; }
    .plan-row-actions { margin-left: 0; }
}
</style>

<script>
function toggleFolder(btn) {
    var folder = btn.closest('.plan-folder');
    var allFolders = document.querySelectorAll('.plan-folder');

    allFolders.forEach(function (f) {
        if (f !== folder) {
            f.classList.remove('open');
        }
    });

    folder.classList.toggle('open');
}

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

    var searchInput = document.getElementById('planSearch');
    if (searchInput) {
        searchInput.addEventListener('input', function () {
            var q = searchInput.value.trim().toLowerCase();
            var folders = document.querySelectorAll('.plan-folder');
            var anyVisible = false;

            folders.forEach(function (folder) {
                var rows = folder.querySelectorAll('.plan-row');
                var folderVisible = false;

                rows.forEach(function (row) {
                    var text = row.textContent.toLowerCase();
                    var matches = q === '' || text.indexOf(q) !== -1;
                    row.classList.toggle('hidden', !matches);
                    if (matches) {
                        folderVisible = true;
                        anyVisible = true;
                    }
                });

                folder.classList.toggle('hidden', !folderVisible);
                if (folderVisible) {
                    folder.classList.add('open');
                } else {
                    folder.classList.remove('open');
                }
            });

            document.getElementById('planSearchEmpty').classList.toggle('show', !anyVisible);
        });
    }
});
</script>

@endsection