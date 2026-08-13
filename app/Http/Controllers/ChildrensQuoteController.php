<?php

namespace App\Http\Controllers;

use App\Models\ChildrensQuote;
use Illuminate\Http\Request;

class ChildrensQuoteController extends Controller
{
    public function index()
    {
        $quotes = ChildrensQuote::orderBy('created_at', 'desc')->get();

        return view('backend.childrensquotes.index', compact('quotes'));
    }

    public function destroy(ChildrensQuote $quote)
    {
        $quote->delete();

        return back()->with('success', 'Children\'s quote deleted successfully.');
    }
}