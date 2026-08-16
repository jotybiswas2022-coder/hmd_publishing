<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
        $plans = Plan::orderBy('sort_order')->get();

        $planGroups = $plans->groupBy(fn ($plan) => $plan->badge ?: 'Uncategorized');

        return view('backend.plans.index', compact('plans', 'planGroups'));
    }

    public function create()
    {
        return view('backend.plans.create');
    }

    public function store(Request $request)
    {
        $data = $this->validated($request);

        Plan::create($data);

        return redirect()->route('plans.index')
            ->with('success', 'Pricing plan created successfully.');
    }

    public function edit(Plan $plan)
    {
        return view('backend.plans.edit', compact('plan'));
    }

    public function update(Request $request, Plan $plan)
    {
        $data = $this->validated($request);

        $plan->update($data);

        return redirect()->route('plans.index')
            ->with('success', 'Pricing plan updated successfully.');
    }

    public function destroy(Plan $plan)
    {
        $plan->delete();

        return redirect()->route('plans.index')
            ->with('success', 'Pricing plan deleted successfully.');
    }

    private function validated(Request $request)
    {
        $data = $request->validate([
            'key'          => 'required|string|max:100',
            'name'         => 'required|string|max:255',
            'price'         => 'required|numeric|min:0',
            'separate_cost' => 'nullable|numeric|min:0',
            'description'   => 'nullable|string|max:500',
            'badge'        => 'nullable|string|max:100',
            'button_text'  => 'required|string|max:255',
            'features'     => 'nullable|array',
            'features.*'   => 'nullable|string|max:500',
            'is_featured'  => 'nullable',
            'is_active'    => 'nullable',
            'sort_order'   => 'nullable|integer',
        ]);

        $data['features'] = array_values(array_filter($data['features'] ?? []));

        $data['is_featured'] = $request->has('is_featured');
        $data['is_active']   = $request->has('is_active');
        $data['sort_order']  = $request->input('sort_order', 0);

        return $data;
    }
}
