@extends('backend.app')

@section('title', 'Edit Portfolio Category')

@section('content')

@if (session('success'))
    <input type="hidden" id="sessionSuccess" value="{{ session('success') }}">
@endif

<div class="pf-page">

    {{-- Header --}}
    <div class="pf-header">
        <div class="pf-header-inner">
            <div>
                <h4 class="pf-header-title">Edit Portfolio Category</h4>
                <p class="pf-header-sub">Update "{{ $portfolioCategory->name }}"</p>
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
        <div class="pf-form-card-title"><i class="bi bi-pencil-square me-2"></i>Edit Category</div>
        <form action="{{ route('portfolio-categories.update', $portfolioCategory) }}" method="POST" class="pf-form">
            @csrf
            @method('PUT')
            <div class="pf-form-group">
                <label for="name" class="pf-form-label">Category Name *</label>
                <input type="text" id="name" name="name" class="pf-form-input"
                       placeholder="e.g. Book Cover Design" value="{{ old('name', $portfolioCategory->name) }}" required maxlength="100">
                <small class="pf-form-hint">Slug will update to "{{ \Illuminate\Support\Str::slug(old('name', $portfolioCategory->name)) }}"</small>
            </div>
            <div class="pf-form-group">
                <label for="description" class="pf-form-label">Description</label>
                <textarea id="description" name="description" class="pf-form-input" rows="3"
                          placeholder="Brief description of this category (optional)" maxlength="500">{{ old('description', $portfolioCategory->description) }}</textarea>
            </div>
            <div class="pf-form-group">
                <label for="orientation" class="pf-form-label">Image Orientation *</label>
                <select id="orientation" name="orientation" class="pf-form-input" required>
                    <option value="vertical" @selected(old('orientation', $portfolioCategory->orientation) === 'vertical')>↕ Vertical — Book Covers, Published Books</option>
                    <option value="horizontal" @selected(old('orientation', $portfolioCategory->orientation) === 'horizontal')>↔ Horizontal — Interior Formatting, Children's Illustrations</option>
                </select>
                <small class="pf-form-hint">Controls the image aspect ratio on the frontend portfolio page</small>
            </div>
            <div class="pf-form-footer">
                <button type="submit" class="pf-btn-save">
                    <i class="bi bi-check-lg me-1"></i> Update Category
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
