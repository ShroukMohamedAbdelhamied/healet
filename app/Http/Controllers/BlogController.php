<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(){
        $title = "Blog of Healet";
        return view('blog', compact('title'));
    }
}
