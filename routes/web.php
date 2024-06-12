<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\HeaderController;
use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\HomeController; // Add this line
use App\Http\Controllers\backend\FrontendDynamicController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [FrontendController::class, 'index'])->name('home');
Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('/blogSingle', [FrontendController::class, 'blogSingle'])->name('blogSingle');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');


Route::get('/dashboard', [FrontendDynamicController::class, 'index'])->name('dashboard')->middleware('auth');
Route::resource('/header', HeaderController::class)->middleware('auth');
Route::resource('/contacts', ContactController::class);
