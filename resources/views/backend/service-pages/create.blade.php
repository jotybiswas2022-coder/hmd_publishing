@extends('backend.app')

@section('title', 'Add Service Page')

@section('content')

<div class="sp-page">
    <div class="sp-header">
        <div class="sp-header-inner">
            <div>
                <h4 class="sp-header-title">Add New Service Page</h4>
                <p class="sp-header-sub">Create a complete service page with plans and add-ons</p>
            </div>
            <a href="{{ route('service-pages.index') }}" class="sp-btn-cancel">
                <i class="bi bi-arrow-left me-1"></i> Back to Service Pages
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

    @include('backend.service-pages.form', [
        'action'      => route('service-pages.store'),
        'method'      => null,
        'submitLabel' => 'Create Service Page',
    ])
</div>

<style>
@include('backend.service-pages.styles')
</style>

@endsection
