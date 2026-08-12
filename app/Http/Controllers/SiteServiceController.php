<?php

namespace App\Http\Controllers;

use App\Models\SiteService;
use Illuminate\Http\Request;

class SiteServiceController extends Controller
{
    public function index()
    {
        $services = SiteService::orderBy('sort_order')->get();

        $serviceGroups = $services->groupBy('category');

        return view('backend.site-services.index', compact('services', 'serviceGroups'));
    }

    public function create()
    {
        return view('backend.site-services.create');
    }

    public function store(Request $request)
    {
        $data = $this->validated($request);

        SiteService::create($data);

        return redirect()->route('site-services.index')
            ->with('success', 'Service created successfully.');
    }

    public function edit(SiteService $siteService)
    {
        return view('backend.site-services.edit', compact('siteService'));
    }

    public function update(Request $request, SiteService $siteService)
    {
        $data = $this->validated($request);

        $siteService->update($data);

        return redirect()->route('site-services.index')
            ->with('success', 'Service updated successfully.');
    }

    public function destroy(SiteService $siteService)
    {
        $siteService->delete();

        return redirect()->route('site-services.index')
            ->with('success', 'Service deleted successfully.');
    }

    private function validated(Request $request)
    {
        $data = $request->validate([
            'name'          => 'required|string|max:255',
            'category'      => 'required|in:production,publishing,marketing',
            'url'           => 'nullable|string|max:500',
            'price'         => 'nullable|string|max:255',
            'delivery_time' => 'nullable|string|max:255',
            'badge'         => 'nullable|string|max:100',
            'has_arrow'     => 'nullable',
            'is_dark'       => 'nullable',
            'is_active'     => 'nullable',
            'sort_order'    => 'nullable|integer',
        ]);

        $data['has_arrow']  = $request->has('has_arrow');
        $data['is_dark']    = $request->has('is_dark');
        $data['is_active']  = $request->has('is_active');
        $data['sort_order'] = $request->input('sort_order', 0);

        return $data;
    }
}