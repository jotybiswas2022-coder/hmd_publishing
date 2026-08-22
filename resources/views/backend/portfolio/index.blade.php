@extends('backend.app')

@section('title', 'Portfolio')

@section('content')

@if (session('success'))
    <input type="hidden" id="sessionSuccess" value="{{ session('success') }}">
@endif

<div class="pf-page">

    {{-- Header --}}
    <div class="pf-header">
        <div class="pf-header-inner">
            <div>
                <h4 class="pf-header-title">Portfolio</h4>
                <p class="pf-header-sub">Manage the book covers and projects shown on the portfolio page</p>
            </div>
            <div class="pf-header-actions">
                <span class="pf-header-badge">
                    <i class="bi bi-image me-1"></i>
                    {{ $items->count() }} Items
                </span>
                <a href="{{ route('portfolio-categories.index') }}" class="pf-btn-cancel">
                    <i class="bi bi-folder me-1"></i> Categories
                </a>
                <a href="{{ route('genres.index') }}" class="pf-btn-cancel">
                    <i class="bi bi-tags me-1"></i> Genres
                </a>
                <a href="{{ route('portfolio.items.create') }}" class="pf-btn-add">
                    <i class="bi bi-plus-lg me-1"></i> Add New Item
                </a>
            </div>
        </div>
    </div>

    {{-- Card --}}
    <div class="pf-card-wrap">
        <div class="table-scroll-wrap">
            <table class="pf-table">
                <thead>
                    <tr>
                        <th style="width:70px;"><i class="bi bi-image me-1"></i> Cover</th>
                        <th class="text-start"><i class="bi bi-book me-1"></i> Title</th>
                        <th style="width:140px;"><i class="bi bi-folder me-1"></i> Category</th>
                        <th style="width:120px;"><i class="bi bi-tag me-1"></i> Genre</th>
                        <th style="width:100px;"><i class="bi bi-star me-1"></i> Featured</th>
                        <th style="width:90px;"><i class="bi bi-power me-1"></i> Status</th>
                        <th style="width:80px;"><i class="bi bi-sort-numeric-down me-1"></i> Order</th>
                        <th style="width:130px;"><i class="bi bi-gear me-1"></i> Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($items as $item)
                        <tr>
                            <td>
                                <img src="{{ $item->cover }}" alt="{{ $item->title }}" class="pf-thumb">
                            </td>
                            <td class="text-start">
                                <div class="pf-title">{{ $item->title }}</div>
                                <div class="pf-author">{{ $item->author }}</div>
                            </td>
                            <td><span class="pf-cat">{{ $item->portfolioCategory->name ?? '—' }}</span></td>
                            <td><span class="pf-cat">{{ str_replace('-', ' ', $item->category) }}</span></td>
                            <td>
                                @if ($item->is_featured)
                                    <span class="pf-featured" title="Featured">★</span>
                                @else
                                    <span class="pf-featured-no">☆</span>
                                @endif
                            </td>
                            <td>
                                <span class="pf-status {{ $item->is_active ? 'pf-status-on' : 'pf-status-off' }}">
                                    {{ $item->is_active ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                            <td><span style="color:var(--csub);">{{ $item->sort_order }}</span></td>
                            <td>
                                <div class="pf-actions">
                                    <a href="{{ route('portfolio.items.edit', $item) }}" class="pf-action-btn" title="Edit">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form action="{{ route('portfolio.items.destroy', $item) }}" method="POST" class="d-inline delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="pf-action-btn pf-action-danger" title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="pf-empty-row">
                                <div class="pf-empty">
                                    <i class="bi bi-image pf-empty-icon"></i>
                                    <div class="pf-empty-title">No Portfolio Items Found</div>
                                    <div class="pf-empty-sub">Add your first book cover or project to get started.</div>
                                    <a href="{{ route('portfolio.items.create') }}" class="pf-btn-add" style="margin-top:12px;">
                                        <i class="bi bi-plus-lg me-1"></i> Add New Item
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

<style>
@include('backend.portfolio.styles')
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
                title: 'Delete this item?',
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
