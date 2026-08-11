@php
    $item = $item ?? null;
    $categories = array_merge(\App\Models\PortfolioItem::CATEGORIES, [$item->category ?? null]);
    $categories = array_values(array_filter(array_unique($categories)));
@endphp

<form action="{{ $action }}" method="POST" class="pf-form" enctype="multipart/form-data">
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
                <select id="category" name="category" class="pf-form-input">
                    @foreach ($categories as $category)
                        <option value="{{ $category }}" @selected(old('category', $item->category ?? 'fantasy') === $category)>
                            {{ ucwords(str_replace('-', ' ', $category)) }}
                        </option>
                    @endforeach
                    <option value="__add__">+ Add new genre...</option>
                </select>
                <small class="pf-form-hint">Used by the portfolio filter buttons</small>

                <input type="text" id="new_category" name="new_category" class="pf-form-input pf-new-category"
                       placeholder="Type new genre, e.g. Poetry" autocomplete="off">
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
            <label for="image_file" class="pf-form-label">Cover Image</label>
            <input type="file" id="image_file" name="image_file" class="pf-form-input pf-file-input"
                   accept="image/png,image/jpeg,image/webp,image/gif,image/svg+xml">
            <small class="pf-form-hint">
                Upload a book cover image (PNG, JPG, WebP, GIF or SVG). Leave empty to keep the
                auto-generated cover below.
            </small>
        </div>

        <div class="pf-form-group">
            <label for="image" class="pf-form-label">Or Image URL / Path</label>
            <input type="text" id="image" name="image" class="pf-form-input"
                   placeholder="portfolio/my-cover.jpg or https://..."
                   value="{{ old('image', $item->image ?? '') }}">
            <small class="pf-form-hint">
                Paste an image path or link. If both upload and URL are empty, a styled cover is
                auto-generated from the title and genre.
            </small>

            @if($item && $item->cover)
                <div class="pf-cover-preview-wrap">
                    <img src="{{ $item->cover }}" alt="Cover preview" class="pf-cover-preview">
                    <label class="pf-toggle pf-remove-image">
                        <input type="checkbox" name="remove_image" value="1">
                        <span class="pf-toggle-box"></span>
                        <span>Remove image (use auto-generated cover)</span>
                    </label>
                </div>
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

<script>
(function () {
    const category = document.getElementById('category');
    const newCat = document.getElementById('new_category');

    function toggleNewCategory() {
        const isNew = category.value === '__add__';
        newCat.style.display = isNew ? 'block' : 'none';
        newCat.required = isNew;
        if (isNew) newCat.focus();
    }

    category.addEventListener('change', toggleNewCategory);
    toggleNewCategory();
})();
</script>
