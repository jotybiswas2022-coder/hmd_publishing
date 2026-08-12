@php
    $service = $service ?? null;
@endphp

<form action="{{ $action }}" method="POST">
    @csrf
    @if($method ?? null)
        @method($method)
    @endif

    <div class="svc-form-grid">

        {{-- Left column --}}
        <div class="svc-form-col">

            <div class="svc-form-card">
                <div class="svc-form-card-title"><i class="bi bi-grid me-2"></i>Service Details</div>

                <div class="svc-form-group">
                    <label for="name" class="svc-form-label">Service Name *</label>
                    <input type="text" id="name" name="name" class="svc-form-input"
                           placeholder="e.g. Book Writing &amp; Ghostwriting"
                           value="{{ old('name', $service->name ?? '') }}" required>
                </div>

                <div class="svc-form-row">
                    <div class="svc-form-group">
                        <label for="category" class="svc-form-label">Category *</label>
                        <select id="category" name="category" class="svc-form-input" required>
                            @foreach (\App\Models\SiteService::CATEGORIES as $value => $label)
                                <option value="{{ $value }}" @selected(old('category', $service->category ?? 'production') === $value)>
                                    {{ $label }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="svc-form-group">
                        <label for="sort_order" class="svc-form-label">Sort Order</label>
                        <input type="number" id="sort_order" name="sort_order" class="svc-form-input"
                               value="{{ old('sort_order', $service->sort_order ?? 0) }}">
                    </div>
                </div>

                <div class="svc-form-group">
                    <label for="url" class="svc-form-label">Link URL</label>
                    <input type="text" id="url" name="url" class="svc-form-input"
                           placeholder="e.g. /services/editing (blank = #)"
                           value="{{ old('url', $service->url ?? '') }}">
                    <small class="svc-form-hint">Leave empty if the service has no dedicated page yet.</small>
                </div>

                <div class="svc-form-row">
                    <div class="svc-form-group">
                        <label for="price" class="svc-form-label">Price Text</label>
                        <input type="text" id="price" name="price" class="svc-form-input"
                               placeholder="e.g. From £1,497"
                               value="{{ old('price', $service->price ?? '') }}">
                    </div>

                    <div class="svc-form-group">
                        <label for="delivery_time" class="svc-form-label">Delivery Time</label>
                        <input type="text" id="delivery_time" name="delivery_time" class="svc-form-input"
                               placeholder="e.g. 4–13 weeks"
                               value="{{ old('delivery_time', $service->delivery_time ?? '') }}">
                    </div>
                </div>

                <div class="svc-form-group">
                    <label for="badge" class="svc-form-label">Badge</label>
                    <input type="text" id="badge" name="badge" class="svc-form-input"
                           placeholder="e.g. POPULAR, MOST POPULAR, QUICK START"
                           value="{{ old('badge', $service->badge ?? '') }}">
                </div>
            </div>

        </div>

        {{-- Right column --}}
        <div class="svc-form-col">

            <div class="svc-form-card">
                <div class="svc-form-card-title"><i class="bi bi-sliders me-2"></i>Display Options</div>

                <div class="svc-form-group svc-form-toggles">
                    <label class="svc-toggle">
                        <input type="checkbox" name="has_arrow" value="1"
                               @checked(old('has_arrow', $service->has_arrow ?? false))>
                        <span class="svc-toggle-box"></span>
                        <span class="svc-toggle-text"><i class="bi bi-arrow-right me-1"></i>Show arrow (card-top)</span>
                    </label>

                    <label class="svc-toggle">
                        <input type="checkbox" name="is_dark" value="1"
                               @checked(old('is_dark', $service->is_dark ?? false))>
                        <span class="svc-toggle-box"></span>
                        <span class="svc-toggle-text"><i class="bi bi-circle-fill me-1"></i>Dark card variant</span>
                    </label>

                    <label class="svc-toggle">
                        <input type="checkbox" name="is_active" value="1"
                               @checked(old('is_active', $service->is_active ?? true))>
                        <span class="svc-toggle-box"></span>
                        <span class="svc-toggle-text"><i class="bi bi-power me-1"></i>Active (visible on site)</span>
                    </label>
                </div>
            </div>

        </div>

    </div>

    <div class="svc-form-footer">
        <a href="{{ route('site-services.index') }}" class="svc-btn-cancel">Cancel</a>
        <button type="submit" class="svc-btn-save">
            <i class="bi bi-check-lg me-1"></i> {{ $submitLabel }}
        </button>
    </div>
</form>