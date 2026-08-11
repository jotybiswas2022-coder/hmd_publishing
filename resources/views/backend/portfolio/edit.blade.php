@extends('backend.app')

@section('title', 'Edit Portfolio Item')

@section('content')

<div class="pf-page">
    <div class="pf-header">
        <div class="pf-header-inner">
            <div>
                <h4 class="pf-header-title">Edit Item — {{ $item->title }}</h4>
                <p class="pf-header-sub">Update this portfolio item's details</p>
            </div>
            <a href="{{ route('portfolio.items.index') }}" class="pf-btn-cancel">
                <i class="bi bi-arrow-left me-1"></i> Back to Portfolio
            </a>
        </div>
    </div>

    @if ($errors->any())
        <div class="pf-error-box">
            <strong>Please fix the following errors:</strong>
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @include('backend.portfolio.form', [
        'action'      => route('portfolio.items.update', $item),
        'method'      => 'PUT',
        'submitLabel' => 'Update Item',
    ])
</div>

<style>
@include('backend.portfolio.styles')
</style>

@endsection
