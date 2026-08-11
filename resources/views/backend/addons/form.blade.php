@php
    $addon = $addon ?? null;
@endphp

<form action="{{ $action }}" method="POST" class="addon-form">
    @csrf
    @if($method ?? null)
        @method($method)
    @endif

    <div class="addon-form-card">
        <div class="addon-form-card-title"><i class="bi bi-box-seam me-2"></i>Add-on Details</div>

        <div class="addon-form-row">
            <div class="addon-form-group">
                <label for="name" class="addon-form-label">Add-on Name *</label>
                <input type="text" id="name" name="name" class="addon-form-input"
                       placeholder="e.g. Rush Delivery (2-3 Days)"
                       value="{{ old('name', $addon->name ?? '') }}" required>
            </div>

            <div class="addon-form-group">
                <label for="price" class="addon-form-label">Price ($) *</label>
                <input type="number" id="price" name="price" class="addon-form-input"
                       placeholder="e.g. 127" step="0.01" min="0"
                       value="{{ old('price', $addon->price ?? '') }}" required>
            </div>
        </div>

        <div class="addon-form-row">
            <div class="addon-form-group">
                <label for="key" class="addon-form-label">Key / Slug *</label>
                <input type="text" id="key" name="key" class="addon-form-input"
                       placeholder="e.g. rush"
                       value="{{ old('key', $addon->key ?? '') }}" required>
                <small class="addon-form-hint">Unique identifier used in the checkout URL (addon[{key}]=1)</small>
            </div>

            <div class="addon-form-group">
                <label for="sort_order" class="addon-form-label">Sort Order</label>
                <input type="number" id="sort_order" name="sort_order" class="addon-form-input"
                       value="{{ old('sort_order', $addon->sort_order ?? 0) }}">
            </div>
        </div>

        <div class="addon-form-group">
            <label for="description" class="addon-form-label">Short Description</label>
            <textarea id="description" name="description" class="addon-form-input" rows="2"
                      placeholder="One line describing this add-on">{{ old('description', $addon->description ?? '') }}</textarea>
        </div>

        <label class="addon-toggle">
            <input type="checkbox" name="is_active" value="1"
                   @checked(old('is_active', $addon->is_active ?? true))>
            <span class="addon-toggle-box"></span>
            <span class="addon-toggle-text"><i class="bi bi-power me-1"></i>Active (shown on checkout page)</span>
        </label>
    </div>

    <div class="addon-form-footer">
        <a href="{{ route('addons.index') }}" class="addon-btn-cancel">Cancel</a>
        <button type="submit" class="addon-btn-save">
            <i class="bi bi-check-lg me-1"></i> {{ $submitLabel }}
        </button>
    </div>
</form>
