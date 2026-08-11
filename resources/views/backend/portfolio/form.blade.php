@php
    $item = $item ?? null;
@endphp

<form action="{{ $action }}" method="POST" class="pf-form">
    @csrf
    @if($method ?? null)
        @method($method)
    @endif

    <div class="pf-form-card">
        <div class="pf-form-card-title"><i class="bi bi-image me-2"></i>Portfolio Item Details</div>

        <div class="pf-form-row">
            <div class="pf-form-group">
                <label for="title" class="pf-form-label">Book Title *</label>
                <input type="text" id="title" name="title" class="pf-form-input"
                       placeholder="e.g. Always You"
                       value="{{ old('title', $item->title ?? '') }}" required>
            </div>

            <div class="pf-form-group">
                <label for="author" class="pf-form-label">Author</label>
                <input type="text" id="author" name="author" class="pf-form-input"
                       placeholder="e.g. Kiera Ashford"
                       value="{{ old('author', $item->author ?? '') }}">
            </div>
        </div>

        <div class="pf-form-row">
            <div class="pf-form-group">
                <label for="category" class="pf-form-label">Genre / Category *</label>
                <select id="category" name="category" class="pf-form-input" required>
                    @foreach (\App\Models\PortfolioItem::CATEGORIES as $category)
                        <option value="{{ $category }}" @selected(old('category', $item->category ?? 'fantasy') === $category)>
                            {{ ucfirst($category) }}
                        </option>
                    @endforeach
                </select>
                <small class="pf-form-hint">Used by the portfolio filter buttons</small>
            </div>

            <div class="pf-form-group">
                <label for="type_label" class="pf-form-label">Type Label</label>
                <input type="text" id="type_label" name="type_label" class="pf-form-input"
                       placeholder="e.g. Cover · Fantasy"
                       value="{{ old('type_label', $item->type_label ?? '') }}">
                <small class="pf-form-hint">Shown above the title, e.g. "Cover · Fantasy"</small>
            </div>
        </div>

        <div class="pf-form-group">
            <label for="image" class="pf-form-label">Image</label>
            <input type="text" id="image" name="image" class="pf-form-input"
                   placeholder="portfolio/my-cover.svg or https://..."
                   value="{{ old('image', $item->image ?? '') }}">
            <small class="pf-form-hint">
                Optional. Leave empty to auto-generate a styled SVG cover from the title and category.
            </small>
            @if($item && $item->cover)
                <img src="{{ $item->cover }}" alt="Cover preview" class="pf-cover-preview">
            @endif
        </div>

        <div class="pf-form-row">
            <div class="pf-form-group">
                <label for="sort_order" class="pf-form-label">Sort Order</label>
                <input type="number" id="sort_order" name="sort_order" class="pf-form-input"
                       value="{{ old('sort_order', $item->sort_order ?? 0) }}">
            </div>
        </div>

        <div class="pf-toggle">
            <label>
                <input type="checkbox" name="is_active" value="1"
                       @checked(old('is_active', $item->is_active ?? true))>
                <span class="pf-toggle-box"></span>
                <span><i class="bi bi-power me-1"></i>Active (shown on portfolio page)</span>
            </label>

            <label>
                <input type="checkbox" name="is_featured" value="1"
                       @checked(old('is_featured', $item->is_featured ?? false))>
                <span class="pf-toggle-box"></span>
                <span><i class="bi bi-star me-1"></i>Featured (shown in featured section)</span>
            </label>
        </div>
    </div>

    <div class="pf-form-footer">
        <a href="{{ route('portfolio.items.index') }}" class="pf-btn-cancel">Cancel</a>
        <button type="submit" class="pf-btn-save">
            <i class="bi bi-check-lg me-1"></i> {{ $submitLabel }}
        </button>
    </div>
</form>
