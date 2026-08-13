<?php

namespace App\Http\Controllers;

use App\Models\MockupRequest;
use Illuminate\Http\Request;

class MockupRequestController extends Controller
{
    public function index()
    {
        $requests = MockupRequest::orderBy('created_at', 'desc')->get();

        return view('backend.mockuprequests.index', compact('requests'));
    }

    public function destroy(MockupRequest $mockupRequest)
    {
        $mockupRequest->delete();

        return back()->with('success', 'Mockup request deleted successfully.');
    }
}
