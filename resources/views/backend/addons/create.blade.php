@extends('backend.app')

@section('title', 'Add Order Add-on')

@section('content')

<div class="addon-page">
    <div class="addon-header">
        <div class="addon-header-inner">
            <div>
                <h4 class="addon-header-title">Add New Add-on</h4>
                <p class="addon-header-sub">Create a new option for the "Enhance Your Order" section</p>
            </div>
            <a href="{{ route('addons.index') }}" class="addon-btn-cancel">
                <i class="bi bi-arrow-left me-1"></i> Back to Add-ons
            </a>
        </div>
    </div>

    @if ($errors->any())
        <div class="addon-error-box">
            <strong>Please fix the following errors:</strong>
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @include('backend.addons.form', [
        'action'      => route('addons.store'),
        'method'      => null,
        'submitLabel' => 'Create Add-on',
    ])
</div>

<style>
@include('backend.addons.styles')
</style>

@endsection
