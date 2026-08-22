<?php

namespace App\Http\Controllers;

use App\Models\PortfolioCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PortfolioCategoryController extends Controller
{
    public function index()
    {
        $categories = PortfolioCategory::orderBy('sort_order')->orderBy('name')->get();

        return view('backend.portfolio-categories.index', compact('categories'));
    }

    public function create()
    {
        return view('backend.portfolio-categories.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'        => 'required|string|max:100',
            'description' => 'nullable|string|max:500',
            'orientation' => 'required|in:vertical,horizontal',
        ]);

        $slug = Str::slug($data['name']);

        if (PortfolioCategory::where('slug', $slug)->exists()) {
            return back()->withErrors(['name' => 'A category with this name already exists.'])->withInput();
        }

        PortfolioCategory::create([
            'name'        => $data['name'],
            'slug'        => $slug,
            'description' => $data['description'] ?? null,
            'orientation' => $data['orientation'],
        ]);

        return redirect()->route('portfolio-categories.index')
            ->with('success', 'Portfolio category created successfully.');
    }

    public function edit(PortfolioCategory $portfolioCategory)
    {
        return view('backend.portfolio-categories.edit', compact('portfolioCategory'));
    }

    public function update(Request $request, PortfolioCategory $portfolioCategory)
    {
        $data = $request->validate([
            'name'        => 'required|string|max:100',
            'description' => 'nullable|string|max:500',
            'orientation' => 'required|in:vertical,horizontal',
        ]);

        $slug = Str::slug($data['name']);

        if (PortfolioCategory::where('slug', $slug)->where('id', '!=', $portfolioCategory->id)->exists()) {
            return back()->withErrors(['name' => 'A category with this name already exists.'])->withInput();
        }

        $portfolioCategory->update([
            'name'        => $data['name'],
            'slug'        => $slug,
            'description' => $data['description'] ?? null,
            'orientation' => $data['orientation'],
        ]);

        return redirect()->route('portfolio-categories.index')
            ->with('success', 'Portfolio category updated successfully.');
    }

    public function destroy(PortfolioCategory $portfolioCategory)
    {
        $portfolioCategory->delete();

        return back()->with('success', 'Portfolio category deleted successfully.');
    }
}
