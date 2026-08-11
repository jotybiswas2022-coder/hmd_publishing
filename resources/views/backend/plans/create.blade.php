@extends('backend.app')

@section('title', 'Add Pricing Plan')

@section('content')

<div class="plan-page">
    <div class="plan-header">
        <div class="plan-header-inner">
            <div>
                <h4 class="plan-header-title">Add New Pricing Plan</h4>
                <p class="plan-header-sub">Create a new package for the homepage pricing section</p>
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
        'action'      => route('plans.store'),
        'method'      => null,
        'submitLabel' => 'Create Plan',
    ])
</div>

<style>
@include('backend.plans.styles')
</style>

@endsection
