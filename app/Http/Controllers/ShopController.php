<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop(){
        $title = "Shop Healet";
        return view('shop', compact('title'));
    }
}
