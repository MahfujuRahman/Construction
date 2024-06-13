<?php

namespace App\Http\Controllers\frontend;

use App\Models\Header;
use App\Models\Feature;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index(){
        $headers = Header::all();
        $feature = Feature::all();
        return view('frontend.home.home', compact('headers','feature'));
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
