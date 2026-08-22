<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Genre;
use App\Models\Order;
use App\Models\PortfolioCategory;
use App\Models\PortfolioItem;
use App\Models\ServiceCategory;
use App\Models\ServicePage;

class AdminController extends Controller
{
    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->take(8)->get();
        $recentOrders = Order::orderBy('created_at', 'desc')->take(5)->get();

        $stats = [
            'contacts'           => Contact::count(),
            'orders'             => Order::count(),
            'portfolio'          => PortfolioItem::count(),
            'portfolio_categories' => PortfolioCategory::count(),
            'genres'             => Genre::count(),
            'service_categories' => ServiceCategory::count(),
            'service_pages'      => ServicePage::count(),
        ];

        return view('backend.index', compact('contacts', 'recentOrders', 'stats'));
    }
}
