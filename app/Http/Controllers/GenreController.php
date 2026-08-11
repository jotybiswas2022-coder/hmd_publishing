<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\PortfolioItem;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::orderBy('sort_order')->orderBy('name')->get();

        return view('backend.genres.index', compact('genres'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:60',
        ]);

        $slug = Str::slug($data['name']);

        if (Genre::where('slug', $slug)->exists()) {
            return back()->withErrors(['name' => 'A genre with this name already exists.'])->withInput();
        }

        Genre::create([
            'name' => $data['name'],
            'slug' => $slug,
        ]);

        return back()->with('success', 'Genre added successfully.');
    }

    public function update(Request $request, Genre $genre)
    {
        $data = $request->validate([
            'name' => 'required|string|max:60',
        ]);

        $slug = Str::slug($data['name']);

        if (Genre::where('slug', $slug)->where('id', '!=', $genre->id)->exists()) {
            return back()->withErrors(['name' => 'A genre with this name already exists.'])->withInput();
        }

        $oldSlug = $genre->slug;

        $genre->update([
            'name' => $data['name'],
            'slug' => $slug,
        ]);

        if ($oldSlug !== $slug) {
            PortfolioItem::where('category', $oldSlug)->update(['category' => $slug]);
        }

        return back()->with('success', 'Genre updated successfully.');
    }

    public function destroy(Genre $genre)
    {
        PortfolioItem::where('category', $genre->slug)->update(['category' => 'uncategorized']);
        $genre->delete();

        return back()->with('success', 'Genre deleted successfully.');
    }
}
