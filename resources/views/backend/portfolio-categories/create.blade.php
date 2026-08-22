@extends('backend.app')

@section('title', 'Create Portfolio Category')

@section('content')

@if (session('success'))
    <input type="hidden" id="sessionSuccess" value="{{ session('success') }}">
@endif

<div class="pf-page">

    {{-- Header --}}
    <div class="pf-header">
        <div class="pf-header-inner">
            <div>
                <h4 class="pf-header-title">Create Portfolio Category</h4>
                <p class="pf-header-sub">Add a new category for your portfolio items</p>
            </div>
            <div class="pf-header-actions">
                <a href="{{ route('portfolio-categories.index') }}" class="pf-btn-cancel">
                    <i class="bi bi-arrow-left me-1"></i> Back to Categories
                </a>
            </div>
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

    {{-- Form --}}
    <div class="pf-form-card">
        <div class="pf-form-card-title"><i class="bi bi-plus-circle me-2"></i>New Category</div>
        <form action="{{ route('portfolio-categories.store') }}" method="POST" class="pf-form">
            @csrf
            <div class="pf-form-group">
                <label for="name" class="pf-form-label">Category Name *</label>
                <input type="text" id="name" name="name" class="pf-form-input"
                       placeholder="e.g. Book Cover Design" value="{{ old('name') }}" required maxlength="100">
            </div>
            <div class="pf-form-group">
                <label for="description" class="pf-form-label">Description</label>
                <textarea id="description" name="description" class="pf-form-input" rows="3"
                          placeholder="Brief description of this category (optional)" maxlength="500">{{ old('description') }}</textarea>
            </div>
            <div class="pf-form-group">
                <label for="orientation" class="pf-form-label">Image Orientation *</label>
                <select id="orientation" name="orientation" class="pf-form-input" required>
                    <option value="vertical" @selected(old('orientation') === 'vertical')>↕ Vertical — Book Covers, Published Books</option>
                    <option value="horizontal" @selected(old('orientation') === 'horizontal')>↔ Horizontal — Interior Formatting, Children's Illustrations</option>
                </select>
                <small class="pf-form-hint">Controls the image aspect ratio on the frontend portfolio page</small>
            </div>
            <div class="pf-form-footer">
                <button type="submit" class="pf-btn-save">
                    <i class="bi bi-check-lg me-1"></i> Create Category
                </button>
                <a href="{{ route('portfolio-categories.index') }}" class="pf-btn-cancel">
                    Cancel
                </a>
            </div>
        </form>
    </div>

</div>

<style>
@include('backend.portfolio.styles')
</style>

@endsection
