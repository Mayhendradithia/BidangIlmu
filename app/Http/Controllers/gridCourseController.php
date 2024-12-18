<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class gridCourseController extends Controller
{
    

    public function gridCourse()
    {
        // Ambil semua data materi beserta kategori
        $materi = Materi::with('kategori')->get();
    
        // Kirim data ke view
        return view('gridCourse', compact('materi'));
    }
    

}
