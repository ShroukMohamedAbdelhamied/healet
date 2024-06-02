<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontpages extends Controller
{
    public function home(){
        $title = "Healet Website";
        return view('home', compact('title'));
    }
}
