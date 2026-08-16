@php
    $plan = $plan ?? null;
    $features = old('features', $plan ? ($plan->features ?? []) : []);
    $features = is_array($features) ? array_values($features) : [];
@endphp

<form action="{{ $action }}" method="POST" class="plan-form">
    @csrf
    @if($method ?? null)
        @method($method)
    @endif

    <div class="plan-form-grid">

        {{-- Left column --}}
        <div class="plan-form-col">

            <div class="plan-form-card">
                <div class="plan-form-card-title"><i class="bi bi-box-seam me-2"></i>Plan Details</div>

                <div class="plan-form-group">
                    <label for="name" class="plan-form-label">Plan Name *</label>
                    <input type="text" id="name" name="name" class="plan-form-input"
                           placeholder="e.g. Author Essentials"
                           value="{{ old('name', $plan->name ?? '') }}" required>
                </div>

                <div class="plan-form-row">
                    <div class="plan-form-group">
                        <label for="key" class="plan-form-label">Plan Key / Slug *</label>
                        <input type="text" id="key" name="key" class="plan-form-input"
                               placeholder="e.g. essentials"
                               value="{{ old('key', $plan->key ?? '') }}" required>
                        <small class="plan-form-hint">Used in the URL: /checkout?plan=<b>{key}</b></small>
                    </div>

                    <div class="plan-form-group">
                        <label for="price" class="plan-form-label">Price (£) *</label>
                        <input type="number" id="price" name="price" class="plan-form-input"
                               placeholder="e.g. 997" step="0.01" min="0"
                               value="{{ old('price', $plan->price ?? '') }}" required>
                    </div>

                    <div class="plan-form-group">
                        <label for="separate_cost" class="plan-form-label">Separate Cost (£)</label>
                        <input type="number" id="separate_cost" name="separate_cost" class="plan-form-input"
                               placeholder="e.g. 1205" step="0.01" min="0"
                               value="{{ old('separate_cost', $plan->separate_cost ?? '') }}">
                        <small class="plan-form-hint">Combined cost if services were bought separately. Savings are computed automatically.</small>
                    </div>
                </div>

                <div class="plan-form-row">
                    <div class="plan-form-group">
                        <label for="badge" class="plan-form-label">Badge</label>
                        <input type="text" id="badge" name="badge" class="plan-form-input"
                               placeholder="e.g. ESSENTIALS"
                               value="{{ old('badge', $plan->badge ?? '') }}">
                    </div>

                    <div class="plan-form-group">
                        <label for="button_text" class="plan-form-label">Button Text *</label>
                        <input type="text" id="button_text" name="button_text" class="plan-form-input"
                               placeholder="e.g. Start with Essentials"
                               value="{{ old('button_text', $plan->button_text ?? '') }}" required>
                    </div>
                </div>

                <div class="plan-form-group">
                    <label for="description" class="plan-form-label">Short Description</label>
                    <textarea id="description" name="description" class="plan-form-input" rows="2"
                              placeholder="One line describing this package">{{ old('description', $plan->description ?? '') }}</textarea>
                </div>

                <div class="plan-form-row">
                    <div class="plan-form-group">
                        <label for="sort_order" class="plan-form-label">Sort Order</label>
                        <input type="number" id="sort_order" name="sort_order" class="plan-form-input"
                               value="{{ old('sort_order', $plan->sort_order ?? 0) }}">
                    </div>

                    <div class="plan-form-group plan-form-toggles">
                        <label class="plan-toggle">
                            <input type="checkbox" name="is_featured" value="1"
                                   @checked(old('is_featured', $plan->is_featured ?? false))>
                            <span class="plan-toggle-box"></span>
                            <span class="plan-toggle-text"><i class="bi bi-star-fill me-1"></i>Featured (Most Popular)</span>
                        </label>

                        <label class="plan-toggle">
                            <input type="checkbox" name="is_active" value="1"
                                   @checked(old('is_active', $plan->is_active ?? true))>
                            <span class="plan-toggle-box"></span>
                            <span class="plan-toggle-text"><i class="bi bi-power me-1"></i>Active</span>
                        </label>
                    </div>
                </div>
            </div>

        </div>

        {{-- Right column --}}
        <div class="plan-form-col">

            <div class="plan-form-card">
                <div class="plan-form-card-title">
                    <i class="bi bi-list-check me-2"></i>Features Included
                    <span class="plan-form-add-feature" onclick="addFeatureRow()">+ Add</span>
                </div>

                <div id="featuresWrap">
                    @forelse ($features as $index => $feature)
                        <div class="feature-row">
                            <input type="text" name="features[]" class="plan-form-input"
                                   placeholder="Feature {{ $index + 1 }}" value="{{ $feature }}">
                            <button type="button" class="feature-remove" onclick="removeFeatureRow(this)">&times;</button>
                        </div>
                    @empty
                        <div class="feature-row">
                            <input type="text" name="features[]" class="plan-form-input" placeholder="Feature 1">
                            <button type="button" class="feature-remove" onclick="removeFeatureRow(this)">&times;</button>
                        </div>
                    @endforelse
                </div>

                <small class="plan-form-hint">These appear as bullet points on the homepage pricing card.</small>
            </div>

        </div>

    </div>

    <div class="plan-form-footer">
        <a href="{{ route('plans.index') }}" class="plan-btn-cancel">Cancel</a>
        <button type="submit" class="plan-btn-save">
            <i class="bi bi-check-lg me-1"></i> {{ $submitLabel }}
        </button>
    </div>
</form>

<script>
function addFeatureRow() {
    const wrap = document.getElementById('featuresWrap');
    const count = wrap.querySelectorAll('.feature-row').length + 1;
    const row = document.createElement('div');
    row.className = 'feature-row';
    row.innerHTML = `
        <input type="text" name="features[]" class="plan-form-input" placeholder="Feature ${count}">
        <button type="button" class="feature-remove" onclick="removeFeatureRow(this)">&times;</button>
    `;
    wrap.appendChild(row);
}

function removeFeatureRow(btn) {
    const wrap = document.getElementById('featuresWrap');
    const rows = wrap.querySelectorAll('.feature-row');
    if (rows.length <= 1) {
        btn.closest('.feature-row').querySelector('input').value = '';
        return;
    }
    btn.closest('.feature-row').remove();
}
</script>
