@php
    $homepagePlan = $homepagePlan ?? null;
    $addons = old('addon_name') ? collect() : ($homepagePlan?->addons ?? collect());
@endphp

<form action="{{ $action }}" method="POST">
    @csrf
    @if($method ?? null)
        @method($method)
    @endif

    {{-- ===== Plan Details ===== --}}
    <div class="sp-form-card">
        <div class="sp-form-card-title">
            <div class="sp-form-card-title-left"><i class="bi bi-credit-card-2-front"></i> Plan Details</div>
        </div>

        <div class="sp-form-row">
            <div class="sp-form-group">
                <label for="name" class="sp-form-label">Plan Name *</label>
                <input type="text" id="name" name="name" class="sp-form-input"
                       placeholder="e.g. Essentials"
                       value="{{ old('name', $homepagePlan->name ?? '') }}" required>
            </div>

            <div class="sp-form-group">
                <label for="price" class="sp-form-label">Price (£) *</label>
                <input type="number" id="price" name="price" class="sp-form-input"
                       placeholder="e.g. 1497" step="0.01" min="0"
                       value="{{ old('price', $homepagePlan->price ?? '') }}" required>
            </div>
        </div>

        <div class="sp-form-row-3">
            <div class="sp-form-group">
                <label for="badge" class="sp-form-label">Badge</label>
                <input type="text" id="badge" name="badge" class="sp-form-input"
                       placeholder="e.g. MOST POPULAR"
                       value="{{ old('badge', $homepagePlan->badge ?? '') }}">
            </div>
            <div class="sp-form-group">
                <label for="button_text" class="sp-form-label">Button Text</label>
                <input type="text" id="button_text" name="button_text" class="sp-form-input"
                       placeholder="e.g. Get Started"
                       value="{{ old('button_text', $homepagePlan->button_text ?? 'Get Started') }}">
            </div>
            <div class="sp-form-group">
                <label for="button_url" class="sp-form-label">Button URL</label>
                <input type="text" id="button_url" name="button_url" class="sp-form-input"
                       placeholder="e.g. /checkout?plan=essentials"
                       value="{{ old('button_url', $homepagePlan->button_url ?? '') }}">
            </div>
        </div>

        <div class="sp-form-group">
            <label for="description" class="sp-form-label">Short Description</label>
            <textarea id="description" name="description" class="sp-form-input" rows="2"
                      placeholder="One line describing this plan">{{ old('description', $homepagePlan->description ?? '') }}</textarea>
        </div>

        <div class="sp-form-row">
            <div class="sp-form-group">
                <label for="sort_order" class="sp-form-label">Sort Order</label>
                <input type="number" id="sort_order" name="sort_order" class="sp-form-input"
                       value="{{ old('sort_order', $homepagePlan->sort_order ?? 0) }}">
            </div>

            <div class="sp-form-group sp-form-toggles">
                <label class="sp-toggle">
                    <input type="checkbox" name="is_featured" value="1"
                           @checked(old('is_featured', $homepagePlan->is_featured ?? false))>
                    <span class="sp-toggle-box"></span>
                    <span class="sp-toggle-text"><i class="bi bi-star-fill me-1"></i>Featured (Most Popular)</span>
                </label>
                <label class="sp-toggle">
                    <input type="checkbox" name="is_active" value="1"
                           @checked(old('is_active', $homepagePlan->is_active ?? true))>
                    <span class="sp-toggle-box"></span>
                    <span class="sp-toggle-text"><i class="bi bi-power me-1"></i>Active (visible on site)</span>
                </label>
            </div>
        </div>
    </div>

    {{-- ===== Features ===== --}}
    <div class="sp-form-card">
        <div class="sp-form-card-title">
            <div class="sp-form-card-title-left"><i class="bi bi-list-check"></i> Features</div>
            <button type="button" class="sp-add-plan" onclick="addFeatureRow()">
                <i class="bi bi-plus-lg"></i> Add Feature
            </button>
        </div>

        <div id="featuresWrap">
            @php $features = old('features') ? old('features') : ($homepagePlan->features ?? []); @endphp
            @if(is_array($features) && count($features) > 0)
                @foreach ($features as $fi => $feat)
                    <div class="sp-feature-row" style="margin-bottom: 8px;">
                        <input type="text" name="features[]" class="sp-form-input"
                               placeholder="Feature" value="{{ $feat }}">
                        <button type="button" class="sp-feature-remove" onclick="removeFeatureRow(this)">&times;</button>
                    </div>
                @endforeach
            @else
                <div class="sp-feature-row" style="margin-bottom: 8px;">
                    <input type="text" name="features[]" class="sp-form-input" placeholder="Feature 1">
                    <button type="button" class="sp-feature-remove" onclick="removeFeatureRow(this)">&times;</button>
                </div>
            @endif
        </div>
    </div>

    {{-- ===== Add-ons ===== --}}
    <div class="sp-form-card">
        <div class="sp-form-card-title">
            <div class="sp-form-card-title-left"><i class="bi bi-plus-square"></i> Add-ons</div>
            <button type="button" class="sp-add-addon" onclick="addAddonRow()">
                <i class="bi bi-plus-lg"></i> Add Add-on
            </button>
        </div>

        <div id="addonsWrap">
            @forelse ($addons as $ai => $addon)
                <div class="sp-addon-card">
                    <div class="sp-form-group">
                        <label class="sp-form-label">Add-on Name *</label>
                        <input type="text" name="addon_name[]" class="sp-form-input"
                               placeholder="e.g. Extra Round" value="{{ old('addon_name.'.$ai, $addon->name ?? '') }}">
                    </div>
                    <div class="sp-form-group">
                        <label class="sp-form-label">Price (£) *</label>
                        <input type="number" name="addon_price[]" class="sp-form-input"
                               placeholder="e.g. 197" step="0.01" min="0"
                               value="{{ old('addon_price.'.$ai, $addon->price ?? '') }}">
                    </div>
                    <div class="sp-form-group">
                        <label class="sp-form-label">Description</label>
                        <input type="text" name="addon_description[]" class="sp-form-input"
                               placeholder="Brief description"
                               value="{{ old('addon_description.'.$ai, $addon->description ?? '') }}">
                    </div>
                    <div class="sp-form-group" style="flex:0 0 auto; min-width:auto;">
                        <label class="sp-form-label">Active</label>
                        <label class="sp-toggle">
                            <input type="checkbox" name="addon_is_active[{{ $ai }}]" value="1"
                                   @checked(old('addon_is_active.'.$ai, $addon->is_active ?? true))>
                            <span class="sp-toggle-box"></span>
                        </label>
                    </div>
                    <input type="hidden" name="addon_sort_order[]" value="{{ old('addon_sort_order.'.$ai, $ai) }}">
                    <button type="button" class="sp-addon-remove" onclick="removeAddonRow(this)">&times;</button>
                </div>
            @empty
                <div class="sp-addon-card">
                    <div class="sp-form-group">
                        <label class="sp-form-label">Add-on Name *</label>
                        <input type="text" name="addon_name[]" class="sp-form-input" placeholder="e.g. Extra Round">
                    </div>
                    <div class="sp-form-group">
                        <label class="sp-form-label">Price (£) *</label>
                        <input type="number" name="addon_price[]" class="sp-form-input" placeholder="e.g. 197" step="0.01" min="0">
                    </div>
                    <div class="sp-form-group">
                        <label class="sp-form-label">Description</label>
                        <input type="text" name="addon_description[]" class="sp-form-input" placeholder="Brief description">
                    </div>
                    <div class="sp-form-group" style="flex:0 0 auto; min-width:auto;">
                        <label class="sp-form-label">Active</label>
                        <label class="sp-toggle">
                            <input type="checkbox" name="addon_is_active[0]" value="1" checked>
                            <span class="sp-toggle-box"></span>
                        </label>
                    </div>
                    <input type="hidden" name="addon_sort_order[]" value="0">
                    <button type="button" class="sp-addon-remove" onclick="removeAddonRow(this)">&times;</button>
                </div>
            @endforelse
        </div>
    </div>

    <div class="sp-form-footer">
        <a href="{{ route('homepage-plans.index') }}" class="sp-btn-cancel">Cancel</a>
        <button type="submit" class="sp-btn-save">
            <i class="bi bi-check-lg me-1"></i> {{ $submitLabel }}
        </button>
    </div>
