<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feature = Feature::all();
        return view('backend.home.feature.index', compact('feature'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.home.feature.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'image' => 'required',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $file1 = $request->file('image');
            $filename1 = time() . 'image.' . $file1->getClientOriginalExtension();
            $file1->move(public_path('uploads/home/feature/'), $filename1);
            $data['image'] = $filename1;
        }

        Feature::create($data);

        return redirect()->route('feature.index')->with('success', 'Feature created successfully.');
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
        $feature = Feature::findOrFail($id);

        return view('backend.home.feature.edit', compact('feature'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $feature = Feature::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('image')) {
            // Delete old thumbnail if it exists
            if ($feature->image) {
                $oldPicturePath = public_path('uploads/home/feature/' . $feature->image);
                if (file_exists($oldPicturePath)) {
                    unlink($oldPicturePath);
                }
            }
            $file = $request->file('image');
            $filename = time() . 'image.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/home/feature/'), $filename);
            $data['image'] = $filename;

        }

        $feature->update($data);

        return redirect()->route('feature.index')->with('success', 'Feature updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $feature = Feature::findOrFail($id);

        if ($feature->image && file_exists(public_path('uploads/home/feature/' . $feature->image))) {
            unlink(public_path('uploads/home/feature/' . $feature->image));
        }

        $feature->delete();

        return redirect()->route('feature.index')->with('success', 'Feature deleted successfully.');
    }
}
