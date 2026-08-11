<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->take(8)->get();

        return view('backend.index', compact('contacts'));
    }
}
