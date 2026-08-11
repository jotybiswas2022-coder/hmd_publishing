@extends('backend.app')

@section('title', 'Genres')

@section('content')

@if (session('success'))
    <input type="hidden" id="sessionSuccess" value="{{ session('success') }}">
@endif

<div class="pf-page">

    {{-- Header --}}
    <div class="pf-header">
        <div class="pf-header-inner">
            <div>
                <h4 class="pf-header-title">Genres</h4>
                <p class="pf-header-sub">Manage the genre filter buttons used on the portfolio page</p>
            </div>
            <div class="pf-header-actions">
                <span class="pf-header-badge">
                    <i class="bi bi-tags me-1"></i>
                    {{ $genres->count() }} Genres
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

    {{-- Add new genre --}}
    <div class="pf-form-card" style="max-width:100%;margin-bottom:20px;">
        <div class="pf-form-card-title"><i class="bi bi-plus-circle me-2"></i>Add New Genre</div>
        <form action="{{ route('genres.store') }}" method="POST" class="pf-form">
            @csrf
            <div class="pf-form-row">
                <div class="pf-form-group" style="margin-bottom:0;">
                    <label for="name" class="pf-form-label">Genre Name *</label>
                    <input type="text" id="name" name="name" class="pf-form-input"
                           placeholder="e.g. Poetry" value="{{ old('name') }}" required maxlength="60">
                </div>
                <div class="pf-form-group" style="margin-bottom:0;display:flex;align-items:flex-end;">
                    <button type="submit" class="pf-btn-save">
                        <i class="bi bi-plus-lg me-1"></i> Add Genre
                    </button>
                </div>
            </div>
        </form>
    </div>

    {{-- Genre list --}}
    <div class="pf-card-wrap">
        <div class="table-scroll-wrap">
            <table class="pf-table">
                <thead>
                    <tr>
                        <th style="width:45px;">#</th>
                        <th class="text-start"><i class="bi bi-tag me-1"></i> Genre</th>
                        <th class="text-start"><i class="bi bi-link me-1"></i> Slug</th>
                        <th style="width:110px;"><i class="bi bi-book me-1"></i> Items</th>
                        <th style="width:110px;"><i class="bi bi-power me-1"></i> Status</th>
                        <th style="width:140px;"><i class="bi bi-gear me-1"></i> Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($genres as $genre)
                        <tr>
                            <td class="pf-cat" style="color:var(--csub);">{{ $loop->iteration }}</td>
                            <td class="text-start">
                                <div class="pf-title">{{ $genre->name }}</div>
                            </td>
                            <td class="text-start">
                                <span style="font-family:monospace;font-size:13px;color:var(--csub);">{{ $genre->slug }}</span>
                            </td>
                            <td><span class="pf-status">{{ $genre->portfolioItemsCount() }}</span></td>
                            <td>
                                <span class="pf-status {{ $genre->is_active ? 'pf-status-on' : 'pf-status-off' }}">
                                    {{ $genre->is_active ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                            <td>
                                <div class="pf-actions">
                                    <button type="button" class="pf-action-btn" title="Edit"
                                            data-bs-toggle="modal" data-bs-target="#editGenre{{ $genre->id }}">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <form action="{{ route('genres.destroy', $genre) }}" method="POST" class="d-inline delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="pf-action-btn pf-action-danger" title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>

                        {{-- Edit modal --}}
                        <div class="modal fade" id="editGenre{{ $genre->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="plan-modal-content">
                                    <div class="plan-modal-header">
                                        <h5 class="plan-modal-title">
                                            <i class="bi bi-pencil-square me-2"></i> Edit Genre
                                        </h5>
                                        <button type="button" class="plan-modal-close" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i></button>
                                    </div>
                                    <form action="{{ route('genres.update', $genre) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="plan-modal-body">
                                            <label for="edit_name_{{ $genre->id }}" class="pf-form-label">Genre Name</label>
                                            <input type="text" id="edit_name_{{ $genre->id }}" name="name"
                                                   class="pf-form-input" value="{{ $genre->name }}"
                                                   required maxlength="60">
                                            <small class="pf-form-hint">
                                                Slug updates to "{{ \Illuminate\Support\Str::slug($genre->name) }}" and all portfolio items move with it.
                                            </small>
                                        </div>
                                        <div class="plan-modal-footer">
                                            <button type="button" class="plan-btn-close" data-bs-dismiss="modal">Cancel</button>
                                            <button type="submit" class="pf-btn-save" style="margin-left:10px;">
                                                <i class="bi bi-check-lg me-1"></i> Save
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @empty
                        <tr>
                            <td colspan="6" class="pf-empty-row">
                                <div class="pf-empty">
                                    <i class="bi bi-tags pf-empty-icon"></i>
                                    <div class="pf-empty-title">No Genres Found</div>
                                    <div class="pf-empty-sub">Add your first genre to get started.</div>
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
                title: 'Delete this genre?',
                text: 'Portfolio items in this genre will be moved to "Uncategorized".',
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
