<?php

namespace App\Http\Controllers;

use App\Models\Addon;
use App\Models\BookBrief;
use App\Models\Contact;
use App\Models\EditSample;
use App\Models\Genre;
use App\Models\Order;
use App\Models\Plan;
use App\Models\PortfolioItem;
use App\Models\SiteService;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->take(8)->get();
        $recentOrders = Order::orderBy('created_at', 'desc')->take(5)->get();
        $recentBriefs = BookBrief::orderBy('created_at', 'desc')->take(5)->get();
        $recentSamples = EditSample::orderBy('created_at', 'desc')->take(5)->get();

        $stats = [
            'contacts'     => Contact::count(),
            'orders'       => Order::count(),
            'briefs'       => BookBrief::count(),
            'samples'      => EditSample::count(),
            'plans'        => Plan::count(),
            'addons'       => Addon::count(),
            'portfolio'    => PortfolioItem::count(),
            'genres'       => Genre::count(),
            'site_services'=> SiteService::count(),
        ];

        return view('backend.index', compact('contacts', 'recentOrders', 'recentBriefs', 'recentSamples', 'stats'));
    }
}
