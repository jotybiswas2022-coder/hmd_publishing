<?php

namespace App\Http\Controllers;

use App\Models\ServiceCategory;
use App\Models\ServicePage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServicePageController extends Controller
{
    public function index()
    {
        $pages = ServicePage::with('category')
            ->orderBy('sort_order')
            ->get();

        $grouped = $pages->groupBy(fn ($p) => $p->category->name ?? 'Uncategorized');

        return view('backend.service-pages.index', compact('pages', 'grouped'));
    }

    public function create()
    {
        $categories = ServiceCategory::active()->orderBy('sort_order')->get();

        return view('backend.service-pages.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $data = $this->validated($request);

        $page = ServicePage::create($data);

        $this->syncPlans($request, $page);
        $this->syncAddons($request, $page);

        return redirect()->route('service-pages.index')
            ->with('success', 'Service page created successfully.');
    }

    public function edit(ServicePage $servicePage)
    {
        $servicePage->load(['plans', 'addons']);
        $categories = ServiceCategory::active()->orderBy('sort_order')->get();

        return view('backend.service-pages.edit', compact('servicePage', 'categories'));
    }

    public function update(Request $request, ServicePage $servicePage)
    {
        $data = $this->validated($request);

        $servicePage->update($data);

        $this->syncPlans($request, $servicePage);
        $this->syncAddons($request, $servicePage);

        return redirect()->route('service-pages.index')
            ->with('success', 'Service page updated successfully.');
    }

    public function destroy(ServicePage $servicePage)
    {
        $servicePage->delete();

        return redirect()->route('service-pages.index')
            ->with('success', 'Service page deleted successfully.');
    }

    private function validated(Request $request)
    {
        $data = $request->validate([
            'service_category_id' => 'required|exists:service_categories,id',
            'title'               => 'required|string|max:255',
            'slug'                => 'nullable|string|max:100',
            'short_description'   => 'nullable|string|max:500',
            'description'         => 'nullable|string',
            'price_text'          => 'nullable|string|max:255',
            'delivery_time'       => 'nullable|string|max:255',
            'badge'               => 'nullable|string|max:100',
            'is_active'           => 'nullable',
            'sort_order'          => 'nullable|integer',
        ]);

        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']);
        }

        $data['is_active']  = $request->has('is_active');
        $data['sort_order'] = $request->input('sort_order', 0);

        return $data;
    }

    private function syncPlans(Request $request, ServicePage $page)
    {
        $names  = $request->input('plan_name', []);
        $prices = $request->input('plan_price', []);
        $sep    = $request->input('plan_separate_cost', []);
        $descs  = $request->input('plan_description', []);
        $badges = $request->input('plan_badge', []);
        $btns   = $request->input('plan_button_text', []);
        $feats  = $request->input('plan_features', []);
        $featd  = $request->input('plan_is_featured', []);
        $actives = $request->input('plan_is_active', []);
        $orders = $request->input('plan_sort_order', []);

        $page->plans()->delete();

        if (!is_array($names)) return;

        foreach ($names as $i => $name) {
            if (empty(trim($name ?? ''))) continue;

            $features = null;
            if (!empty($feats[$i]) && is_array($feats[$i])) {
                $features = array_values(array_filter($feats[$i]));
            }

            $page->plans()->create([
                'name'          => $name,
                'price'         => $prices[$i] ?? 0,
                'separate_cost' => $sep[$i] ?? null,
                'description'   => $descs[$i] ?? null,
                'badge'         => $badges[$i] ?? null,
                'button_text'   => $btns[$i] ?? 'Get Started',
                'features'      => $features,
                'is_featured'   => !empty($featd[$i]),
                'is_active'     => !isset($actives[$i]) || $actives[$i],
                'sort_order'    => $orders[$i] ?? $i,
            ]);
        }
    }

    private function syncAddons(Request $request, ServicePage $page)
    {
        $names  = $request->input('addon_name', []);
        $prices = $request->input('addon_price', []);
        $descs  = $request->input('addon_description', []);
        $actives = $request->input('addon_is_active', []);
        $orders = $request->input('addon_sort_order', []);

        $page->addons()->delete();

        if (!is_array($names)) return;

        foreach ($names as $i => $name) {
            if (empty(trim($name ?? ''))) continue;

            $page->addons()->create([
                'name'        => $name,
                'price'       => $prices[$i] ?? 0,
                'description' => $descs[$i] ?? null,
                'is_active'   => !isset($actives[$i]) || $actives[$i],
                'sort_order'  => $orders[$i] ?? $i,
            ]);
        }
    }
}
