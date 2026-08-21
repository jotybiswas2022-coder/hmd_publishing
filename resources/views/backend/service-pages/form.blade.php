@php
    $servicePage = $servicePage ?? null;
    $plans = old('plan_name') ? collect() : ($servicePage?->plans ?? collect());
    $addons = old('addon_name') ? collect() : ($servicePage?->addons ?? collect());
@endphp

<form action="{{ $action }}" method="POST">
    @csrf
    @if($method ?? null)
        @method($method)
    @endif

    {{-- ===== Basic Info ===== --}}
    <div class="sp-form-card">
        <div class="sp-form-card-title">
            <div class="sp-form-card-title-left"><i class="bi bi-file-earmark-text"></i> Service Page Details</div>
        </div>

        <div class="sp-form-row">
            <div class="sp-form-group">
                <label for="title" class="sp-form-label">Page Title *</label>
                <input type="text" id="title" name="title" class="sp-form-input"
                       placeholder="e.g. Book Writing & Ghostwriting"
                       value="{{ old('title', $servicePage->title ?? '') }}" required>
            </div>

            <div class="sp-form-group">
                <label for="slug" class="sp-form-label">Slug</label>
                <input type="text" id="slug" name="slug" class="sp-form-input"
                       placeholder="auto-generated from title"
                       value="{{ old('slug', $servicePage->slug ?? '') }}">
                <small class="sp-form-hint">URL will be: /services/<b>{slug}</b></small>
            </div>
        </div>

        <div class="sp-form-row">
            <div class="sp-form-group">
                <label for="service_category_id" class="sp-form-label">Category *</label>
                <select id="service_category_id" name="service_category_id" class="sp-form-input" required>
                    <option value="">Select category...</option>
                    @foreach ($categories as $cat)
                        <option value="{{ $cat->id }}" @selected(old('service_category_id', $servicePage->service_category_id ?? '') == $cat->id)>
                            {{ $cat->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="sp-form-group">
                <label for="badge" class="sp-form-label">Badge</label>
                <input type="text" id="badge" name="badge" class="sp-form-input"
                       placeholder="e.g. POPULAR, MOST POPULAR"
                       value="{{ old('badge', $servicePage->badge ?? '') }}">
            </div>
        </div>

        <div class="sp-form-group">
            <label for="short_description" class="sp-form-label">Short Description</label>
            <textarea id="short_description" name="short_description" class="sp-form-input" rows="2"
                      placeholder="Brief summary shown on the services listing page">{{ old('short_description', $servicePage->short_description ?? '') }}</textarea>
        </div>

        <div class="sp-form-group">
            <label for="description" class="sp-form-label">Full Description (HTML allowed)</label>
            <textarea id="description" name="description" class="sp-form-input" rows="6"
                      placeholder="Detailed content for the service page">{{ old('description', $servicePage->description ?? '') }}</textarea>
        </div>

        <div class="sp-form-row">
            <div class="sp-form-group">
                <label for="price_text" class="sp-form-label">Price Text</label>
                <input type="text" id="price_text" name="price_text" class="sp-form-input"
                       placeholder="e.g. From £1,497"
                       value="{{ old('price_text', $servicePage->price_text ?? '') }}">
            </div>

            <div class="sp-form-group">
                <label for="delivery_time" class="sp-form-label">Delivery Time</label>
                <input type="text" id="delivery_time" name="delivery_time" class="sp-form-input"
                       placeholder="e.g. 4–13 weeks"
                       value="{{ old('delivery_time', $servicePage->delivery_time ?? '') }}">
            </div>
        </div>

        <div class="sp-form-row">
            <div class="sp-form-group">
                <label for="sort_order" class="sp-form-label">Sort Order</label>
                <input type="number" id="sort_order" name="sort_order" class="sp-form-input"
                       value="{{ old('sort_order', $servicePage->sort_order ?? 0) }}">
            </div>

            <div class="sp-form-group sp-form-toggles">
                <label class="sp-toggle">
                    <input type="checkbox" name="is_active" value="1"
                           @checked(old('is_active', $servicePage->is_active ?? true))>
                    <span class="sp-toggle-box"></span>
                    <span class="sp-toggle-text"><i class="bi bi-power me-1"></i>Active (visible on site)</span>
                </label>
            </div>
        </div>
    </div>

    {{-- ===== Pricing Plans ===== --}}
    <div class="sp-form-card">
        <div class="sp-form-card-title">
            <div class="sp-form-card-title-left"><i class="bi bi-tags"></i> Pricing Plans</div>
            <button type="button" class="sp-add-plan" onclick="addPlanCard()">
                <i class="bi bi-plus-lg"></i> Add Plan
            </button>
        </div>

        <div id="plansWrap">
            @forelse ($plans as $pi => $plan)
                <div class="sp-plan-card" data-index="{{ $pi }}">
                    <div class="sp-plan-card-header">
                        <span class="sp-plan-card-num">Plan {{ $pi + 1 }}</span>
                        <button type="button" class="sp-plan-remove" onclick="removePlanCard(this)">Remove</button>
                    </div>

                    <div class="sp-form-row">
                        <div class="sp-form-group">
                            <label class="sp-form-label">Plan Name *</label>
                            <input type="text" name="plan_name[]" class="sp-form-input"
                                   placeholder="e.g. Starter" value="{{ old('plan_name.'.$pi, $plan->name ?? '') }}">
                        </div>
                        <div class="sp-form-group">
                            <label class="sp-form-label">Price (£) *</label>
                            <input type="number" name="plan_price[]" class="sp-form-input"
                                   placeholder="e.g. 997" step="0.01" min="0"
                                   value="{{ old('plan_price.'.$pi, $plan->price ?? '') }}">
                        </div>
                    </div>

                    <div class="sp-form-row-3">
                        <div class="sp-form-group">
                            <label class="sp-form-label">Separate Cost (£)</label>
                            <input type="number" name="plan_separate_cost[]" class="sp-form-input"
                                   placeholder="Original cost" step="0.01" min="0"
                                   value="{{ old('plan_separate_cost.'.$pi, $plan->separate_cost ?? '') }}">
                            <small class="sp-form-hint">For computing savings</small>
                        </div>
                        <div class="sp-form-group">
                            <label class="sp-form-label">Badge</label>
                            <input type="text" name="plan_badge[]" class="sp-form-input"
                                   placeholder="e.g. MOST POPULAR"
                                   value="{{ old('plan_badge.'.$pi, $plan->badge ?? '') }}">
                        </div>
                        <div class="sp-form-group">
                            <label class="sp-form-label">Button Text</label>
                            <input type="text" name="plan_button_text[]" class="sp-form-input"
                                   placeholder="e.g. Get Started"
                                   value="{{ old('plan_button_text.'.$pi, $plan->button_text ?? 'Get Started') }}">
                        </div>
                    </div>

                    <div class="sp-form-group">
                        <label class="sp-form-label">Short Description</label>
                        <input type="text" name="plan_description[]" class="sp-form-input"
                               placeholder="One line describing this plan"
                               value="{{ old('plan_description.'.$pi, $plan->description ?? '') }}">
                    </div>

                    <div class="sp-form-row">
                        <div class="sp-form-group">
                            <label class="sp-form-label">Features</label>
                            <div class="sp-feature-rows" id="features_{{ $pi }}">
                                @php $features = old('plan_features.'.$pi, $plan->features ?? []); @endphp
                                @if(is_array($features) && count($features) > 0)
                                    @foreach ($features as $fi => $feat)
                                        <div class="sp-feature-row">
                                            <input type="text" name="plan_features[{{ $pi }}][]" class="sp-form-input"
                                                   placeholder="Feature" value="{{ $feat }}">
                                            <button type="button" class="sp-feature-remove" onclick="removeFeatureRow(this)">&times;</button>
                                        </div>
                                    @endforeach
                                @else
                                    <div class="sp-feature-row">
                                        <input type="text" name="plan_features[{{ $pi }}][]" class="sp-form-input" placeholder="Feature 1">
                                        <button type="button" class="sp-feature-remove" onclick="removeFeatureRow(this)">&times;</button>
                                    </div>
                                @endif
                            </div>
                            <button type="button" class="sp-add-feature" onclick="addFeatureRow({{ $pi }})">
                                <i class="bi bi-plus"></i> Add feature
                            </button>
                        </div>

                        <div class="sp-form-group sp-form-toggles" style="justify-content:flex-start; padding-top: 4px;">
                            <label class="sp-toggle">
                                <input type="checkbox" name="plan_is_featured[{{ $pi }}]" value="1"
                                       @checked(old('plan_is_featured.'.$pi, $plan->is_featured ?? false))>
                                <span class="sp-toggle-box"></span>
                                <span class="sp-toggle-text"><i class="bi bi-star-fill me-1"></i>Featured</span>
                            </label>
                            <label class="sp-toggle">
                                <input type="checkbox" name="plan_is_active[{{ $pi }}]" value="1"
                                       @checked(old('plan_is_active.'.$pi, $plan->is_active ?? true))>
                                <span class="sp-toggle-box"></span>
                                <span class="sp-toggle-text"><i class="bi bi-power me-1"></i>Active</span>
                            </label>
                            <input type="hidden" name="plan_sort_order[]" value="{{ old('plan_sort_order.'.$pi, $pi) }}">
                        </div>
                    </div>
                </div>
            @empty
                <div class="sp-plan-card" data-index="0">
                    <div class="sp-plan-card-header">
                        <span class="sp-plan-card-num">Plan 1</span>
                        <button type="button" class="sp-plan-remove" onclick="removePlanCard(this)">Remove</button>
                    </div>
                    <div class="sp-form-row">
                        <div class="sp-form-group">
                            <label class="sp-form-label">Plan Name *</label>
                            <input type="text" name="plan_name[]" class="sp-form-input" placeholder="e.g. Starter">
                        </div>
                        <div class="sp-form-group">
                            <label class="sp-form-label">Price (£) *</label>
                            <input type="number" name="plan_price[]" class="sp-form-input" placeholder="e.g. 997" step="0.01" min="0">
                        </div>
                    </div>
                    <div class="sp-form-row-3">
                        <div class="sp-form-group">
                            <label class="sp-form-label">Separate Cost (£)</label>
                            <input type="number" name="plan_separate_cost[]" class="sp-form-input" placeholder="Original cost" step="0.01" min="0">
                            <small class="sp-form-hint">For computing savings</small>
                        </div>
                        <div class="sp-form-group">
                            <label class="sp-form-label">Badge</label>
                            <input type="text" name="plan_badge[]" class="sp-form-input" placeholder="e.g. MOST POPULAR">
                        </div>
                        <div class="sp-form-group">
                            <label class="sp-form-label">Button Text</label>
                            <input type="text" name="plan_button_text[]" class="sp-form-input" placeholder="e.g. Get Started" value="Get Started">
                        </div>
                    </div>
                    <div class="sp-form-group">
                        <label class="sp-form-label">Short Description</label>
                        <input type="text" name="plan_description[]" class="sp-form-input" placeholder="One line describing this plan">
                    </div>
                    <div class="sp-form-row">
                        <div class="sp-form-group">
                            <label class="sp-form-label">Features</label>
                            <div class="sp-feature-rows" id="features_0">
                                <div class="sp-feature-row">
                                    <input type="text" name="plan_features[0][]" class="sp-form-input" placeholder="Feature 1">
                                    <button type="button" class="sp-feature-remove" onclick="removeFeatureRow(this)">&times;</button>
                                </div>
                            </div>
                            <button type="button" class="sp-add-feature" onclick="addFeatureRow(0)">
                                <i class="bi bi-plus"></i> Add feature
                            </button>
                        </div>
                        <div class="sp-form-group sp-form-toggles" style="justify-content:flex-start; padding-top: 4px;">
                            <label class="sp-toggle">
                                <input type="checkbox" name="plan_is_featured[0]" value="1">
                                <span class="sp-toggle-box"></span>
                                <span class="sp-toggle-text"><i class="bi bi-star-fill me-1"></i>Featured</span>
                            </label>
                            <label class="sp-toggle">
                                <input type="checkbox" name="plan_is_active[0]" value="1" checked>
                                <span class="sp-toggle-box"></span>
                                <span class="sp-toggle-text"><i class="bi bi-power me-1"></i>Active</span>
                            </label>
                            <input type="hidden" name="plan_sort_order[]" value="0">
                        </div>
                    </div>
                </div>
            @endforelse
        </div>
    </div>

    {{-- ===== Checkout Add-ons ===== --}}
    <div class="sp-form-card">
        <div class="sp-form-card-title">
            <div class="sp-form-card-title-left"><i class="bi bi-plus-square"></i> Checkout Add-ons</div>
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
                               placeholder="e.g. Rush Delivery" value="{{ old('addon_name.'.$ai, $addon->name ?? '') }}">
                    </div>
                    <div class="sp-form-group">
                        <label class="sp-form-label">Price (£) *</label>
                        <input type="number" name="addon_price[]" class="sp-form-input"
                               placeholder="e.g. 127" step="0.01" min="0"
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
                        <input type="text" name="addon_name[]" class="sp-form-input" placeholder="e.g. Rush Delivery">
                    </div>
                    <div class="sp-form-group">
                        <label class="sp-form-label">Price (£) *</label>
                        <input type="number" name="addon_price[]" class="sp-form-input" placeholder="e.g. 127" step="0.01" min="0">
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
        <a href="{{ route('service-pages.index') }}" class="sp-btn-cancel">Cancel</a>
        <button type="submit" class="sp-btn-save">
            <i class="bi bi-check-lg me-1"></i> {{ $submitLabel }}
        </button>
    </div>
</form>

<script>
var planIndex = {{ count($plans) ?: 0 }};

function addPlanCard() {
    var wrap = document.getElementById('plansWrap');
    var idx = planIndex++;
    var html = `
    <div class="sp-plan-card" data-index="${idx}">
        <div class="sp-plan-card-header">
            <span class="sp-plan-card-num">Plan ${idx + 1}</span>
            <button type="button" class="sp-plan-remove" onclick="removePlanCard(this)">Remove</button>
        </div>
        <div class="sp-form-row">
            <div class="sp-form-group">
                <label class="sp-form-label">Plan Name *</label>
                <input type="text" name="plan_name[]" class="sp-form-input" placeholder="e.g. Starter">
            </div>
            <div class="sp-form-group">
                <label class="sp-form-label">Price (£) *</label>
                <input type="number" name="plan_price[]" class="sp-form-input" placeholder="e.g. 997" step="0.01" min="0">
            </div>
        </div>
        <div class="sp-form-row-3">
            <div class="sp-form-group">
                <label class="sp-form-label">Separate Cost (£)</label>
                <input type="number" name="plan_separate_cost[]" class="sp-form-input" placeholder="Original cost" step="0.01" min="0">
                <small class="sp-form-hint">For computing savings</small>
            </div>
            <div class="sp-form-group">
                <label class="sp-form-label">Badge</label>
                <input type="text" name="plan_badge[]" class="sp-form-input" placeholder="e.g. MOST POPULAR">
            </div>
            <div class="sp-form-group">
                <label class="sp-form-label">Button Text</label>
                <input type="text" name="plan_button_text[]" class="sp-form-input" placeholder="e.g. Get Started" value="Get Started">
            </div>
        </div>
        <div class="sp-form-group">
            <label class="sp-form-label">Short Description</label>
            <input type="text" name="plan_description[]" class="sp-form-input" placeholder="One line describing this plan">
        </div>
        <div class="sp-form-row">
            <div class="sp-form-group">
                <label class="sp-form-label">Features</label>
                <div class="sp-feature-rows" id="features_${idx}">
                    <div class="sp-feature-row">
                        <input type="text" name="plan_features[${idx}][]" class="sp-form-input" placeholder="Feature 1">
                        <button type="button" class="sp-feature-remove" onclick="removeFeatureRow(this)">&times;</button>
                    </div>
                </div>
                <button type="button" class="sp-add-feature" onclick="addFeatureRow(${idx})">
                    <i class="bi bi-plus"></i> Add feature
                </button>
            </div>
            <div class="sp-form-group sp-form-toggles" style="justify-content:flex-start; padding-top: 4px;">
                <label class="sp-toggle">
                    <input type="checkbox" name="plan_is_featured[${idx}]" value="1">
                    <span class="sp-toggle-box"></span>
                    <span class="sp-toggle-text"><i class="bi bi-star-fill me-1"></i>Featured</span>
                </label>
                <label class="sp-toggle">
                    <input type="checkbox" name="plan_is_active[${idx}]" value="1" checked>
                    <span class="sp-toggle-box"></span>
                    <span class="sp-toggle-text"><i class="bi bi-power me-1"></i>Active</span>
                </label>
                <input type="hidden" name="plan_sort_order[]" value="${idx}">
            </div>
        </div>
    </div>`;
    wrap.insertAdjacentHTML('beforeend', html);
}

function removePlanCard(btn) {
    btn.closest('.sp-plan-card').remove();
    renumberPlans();
}

function renumberPlans() {
    var cards = document.querySelectorAll('#plansWrap .sp-plan-card');
    cards.forEach(function(card, i) {
        card.querySelector('.sp-plan-card-num').textContent = 'Plan ' + (i + 1);
    });
}

function addFeatureRow(planIdx) {
    var wrap = document.getElementById('features_' + planIdx);
    if (!wrap) return;
    var count = wrap.querySelectorAll('.sp-feature-row').length + 1;
    var row = document.createElement('div');
    row.className = 'sp-feature-row';
    row.innerHTML = `
        <input type="text" name="plan_features[${planIdx}][]" class="sp-form-input" placeholder="Feature ${count}">
        <button type="button" class="sp-feature-remove" onclick="removeFeatureRow(this)">&times;</button>
    `;
    wrap.appendChild(row);
}

function removeFeatureRow(btn) {
    var wrap = btn.closest('.sp-feature-rows');
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
            <input type="text" name="addon_name[]" class="sp-form-input" placeholder="e.g. Rush Delivery">
        </div>
        <div class="sp-form-group">
            <label class="sp-form-label">Price (£) *</label>
            <input type="number" name="addon_price[]" class="sp-form-input" placeholder="e.g. 127" step="0.01" min="0">
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
