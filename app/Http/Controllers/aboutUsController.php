<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Materi;
use App\Models\User;
use Illuminate\Http\Request;

class aboutUsController extends Controller
{
    

    public function about()
    {
        $about=About::first();
        $totalMateri = Materi::count();
        $user = User::count();
        return view('About',compact('about','totalMateri','user'));
    }
}
