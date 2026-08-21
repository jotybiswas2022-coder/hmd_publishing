@php
    $category = $category ?? null;
@endphp

<form action="{{ $action }}" method="POST">
    @csrf
    @if($method ?? null)
        @method($method)
    @endif

    <div class="sc-form-grid">

        <div class="sc-form-card">
            <div class="sc-form-card-title"><i class="bi bi-folder"></i> Category Details</div>

            <div class="sc-form-group">
                <label for="name" class="sc-form-label">Category Name *</label>
                <input type="text" id="name" name="name" class="sc-form-input"
                       placeholder="e.g. Production & Design"
                       value="{{ old('name', $category->name ?? '') }}" required>
            </div>

            <div class="sc-form-group">
                <label for="slug" class="sc-form-label">Slug</label>
                <input type="text" id="slug" name="slug" class="sc-form-input"
                       placeholder="auto-generated from name"
                       value="{{ old('slug', $category->slug ?? '') }}">
                <small class="sc-form-hint">Leave empty to auto-generate from the name.</small>
            </div>

            <div class="sc-form-group">
                <label for="description" class="sc-form-label">Description</label>
                <textarea id="description" name="description" class="sc-form-input" rows="2"
                          placeholder="Short description of this category">{{ old('description', $category->description ?? '') }}</textarea>
            </div>

            <div class="sc-form-row">
                <div class="sc-form-group">
                    <label for="sort_order" class="sc-form-label">Sort Order</label>
                    <input type="number" id="sort_order" name="sort_order" class="sc-form-input"
                           value="{{ old('sort_order', $category->sort_order ?? 0) }}">
                </div>

                <div class="sc-form-group sc-form-toggles">
                    <label class="sc-toggle">
                        <input type="checkbox" name="is_active" value="1"
                               @checked(old('is_active', $category->is_active ?? true))>
                        <span class="sc-toggle-box"></span>
                        <span class="sc-toggle-text"><i class="bi bi-power me-1"></i>Active (visible on site)</span>
                    </label>
                </div>
            </div>
        </div>

    </div>

    <div class="sc-form-footer">
        <a href="{{ route('service-categories.index') }}" class="sc-btn-cancel">Cancel</a>
        <button type="submit" class="sc-btn-save">
            <i class="bi bi-check-lg me-1"></i> {{ $submitLabel }}
        </button>
    </div>
</form>
