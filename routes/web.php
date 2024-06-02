<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontpages;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\BlogController;

//Route::get('/', function () {
   // return view('test');
//});

Route::get('/',[Frontpages::class,'home'])->name('home');
Route::get('about', [AboutController::class, 'about'])->name('about');
Route::get('shop', [ShopController::class, 'shop'])->name('shop');
Route::get('blog', [BlogController::class, 'blog'])->name('blog');
