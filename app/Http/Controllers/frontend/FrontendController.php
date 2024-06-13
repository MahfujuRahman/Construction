<?php

namespace App\Http\Controllers\frontend;

use App\Models\About;
use App\Models\Header;
use App\Models\Feature;
use App\Models\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index(){
        $headers = Header::all();
        $feature = Feature::all();
        $partner = Partner::all();
        $about = About::all();
        return view('frontend.home.home', compact('headers','feature','partner', 'about'));
    }
    public function blog(){
        return view('frontend.blog');
    }
    public function blogSingle(){
        return view('frontend.blogSingle');
    }
    public function contact(){
        return view('frontend.contact');
    }
}
