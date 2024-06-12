<?php

namespace App\Http\Controllers\backend;

use App\Models\Header;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $header = Header::all();
        return view('backend.home.header.index', compact('header'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.home.header.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title1' => 'required',
            'short_title1' => 'required',
            'title2' => 'required',
            'short_title2' => 'required',
            'thumbnail' => 'required',
            'thumbnail2' => 'required',
        ]);

        $data = $request->all();

        if ($request->hasFile('thumbnail')) {
            $file1 = $request->file('thumbnail');
            $filename1 = time() . '_thumbnail1.' . $file1->getClientOriginalExtension();
            $file1->move(public_path('uploads/home/header/'), $filename1);
            $data['thumbnail'] = $filename1;
        }

        if ($request->hasFile('thumbnail2')) {
            $file2 = $request->file('thumbnail2');
            $filename2 = time() . '_thumbnail2.' . $file2->getClientOriginalExtension();
            $file2->move(public_path('uploads/home/header/'), $filename2);
            $data['thumbnail2'] = $filename2;
        }

        Header::create($data);

        return redirect()->route('header.index')->with('success', 'Header created successfully.');
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
        $header = Header::findOrFail($id);

        return view('backend.home.header.edit', compact('header'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $header = Header::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('thumbnail')) {
            // Delete old thumbnail if it exists
            if ($header->thumbnail) {
                $oldPicturePath = public_path('uploads/home/header/' . $header->thumbnail);
                if (file_exists($oldPicturePath)) {
                    unlink($oldPicturePath);
                }
            }
            $file = $request->file('thumbnail');
            $filename = time() . '_thumbnail.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/home/header/'), $filename);
            $data['thumbnail'] = $filename;

        }

        if ($request->hasFile('thumbnail2')) {
            // Delete old thumbnail if it exists
            if ($header->thumbnail2) {
                $oldPicturePath = public_path('uploads/home/header/' . $header->thumbnail2);
                if (file_exists($oldPicturePath)) {
                    unlink($oldPicturePath);
                }
            }
            $file2 = $request->file('thumbnail2');
            $filename2 = time() . '_thumbnail2.' . $file2->getClientOriginalExtension();
            $file2->move(public_path('uploads/home/header/'), $filename2);
            $data['thumbnail2'] = $filename2;

        }

        $header->update($data);

        return redirect()->route('header.index')->with('success', 'Header updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $header = Header::findOrFail($id);

        if ($header->thumbnail && file_exists(public_path('uploads/home/header/' . $header->thumbnail))) {
            unlink(public_path('uploads/home/header/' . $header->thumbnail));
        }

        if ($header->thumbnail2 && file_exists(public_path('uploads/home/header/' . $header->thumbnail2))) {
            unlink(public_path('uploads/home/header/' . $header->thumbnail2));
        }

        $header->delete();

        return redirect()->route('header.index')->with('success', 'Header deleted successfully.');
    }
}
