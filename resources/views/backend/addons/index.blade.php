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
                <p class="addon-header-sub">Add-ons are grouped by service — click a service to view its add-ons</p>
            </div>
            <div class="addon-header-actions">
                <span class="addon-header-badge">
                    <i class="bi bi-database me-1"></i>
                    {{ $addons->count() }} Add-ons
                </span>
                <span class="addon-header-badge">
                    <i class="bi bi-folder me-1"></i>
                    {{ $addonGroups->count() }} Service groups
                </span>
                <a href="{{ route('addons.create') }}" class="addon-btn-add">
                    <i class="bi bi-plus-lg me-1"></i> Add New Add-on
                </a>
            </div>
        </div>
    </div>

    {{-- Service folders --}}
    <div class="addon-folder-list">

        @forelse ($addonGroups as $service => $serviceAddons)

            <div class="addon-folder @if(str_starts_with($service, 'Book Writing')) open @endif">

                <button type="button" class="addon-folder-head" onclick="toggleFolder(this)">

                    <span class="addon-folder-chevron">
                        <i class="bi bi-chevron-right"></i>
                    </span>

                    <span class="addon-folder-label">
                        {{ $service }}
                    </span>

                    <span class="addon-folder-count">
                        {{ $serviceAddons->count() }} add-on{{ $serviceAddons->count() > 1 ? 's' : '' }}
                    </span>

                    <span class="addon-folder-total">
                        from +${{ number_format($serviceAddons->min('price')) }}
                    </span>

                </button>

                <div class="addon-folder-body">

                    @foreach ($serviceAddons as $addon)

                        <div class="addon-row">

                            <div class="addon-row-main">
                                <div class="addon-name">{{ $addon->name }}</div>
                                <div class="addon-key">{{ $addon->description }}</div>
                                <div class="addon-slug">{{ $addon->key }}</div>
                            </div>

                            <div class="addon-cell addon-cell-price">
                                <span class="addon-cell-label">Price</span>
                                <span class="addon-price">+${{ number_format($addon->price) }}</span>
                            </div>

                            <div class="addon-cell addon-cell-status">
                                <span class="addon-cell-label">Status</span>
                                <span class="addon-status {{ $addon->is_active ? 'addon-status-on' : 'addon-status-off' }}">
                                    {{ $addon->is_active ? 'Active' : 'Inactive' }}
                                </span>
                            </div>

                            <div class="addon-cell addon-cell-order">
                                <span class="addon-cell-label">Order</span>
                                <span class="addon-muted">{{ $addon->sort_order }}</span>
                            </div>

                            <div class="addon-row-actions">
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

                        </div>

                    @endforeach

                </div>

            </div>

        @empty

            <div class="empty-state" style="padding:60px 20px; text-align:center;">
                <i class="bi bi-plus-square empty-icon"></i>
                <div class="empty-title">No Add-ons Found</div>
                <div class="empty-sub">Add your first checkout add-on to get started.</div>
                <a href="{{ route('addons.create') }}" class="addon-btn-add empty-btn">
                    <i class="bi bi-plus-lg me-1"></i> Add New Add-on
                </a>
            </div>

        @endforelse

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

