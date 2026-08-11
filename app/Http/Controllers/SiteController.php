<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Contact;
use App\Models\PortfolioItem;
use App\Models\Genre;

class SiteController extends Controller
{
    public function index(){

        return view('frontend.index');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function storeContact(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'nullable|string|max:255',
            'service' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($data);

        return redirect()->route('contact.page')->with('success', 'Your message was sent successfully! We will reply within 24 hours.');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function tools()
    {
        return view('frontend.tools');
    }

    public function portfolio()
    {
        $portfolioItems = PortfolioItem::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $known = Genre::orderBy('sort_order')->orderBy('name')->get()
            ->mapWithKeys(fn ($genre) => [$genre->slug => $genre->name]);

        $extra = $portfolioItems->pluck('category')->unique()
            ->reject(fn ($cat) => $known->has($cat))
            ->values();

        $filterCategories = collect($known)->map(fn ($label, $slug) => [
            'value' => $slug,
            'label' => $label,
        ])->concat($extra->map(fn ($cat) => [
            'value' => $cat,
            'label' => ucwords(str_replace('-', ' ', $cat)),
        ]));

        return view('frontend.portfolio', compact('portfolioItems', 'filterCategories'));
    }

    public function editing()
    {
        return view('frontend.services.editing');
    }

    public function bookCoverDesign()
    {
        return view('frontend.services.book-cover-design');
    }

    public function publishing()
    {
        return view('frontend.services.publishing');
    }

    public function services()
    {
        return view('frontend.services');
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
