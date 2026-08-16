<?php

namespace App\Http\Controllers;

use App\Models\PackageFitRequest;
use Illuminate\Http\Request;

class PackageFitRequestController extends Controller
{
    public function index()
    {
        $requests = PackageFitRequest::orderBy('created_at', 'desc')->get();

        return view('backend.packagefitrequests.index', compact('requests'));
    }

    public function destroy(PackageFitRequest $packageFitRequest)
    {
        $packageFitRequest->delete();

        return back()->with('success', 'Package fit request deleted successfully.');
    }
}