<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Header;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $headers = Header::all();
        return view('frontend.home.home', compact('headers'));
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
