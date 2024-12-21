<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class aboutUsController extends Controller
{
    

    public function about()
    {
        $about=About::first();
        return view('About',compact('about'));
    }
}
