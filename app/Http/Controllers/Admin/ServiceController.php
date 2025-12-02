<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'intro' => 'nullable',
            'image' => 'nullable|image'
        ]);

        $service = new Service();
        $service->title = $request->title;
        $service->intro = $request->intro;

        if ($request->hasFile('image')) {
            $service->image = $request->image->store('services', 'public');
        }

        $service->save();

        return redirect()->route('admin.services.index')->with('success', 'Service Added');
    }

    // ------------------------ EDIT ------------------------

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    // ------------------------ UPDATE ------------------------

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'required',
            'intro' => 'required',
            'image' => 'nullable|image',
        ]);

        $service->title = $request->title;
        $service->intro = $request->intro;

        // new image upload
        if ($request->hasFile('image')) {

            // delete old image
            if ($service->image) {
                Storage::delete('public/' . $service->image);
            }

            // upload new
            $service->image = $request->file('image')->store('services', 'public');
        }

        $service->save();

        return redirect()
            ->route('admin.services.index')
            ->with('success', 'Service updated successfully!');
    }

    // ------------------------ DELETE ------------------------

    public function destroy(Service $service)
    {
        if ($service->image) {
            Storage::delete('public/' . $service->image);
        }

        $service->delete();

        return redirect()->route('admin.services.index')
            ->with('success', 'Service deleted successfully');
    }
}