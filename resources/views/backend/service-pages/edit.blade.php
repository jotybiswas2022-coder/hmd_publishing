@extends('backend.app')

@section('title', 'Edit Service Page')

@section('content')

<div class="sp-page">
    <div class="sp-header">
        <div class="sp-header-inner">
            <div>
                <h4 class="sp-header-title">Edit Service Page — {{ $servicePage->title }}</h4>
                <p class="sp-header-sub">Update this service page's details, plans and add-ons</p>
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
        'servicePage' => $servicePage,
        'action'      => route('service-pages.update', $servicePage),
        'method'      => 'PUT',
        'submitLabel' => 'Update Service Page',
    ])
</div>

<style>
@include('backend.service-pages.styles')
</style>

@endsection
