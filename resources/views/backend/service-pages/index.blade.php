@extends('backend.app')

@section('title', 'Service Pages')

@section('content')

@if (session('success'))
    <input type="hidden" id="sessionSuccess" value="{{ session('success') }}">
@endif

<div class="sp-page">

    <div class="sp-header">
        <div class="sp-header-inner">
            <div>
                <h4 class="sp-header-title">Service Pages</h4>
                <p class="sp-header-sub">Manage individual service pages with plans and add-ons</p>
            </div>
            <div class="sp-header-actions">
                <span class="sp-header-badge">
                    <i class="bi bi-file-earmark-text me-1"></i>
                    {{ $pages->count() }} Pages
                </span>
                <a href="{{ route('service-pages.create') }}" class="sp-btn-add">
                    <i class="bi bi-plus-lg me-1"></i> Add Service Page
                </a>
            </div>
        </div>
    </div>

    @if($pages->isEmpty())
        <div style="padding:60px 20px; text-align:center; background:var(--crd); border:1px solid var(--cborder); border-radius:14px;">
            <i class="bi bi-file-earmark-text empty-icon"></i>
            <div class="empty-title">No Service Pages Found</div>
            <div class="empty-sub">Add your first service page to get started.</div>
            <a href="{{ route('service-pages.create') }}" class="sp-btn-add empty-btn">
                <i class="bi bi-plus-lg me-1"></i> Add Service Page
            </a>
        </div>
    @else
        <div class="sp-folder-list">
            @foreach ($grouped as $categoryName => $categoryPages)
                <div class="sp-folder">
                    <button type="button" class="sp-folder-head" onclick="toggleFolder(this)">
                        <span class="sp-folder-chevron"><i class="bi bi-chevron-right"></i></span>
                        <span class="sp-folder-label">{{ $categoryName }}</span>
                        <span class="sp-folder-count">{{ $categoryPages->count() }} page{{ $categoryPages->count() > 1 ? 's' : '' }}</span>
                    </button>
                    <div class="sp-folder-body">
                        @foreach ($categoryPages as $page)
                            <div class="sp-row">
                                <div class="sp-row-main">
                                    <div class="sp-name">
                                        {{ $page->title }}
                                        @if($page->badge)
                                            <span class="sp-badge-tag">{{ $page->badge }}</span>
                                        @endif
                                    </div>
                                    <div class="sp-slug">/services/{{ $page->slug }}</div>
                                </div>

                                <div class="sp-cell">
                                    <span class="sp-cell-label">Price</span>
                                    <span class="sp-price">{{ $page->price_text ?: '—' }}</span>
                                </div>

                                <div class="sp-cell">
                                    <span class="sp-cell-label">Delivery</span>
                                    <span class="sp-muted">{{ $page->delivery_time ?: '—' }}</span>
                                </div>

                                <div class="sp-cell">
                                    <span class="sp-cell-label">Plans</span>
                                    <span class="sp-plans-count">{{ $page->plans->count() }}</span>
                                </div>

                                <div class="sp-cell">
                                    <span class="sp-cell-label">Add-ons</span>
                                    <span class="sp-muted">{{ $page->addons->count() }}</span>
                                </div>

                                <div class="sp-cell">
                                    <span class="sp-cell-label">Status</span>
                                    <span class="sp-status {{ $page->is_active ? 'sp-status-on' : 'sp-status-off' }}">
                                        {{ $page->is_active ? 'Active' : 'Inactive' }}
                                    </span>
                                </div>

                                <div class="sp-cell">
                                    <span class="sp-cell-label">Order</span>
                                    <span class="sp-muted">{{ $page->sort_order }}</span>
                                </div>

                                <div class="sp-row-actions">
                                    <a href="{{ route('service-pages.edit', $page) }}" class="sp-action-btn" title="Edit">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form action="{{ route('service-pages.destroy', $page) }}" method="POST" class="d-inline delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="sp-action-btn sp-action-danger" title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    @endif

</div>

<style>
@include('backend.service-pages.styles')
</style>

<script>
function toggleFolder(btn) {
    var folder = btn.closest('.sp-folder');
    var allFolders = document.querySelectorAll('.sp-folder');
    allFolders.forEach(function (f) {
        if (f !== folder) f.classList.remove('open');
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
        });
    }

    document.querySelectorAll('.delete-form').forEach(function (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            Swal.fire({
                title: 'Delete this service page?',
                text: 'This action cannot be undone.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#ef4444',
                cancelButtonColor: '#475569',
                confirmButtonText: 'Yes, delete',
                background: '#1e293b',
                color: '#f1f5f9'
            }).then(function (result) {
                if (result.isConfirmed) form.submit();
            });
        });
    });
});
</script>

@endsection
