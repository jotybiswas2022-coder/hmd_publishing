<?php

namespace App\Http\Controllers;

use App\Models\Addon;
use Illuminate\Http\Request;

class AddonController extends Controller
{
    public function index()
    {
        $addons = Addon::orderBy('sort_order')->get();

        $addonGroups = $addons->groupBy(fn ($addon) => $addon->service ?: 'Complete Publishing');

        return view('backend.addons.index', compact('addons', 'addonGroups'));
    }

    public function create()
    {
        return view('backend.addons.create');
    }

    public function store(Request $request)
    {
        $data = $this->validated($request);

        Addon::create($data);

        return redirect()->route('addons.index')
            ->with('success', 'Add-on created successfully.');
    }

    public function edit(Addon $addon)
    {
        return view('backend.addons.edit', compact('addon'));
    }

    public function update(Request $request, Addon $addon)
    {
        $data = $this->validated($request);

        $addon->update($data);

        return redirect()->route('addons.index')
            ->with('success', 'Add-on updated successfully.');
    }

    public function destroy(Addon $addon)
    {
        $addon->delete();

        return redirect()->route('addons.index')
            ->with('success', 'Add-on deleted successfully.');
    }

    private function validated(Request $request)
    {
        $data = $request->validate([
            'key'         => 'required|string|max:100',
            'name'        => 'required|string|max:255',
            'price'       => 'required|numeric|min:0',
            'description' => 'nullable|string|max:500',
            'service'     => 'nullable|string|max:100',
            'is_active'   => 'nullable',
            'sort_order'  => 'nullable|integer',
        ]);

        $data['service']    = $request->input('service', 'Complete Publishing');
        $data['is_active']  = $request->has('is_active');
        $data['sort_order'] = $request->input('sort_order', 0);

        return $data;
    }
}
