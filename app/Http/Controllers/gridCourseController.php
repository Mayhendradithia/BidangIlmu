<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Materi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class gridCourseController extends Controller
{
    

    public function gridCourse(Request $request)
    {
        // Ambil semua kategori
        $kategori = Kategori::all();
        
        // Ambil semua materi dengan relasi kategori
        $materi = Materi::with('kategori')->get();
        
        // Kirim data kategori dan materi ke view
        $kategoriId = $request->query('kategori');

        // Jika ada kategori yang dipilih, filter materi berdasarkan kategori
        if ($kategoriId) {
            $materi = Materi::where('kategori_id', $kategoriId)->get();
        } else {
            $materi = Materi::all();
        }

        return view('gridCourse', compact('materi', 'kategori'));
    }


   

    

}