/* ===== Folders ===== */
.addon-folder-list { display: flex; flex-direction: column; gap: 12px; }
.addon-folder {
    border-radius: 14px; border: 1px solid var(--cborder);
    background: var(--crd); overflow: hidden; backdrop-filter: blur(8px);
}
.addon-folder-head {
    width: 100%; display: flex; align-items: center; gap: 12px;
    background: none; border: none; cursor: pointer; padding: 16px 20px;
    color: var(--ctext); text-align: left; transition: background 0.18s ease;
}
.addon-folder-head:hover { background: var(--chover); }
.addon-folder-chevron {
    width: 28px; height: 28px; flex-shrink: 0; border-radius: 8px;
    background: var(--cprimary-dim); color: var(--cprimary);
    display: flex; align-items: center; justify-content: center;
    transition: transform 0.2s ease;
}
.addon-folder-label { font-size: 15px; font-weight: 700; color: var(--ctext); }
.addon-folder-count {
    margin-left: auto; background: rgba(255,255,255,0.06);
    color: var(--cmuted); border: 1px solid var(--cborder);
    padding: 3px 12px; border-radius: 20px; font-size: 12px; font-weight: 600;
}
.addon-folder-total { color: var(--cmuted); font-size: 12px; font-weight: 600; }
.addon-folder-body {
    max-height: 0; overflow: hidden; opacity: 0;
    transition: max-height 0.3s ease, opacity 0.3s ease;
    border-top: 0 solid var(--cborder);
}
.addon-folder.open .addon-folder-body {
    max-height: 2000px; opacity: 1; border-top-width: 1px;
}
.addon-folder.open .addon-folder-chevron { transform: rotate(90deg); }

/* ===== Add-on rows ===== */
.addon-row {
    display: flex; align-items: center; gap: 18px;
    padding: 14px 20px; border-bottom: 1px solid var(--cborder);
    flex-wrap: wrap;
}
.addon-row:last-child { border-bottom: none; }
.addon-row:hover { background: var(--chover); }
.addon-row-main { min-width: 220px; flex: 1; }
.addon-name { font-weight: 600; color: var(--ctext); font-size: 14px; }
.addon-key { font-size: 12px; color: var(--cmuted); margin-top: 2px; }
.addon-slug { font-size: 11px; color: var(--csub); margin-top: 2px; font-family: monospace; }
.addon-cell { display: flex; flex-direction: column; gap: 3px; min-width: 90px; }
.addon-cell-label {
    font-size: 10px; text-transform: uppercase; letter-spacing: 0.4px;
    color: var(--csub); font-weight: 600;
}
.addon-price { font-weight: 700; color: #10b981; }
.addon-status {
    display: inline-block; padding: 4px 10px; border-radius: 20px;
    font-size: 12px; font-weight: 600; white-space: nowrap;
}
.addon-status-on { background: rgba(16,185,129,0.12); color: #10b981; border: 1px solid rgba(16,185,129,0.2); }
.addon-status-off { background: rgba(148,163,184,0.1); color: var(--csub); border: 1px solid var(--cborder); }
.addon-muted { color: var(--csub); font-size: 13px; }
.addon-row-actions { display: flex; gap: 6px; margin-left: auto; }
.addon-action-btn {
    width: 34px; height: 34px; display: inline-flex; align-items: center; justify-content: center;
    background: rgba(255,255,255,0.04); border: 1px solid var(--cborder);
    border-radius: 8px; color: var(--cprimary); cursor: pointer;
    transition: all 0.2s ease; font-size: 0.9rem; text-decoration: none;
}
.addon-action-btn:hover { background: var(--cprimary-dim); color: var(--cprimary); }
.addon-action-danger { color: #f87171; }
.addon-action-danger:hover { background: rgba(248,113,113,0.1); color: #f87171; }

.empty-icon { font-size: 40px; color: var(--csub); margin-bottom: 8px; display: block; }
.empty-title { font-weight: 600; font-size: 16px; color: var(--cmuted); }
.empty-sub { font-size: 13px; color: var(--csub); }
.empty-btn { margin-top: 12px; display: inline-flex; }

@media (max-width: 992px) {
    .addon-page { padding: 20px 22px; }
}
@media (max-width: 768px) {
    .addon-page { padding: 16px; }
    .addon-header { padding: 14px 16px; }
    .addon-header-inner { flex-direction: column; align-items: flex-start; gap: 10px; }
    .addon-row { flex-direction: column; align-items: flex-start; gap: 10px; }
    .addon-row-main { min-width: 100%; }
    .addon-row-actions { margin-left: 0; }
}
</style>

<script>
function toggleFolder(btn) {
    var folder = btn.closest('.addon-folder');
    var allFolders = document.querySelectorAll('.addon-folder');

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