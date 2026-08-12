@extends('backend.app')

@section('title', 'Add Service')

@section('content')

<div class="svc-page">
    <div class="svc-header">
        <div class="svc-header-inner">
            <div>
                <h4 class="svc-header-title">Add New Service</h4>
                <p class="svc-header-sub">Create a service card for the Services page</p>
            </div>
            <a href="{{ route('site-services.index') }}" class="svc-btn-cancel">
                <i class="bi bi-arrow-left me-1"></i> Back to Services
            </a>
        </div>
    </div>

    @if ($errors->any())
        <div class="svc-error-box">
            <strong>Please fix the following errors:</strong>
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @include('backend.site-services.form', [
        'action'      => route('site-services.store'),
        'method'      => null,
        'submitLabel' => 'Create Service',
    ])
</div>

<style>
@include('backend.site-services.styles')
</style>

@endsection