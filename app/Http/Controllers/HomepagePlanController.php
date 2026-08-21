<?php

namespace App\Http\Controllers;

use App\Models\HomepagePlan;
use Illuminate\Http\Request;

class HomepagePlanController extends Controller
{
    public function index()
    {
        $plans = HomepagePlan::with('addons')->orderBy('sort_order')->get();

        return view('backend.homepage-plans.index', compact('plans'));
    }

    public function create()
    {
        return view('backend.homepage-plans.create');
    }

    public function store(Request $request)
    {
        $data = $this->validated($request);

        $plan = HomepagePlan::create($data);

        $this->syncAddons($request, $plan);

        return redirect()->route('homepage-plans.index')
            ->with('success', 'Pricing plan created successfully.');
    }

    public function edit(HomepagePlan $homepagePlan)
    {
        $homepagePlan->load('addons');

        return view('backend.homepage-plans.edit', compact('homepagePlan'));
    }

    public function update(Request $request, HomepagePlan $homepagePlan)
    {
        $data = $this->validated($request);

        $homepagePlan->update($data);

        $this->syncAddons($request, $homepagePlan);

        return redirect()->route('homepage-plans.index')
            ->with('success', 'Pricing plan updated successfully.');
    }

    public function destroy(HomepagePlan $homepagePlan)
    {
        $homepagePlan->delete();

        return redirect()->route('homepage-plans.index')
            ->with('success', 'Pricing plan deleted successfully.');
    }

    private function validated(Request $request)
    {
        $data = $request->validate([
            'name'        => 'required|string|max:255',
            'price'       => 'required|numeric|min:0',
            'description' => 'nullable|string|max:500',
            'badge'       => 'nullable|string|max:100',
            'button_text' => 'nullable|string|max:100',
            'button_url'  => 'nullable|string|max:500',
            'is_featured' => 'nullable',
            'is_active'   => 'nullable',
            'sort_order'  => 'nullable|integer',
        ]);

        $data['is_featured'] = $request->has('is_featured');
        $data['is_active']   = $request->has('is_active');
        $data['sort_order']  = $request->input('sort_order', 0);

        return $data;
    }

    private function syncAddons(Request $request, HomepagePlan $plan)
    {
        $names  = $request->input('addon_name', []);
        $prices = $request->input('addon_price', []);
        $descs  = $request->input('addon_description', []);
        $actives = $request->input('addon_is_active', []);
        $orders = $request->input('addon_sort_order', []);

        $plan->addons()->delete();

        if (!is_array($names)) return;

        foreach ($names as $i => $name) {
            if (empty(trim($name ?? ''))) continue;

            $plan->addons()->create([
                'name'        => $name,
                'price'       => $prices[$i] ?? 0,
                'description' => $descs[$i] ?? null,
                'is_active'   => !isset($actives[$i]) || $actives[$i],
                'sort_order'  => $orders[$i] ?? $i,
            ]);
        }
    }
}
