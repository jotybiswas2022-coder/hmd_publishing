<?php

namespace App\Http\Controllers;

use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceCategoryController extends Controller
{
    public function index()
    {
        $categories = ServiceCategory::withCount('pages')->orderBy('sort_order')->get();

        return view('backend.service-categories.index', compact('categories'));
    }

    public function create()
    {
        return view('backend.service-categories.create');
    }

    public function store(Request $request)
    {
        $data = $this->validated($request);

        ServiceCategory::create($data);

        return redirect()->route('service-categories.index')
            ->with('success', 'Service category created successfully.');
    }

    public function edit(ServiceCategory $serviceCategory)
    {
        return view('backend.service-categories.edit', compact('serviceCategory'));
    }

    public function update(Request $request, ServiceCategory $serviceCategory)
    {
        $data = $this->validated($request);

        $serviceCategory->update($data);

        return redirect()->route('service-categories.index')
            ->with('success', 'Service category updated successfully.');
    }

    public function destroy(ServiceCategory $serviceCategory)
    {
        $serviceCategory->delete();

        return redirect()->route('service-categories.index')
            ->with('success', 'Service category deleted successfully.');
    }

    private function validated(Request $request)
    {
        $data = $request->validate([
            'name'        => 'required|string|max:255',
            'slug'        => 'nullable|string|max:100',
            'description' => 'nullable|string|max:500',
            'is_active'   => 'nullable',
            'sort_order'  => 'nullable|integer',
        ]);

        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['name']);
        }

        $data['is_active']  = $request->has('is_active');
        $data['sort_order'] = $request->input('sort_order', 0);

        return $data;
    }
}
