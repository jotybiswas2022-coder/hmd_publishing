@extends('backend.app')

@section('title', 'Service Categories')

@section('content')

@if (session('success'))
    <input type="hidden" id="sessionSuccess" value="{{ session('success') }}">
@endif

<div class="sc-page">

    <div class="sc-header">
        <div class="sc-header-inner">
            <div>
                <h4 class="sc-header-title">Service Categories</h4>
                <p class="sc-header-sub">Organize your services into categories</p>
            </div>
            <div class="sc-header-actions">
                <span class="sc-header-badge">
                    <i class="bi bi-folder me-1"></i>
                    {{ $categories->count() }} Categories
                </span>
                <a href="{{ route('service-categories.create') }}" class="sc-btn-add">
                    <i class="bi bi-plus-lg me-1"></i> Add Category
                </a>
            </div>
        </div>
    </div>

    @if($categories->isEmpty())
        <div style="padding:60px 20px; text-align:center; background:var(--crd); border:1px solid var(--cborder); border-radius:14px;">
            <i class="bi bi-folder empty-icon"></i>
            <div class="empty-title">No Categories Found</div>
            <div class="empty-sub">Add your first service category to get started.</div>
            <a href="{{ route('service-categories.create') }}" class="sc-btn-add empty-btn">
                <i class="bi bi-plus-lg me-1"></i> Add Category
            </a>
        </div>
    @else
        <div class="sc-table-wrap">
            <table class="sc-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Description</th>
                        <th>Pages</th>
                        <th>Status</th>
                        <th>Order</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td class="sc-name">{{ $category->name }}</td>
                            <td class="sc-slug">{{ $category->slug }}</td>
                            <td class="sc-desc">{{ \Illuminate\Support\Str::limit($category->description, 60) }}</td>
                            <td><span class="sc-count">{{ $category->pages_count }} pages</span></td>
                            <td>
                                <span class="sc-status {{ $category->is_active ? 'sc-status-on' : 'sc-status-off' }}">
                                    {{ $category->is_active ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                            <td>{{ $category->sort_order }}</td>
                            <td>
                                <div class="sc-actions">
                                    <a href="{{ route('service-categories.edit', $category) }}" class="sc-action-btn" title="Edit">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form action="{{ route('service-categories.destroy', $category) }}" method="POST" class="d-inline delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="sc-action-btn sc-action-danger" title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif

</div>

<style>
@include('backend.service-categories.styles')
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
        });
    }

    document.querySelectorAll('.delete-form').forEach(function (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            Swal.fire({
                title: 'Delete this category?',
                text: 'This will also remove all pages in this category.',
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