</form>

<script>
function addFeatureRow() {
    var wrap = document.getElementById('featuresWrap');
    var row = document.createElement('div');
    row.className = 'sp-feature-row';
    row.style.marginBottom = '8px';
    row.innerHTML = `
        <input type="text" name="features[]" class="sp-form-input" placeholder="Feature">
        <button type="button" class="sp-feature-remove" onclick="removeFeatureRow(this)">&times;</button>
    `;
    wrap.appendChild(row);
}

function removeFeatureRow(btn) {
    var wrap = btn.closest('#featuresWrap');
    var rows = wrap.querySelectorAll('.sp-feature-row');
    if (rows.length <= 1) {
        btn.closest('.sp-feature-row').querySelector('input').value = '';
        return;
    }
    btn.closest('.sp-feature-row').remove();
}

function addAddonRow() {
    var wrap = document.getElementById('addonsWrap');
    var cards = wrap.querySelectorAll('.sp-addon-card');
    var idx = cards.length;
    var html = `
    <div class="sp-addon-card">
        <div class="sp-form-group">
            <label class="sp-form-label">Add-on Name *</label>
            <input type="text" name="addon_name[]" class="sp-form-input" placeholder="e.g. Extra Round">
        </div>
        <div class="sp-form-group">
            <label class="sp-form-label">Price (£) *</label>
            <input type="number" name="addon_price[]" class="sp-form-input" placeholder="e.g. 197" step="0.01" min="0">
        </div>
        <div class="sp-form-group">
            <label class="sp-form-label">Description</label>
            <input type="text" name="addon_description[]" class="sp-form-input" placeholder="Brief description">
        </div>
        <div class="sp-form-group" style="flex:0 0 auto; min-width:auto;">
            <label class="sp-form-label">Active</label>
            <label class="sp-toggle">
                <input type="checkbox" name="addon_is_active[${idx}]" value="1" checked>
                <span class="sp-toggle-box"></span>
            </label>
        </div>
        <input type="hidden" name="addon_sort_order[]" value="${idx}">
        <button type="button" class="sp-addon-remove" onclick="removeAddonRow(this)">&times;</button>
    </div>`;
    wrap.insertAdjacentHTML('beforeend', html);
}

function removeAddonRow(btn) {
    btn.closest('.sp-addon-card').remove();
}
</script>
