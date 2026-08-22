@extends('backend.app')

@section('title', 'Portfolio Categories')

@section('content')

@if (session('success'))
    <input type="hidden" id="sessionSuccess" value="{{ session('success') }}">
@endif

<div class="pf-page">

    {{-- Header --}}
    <div class="pf-header">
        <div class="pf-header-inner">
            <div>
                <h4 class="pf-header-title">Portfolio Categories</h4>
                <p class="pf-header-sub">Manage categories for your portfolio items</p>
            </div>
            <div class="pf-header-actions">
                <span class="pf-header-badge">
                    <i class="bi bi-folder me-1"></i>
                    {{ $categories->count() }} Categories
                </span>
                <a href="{{ route('portfolio.items.index') }}" class="pf-btn-cancel">
                    <i class="bi bi-arrow-left me-1"></i> Back to Portfolio
                </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="pf-error-box">
            <strong>Please fix the following errors:</strong>
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Add new category --}}
    <div class="pf-form-card" style="max-width:100%;margin-bottom:20px;">
        <div class="pf-form-card-title"><i class="bi bi-plus-circle me-2"></i>Add New Category</div>
        <form action="{{ route('portfolio-categories.store') }}" method="POST" class="pf-form">
            @csrf
            <div class="pf-form-row">
                <div class="pf-form-group" style="margin-bottom:0;">
                    <label for="name" class="pf-form-label">Category Name *</label>
                    <input type="text" id="name" name="name" class="pf-form-input"
                           placeholder="e.g. Book Cover Design" value="{{ old('name') }}" required maxlength="100">
                </div>
                <div class="pf-form-group" style="margin-bottom:0;">
                    <label for="description" class="pf-form-label">Description</label>
                    <input type="text" id="description" name="description" class="pf-form-input"
                           placeholder="Short description (optional)" value="{{ old('description') }}" maxlength="500">
                </div>
            </div>
            <div style="margin-top:14px;">
                <button type="submit" class="pf-btn-save">
                    <i class="bi bi-plus-lg me-1"></i> Add Category
                </button>
            </div>
        </form>
    </div>

    {{-- Category list --}}
    <div class="pf-card-wrap">
        <div class="table-scroll-wrap">
            <table class="pf-table">
                <thead>
                    <tr>
                        <th style="width:45px;">#</th>
                        <th class="text-start"><i class="bi bi-folder me-1"></i> Category</th>
                        <th class="text-start"><i class="bi bi-link me-1"></i> Slug</th>
                        <th class="text-start"><i class="bi bi-card-text me-1"></i> Description</th>
                        <th style="width:110px;"><i class="bi bi-images me-1"></i> Items</th>
                        <th style="width:110px;"><i class="bi bi-power me-1"></i> Status</th>
                        <th style="width:140px;"><i class="bi bi-gear me-1"></i> Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $category)
                        <tr>
                            <td class="pf-cat" style="color:var(--csub);">{{ $loop->iteration }}</td>
                            <td class="text-start">
                                <div class="pf-title">{{ $category->name }}</div>
                            </td>
                            <td class="text-start">
                                <span style="font-family:monospace;font-size:13px;color:var(--csub);">{{ $category->slug }}</span>
                            </td>
                            <td class="text-start">
                                <span style="font-size:13px;color:var(--cmuted);">{{ $category->description ?: '—' }}</span>
                            </td>
                            <td><span class="pf-status">{{ $category->portfolioItemsCount() }}</span></td>
                            <td>
                                <span class="pf-status {{ $category->is_active ? 'pf-status-on' : 'pf-status-off' }}">
                                    {{ $category->is_active ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                            <td>
                                <div class="pf-actions">
                                    <a href="{{ route('portfolio-categories.edit', $category) }}" class="pf-action-btn" title="Edit">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form action="{{ route('portfolio-categories.destroy', $category) }}" method="POST" class="d-inline delete-form">
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
                            <td colspan="7" class="pf-empty-row">
                                <div class="pf-empty">
                                    <i class="bi bi-folder pf-empty-icon"></i>
                                    <div class="pf-empty-title">No Categories Found</div>
                                    <div class="pf-empty-sub">Add your first portfolio category to get started.</div>
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
                title: 'Delete this category?',
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
