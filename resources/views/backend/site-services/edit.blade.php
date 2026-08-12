@extends('backend.app')

@section('title', 'Edit Service')

@section('content')

<div class="svc-page">
    <div class="svc-header">
        <div class="svc-header-inner">
            <div>
                <h4 class="svc-header-title">Edit Service — {{ $siteService->name }}</h4>
                <p class="svc-header-sub">Update this service card's details</p>
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
        'service'     => $siteService,
        'action'      => route('site-services.update', $siteService),
        'method'      => 'PUT',
        'submitLabel' => 'Update Service',
    ])
</div>

<style>
@include('backend.site-services.styles')
</style>

@endsection