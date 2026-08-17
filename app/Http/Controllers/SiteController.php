<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\BookBrief;
use App\Models\Contact;
use App\Models\EditSample;
use App\Models\FormatSample;
use App\Models\MockupRequest;
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
        $plans = $this->plansByKeys(['ghost-starter', 'ghost-full', 'ghost-epic']);

        return view('frontend.services.pages.book-writing', compact('plans'));
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
        $packageKeys = [
            'starter' => 'ghost-starter',
            'full'    => 'ghost-full',
            'epic'    => 'ghost-epic',
        ];

        $packageKey = request('package', 'full');
        if (!isset($packageKeys[$packageKey])) {
            $packageKey = 'full';
        }

        $plan = \App\Models\Plan::where('key', $packageKeys[$packageKey])->first();

        $package = [
            'name'  => $plan->name,
            'price' => $plan->price,
            'words' => $plan->features[0] ?? '',
            'plan'  => $plan->key,
        ];

        return view('frontend.services.checkout.book-writing-checkout', compact('package', 'packageKey'));
    }

    public function editing()
    {
        $plans = $this->plansByKeys(['editing-fresh', 'editing-deep', 'editing-makeover']);

        return view('frontend.services.pages.editing', compact('plans'));
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
        $packageKeys = [
            'fresh'    => 'editing-fresh',
            'deep'     => 'editing-deep',
            'makeover' => 'editing-makeover',
        ];

        $types = [
            'editing-fresh'    => 'Basic Editing Package',
            'editing-deep'     => 'Standard Editing Package',
            'editing-makeover' => 'Advanced Editing Package',
        ];

        $packageKey = request('package', 'fresh');
        if (!isset($packageKeys[$packageKey])) {
            $packageKey = 'fresh';
        }

        $plan = \App\Models\Plan::where('key', $packageKeys[$packageKey])->first();

        $package = [
            'name'  => $plan->name,
            'type'  => $types[$plan->key] ?? '',
            'price' => $plan->price,
            'plan'  => $plan->key,
        ];

        return view('frontend.services.checkout.editing-checkout', compact('package', 'packageKey'));
    }

    public function bookCoverDesign()
    {
        $plans = $this->plansByKeys(['ghost-cover-ebook', 'ghost-cover-print', 'ghost-cover-launch']);

        return view('frontend.services.pages.book-cover-design', compact('plans'));
    }

    public function audiobookProduction()
    {
        return view('frontend.services.pages.audiobook-production');
    }

    public function bookLaunchStrategy()
    {
        return view('frontend.services.pages.book-launch-strategy');
    }

    public function bookLaunchStrategyCheckout()
    {
        $packageKeys = [
            'blueprint'  => 'launch-blueprint',
            'manager'    => 'launch-manager',
            'bestseller' => 'launch-bestseller',
        ];

        $packageKey = request('package', 'manager');
        if (!isset($packageKeys[$packageKey])) {
            $packageKey = 'manager';
        }

        $plan = \App\Models\Plan::where('key', $packageKeys[$packageKey])->first();

        $package = [
            'name'  => $plan->name,
            'price' => $plan->price,
            'plan'  => $plan->key,
        ];

        return view('frontend.services.checkout.book-launch-strategy-checkout', compact('package', 'packageKey'));
    }

    public function consultation()
    {
        return view('frontend.services.pages.consultation');
    }

    public function storeConsultation(Request $request)
    {
        if (!empty($request->input('website'))) {
            return response()->json(['success' => true]);
        }

        $data = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'nullable|string|max:255',
            'service' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create([
            'name'    => $data['name'],
            'email'   => $data['email'],
            'phone'   => $data['phone'] ?? null,
            'service' => $data['service'] ?? null,
            'message' => $data['message'],
        ]);

        return response()->json(['success' => true]);
    }

    public function bookCoverDesignCheckout()
    {
        $packageKeys = [
            'ebook'  => 'ghost-cover-ebook',
            'print'  => 'ghost-cover-print',
            'launch' => 'ghost-cover-launch',
        ];

        $packageKey = request('package', 'print');
        if (!isset($packageKeys[$packageKey])) {
            $packageKey = 'print';
        }

        $plan = \App\Models\Plan::where('key', $packageKeys[$packageKey])->first();

        $package = [
            'name'  => $plan->name,
            'price' => $plan->price,
            'plan'  => $plan->key,
        ];

        return view('frontend.services.checkout.book-cover-design-checkout', compact('package', 'packageKey'));
    }

    public function bookFormatting()
    {
        $plans = $this->plansByKeys(['ghost-format-clean', 'ghost-format-enhanced', 'ghost-format-complex']);

        return view('frontend.services.pages.book-formatting', compact('plans'));
    }

    public function childrensBookFormatting()
    {
        $plans = $this->plansByKeys(['ghost-kids-starter', 'ghost-kids-pro', 'ghost-kids-creative']);

        return view('frontend.services.pages.childrens-book-formatting', compact('plans'));
    }

    public function childrensBookFormattingCheckout()
    {
        $packageKeys = [
            'starter'   => 'ghost-kids-starter',
            'pro'       => 'ghost-kids-pro',
            'creative'  => 'ghost-kids-creative',
        ];

        $packageKey = request('package', 'pro');
        if (!isset($packageKeys[$packageKey])) {
            $packageKey = 'pro';
        }

        $plan = \App\Models\Plan::where('key', $packageKeys[$packageKey])->first();

        $package = [
            'name'  => $plan->name,
            'price' => $plan->price,
            'plan'  => $plan->key,
        ];

        return view('frontend.services.checkout.childrens-book-formatting-checkout', compact('package', 'packageKey'));
    }

    public function storeChildrensQuote(Request $request)
    {
        if (!empty($request->input('website'))) {
            return response()->json(['success' => true]);
        }

        $data = $request->validate([
            'name'              => 'nullable|string|max:255',
            'email'             => 'nullable|email|max:255',
            'word_count'        => 'nullable|string|max:255',
            'output_format'     => 'nullable|string|max:255',
            'trim_size'         => 'nullable|string|max:255',
            'manuscript_status' => 'nullable|string|max:255',
            'complexity'        => 'nullable|string|max:255',
            'budget'            => 'nullable|string|max:255',
            'preferred_start'   => 'nullable|string|max:255',
        ]);

        \App\Models\ChildrensQuote::create($data);

        return response()->json(['success' => true]);
    }

    public function bookFormattingCheckout()
    {
        $packageKeys = [
            'clean'    => 'ghost-format-clean',
            'enhanced' => 'ghost-format-enhanced',
            'complex'  => 'ghost-format-complex',
        ];

        $packageKey = request('package', 'enhanced');
        if (!isset($packageKeys[$packageKey])) {
            $packageKey = 'enhanced';
        }

        $plan = \App\Models\Plan::where('key', $packageKeys[$packageKey])->first();

        $package = [
            'name'  => $plan->name,
            'price' => $plan->price,
            'plan'  => $plan->key,
        ];

        return view('frontend.services.checkout.book-formatting-checkout', compact('package', 'packageKey'));
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
        $plans = $this->plansByKeys(['ghost-publishing-launcher', 'ghost-publishing-wide', 'ghost-publishing-global']);

        return view('frontend.services.pages.publishing', compact('plans'));
    }

    public function publishingCheckout()
    {
        $packageKeys = [
            'launcher' => 'ghost-publishing-launcher',
            'wide'     => 'ghost-publishing-wide',
            'global'   => 'ghost-publishing-global',
        ];

        $packageKey = request('package', 'wide');
        if (!isset($packageKeys[$packageKey])) {
            $packageKey = 'wide';
        }

        $plan = \App\Models\Plan::where('key', $packageKeys[$packageKey])->first();

        $package = [
            'name'  => $plan->name,
            'price' => $plan->price,
            'plan'  => $plan->key,
        ];

        return view('frontend.services.checkout.publishing-checkout', compact('package', 'packageKey'));
    }

    public function bookTranslation()
    {
        $plans = $this->plansByKeys(['ghost-translation-essential', 'ghost-translation-ready', 'ghost-translation-pro']);

        return view('frontend.services.pages.book-translation', compact('plans'));
    }

    public function bookTranslationCheckout()
    {
        $packageKeys = [
            'essential' => 'ghost-translation-essential',
            'ready'     => 'ghost-translation-ready',
            'pro'       => 'ghost-translation-pro',
        ];

        $packageKey = request('package', 'ready');
        if (!isset($packageKeys[$packageKey])) {
            $packageKey = 'ready';
        }

        $plan = \App\Models\Plan::where('key', $packageKeys[$packageKey])->first();

        $package = [
            'name'  => $plan->name,
            'price' => $plan->price,
            'plan'  => $plan->key,
        ];

        return view('frontend.services.checkout.book-translation-checkout', compact('package', 'packageKey'));
    }

    public function bookIllustrations()
    {
        $plans = $this->plansByKeys(['ill-character', 'ill-classic', 'ill-full']);

        return view('frontend.services.pages.book-illustrations', compact('plans'));
    }

    public function bookIllustrationsCheckout()
    {
        $packageKeys = [
            'character' => 'ill-character',
            'classic'   => 'ill-classic',
            'full'      => 'ill-full',
        ];

        $packageKey = request('package', 'classic');
        if (!isset($packageKeys[$packageKey])) {
            $packageKey = 'classic';
        }

        $plan = \App\Models\Plan::where('key', $packageKeys[$packageKey])->first();

        $package = [
            'name'  => $plan->name,
            'price' => $plan->price,
            'plan'  => $plan->key,
        ];

        return view('frontend.services.checkout.book-illustrations-checkout', compact('package', 'packageKey'));
    }

    public function completePublishingPackage()
    {
        $plans = $this->plansByKeys(['essentials', 'bestseller', 'empire']);

        return view('frontend.services.pages.complete-publishing-package', compact('plans'));
    }

    public function completePublishingPackageCheckout()
    {
        $packageKeys = [
            'essentials' => 'essentials',
            'bestseller' => 'bestseller',
            'empire'     => 'empire',
        ];

        $packageKey = request('package', 'bestseller');
        if (!isset($packageKeys[$packageKey])) {
            $packageKey = 'bestseller';
        }

        $plan = \App\Models\Plan::where('key', $packageKeys[$packageKey])->first();

        $package = [
            'name'  => $plan->name,
            'price' => $plan->price,
            'plan'  => $plan->key,
        ];

        return view('frontend.services.checkout.complete-publishing-package-checkout', compact('package', 'packageKey'));
    }

    public function storePackageFit(Request $request)
    {
        if (!empty($request->input('website'))) {
            return response()->json(['success' => true]);
        }

        $data = $request->validate([
            'word_count'          => 'nullable|string|max:255',
            'manuscript_readiness' => 'nullable|string|max:255',
        ]);

        \App\Models\PackageFitRequest::create($data);

        return response()->json(['success' => true]);
    }

    public function storeMockupRequest(Request $request)
    {
        if (!empty($request->input('website'))) {
            return response()->json(['success' => true]);
        }

        $data = $request->validate([
            'genre'        => 'nullable|string|max:255',
            'book_details' => 'nullable|string',
            'email'        => 'required|email|max:255',
        ]);

        MockupRequest::create($data);

        return response()->json(['success' => true]);
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

    private function plansByKeys(array $keys)
    {
        return \App\Models\Plan::whereIn('key', $keys)
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();
    }
}
