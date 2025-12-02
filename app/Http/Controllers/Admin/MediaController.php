<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    public function index()
    {
        // Get all files inside storage/app/public/services + any other folders
        $files = Storage::disk('public')->allFiles();

        return view('admin.media.index', compact('files'));
    }

    public function delete()
    {
        $file = request('file');

        if ($file && Storage::disk('public')->exists($file)) {
            Storage::disk('public')->delete($file);
            return back()->with('success', 'File deleted successfully!');
        }

        return back()->with('error', 'File not found!');
    }
}