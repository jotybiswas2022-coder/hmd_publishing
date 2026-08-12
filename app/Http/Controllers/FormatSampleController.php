<?php

namespace App\Http\Controllers;

use App\Models\FormatSample;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormatSampleController extends Controller
{
    public function index()
    {
        $samples = FormatSample::orderBy('created_at', 'desc')->get();

        return view('backend.formatsamples.index', compact('samples'));
    }

    public function downloadFile(FormatSample $sample)
    {
        if (!$sample->file_path || !Storage::disk('local')->exists($sample->file_path)) {
            return back()->with('error', 'File not found.');
        }

        return Storage::disk('local')->download($sample->file_path, $sample->original_name ?: 'chapter.docx');
    }

    public function destroy(FormatSample $sample)
    {
        if ($sample->file_path && Storage::disk('local')->exists($sample->file_path)) {
            Storage::disk('local')->delete($sample->file_path);
        }

        $sample->delete();

        return back()->with('success', 'Formatting sample request deleted successfully.');
    }
}