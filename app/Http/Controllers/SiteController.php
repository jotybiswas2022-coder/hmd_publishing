<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Contact;

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
}
