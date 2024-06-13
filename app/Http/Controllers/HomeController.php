<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $settings = SiteSetting::first();
        return view('backend.siteSetting.index', compact('settings'));
    }


    public function store(Request $request)
    {

        $request->validate([
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'favicon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'keywords' => 'required|string|max:255',
            'author_name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $clients = SiteSetting::first();
        $data = $request->all();


        if ($request->hasFile('logo')) {
            // Delete old picture if it exists
            if ($request->has('logo')) {
                $oldPicturePath = public_path('uploads/settings/icon/' . $request->logo);
                if (file_exists($oldPicturePath)) {
                    unlink($oldPicturePath);
                }
            }

            $file = $request->file('logo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('uploads/settings/icon/');

            // Ensure the directory exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $file->move($destinationPath, $filename);
            $data['logo'] = $filename;
        }

        // dd($request->all());

        if ($request->hasFile('favicon')) {
            // Delete old picture if it exists
            if ($request->logo) {
                $oldPicturePath = public_path('uploads/settings/fav/' . $request->favicon);
                if (file_exists($oldPicturePath)) {
                    unlink($oldPicturePath);
                }
            }

            $file = $request->file('favicon');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('uploads/settings/fav/');

            // Ensure the directory exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $file->move($destinationPath, $filename);
            $data['favicon'] = $filename;
        }

        if ($clients) {
            $clients->update($data);
        } else {
            SiteSetting::create($data);
        }

        // $clients->update($data);

        return redirect()->route('siteSetting.index')->with('success', 'Settings saved successfully.');
    }
}
