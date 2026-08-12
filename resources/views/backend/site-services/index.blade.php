@extends('backend.app')

@section('title', 'Services Page')

@section('content')

@if (session('success'))
    <input type="hidden" id="sessionSuccess" value="{{ session('success') }}">
@endif

<div class="svc-page">

    {{-- Header --}}
    <div class="svc-header">
        <div class="svc-header-inner">
            <div>
                <h4 class="svc-header-title">Services Page</h4>
                <p class="svc-header-sub">Manage the service cards shown on /services — grouped by category</p>
            </div>
            <div class="svc-header-actions">
                <span class="svc-header-badge">
                    <i class="bi bi-grid me-1"></i>
                    {{ $services->count() }} Services
                </span>
                <span class="svc-header-badge">
                    <i class="bi bi-folder me-1"></i>
                    {{ $serviceGroups->count() }} Categories
                </span>
                <a href="{{ route('site-services.create') }}" class="svc-btn-add">
                    <i class="bi bi-plus-lg me-1"></i> Add New Service
                </a>
            </div>
        </div>
    </div>

    {{-- Folders --}}
    <div class="svc-folder-list">

        @forelse ($serviceGroups as $category => $categoryServices)

            <div class="svc-folder">

                <button type="button" class="svc-folder-head" onclick="toggleFolder(this)">

                    <span class="svc-folder-chevron">
                        <i class="bi bi-chevron-right"></i>
                    </span>

                    <span class="svc-folder-label">
                        {{ \App\Models\SiteService::CATEGORIES[$category] ?? $category }}
                    </span>

                    <span class="svc-folder-count">
                        {{ $categoryServices->count() }} service{{ $categoryServices->count() > 1 ? 's' : '' }}
                    </span>

                </button>

                <div class="svc-folder-body">

                    @foreach ($categoryServices as $service)

                        <div class="svc-row">

                            <div class="svc-row-main">
                                <div class="svc-name">
                                    {{ $service->name }}
                                    @if($service->is_dark)
                                        <span class="svc-dark-tag">DARK</span>
                                    @endif
                                </div>
                                <div class="svc-slug">{{ $service->url ?: '#' }}</div>
                            </div>

                            <div class="svc-cell">
                                <span class="svc-cell-label">Category</span>
                                <span class="svc-group-label">
                                    {{ \App\Models\SiteService::CATEGORY_LABELS[$service->category] ?? $service->category }}
                                </span>
                            </div>

                            <div class="svc-cell">
                                <span class="svc-cell-label">Price</span>
                                <span class="svc-price">{{ $service->price ?: '—' }}</span>
                            </div>

                            <div class="svc-cell">
                                <span class="svc-cell-label">Delivery</span>
                                <span class="svc-muted">{{ $service->delivery_time ?: '—' }}</span>
                            </div>

                            <div class="svc-cell">
                                <span class="svc-cell-label">Badge</span>
                                @if($service->badge)
                                    <span class="svc-badge-tag">{{ $service->badge }}</span>
                                @else
                                    <span class="svc-muted">—</span>
                                @endif
                            </div>

                            <div class="svc-cell">
                                <span class="svc-cell-label">Options</span>
                                <span>
                                    @if($service->has_arrow)<span class="svc-arrow-tag">ARROW</span>@endif
                                </span>
                            </div>

                            <div class="svc-cell">
                                <span class="svc-cell-label">Status</span>
                                <span class="svc-status {{ $service->is_active ? 'svc-status-on' : 'svc-status-off' }}">
                                    {{ $service->is_active ? 'Active' : 'Inactive' }}
                                </span>
                            </div>

                            <div class="svc-cell">
                                <span class="svc-cell-label">Order</span>
                                <span class="svc-muted">{{ $service->sort_order }}</span>
                            </div>

                            <div class="svc-row-actions">
                                <a href="{{ route('site-services.edit', $service) }}" class="svc-action-btn" title="Edit">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <form action="{{ route('site-services.destroy', $service) }}" method="POST" class="d-inline delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="svc-action-btn svc-action-danger" title="Delete">
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
                <i class="bi bi-grid empty-icon"></i>
                <div class="empty-title">No Services Found</div>
                <div class="empty-sub">Add your first service card to get started.</div>
                <a href="{{ route('site-services.create') }}" class="svc-btn-add empty-btn">
                    <i class="bi bi-plus-lg me-1"></i> Add New Service
                </a>
            </div>

        @endforelse

    </div>

</div>

<style>
@include('backend.site-services.styles')
</style>

<script>
function toggleFolder(btn) {
    var folder = btn.closest('.svc-folder');
    var allFolders = document.querySelectorAll('.svc-folder');

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
                title: 'Delete this service?',
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