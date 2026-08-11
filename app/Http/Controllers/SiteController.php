<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class SiteController extends Controller
{
    public function index(){

        return view('frontend.index');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function about()
    {
        return view('frontend.about');
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
