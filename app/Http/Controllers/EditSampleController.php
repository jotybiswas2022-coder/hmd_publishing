<?php

namespace App\Http\Controllers;

use App\Models\EditSample;
use Illuminate\Http\Request;

class EditSampleController extends Controller
{
    public function index()
    {
        $samples = EditSample::orderBy('created_at', 'desc')->get();

        return view('backend.editsamples.index', compact('samples'));
    }

    public function destroy(EditSample $sample)
    {
        $sample->delete();

        return back()->with('success', 'Sample request deleted successfully.');
    }
}