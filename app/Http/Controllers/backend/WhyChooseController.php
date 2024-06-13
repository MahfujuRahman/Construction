<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\WhyChoose;
use Illuminate\Http\Request;

class WhyChooseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $choose = WhyChoose::all();
        return view('backend.home.choose.index', compact('choose'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.home.choose.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
        ]);

        $data = $request->all();

        WhyChoose::create($data);

        return redirect()->route('choose.index')->with('success', 'Why Choose created successfully.');
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
        $choose = WhyChoose::findOrFail($id);

        return view('backend.home.choose.edit', compact('choose'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $choose = WhyChoose::findOrFail($id);
        $data = $request->all();

        $choose->update($data);

        return redirect()->route('choose.index')->with('success', 'Why Choose updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $choose = WhyChoose::findOrFail($id);

        $choose->delete();

        return redirect()->route('choose.index')->with('success', 'Why Choose deleted successfully.');
    }
}
