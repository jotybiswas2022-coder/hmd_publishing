<?php

namespace App\Http\Controllers;

use App\Models\BookBrief;
use Illuminate\Http\Request;

class BookBriefController extends Controller
{
    public function index()
    {
        $briefs = BookBrief::orderBy('created_at', 'desc')->get();

        return view('backend.bookbriefs.index', compact('briefs'));
    }

    public function destroy(BookBrief $brief)
    {
        $brief->delete();

        return back()->with('success', 'Book brief deleted successfully.');
    }
}