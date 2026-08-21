@extends('backend.app')

@section('title', 'Edit Pricing Plan')

@section('content')

<div class="sp-page">
    <div class="sp-header">
        <div class="sp-header-inner">
            <div>
                <h4 class="sp-header-title">Edit Pricing Plan</h4>
                <p class="sp-header-sub">Update "{{ $homepagePlan->name }}"</p>
            </div>
            <a href="{{ route('homepage-plans.index') }}" class="sp-btn-cancel">
                <i class="bi bi-arrow-left me-1"></i> Back to Pricing Plans
            </a>
        </div>
    </div>

    @if ($errors->any())
        <div class="sp-error-box">
            <strong>Please fix the following errors:</strong>
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @include('backend.homepage-plans.form', [
        'action'      => route('homepage-plans.update', $homepagePlan),
        'method'      => 'PUT',
        'submitLabel' => 'Update Pricing Plan',
    ])
</div>

<style>
@include('backend.service-pages.styles')
</style>

@endsection
