@extends('backend.app')

@section('title', 'Pricing Plans')

@section('content')

@if (session('success'))
    <input type="hidden" id="sessionSuccess" value="{{ session('success') }}">
@endif

<div class="sp-page">

    <div class="sp-header">
        <div class="sp-header-inner">
            <div>
                <h4 class="sp-header-title">Homepage Pricing Plans</h4>
                <p class="sp-header-sub">Manage the pricing cards shown on the homepage #pricing section</p>
            </div>
            <div class="sp-header-actions">
                <span class="sp-header-badge">
                    <i class="bi bi-credit-card-2-front me-1"></i>
                    {{ $plans->count() }} Plans
                </span>
                <a href="{{ route('homepage-plans.create') }}" class="sp-btn-add">
                    <i class="bi bi-plus-lg me-1"></i> Add Plan
                </a>
            </div>
        </div>
    </div>

    @if($plans->isEmpty())
        <div style="padding:60px 20px; text-align:center; background:var(--crd); border:1px solid var(--cborder); border-radius:14px;">
            <i class="bi bi-credit-card-2-front empty-icon"></i>
            <div class="empty-title">No Pricing Plans Found</div>
            <div class="empty-sub">Add your first pricing plan to get started.</div>
            <a href="{{ route('homepage-plans.create') }}" class="sp-btn-add empty-btn">
                <i class="bi bi-plus-lg me-1"></i> Add Plan
            </a>
        </div>
    @else
        <div class="sp-folder-list">
            <div class="sp-folder open">
                <div class="sp-folder-body" style="max-height:none; opacity:1; border-top:1px solid var(--cborder);">
                    @foreach ($plans as $plan)
                        <div class="sp-row">
                            <div class="sp-row-main">
                                <div class="sp-name">
                                    {{ $plan->name }}
                                    @if($plan->badge)
                                        <span class="sp-badge-tag">{{ $plan->badge }}</span>
                                    @endif
                                    @if($plan->is_featured)
                                        <span class="sp-badge-tag" style="background:rgba(96,165,250,0.12); color:#60A5FA; border-color:rgba(96,165,250,0.2);">
                                            <i class="bi bi-star-fill me-1"></i>Featured
                                        </span>
                                    @endif
                                </div>
                                <div class="sp-slug">£{{ number_format($plan->price, 2) }} · {{ $plan->description ?: 'No description' }}</div>
                            </div>

                            <div class="sp-cell">
                                <span class="sp-cell-label">Add-ons</span>
                                <span class="sp-plans-count">{{ $plan->addons->count() }}</span>
                            </div>

                            <div class="sp-cell">
                                <span class="sp-cell-label">Features</span>
                                <span class="sp-muted">{{ count($plan->features ?? []) }}</span>
                            </div>

                            <div class="sp-cell">
                                <span class="sp-cell-label">Status</span>
                                <span class="sp-status {{ $plan->is_active ? 'sp-status-on' : 'sp-status-off' }}">
                                    {{ $plan->is_active ? 'Active' : 'Inactive' }}
                                </span>
                            </div>

                            <div class="sp-cell">
                                <span class="sp-cell-label">Order</span>
                                <span class="sp-muted">{{ $plan->sort_order }}</span>
                            </div>

                            <div class="sp-row-actions">
                                <a href="{{ route('homepage-plans.edit', $plan) }}" class="sp-action-btn" title="Edit">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <form action="{{ route('homepage-plans.destroy', $plan) }}" method="POST" class="d-inline delete-form">
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
        </div>
    @endif

</div>

<style>
@include('backend.service-pages.styles')
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
                title: 'Delete this pricing plan?',
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
