@extends('backend.app')

@section('title', 'Edit Service Category')

@section('content')

<div class="sc-page">
    <div class="sc-header">
        <div class="sc-header-inner">
            <div>
                <h4 class="sc-header-title">Edit Category — {{ $serviceCategory->name }}</h4>
                <p class="sc-header-sub">Update this category's details</p>
            </div>
            <a href="{{ route('service-categories.index') }}" class="sc-btn-cancel">
                <i class="bi bi-arrow-left me-1"></i> Back to Categories
            </a>
        </div>
    </div>

    @if ($errors->any())
        <div class="sc-error-box">
            <strong>Please fix the following errors:</strong>
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @include('backend.service-categories.form', [
        'category'    => $serviceCategory,
        'action'      => route('service-categories.update', $serviceCategory),
        'method'      => 'PUT',
        'submitLabel' => 'Update Category',
    ])
</div>

<style>
@include('backend.service-categories.styles')
</style>

@endsection
