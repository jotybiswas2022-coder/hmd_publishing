<?php

namespace App\Http\Controllers;

use App\Models\Addon;
use App\Models\Contact;
use App\Models\Genre;
use App\Models\Order;
use App\Models\Plan;
use App\Models\PortfolioItem;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->take(8)->get();

        $stats = [
            'contacts'     => Contact::count(),
            'orders'       => Order::count(),
            'plans'        => Plan::count(),
            'addons'       => Addon::count(),
            'portfolio'    => PortfolioItem::count(),
            'genres'       => Genre::count(),
        ];

        return view('backend.index', compact('contacts', 'stats'));
    }
}
