<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontViewController extends Controller
{
   public function contact()
    {
        return view('FrontView.contact');
    }
    public function aboutPage()
    {
        return view('FrontView.about');
    }
}
