<?php

namespace App\Http\Controllers\backend;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::all();
        return view('backend.home.about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.home.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $file1 = $request->file('image');
            $filename1 = time() . 'image.' . $file1->getClientOriginalExtension();
            $file1->move(public_path('uploads/home/about/'), $filename1);
            $data['image'] = $filename1;
        }

        About::create($data);

        return redirect()->route('about.index')->with('success', 'About created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $about = About::findOrFail($id);

        return view('backend.home.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $about = About::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('image')) {
            // Delete old thumbnail if it exists
            if ($about->image) {
                $oldPicturePath = public_path('uploads/home/about/' . $about->image);
                if (file_exists($oldPicturePath)) {
                    unlink($oldPicturePath);
                }
            }
            $file = $request->file('image');
            $filename = time() . 'image.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/home/about/'), $filename);
            $data['image'] = $filename;

        }

        $about->update($data);

        return redirect()->route('about.index')->with('success', 'About updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $about = About::findOrFail($id);

        if ($about->image && file_exists(public_path('uploads/home/about/' . $about->image))) {
            unlink(public_path('uploads/home/about/' . $about->image));
        }

        $about->delete();

        return redirect()->route('about.index')->with('success', 'About deleted successfully.');
    }
}
