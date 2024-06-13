<?php

namespace App\Http\Controllers\backend;

use App\Models\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partner = Partner::all();
        return view('backend.home.partner.index', compact('partner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.home.partner.create');
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
            $file1->move(public_path('uploads/home/partner/'), $filename1);
            $data['image'] = $filename1;
        }

        Partner::create($data);

        return redirect()->route('partner.index')->with('success', 'Partner created successfully.');
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
        $partner = Partner::findOrFail($id);

        return view('backend.home.partner.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $partner = Partner::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('image')) {
            // Delete old thumbnail if it exists
            if ($partner->image) {
                $oldPicturePath = public_path('uploads/home/partner/' . $partner->image);
                if (file_exists($oldPicturePath)) {
                    unlink($oldPicturePath);
                }
            }
            $file = $request->file('image');
            $filename = time() . 'image.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/home/partner/'), $filename);
            $data['image'] = $filename;

        }

        $partner->update($data);

        return redirect()->route('partner.index')->with('success', 'Partner updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $partner = Partner::findOrFail($id);

        if ($partner->image && file_exists(public_path('uploads/home/partner/' . $partner->image))) {
            unlink(public_path('uploads/home/partner/' . $partner->image));
        }

        $partner->delete();

        return redirect()->route('partner.index')->with('success', 'Partner deleted successfully.');
    }
}
