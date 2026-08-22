<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\PortfolioItem;
use App\Models\Genre;
use App\Models\ServiceCategory;
use App\Models\ServicePage;
use App\Models\PortfolioCategory;

class SiteController extends Controller
{
    public function index()
    {
        $portfolioItems = PortfolioItem::where('is_active', true)
            ->orderBy('created_at', 'desc')
            ->take(12)
            ->get();

        return view('frontend.index', compact('portfolioItems'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function storeContact(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'nullable|string|max:255',
            'last_name'  => 'nullable|string|max:255',
            'name'       => 'nullable|string|max:255',
            'email'      => 'required|email|max:255',
            'phone'      => 'nullable|string|max:255',
            'service'    => 'nullable|string|max:255',
            'message'    => 'required|string',
        ]);

        $name = trim(($data['first_name'] ?? '') . ' ' . ($data['last_name'] ?? ''));

        if (empty($name) && !empty($data['name'])) {
            $name = trim($data['name']);
        }

        if (empty($name)) {
            return back()->withErrors(['name' => 'Your name is required.'])->withInput();
        }

        Contact::create([
            'name'    => $name,
            'email'   => $data['email'],
            'phone'   => $data['phone'] ?? null,
            'service' => $data['service'] ?? null,
            'message' => $data['message'],
        ]);

        return back()->with('success', 'Your message was sent successfully! We will reply within 24 hours.');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function portfolio()
    {
        $portfolioItems = PortfolioItem::with('portfolioCategory')
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $portfolioCategories = PortfolioCategory::where('is_active', true)
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get()
            ->map(fn ($cat) => [
                'id'   => $cat->id,
                'name' => $cat->name,
                'slug' => $cat->slug,
                'count' => $portfolioItems->where('portfolio_category_id', $cat->id)->count(),
            ]);

        $categoryOrientations = $portfolioItems->filter(fn ($item) => $item->portfolioCategory)
            ->mapWithKeys(fn ($item) => [$item->id => $item->portfolioCategory->orientation])
            ->toArray();

        return view('frontend.portfolio', compact('portfolioItems', 'portfolioCategories', 'categoryOrientations'));
    }

    public function portfolioShow(PortfolioItem $item)
    {
        $related = PortfolioItem::where('is_active', true)
            ->where('id', '!=', $item->id)
            ->where('category', $item->category)
            ->orderBy('sort_order')
            ->take(4)
            ->get();

        if ($related->count() < 4) {
            $fill = PortfolioItem::where('is_active', true)
                ->where('id', '!=', $item->id)
                ->orderBy('sort_order')
                ->take(4 - $related->count())
                ->get();

            $related = $related->concat($fill)->unique('id')->take(4);
        }

        return view('frontend.portfolio-show', compact('item', 'related'));
    }

    public function services()
    {
        $categories = ServiceCategory::active()
            ->with(['pages' => function ($q) {
                $q->active()->orderBy('sort_order');
            }])
            ->orderBy('sort_order')
            ->get();

        return view('frontend.services', compact('categories'));
    }

    public function servicePage($slug)
    {
        $servicePage = ServicePage::active()
            ->where('slug', $slug)
            ->with(['plans' => function ($q) {
                $q->active()->orderBy('sort_order');
            }, 'addons' => function ($q) {
                $q->active()->orderBy('sort_order');
            }])
            ->firstOrFail();

        return view('frontend.service-page', compact('servicePage'));
    }

    public function checkout()
    {
        return view('frontend.checkout');
    }

    public function payment()
    {
        return view('frontend.payment');
    }
}
