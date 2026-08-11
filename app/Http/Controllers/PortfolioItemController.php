<?php

namespace App\Http\Controllers;

use App\Models\PortfolioItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class PortfolioItemController extends Controller
{
    public function index()
    {
        $items = PortfolioItem::orderBy('sort_order')->get();

        return view('backend.portfolio.index', compact('items'));
    }

    public function create()
    {
        return view('backend.portfolio.create');
    }

    public function store(Request $request)
    {
        $data = $this->validated($request);

        $item = PortfolioItem::create($data);

        $this->handleImage($request, $item);

        return redirect()->route('portfolio.items.index')
            ->with('success', 'Portfolio item created successfully.');
    }

    public function edit(PortfolioItem $item)
    {
        return view('backend.portfolio.edit', compact('item'));
    }

    public function update(Request $request, PortfolioItem $item)
    {
        $data = $this->validated($request, $item);

        $item->update($data);

        $this->handleImage($request, $item);

        return redirect()->route('portfolio.items.index')
            ->with('success', 'Portfolio item updated successfully.');
    }

    public function destroy(PortfolioItem $item)
    {
        $item->delete();

        return redirect()->route('portfolio.items.index')
            ->with('success', 'Portfolio item deleted successfully.');
    }

    public function cover(PortfolioItem $item)
    {
        return Cache::remember('portfolio-cover-' . $item->id, 3600, function () use ($item) {
            return response($this->coverSvg($item), 200, [
                'Content-Type'     => 'image/svg+xml',
                'Cache-Control'    => 'public, max-age=3600',
                'X-Content-Type-Options' => 'nosniff',
            ]);
        });
    }

    private function validated(Request $request, ?PortfolioItem $item = null)
    {
        $data = $request->validate([
            'title'        => 'required|string|max:255',
            'author'       => 'nullable|string|max:255',
            'category'     => 'required|string|max:50',
            'new_category' => 'nullable|string|max:50',
            'type_label'   => 'nullable|string|max:255',
            'image'        => 'nullable|string|max:500',
            'is_featured'  => 'nullable',
            'is_active'    => 'nullable',
            'sort_order'   => 'nullable|integer',
        ]);

        if ($request->input('category') === '__add__') {
            $data['category'] = Str::slug($request->input('new_category'));
        } else {
            $data['category'] = Str::slug($request->input('category'));
        }

        if ($request->has('remove_image')) {
            $data['image'] = null;
        } elseif (($data['image'] ?? '') === '' && $item && $item->image) {
            $data['image'] = $item->image;
        } elseif (($data['image'] ?? '') === '') {
            $data['image'] = null;
        }

        $data['is_featured'] = $request->has('is_featured');
        $data['is_active']   = $request->has('is_active');
        $data['sort_order']  = $request->input('sort_order', 0);

        unset($data['new_category']);

        return $data;
    }

    private function handleImage(Request $request, PortfolioItem $item)
    {
        if (!$request->hasFile('image_file')) {
            return;
        }

        $request->validate([
            'image_file' => 'image|mimes:jpeg,png,webp,gif,svg|max:5120',
        ]);

        $file = $request->file('image_file');
        $name = 'item-' . $item->id . '-' . Str::random(6) . '.' . $file->getClientOriginalExtension();
        $file->storeAs('portfolio/uploads', $name, 'assets');

        $item->update(['image' => 'portfolio/uploads/' . $name]);
    }

    private function coverSvg(PortfolioItem $item)
    {
        $palette = [
            'romance'   => ['#800f2f', '#c9184a', '#ff8fa3'],
            'children'  => ['#ffb703', '#fb8500', '#fdf0d5'],
            'self-help' => ['#0f3d3e', '#1d6f6a', '#7fb69b'],
            'business'  => ['#0b1d3a', '#1f4e79', '#c9a227'],
            'health'    => ['#1b4332', '#2d6a4f', '#95d5b2'],
            'religious' => ['#3d2314', '#7f4f24', '#d4a373'],
            'non-fiction' => ['#263238', '#455a64', '#90a4ae'],
            'cookbook'  => ['#9d0208', '#dc2f02', '#faa307'],
        ];

        $colors = $palette[$item->category] ?? ['#240046', '#5a189a', '#c77dff'];
        $type   = $item->type_label ?: ucfirst(str_replace('-', ' ', $item->category));
        $author = $item->author ?: 'HMD Publishing';

        $lines = $this->wrapTitle($item->title);

        $svg = '<svg xmlns="http://www.w3.org/2000/svg" width="600" height="660" viewBox="0 0 600 660">
  <defs>
    <linearGradient id="bg" x1="0" y1="0" x2="1" y2="1">
      <stop offset="0%" stop-color="' . $colors[0] . '"/>
      <stop offset="100%" stop-color="' . $colors[1] . '"/>
    </linearGradient>
    <linearGradient id="shine" x1="0" y1="0" x2="1" y2="0">
      <stop offset="0%" stop-color="#ffffff" stop-opacity="0.10"/>
      <stop offset="60%" stop-color="#ffffff" stop-opacity="0.02"/>
      <stop offset="100%" stop-color="#000000" stop-opacity="0.18"/>
    </linearGradient>
  </defs>
  <rect width="600" height="660" fill="url(#bg)"/>
  <rect x="30" y="30" width="540" height="600" fill="none" stroke="' . $colors[2] . '" stroke-width="3" opacity="0.55"/>
  <rect x="40" y="40" width="520" height="580" fill="none" stroke="#ffffff" stroke-width="1" opacity="0.25"/>
  <rect x="12" y="0" width="22" height="660" fill="#000000" opacity="0.18"/>
  <circle cx="300" cy="160" r="55" fill="#ffffff" opacity="0.10"/>
  <circle cx="300" cy="160" r="78" fill="none" stroke="#ffffff" stroke-width="1.5" opacity="0.18"/>
  ' . $lines . '
  <line x1="140" y1="470" x2="460" y2="470" stroke="' . $colors[2] . '" stroke-width="2" opacity="0.7"/>
  <text x="300" y="510" font-family="Georgia, serif" font-size="20" font-style="italic" fill="#ffffff" text-anchor="middle" opacity="0.95">' . e($type) . '</text>
  <text x="300" y="585" font-family="Arial, sans-serif" font-size="17" letter-spacing="2" fill="#ffffff" text-anchor="middle" opacity="0.9">' . e(strtoupper($author)) . '</text>
  <rect x="0" y="0" width="600" height="660" fill="url(#shine)"/>
</svg>
';

        return $svg;
    }

    private function wrapTitle($title)
    {
        $words   = preg_split('/\s+/', trim($title));
        $lines   = [];
        $current = '';

        foreach ($words as $word) {
            if (strlen($current . ' ' . $word) > 14 && $current !== '') {
                $lines[] = $current;
                $current = $word;
            } else {
                $current = trim($current . ' ' . $word);
            }
        }
        if ($current !== '') {
            $lines[] = $current;
        }

        $count = count($lines);
        $start = 320 - (($count - 1) * 29);
        $out   = '';

        foreach ($lines as $i => $line) {
            $size = strlen($line) > 14 ? 34 : (strlen($line) > 10 ? 40 : 48);
            $out .= '<text x="300" y="' . ($start + $i * 58) . '" font-family="Georgia, serif" font-size="' . $size . '" font-weight="700" fill="#ffffff" text-anchor="middle" letter-spacing="1">' . e($line) . '</text>' . "\n  ";
        }

        return $out;
    }
}
