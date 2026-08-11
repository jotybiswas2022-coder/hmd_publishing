@extends('backend.app')

@section('title', 'Edit Pricing Plan')

@section('content')

<div class="plan-page">
    <div class="plan-header">
        <div class="plan-header-inner">
            <div>
                <h4 class="plan-header-title">Edit Plan — {{ $plan->name }}</h4>
                <p class="plan-header-sub">Update this package's pricing section details</p>
            </div>
            <a href="{{ route('plans.index') }}" class="plan-btn-cancel">
                <i class="bi bi-arrow-left me-1"></i> Back to Plans
            </a>
        </div>
    </div>

    @if ($errors->any())
        <div class="plan-error-box">
            <strong>Please fix the following errors:</strong>
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @include('backend.plans.form', [
        'action'      => route('plans.update', $plan),
        'method'      => 'PUT',
        'submitLabel' => 'Update Plan',
    ])
</div>

<style>
@include('backend.plans.styles')
</style>

@endsection
