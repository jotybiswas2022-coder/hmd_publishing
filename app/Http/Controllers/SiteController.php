<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\BookBrief;
use App\Models\Contact;
use App\Models\EditSample;
use App\Models\FormatSample;
use App\Models\PortfolioItem;
use App\Models\Genre;

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

    public function bookWriting()
    {
        return view('frontend.services.book-writing');
    }

    public function storeBookBrief(Request $request)
    {
        if (!empty($request->input('website'))) {
            return response()->json(['success' => true]);
        }

        $data = $request->validate([
            'book_type'     => 'required|string|max:255',
            'target_length' => 'required|string|max:255',
            'genre'         => 'nullable|string|max:255',
            'material'      => 'nullable|string|max:255',
            'timeline'      => 'nullable|string|max:255',
            'email'         => 'required|email|max:255',
            'idea'          => 'required|string',
        ]);

        BookBrief::create($data);

        return response()->json(['success' => true]);
    }

    public function bookWritingCheckout()
    {
        $packages = [
            'starter' => [
                'name'  => 'Starter Manuscript',
                'price' => 1497,
                'words' => 'Up to 20,000 words',
                'plan'  => 'ghost-starter',
            ],
            'full' => [
                'name'  => 'Full Novel',
                'price' => 2997,
                'words' => 'Up to 45,000 words',
                'plan'  => 'ghost-full',
            ],
            'epic' => [
                'name'  => 'Epic Creation',
                'price' => 4997,
                'words' => 'Up to 80,000 words',
                'plan'  => 'ghost-epic',
            ],
        ];

        $packageKey = request('package', 'full');
        if (!isset($packages[$packageKey])) {
            $packageKey = 'full';
        }

        $package = $packages[$packageKey];

        return view('frontend.services.book-writing-checkout', compact('package', 'packageKey'));
    }

    public function editing()
    {
        return view('frontend.services.editing');
    }

    public function storeEditSample(Request $request)
    {
        if (!empty($request->input('website'))) {
            return response()->json(['success' => true]);
        }

        $data = $request->validate([
            'email'  => 'required|email|max:255',
            'sample' => 'required|string',
        ]);

        EditSample::create($data);

        return response()->json(['success' => true]);
    }

    public function editingCheckout()
    {
        $packages = [
            'fresh' => [
                'name'  => 'Fresh Eyes (Proofread)',
                'type'  => 'Basic Editing Package',
                'price' => 150,
                'plan'  => 'editing-fresh',
            ],
            'deep' => [
                'name'  => 'Deep Clean (Proofread + Edit)',
                'type'  => 'Standard Editing Package',
                'price' => 300,
                'plan'  => 'editing-deep',
            ],
            'makeover' => [
                'name'  => 'Full Makeover (Copy Edit)',
                'type'  => 'Advanced Editing Package',
                'price' => 500,
                'plan'  => 'editing-makeover',
            ],
        ];

        $packageKey = request('package', 'fresh');
        if (!isset($packages[$packageKey])) {
            $packageKey = 'fresh';
        }

        $package = $packages[$packageKey];

        return view('frontend.services.editing-checkout', compact('package', 'packageKey'));
    }

    public function bookCoverDesign()
    {
        return view('frontend.services.book-cover-design');
    }

    public function bookFormatting()
    {
        return view('frontend.services.book-formatting');
    }

    public function storeFormatSample(Request $request)
    {
        if (!empty($request->input('website'))) {
            return response()->json(['success' => true]);
        }

        $data = $request->validate([
            'email' => 'required|email|max:255',
            'style' => 'nullable|string|max:255',
            'file'  => 'nullable|file|max:10240',
        ]);

        $filePath = null;
        $originalName = null;

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $originalName = $file->getClientOriginalName();
            $filePath = $file->store('formatting-samples', 'local');
        }

        FormatSample::create([
            'email'         => $data['email'],
            'style'         => $data['style'] ?? null,
            'file_path'     => $filePath,
            'original_name' => $originalName,
        ]);

        return response()->json(['success' => true]);
    }

    public function publishing()
    {
        return view('frontend.services.publishing');
    }

    public function services()
    {
        $services = \App\Models\SiteService::query()
            ->active()
            ->orderBy('sort_order')
            ->get();

        $serviceGroups = $services->groupBy('category');

        return view('frontend.services', compact('services', 'serviceGroups'));
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
